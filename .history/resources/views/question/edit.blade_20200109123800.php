@extends('layouts.app')

@section('content')
<div id="page-wrapper">
	<div class="main-page">
		<div class="row">
			<h3 class="title1">Edit Question :</h3>
			<div class="form-grids row widget-shadow" data-example-id="basic-forms">
				<div class="form-title">
					<h4>Edit Question :</h4>
				</div>
				<div class="form-body">
					{{Form::open(array('','class'=>'form-horizontal','enctype'=>'multipart/form-data',"id"=>"userForm",'novalidate')) }}
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Question Set <span>*</span></label>
						<div class="col-sm-8">
							<select name="quiz_id" class="form-control" required>
								<option value="">Select Question</option>
								@foreach($quizdata as $val)
								<option value='{{$val->id}}'>{{$val->title}}</option>
								@endforeach

							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Question</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" id="name" placeholder="Question" name="question" required value="{{$questionData->question}}">
						</div>


						<!-- <div class="col-sm-2">
							<p class="help-block">Your help text!</p>
						</div> -->
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Date</label>
						<div class="col-sm-8">
							<input type="date" class="form-control1" id="date" placeholder="date" name="date" required value="{{$questionData->date}}">
						</div>


						<div class="col-sm-2">
							<p class="help-block"><small>Date of Question Display</small></p>
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Option 1</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" id="name" placeholder="Option 1" name="option1" required value="{{$questionData->option1}}">
						</div>

					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Option 2</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" id="name" placeholder="Option 2" name="option2" required value="{{$questionData->option2}}">
						</div>

					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Option 3</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" id="name" placeholder="Option 3" name="option3" required value="{{$questionData->option3}}">
						</div>

					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Option 4</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" id="name" placeholder="Option 4" name="option4" required value="{{$questionData->option4}}">
						</div>

					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Correct</label>
						<div class="col-sm-8">
							<select name="correct" class="form-control1" required>
								<option value="">Select Correct</option>
								<option value="1" @if($questionData->correct==1) selected @endif >1</option>
								<option value="2" @if($questionData->correct==2) selected @endif >2</option>
								<option value="3" @if($questionData->correct==3) selected @endif >3</option>
								<option value="4" @if($questionData->correct==4) selected @endif >4</option>

							</select>
						</div>

					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">&nbsp;</label>
						<div class="col-sm-8">
							<input type="hidden" name="id" value="{{$questionData->id}}">
							<button type="submit" class="btn btn-default">Submit</button>
						</div>

					</div>



					</form>
				</div>
			</div>

		</div>
	</div>
</div>


@endsection