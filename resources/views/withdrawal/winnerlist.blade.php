@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="main-page">
        <div class="row">
            <h3 class="title1">View Winner List :</h3>
            <div class="form-grids row widget-shadow" data-example-id="basic-forms">
                <div class="form-title">
                    <h4>View Winner List :</h4>
                </div>
                <div class="form-body">
                {{Form::open(array('','class'=>'form-horizontal','enctype'=>'multipart/form-data',"id"=>"userForm",'novalidate')) }}
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Date</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control1" id="date" placeholder="date" name="date" value="{{$date}}">
                        </div>
                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>

                    </div>
                    {{form::close()}}
                    <table id="datatable" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>User Name</th>
                                <th>Mobile No</th>
                                <th>Price</th>
                                <th> Date</th>




                            </tr>
                        </thead>
                        <tbody>
                            @foreach($winner as $val)


                            <tr>

                                <td>{{@$val->user->name}}</td>
                                <td>{{@$val->user->phone}}</td>
                                <td>{{$val->price}}</td>

                                <td>{{$val->date}}</td>


                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>User Name</th>
                                <th>Mobile No</th>
                                <th>Price</th>
                                <th> Date</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection