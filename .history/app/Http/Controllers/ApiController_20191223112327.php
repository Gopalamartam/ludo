<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


use DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\model\Blog;
use App\model\Category;
use App\model\SubCategory;
use App\model\Question;
use App\model\Setting;
use App\model\UserQuestion;
use App\model\UserPrize;
use App\model\WithdrawalRequest;
use App\model\Batting;
use App\model\HoWplay;
use App\model\Quiz;






class ApiController extends Controller
{

	/*protected function respondWithToken($token)
	{
	  return response()->json([
	    'access_token' => $token,
	    'token_type' => '123456',
	    'expires_in' => auth()->factory()->getTTL() * 60
	  ]);
	}*/

	public function register(Request $request)
	{
		//echo "ewewe";die;
		$name 		= $request->input('name');
		$email 			= $request->input('email');
		$phone 			= $request->input('phone');

		$bank 			= $request->input('bank');
		$acount_no 			= $request->input('acount_no');
		$ifsc 			= $request->input('ifsc');
		$paytm 			= $request->input('paytm');
		

		
		$refercode 		= $request->input('refercode');




		$msg = '';
		if (!empty($name)  && !empty($email) && !empty($phone) ) {
			//$usercheck = User::where('email', $email)->first();
			$phonecheck = User::where('phone', $phone)->first();
			/* if (!empty($usercheck)) {
				$msg = "Email Id Already Exists";
				return response()->json(['statusCode' => 400, 'message' => $msg, 'data' => array("id" => "")]);
			} else */ 
			if (!empty($phonecheck)) {
				$msg = "Phone No Already Exists";
				return response()->json(['statusCode' => 400, 'message' => $msg, 'data' => array("id" => "")]);
			}  else {
				$referuser_id = '';
				if (!empty($refercode)) {
					$referuser = User::where('refercode', $refercode)->first();
					if (!empty($referuser)) {
						$referuser_id = $referuser->id;
					} else {
						$msg = "Wrong Refer code";
						return response()->json(['statusCode' => 400, 'message' => $msg, 'data' => array("id" => "")]);
					}
				}

				$newprofileImage = '';
				if (isset($_FILES['image']['name'])) {
					$profileimagename = $_FILES['image']['name'];
					$tmpimage1 = $_FILES['image']['tmp_name'];
					$newprofileImage = rand(00000, 99999) . date('d') . $profileimagename;
					$location = "public/upload/profile/";
					move_uploaded_file($tmpimage1, $location . $newprofileImage);
				}
				$otp = rand(1111, 9999);

				$user = User::create([
					'name' 	=> $name,
					'phone' 		=> $phone,
					'email' 		=> $email,
					'bank' 	=> $bank,
					'acount_no' 		=> $acount_no,
					'ifsc' 		=> $ifsc,
					'paytm' 	=> $paytm,
					'password' 		=> bcrypt(12345),
					'otp_match'     => $otp,
					'image'     => $newprofileImage,
					'parent_user_id'     => $referuser_id,
					'status'     => 0,

				]);
				$refercode = strtoupper(substr($name, 0, 3));
				$refercode = $refercode . $user->id;
				$user->refercode = $refercode;
				$user->save();

				$msg = 'Registration successfully .';
				/* $data = array('name' => "User", 'OTP' =>  $otp, 'msg' =>  $msg);
				Mail::send(['text' => 'mail'], $data, function ($message) {
					$email = $_POST['email'];
					$message->to($email, 'From Social Hub')->subject('This is your verify otp mail');
					$message->from('info@jloft.com', 'jploft');
				}); */
				$returndata = array();
				$returndata=$this->getuserDetail($user->id);




				return response()->json(['statusCode' => 200, 'message' => 'User Registration Completed Successfully', 'data' => $returndata]);
			}
		} else {
			$msg = "Wrong Paramenter Passed";
			return response()->json(['statusCode' => 400, 'message' => $msg, 'data' => array("userId" => "")]);
		}



		//$token = auth()->login($user);

		//return $this->respondWithToken($token);
	}
	public function otpMatch(Request $request)
	{
		$userId = $request->input('userId');
		$otp = $request->input('otp');
		if (empty($otp) || empty($userId)) {

			return response()->json([
				'statusCode' => 400,
				'message' => 'Wrong parameter Passed',
				'data' => array("userId" => "")
			]);
		}

		$user = User::where('otp_match', $otp)->where("id", $userId)->first();
		if ($user) {
			DB::table('users')->where('id', $userId)->update(array('status' => 1));

			$returndata = array();
			$returndata=$this->getuserDetail($user->id);

			
			return response()->json([
				'statusCode' => 200,
				'message' => 'Account Verified Succefully',
				'data' => $returndata
			]);
		} else {
			return response()->json([
				'statusCode' => 400,
				'message' => 'otp does not match',
				'data' =>  array("userId" => "")
			]);
		}
	}
	public function login(Request $request)
	{
		$phone		= !empty($_REQUEST['phone']) ? trim($_REQUEST['phone']) : '';
	


		if (!empty($phone)) {

			$user = User::where('phone', '=', $phone)->first();

			if (!$user) {
				
				$msg = "Phone No Does Not Exists";
				return response()->json(['statusCode' => 400, 'message' => $msg, 'data' => array("userId" => '')]);
			}
			
			
			/* 	User::where("id", $user->id)->update(['devicetoken' => $deviceToken]); */
			$otp = rand(1111, 9999);
			User::where("id", $user->id)->update(['otp_match' => $otp]); 
		
			$user = User::where('phone', '=', $phone)->first();
			$returdata=$this->getuserDetail($user->id);
		
			$msg = "Otp Sent Successfully";
			return response()->json(['statusCode' => 200, 'message' => $msg, 'data' => $returdata]);
		} else {
			$msg = "Wrong Paramenter Passed";
			return response()->json(['statusCode' => 400, 'message' => $msg, 'data' => array("userId" => "")]);
		}
	}
	public function getuserDetail($userid)
	{
	
			$user = User::where('id', '=', $userid)->first();
			$data = array(
				'userId' => ($user->id) ? $user->id : '',
				'name' => ($user->name) ? $user->name : '',
				'email' => ($user->email) ? $user->email : '',
				'phone' => ($user->phone) ? $user->phone : '',
				'bank' => ($user->bank) ? $user->bank : '',
				'acount_no' => ($user->acount_no) ? $user->acount_no : '',
				'ifsc' => ($user->ifsc) ? $user->ifsc : '',
				'paytm' => ($user->paytm) ? $user->paytm : '',
				'image' => ($user->image) ? url('public/upload/profile') . '/' . $user->image : '',
				'refercode' => ($user->refercode) ? $user->refercode : '',
				'otp' => ($user->otp_match) ? $user->otp_match : '',
				'wallet' => ($user->wallet) ? $user->wallet : '',



			);
			return $data;
	}
	public function resendOtp(Request $request)
	{

		$userId = $request->input('userId');
		if (!empty($userId)) {
			$checkEmail = User::where('id', $userId)->first();
			if ($checkEmail) {
				$otpnumber = rand(1111, 9999);

				$insert = DB::table('users')->where('id', $userId)->update(['otp_match' => $otpnumber]);
				if ($insert) {

					$user_text = $otpnumber;

					$msg = 'Verification Otp Send. Please Check';
					/* $data = array('name' => "User", 'OTP' =>  $user_text, 'msg' =>  $msg);
					Mail::send(['text' => 'mail'], $data, function ($message) {
						$email = $_POST['email'];
						$message->to($email, 'From Social Hub')->subject('This is your verify otp mail');
						$message->from('info@jloft.com', 'jploft');
					}); */

					return response()->json([
						'statusCode' => 200,
						'message' => $msg,
						"data" => array("userId" => $userId, 'otp' => $otpnumber)

					]);
				} else {
					return response()->json([
						'statusCode' => 400,
						'message' => 'Somthing Went Wrong',
						'data' => array("userId" => "")
					]);
				}
			} else {
				return response()->json([
					'statusCode' => 400,
					'message' => 'Invaild User Id',
					'data' => array("userId" => "")
				]);
			}
		} else {
			return response()->json([
				'statusCode' => 400,
				'message' => 'Wrong Paramenter Passed',
				'data' => array("userId" => "")
			]);
		}
	}
	public function myprofile(Request $request)
	{
		$userId		= !empty($_REQUEST['userId']) ? trim($_REQUEST['userId']) : '';
	


		if (!empty($userId)) {
			$user = User::where('id', '=', $userId)->where('status', '=', 1)->first();
			if (!$user) {
				
				$msg = "User Does Not Exists or not verified";
				return response()->json(['statusCode' => 400, 'message' => $msg, 'data' => array("userId" => '')]);
			}
			
			/* 	User::where("id", $user->id)->update(['devicetoken' => $deviceToken]); */
			$data = array(
				'userId' => ($user->id) ? $user->id : '',
				'name' => ($user->name) ? $user->name : '',
				'email' => ($user->email) ? $user->email : '',
				'phone' => ($user->phone) ? $user->phone : '',
				'bank' => ($user->bank) ? $user->bank : '',

				'acount_no' => ($user->acount_no) ? $user->acount_no : '',
				'ifsc' => ($user->ifsc) ? $user->ifsc : '',
				'paytm' => ($user->paytm) ? $user->paytm : '',
				'image' => ($user->image) ? $user->image : '',
				'refercode' => ($user->refercode) ? $user->refercode : '',
				'wallet' => ($user->wallet) ? $user->wallet : '',



			);
			$msg = "My Profile";
			return response()->json(['statusCode' => 200, 'message' => $msg, 'data' => $data]);
		} else {
			$msg = "Wrong Paramenter Passed";
			return response()->json(['statusCode' => 400, 'message' => $msg, 'data' => array("userId" => "")]);
		}
	}


