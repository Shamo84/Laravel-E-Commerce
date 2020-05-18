<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
  protected $fillable = [
    "name",
    "email",
    "password",
    "vat_id",
    "address",
    "logo"
  ];
  
  public function products()
  {
    return $this->belongsToMany('App\Product', "product_vendor");
  }
}
