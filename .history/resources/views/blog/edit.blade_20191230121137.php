@extends('layouts.app')

@section('content')
<div id="page-wrapper">
	<div class="main-page">
		<div class="row">
			<h3 class="title1">Edit Blog :</h3>
			<div class="form-grids row widget-shadow" data-example-id="basic-forms">
				<div class="form-title">
					<h4>Edit Blog :</h4>
				</div>
				<div class="form-body">
				{{Form::open(array('','class'=>'form-horizontal','enctype'=>'multipart/form-data',"id"=>"userForm",'novalidate')) }}
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Title <spen>*</spen></label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" id="title" placeholder="title" name="title" required value="{{$userData->title}}">
							</div>
						
							
							<!-- <div class="col-sm-2">
							<p class="help-block">Your help text!</p>
						</div> -->
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Description <spen>*</spen></label>
							<div class="col-sm-8">
								<textarea  class="form-control"  name="description" required rows="7">{{$userData->description}}</textarea>
							</div>

						</div>
						
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Image <spen>*</spen></label>
							<div class="col-sm-8">
								<input type="file" class="form-control1" id="file" name="image" required>
							</div>

						</div>
						<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">&nbsp;</label>
							@if($userData->image)
							<img src="{{url('public/upload/post')}}/{{$userData->image}}" width="200">
							@endif

						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">&nbsp;</label>
							<div class="col-sm-8">
							<input type="hidden" class="form-control1" id="id" name="id" value="{{$userData->id}}" required>
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