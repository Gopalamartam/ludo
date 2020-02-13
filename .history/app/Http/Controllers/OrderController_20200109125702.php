<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $questionData=Question::where("status",1)->get();
        $users =Order::where('status',1)->paginate(15);

        return view('user.index', ['users' => $users]);
     
        return view("question.index",compact("questionData"));
    }
}
