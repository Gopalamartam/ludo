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
                                <th>Video</th>
                                <th>Title</th>
                               
                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($blogData as $val) 

                            <?php if(!empty($val->youtubeurl)) 
                            $image=$val->youtubeurl ;
                            else 
                            $image="avatar.jpg" ;
                             ?>
                            <tr>
                                <td><object src="{{url('public/upload/post')}}/{{$image}}" width="50px"></object></td>
                                <td>{{$val->title}}</td>
                                <td>{{$val->description}}</td>
                                <td>
                                    <a href="{{url('editblog')}}/{{$val->id}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                                    <a href="{{url('deleteblog')}}/{{$val->id}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                              
                            </tr>
                          @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                            <th>Image</th>
                                <th>Title</th>
                                <th>Description</th>
                                
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