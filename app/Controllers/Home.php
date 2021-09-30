<?php

namespace App\Controllers;

class Home extends BaseController
{

	public function index()
	{
		$data = [
			'tittle' => 'Dashboard &mdash; Sentiong',
			'actDashboard' => 'active',
			'uricoba' => $this->request->uri->getSegment(1)
		];

		// dd($data);
		return view('blank_page', $data);
	}
}
