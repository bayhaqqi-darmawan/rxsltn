<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roadtax extends Model
{
    //Table Name
    protected $table = 'roadtax';

    // Primary Key
    public $primaryKey = 'id';

    // Timestamps
    // it is true by default tho
    public $timestamps = true;

    public function user() {
        return $this->belongsTo('App\User');
    }
}
