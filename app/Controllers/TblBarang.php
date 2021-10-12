<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\SatuanModel;

use Dompdf\Dompdf;
use Dompdf\Options;
use TCPDF;

class TblBarang extends BaseController
{
	protected $barangModel;
	protected $satuanModel;
	
	public function __construct()
	{
		$this->barangModel = new BarangModel();
		$this->satuanModel = new SatuanModel();
	}

	public function index()
	{ 
		// $barang = $this->barangModel->findAll();
		$data = [
			'tittle' => 'Tabel Barang &mdash; Sentiong',
			'barang' => $this->barangModel->getId(),
			'satuan' => $this->satuanModel->findAll()
		];

		// dd($data);
		return view('tabels/tblBarang', $data);
	}

	public function save()
	{

		//ambil file sampul
		$fileSampul = $this->request->getFile('sampul');
		//pindahkan file ke folder /img
		$fileSampul->move('img/barang');
		//ambil nama file
		$namaSampul = $fileSampul->getName();

		$kode_barang = $this->request->getVar('kodeBarang');
		$nama_barang = $this->request->getVar('namaBarang');
		$stok 			 = $this->request->getVar('stok');
		$id_satuan 	 = $this->request->getVar('satuan');
		
		$data = [
			'kode_barang' => $kode_barang,
			'nama_barang' => $nama_barang,
			'stok' 				=> $stok,
			'id_satuan' 	=> $id_satuan,
			'sampul'			=> $namaSampul
		];

		$this->barangModel->insert($data);

		session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!');
		return redirect()->to('/tblbarang');
	}

	public function delete($kode_barang)
	{
		if($this->barangModel->delete($kode_barang)){
			session()->setFlashdata('pesan', 'Data Berhasil Dihapus!');
		}

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
		$fileSampul = $this->request->getFile('sampul');

		//cek gambar, apakah masih yang lama
		if ($fileSampul->getError() == 4){
			$namaSampul = $this->request->getVar('sampulLama');
		} else {
			$fileSampul->move('img/barang');
			$namaSampul = $fileSampul->getName();
		}

		$this->barangModel->save([
			'kode_barang' => $kode_barang,
			'kode_barang' => $this->request->getVar('kodeBarang'),
			'nama_barang' => $this->request->getVar('namaBarang'),
			'stok' 				=> $this->request->getVar('stok'),
			'id_satuan' 	=> $this->request->getVar('satuan'),
			'sampul'			=> $namaSampul
		]);

		session()->setFlashdata('pesan', 'Data Berhasil Diubah!');
		return redirect()->to('/tblbarang');
	}

