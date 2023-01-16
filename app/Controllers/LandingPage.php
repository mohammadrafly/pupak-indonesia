<?php

namespace App\Controllers;

use App\Models\PupukObat;
use App\Models\Pesan;
use App\Models\TanamanGroup;
use App\Controllers\BaseController;

class LandingPage extends BaseController
{
    public function index()
    {
        helper('number');
        $model = new PupukObat();
        $data = [
            'content' => $model->paginate(6, 'pupuk'),
            'pager' => $model->pager,
        ];
        //dd($data);
        return view('page/landing/index', $data);
    }

    public function singleProduct($id)
    {
        helper('number');
        $model = new PupukObat();
        $group = new TanamanGroup();
        $data = [
            'content' => $model->where('id_pupuk', $id)->first(),
            'tanaman' => $group->joinTanamanPupuk($id)->getResult()
        ];
        //dd($data);
        return view('page/landing/single_product', $data);
    }

    public function sendMessage()
    {
        $model = new Pesan();
        $data = [
            'email_user' => $this->request->getVar('email_user'),
            'pertanyaan_user' => $this->request->getVar('pertanyaan_user')
        ];
        $model->save($data);
        return $this->response->setJSON([
            'isSaved' => true,
        ]);
    }

    public function Search()
    {
        helper('number');
        $model = new PupukObat();
        $keyword = $this->request->getVar('keyword');
        $data = [
            'content' => $model->getTheKeyword($keyword)->getResult(),
        ];
        //dd($data);
        return view('page/landing/search_result', $data);
    }
}
