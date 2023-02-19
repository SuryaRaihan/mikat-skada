<?php

namespace App\Controllers;
use App\Models\UsersModel;
class Mika extends BaseController
{
    public function index()
    {

        $model = new UsersModel();
        $data = $model->find();
        $tampil = [

            'data' => $data

        ]; 

        echo view('headerlogin/header-index');
        echo view('sudahlogin/index', $tampil);
        echo view('footer/footer');
    }

    
}

