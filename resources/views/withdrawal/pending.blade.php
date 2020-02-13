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


                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($withdrawal as $val)


                            <tr>

                                <td>{{@$val->users->name}}</td>
                                <td>{{@$val->users->phone}}</td>
                                <td>{{$val->price}}</td>
                              
                                <td>{{$val->date}}</td>
                                <td>{{$val->status}}</td>
                                <td>
                                    <a href="{{url('updatestatus')}}/{{$val->id}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                                  <!--   <a href="{{url('deletequestion')}}/{{$val->id}}" class="btn btn-danger"><i class="fa fa-trash"></i></a> -->
                                </td>

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