
@extends('layout.layouts')

@section('title', 'Communicate Your Inner Self With Graphic Design Services')

@section('keywords', 'Keywords for graphic design')

@section('description', 'spark business technology | we make communicable graphic design which attract your target customer and enhance your business for building a successful career')
   
@section('content')
      <section class="main-banner main-services-banner">
        <div class="container-fluid">
          <div class="max-content-width">
            <div class="row justify-content-center">
              <div class="col-12 col-lg-11">
                <div class="banner-content">
                  <span class="service-slogon">Graphic Designing</span>
                  <h4 class="title">
                    We understand that every design element should reflect your
                    brand's identity and resonate with your target audience.
                  </h4>
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
      <!-- Service Detail content start here... -->
      <!-- ============================= -->
      <section class="service-detail-content">
        <div class="container-fluid">
          <div class="max-content-width">
            <div class="row justify-content-center">
              <div class="col-12 col-lg-11">
                <!-- Service Detail Image start here... -->
                <div class="service-detail-card-img">
                  <div class="service-img">
                    <img loading="lazy"
                      src="{{asset('public/web/img/graphic-service1.webp')}}"
                      alt="service-graphic"
                    />
                  </div>
                </div>
                <!-- Service Detail Image end here... -->

                <!-- About Service Detail Content start here... -->
                <div class="about-service-content">
                  <h4 class="description">
                    Whether you need a striking logo, engaging marketing
                    materials, or visually appealing website graphics, our
                    designers are here to bring your ideas to life. We take the
                    time to understand your business goals, target market, and
                    desired aesthetic, ensuring that our designs align perfectly
                    with your vision.
                  </h4>
                  <!-- <h4 class="description">
                    <span
                      >We understand that every design element should
                      reflect</span
                    >
                    your brand's identity and resonate with your target
                    audience. Whether you need a striking logo, engaging
                    marketing materials, or visually appealing website graphics,
                    our designers are here to bring your ideas to life. We take
                    the time to understand your business goals, target market,
                    and desired aesthetic, ensuring that our designs align
                    perfectly with your vision
                  </h4> -->
                  <h4 class="description">
                    <span
                      >With expertise in the latest design software and
                      trends,</span
                    >
                    With expertise in the latest design software and trends, we
                    have the tools to create visually captivating designs that
                    stand out in a crowded digital landscape. Our designers pay
                    meticulous attention to detail, ensuring each element is
                    thoughtfully crafted to effectively convey your message.
                    Throughout the design process, we emphasize collaboration
                    and open communication. We value your input and feedback,
                    working closely with you to refine and iterate until we
                    achieve the perfect design that captures the essence of your
                    brand. Partner with us to elevate your brand's visual
                    presence. Our graphic design services will help you create a
                    solid and cohesive brand identity, increase brand
                    recognition, and leave a memorable impression on your
                    audience.
                  </h4>
                </div>
                <!-- About Service Detail Content end here... -->

                <!-- Service Detail Image start here... -->
                <div class="service-detail-card-img">
                  <div class="service-img">
                    <img loading="lazy"
                      src="{{asset('public/web/img/graphic-service2.webp')}}"
                      alt="service-graphic"
                    />
                  </div>
                </div>
                <!-- Service Detail Image end here... -->

                <!-- Service providing quality of us start here... -->
                <div class="service-provide">
                  <div class="service-provide-content">
                    <h4 class="title">
                      Let us bring creativity, expertise, and a fresh
                      perspective to your graphic design needs, and together, we
                      can make your brand stand out from the competition.
                    </h4>
                    <div
                      class="row justify-content-center justify-content-lg-between"
                    >
                      <div class="col-12 col-lg-6">
                        <div class="service-provide-points">
                          <ul class="list-unstyled">
                            <li>
                              <span>
                                <img loading="lazy"
                                  src="{{asset('public/web/img/checkMark.svg')}}"
                                  alt="check-mark"
                                />
                              </span>
                              <p>
                                Our staff possesses extensive knowledge of IT
                                industry trends and design.
                              </p>
                            </li>
                            <li>
                              <span>
                                <img loading="lazy"
                                  src="{{asset('public/web/img/checkMark.svg')}}"
                                  alt="check-mark"
                                />
                              </span>
                              <p>
                                We take great pride in offering only top-quality
                                design services to our clients while working
                                closely with each individual to meet their
                                requirements.
                              </p>
                            </li>
                            <li>
                              <span>
                                <img loading="lazy"
                                  src="{{asset('public/web/img/checkMark.svg')}}"
                                  alt="check-mark"
                                />
                              </span>
                              <p>
                                We specialise in graphic design services,
                                including logo design, website development, and
                                print design.
                              </p>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-5">
                        <div class="feedback-img">
                          <img loading="lazy"
                            src="{{asset('public/web/img/service-pointsIMG.webp')}}"
                            alt="service-pointsIMG"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Service providing quality of us end here... -->
              </div>
            </div>
          </div>
        </div>
      </section>
 @endsection    