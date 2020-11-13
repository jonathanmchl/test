<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	//--------------------------------------------------------------------
public function show()
{
	$data['nama'] = 'Nama : Jonathan Michael';
	$data['NPM'] = 'NPM : 1817051064';
	$data['jurusan']='Ilmu Komputer';
	echo view('mahasiswa/header');
	echo view('mahasiswa/index', $data,);
	echo view('mahasiswa/footer');
}
}
