@extends('layouts.dashboard')


@section('sidebar')

@section('content')
<?php
    function getPageOffset($pageSize) {
        if(!isset($_GET['page'])) {
            return 0;
        }

        $pageNumber = $_GET['page'];            
        return ($pageNumber - 1) * $pageSize;
    }
?>
        <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Categories</h4>
                            <div class="add-product modal-area-button">
                                <a href="/addcategories">Add Categories</a>
                            </div>
                            <div class="asset-inner">
                                <table>
                                
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Created at</th>
                                        <th>Updated at</th>
                                        <th>Actions</th>
                                    </tr>
                                    <?php $no = 1; ?>
                                    @foreach($categories as $category)
                                    <tr>
                                        <td>{{ $no + getPageOffset(10)}}</td>
                                        <td>{{$category->name}}</td>
                                        <td> {{$category->created_at}} </td>
                                        <td>{{$category->updated_at}}</td>
                                        <td>
                                            <a href="{{route('categories.edit', $category->id)}}"><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                            <button title="Trash" class="pd-setting-ed Danger" data-toggle="modal" data-target="#DangerModalalert-{{$category->id}}"><i class="fa fa-trash-o" aria-hidden="true"></i></button>                                            
                                        </td>
                                    </tr>

                                     <!-- //Alert// -->
                                    <div id="DangerModalalert-{{$category->id}}" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-close-area modal-close-df">
                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                            </div>
                                            <div class="modal-body">
                                                <span class="educate-icon educate-danger modal-check-pro information-icon-pro"></span>
                                                <h2>Confirmation</h2>
                                                <p>Are you sure you want to delete this category?</p>
                                            </div>
                                            <div class="modal-footer danger-md">
                                                <form action="{{route('categories.destroy', $category->id)}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button class="btn btn-primary" data-dismiss="modal" href="#">Cancel</button>
                                                    <button type="submit" class="btn btn-danger danger-modal-button">Yes</button>
                                                 </form> 
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <?php $no++; ?>
                                        @endforeach
                                   
                                </table>
                            </div>                                                       
                        </div>
                    </div>
                    {{ $categories->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

    @endsection

    