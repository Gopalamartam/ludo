@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="main-page">
        <div class="row">
            <h3 class="title1">View User :</h3>
            <div class="form-grids row widget-shadow" data-example-id="basic-forms">
                <div class="form-title">
                    <h4>View User :</h4>
                </div>
                <div class="form-body">
                    <table id="datatable" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Email</th>
                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($userData as $val) 

                            <?php if(!empty($val->image)) 
                            $image=$val->image ;
                            else 
                            $image="avatar.jpg" ;
                             ?>
                            <tr>
                                <td><img src="{{url('public/upload/profile')}}/{{$image}}" width="50px"></td>
                                <td>{{$val->name}}</td>
                                <td>{{$val->email}}</td>
                                <td>
                                    <a href="{{url('edituser')}}/{{$val->id}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                                    <a href="{{url('deleteuser')}}/{{$val->id}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                              
                            </tr>
                          @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                            <th>Image</th>
                                <th>Name</th>
                                <th>Email</th>
                                
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection