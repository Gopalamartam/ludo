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
                                <th>Question Set Name</th>
                                <th>Question</th>
                                <th>Option 1</th>
                                <th>Option 2</th>
                                <th>Option 3</th>
                                <th>Option 4</th>
                                <th>Correct</th>
                                <th>Date</th>
                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($questionData as $val) 

                          
                            <tr>
                             
                                <td>{{$val->question}}</td>
                                <td>{{$val->option1}}</td>
                                <td>{{$val->option2}}</td>
                                <td>{{$val->option3}}</td>
                                <td>{{$val->option4}}</td>
                                <td>{{$val->correct}}</td>
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
                            <th>Question</th>
                                <th>Option 1</th>
                                <th>Option 2</th>
                                <th>Option 3</th>
                                <th>Option 4</th>
                                <th>Correct</th>
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