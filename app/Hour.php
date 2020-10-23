<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hour extends Model
{
    protected $table = 'hours';

    public function days() {
        return $this->hasMany('App\Day');
    }
}
