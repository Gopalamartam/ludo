<?php

namespace App\Http\Controllers;

use App\model\Order;
use App\model\Question;
use App\model\Quiz;
use App\model\UserPrize;
use App\model\UserQuestion;
use App\model\WithdrawalRequest;
use Illuminate\Http\Request;

class WithdrawalController extends Controller
{
    public function index()
    {
        $withdrawal = WithdrawalRequest::where("status", 'SUCCESS')->with('users')->get();

        return view("withdrawal.pending", compact("withdrawal"));
    }
    public function withdrawalpending(Request $request)
    {
        $withdrawal = WithdrawalRequest::where("status", 'PENDING')->with('users')->get();

        return view("withdrawal.pending", compact("withdrawal"));
    }
    public function updatestatus(Request $request)
    {
        $id = $request->id;
        $withdrawal = WithdrawalRequest::where("id", $id)->get();
        if ($request->isMethod('post')) {
            $status = $request->status;
            $id = $request->id;
            $updatestatus = WithdrawalRequest::find($id);
            $updatestatus->status = $status;
            $updatestatus->save();
            $request->session()->flash("success", "Request is completed successfully");
            return redirect(url('withdrawalpending'));
        } else {

            return view("withdrawal.updatestatus", compact("withdrawal"));
        }
    }
    public function prizedistribute(Request $request)
    {
        $withdrawal = WithdrawalRequest::where("status", 'PENDING')->with('users')->get();
        if ($request->isMethod('post')) {
            $date = $request->date;
            $users = $request->users;
            $amount = $request->amount;
            $userpize = new UserPrize();
            $allcheck = UserPrize::where('date', $date)->first();
            if (empty($allcheck)) {

                $quiz = Quiz::where("date", $date)->first();

                $questions = Question::where("status", 1)->where("quiz", $quiz->id)->get();
                echo "<pre>";
                print_r($questions->toArray());
                $questiontotal = Question::where("status", 1)->where("quiz", $quiz->id)->count();
                $completecorrect = array();
                $orderId = array();
                if (!empty($questions)) {

                    foreach ($questions as $question) {


                        $userlist = UserQuestion::where("question_id", $question->id)->where("given_ans", $question->correct)->get();
                        foreach ($userlist as $val) {
                            $completecorrect[$val->user_id] = @$completecorrect[$val->user_id] + 1;
                            $orderId[$val->user_id]=$val->order_id;
                        }
                    }
                    print_r($completecorrect); 
                    print_r($orderId); 
                    exit;
                    foreach($completecorrect as $key=>$value)
                    {
                        if($questiontotal==$value)
                        {
                            $orderDetail=Order::where("id",$orderId[$key])->where("order_status","Success")->where("user_id",$key)->first();
                            $amount=$orderDetail->amount*$quiz->priceratio;
                            $userpize = new UserPrize();
                            $userpize->price = $amount ;
                            $userpize->user_id = $val->user_id;
                            $userpize->date = $date;
                            $userpize->save();
                        }
                    }
                    print_r($completecorrect); exit;

                    $request->session()->flash("success", "Request is completed successfully");
                    return redirect(url('prizedistribute'));
                } else {
                    $request->session()->flash("error", "No Question Available");
                    return redirect(url('prizedistribute'));
                }
            } else {
                $request->session()->flash("error", "Already Submitted");
                return redirect(url('prizedistribute'));
            }
        } else {
            return view("withdrawal.prizedistribute", compact("withdrawal"));
        }
    }
    public function winnerlist(Request $request)
    {
        if ($request->isMethod('post') &&  !empty($request->date)) {
            $winner = UserPrize::where("date", date("Y-m-d", strtotime($request->date)))->get();
            $date = date("Y-m-d", strtotime($request->date));
        } else {
            $winner = UserPrize::where("date", date("Y-m-d"))->get();
            $date = date("Y-m-d");
        }

        //$password= Hash::make('')


        return view("withdrawal.winnerlist", compact("winner", "date"));
    }
}
