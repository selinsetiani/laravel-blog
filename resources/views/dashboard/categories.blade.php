@extends('layouts.dashboard')


@section('sidebar')

@section('content')

        <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Categories</h4>
                            <div class="add-product">
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
                                        <td>{{ $no }}</td>
                                        <td>{{$category->name}}</td>
                                        <td>
                                        {{$category->created_at}}
                                        </td>
                                        <td>{{$category->updated_at}}</td>
                                        <td>
                                            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <?php $no++; ?>
                                        @endforeach
                                   
                                </table>
                            </div>
                            <div class="custom-pagination">
								<ul class="pagination">
									<li class="page-item"><a class="page-link" href="#">Previous</a></li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">Next</a></li>
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

    @endsection

    