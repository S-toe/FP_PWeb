<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Home | Warkop'
        ];

        // $name = \Config\Database::connect();
        // return view('welcome_message');
        // echo "hello word!";
        echo view('layout/header', $data);
        echo view('layout/footer');
        echo view('layout/navbar');
        echo view('pages/dashboard');
        echo view('layout/sidebar');
    }

    public function pendapatan()
    {
        $data = [
            'judul' => 'Pendapatan | Warkop'
        ];
        // return view('welcome_message');
        // echo "hello word!";
        echo view('layout/header', $data);
        echo view('layout/footer');
        echo view('layout/navbar');
        echo view('layout/sidebar');
        echo view('pages/pendapatan');
    }

    public function menu()
    {
        $data = [
            'judul' => 'Menu | Warkop'
        ];
        // return view('welcome_message');
        // echo "hello word!";
        echo view('layout/header', $data);
        echo view('layout/footer');
        echo view('layout/navbar');
        echo view('layout/sidebar');
        echo view('pages/menu');
    }

    public function makanan()
    {
        $data = [
            'judul' => 'Makanan | Warkop'
        ];
        // return view('welcome_message');
        // echo "hello word!";
        echo view('layout/header', $data);
        echo view('layout/footer');
        echo view('layout/navbar');
        echo view('layout/sidebar');
        echo view('pages/stock/makanan');
    }

    public function minuman()
    {
        $data = [
            'judul' => 'Minuman | Warkop'
        ];
        // return view('welcome_message');
        // echo "hello word!";
        echo view('layout/header', $data);
        echo view('layout/footer');
        echo view('layout/navbar');
        echo view('layout/sidebar');
        echo view('pages/stock/minuman');
    }
    //--------------------------------------------------------------------

}
