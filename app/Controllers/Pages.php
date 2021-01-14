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
        // echo view('layout/header', $data);
        // echo view('layout/footer');
        // echo view('layout/navbar');
        echo view('pages/dashboard', $data);
        // echo view('layout/sidebar');
    }

    public function dokumentasi()
    {
        $data = [
            'judul' => 'Dokumentasi | Warkop'
        ];
        // return view('welcome_message');
        // echo "hello word!";
        // echo view('layout/header', $data);
        // echo view('layout/footer');
        // echo view('layout/navbar');
        // echo view('layout/sidebar');
        echo view('pages/pendapatan', $data);
    }

    public function menu()
    {
        $data = [
            'judul' => 'Menu | Warkop'
        ];
        // return view('welcome_message');
        // echo "hello word!";
        // echo view('layout/header', $data);
        // echo view('layout/footer');
        // echo view('layout/navbar');
        // echo view('layout/sidebar');

        $db      = \Config\Database::connect();
        $builder = $db->table('minuman');
        $builder->select('minuman_id, minuman_nama, minuman_image, minuman_price');
        $builder->where('minuman_stock != 0');
        $query   = $builder->get();

        $data['minuman'] = $query->getResult();

        $db      = \Config\Database::connect();
        $builder = $db->table('makanan');
        $builder->select('makanan_id, makanan_nama, makanan_image, makanan_price');
        $builder->where('makanan_stock != 0');
        $query   = $builder->get();

        $data['makanan'] = $query->getResult();

        echo view('pages/menu', $data);
    }

    public function makanan()
    {
        $data = [
            'judul' => 'Makanan | Warkop'
        ];
        // return view('welcome_message');
        // echo "hello word!";
        // echo view('layout/header', $data);
        // echo view('layout/footer');
        // echo view('layout/navbar');
        // echo view('layout/sidebar');

        $db      = \Config\Database::connect();
        $builder = $db->table('makanan');
        $builder->select('makanan_id, makanan_nama, makanan_image, makanan_stock');
        $query   = $builder->get();

        $data['makanan'] = $query->getResult();
        echo view('pages/stock/makanan', $data);
    }

    public function minuman()
    {
        $data = [
            'judul' => 'Minuman | Warkop'
        ];
        // return view('welcome_message');
        // echo "hello word!";
        // echo view('layout/header', $data);
        // echo view('layout/footer');
        // echo view('layout/navbar');
        // echo view('layout/sidebar');

        $db      = \Config\Database::connect();
        $builder = $db->table('minuman');
        $builder->select('minuman_id, minuman_nama, minuman_image, minuman_stock');
        $query   = $builder->get();

        $data['minuman'] = $query->getResult();

        echo view('pages/stock/minuman', $data);
    }
    //--------------------------------------------------------------------

}
