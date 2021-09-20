<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\SatuanModel;

class TblBarang extends BaseController
{
	protected $barangModel;
	protected $satuanModel;
	
	public function __construct()
	{
		$this->barangModel = new BarangModel();
		$this->satuanModel = new SatuanModel();
	}

// Controller Tabel Barang
	public function index()
	{ 
		// $barang = $this->barangModel->findAll();
		$data = [
			'tittle' => 'Tabel Barang &mdash; Sentiong',
			'barang' => $this->barangModel->getId(),
			'satuan' => $this->satuanModel->findAll()
		];

		return view('tabels/tblBarang', $data);
	}

	public function save()
	{
		// dd($this->request->getVar());
		// $this->barangModel->save([
		// 	'kode_barang' => $this->request->getVar('kodeBarang'),
		// 	'nama_barang' => $this->request->getVar('namaBarang'),
		// 	'stok' => $this->request->getVar('stok'),
		// 	'id_satuan' => $this->request->getVar('satuan')
		// ]);

		$kode_barang = $this->request->getVar('kodeBarang');
		$nama_barang = $this->request->getVar('namaBarang');
		$stok = $this->request->getVar('stok');
		$id_satuan = $this->request->getVar('satuan');
		
		$data = [
			'kode_barang' => $kode_barang,
			'nama_barang' => $nama_barang,
			'stok' 				=> $stok,
			'id_satuan' 	=> $id_satuan
		];

		$this->barangModel->insert($data);

		session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!');
		return redirect()->to('/tblbarang');
	}

	public function delete($kode_barang)
	{
		$this->barangModel->delete($kode_barang);

		session()->setFlashdata('pesan', 'Data Berhasil Dihapus!');
		return redirect()->to('/tblbarang');
	}

	public function edit($kode_barang)
	{
		$data = [
			'tittle' => 'Form Edit Barang &mdash; Sentiong',
			'barang' => $this->barangModel->getId($kode_barang),
			'satuan' => $this->satuanModel->findAll()
		];
		// dd($data);
		return view('forms/formEdtTblBarang', $data);
	}

	public function update($kode_barang)
	{
		$this->barangModel->save([
			// 'id_barang' => $id_barang,
			'kode_barang' => $kode_barang,
			'kode_barang' => $this->request->getVar('kodeBarang'),
			'nama_barang' => $this->request->getVar('namaBarang'),
			'stok' 				=> $this->request->getVar('stok'),
			'id_satuan' 	=> $this->request->getVar('satuan')
		]);

		session()->setFlashdata('pesan', 'Data Berhasil Diubah!');
		return redirect()->to('/tblbarang');
	}
// End Controller Tabel Barang

	public function tblBarangKeluar()
	{
		$data = [
			'tittle' => 'Tabel Barang Keluar &mdash; Sentiong'
		];
		return view('tabels/tblBarangKeluar', $data);
	}
}
