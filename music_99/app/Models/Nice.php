<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nice extends Model
{
    public function user() {
        //1対1
        return $this->belongsTo('App\Models\User');
    }

    public function post() {
        //1対1
        return $this->belongsTo('App\Models\Song');
    }
}
