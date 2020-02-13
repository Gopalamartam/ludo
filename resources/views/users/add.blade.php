@extends('layouts.app')

@section('content')
<div id="page-wrapper">
	<div class="main-page">
		<div class="row">
			<h3 class="title1">Add User :</h3>
			<div class="form-grids row widget-shadow" data-example-id="basic-forms">
				<div class="form-title">
					<h4>Add User :</h4>
				</div>
				<div class="form-body">
				{{Form::open(array('','class'=>'form-horizontal','enctype'=>'multipart/form-data',"id"=>"userForm",'novalidate')) }}
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Name</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" id="name" placeholder="name" name="name">
							</div>
						
							
							<!-- <div class="col-sm-2">
							<p class="help-block">Your help text!</p>
						</div> -->
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Email</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" id="name" placeholder="email" name="email">
							</div>

						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Phone</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" id="name" placeholder="Phone" name="phone">
							</div>

						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Image</label>
							<div class="col-sm-8">
								<input type="file" class="form-control1" id="file" name="image">
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