<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtamaController extends Controller
{
   public function index (){
   	return view('karyawan.karyawan');
   }

   public function landing (){
   	return view('data.karyawan');
   }
}
