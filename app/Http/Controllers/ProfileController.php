<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
   public function change(){
   	//функция открывает шаблон с формой    	
   	
   	return view('ProfileChange');
   }
}
