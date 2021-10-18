<?php

namespace App\Controllers;

use App\Models\BarangMasukModel;
use App\Models\BarangModel;
use App\Models\SatuanModel;

use Dompdf\Dompdf;
use Dompdf\Options;

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
		$id_user = $this->request->getVar('idUser');
		
		$data = [
			'bapb' => $bapb,
			'tgl_masuk' => $tgl_masuk,
			'kode_barang' => $kode_barang,
			'jml_masuk' => $jml_masuk,
			'ket_masuk' => $ket_masuk,
			'id_user' => $id_user,
		];

		$this->barangMasukModel->insert($data);

		session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!');
		return redirect()->to('/tblbarang/detail/'.$kode_barang);
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
		return view('forms/formEdtBarangMasuk', $data);
	}

	public function update($id_masuk)
	{
		$this->barangMasukModel->save([
			'id_masuk' 		=> $id_masuk,
			'bapb' 				=> $this->request->getVar('bapb'),
			'tgl_masuk' 	=> $this->request->getVar('tglMasuk'),
			'jml_masuk' 	=> $this->request->getVar('jmlMasuk'),
			'ket_masuk' 	=> $this->request->getVar('ketMasuk')
		]);

		session()->setFlashdata('pesan', 'Data Berhasil Diubah!');
		return redirect()->to('/tblmasuk/detail/'.$id_masuk.'/'.$this->request->getVar('bapb'));
	}

	public function detail($id_masuk, $bapb)
	{
		$data = [
			'tittle' => 'Detail Barang Masuk &mdash; Sentiong',
			'barang_masuk' => $this->barangMasukModel->getId($id_masuk),
			'result' => $this->barangMasukModel->getBapb($bapb)
		];

		// dd($data);
		return view('details/detailBarangMasuk', $data);
	}

	public function dompdf($id_masuk, $bapb)
	{
		$data = [
			'tittle' => 'BAPB',
			'barang_masuk' => $this->barangMasukModel->getId($id_masuk),
			'result' => $this->barangMasukModel->getBapb($bapb)
		];

		$options = new Options();
		$options->set('defaultFont', 'times');
		$options->set('isRemoteEnabled', TRUE);
		$options->setIsRemoteEnabled(true);
		$options->set('debugKeepTemp', TRUE);
		$options->set('isHtml5ParserEnabled', true);
		$dompdf = new Dompdf($options);

		// instantiate and use the dompdf class
		$html	= view('details/printBAPB', $data);
		$dompdf->loadHtml($html);

		// (Optional) Setup the paper size and orientation
		$dompdf->setPaper('B5', 'landscape');
		// $dompdf->set_option('isRemoteEnabled', true);

		// Render the HTML as PDF
		$dompdf->render();

		// Output the generated PDF to Browser
		$dompdf->stream('APG', ['Attachment'=>false]);
	}
}
