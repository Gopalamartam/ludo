@extends('layouts.app')

@section('content')
<div id="page-wrapper">
	<div class="main-page">
		<div class="row">
			<h3 class="title1">Edit Category :</h3>
			<div class="form-grids row widget-shadow" data-example-id="basic-forms">
				<div class="form-title">
					<h4>Edit Category :</h4>
				</div>
				<div class="form-body">
				{{Form::open(array('','class'=>'form-horizontal','enctype'=>'multipart/form-data',"id"=>"userForm",'novalidate')) }}
				<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Link</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" id="link" placeholder="link" name="link" value="{{$userData->link}}">
							</div>
						
							
							<!-- <div class="col-sm-2">
							<p class="help-block">Your help text!</p>
						</div> -->
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Order</label>
							<div class="col-sm-8">
								<select name="linkorder" class="form-control1" required>
									<option value="">Select Order</option>
									<option value="1" @if($userData->linkorder==1) selected @endif >1</option>
									<option value="2" @if($userData->linkorder==2) selected @endif >2</option>
									<option value="3" @if($userData->linkorder==3) selected @endif >3</option>
									<option value="4" @if($userData->linkorder==4) selected @endif >4</option>
									<option value="5" @if($userData->linkorder==5) selected @endif >5</option>
								</select>
							</div>

						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">&nbsp;</label>
							<div class="col-sm-8">
                                <input type="hidden" name="id" value="{{$userData->id}}">
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