<?php

namespace App\Http\Controllers;

use App\model\Question;
use App\model\Quiz;
use App\model\UserQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
          
            $option1 = $request->option1;
            $option2 = $request->option2;
            $option3 = $request->option3;
            $option4 = $request->option4;
            $correct = $request->correct;
            $quiz = $request->quiz_id;
          
           
           $user=new Question();
           $user->question=$question;
           $user->option1=$option1;
           $user->option2=$option2;
           $user->option3=$option3;
           $user->option4=$option4;
           $user->correct=$correct;
           $user->date=date("Y-m-d");
           $user->quiz=$quiz;
       
           $user->status=1;
           $user->save();
           $request->session()->flash("success", "Request is completed successfully");
           return redirect(url('addquestion'));
           
        } else {
            $quizdata=Quiz::where("status","!=",0)->where("status","!=",0)->get();
            return view("question.add",compact('quizdata'));
        }
    }
    public function edit(Request $request)
    {
        if ($request->isMethod('post')) {
            $question = $request->question;
          
            $option1 = $request->option1;
            $option2 = $request->option2;
            $option3 = $request->option3;
            $option4 = $request->option4;
            $correct = $request->correct;
            $quiz = $request->quiz_id;
           
          
            $id = $request->id;
          
            $user=Question::find($id);
            $user->question=$question;
           $user->option1=$option1;
           $user->option2=$option2;
           $user->option3=$option3;
           $user->option4=$option4;
           $user->correct=$correct;
           $user->date=date("Y-m-d");
           $user->quiz=$quiz;
    
         
           $user->save();
           $request->session()->flash("success", "Request is completed successfully");
           return redirect(url('viewquestion'));
           
        } else {
            $quizdata=Quiz::where("status","!=",0)->where("status","!=",0)->get();
            $questionData=Question::find($request->id);
            return view("question.edit",compact("questionData",'quizdata'));
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
            $priceratio = $request->priceratio;
         
           
          
           
           $Quiz=new Quiz();
           $Quiz->title=$setname;
        
           $Quiz->status=$status;
           $Quiz->total_question=$noofquestion;
           $Quiz->priceratio=$priceratio;
           $Quiz->date=$date;
        
       
       
           $Quiz->save();
           $request->session()->flash("success", "Request is completed successfully");
           return redirect(url('addquestionset'));
           
        } else {

            return view("question.addquestionset");
        } 
    }
    public function viewquestionset()
    {
        $questionData=Quiz::where("status","!=",0)->get();
        return view("question.viewquestionset",compact("questionData"));
    }
    public function editquestionset(Request $request)
    {
        if ($request->isMethod('post')) {
            $setname = $request->setname;
            $date = $request->date;
            $noofquestion = $request->noofquestion;
            $status = $request->status;
            $priceratio = $request->priceratio;
         
           
          
            $id = $request->id;
          
            $Quiz=Quiz::find($id);
            $Quiz->title=$setname;
        
            $Quiz->status=$status;
            $Quiz->total_question=$noofquestion;
            $Quiz->priceratio=$priceratio;
            $Quiz->date=$date;
        
          
        
         
           $Quiz->save();
           $request->session()->flash("success", "Request is completed successfully");
           return redirect(url('viewquestionset'));
           
        } else {
            $questionData=Quiz::find($request->id);
            return view("question.editquestionset",compact("questionData"));
        }
    }
    public function deletequestionset(Request $request)
    {
        $id=$request->id;
        $user=Quiz::find($id);
        $user->status=0;
        $user->save();
        $request->session()->flash("success", "Request is completed successfully");
        return redirect(url('viewquestionset'));
    }
    public function participantuser()
    {
       
     
        $userquestion = DB::table('user_questions')
        ->leftJoin('orders', 'orders.id', '=', 'user_questions.order_id')
        ->leftJoin('users', 'users.id', '=', 'user_questions.user_id');
        $userquestion = $userquestion->select( 'orders.*', 'users.*', 'user_questions.*')
        ->get();
      
        return view("question.participantuser",compact("questionData"));
    }

}
