<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function users()
    {
        return $this->belongsTo("App\\User");
    }
}
