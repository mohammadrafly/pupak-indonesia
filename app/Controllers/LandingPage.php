<?php

namespace App\Controllers;

use App\Models\PupukObat;
use App\Models\Pesan;
use App\Controllers\BaseController;

class LandingPage extends BaseController
{
    public function index()
    {
        $model = new PupukObat();
        $data = [
            'content' => $model->limit(6)->findAll(),
        ];
        //dd($data);
        return view('page/landing/index', $data);
    }

    public function singleProduct($id)
    {
        $model = new PupukObat();
        $data = [
            'content' => $model->where('id_pupuk', $id)->first()
        ];
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
        $model = new PupukObat();
        $keyword = $this->request->getVar('keyword');
        $data = [
            'content' => $model->getTheKeyword($keyword)->getResult(),
        ];
        //dd($model->getTheKeyword($keyword)->getResult());    
        return view('page/landing/search_result', $data);
    }
}