	public function forgetpassword(Request $request)
	{
		$phone = $request->phone;

		$user = User::where('phone', $phone)->where('status', 1)->first();
		if (!empty($user)) {

			$otp = rand(1111, 9999);

			$user->otp_match = $otp;
			$user->save();
			$msg = 'Verification Otp Send On Email. Please Check';
			/* $data = array('name' => "User", 'OTP' =>  $user_text, 'msg' =>  $msg);
				Mail::send(['text' => 'mail'], $data, function ($message) {
					$email = $_POST['email'];
					$message->to($email, 'From Social Hub')->subject('This is your verify otp mail');
					$message->from('info@jloft.com', 'jploft');
				}); */

			return response()->json([
				'statusCode' => 200,
				'message' => $msg,
				"data" => array("userId" => $user->id, 'otp' => $otp)

			]);
		} else {
			$msg = "Email Id Not Exist ";
			return response()->json(['statusCode' => 400, 'message' => $msg, 'data' => array("userId" => "")]);
		}
	}



	public function changepassword(Request $request)
	{
		$newpassword = $request->newpassword;
		$oldpassword = $request->oldpassword;
		$userId = $request->userId;
		$user = User::find($userId);
		if (!empty($oldpassword)) {

			if (!Hash::check($oldpassword, $user->password)) {
				$msg = "Password Not Match";
				return response()->json(['statusCode' => 400, 'message' => $msg, 'data' => array("userId" => $userId)]);
			} else {

				$user->password = bcrypt($newpassword);
				$user->save();
			}
		} else {
			$user->password = bcrypt($newpassword);
			$user->save();
		}
		$msg = "Password Updated Successfully";
		return response()->json(['statusCode' => 200, 'message' => $msg, 'data' => array("userId" => $userId)]);
	}
	public function updateProfile(Request $request)
	{

		$userId 			= $request->input('userId');
		$name 		= $request->input('name');
		//$phone 				= $request->input('phone');
		//$email 				= $request->input('email');
		$bank 			= $request->input('bank');
		$acount_no 			= $request->input('acount_no');
		$ifsc 			= $request->input('ifsc');
		$paytm 			= $request->input('paytm');
		$checkUser = User::where('id', $userId)->first();

		if (!empty($checkUser)) {
			if (!empty($name)) {
				$newprofileImage = '';
				$newfrontside = '';
				if (isset($_FILES['image']['name'])) {
					$profileimagename = $_FILES['image']['name'];
					$tmpimage1 = $_FILES['image']['tmp_name'];
					$newprofileImage = rand(00000, 99999) . date('d') . $profileimagename;
					$location = "public/upload/profile/";
					move_uploaded_file($tmpimage1, $location . $newprofileImage);
				} else {
					$newprofileImage = $checkUser->image;
				}



				$updateData = User::where('id', $userId)->update([
					'name' 			=> $name,
					'image' 				=> $newprofileImage,
					'bank' 				=> $bank,
					'acount_no' 			=> $acount_no,
					'ifsc' 				=> $ifsc,
					'paytm' 				=> $paytm,
				]);


			
				$userArray = array();
				$userArray=$this->getuserDetail($userId);
			

				$message = 'Updated Successfully';
				return response()->json([
					'statusCode' => 200,
					'message' => $message,
					'data' => $userArray,
				]);
			} else {
			
				$userArray=$this->getuserDetail($userId);
				$message = 'Profile Detail ';
				return response()->json([
					'statusCode' => 200,
					'message' => $message,
					'data' => $userArray,
				]);
			}
		} else {
			$msg = "Invalid User Id ";
			return response()->json(['statusCode' => 400, 'message' => $msg, 'data' => array()]);
		}
	}

