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
                            <?php
                            ?>
                            <tr>

                                <td>Question Set Name</td>
                                <td>Question</td>
                                <td>UserName</td>
                                <td>Order Id</td>
                                <td>Given Option</td>
                                <td>Correct</td>

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