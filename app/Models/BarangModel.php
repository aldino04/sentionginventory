<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
  protected $table = 'barang';
  protected $primaryKey = 'kode_barang';
  protected $allowedFields = ['kode_barang', 'nama_barang', 'stok', 'id_satuan', 'sampul'];

  public function getId($kode_barang = false)
  {
    $db = \Config\Database::connect();

    $builder = $db->table('barang');
    $builder->select('*');
    $builder->join('satuan', 'satuan.id_satuan = barang.id_satuan', 'inner');
    $query = $builder->get()->getResultArray();

    if ($kode_barang == false) {
        // return $this->findAll();
        return $query;
    }
    
    return $this->select('*')->join('satuan', 'satuan.id_satuan = barang.id_satuan', 'inner')->where(['kode_barang' => $kode_barang])->first();
    // return $this->where(['kode_barang' => $kode_barang])->first();
  }
}