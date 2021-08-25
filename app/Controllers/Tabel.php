<?php

namespace App\Controllers;

class Tabel extends BaseController
{
	public function barangMasuk()
	{
		$data = [
			'tittle' => 'Tabel Barang Masuk &mdash; Sentiong'
		];
		return view('tabel/barangMasuk', $data);
	}

	public function barangKeluar()
	{
		$data = [
			'tittle' => 'Tabel Barang Keluar &mdash; Sentiong'
		];
		return view('tabel/barangKeluar', $data);
	}
}
