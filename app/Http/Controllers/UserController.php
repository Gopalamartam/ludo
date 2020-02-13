<?php

namespace App\Http\Controllers;

use App\model\Setting;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $userData=User::where("status",1)->get();
        return view("users.index",compact("userData"));
    }
    public function add(Request $request)
    {
        if ($request->isMethod('post')) {
            $name = $request->name;
            $email = $request->email;
            $phone = $request->phone;
          
            $file = $request->file('image');
            $filename='';
            if(!empty($file))
       
            {
                $filename=$file->getClientOriginalName();
                $file->move('public/upload/profile', $file->getClientOriginalName());
            }
          
           $user=new User();
           $user->name=$name;
           $user->email=$email;
           $user->phone=$phone;
           $user->image=$filename;
           $user->save();
           $request->session()->flash("success", "Request is completed successfully");
           return redirect(url('useradd'));
           
        } else {

            return view("users.add");
        }
    }
    public function edit(Request $request)
    {
        if ($request->isMethod('post')) {
            $name = $request->name;
            $email = $request->email;
            $phone = $request->phone;
            $id = $request->id;
          
            $file = $request->file('image');
            $filename='';
            $user=User::find($id);
            $user->name=$name;
            $user->email=$email;
            $user->phone=$phone;
            if(!empty($file))
       
            {
                $filename=$file->getClientOriginalName();
              
                $file->move('public/upload/profile', $file->getClientOriginalName());
                $user->image=$filename;
            }
          
        
         
           $user->save();
           $request->session()->flash("success", "Request is completed successfully");
           return redirect(url('userview'));
           
        } else {
            $userData=User::find($request->id);
            return view("users.edit",compact("userData"));
        }
    }
    public function delete(Request $request)
    {
        $id=$request->id;
        $user=User::find($id);
        $user->status=0;
        $user->save();
        $request->session()->flash("success", "Request is completed successfully");
        return redirect(url('userview'));
    }
    public function setting(Request $request)
    {
        $settingData=Setting::where("status",1)->get();
        $retureData=array();
        foreach($settingData as $val)
        {
            $retureData[$val->metakey]=$val->metavalue;
        }
        if ($request->isMethod('post')) {
           
            Setting::truncate();
            foreach($_POST as $key=> $val)
            {
                if($key!="_token")
                {
                    $setting=new Setting();
                    $setting->metakey=$key;
                    $setting->metavalue=$val;
                    $setting->status=1;
                    $setting->save();
                }
            }
            $request->session()->flash("success", "Request is completed successfully");
            return redirect(url('setting'));
        }
        else{
            return view("users.setting",compact("retureData"));
        }
      
    }
    public function logout(Request $request)
    {
       

        $request->session()->invalidate();

        return redirect('/');
    }
}
