<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangMasukModel extends Model
{
  protected $table = 'barang_masuk';
  protected $primaryKey = 'id_masuk';
  protected $allowedFields = ['id_masuk', 'bapb', 'tgl_masuk', 'kode_barang', 'jml_masuk', 'ket_masuk', 'id_user'];

  public function getId($id_masuk = false)
  {
    $db = \Config\Database::connect();
    $builder = $db->table('barang');

    $builder->select('id_masuk, bapb, tgl_masuk, barang_masuk.kode_barang, nama_barang, jml_masuk, nama_satuan, ket_masuk');
    $builder->join('barang_masuk', 'barang_masuk.kode_barang = barang.kode_barang', 'inner');
    $builder->join('satuan', 'satuan.id_satuan = barang.id_satuan', 'inner');
    $builder->orderBy('id_masuk', 'DESC');
    $query = $builder->get()->getResultArray();

    if ($id_masuk == false) {
        // return $this->findAll();
        return $query;
    }

    // return $this->where(['id_masuk' => $id_masuk])->first();
    return $this->select('*')->join('barang', 'barang.kode_barang = barang_masuk.kode_barang', 'inner')->join('satuan', 'satuan.id_satuan = barang.id_satuan', 'inner')->join('users', 'users.id = barang_masuk.id_user', 'inner')->where(['id_masuk' => $id_masuk])->first();
  }

  public function getBapb($bapb)
  {
    $db = \Config\Database::connect();
    $builder = $db->table('barang_masuk');
    $builder->select('id_masuk, bapb, tgl_masuk, barang_masuk.kode_barang, nama_barang, nama_satuan, jml_masuk, ket_masuk');
    $builder->join('barang', 'barang.kode_barang = barang_masuk.kode_barang', 'inner');
    $builder->join('satuan', 'satuan.id_satuan = barang.id_satuan', 'inner');
    $builder->where('bapb', $bapb);
    $noBapb = $builder->get()->getResultArray();

    return $noBapb;
  }
}