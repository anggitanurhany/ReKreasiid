<?php

namespace App\Models;

use CodeIgniter\Model;

class KatalogModel extends Model
{
    // Nama tabel sesuai dengan file SQL Anda
    protected $table            = 'katalog';
    protected $primaryKey       = 'id_produk';
    
    // Mengizinkan kolom ini untuk diolah (jika nanti ingin fitur tambah/edit)
    protected $allowedFields    = ['nama_produk', 'foto_produk', 'harga_produk', 'stok_produk'];

    // Return type array agar mudah dibaca di view
    protected $returnType       = 'array';
}