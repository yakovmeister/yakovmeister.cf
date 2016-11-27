<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Factory as Validator;

use App\Suggest;

class TempController extends Controller
{
	protected $filler = [];

	public function index()
	{
		$this->filler["title"] = "Journey Awaits - Yakovmeister";

		return response(view('temp.index', $this->filler));
	}

	public function contact()
	{
		$this->filler["title"] = "Call of nature - Yakovmeister";
		
		return response(view('temp.contact', $this->filler));
	}

	public function google()
	{
		return response(view('temp.google'));
	}

	public function suggest()
	{
		$this->filler["title"] = "Master Plan - Yakovmeister";

		return response(view('temp.suggest', $this->filler));
	}

	public function postSuggest(Request $request, Validator $validator)
	{
		$validation = $validator->make($request->all(), [
			"name" => "required|max:100|regex:/^[\pL\s]+$/u",
			"email" => "required|max:355|email",
			"message" => "required"
		]);

		if($validation->fails()) 
		{
			return redirect(url('/suggest'))
                    ->withErrors($validation)
                    ->withInput($request->all());
		}

		Suggest::create($request->all());

		return redirect(url('/'))
				->with('flash', [
					'type' => 'success',
					'message' => 'You\'ve successfully sent your concern. Thank you.'
				]);
	}

	public function viewSuggestions()
	{
		$this->filler["title"] = "Comprehende! - Yakovmeister";
		$this->filler["suggestions"] = Suggest::paginate(15);

		return response(view('temp.suggestion-view', $this->filler));
	}

	public function openSuggestion($id)
	{
		$suggestion = Suggest::find($id);

		if(count($suggestion) < 1) 
		{
			return redirect(url('/not-found'));
		}

		$this->filler["title"] = "Seems like a master plan! - Yakovmeister";
		$this->filler["suggestion"] = $suggestion;

		return response(view('temp.suggestion-open', $this->filler));
	}

	public function cantSaveHyrule()
	{
		return response(view('errors.404', $this->filler));
	}
}