<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class person extends Model
{
  // set fields that can be mass assigned
  protected $fillable = [
    'name_first',
    'name_middle',
    'name_last',
    'email',
    'phone_number'
  ];



}
