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
			'actForm' => 'active',
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

	public function form2()
	{
		$data = [
			'tittle' => 'Form Barang Masuk &mdash; Sentiong',
			'barang_masuk' => $this->barangMasukModel->getId(),
			'barang' => $this->barangModel->getId(),
			'satuan' => $this->satuanModel->findAll()
		];
		return view('forms/formMulMasuk', $data);
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
		if( $this->barangMasukModel->delete($id_masuk) ) {
			session()->setFlashdata('pesan', 'Data Berhasil Dihapus!');
		}

		return redirect()->to('/tblmasuk');
	}

	public function edit($id_masuk)
	{
		$data = [
			'tittle' => 'Form Edit Barang &mdash; Sentiong',
			'barang' => $this->barangModel->getId(),
			'barang_masuk' => $this->barangMasukModel->getId($id_masuk),
			'satuan' => $this->satuanModel->findAll()
		];
		// dd($data);
		return view('forms/formEdtBarangMasuk', $data);
	}

	public function update($id_masuk)
	{
		$this->barangMasukModel->save([
			'id_masuk' 		=> $id_masuk,
			'bapb' 				=> $this->request->getVar('bapb'),
			'tgl_masuk' 	=> $this->request->getVar('tglMasuk'),
			// 'kode_barang' => $this->request->getVar('kodeBarang'),
			'jml_masuk' 	=> $this->request->getVar('jmlMasuk'),
			'ket_masuk' 	=> $this->request->getVar('ketMasuk')
		]);

		session()->setFlashdata('pesan', 'Data Berhasil Diubah!');
		return redirect()->to('/tblmasuk');
	}

	public function detail($id_masuk, $bapb)
	{
		$db = \Config\Database::connect();
		$query = $db->query("SELECT id_masuk, bapb, tgl_masuk, barang_masuk.kode_barang, nama_barang, nama_satuan, jml_masuk, ket_masuk FROM `barang_masuk`
		INNER JOIN barang ON barang.kode_barang = barang_masuk.kode_barang
		INNER JOIN satuan ON satuan.id_satuan = barang.id_satuan
		WHERE bapb = '$bapb';");

		$data = [
			'tittle' => 'Detail Barang Masuk &mdash; Sentiong',
			'barang_masuk' => $this->barangMasukModel->getId($id_masuk),
			'result' => $query->getResultArray()
		];

		// dd($data);
		return view('details/detailBarangMasuk', $data);
	}
}
