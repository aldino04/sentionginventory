<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Tabel extends BaseController
{
	protected $barangModel;
	public function __construct()
	{
		$this->barangModel = new BarangModel();
	}

// Controller Tabel Barang
	public function tblBarang()
	{ 
		$barang = $this->barangModel->findAll();
		$data = [
			'tittle' => 'Tabel Barang &mdash; Sentiong',
			'barang' => $barang
		];

		return view('tabels/tblBarang', $data);
	}

	public function save()
	{
		$this->barangModel->save([
			'kode_barang' => $this->request->getVar('kodeBarang'),
			'nama_barang' => $this->request->getVar('namaBarang'),
			'stok' => $this->request->getVar('stok'),
			'satuan' => $this->request->getVar('satuan')
		]);

		session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!');
		return redirect()->to('/tabel/tblbarang');
	}
// End Controller Tabel Barang

	public function tblBarangMasuk()
	{ 
		$data = [
			'tittle' => 'Tabel Barang Masuk &mdash; Sentiong'
		];
		return view('tabels/tblBarangMasuk', $data);
	}

	public function tblBarangKeluar()
	{
		$data = [
			'tittle' => 'Tabel Barang Keluar &mdash; Sentiong'
		];
		return view('tabels/tblBarangKeluar', $data);
	}

	public function tblsatuan()
	{
		$data = [
			'tittle' => 'Tabel Satuan &mdash; Sentiong'
		];
		return view('tabels/tblSatuan', $data);
	}
}
