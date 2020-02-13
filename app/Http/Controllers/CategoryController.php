<?php

namespace App\Http\Controllers;

use App\model\Category;
use App\model\SubCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
      
        $categoryData=Category::where("status",1)->get();
        return view("category.index",compact("categoryData"));
    }
    public function add(Request $request)
    {
        if ($request->isMethod('post')) {
            $link = $request->link;
            $linkorder = $request->linkorder;
          
           $user=new Category();
           $user->name=$link;
           $user->link=$link;
           $user->linkorder=$linkorder;
        
          
           $user->status=1;
           $user->save();
           $request->session()->flash("success", "Request is completed successfully");
           return redirect(url('addcategory'));
           
        } else {

            return view("category.add");
        }
    }
    public function edit(Request $request)
    {
        if ($request->isMethod('post')) {
            $link = $request->link;
            $linkorder = $request->linkorder;
           
          
            $id = $request->id;
          
            $file = $request->file('image');
            $filename='';
            $user=Category::find($id);
            $user->name=$link;
            $user->link=$link;
            $user->linkorder=$linkorder;
          
        
         
           $user->save();
           $request->session()->flash("success", "Request is completed successfully");
           return redirect(url('categoryview'));
           
        } else {
            $userData=Category::find($request->id);
            return view("category.edit",compact("userData"));
        }
    }
    public function delete(Request $request)
    {
        $id=$request->id;
        $user=Category::find($id);
        $user->status=0;
        $user->save();
        $request->session()->flash("success", "Request is completed successfully");
        return redirect(url('categoryview'));
    }
    public function indexhomeimages()
    {
      
        $categoryData=SubCategory::where("status",1)->get();
        return view("category.homeimage",compact("categoryData"));
    }
    public function addhomeimages(Request $request)
    {
        if ($request->isMethod('post')) {
            $link = $request->link;
            $linkorder = $request->linkorder;
          
           $user=new SubCategory();
           $user->name=$link;
           $user->links=$link;
        
           $file = $request->file('image');
           $filename='';
           if(!empty($file))
      
           {
               $time=time();
               $ext=$file->getClientOriginalExtension();
               $filename=$time.".".$ext;
               $file->move('public/upload/category/', $filename);
             /*   $url='public/upload/post/'.$filename;
               $img = Image::make( $url)->resize(300, 200); */
           }
          $user->image= $filename;
           $user->status=1;
           $user->save();
           $request->session()->flash("success", "Request is completed successfully");
           return redirect(url('addhomeimages'));
           
        } else {

            return view("category.addhomeimage");
        }
    }
    public function edithomeimages(Request $request)
    {
        if ($request->isMethod('post')) {
            $link = $request->link;
           
           
          
            $id = $request->id;
          
            $file = $request->file('image');
            $filename='';
            $user=SubCategory::find($id);
            $user->name=$link;
           $user->links=$link;
        
           $file = $request->file('image');
           $filename='';
           if(!empty($file))
      
           {
               $time=time();
               $ext=$file->getClientOriginalExtension();
               $filename=$time.".".$ext;
               $file->move('public/upload/category/', $filename);
             /*   $url='public/upload/post/'.$filename;
               $img = Image::make( $url)->resize(300, 200); */
           }
          $user->image= $filename;
          
        
         
           $user->save();
           $request->session()->flash("success", "Request is completed successfully");
           return redirect(url('homeimageview'));
           
        } else {
            $userData=SubCategory::find($request->id);
            return view("category.edithomeimages",compact("userData"));
        }
    }
    public function deletehomeimages(Request $request)
    {
        $id=$request->id;
        $user=SubCategory::find($id);
        $user->status=0;
        $user->save();
        $request->session()->flash("success", "Request is completed successfully");
        return redirect(url('homeimageview'));
    }
}
