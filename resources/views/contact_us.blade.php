@extends('layout.layouts')

@section('title', 'Contact Us To Grow More | Spark Business Technology')

@section('keywords', 'Keywords for contact us')

@section('description', 'spark business technology | improve your business & reduce your errors by our skilled team of experts who help you in getting solution of your problem & help you to grow more.')

@section('content')

<section class="main-banner contact-banner">
        <div class="container-fluid">
          <div class="max-content-width">
            <div class="row justify-content-center">
              <div class="col-12 col-lg-8">
                <div class="banner-content">
                  <h4 class="title">Get In Touch With Us</h4>
                  <p class="description">
                    Reaching out is the first step toward exploring new
                    possibilities <br class="d-none d-md-block" />
                    our doors are always open for discussions, brainstorming
                    sessions <br class="d-none d-md-block" />
                    and making ideas become realities.
                  </p>
                  <div class="what-project-badges">
                    <span class="project-badge"
                      >What type of project are you thinking about?</span
                    >
                    <div class="projects-badges">
                      <span class="project-badge">Brand Strategy</span>
                      <span class="project-badge"
                        >Healthcare & Telemedicine</span
                      >
                      <span class="project-badge">E-Commerce</span>
                      <span class="project-badge">E-learning & lifestyle</span>
                      <span class="project-badge">Websites + branding</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ============================= -->
      <!-- Main Hero Banner end here... -->
      <!-- ============================= -->

      <!-- ============================= -->
      <!-- Contact form start here... -->
      <!-- ============================= -->
      <section class="contact-form">
        <div class="container-fluid">
          <div class="max-content-width">
            <div class="row justify-content-center">
              <div class="col-12 col-lg-11">
                <div class="contact-card">
                  <form action="{{ url('contact') }}" method="post" onsubmit="return validateForm()"id="form">
                            @csrf 
                           
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-10">
                                    <input
                                        type="text"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name') }}"
                                        id="FormName"
                                        name="name"
                                        placeholder="Your name"/>
                                    <p class="text-danger" id="nameError"></p>
                                <p class="text-danger">
                                        @error('name')
                                        {{ $message }}
                                        @enderror
                                    </p>
                                    
                                </div>
                                
                                
                      <div class="col-12 col-md-6">
                        <input
                          type="email"
                          class="form-control @error('email') is-invalid @enderror"value="{{old('email')}}"
                          id="FormEmail"
                          name="email"
                          placeholder="Your Email" 
                        />
                         <p class="text-danger" id="emailError"></p>
                      <p class="text-danger">
								         	@error('email')
                            {{$message}}
								         	@enderror
								</p>
                      </div>
                     
                      <div class="col-12 col-md-6">
                        <input
                          type="text"
                          class="form-control @error('company') is-invalid @enderror" value="{{old('company')}}"
                          id="FormCompany"
                          name="company"
                          placeholder="Company"
                          
                        />
                         <p class="text-danger" id="companyError"></p>
                      <p class="text-danger">
									@error('company')
                   {{$message}}
									@enderror
								</p>
                      </div>
                     
                      <div class="col-12 col-md-10">
                        <input
                          type="number"
                          class="form-control @error('number') is-invalid @enderror"value="{{old('number')}}"
                          id="FormNumber"
                          name="number"
                          placeholder="Phone number"
                         
                        />
                         <p class="text-danger" id="numberError"></p>
                      <p class="text-danger">
									@error('number')
                   {{$message}}
									@enderror
								</p>
                      </div>
                     
                      <div class="col-12 col-md-10 ">
                        <input
                          type="text"
                          class="form-control @error('captcha') is-invalid @enderror"value="{{old('captcha')}}"
                          id="FormCaptcha"
                          name="captcha"
                          placeholder="Enter captcha"
                    
                        />
                         <p class="text-danger" id="captchaError"></p>
                      <p class="text-danger">
                      @error('captcha')
                   {{$message}}
									@enderror
                     
									
								</p>
                      </div>
                     
                    </div>
                    <div class="captcha-code">
  <span class="captcha" id="randomNumber"></span>
  <input type="hidden" name="gpsrandomnumber" id="gpsrandomnumber">
  <button class="btn btn-captcha" type="button" id="reload" onclick="generateRandomCaptcha()">
    <img src="{{asset('public/web/img/return.svg')}}" alt="return" />
  </button>
