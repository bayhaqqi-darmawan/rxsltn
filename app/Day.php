<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    protected $table = 'days';

    public function hours(){
        return $this->hasMany('App\Hour');
    }
}
