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
                            <input type="text" class="form-control1" id="name" placeholder="Set Name" name="setname" required>
                        </div>


                        <!-- <div class="col-sm-2">
							<p class="help-block">Your help text!</p>
						</div> -->
                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Date</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control1" id="date" placeholder="date" name="date" required>
                        </div>


                        <div class="col-sm-2">
                            <p class="help-block"><small>Date of Question Display</small></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">No Of Question</label>
                        <div class="col-sm-8">
                            <input type="number" min="1" class="form-control1" id="name" placeholder="No Of Question" name="noofquestion" required>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Price Ratio</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control1" id="name" placeholder="Price Ratio" name="priceratio" required>
                        </div>
                        <div class="col-sm-2">
                            <p class="help-block"><small>Example:User amount 100 and Price ratio 2 then Winning Amount is 200 </small></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Option 3</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" id="name" placeholder="Option 3" name="option3" required>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Option 4</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" id="name" placeholder="Option 4" name="option4" required>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Correct</label>
                        <div class="col-sm-8">
                            <select name="correct" class="form-control1" required>
                                <option value="">Select Correct</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>

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