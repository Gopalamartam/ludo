@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="main-page">
        <div class="row">
            <h3 class="title1"> Prize Distribute :</h3>
            <div class="form-grids row widget-shadow" data-example-id="basic-forms">
                <div class="form-title">
                    <h4> Prize Distribute :</h4>
                </div>
                <div class="form-body">
                {{Form::open(array('','class'=>'form-horizontal','enctype'=>'multipart/form-data',"id"=>"userForm",'novalidate')) }}
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Amount</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" id="name" placeholder="Amount" name="amount">
							</div>
						
							
							<!-- <div class="col-sm-2">
							<p class="help-block">Your help text!</p>
						</div> -->
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">No of User</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" id="name" placeholder="no of user" name="users">
							</div>

                        </div>
                        <div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Date</label>
							<div class="col-sm-8">
								<input type="date" class="form-control1" id="name" placeholder="Date" name="date">
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