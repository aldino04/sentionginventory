<?php

namespace App\Controllers;

class Form extends BaseController
{
	public function formBarangMasuk()
	{
		$data = [
			'tittle' => 'Form Barang Masuk &mdash; Sentiong'
		];
		return view('forms/formBarangMasuk', $data);
	}

	public function formBarangKeluar()
	{
		$data = [
			'tittle' => 'Form Barang Keluar &mdash; Sentiong'
		];
		return view('forms/formBarangKeluar', $data);
	}
}
