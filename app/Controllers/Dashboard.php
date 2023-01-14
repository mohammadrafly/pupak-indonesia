<?php

namespace App\Controllers;

use App\Models\Admin;
use App\Models\Tanaman;
use App\Models\PupukObat;
use App\Models\Pesan;
use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $admin = new Admin();
        $tanaman = new Tanaman();
        $pupuk = new PupukObat();
        $pesan = new Pesan();
        $data = [
            'pages' => 'Dashboard',
            'tanaman' => $tanaman->countAllResults(),
            'user' => $admin->countAllResults(),
            'pupuk' => $pupuk->countAllResults(),
            'pesan' => $pesan->countAllResults(),
        ];
        return view('page/admin/index', $data);
    }
    //Profile
    public function dataProfile($username)
    {
        $model = new Admin();
        $data = [
            'pages' => 'Profile',
            'content' => $model->where('username', $username)->first(),
        ];
        return view('page/admin/profile', $data);
    }

    public function updateProfile()
    {
        $model = new Admin();
        $id = $this->request->getVar('id_admin');
        $data = [
            'nama_admin' => $this->request->getVar('nama_admin'),
            //'username' => $this->request->getVar('username'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        $model->update($id, $data);
        session()->setFlashData('success','Berhasil update profile');
        return redirect()->to('dashboard/profile/'.session()->get('username'));
    }

    public function updatePassword()
    {
        if (!$this->validate([
            'password_baru' => [
                'rules' => 'required|min_length[4]|max_length[50]',
                'errors' => [
                    'required' => 'Password harus diisi',
                    'min_length' => 'Password minimal 4 Karakter',
                    'max_length' => 'Password maksimal 50 Karakter',
                ]
            ],
            'password_baru_konf' => [
                'rules' => 'matches[password_baru]',
                'errors' => [
                    'matches' => 'Konfirmasi password tidak sesuai dengan password di atas',
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $model = new Admin();
        $password_lama = $this->request->getVar('password_lama');
        $username = session()->get('username');
        $checkpoint = $model->where(['username' => $username,])->first();
        if (password_verify($password_lama, $checkpoint['password'])) {
            $data = [
                'password' => password_hash($this->request->getVar('password_baru'), PASSWORD_DEFAULT),
                'updated_at' => date('Y-m-d H:i:s'),  
            ];
            $id = $this->request->getVar('id_admin');
            $model->update($id, $data);
            session()->setFlashData('success','Berhasil update password');
            return redirect()->to('dashboard/profile/'.session()->get('username'));
        } else {
            session()->setFlashData('error','Password tidak sama!');
            return redirect()->to('dashboard/profile/'.session()->get('username'));
        }
    }
    //User
    public function dataAdmin()
    {
        $model = new Admin();
        $data = [
            'pages' => 'Data User',
            'content' => $model->findAll(),
        ];
        return view('page/admin/user', $data);
    }

    public function saveUser()
    {
        $model = new Admin();
        $data = [
            'nama_admin' => $this->request->getVar('nama_admin'),
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
        ];
        //dd($data);
        $model->save($data);
        session()->setFlashData('success','Berhasil menambah tanaman');
        return redirect()->to('dashboard/user');
    }
    //Tanaman
    public function dataTanaman()
    {
        $model = new Tanaman();
        $data = [
            'pages' => 'Data Tanaman',
            'content' => $model->findAll(),
        ];
        return view('page/admin/tanaman', $data);
    }

    public function saveTanaman()
    {
        if (!$this->validate([
            'picture' => [
                'rules' => 'mime_in[picture,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'mime_in'  => 'Maaf file yang anda upload memiliki format yang tidak diizinkan! silahkan upload dengan format JPG, JPEG, dan PNG.',
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $img    = $this->request->getFile('picture');
        $randName = $img->getRandomName();
        $model = new Tanaman();
        if ($img->isValid() && ! $img->hasMoved()) {
            $img->move('tanaman',$randName);
            $model->insert([
                'nama_tanaman' => $this->request->getVar('nama_tanaman'),
                'jenis_tanaman' => $this->request->getVar('jenis_tanaman'),
                'picture' => $randName,
            ]);
            session()->setFlashData('success','Berhasil menambah tanaman');
            return redirect()->to('dashboard/tanaman');
        } else {
            $model->insert([
                'nama_tanaman' => $this->request->getVar('nama_tanaman'),
                'jenis_tanaman' => $this->request->getVar('jenis_tanaman'),
            ]);
            session()->setFlashData('success','Berhasil menambah tanaman');
            return redirect()->to('dashboard/tanaman');
        }
    }

    public function editTanaman($id)
    {
        $model = new Tanaman();
        return $this->response->setJSON([
            'data' => $model->where('id_tanaman', $id)->first(),
        ]);
    }

    public function updateTanaman()
    {
        $model = new Tanaman();
        $id = $this->request->getPost('id');
        $data = [
            'nama_tanaman' => $this->request->getPost('nama_tanaman'),
            'jenis_tanaman' => $this->request->getPost('jenis_tanaman'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        $model->update($id, $data);
        return $this->response->setJSON([
            'isUpdated' => true,
        ]);
    }

    public function deleteTanaman($id)
    {
        $model = new Tanaman();
        $model->where('id_tanaman', $id)->delete($id);
        return $this->response->setJSON([
            'isConfirm' => true,
        ]);
    }
    //PupukObat
    public function dataPupukObat()
    {
        $model = new PupukObat();
        $data = [
            'pages' => 'Data Pupuk',
            'content' => $model->findAll()
        ];
        return view('page/admin/pupukobat', $data);
    }

    public function savePupukObat()
    {
        if (!$this->validate([
            'picture' => [
                'rules' => 'mime_in[picture,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'mime_in'  => 'Maaf file yang anda upload memiliki format yang tidak diizinkan! silahkan upload dengan format JPG, JPEG, dan PNG.',
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $img    = $this->request->getFile('picture');
        $randName = $img->getRandomName();
        $model = new PupukObat();
        if ($img->isValid() && ! $img->hasMoved()) {
            $img->move('pupukobat',$randName);
            $model->insert([
                'nama_pupuk' => $this->request->getVar('nama_pupuk'),
                'jenis_pupuk' => $this->request->getVar('jenis_pupuk'),
                'picture' => $randName,
            ]);
            session()->setFlashData('success','Berhasil menambah pupuk');
            return redirect()->to('dashboard/pupukobat');
        } else {
            $model->insert([
                'nama_pupuk' => $this->request->getVar('nama_pupuk'),
                'jenis_pupuk' => $this->request->getVar('jenis_pupuk'),
            ]);
            session()->setFlashData('success','Berhasil menambah pupuk');
            return redirect()->to('dashboard/pupukobat');
        }
    }

    public function editPupukObat($id)
    {
        $model = new PupukObat();
        return $this->response->setJSON([
            'data' => $model->where('id_pupuk', $id)->first(),
        ]);
    }

    public function updatePupukObat()
    {
        $model = new PupukObat();
        $id = $this->request->getPost('id');
        $data = [
            'nama_pupuk' => $this->request->getPost('nama_pupuk'),
            'jenis_pupuk' => $this->request->getPost('jenis_pupuk'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        $model->update($id, $data);
        return $this->response->setJSON([
            'isUpdated' => true,
        ]);
    }

    public function deletePupukObat($id)
    {
        $model = new PupukObat();
        $model->where('id_pupuk', $id)->delete($id);
        return $this->response->setJSON([
            'isConfirm' => true,
        ]);
    }
    //Pesan
    public function dataPesan()
    {
        $model = new Pesan();
        $data = [
            'pages' => 'Data Pesan',
            'content' => $model->findAll(),
        ];
        return view('page/admin/pesan', $data);
    }
}
