<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bluecard extends Model
{
    //Table Name
    protected $table = 'bluecards';

    // Primary Key
    public $primaryKey = 'user_ic';

    public function profile() {
        return $this->belongsTo('App\Profile');
    }
}
