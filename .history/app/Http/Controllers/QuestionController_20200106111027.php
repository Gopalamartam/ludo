<?php

namespace App\Http\Controllers;

use App\model\Question;
use App\model\Quiz;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
      
        $questionData=Question::where("status",1)->get();
        return view("question.index",compact("questionData"));
    }
    public function add(Request $request)
    {
        if ($request->isMethod('post')) {
            $question = $request->question;
            $date = $request->date;
            $option1 = $request->option1;
            $option2 = $request->option2;
            $option3 = $request->option3;
            $option4 = $request->option4;
            $correct = $request->correct;
           
          
           
           $user=new Question();
           $user->question=$question;
           $user->option1=$option1;
           $user->option2=$option2;
           $user->option3=$option3;
           $user->option4=$option4;
           $user->correct=$correct;
           $user->date=$date;
        
       
           $user->status=1;
           $user->save();
           $request->session()->flash("success", "Request is completed successfully");
           return redirect(url('addquestion'));
           
        } else {

            return view("question.add");
        }
    }
    public function edit(Request $request)
    {
        if ($request->isMethod('post')) {
            $question = $request->question;
            $date = $request->date;
            $option1 = $request->option1;
            $option2 = $request->option2;
            $option3 = $request->option3;
            $option4 = $request->option4;
            $correct = $request->correct;
           
          
            $id = $request->id;
          
            $user=Question::find($id);
            $user->question=$question;
           $user->option1=$option1;
           $user->option2=$option2;
           $user->option3=$option3;
           $user->option4=$option4;
           $user->correct=$correct;
           $user->date=$date;
        
          
        
         
           $user->save();
           $request->session()->flash("success", "Request is completed successfully");
           return redirect(url('viewquestion'));
           
        } else {
            $questionData=Question::find($request->id);
            return view("question.edit",compact("questionData"));
        }
    }
    public function delete(Request $request)
    {
        $id=$request->id;
        $user=Question::find($id);
        $user->status=0;
        $user->save();
        $request->session()->flash("success", "Request is completed successfully");
        return redirect(url('viewquestion'));
    }
    public function addquestionset(Request $request)
    {
        if ($request->isMethod('post')) {
            $setname = $request->setname;
            $date = $request->date;
            $noofquestion = $request->noofquestion;
            $status = $request->status;
         
           
          
           
           $user=new Quiz();
           $user->question=$question;
           $user->option1=$option1;
           $user->option2=$option2;
           $user->option3=$option3;
           $user->option4=$option4;
           $user->correct=$correct;
           $user->date=$date;
        
       
           $user->status=1;
           $user->save();
           $request->session()->flash("success", "Request is completed successfully");
           return redirect(url('addquestion'));
           
        } else {

            return view("question.add");
        } 
    }

}
