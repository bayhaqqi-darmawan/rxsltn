<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedule';

    public function days() {
        return $this->hasMany('App\Day');
    }

    public function hours()
    {
        return $this->hasMany('App\Hour');
    }
}
