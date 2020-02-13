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
            $description = $request->description;
           
            $validatedData = $request->validate([
                'title' => 'required',
                'url' => 'required',
            ]);

            $file = $request->file('image');
            $filename='';
            if(!empty($file))
       
            {
                $time=time();
                $ext=$file->getClientOriginalExtension();
                $filename=$time.".".$ext;
                $file->move('public/upload/post', $filename);
              /*   $url='public/upload/post/'.$filename;
                $img = Image::make( $url)->resize(300, 200); */
            }
          
           $user=new Blog();
           $user->title=$title;
           $user->description=$description;
        
           $user->image=$filename;
           $user->thumbnail=$filename;
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
        if ($request->isMethod('post')) {
            $title = $request->title;
            $description = $request->description;
           
          
            $id = $request->id;
          
            $file = $request->file('image');
            $filename='';
            $user=Blog::find($id);
            $user->title=$title;
            $user->description=$description;
            if(!empty($file))
       
            {
                $time=time();
                $ext=$file->getClientOriginalExtension();
                $filename=$time.".".$ext;
                $file->move('public/upload/post', $filename);
                $user->image=$filename;
                $user->thumbnail=$filename;
            }
          
        
         
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
