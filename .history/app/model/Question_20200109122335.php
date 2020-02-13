<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function quiz()
    {
        return $this->belongsTo("App\\model\\Quiz");
        //return $this->hasOne("App\\model\\Quiz","id",'quiz');
    }
    
}
