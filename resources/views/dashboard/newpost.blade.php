@extends('layouts.dashboard')


@section('sidebar')

@section('content')
<div class="mailbox-compose-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-md-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="hpanel email-compose">
                            <div class="panel-heading hbuilt">
                                <div class="p-xs h4">
                                   <h4 class="text-center pb-2"> New Post </h4>
                                </div>
                            </div>
                            <div class="panel-heading hbuilt">
                                <div class="p-xs">
                                    <form action="allpost" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                        <div class="form-group">
                                            <label class="col-lg-1 control-label text-left">Title:</label>
                                            <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12">
                                                <input id="title" name="title" type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Title">
                                                @error('title')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-1 control-label text-left">Categories</label>
                                            <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-select-list">
                                                <select class="form-control custom-select-value" name="categories_id">
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                     @endforeach
                                                </select>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-1 control-label text-left">Description</label>
                                            <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12">
                                                <textarea id="description" name="description" type="text" class="form-control @error('description') is-invalid @enderror" placeholder="Description"></textarea>
                                                @error('description')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-1 control-label text-left">Status</label>
                                            <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-select-list">
                                                <select class="form-control custom-select-value" name="status">
                                                        <option name="publish">Publish</option>
                                                        <option name="draft">Draft</option>
                                                </select>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <!-- <div class="row"> -->
                                                <label class="col-lg-1 control-label text-left">Image</label>
                                                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="file-upload-inner ts-forms">
                                                        <div class="input prepend-small-btn">
                                                            <div class="file-button">
                                                                Browse
                                                                <input id="file-id" type="file" onchange="onfileChanged();" name="image">
                                                            </div>
                                                            <input type="text" id="prepend-small-btn" placeholder="no file selected">
                                                        </div>
                                                    </div>
                                                </div>
                                            <!-- </div> -->
                                        </div>
                                        <div class="panel-footer">
                                            <div class="pull-right">
                                                <div class="btn-group active-hook">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                            <div class="btn-group active-hook mail-btn-sd">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
   
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function onfileChanged() {                
                document.getElementById('prepend-small-btn').value = document.getElementById("file-id").files[0].name;                                
            }
            
            $(document).ready(function() {
                $('#description').summernote({
                    toolbar: [
                        ['style', ['bold']],        
                        ['para', ['paragraph']],    
                    ]
                });
            });
        </script>
        
    @endsection