</div>
                    <div class="text-center">
                      <button type="button" class="btn btn-main-dark"id="generateRandomNumber" onclick="validateForm()">
                        Submit
</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ============================= -->
      <!-- Contact form end here... -->
      <!-- ============================= -->

      <!-- ============================= -->
      <!-- Globe Branch start here... -->
      <!-- ============================= -->
      <section class="globe-branch">
        <div class="container-fluid">
          <div class="max-content-width">
            <div class="row justify-content-end align-items-center">
              <div class="col-12 col-md-5 col-lg-4">
                <div
                  class="globe-branch-content text-center text-md-end text-lg-start"
                >
                  <h4 class="title splt">Global branch</h4>
                  <p class="description">
                    134 Butterfield St, Herston, Brisbane, QLD, 4006, Australia
                  </p>
                  <a
                    href="tel:+61404408958"
                    type="button"
                    class="btn btn-globe-contact"
                  >
                    +61404408958
                  </a>
                </div>
              </div>
              <div class="col-12 col-md-7 col-lg-6">
                <div class="globe-branch-img">
                  <video autoplay muted loop>
                    <source
                      src="{{asset('public/web/img/globe-search.mp4')}}"
                      type="video/mp4"
                    />
                  </video>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ============================= -->
      <!-- Globe Branch end here... -->
      <!-- ============================= -->

      <!-- ============================= -->
      <!-- contact-us start here... -->
      <!-- ============================= -->
      <section class="contact-us">
        <div class="container-fluid">
          <div class="max-content-width">
            <div class="row justify-content-center">
              <div class="col-12 col-lg-10">
                <h4 class="title">
                  Insights at Your Fingertips <br />
                  Make Contact with Our IT Experts
                </h4>
                <div class="text-center">
                  <a
                    href="tel:+61404408958"
                    class="btn btn-main-light"
                    type="button"
                    >Reach us@ +61404408958</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <script>

function generateRandomCaptcha() {
    
    var characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    var captchaLength = 6; 
    var randomCaptcha = "";
    for (var i = 0; i < captchaLength; i++) {
      var randomIndex = Math.floor(Math.random() * characters.length);
      randomCaptcha += characters.charAt(randomIndex);
    }

  
    document.getElementById("randomNumber").textContent = randomCaptcha;
    document.getElementById('gpsrandomnumber').value = randomCaptcha;
   
  }

  
  window.addEventListener("load", generateRandomCaptcha);
    



  
 
  function validateForm() {
    var name = document.getElementById('FormName').value;
    var email = document.getElementById('FormEmail').value;
    var company = document.getElementById('FormCompany').value;
    var number = document.getElementById('FormNumber').value;
    var captcha = document.getElementById('FormCaptcha').value;

    var nameError = document.getElementById('nameError');
    var emailError = document.getElementById('emailError');
    var companyError = document.getElementById('companyError');
    var numberError = document.getElementById('numberError');
    var captchaError = document.getElementById('captchaError');

    var isValid = true;

    
    if (name.trim() === '') {
      nameError.textContent = 'Name is required';
      isValid = false;
    }else {
      nameError.textContent = '';
    }
     if (email.trim() === '') {
      emailError.textContent = 'Email is required';
      isValid = false;
    } else {
      emailError.textContent = '';
    }

    
    if (company.trim() === '') {
      companyError.textContent = 'Company is required';
      isValid = false;
    } else {
      companyError.textContent = '';
    }

   
    if (number.trim() === '') {
      numberError.textContent = 'Phone number is required';
      isValid = false;
    } 
    // else if (!/^\d{10}$/.test(number)) {
    //   numberError.textContent = 'Invalid phone number format';
    //   isValid = false;
    // }
     else {
      numberError.textContent = '';
    }

    
    if (captcha.trim() === '') {
      captchaError.textContent = 'Captcha is required';
      isValid = false;
    }else if(captcha != document.getElementById('gpsrandomnumber').value){
      isValid = false;
      captchaError.textContent = 'Captcha not matched';
      return ;
    } else {
      captchaError.textContent = '';
    }

    // $('form').submit();
     if (isValid) {
        document.getElementById('form').submit();
    }

    return isValid;
   
    
  }
  
  
  </script>
  
      
      @endsection