@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="main-page">
        <div class="row">
            <h3 class="title1">View Question :</h3>
            <div class="form-grids row widget-shadow" data-example-id="basic-forms">
                <div class="form-title">
                    <h4>View Question :</h4>
                </div>
                <div class="form-body">
                    <table id="datatable" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Set Name</th>
                                <th>Total Question</th>
                                <th>Price Ratio</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($questionData as $val) 

                          
                            <tr>
                             
                                <td>{{$val->title}}</td>
                                <td>{{$val->total_question}}</td>
                                <td>{{$val->priceratio}}</td>
                                <td>{{$val->date}}</td>
                           
                                <td>
                                    <a href="{{url('editquestion')}}/{{$val->id}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                                    <a href="{{url('deletequestion')}}/{{$val->id}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                              
                            </tr>
                          @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                                <th>Set Name</th>
                                <th>Total Question</th>
                                <th>Price Ratio</th>
                                <th>Date</th>
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