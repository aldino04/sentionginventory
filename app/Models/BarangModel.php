<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
  protected $table = 'barang';
  protected $allowedFields = ['kode_barang', 'nama_barang', 'stok', 'satuan'];

  public function getId($id = false)
  {
    if ($id == false) {
        return $this->findAll();
    }

    return $this->where(['id' => $id])->first();
  }
}