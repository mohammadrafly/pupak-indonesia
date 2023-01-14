<?php

namespace App\Controllers;

use App\Models\Admin;
use App\Controllers\BaseController;

class Auth extends BaseController
{
    private function setUserSession($user)
    {
        session()->set([
            'id_admin' => $user['id_admin'],
            'username' => $user['username'],
            'WesLogin' => true,
            'created_at' => $user['created_at'],
            'updated_at' => $user['updated_at'],
        ]);
        return true;
    }

    public function SignIn()
    {
        $model = new Admin();
        if ($this->request->isAJAX()) {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $checkpointData = $model->where('username', $username)->first();
            if (!empty($checkpointData)) {
                if (password_verify($password, $checkpointData['password'])) {
                    $this->setUserSession($checkpointData);
                    return $this->response->setJSON([
                        'status' => true,
                        'icon' => 'success',
                        'title' => 'Login Success!',
                        'text' => 'You will be redirected in 3 seconds.',
                    ]);
                } else {
                    return $this->response->setJSON([
                        'status' => false,
                        'icon' => 'error',
                        'title' => 'Oops....',
                        'text' => 'Password is wrong!',
                    ]);
                }
            } else {
                return $this->response->setJSON([
                    'status' => false,
                    'icon' => 'error',
                    'title' => 'Oops....',
                    'text' => 'Username doenst exist!',
                ]);
            }
        }
        return view('page/auth');
    }

    public function SignOut()
    {
        session()->destroy();
        return $this->response->setJSON([
            'status' => true,
            'icon' => 'success',
            'title' => 'Logout Success!',
            'text' => 'You will be redirected in 3 seconds.'
        ]);
    }
}
