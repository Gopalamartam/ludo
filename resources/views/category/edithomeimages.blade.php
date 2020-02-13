@extends('layouts.app')

@section('content')
<div id="page-wrapper">
	<div class="main-page">
		<div class="row">
			<h3 class="title1">Edit Secondry Category :</h3>
			<div class="form-grids row widget-shadow" data-example-id="basic-forms">
				<div class="form-title">
					<h4>Edit Secondry Category :</h4>
				</div>
				<div class="form-body">
				{{Form::open(array('','class'=>'form-horizontal','enctype'=>'multipart/form-data',"id"=>"userForm",'novalidate')) }}
				<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Link</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" id="link" placeholder="link" name="link" value="{{$userData->links}}">
							</div>
						
							
							<!-- <div class="col-sm-2">
							<p class="help-block">Your help text!</p>
						</div> -->
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Image</label>
							<div class="col-sm-8">
								<input type="file" name="image" class="form-control">
							</div>

						</div>
						@if($userData->image)
                        <div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Image</label>
							<div class="col-sm-8">
							<img src="{{url('public/upload/category/')}}/{{$userData->image}}" width="200px">
							</div>

                        </div>
                        @endif
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