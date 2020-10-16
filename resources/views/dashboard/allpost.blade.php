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

<?php
    function status($post) {
        $status = $post->status;
        if($status == "Publish") {
            return "<td><button class='pd-setting'>". $status . "</button></td>";
        }
        else 
        {
            return "<td><button class='ps-setting'>". $status . "</button></td>";
        }

    }
?>


        <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4 class="text-center">All Post</h4>
                                <div class="breadcome-heading pb-1">
                                    <form action="/postsearch" type="GET" role="search" class="sr-input-func">
                                        @csrf
                                        <input type="text" name="query" placeholder="Search..." value=""
                                        class="search-int form-control">

                                    </form>
                                </div>
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                        <th>No</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Categories</th>
                                        <th>Description</th>
                                        <th>Created Date</th>
                                        <th>Update Date</th>
                                        <th>Actions</th>
                                    </tr>
                                    <?php $no = 1; ?>
                                    @foreach($posts as $post)                                                                       
                                    <tr>                                        
                                        <td>{{ $no + getPageOffset(10) }}</td>
                                        <td><img src="/storage/{{$post->image}}"/></td>
                                        <td>{{$post->title}}</td>
                                        <?php echo status($post);?>
                                        <td>{{$post->name}}</td>
                                        <td id="description">{{ Illuminate\Support\Str::limit ($post->description, 20)}}</td>
                                        <td>{{$post->created_at}}</td>
                                        <td>{{$post->updated_at}}</td>
                                        <td>
                                                <a href="{{route('allpost.edit', $post->id)}}"><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                                <button id="delete-button" type="button" data-toggle="tooltip" title="Trash" class="pd-setting-ed" data-id="{{$post->id}}">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </button>                                            
                                            
                                        </td>
                                    </tr>
                                    <?php $no++; ?>
                                        @endforeach
                                   
                                </table>
                            </div>
                            {{ $posts->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

    @endsection
    <script src="{{ asset('dashboard/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>

        $(document).on('click', '#delete-button', function (e) {
            console.log("DELETE BUTTON CLICKED");
            e.preventDefault();
            var id = $(this).data('id');
            swal({
                    text: "Are you sure you want to delete this post?  ",
                    type: "error",
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Yes!",  
                    buttons: true,
                    dangerMode: true,
                    showCancelButton: true,
                }                
            )
            .then(function(value){                
                if(value == null) { return; }
                
                $.ajax({
                    type: "DELETE",
                    url: "{{url('/allpost')}}/" + id,
                    data: {
                        "id":id,
                        "_token": "{{ csrf_token() }}",
                    },                        
                    success: function (data) {
                        console.log(data);
                        swal("Your post has been successfully deleted!", {
                        icon: "success",
                        })
                    .then(function(value){
                        location.reload();
                    });

                        
                    }         
                });                             
            });
            
        });

</script>

    
    