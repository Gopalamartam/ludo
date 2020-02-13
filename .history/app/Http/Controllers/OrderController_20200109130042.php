<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
       
        $order =Order::where('status',1)->paginate(15);

        return view('order.index', ['order' => $order]);
     
      
    }
}
