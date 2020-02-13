@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="main-page">
        <div class="row">
            <h3 class="title1">View Order :</h3>
            <div class="form-grids row widget-shadow" data-example-id="basic-forms">
                <div class="form-title">
                    <h4>View Order :</h4>
                </div>
                <div class="form-body">
                    <table id="datatable" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>User Name</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Txn Id</th>
                                <th>Order Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order as $val)

                          
                            <tr>
                            <th>User Name</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Txn Id</th>
                                <th>Order Status</th>

                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>User Name</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Txn Id</th>
                                <th>Order Status</th>
                            </tr>
                        </tfoot>
                    </table>

                </div>
            </div>

        </div>
    </div>
</div>


@endsection