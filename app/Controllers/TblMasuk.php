<?php

namespace App\Controllers;

use App\Models\BarangMasukModel;
use App\Models\BarangModel;
use App\Models\SatuanModel;

class TblMasuk extends BaseController
{
	protected $barangMasukModel;
	protected $barangModel;
	protected $satuanModel;

	public function __construct()
	{
		$this->barangMasukModel = new BarangMasukModel();
		$this->barangModel = new BarangModel();
		$this->satuanModel = new SatuanModel();
	}

	public function index()
	{
		$data = [
			'tittle' => 'Tabel Barang Masuk &mdash; Sentiong',
			'barang_masuk' => $this->barangMasukModel->getId()
		];
		return view('tabels/tblBarangMasuk', $data);
	}

	public function form()
	{
		$data = [
			'tittle' => 'Form Barang Masuk &mdash; Sentiong',
			'barang_masuk' => $this->barangMasukModel->getId(),
			'barang' => $this->barangModel->getId(),
			'satuan' => $this->satuanModel->findAll()
		];
		return view('forms/formBarangMasuk', $data);
	}

	public function save()
	{
		// dd($this->request->getVar());
		$bapb = $this->request->getVar('bapb');
		$tgl_masuk = $this->request->getVar('tglMasuk');
		$kode_barang = $this->request->getVar('kodeBarang');
		$jml_masuk = $this->request->getVar('jmlMasuk');
		$ket_masuk = $this->request->getVar('ketMasuk');
		
		$data = [
			'bapb' => $bapb,
			'tgl_masuk' => $tgl_masuk,
			'kode_barang' => $kode_barang,
			'jml_masuk' => $jml_masuk,
			'ket_masuk' => $ket_masuk,
		];

		$this->barangMasukModel->insert($data);

		session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!');
		return redirect()->to('/tblmasuk');
	}

	public function delete($id_masuk)
	{
		$this->barangMasukModel->delete($id_masuk);

		session()->setFlashdata('pesan', 'Data Berhasil Dihapus!');
		return redirect()->to('/tblmasuk');
	}
}