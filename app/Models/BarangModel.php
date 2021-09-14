<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
  protected $table = 'barang';
  protected $primaryKey = 'kode_barang';
  protected $allowedFields = ['kode_barang', 'nama_barang', 'stok', 'id_satuan'];

  public function getId($kode_barang = false)
  {
    $db = \Config\Database::connect();
    $query = $db->query("SELECT id_barang, kode_barang, nama_barang, stok, id_satuan, nama_satuan FROM barang INNER JOIN satuan USING (id_satuan) ORDER BY `id_barang` ASC;") ;
    $results = $query->getResultArray();

    if ($kode_barang == false) {
        // return $this->findAll();
        return $results;
    }

    return $this->where(['kode_barang' => $kode_barang])->first();
  }
}