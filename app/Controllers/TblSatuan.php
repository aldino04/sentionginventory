<?php

namespace App\Controllers;

use App\Models\SatuanModel;

class TblSatuan extends BaseController
{
  protected $satuanModel;

  public function __construct()
  {
    $this->satuanModel = new SatuanModel();
  }

	public function index()
	{
		$data = [
			'tittle' => 'Tabel Satuan &mdash; Sentiong',
      'satuan' => $this->satuanModel->getId(),
			'validation' => \Config\Services::validation()
		];
		return view('tabels/tblSatuan', $data);
	}

  public function save()
	{
		// validasi
		if(!$this->validate([
			'namaSatuan' => 'required|is_unique[satuan.nama_satuan]'
		])){
			// $validation = \Config\Services::validation();
			return redirect()->to('tblsatuan')->withInput();
		}

		$this->satuanModel->save([
			'id_satuan' => $this->request->getVar('idSatuan'),
			'nama_satuan' => $this->request->getVar('namaSatuan')
		]);

		session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!');
		return redirect()->to('/tblsatuan');
	}

	public function delete($id_satuan)
	{
		$this->satuanModel->delete($id_satuan);

		session()->setFlashdata('pesan', 'Data Berhasil Dihapus!');
		return redirect()->to('/tblsatuan');
	}

	public function edit($id_satuan)
	{
		$data = [
			'tittle' => 'Form Edit Satuan &mdash; Sentiong',
			'satuan' => $this->satuanModel->getId($id_satuan)
		];
		return view('forms/formEdtTblSatuan', $data);
	}

	public function update($id_satuan)
	{
		$this->satuanModel->save([
			'id_satuan' => $id_satuan,
			'nama_satuan' => $this->request->getVar('namaSatuan')
		]);

		session()->setFlashdata('pesan', 'Data Berhasil Diubah!');
		return redirect()->to('/tblsatuan');
	}
}
