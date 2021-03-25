<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vegetable;

class PublicController extends Controller

{
	public function index()
	{
		$vegetables = Vegetable::all();

		return view('vegetables.index', compact('vegetables'));
	}
}
