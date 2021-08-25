<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'tittle' => 'Blank Page &mdash; Sentiong'
		];
		return view('blank_page', $data);
	}
}
