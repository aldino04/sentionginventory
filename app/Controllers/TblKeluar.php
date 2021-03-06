<?php

namespace App\Controllers;

use App\Models\BarangKeluarModel;
use App\Models\BarangModel;
use App\Models\SatuanModel;

use Dompdf\Dompdf;
use Dompdf\Options;

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
		// dd($data);
		return view('tabels/tblBarangKeluar', $data);
	}

	public function form()
	{
		$data = [
			'tittle' => 'Form Barang Keluar &mdash; Sentiong',
			'barang_keluar' => $this->barangModel->getId(),
			'barang' => $this->barangModel->getId(),
			'satuan' => $this->satuanModel->findAll(),
			'validation' => \Config\Services::validation()
		];
		return view('forms/formBarangkeluar', $data);
	}

	public function save()
	{
		if (!$this->validate([
			'fotoKeluar' => 'is_image[fotoKeluar]'
		])){
			session()->setFlashdata('unique', 'Data Gagal Ditambahkan!');
			return redirect()->to('keluar')->withInput();
		}
		// dd('berhasil');
		
		//ambil file sampul
		$fileSampul = $this->request->getFile('fotoKeluar');
		//pindahkan file ke folder /img
		$fileSampul->move('img/barangKeluar');
		//ambil nama file
		$namaSampul = $fileSampul->getName();

		// dd($this->request->getVar());
		$bpm = $this->request->getVar('bpm');
		$tgl_keluar = $this->request->getVar('tglKeluar');
		$kode_barang = $this->request->getVar('kodeBarang');
		$jml_keluar = $this->request->getVar('jmlKeluar');
		$ket_keluar = $this->request->getVar('ketKeluar');
		$id_user = $this->request->getVar('idUser');
		
		$data = [
			'bpm' => $bpm,
			'tgl_keluar' => $tgl_keluar,
			'kode_barang' => $kode_barang,
			'jml_keluar' => $jml_keluar,
			'ket_keluar' => $ket_keluar,
			'fotoKeluar' => $namaSampul,
			'id_user'		 => $id_user
		];

		// dd($data);
		$this->barangKeluarModel->insert($data);

		session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!');
		return redirect()->to('/tblbarang/detail/'.$kode_barang);
	}

	public function delete($id_keluar)
	{
		if ($this->barangKeluarModel->delete($id_keluar)) {
			session()->setFlashdata('pesan', 'Data Berhasil Dihapus!');
		}

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
		$fileSampul = $this->request->getFile('fotoKeluar');

		//cek gambar, apakah masih yang lama
		if ($fileSampul->getError() == 4){
			$namaSampul = $this->request->getVar('sampulLama');
		} else {
			$fileSampul->move('img/barangKeluar');
			$namaSampul = $fileSampul->getName();
		}

		$this->barangKeluarModel->save([
			'id_keluar' 	=> $id_keluar,
			'bpm' 				=> $this->request->getVar('bpm'),
			'tgl_keluar' 	=> $this->request->getVar('tglKeluar'),
			// 'kode_barang' => $this->request->getVar('kodeBarang'),
			'jml_keluar' 	=> $this->request->getVar('jmlKeluar'),
			'ket_keluar' 	=> $this->request->getVar('ketKeluar'),
			'fotoKeluar'  => $namaSampul
		]);

		session()->setFlashdata('pesan', 'Data Berhasil Diubah!');
		return redirect()->to('/tblkeluar/detail/'.$id_keluar.'/'.$this->request->getVar('bpm'));
	}

	public function detail($id_keluar, $bpm)
	{
		$data = [
			'tittle' => 'Detail Barang Keluar &mdash; Sentiong',
			'barang_keluar' => $this->barangKeluarModel->getId($id_keluar),
			'result' => $this->barangKeluarModel->getBpm($bpm)
		];

		// dd($data);
		return view('details/detailBarangKeluar', $data);
	}

	public function dompdf($id_keluar, $bpm)
	{
		$data = [
			'tittle' => 'BPM',
			'barang_keluar' => $this->barangKeluarModel->getId($id_keluar),
			'result' => $this->barangKeluarModel->getBpm($bpm)
		];

		$options = new Options();
		$options->set('defaultFont', 'times');
		$options->set('isRemoteEnabled', TRUE);
		$options->setIsRemoteEnabled(true);
		$options->set('debugKeepTemp', TRUE);
		$options->set('isHtml5ParserEnabled', true);
		$dompdf = new Dompdf($options);

		// instantiate and use the dompdf class
		$html	= view('details/printBPM', $data);
		$dompdf->loadHtml($html);

		// (Optional) Setup the paper size and orientation
		$dompdf->setPaper('A5', 'portrait');
		// $dompdf->set_option('isRemoteEnabled', true);

		// Render the HTML as PDF
		$dompdf->render();

		// Output the generated PDF to Browser
		$dompdf->stream('APG', ['Attachment'=>false]);
	}

}
