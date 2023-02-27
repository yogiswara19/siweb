<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
        //echo "Hello World!";
    }

    // public function index()
    // {
    //     return view('beranda');
    // }

    // public function index()
    // {
    //     return view('beranda');
    // }

    // public function index()
    // {
    //     echo view('template/header');
    //     echo view('template/topbar');
    //     echo view('template/sidebar');
    //     echo view('beranda');
    //     echo view('template/footer');
    // }

    public function coba($nama = null, $usia = null)
    {
        echo "Nama saya adalah $nama, usia saya adalah $usia tahun";
    }

    // public function coba2($uuid)
    // {
    //     echo "UUID adalah $uuid";
    // }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function datdir()
    {
        return view('datdir');
    }

    public function exp()
    {
        return view('exp');
    }
}
