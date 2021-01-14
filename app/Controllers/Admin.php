<?php

namespace App\Controllers;

use App\Models\MakananModel;
use App\Models\MinumanModel;
use Config\Validation;

class Admin extends BaseController
{
    protected $makananModel;
    protected $minumanModel;
    public function __construct()
    {
        $this->makananModel = new MakananModel();
        $this->minumanModel = new MinumanModel();
    }

    public function create_food()
    {
        // session();
        $data = [
            'judul' => 'Form Tambah Makanan',
            'validation' => \Config\Services::validation()
        ];
        echo view('/admin/create_food', $data);
    }

    public function save_makanan()
    {
        if (!$this->validate([
            'nama_makanan' => 'required|is_unique[makanan.makanan_nama]',
            'gambar_makanan' => 'uploaded[gambar_makanan]|is_image[gambar_makanan]'
        ])) {
            // $validation = \Config\Services::validation();

            // return redirect()->to('/admin/create_food')->withInput()->with('validation', $validation);
            return redirect()->to('/admin/create_food')->withInput();
        };

        $upload_image = $this->request->getFile('gambar_makanan');
        $upload_image->move('assets/images/makanan');
        $nama_image = $upload_image->getName();
        // dd('berhasil');
        $this->makananModel->save([
            'makanan_nama' => $this->request->getVar('nama_makanan'),
            'makanan_price' => $this->request->getVar('harga_makanan'),
            'makanan_stock' => $this->request->getVar('stock_makanan'),
            'makanan_image' => $nama_image,
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/pages/makanan');
    }

    public function edit_food($id)
    {
        // session();
        $data = [
            'judul' => 'Form Edit Makanan',
            'validation' => \Config\Services::validation(),
            'makanan' => $this->makananModel->getMakanan($id)
        ];
        echo view('/admin/edit_food', $data);
    }

    public function update_makanan($id)
    {
        if (!$this->validate([
            //     // 'nama_makanan' => 'required|is_unique[makanan.makanan_nama]'
            'gambar_makanan' => 'is_image[gambar_makanan]'
        ])) {
            // $validation = \Config\Services::validation();

            //     // return redirect()->to('/admin/edit_food')->withInput()->with('validation', $validation);
            return redirect()->to('/admin/edit_food')->withInput();
        };
        $upload_image = $this->request->getFile('gambar_makanan');
        if ($upload_image->getError() == 4) {
            $nama_image =  $this->request->getVar('image_lama');
        } else {
            $upload_image->move('assets/images/makanan');
            $nama_image = $upload_image->getName();
        }
        $this->makananModel->save([
            'makanan_id' => $this->request->getVar('makanan_id'),
            'makanan_nama' => $this->request->getVar('nama_makanan'),
            'makanan_price' => $this->request->getVar('harga_makanan'),
            'makanan_stock' => $this->request->getVar('stock_makanan'),
            'makanan_image' => $nama_image,
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/pages/makanan');
    }

    public function delete_food($id)
    {
        $this->makananModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/pages/makanan');
    }

    public function create_drink()
    {
        // session();
        $data = [
            'judul' => 'Form Tambah Minuman',
            'validation' => \Config\Services::validation()
        ];
        echo view('/admin/create_drink', $data);
    }

    public function save_minuman()
    {
        if (!$this->validate([
            'nama_minuman' => 'required|is_unique[minuman.minuman_nama]',
            'gambar_minuman' => 'uploaded[gambar_minuman]|is_image[gambar_minuman]'
        ])) {
            // $validation = \Config\Services::validation();

            return redirect()->to('/admin/create_drink')->withInput();
        };
        $upload_image = $this->request->getFile('gambar_minuman');
        $upload_image->move('assets/images/minuman');
        $nama_image = $upload_image->getName();
        $this->minumanModel->save([
            'minuman_nama' => $this->request->getVar('nama_minuman'),
            'minuman_price' => $this->request->getVar('harga_minuman'),
            'minuman_stock' => $this->request->getVar('stock_minuman'),
            'minuman_image' => $nama_image,
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/pages/minuman');
    }

    public function edit_drink($id)
    {
        // session();
        $data = [
            'judul' => 'Form Edit Minuman',
            'validation' => \Config\Services::validation(),
            'minuman' => $this->minumanModel->getMinuman($id)
        ];
        echo view('/admin/edit_drink', $data);
    }

    public function update_minuman($id)
    {
        if (!$this->validate([
            //     'nama_minuman' => 'required|is_unique[minuman.minuman_nama]'
            'gambar_minuman' => 'is_image[gambar_minuman]'
        ])) {
            //     $validation = \Config\Services::validation();

            //     return redirect()->to('/admin/edit_drink/' . $this->request->getVar('minuman_id'))->withInput()->with('validation', $validation);
        };
        $upload_image = $this->request->getFile('gambar_minuman');
        if ($upload_image->getError() == 4) {
            $nama_image =  $this->request->getVar('image_lama');
        } else {
            $upload_image->move('assets/images/minuman');
            $nama_image = $upload_image->getName();
        }
        $this->minumanModel->save([
            'minuman_id' => $this->request->getVar('minuman_id'),
            'minuman_nama' => $this->request->getVar('nama_minuman'),
            'minuman_price' => $this->request->getVar('harga_minuman'),
            'minuman_stock' => $this->request->getVar('stock_minuman'),
            'minuman_image' => $nama_image,
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/pages/minuman');
    }

    public function delete_drink($id)
    {
        $this->minumanModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/pages/minuman');
    }
    //--------------------------------------------------------------------

}
