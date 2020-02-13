@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="main-page">
        <div class="row">
            <h3 class="title1">View Withdrawal Request :</h3>
            <div class="form-grids row widget-shadow" data-example-id="basic-forms">
                <div class="form-title">
                    <h4>View Withdrawal Request :</h4>
                </div>
                <div class="form-body">
                    <table id="datatable" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>User Name</th>
                                <th>Mobile No</th>
                                <th>Price</th>
                                <th>Request Date</th>
                                <th>Status</th>


                             
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($withdrawal as $val)
                            <?php $id=$val->id; ?>

                            <tr>

                                <td>{{$val->users->name}}</td>
                                <td>{{$val->users->phone}}</td>
                                <td>{{$val->price}}</td>
                              
                                <td>{{$val->date}}</td>
                                <td>{{$val->status}}</td>
                              

                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                            <th>User Name</th>
                                <th>Mobile No</th>
                                <th>Price</th>
                                <th>Request Date</th>
                                <th>Status</th>


                               
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <div class="form-body">
                {{Form::open(array('','class'=>'form-horizontal','enctype'=>'multipart/form-data',"id"=>"userForm",'novalidate')) }}
						
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Status</label>
							<div class="col-sm-8">
                                <select name="status" id="" class="form-control">
                                    <option value="PENDING">Pending</option>
                                    <option value="SUCCESS">Completed</option>
                                    <option value="REJECT">Rejected</option>
                                </select>
							</div>

						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">&nbsp;</label>
							<div class="col-sm-8">
                                <input type="hidden" value="<?php echo $id; ?>" name="id">
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