	public function detail($kode_barang)
	{

		$db = \Config\Database::connect();
		$apg = $db->query("SELECT '' AS id_keluar, id_masuk AS id_masuk, tgl_masuk AS tanggal, bapb, '' as bpm, barang_masuk.kode_barang, nama_barang, jml_masuk AS masuk, '' AS keluar, nama_satuan AS satuan, ket_masuk AS keterangan
			FROM barang_masuk
			JOIN barang ON barang.kode_barang = barang_masuk.kode_barang
			JOIN satuan ON satuan.id_satuan = barang.id_satuan
			WHERE barang_masuk.kode_barang = '$kode_barang'
			UNION
			SELECT id_keluar, '', tgl_keluar, '', bpm, barang_keluar.kode_barang, nama_barang, '', jml_keluar, nama_satuan AS satuan, 			ket_keluar AS keterangan
			FROM barang_keluar
			JOIN barang ON barang.kode_barang = barang_keluar.kode_barang
			JOIN satuan ON satuan.id_satuan = barang.id_satuan
			WHERE barang_keluar.kode_barang = '$kode_barang'
			ORDER BY tanggal DESC;");
		
		$totalMsk = $db->query("SELECT SUM(jml_masuk) AS jml_masuk FROM barang_masuk
		WHERE kode_barang = '$kode_barang';");

		$totalKlr = $db->query("SELECT SUM(jml_keluar) AS jml_keluar FROM barang_keluar
		WHERE kode_barang = '$kode_barang';");

		$data = [
			'tittle' => 'Detail Barang &mdash; Sentiong',
			'barang' => $this->barangModel->getId($kode_barang),
			'result' => $apg->getResultArray(),
			'totalMasuk' => $totalMsk->getRow(),
			'totalKeluar' => $totalKlr->getRow()
		];

		return view('details/detailBarang', $data);
	}

	public function dompdf($kode_barang)
	{

		$db = \Config\Database::connect();
		$apg = $db->query("SELECT '' AS id_keluar, id_masuk AS id_masuk, tgl_masuk AS tanggal, bapb, '' as bpm, barang_masuk.kode_barang, nama_barang, jml_masuk AS masuk, '' AS keluar, nama_satuan AS satuan, ket_masuk AS keterangan
			FROM barang_masuk
			JOIN barang ON barang.kode_barang = barang_masuk.kode_barang
			JOIN satuan ON satuan.id_satuan = barang.id_satuan
			WHERE barang_masuk.kode_barang = '$kode_barang'
			UNION
			SELECT id_keluar, '', tgl_keluar, '', bpm, barang_keluar.kode_barang, nama_barang, '', jml_keluar, nama_satuan AS satuan, 			ket_keluar AS keterangan
			FROM barang_keluar
			JOIN barang ON barang.kode_barang = barang_keluar.kode_barang
			JOIN satuan ON satuan.id_satuan = barang.id_satuan
			WHERE barang_keluar.kode_barang = '$kode_barang'
			ORDER BY tanggal DESC;");
		
		$totalMsk = $db->query("SELECT SUM(jml_masuk) AS jml_masuk FROM barang_masuk
		WHERE kode_barang = '$kode_barang';");

		$totalKlr = $db->query("SELECT SUM(jml_keluar) AS jml_keluar FROM barang_keluar
		WHERE kode_barang = '$kode_barang';");

		$data = [
			'tittle' => 'Detail Barang &mdash; Sentiong',
			'barang' => $this->barangModel->getId($kode_barang),
			'result' => $apg->getResultArray(),
			'totalMasuk' => $totalMsk->getRow(),
			'totalKeluar' => $totalKlr->getRow()
		];

		// $dompdf = new Dompdf();

		
		$options = new Options();
		$options->set('defaultFont', 'times');
		$options->set('isRemoteEnabled', TRUE);
		$options->setIsRemoteEnabled(true);
		$options->set('debugKeepTemp', TRUE);
		$options->set('isHtml5ParserEnabled', true);
		$dompdf = new Dompdf($options);

		// instantiate and use the dompdf class
		$html	= view('details/printPDF', $data);
		$dompdf->loadHtml($html);

		// (Optional) Setup the paper size and orientation
		$dompdf->setPaper('A4', 'landscape');
		// $dompdf->set_option('isRemoteEnabled', true);

		// Render the HTML as PDF
		$dompdf->render();

		// Output the generated PDF to Browser
		$dompdf->stream('APG', ['Attachment'=>false]);

	}

	public function tcpdf($kode_barang)
	{
		$db = \Config\Database::connect();
		$apg = $db->query("SELECT '' AS id_keluar, id_masuk AS id_masuk, tgl_masuk AS tanggal, bapb, '' as bpm, barang_masuk.kode_barang, nama_barang, jml_masuk AS masuk, '' AS keluar, nama_satuan AS satuan, ket_masuk AS keterangan
			FROM barang_masuk
			JOIN barang ON barang.kode_barang = barang_masuk.kode_barang
			JOIN satuan ON satuan.id_satuan = barang.id_satuan
			WHERE barang_masuk.kode_barang = '$kode_barang'
			UNION
			SELECT id_keluar, '', tgl_keluar, '', bpm, barang_keluar.kode_barang, nama_barang, '', jml_keluar, nama_satuan AS satuan, 			ket_keluar AS keterangan
			FROM barang_keluar
			JOIN barang ON barang.kode_barang = barang_keluar.kode_barang
			JOIN satuan ON satuan.id_satuan = barang.id_satuan
			WHERE barang_keluar.kode_barang = '$kode_barang'
			ORDER BY tanggal DESC;");
		
		$totalMsk = $db->query("SELECT SUM(jml_masuk) AS jml_masuk FROM barang_masuk
		WHERE kode_barang = '$kode_barang';");

		$totalKlr = $db->query("SELECT SUM(jml_keluar) AS jml_keluar FROM barang_keluar
		WHERE kode_barang = '$kode_barang';");

		$data = [
			'tittle' => 'Detail Barang &mdash; Sentiong',
			'barang' => $this->barangModel->getId($kode_barang),
			'result' => $apg->getResultArray(),
			'totalMasuk' => $totalMsk->getRow(),
			'totalKeluar' => $totalKlr->getRow()
		];

		$html =  view('details/printPDF', $data);

		$pdf = new TCPDF('L', PDF_UNIT, 'A4', true, 'UTF-8', false);

		$pdf->SetAuthor('Satria Aldino');
		$pdf->SetTitle('APG');
		$pdf->SetSubject('APG');

		$pdf->setPrintHeader(false);
		$pdf->setPrintFooter(false);

		$pdf->SetFont('times', '', 11, '', true);
		$pdf->addPage();

		// output the HTML content
		$pdf->writeHTML($html, true, false, true, false, '');
		//line ini penting
		$this->response->setContentType('application/pdf');
		//Close and output PDF document
		$pdf->Output('APG.pdf', 'I');
	}
}
