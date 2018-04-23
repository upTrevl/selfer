<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexCtrl extends Controller
{
	public function index()
	{
		$pagetitle="Главная";
		return view('main')->with('pagetitle',$pagetitle);
	}
}