	/* public function homepage(Request $request)
	{
		$userId = $request->input('userId');

		if (empty($userId)) {
			return response()->json([
				'statusCode' => 400,
				'message' => 'Wrong Parameter Passed',
				'data' => array()
			]);
		} else {

			$category = Category::where("status", 1)->orderBy("linkorder", "ASC")->limit(5)->get();
			$result = array();

			foreach ($category as $key => $val) {
				$result[$key]['categoryLink'] = $val->link;
			
			}
			$subcategory = SubCategory::where("status", 1)->get();
			$subcategoryTemp = array();
			if (!empty($subcategory)) {
				foreach ($subcategory as $key1 => $val1) {
					$subcategoryTemp[$key1]['links'] = $val1->links;
					$subcategoryTemp[$key1]['image'] = $val1->image ? url("public/upload/category/")."/". $val1->image : '';
				}
			}
			
			$message = "Category List";
			return response()->json([
				'statusCode' => 200,
				'message' => $message,
				'data' => array("category"=>$result,"subcategory"=>$subcategoryTemp),
			]);
		}
	} */

	public function getQuestion(Request $request)
	{
		$userId = $request->input('userId');
	

		$todayquiz = Quiz::where("date", date("Y-m-d"))->where("status", 1)->first();
		$ydate=date('Y-m-d',strtotime("-1 days"));	
		$quizeyesterday = Quiz::where("date", $ydate)->where("status", 1)->first();

		$questiontoday = Question::where("quiz", $todayquiz->id)->where("status", 1)->get();
	
		$result = array();
		
		foreach ($questiontoday as $key => $value) {
				//echo  $value->id;die();
			$quizcheck = UserQuestion::where("question_id", $value->id)->where("user_id", $userId)->where("quiz", $value->quiz)->first();
		
			$result[$key]['id'] = $value->id;
			$result[$key]['question'] = $value->question;
			$result[$key]['option1'] = $value->option1;
			$result[$key]['option2'] = $value->option2;
			$result[$key]['option3'] = $value->option3;
			$result[$key]['option4'] = $value->option4;
			$result[$key]['quiz_id'] = $value->quiz;
			$result[$key]['quiz_id'] = $value->quizcheck;
			
			
		}

		foreach ($questionyesdaydata as $key3 => $value3) {

			$questionyesday1 = Question::where("quiz", $value3->id)->where("date", $ydate)->where("status", 1)->get();
			//echo  $value3->id.'wewe'.$userId;die();
			$quizcheckq = UserQuestion::where("quiz", $value3->id)->where("user_id", $userId)->first();

			//print_r($quizcheckq);die();
			if(empty($quizcheckq))
			{
				$issubmit='0';
			}else{
				$issubmit='1';
			}

			
			$result['oldquestion'][$key3]['id'] = $value3->id;
			$result['oldquestion'][$key3]['title'] = $value3->title;
			$result['oldquestion'][$key3]['date'] = $value3->date;
			$result['oldquestion'][$key]['issubmit'] = $issubmit;
			foreach ($questionyesday1 as $key4 => $value4) {

			$UserQuestion = UserQuestion::where("question_id", $value4->id)->first();

			

			$result['oldquestion'][$key3]['question'][$key4]['id'] = $value4->id;
			$result['oldquestion'][$key3]['question'][$key4]['question'] = $value4->question;
			$result['oldquestion'][$key3]['question'][$key4]['option1'] = $value4->option1;
			$result['oldquestion'][$key3]['question'][$key4]['option2'] = $value4->option2;
			$result['oldquestion'][$key3]['question'][$key4]['option3'] = $value4->option3;
			$result['oldquestion'][$key3]['question'][$key4]['option4'] = $value4->option4;
			$result['oldquestion'][$key3]['question'][$key4]['correct'] = $value4->correct;
			$result['oldquestion'][$key3]['question'][$key4]['userans'] = $UserQuestion->given_ans;
			}
			
		}
			$message = "Today Question";
			return response()->json([
				'statusCode' => 200,
				'message' => $message,
				'data' => $result,
			]);
		 /*else {
			$result = array("question" => "");
			$message = "No  Question";
			return response()->json([
				'statusCode' => 400,
				'message' => $message,
				'data' => $result,
			]);
		}*/
	}

