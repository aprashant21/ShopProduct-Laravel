@extends('layouts.masterlayout')
@section('title','HOME')
@Section('content')
<div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Contact Us</h1>
            <span>feel free to send us a message now!</span>
          </div>
        </div>
      </div>
    </div>

    <div class="contact-information">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-phone"></i>
              <h4 style="color:white;">Phone</h4>
              <p style="color:white;">This is my mobile number, you can contact us anytime.</p>
              <a href="#">+977-9823643590</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-envelope"></i>
              <h4 style="color:white;">Email</h4>
              <p style="color:white;">You can Email me at this email address below:</p>
              <a href="#">aprashant21@tbc.edu.np</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-map-marker"></i>
              <h4 style="color:white;">Location</h4>
              <p style="color:white;">Setiopi Marga(Infront of Grammar School)<br>Mahadevsthan, Koteshwor,Nepal</p>
              <a href="https://www.google.com/maps/@27.6790508,85.3413018,19z">View on Google Maps</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="callback-form contact-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Send us a <em>message</em></h2>
              <span>You can send message from here:</span>
            </div>
          </div>
          <div class="col-md-9">
            <div class="contact-form">
              <form id="contact" action="/contact_submit" method="post">
                @csrf
               <!--  <div class="row"> -->
                  <div class="col-md-12 col-sm-12">
                    <fieldset>
                      <span style="color: red;font-size: 18px;">
                              @error('name')
                                {{$message}}
                              @enderror
                        </span>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-md-12 col-sm-12">
                    <fieldset>
                      <span style="color: red;font-size: 18px;">
                              @error('email')
                                {{$message}}
                              @enderror
                        </span>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <span style="color: red;font-size: 18px;">
                              @error('message')
                                {{$message}}
                              @enderror
                        </span>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection