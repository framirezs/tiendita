<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Quantity;
use Baum\Node;

class QuantityController extends Controller
{
    public function get($quantity)
	{
		$enaranja = DB::table('product')
	    	->whereBetween('quantity', [1, 20])->get();
	    	return view('store.show', compact('enaranja'));
	}
	    public function get($quantity)
	{
    	$eroja = DB::table('product')
   			->where('quantity', '=', 0)->get();
	    	return view('store.show', compact('eroja'));
	}
	    public function get($quantity)
	{
	   	$eazul = DB::table('product')
			->where('quantity', '>', 20)->get()
    		return view('store.show', compact('eazul'));
	}
}
