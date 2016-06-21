<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quantity extends Model { 

  protected $table = 'products';

  public function categories() 
  	{
    return $this->belongsToMany('Category', 'products_categories');
	}

 }
    