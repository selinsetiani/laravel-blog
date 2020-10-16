@extends('layouts.app')


@section('sidebar')

@section('content')


    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-9 mt-sm-5 order-md-last ftco-animate text-justify">
            <p>
              <img src="/storage/{{$posts->image}}" alt=""  class="img-fluid mb-3 mt-sm-5">
            </p>            
            <h2 class="mb-3 mt-sm-5">{{$posts->title}}</h2>
            <p id="description">{!!$posts->description!!}</p>
            
            <div class="tag-widget post-tag-container mb-5 mt-5">
              
            </div>
            <div class=" ftco-animate">
              <h6>Category</h6>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link" value="{{$posts->categories_id}}">{{$posts->category_name}}</a>
              </div>
            </div>
          
          </div> <!-- .col-md-8 -->
         

        </div>
      </div>
    </section> <!-- .section -->

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