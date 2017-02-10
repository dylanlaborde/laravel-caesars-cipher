<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cypher;

class CipherController extends Controller
{
    public function getIndex(){
		$message=Cypher::all();
		return view('cipher.index',['messages'=>$message]);
	}
}
