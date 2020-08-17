<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Primary Key
    public $primaryKey = 'id';

    // Timestamps
    // it is true by default tho
    public $timestamps = true;
}
