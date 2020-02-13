<style>
  .alert-success {
    color: #3c763d;
    background-color: #dff0d8;
    border-color: #d6e9c6;
    position: absolute;
    z-index: 9999;
    width: 29%;
  
    right: 0;
    top: 91px;
}
.alert-danger {
  position: absolute;
    z-index: 9999;
    width: 29%;
  
    right: 0;
    top: 91px;
}
</style>
@if (session()->has('success'))
    <div class="alert alert-success alert-block" > <a class="close" data-dismiss="alert" href="#">×</a>
              <h4 class="alert-heading">Success!</h4>
              {{session()->get('success')}}
    </div>
		@endif
		@if(session()->has('error'))
		<div class="alert alert-danger alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
              <h4 class="alert-heading">Error!</h4>
              {{session()->get('error')}}
        </div>
		@endif
    <div class="alert alert-success alert-block" id="ajaxsuccess" style="display:none"> <a class="close" data-dismiss="alert" href="#">×</a>
              <h4 class="alert-heading">Success!</h4>
              Request is completed successfully
        </div>
        @foreach($errors->all() as $error)
        <div class="alert alert-danger alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
            <h4 class="alert-heading">Error!</h4>
            {{$error}}
        </div>
        @endforeach
