<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class UserPrize extends Model
{
    public function user()
    {
        return $this->belongsTo("App//User");
    }
}
