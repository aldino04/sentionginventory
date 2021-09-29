<?php

namespace App\Controllers;

class User extends BaseController
{
	protected $db, $builder;

	public function __construct()
	{
		$this->db      = \Config\Database::connect();
		$this->builder = $this->db->table('users');
	}

	public function index()
	{ 
		$data['tittle'] = 'Tabel Users &mdash; Sentiong';

		// $users = new \Myth\Auth\Models\UserModel();
		// $data['users'] = $users->findAll();

		$this->builder->select('users.id as userid, username, email, fullname, phone_number, name, auth_groups.description');
		$this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
		$this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
		$query = $this->builder->get();

		$data['users'] = $query->getResult();

		return view('users/tblUser', $data);
	}

	public function delete($id)
	{
		$this->builder->delete(['id' => $id]);

		session()->setFlashdata('pesan', 'Data Berhasil Dihapus!');
		return redirect()->to('/user');
	}

	public function detail($id)
	{ 
		$data['tittle'] = 'Profile User &mdash; Sentiong';

		$this->builder->select('users.id as userid, username, email, fullname, user_image, phone_number, name, auth_groups.description');
		$this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
		$this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
		$this->builder->where('users.id', $id);
		$query = $this->builder->get();

		$data['user'] = $query->getRow();

		return view('users/profile', $data);
	}

	public function update($id)
	{
		$fileSampul = $this->request->getFile('sampul');

		//cek gambar, apakah masih yang lama
		if ($fileSampul->getError() == 4){
			$namaSampul = $this->request->getVar('sampulLama');
		} else {
			$fileSampul->move('img/users');
			$namaSampul = $fileSampul->getName();
		}

		$fullname 	 = $this->request->getVar('fullname');
		$email			 = $this->request->getVar('email');
		$phone_number= $this->request->getVar('phone_number');
		
		$data = [
			'fullname' 		=> $fullname,
			'email' 			=> $email,
			'phone_number'=> $phone_number,
			'user_image'	=> $namaSampul
		];

		$this->builder->where('id', $id);
		$this->builder->update($data);

		session()->setFlashdata('pesan', 'Data Berhasil Diubah!');
		return redirect()->to('/profile/' . $id);
	}
}