	public function storeQuestion(Request $request)
	{
		 $userid = $request->userid;
		 $questionId = $request->questionId;
		 $quizId = $request->quizId;
		 $givenAns = $request->givenAns;
		//die;
		$questionId = explode(",", $questionId);
		$givenAns = explode(",", $givenAns);

		$arrayAnser=array("question_id"=>1,"ans"=>1);
		if(!empty($userid) && !empty($questionId) && !empty($givenAns) )
		{
			
		foreach ($questionId as $key => $val) {
			$userQuestion = new UserQuestion();
			$userQuestion->user_id = $userid;
			$userQuestion->question_id = $val;
			$userQuestion->quiz = $quizId;
			$userQuestion->given_ans = $givenAns[$key];
			$userQuestion->save();
		}
			$message = "Inserted Successfully";
			return response()->json([
				'statusCode' => 200,
				'message' => $message,
				'data' => array("userid" => $userid),
			]);
		}
		else{
			$message = "Wrong Parameter Passed";
			return response()->json([
				'statusCode' => 400,
				'message' => $message,
				'data' => array("userid" => $userid),
			]);
		}

	

	
	}

	public function prize()
	{
		$userprize = UserPrize::where("date", date("Y-m-d"))->get();
	
		$result = array();
		if (!empty($userprize)) {
			
			foreach ($userprize as $key => $val) {
				$result[$key]['name'] = @$val->user->name ? $val->user->name : '';
				$result[$key]['price'] = @$val->price;
				$result[$key]['date'] = @$val->date;
			}
			
			$message = "Winner List";
			return response()->json([
				'statusCode' => 200,
				'message' => $message,
				'data' => $result
			]);
		} else {
			$userprize = UserPrize::orderBy("id", "DESC")->limit(10)->get();
			foreach ($userprize as $key => $val) {
				$result[$key]['name'] = @$val->user->name ? $val->user->name : '';
				$result[$key]['price'] = @$val->price;
				$result[$key]['date'] = @$val->date;
			}
			if(empty($result))
			{
				$result=array("id"=>"");
			}
			$message = "Winner List";
			return response()->json([
				'statusCode' => 200,
				'message' => $message,
				'data' => $result
			]);
		}
	}

