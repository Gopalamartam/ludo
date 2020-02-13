@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="main-page">
        <div class="row">
            <h3 class="title1">Add Question Set:</h3>
            <div class="form-grids row widget-shadow" data-example-id="basic-forms">
                <div class="form-title">
                    <h4>Add Question Set:</h4>
                </div>
                <div class="form-body">
                    {{Form::open(array('','class'=>'form-horizontal','enctype'=>'multipart/form-data',"id"=>"userForm",'novalidate')) }}
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Set Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" id="name" placeholder="Set Name" name="setname" value="{{$questionData->title}}" required>
                        </div>


                        <!-- <div class="col-sm-2">
							<p class="help-block">Your help text!</p>
						</div> -->
                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Date</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control1" id="date" placeholder="date" name="date" value="{{$questionData->date}}" required>
                        </div>


                        <div class="col-sm-2">
                            <p class="help-block"><small>Date of Question Display</small></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">No Of Question</label>
                        <div class="col-sm-8">
                            <input type="number" min="1" class="form-control1" id="name" placeholder="No Of Question" name="noofquestion" required value="{{$questionData->total_question}}">
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Price Ratio</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control1" id="name" placeholder="Price Ratio" name="priceratio" required value="{{$questionData->priceratio}}">
                        </div>
                        <div class="col-sm-2">
                            <p class="help-block"><small>Example:User amount 100 and Price ratio 2 then Winning Amount is 200 </small></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Status</label>
                        <div class="col-sm-8">
                           <select name="status" class="form-control">
                               <option value="">Select Status</option>
                               <option value="1" @if($questionData->status==1) selected @endif >Active</option>
                               <option value="2" @if($questionData->status==1) selected @endif >DeActive</option>
                           </select>
                        </div>

                    </div>
                   

                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">&nbsp;</label>
                        <div class="col-sm-8">
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