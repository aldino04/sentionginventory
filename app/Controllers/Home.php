<?php

namespace App\Controllers;

class Home extends BaseController
{

	public function index()
	{
		$db = \Config\Database::connect();
		
		$keluar = $db->query("SELECT id_keluar, tgl_keluar AS tanggal, nama_barang as nama, jml_keluar AS keluar, nama_satuan AS satuan, ket_keluar as keterangan, user_image as gambar, fullname AS petugas, description as role
		FROM barang_keluar 
		INNER JOIN barang ON barang.kode_barang = barang_keluar.kode_barang
		INNER JOIN satuan ON satuan.id_satuan = barang.id_satuan
		INNER JOIN users ON users.id = barang_keluar.id_user
		INNER JOIN auth_groups_users ON auth_groups_users.user_id = users.id
		INNER JOIN auth_groups ON auth_groups.id = auth_groups_users.group_id
		ORDER BY tanggal DESC
		LIMIT 3;");

		$jmlMaterial = $db->query("SELECT COUNT(*) AS totalm FROM barang;");
		$jmlMasuk = $db->query("SELECT SUM(jml_masuk) AS jml_masuk FROM barang_masuk;");
		$jmlKeluar = $db->query("SELECT SUM(jml_keluar) AS jml_keluar FROM barang_keluar;");
		$jmlUser = $db->query("SELECT COUNT(*) AS totaluser FROM users;");

		$data = [
			'tittle' => 'Dashboard &mdash; Sentiong',
			'transAkh' => $keluar->getResultArray(),
			'jmlMaterial' => $jmlMaterial->getRow(),
			'jmlMasuk' => $jmlMasuk->getRow(),
			'jmlKeluar' => $jmlKeluar->getRow(),
			'jmlUser' => $jmlUser->getRow()
		];

		// dd($data);
		return view('dashboard', $data);
	}
}
