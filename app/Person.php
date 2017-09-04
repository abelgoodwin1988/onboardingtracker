<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class person extends Model
{

  use SoftDeletes;


  // set fields that can be mass assigned
  protected $fillable = [
    'name_first',
    'name_middle',
    'name_last',
    'email',
    'phone_number'
  ];

  /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at',
                        'created_at', 
                        'updated_at'];

}
