<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
     // Primary Key
     protected $primaryKey = 'ic_number';

     // Timestamps
     // it is true by default tho
     public $timestamps = true;

     public function bluecards() {
        return $this->belongsTo('App\Bluecard');
    }
}