	public function withdrawal(Request $request)
	{
		$userId = $request->userId;
		
		$userprize = UserPrize::where("user_id", $userId)->get();
		$result = array();
		$totalprice = 0;
		if (!empty($userprize)) {
			foreach ($userprize as $key => $val) {
				$result[$key]['name'] = @$val->user->name ? $val->user->name : '';
				$result[$key]['price'] = @$val->price;
				$result[$key]['date'] = @$val->date;
				$totalprice = $totalprice + $val->price;
			}
		}
		$withdral = array();
		$WithdrawalRequestdata = WithdrawalRequest::where("user_id", $userId)->get();
		$withdralamount = 0;
		if (!empty($WithdrawalRequestdata[0])) {
			foreach ($WithdrawalRequestdata as $key => $val) {
				$withdral[$key]['status'] = @$val->status;
				$withdral[$key]['price'] = @$val->price;
				$withdral[$key]['date'] = @$val->date;
				$withdral[$key]['id'] = @$val->id;
				if ($val->status == "SUCCESS") {
					$withdralamount = $withdralamount + $val->price;
				}
			}
		}
		$totalprice = $totalprice - $withdralamount;
		$setting = Setting::where("metakey", "minwithdrawal")->where("status", 1)->first();
		$message = "Winner List";
		return response()->json([
			'statusCode' => 200,
			'message' => $message,
			'data' => array("winner" => $result, "withdrawalreq" => $withdral, "totalAmount" => $totalprice, "minAmount" => $setting->metavalue)
		]);
	}
	public function battingRequest(Request $request)
	{
		$userId = $request->userId;
		$amount = $request->amount;
		if(!empty($userId) && !empty($amount))
		{
			$requstdata = new UserPrize();
			$requstdata->user_id = $userId;
			$requstdata->price = $amount;
			$requstdata->status = "PENDING";
			$requstdata->date = date("Y-m-d");
			$requstdata->save();
			$message="request Submitted Successfully";
			return response()->json([
				'statusCode' => 200,
				'message' => $message,
				'data' => array("id"=>$requstdata->id)
			]);
		}
		else{
			$msg = "Wrong Paramenter Passed";
			return response()->json(['statusCode' => 400, 'message' => $msg, 'data' => array("id" => "")]);
		}
		
	}
	public function howplay(Request $request)
	{
		$start=$request->page;
		if(!empty($start))
		{
			$start--;
			$offset=$start*10;
			$limit=10;
			$blogs=HoWplay::where("status",1)->offset($offset)->limit($limit)->get();
			$totalblog=HoWplay::where("status",1)->count();

			$result=array();
			
			foreach($blogs as $key=>$val)
			{
				$result[$key]['title']=$val->title;
				$result[$key]['description']=$val->description;
				$result[$key]['shortDescrition']=substr($val->description,0,20);
				$result[$key]['image']=($val->image) ? url('public/upload/post') . '/' . $val->image : '';
				$result[$key]['thumbnail']=($val->thumbnail) ? url('public/upload/post') . '/' . $val->thumbnail : '';
				$result[$key]['date']=$val->created_at;
				$result[$key]['id']=$val->id;
			}
			$message="Blog List";
			return response()->json([
				'statusCode' => 200,
				'message' => $message,
				'data' => array("blogList"=>$result,"totalRecord"=>$totalblog)
			]);

		}
		else{
			$msg = "Wrong Paramenter Passed";
			return response()->json(['statusCode' => 400, 'message' => $msg, 'data' => array("id" => "")]);
		}
		
	}


