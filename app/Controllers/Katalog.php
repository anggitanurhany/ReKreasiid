<?php

namespace App\Controllers;

use App\Models\KatalogModel;

class Katalog extends BaseController
{
    public function index()
    {
        // Panggil model yang baru dibuat
        $model = new KatalogModel();

        // Ambil semua data dari tabel katalog
        $data['produk_list'] = $model->findAll();

        // Tampilkan view dengan membawa data
        return view('katalog/index', $data);
    }
}