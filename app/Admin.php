<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //Table Name
    protected $table = 'admins';

    public function isAdmin() {
        return $this->role === 'admin';
     }
}
