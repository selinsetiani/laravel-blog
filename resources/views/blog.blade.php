@extends('layouts.app')


@section('sidebar')

@section('content')

@php
function closetags($html) {
    preg_match_all('#<([a-z]+)(?: .*)?(?<![/|/ ])>#iU', $html, $result);
    $openedtags = $result[1];

    preg_match_all('#</([a-z]+)>#iU', $html, $result);
    $closedtags = $result[1];
    $len_opened = count($openedtags);
    if (count($closedtags) == $len_opened) {
        return $html;
    }
    $openedtags = array_reverse($openedtags);
    for ($i=0; $i < $len_opened; $i++) {
        if (!in_array($openedtags[$i], $closedtags)){
            $html .= '</'.$openedtags[$i].'>';
        } else {
            unset($closedtags[array_search($openedtags[$i], $closedtags)]);
        }
    }
    return $html;
}
@endphp

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row d-flex">
              <div class="col-md-12 mt-sm-5 heading-section ftco-animate">
                <h1 class="mb-4 mt-sm-5  mb-sm-5 text-center"><span>Blog</span></h1>
              </div>

          @foreach($posts as $post)
        <div class="col-md-4 d-flex  mb-sm-5 ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="{{route('blog-detail', ['blogmore' => $post->id])}}" class="block-20"><img src="/storage/{{$post->image}}"/>
              </a>
              <div class="text p-4 float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4">
              		<div class="two">
              			<span class="yr">{{$post->created_at}}</span>
              		</div>
              	</div>
                <h3 class="heading mt-2"><a href="{{route('blog-detail', ['blogmore' => $post->id])}}">{{$post->title}}</a></h3>                                
                                
                @php
                  //$postDescription = closetags(Illuminate\Support\Str::limit($post->description, 100));
                  $strippedTags = strip_tags($post->description);
                  $postDescription = Illuminate\Support\Str::limit($strippedTags, 100);

                  // this bit is supposed to limit it to 100 text characters regardless of html content
                  // but if the end count is still on a html tag it will render it. Easier to do the above
                  //$htmlCharsCount = strlen($post->description) - strlen($strippedTags);
                  //$stringLimitedByTextContent = Illuminate\Support\Str::limit($post->description, 100 + $htmlCharsCount);
                  //$postDescription = closetags($stringLimitedByTextContent);
                @endphp
                <p id="description" class="text-justify" style="word-break: break-all">{!!$postDescription!!}</p>
                              
              </div>
            </div> 
        </div>
      @endforeach      
    </section>
    <div class="bottom-paginate-links">{{ $posts->links() }}</div>
  
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