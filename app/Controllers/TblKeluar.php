<?php

namespace App\Controllers;

use App\Models\BarangKeluarModel;
use App\Models\BarangModel;
use App\Models\SatuanModel;

class TblKeluar extends BaseController
{
	protected $barangKeluarModel;
	protected $barangModel;
	protected $satuanModel;

	public function __construct()
	{
		$this->barangKeluarModel = new BarangKeluarModel();
		$this->barangModel = new BarangModel();
		$this->satuanModel = new SatuanModel();
	}

	public function index()
	{
		$data = [
			'tittle' => 'Tabel Barang Keluar &mdash; Sentiong',
			'barang_keluar' => $this->barangKeluarModel->getId()
		];
		return view('tabels/tblBarangKeluar', $data);
	}

	public function form()
	{
		$data = [
			'tittle' => 'Form Barang Keluar &mdash; Sentiong',
			'barang_keluar' => $this->barangModel->getId(),
			'barang' => $this->barangModel->getId(),
			'satuan' => $this->satuanModel->findAll()
		];
		return view('forms/formBarangkeluar', $data);
	}

	public function save()
	{
		// dd($this->request->getVar());
		$bpm = $this->request->getVar('bpm');
		$tgl_keluar = $this->request->getVar('tglKeluar');
		$kode_barang = $this->request->getVar('kodeBarang');
		$jml_keluar = $this->request->getVar('jmlKeluar');
		$ket_keluar = $this->request->getVar('ketKeluar');
		
		$data = [
			'bpm' => $bpm,
			'tgl_keluar' => $tgl_keluar,
			'kode_barang' => $kode_barang,
			'jml_keluar' => $jml_keluar,
			'ket_keluar' => $ket_keluar,
		];

		// dd($data);
		$this->barangKeluarModel->insert($data);

		session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!');
		return redirect()->to('/tblkeluar');
	}

	public function delete($id_keluar)
	{
		$this->barangKeluarModel->delete($id_keluar);

		session()->setFlashdata('pesan', 'Data Berhasil Dihapus!');
		return redirect()->to('/tblkeluar');
	}

	public function edit($id_keluar)
	{
		$data = [
			'tittle' => 'Form Edit Barang &mdash; Sentiong',
			'barang' => $this->barangModel->getId(),
			'barang_keluar' => $this->barangKeluarModel->getId($id_keluar),
			'satuan' => $this->satuanModel->findAll()
		];
		// dd($data);
		return view('forms/formEdtBarangKeluar', $data);
	}

	public function update($id_keluar)
	{
		$this->barangKeluarModel->save([
			'id_keluar' 		=> $id_keluar,
			'bapb' 				=> $this->request->getVar('bapb'),
			'tgl_keluar' 	=> $this->request->getVar('tglKeluar'),
			// 'kode_barang' => $this->request->getVar('kodeBarang'),
			'jml_keluar' 	=> $this->request->getVar('jmlKeluar'),
			'ket_keluar' 	=> $this->request->getVar('ketKeluar')
		]);

		session()->setFlashdata('pesan', 'Data Berhasil Diubah!');
		return redirect()->to('/tblkeluar');
	}
}
