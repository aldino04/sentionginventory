<?php

namespace App\Controllers;

class User extends BaseController
{
	public function tblUser()
	{ 
		$data = [
			'tittle' => 'Tabel User &mdash; Sentiong'
		];
		return view('users/tblUser', $data);
	}

}
