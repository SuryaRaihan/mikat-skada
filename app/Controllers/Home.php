<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('header/header-index');
        echo view('page/index');
        echo view('footer/footer');
    }

    public function aboutmika()
    {

        echo view('header/header_tentang_mika');
        echo view('page/about_mika');
        echo view('footer/footer');
    }
    
    public function kelas()
    {

        echo view('header/header-index');
        echo view('page/kelas-mikat');
        echo view('footer/footer');
    }

    public function blog()
    {

        echo view('header/header-index');
        echo view('page/blog');
        echo view('footer/footer');
    }
}

