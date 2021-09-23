<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangKeluarModel extends Model
{
  protected $table = 'barang_keluar';
  protected $primaryKey = 'id_keluar';
  protected $allowedFields = ['id_keluar', 'bpm', 'tgl_keluar', 'kode_barang', 'jml_keluar', 'ket_keluar', 'fotoKeluar'];

  public function getId($id_keluar = false)
  {
    $db = \Config\Database::connect();
    $query = $db->query("SELECT barang_keluar.id_keluar, barang_keluar.bpm, barang_keluar.tgl_keluar, barang_keluar.kode_barang, barang.nama_barang, barang_keluar.jml_keluar, satuan.nama_satuan, barang_keluar.ket_keluar 
                          FROM barang 
                          INNER JOIN barang_keluar
                          ON barang.kode_barang = barang_keluar.kode_barang
                          INNER JOIN satuan
                          ON satuan.id_satuan = barang.id_satuan;");
    $results = $query->getResultArray();

    if ($id_keluar == false) {
        // return $this->findAll();
        return $results;
    }

    return $this->where(['id_keluar' => $id_keluar])->first();
  }
}