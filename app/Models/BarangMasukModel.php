<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangMasukModel extends Model
{
  protected $table = 'barang_masuk';
  protected $primaryKey = 'id_masuk';
  protected $allowedFields = ['id_masuk', 'bapb', 'tgl_masuk', 'kode_barang', 'jml_masuk', 'ket_masuk'];

  public function getId($id_masuk = false)
  {
    $db = \Config\Database::connect();
    $query = $db->query("SELECT barang_masuk.id_masuk, barang_masuk.bapb, barang_masuk.tgl_masuk, barang_masuk.kode_barang, barang.nama_barang, barang_masuk.jml_masuk, satuan.nama_satuan, barang_masuk.ket_masuk 
                          FROM barang 
                          INNER JOIN barang_masuk
                          ON barang.kode_barang = barang_masuk.kode_barang
                          INNER JOIN satuan
                          ON satuan.id_satuan = barang.id_satuan;");
    $results = $query->getResultArray();

    if ($id_masuk == false) {
        // return $this->findAll();
        return $results;
    }

    return $this->where(['id_masuk' => $id_masuk])->first();
  }
}