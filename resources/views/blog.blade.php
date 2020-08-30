@extends('layouts.app')


@section('sidebar')

@section('content')



    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row d-flex">
              <div class="col-md-12 mt-sm-5 heading-section ftco-animate">
                <h1 class="mb-4 mt-sm-5 text-center"><span>Blog</span></h1>
              </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/kapal2.jpg');">
              </a>
              <div class="text p-4 float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4">
              		<div class="two">
              			<span class="yr">22 Agustus 2020</span>
              		</div>
              	</div>
                <h3 class="heading mt-2"><a href="blog-kapal">Pembuatan kapal nelayan</a></h3>
                <p class="text-justify"> Kapal nelayan memiliki jenis ukuran berbeda tergantung dengan hasil tangkapan laut. Ikan kakap, kerapu, tuna, dan kembung membutuhkan jenis ukuran kapal yang besar 
                  <a href="blog-kapal">[...] </a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="#" class="block-20" style="background-image: url('images/lelang.jpg');">
              </a>
              <div class="text p-4 float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4">
              		<div class="two">
              			<span class="yr"> 2020</span>
              		</div>
              	</div>
                <h3 class="heading mt-2"><a href="#">Tempat Pelelangan Ikan</a></h3>
                <p class="text-justify">Ikan yang telah ditangkap dari laut dikirim ke tempat pelelangan ikan. Mari kita lihat seperti apa
                  tempat pelelangan ikan
                </p>
              </div>
            </div>
          </div>
  

          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="#" class="block-20" style="background-image: url('images/image_6.jpg');">
              </a>
              <div class="text p-4 float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4">
              		<div class="two">
              			<span class="yr">2020</span>
              		</div>
              	</div>
                <h3 class="heading mt-2"><a href="#">Coming Soon</a></h3>
                <p class="text-justify">Masakan pantura (pantai utara) identik dengan olahan ikan laut dapat anda coba dirumah. </p>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </section>

 @endsection