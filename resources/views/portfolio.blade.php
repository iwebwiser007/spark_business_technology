@extends('layout.layouts')

@section('title', 'portfolio |Spark Business Technology | App & Software development company')

@section('keywords', 'Keywords for portfolio Page')

@section('description', 'spark business technology | best software and app development company in australia with experts to provide excellent solution to your problem"')

@section('content') 
      <section class="main-banner portfolio-banner">
        <div class="container-fluid">
          <div class="max-content-width">
            <div class="row justify-content-center">
              <div class="col-12 col-md-10 col-lg-7">
                <div class="banner-content">
                  <h4 class="title">
                    We align our success with our client’s success
                  </h4>
                  <p class="description">
                    Integrated Systems Streamline your business, Improve your
                    business operations, reduce errors and improve efficiency.
                  </p>
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
      <!-- Portfolio projects start here... -->
      <!-- ============================= -->
      <section class="portfolio-projects">
        <div class="container-fluid">
          <div class="max-content-width">
            <div class="all-porjects row justify-content-evenly">
              <div class="col-12 col-md-6 col-lg-5">
                <div class="row">
                  <!-- Portfolio Project-1 start here... -->
                  <div class="col-12">
                    <div class="project-card">
                      <div class="project-img">
                        <img loading="lazy"
                          src="{{asset('public/web/img/client-success1.webp')}}"
                          alt="client-success"
                        />
                      </div>
                      <div class="card-content">
                        <h4 class="title">
                          <a
                            href="{{url('index')}}"
                            type="button"
                            class="stretched-link"
                          >
                            Diversion Facility Management Software
                          </a>
                        </h4>
                        <p class="description">
                          Optimising operations and resources to drive unmatched
                          efficiency, revolutionising businesses.
                        </p>
                      </div>
                    </div>
                  </div>
                  <!-- Portfolio Project-1 end here... -->

                  <!-- Portfolio Project-2 start here... -->
                  <div class="col-12">
                    <div class="project-card">
                      <div class="project-img">
                        <img loading="lazy"
                          src="{{asset('public/web/img/client-success3.webp')}}"
                          alt="client-success"
                        />
                      </div>
                      <div class="card-content">
                        <h4 class="title">
                          <a
                            href="{{url('index')}}"
                            type="button"
                            class="stretched-link"
                          >
                            RealiSupply achieves unparalleled speed of product
                            delivery
                          </a>
                        </h4>
                        <p class="description">
                          Introducing SUMS, With seamless integration and
                          optimised business processes, RealiSupply achieves
                          unparalleled speed of product delivery, setting new
                          records in customer satisfaction.
                        </p>
                      </div>
                    </div>
                  </div>
                  <!-- Portfolio Project-2 end here... -->

                  <!-- Portfolio Project-3 start here... -->
                  <div class="col-12">
                    <div class="project-card">
                      <div class="project-img">
                        <img loading="lazy"
                          src="{{asset('public/web/img/client-success4.webp')}}"
                          alt="client-success"
                        />
                      </div>
                      <div class="card-content">
                        <h4 class="title">
                          <a
                            href="{{url('index')}}"
                            type="button"
                            class="stretched-link"
                          >
                            communication approach. Through a tailor-made
                            business-to-customer application
                          </a>
                        </h4>
                        <p class="description">
                          By harnessing our extensive expertise in software
                          analysis and evaluation, this Australian legal company
                          transformed their customer communication approach.
                          Through a tailor-made business-to-customer
                          application, they automated processes, minimised
                          errors, and achieved maximum efficiency.
                        </p>
                      </div>
                    </div>
                  </div>
                  <!-- Portfolio Project-3 end here... -->
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-5">
                <div class="row">
                  <!-- Portfolio Project-4 start here... -->
                  <div class="col-12">
                    <div class="project-card">
                      <div class="card-content">
                        <h4 class="title">
                          <a
                            href="{{url('index')}}"
                            type="button"
                            class="stretched-link"
                          >
                            Breakthrough Aged Care Quality Management System
                          </a>
                        </h4>
                        <p class="description">
                          Ensuring regulatory compliance and enhancing care
                          experiences. Empower your organisation with
                          unparalleled excellence and resident satisfaction.
                        </p>
                      </div>
                      <div class="project-img">
                        <img loading="lazy"
                          src="{{asset('public/web/img/client-success2.webp')}}"
                          alt="client-success"
                        />
                      </div>
                    </div>
                  </div>
                  <!-- Portfolio Project-4 end here... -->

                  <!-- Portfolio Project-5 start here... -->
                  <div class="col-12">
                    <div class="project-card">
                      <div class="card-content">
                        <h4 class="title">
                          <a
                            href="{{url('index')}}"
                            type="button"
                            class="stretched-link"
                          >
                            data-security framework, tailor-made and in use
                            supporting a government-operated talent
                            identification program
                          </a>
                        </h4>
                        <p class="description">
                          Experience our state-of-the-art data-security
                          framework, tailor-made and in use supporting a
                          government-operated talent identification program.
                        </p>
                      </div>
                      <div class="project-img">
                        <img loading="lazy"
                          src="{{asset('public/web/img/client-success5.webp')}}"
                          alt="client-success"
                        />
                      </div>
                    </div>
                  </div>
                  <!-- Portfolio Project-5 end here... -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  @endsection  