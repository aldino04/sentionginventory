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
		// $barang = $this->barangModel->findAll();
		$data = [
			'tittle' => 'Tabel Barang &mdash; Sentiong',
			'barang' => $this->barangModel->getId()
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

	public function delete($id)
	{
		$this->barangModel->delete($id);

		session()->setFlashdata('pesan', 'Data Berhasil Dihapus!');
		return redirect()->to('/tabel/tblbarang');
	}

	public function formEdtTblBarang($id)
	{
		$data = [
			'tittle' => 'Form Edit Barang &mdash; Sentiong',
			'barang' => $this->barangModel->getId($id)
		];
		return view('forms/formEdtTblBarang', $data);
	}

	public function formUpdateTblBarang($id)
	{
		$this->barangModel->save([
			'id' => $id,
			'kode_barang' => $this->request->getVar('kodeBarang'),
			'nama_barang' => $this->request->getVar('namaBarang'),
			'stok' => $this->request->getVar('stok'),
			'satuan' => $this->request->getVar('satuan')
		]);

		session()->setFlashdata('pesan', 'Data Berhasil Diubah!');
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
