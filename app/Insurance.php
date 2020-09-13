<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
     //Table Name
     protected $table = 'insurances';

     // Primary Key
     public $primaryKey = 'user_ic';
}
