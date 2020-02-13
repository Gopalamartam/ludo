<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class WithdrawalRequest extends Model
{
    public function users()
    {
        return $this->belongsTo("App\\User","user_id");
    }
}
