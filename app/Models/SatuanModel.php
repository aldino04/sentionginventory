<?php

namespace App\Models;

use CodeIgniter\Model;

class SatuanModel extends Model
{
  protected $table = 'satuan';
  protected $primaryKey = 'id_satuan';
  protected $allowedFields = ['id_satuan', 'nama_satuan'];

  public function getId($id_satuan = false)
  {
    if ($id_satuan == false) {
        return $this->findAll();
    }

    return $this->where(['id_satuan' => $id_satuan])->first();
  }
}