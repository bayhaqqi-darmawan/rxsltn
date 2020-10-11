<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
     //Table Name
     protected $table = 'insurances';

     // Primary Key
     public $primaryKey = 'id';
    //  public $incrementing = false;

     public function user() {
        return $this->belongsTo('App\User');
    }
}
