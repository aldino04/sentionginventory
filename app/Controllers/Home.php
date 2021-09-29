<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'tittle' => 'Dashboard &mdash; Sentiong',
			'actDashboard' => 'active'
		];
		return view('blank_page', $data);

	}
}