		public function myBatting(Request $request)
	{
		$userId = $request->userId;
		$batting = UserPrize::where("user_id", $userId)->orderby('date','DESC')->get();
		$result = array();
		if (!empty($batting)) {

			foreach ($batting as $key => $value) {
				# code...
			
			$result['id'] = $value->id;
			$result['result'] = '4/5';
			$result['date'] = $value->date;
			$result['amount'] = $value->price;
		
		}
			$message = "Result";
			return response()->json([
				'statusCode' => 200,
				'message' => $message,
				'data' => $result,
			]);
		} else {
			$result = array("question" => "");
			$message = "Data Not Found";
			return response()->json([
				'statusCode' => 400,
				'message' => $message,
				'data' => $result,
			]);
		}
	}

	public function history(Request $request)
	{
		$userId = $request->userId;
		$batting = UserQuestion::where("user_id", $userId)->groupby('quiz')->orderby('date','DESC')->limit(7)->get();


		$result = array();
		if (!empty($batting)) {

			foreach ($batting as $key => $value) {
				$quiz = Quiz::where("id", $value->quiz)->first();
			
			$result[$key]['id'] = $value->id;
			$result[$key]['quizid'] = $value->quiz;
			$result[$key]['quiz'] = $quiz->title;
			$result[$key]['date'] = $value->date;
			
		
		}
			$message = "Result";
			return response()->json([
				'statusCode' => 200,
				'message' => $message,
				'data' => $result,
			]);
		} else {
			$result = array("question" => "");
			$message = "Data Not Found";
			return response()->json([
				'statusCode' => 400,
				'message' => $message,
				'data' => $result,
			]);
		}
	}

