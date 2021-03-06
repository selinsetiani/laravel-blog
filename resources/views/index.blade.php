@extends('layouts.app')


@section('sidebar')

@section('content')

<div class="hero-wrap js-fullheight" style="background-image: url('images/kapalbgr.jpg');" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-xl-10 ftco-animate fadeInUp ftco-animated" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4 " data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span id="demo"></span><br><span id="subtitle"></span></span></h1>
            <a class="btn btn-secondary btn-radius" id="btn-learn-more" style="display:none;" href="about">Learn More</a>
          </div>
        </div>
      </div>
    </div>  
 <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-4">Why Fishery.id</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
                <div class="testimony-wrap text-center py-4">
                  <div class="user-img" style="background-image: url(images/service2.png)">
                  </div>
                </div>
                <div class="media-body">
                <h3 class="heading text-center mb-3">Variant Fish</h3>
                <p class="text-center">We provide a variety of fresh fish for your business needs</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
               <div class="testimony-wrap text-center py-4">
                  <div class="user-img" style="background-image: url(images/service1.png)">
                  </div>
                </div>
              <div class="media-body">
                <h3 class="heading text-center mb-3">Delivery</h3>
                <p class="text-center">We support delivery around the world or collection 
                directly</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="testimony-wrap text-center py-4">
                  <div class="user-img center" style="background-image: url(images/tag.png)">
                  </div>
              </div>
              <div class="media-body">
                <h3 class="heading text-center mb-3">Low Price</h3>
                <p class="text-center">High quality fresh fish at affordable prices</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

  <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-4">Our Clients</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/wati.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Saya bekerja sama dengan perusahaan ini lebih dari 10 tahun. Kualitas ikan dan pelayanan tidak mengecewakan.</p>
                    <p class="name">Wati</p>
                    <span class="position">Distributor</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/arjun.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Saya bekerja disini hampir 20 tahun dan ikut investasi membeli kapal setelah melihat perkembangan bisnis di perusahaan ini.</p>
                    <p class="name">Kaswadi</p>
                    <span class="position">Investor & Ex-Ship Captain</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Awalnya saya memakai perantara untuk mencari supplier dengan biaya yang tidak murah. Akhirnya saya menemukan supplier ini dari internet.</p>
                    <p class="name">Frans</p>
                    <span class="position">Supplier Jakarta</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/donocu.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Sempat kesulitan mencari supplier ikan yang cocok, teman saya merekomendasikan disini. Hasilnya tidak mengecewakan. </p>
                    <p class="name">Suyatno</p>
                    <span class="position">Supplier Surabaya</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/zul.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Saya menjual ikan di pabrik Jakarta dan mengambil supplier dari perusahaan ini. Client saya di Jakarta cocok dengan harga dan kualitas ikan disini.</p>
                    <p class="name">Asih</p>
                    <span class="position">Distributor</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script>
      $(document).ready(function() {
        var i = 0;
        var txt = 'Are you looking for a fish supplier?';
        var subtitleText = "You are in the right place";
        var offsetLength = subtitleText.length + txt.length;
        var speed = 100;
        var fasterSpeed = 20;
        var primaryTitle = document.getElementById("demo");
        var subTitle = document.getElementById("subtitle");
        var primaryBtn = document.getElementById("btn-learn-more");

        function typeWriter() {  
          if (i < txt.length) {
            primaryTitle.innerHTML += txt.charAt(i);
            i++;
            setTimeout(typeWriter, speed);
          }
          else if(i < offsetLength) {
            var subtitleIndex = i - txt.length;

            i++;
            // document.getElementById("subtitle").style.display = "inline";
            subTitle.innerHTML += subtitleText.charAt(subtitleIndex);
            primaryBtn.style.display = 'inline';
            setTimeout(typeWriter, fasterSpeed);    
          }  
        }

        typeWriter();
      });    
</script>
@endsection
