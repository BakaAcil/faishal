<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = ["title"=>"blogs apps | home"];
        echo view('layout/header', $data);
        echo view('layout/navbar');
        echo view('v_home');
        echo view('layout/footer');
	}
}
