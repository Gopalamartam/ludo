<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class UserQuestion extends Model
{
    protected $table = 'quizzes';
     public function question()
    {
        return $this->belongsTo("App\\models\\question");
    }
}
