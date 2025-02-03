@extends('layout.layouts')

@section('title', 'Digital Marketing Services in australia | Spark Business Technology')

@section('keywords', 'Keywords for digital marketing')

@section('description', 'spark business technology | best seo and customer attractive marketing skills to grow your business and give a healthy heights to your business with digital marketing')
   
@section('content')
      <section class="main-banner service-banner">
        <div class="container-fluid">
          <div class="max-content-width">
            <div class="row justify-content-center">
              <div class="col-12 col-lg-11">
                <div class="banner-content">
                  <div class="row justify-content-center">
                    <div class="col-12 col-lg-11">
                      <h4 class="title">
                        Our software development and IT services are your
                        digital consulting partner, driving your digital plans.
                      </h4>
                      <p class="description">
                        Integrated Systems Streamline your business, Improve
                        your business operations, reduce errors and improve
                        efficiency.
                      </p>
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
      <!-- All-services start here... -->
      <!-- ============================= -->
      <section class="all-services">
        <div class="container-fluid">
          <div class="max-content-width">
            <div class="row justify-content-center">
              <!-- Graphic Design service start here... -->
              <div class="col-12 col-lg-11">
                <div class="service-card">
                  <div class="row justify-content-between">
                    <div class="col-12 col-md-6 col-lg-5">
                      <div class="service-content">
                        <span class="service-slogon">Graphic Designing</span>
                        <p class="description">
                          At Spark Business Technology, we believe in the power
                          of captivating visuals to make a lasting impact. Our
                          dedicated team of graphic designers is passionate
                          about creating stunning designs that elevate your
                          brand and effectively communicate your message.
                        </p>
                        <div class="text-start">
                          <a
                            href="{{url('graphic_design_service')}}"
                            class="btn service-btn"
                            type="button"
                            >Learn more</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-5">
                      <div class="service-img">
                        <img
                          src="{{asset('public/web/img/service-graphic.webp')}}"
                          alt="serviceImg"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Graphic Design service end here... -->

              <!-- Digital Market service start here... -->
              <div class="col-12 col-lg-11">
                <div class="service-card">
                  <div class="row justify-content-between">
                    <div class="col-12 col-md-6 col-lg-5">
                      <div class="service-content">
                        <span class="service-slogon">Digital marketing</span>
                        <p class="description">
                          Today's digital environment makes businesses more
                          vital than ever to establish a robust online presence.
                          Digital marketing enables companies to reach their
                          target audience, generate leads, and boost sales.
                        </p>
                        <div class="text-start">
                          <a
                            href="{{url('digital_marketing_services')}}"
                            class="btn service-btn"
                            type="button"
                            >Learn more</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-5">
                      <div class="service-img">
                        <img
                          src="{{asset('public/web/img/service-digitalMarketing.webp')}}"
                          alt="serviceImg"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Digital Market service end here... -->

              <!-- Mobile app development service start here... -->
              <div class="col-12 col-lg-11">
                <div class="service-card">
                  <div class="row justify-content-between">
                    <div class="col-12 col-md-6 col-lg-5">
                      <div class="service-content">
                        <span class="service-slogon"
                          >Mobile app development</span
                        >
                        <p class="description">
                          At Spark Business Technology, we specialize in
                          creating cutting-edge mobile applications that deliver
                          seamless user experiences and drive business growth.
                          Our expert team of mobile app developers utilizes the
                          latest technologies and industry best practices to
                          bring your app ideas to life.
                        </p>
                        <div class="text-start">
                          <a
                            href="{{url('Mobile_app_development')}}"
                            class="btn service-btn"
                            type="button"
                            >Learn more</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-5">
                      <div class="service-img">
                        <img
                          src="{{asset('public/web/img/service-mobileappDevelopment.webp')}}"
                          alt="serviceImg"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Mobile app development service end here... -->

              <!-- Support & maintenance service start here... -->
              <div class="col-12 col-lg-11">
                <div class="service-card">
                  <div class="row justify-content-between">
                    <div class="col-12 col-md-6 col-lg-5">
                      <div class="service-content">
                        <span class="service-slogon"
                          >Support & maintenance</span
                        >
                        <p class="description">
                          At our core, we recognize that project completion
                          marks the beginning of an invaluable partnership. With
                          us, your journey does not stop when your project has
                          been finished; rather it starts anew as our commitment
                          to your success extends from robust support.
                        </p>
                        <div class="text-start">
                          <a
                            href="{{url('support_maintenance_services')}}"
                            class="btn service-btn"
                            type="button"
                            >Learn more</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-5">
                      <div class="service-img">
                        <img
                          src="{{asset('public/web/img/service-Support-maintenance.webp')}}"
                          alt="serviceImg"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Support & maintenance service end here... -->

              <!-- UI & UX Excellence service start here... -->
              <div class="col-12 col-lg-11">
                <div class="service-card">
                  <div class="row justify-content-between">
                    <div class="col-12 col-md-6 col-lg-5">
                      <div class="service-content">
                        <span class="service-slogon">UI & UX Excellence</span>
                        <p class="description">
                          At Spark Business Technology, exceptional user
                          experiences are at the heart of successful digital
                          products. Our dedicated team of UI/UX designers is
                          passionate about creating intuitive and visually
                          appealing interfaces that captivate users and drive
                          business growth.
                        </p>
                        <div class="text-start">
                          <a
                            href="{{url('ui_and_ux_excellence')}}"
                            class="btn service-btn"
                            type="button"
                            >Learn more</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-5">
                      <div class="service-img">
                        <img
                          src="{{asset('public/web/img/service-ui-ux.webp')}}"
                          alt="serviceImg"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- UI & UX Excellence service end here... -->

              <!-- Digital transformation service start here... -->
              <div class="col-12 col-lg-11">
                <div class="service-card">
                  <div class="row justify-content-between">
                    <div class="col-12 col-md-6 col-lg-5">
                      <div class="service-content">
                        <span class="service-slogon"
                          >Digital transformation</span
                        >
                        <p class="description">
                          We understands the vital importance of digital
                          transformation for ensuring businesses remain
                          competitive and thrive in today's digital environment.
                          Our experienced team is committed to helping
                          organizations integrate new digital technologie.
                        </p>
                        <div class="text-start">
                          <a
                            href="{{url('digital_transformation')}}"
                            class="btn service-btn"
                            type="button"
                            >Learn more</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-5">
                      <div class="service-img">
                        <img
                          src="{{asset('public/web/img/service-digitalTransformation.webp')}}"
                          alt="serviceImg"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Digital transformation service end here... -->
            </div>
          </div>
        </div>
      </section>
      <!-- ============================= -->
      <!-- All-services end here... -->
      <!-- ============================= -->

      <!-- ============================= -->
      <!-- project with spark start here... -->
      <!-- ============================= -->
      <section class="join-spark">
        <div class="container-fluid">
          <div class="max-content-width">
            <div class="row justify-content-center">
              <div class="col-12 col-lg-10">
                <div class="join-spark-card">
                  <div class="card-body">
                    <h4 class="title">
                      Innovate, Transform, Excel <br />
                      Our Journey with Awesome Technology
                    </h4>
                    <!-- <p class="description">
                        Integrated Systems Streamline your business, Improve your
                        business operations, reduce errors and improve efficiency.
                      </p> -->
                    <!-- Join Spark form start here... -->
                    <form action="{{url('newsletter_subscribe')}}" method="post">
                        @csrf
                      <div class="row justify-content-center">
                        <div class="col-11 col-md-8">
                          <div class="input-group">
                            <input
                              type="text" name="email" id="email"
                              class="form-control"
                              placeholder="A business for writing better code"
                              aria-label="A business for writing better code"
                              aria-describedby="basic-addon2" required
                            />
                            <button
                              type="submit"
                              class="btn btn-join-spark"
                              id="basic-addon2"
                            >
                              <img
                                src="{{asset('public/web/img/join-spark-arrow.svg')}}"
                                alt="join-spark"
                              />
                            </button>
                          </div>
                        </div>
                      </div>
                    </form>
                    <!-- Join Spark form end here... -->
                    <!-- Join Spark slider for providing services technology start here... -->
                    <div class="join-spark-techno">
                      <div class="join-techno">
                        <div class="texhno-card">
                          <h4 class="techno-title">Typescript</h4>
                        </div>
                        <div class="texhno-card">
                          <h4 class="techno-title">Angular2+</h4>
                        </div>
                        <div class="texhno-card">
                          <h4 class="techno-title">Node.js</h4>
                        </div>
                        <div class="texhno-card">
                          <h4 class="techno-title">React JS</h4>
                        </div>
                        <div class="texhno-card">
                          <h4 class="techno-title">Core Java</h4>
                        </div>
                        <div class="texhno-card">
                          <h4 class="techno-title">Shopify</h4>
                        </div>
                      </div>
                    </div>
                    <!-- Join Spark slider for providing services technology end here... -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  @endsection   