<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = [
    "material",
    "carat",
    "color",
    "cut",
    "purity",
    "origin"
  ];

  public function vendors()
  {
    return $this->belongsToMany('App\Vendor', "product_vendor");
  }
}
