<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
	public function __construct(){
		//$this->middleware('auth')->only(['contato','categoria']);
		//$this->middleware('auth')->except(['index','categoria']);
	}

    public function index(){
    	$title = 'Aprendendo Laravel';
    	return view('site.home.teste', compact('title'));
    }

    public function contato(){
    	return view('site.contato.index');
    }

    public function categoria($id = 1){
    	return "Categoria - {$id}";
    }
}
