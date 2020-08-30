
@extends('layouts.app')


@section('sidebar')

@section('content')
 
    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4 mt-5">
            <h2 class="h3 text-center mt-sm-5">Contact Us</h2>
          </div>
          <div class="w-100"></div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="https://formspree.io/meqrwgzg" method="POST" class="bg-contact p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="_replyto" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="Subject" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-sm-3 px-4">
              </div>
            </form>
          
          </div>

         
        </div>
      </div>
    </section>

 
@endsection 