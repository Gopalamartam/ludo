<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function quiz()
    {
        
        return $this->hasOne("App\\model\\Quiz","id",'quiz');
    }
    
}
