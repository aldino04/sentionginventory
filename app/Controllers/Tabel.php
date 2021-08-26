<?php

namespace App\Controllers;

class Tabel extends BaseController
{
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
