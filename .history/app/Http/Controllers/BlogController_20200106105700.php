<?php

namespace App\Http\Controllers;

use App\model\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
      
        $blogData=Blog::where("status",1)->get();
        return view("blog.index",compact("blogData"));
    }
    public function add(Request $request)
    {
        if ($request->isMethod('post')) {
            $title = $request->title;
            $url = $request->url;
           
            $validatedData = $request->validate([
                'title' => 'required',
                'url' => 'required',
            ]);
            

           
           $user=new Blog();
           $user->title=$title;
           $user->description=$title;
        
           $user->youtubeurl=$url;
         
           $user->status=1;
           $user->save();
           $request->session()->flash("success", "Request is completed successfully");
           return redirect(url('addblog'));
           
        } else {

            return view("blog.add");
        }
    }
    public function edit(Request $request)
    {
        $id=$request->id;
        if ($request->isMethod('post')) {
            $title = $request->title;
            $url = $request->url;
           
            $validatedData = $request->validate([
                'title' => 'required',
                'url' => 'required',
            ]);
            

           
           $user=Blog::find();
           $user->title=$title;
           $user->description=$title;
        
           $user->youtubeurl=$url;
         
           $user->status=1;
           $user->save();
          
           $request->session()->flash("success", "Request is completed successfully");
           return redirect(url('blogview'));
           
        } else {
            $userData=Blog::find($request->id);
            return view("Blog.edit",compact("userData"));
        }
    }
    public function delete(Request $request)
    {
        $id=$request->id;
        $user=Blog::find($id);
        $user->status=0;
        $user->save();
        $request->session()->flash("success", "Request is completed successfully");
        return redirect(url('blogview'));
    }
}
