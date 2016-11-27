<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TempController extends Controller
{
	protected $filler = [];

	public function index()
	{
		$this->filler["title"] = "Yakovmeister - A new start";

		return response(view('temp.index', $this->filler));
	}

	public function contact()
	{
		$this->filler["title"] = "Yakovmeister - Call of nature";
		
		return response(view('temp.contact', $this->filler));
	}

	public function google()
	{
		return response(view('temp.google'));
	}

	public function cantSaveHyrule()
	{
		return response(view('errors.404', $this->filler));
	}
}