<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
      protected $table = 'addresses';
      protected $fillable = ['pincode', 'area', 'city', 'country', 'description', 'user_id'];
      public $timestamps;
}
