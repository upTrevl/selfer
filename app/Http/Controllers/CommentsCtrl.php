<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\comment;


class CommentsCtrl extends Controller
{	
	public function comment()
	{
		$comments = comment::select('idUser','Content')->get();
		$pagetitle ="Отзывы";		
		return view('body')->with(['pagetitle'=>$pagetitle, 'comments'=>$comments]);
	}

}
	
