<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function quiz()
    {
        return $this->belongsTo("App/model/Quiz","quiz");
       
    }
    
}
