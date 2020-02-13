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
                                <th>UserName</th>
                                <th>Order Id</th>
                                <th>Given Option</th>
                                <th>Correct</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($userquestion as $val)

                            $options[$val->option1]=$val->option1;
                            $options[$val->option2]=$val->option2;
                            $options[$val->option3]=$val->option3;
                            $options[$val->option4]=$val->option4;
                            <?php
                            ?>
                            <tr>

                                <td>{{$val->title}}</td>
                                <td>{{$val->question}}</td>
                                <td>{{$val->name}}</td>
                                <td>{{$val->order_id}}</td>
                                <td>{{$val->given_ans}}</td>
                                <td>
                                   
                                    {{$val->correct}}</td>

                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Question Set Name</th>
                                <th>Question</th>
                                <th>UserName</th>
                                <th>Order Id</th>
                                <th>Given Option</th>
                                <th>Correct</th>



                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection