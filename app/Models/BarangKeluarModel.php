<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangKeluarModel extends Model
{
  protected $table = 'barang_keluar';
  protected $primaryKey = 'id_keluar';
  protected $allowedFields = ['id_keluar', 'bpm', 'tgl_keluar', 'kode_barang', 'jml_keluar', 'ket_keluar', 'fotoKeluar', 'id_user'];

  public function getId($id_keluar = false)
  {
    $db = \Config\Database::connect();
    $builder = $db->table('barang');

    $builder->select('id_keluar, bpm, tgl_keluar, nama_barang, jml_keluar, nama_satuan, ket_keluar, fotoKeluar, id_user, fullname');
    $builder->join('barang_keluar', 'barang_keluar.kode_barang = barang.kode_barang', 'inner');
    $builder->join('satuan', 'satuan.id_satuan = barang.id_satuan', 'inner');
    $builder->join('users', 'users.id = barang_keluar.id_user', 'inner');
    $builder->orderBy('id_keluar', 'DESC');
    $query = $builder->get()->getResultArray();

    if ($id_keluar == false) {
        // return $this->findAll();
        return $query;
    }

    return $this->select('*')->join('barang', 'barang.kode_barang = barang_keluar.kode_barang', 'inner')->join('satuan', 'satuan.id_satuan = barang.id_satuan', 'inner')->join('users', 'users.id = barang_keluar.id_user', 'inner')->where(['id_keluar' => $id_keluar])->first();
  }
}