	public function historyDetails(Request $request)
	{
		$date = $request->date;
		$quizId = $request->quizId;
		
		
		$userId = $request->input('userId');
	

		$questionyesdaydata = Quiz::where("id", $quizId)->get();
		
		$result = array();
		
	foreach ($questionyesdaydata as $key3 => $value3) {

			$questionyesday1 = Question::where("quiz", $value3->id)->get();
			//echo  $value3->id.'wewe'.$userId;die();
			$quizcheckq = UserQuestion::where("quiz", $value3->id)->where("user_id", $userId)->first();

			//print_r($quizcheckq);die();
			if(empty($quizcheckq))
			{
				$issubmit='0';
			}else{
				$issubmit='1';
			}

			
			$result['questions'][$key3]['id'] = $value3->id;
			$result['questions'][$key3]['title'] = $value3->title;
			$result['questions'][$key3]['date'] = $value3->date;
			$result['questions'][$key3]['issubmit'] = 1;
			foreach ($questionyesday1 as $key4 => $value4) {

			$UserQuestion = UserQuestion::where("question_id", $value4->id)->first();

			

			$result['questions'][$key3]['question'][$key4]['id'] = $value4->id;
			$result['questions'][$key3]['question'][$key4]['question'] = $value4->question;
			$result['questions'][$key3]['question'][$key4]['option1'] = $value4->option1;
			$result['questions'][$key3]['question'][$key4]['option2'] = $value4->option2;
			$result['questions'][$key3]['question'][$key4]['option3'] = $value4->option3;
			$result['questions'][$key3]['question'][$key4]['option4'] = $value4->option4;
			$result['questions'][$key3]['question'][$key4]['correct'] = $value4->correct;
			$result['questions'][$key3]['question'][$key4]['userans'] = $UserQuestion->given_ans;
			}
			
		}
			//print_r($questionyesdaydata);die();
			if(empty($questionyesdaydata[0]))
			{
				$message = "Data not find";
				return response()->json([
				'statusCode' => 201,
				'message' => $message,
				
			]);
			}
			else
			{
				$message = "Success";
				return response()->json([
				'statusCode' => 200,
				'message' => $message,
				'data' => $result,
			]);
			}
			
		 /*else {
			$result = array("question" => "");
			$message = "No  Question";
			return response()->json([
				'statusCode' => 400,
				'message' => $message,
				'data' => $result,
			]);
		}*/
}
}
