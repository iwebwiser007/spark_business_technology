
@extends('layout.layouts')
@section('title', 'index |Spark Business Technology | App & Software development company')

@section('keywords', 'Keywords for index Page')

@section('description', 'spark business technology | best software and app development company in australia with experts to provide excellent solution to your problem')



@section('content')
<section class="main-banner">
        <div class="container-fluid">
          <div class="max-content-width">
            <div class="banner-content row justify-content-center">
              <div class="col-12 col-lg-9">
                <h4 class="title position-relative">
                  Ignite Innovation, Empower
                  <span id="split-heading">Growth Sparking</span>
                  Your
                  Business With Technology Excellence.
                </h4>
              </div>
              <div class="col-12 col-md-11 col-lg-7">
                <p class="description">
                  Integrated systems streamline your business, improve your
                  business operations, reduce errors and improve efficiency.
                </p>
                <div class="text-center">
                  <a
                    href="{{url('spark_business')}}"
                    class="btn btn-main-light"
                    type="button"
                    >Let’s explore</a
                  >
                </div>
              </div>
              <div class="col-12 col-lg-10">
                <div class="banner-img">
                  <video autoplay muted loop>
                    <source src="{{asset('public/web/img/Home.mp4')}}" type="video/mp4" />
                  </video>
                  <div class="card-img-overlay">
                    <div class="overlay-text">
                      <h4 class="title">
                        Connecting Business Automation Software & Development
                      </h4>
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
      <!-- project count start here... -->
      <!-- ============================= -->
      <section class="project-count">
        <div class="container-fluid">
          <div class="max-content-width">
            <div class="row justify-content-center">
              <div class="col-12 col-lg-9">
                <h4 class="title splt">Number's that Define Our Identity</h4>
                <p class="description">
                  Our success is judged not only by the great talents we link
                  with top companies but also by the impact we have on the
                  recruitment environment.
                </p>
              </div>
            </div>
            <div class="row justify-content-evenly justify-content-lg-center">
              <!-- clients card start here... -->
              <div class="col-12 col-md-5 col-lg-3">
                <div class="counter-card">
                  <div class="overlay"></div>
                  <div class="card-body">
                    <h4 class="counts">100+</h4>
                    <a href="#!" class="stretched-link" type="button">
                      <h5 class="title">Happy clients</h5>
                    </a>
                    <p class="description">
                      Our clients are spread across the globe and consistently
                      return to continue working with us.
                    </p>
                    <div class="count-img">
                      <img loading="lazy"
                        class="img-1"
                        src="{{asset('public/web/img/clients.svg')}}"
                        alt="clients"
                      />
                      <!-- <img loading="lazy"
                        class="img-2"
                        src="./assets/img/clients2.svg"
                        alt="clients"
                      /> -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- clients card end here... -->

              <!-- experience card start here... -->
              <div class="col-12 col-md-5 col-lg-3">
                <div class="counter-card">
                  <div class="overlay"></div>
                  <div class="card-body">
                    <h4 class="counts">05+</h4>
                    <a href="#!" class="stretched-link" type="button">
                      <h5 class="title">years of experience</h5>
                    </a>
                    <p class="description">
                      We’ve learnt a lot over that time and enjoy using that
                      knowledge to benefit our clients.
                    </p>
                    <div class="count-img">
                      <img loading="lazy"
                        class="img-1"
                        src="{{asset('public/web/img/experience.svg')}}"
                        alt="experience"
                      />
                      <!-- <img loading="lazy"
                        class="img-2"
                        src="./assets/img/experience2.svg"
                        alt="experience"
                      /> -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- experience card end here... -->

              <!-- projects card start here... -->
              <div class="col-12 col-md-5 col-lg-3">
                <div class="counter-card">
                  <div class="overlay"></div>
                  <div class="card-body">
                    <h4 class="counts">500+</h4>
                    <a href="#!" class="stretched-link" type="button">
                      <h5 class="title">Successful projects</h5>
                    </a>
                    <p class="description">
                      We have worked on a huge number of digital projects for
                      wide range of industries. Let’s add yours...
                    </p>
                    <div class="count-img">
                      <img loading="lazy"
                        class="img-1"
                        src="{{asset('public/web/img/projects.svg')}}"
                        alt="projects"
                      />
                      <!-- <img loading="lazy"
                        class="img-2"
                        src="./assets/img/projects2.svg"
                        alt="projects"
                      /> -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- projects card end here... -->
            </div>
          </div>
        </div>
      </section>
      <!-- ============================= -->
      <!-- project count end here... -->
      <!-- ============================= -->

      <!-- ============================= -->
      <!-- expertise solution start here... -->
      <!-- ============================= -->
      <section class="expertise-solution">
        <div class="container-fluid">
          <div class="max-content-width">
            <div class="row justify-content-center justify-content-lg-start">
              <div class="col-12 col-md-10 col-lg-6">
                <div class="expertise-content ">
                  <h4 class="title splt">We excel in providing excellent solutions.
                  </h4>
                  <p class="description">
                    Spark Business Technology is a global software development
                    company headquartered in Australia with offices in India.
                    Our core business is providing scalable, reliable, and
                    affordable eCommerce, Digital Transformation, and Software
                    Product Engineering to clients worldwide. Since 2018, our
                    flexible delivery approaches and experienced consultants
                    have delivered projects on time and on budget enabling us to
                    become the technology partner of choice for many
                    organizations across Australia, the Middle East, Asia,
                    Europe, and the US.
                  </p>
                  <div class="">
                    <a
                      href="{{url('about')}}"
                      type="button"
                      class="btn btn-main-dark"
                      >Know more</a
                    >
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-6 px-lg-0">
                <div class="expertise-img expertise-img-anime">
                  <img loading="lazy"
                    src="{{asset('public/web/img/expertise-solution.webp')}}"
                    alt="expertise-solution"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ============================= -->
      <!-- expertise solution end here... -->
      <!-- ============================= -->

      <!-- ============================= -->
      <!-- services start here... -->
      <!-- ============================= -->
      <section class="services">
        <div class="container-fluid">
          <div class="max-content-width">
            <div class="row justify-content-center align-items-center">
              <div class="col-12 col-md-11 col-lg-11">
                <h4 class="title splt">Partner with us for software development and IT services that
                  guide your digital strategies.
                </h4>
              </div>
              <!-- services tab content start here... -->
              <div class="col-12 col-md-5 col-lg-5">
                <!-- services tabs content-detail start here... -->
                <div class="tab-content" id="v-pills-tabContent">
                  <div
                    class="tab-pane fade"
                    id="v-pills-1"
                    role="tabpanel"
                    aria-labelledby="v-pills-1-tab"
                    tabindex="0"
                  >
                    <div class="services-detail">
                      <a
                        href="{{url('ui_and_ux_excellence')}}"
                        class="d-flex stretched-link service-img"
                      >
                        <img loading="lazy"
                          src="{{asset('public/web/img/service-ui-ux.webp')}}"
                          alt="service-ui-ux"
                        />
                      </a>
                    </div>
                  </div>
                  <div
                    class="tab-pane fade"
                    id="v-pills-2"
                    role="tabpanel"
                    aria-labelledby="v-pills-2-tab"
                    tabindex="0"
                  >
                    <div class="services-detail">
                      <a
                        href="{{url('support_maintenance_services')}}"
                        class="d-flex stretched-link service-img"
                      >
                        <img loading="lazy"
                          src="{{asset('public/web/img/service-mobileappDevelopment.webp')}}"
                          alt="service-ui-ux"
                        />
                      </a>
                    </div>
                  </div>
                  <div
                    class="tab-pane fade"
                    id="v-pills-3"
                    role="tabpanel"
                    aria-labelledby="v-pills-3-tab"
                    tabindex="0"
                  >
                    <div class="services-detail">
                      <a
                        href="{{url('Mobile_app_development')}}"
                        class="d-flex stretched-link service-img"
                      >
                        <img loading="lazy"
                          src="{{asset('public/web/img/service-mobileappDevelopment.webp')}}"
                          alt="service-ui-ux"
                        />
                      </a>
                    </div>
                  </div>
                  <div
                    class="tab-pane fade show active"
                    id="v-pills-4"
                    role="tabpanel"
                    aria-labelledby="v-pills-4-tab"
                    tabindex="0"
                  >
                    <div class="services-detail">
                      <a
                        href="{{url('graphic_design_service')}}"
                        class="d-flex stretched-link service-img"
                      >
                        <img loading="lazy"
                          src="{{asset('public/web/img/service-graphic.webp')}}"
                          alt="service-ui-ux"
                        />
                      </a>
                    </div>
                  </div>
                  <div
                    class="tab-pane fade"
                    id="v-pills-5"
                    role="tabpanel"
                    aria-labelledby="v-pills-5-tab"
                    tabindex="0"
                  >
                    <div class="services-detail">
                      <a
                        href="{{url('digital_marketing_services')}}"
                        class="d-flex stretched-link service-img"
                      >
                        <img loading="lazy"
                          src="{{asset('public/web/img/service-digitalMarketing.webp')}}"
                          alt="service-ui-ux"
                        />
                      </a>
                    </div>
                  </div>
                  <div
                    class="tab-pane fade"
                    id="v-pills-6"
                    role="tabpanel"
                    aria-labelledby="v-pills-6-tab"
                    tabindex="0"
                  >
                    <div class="services-detail">
                      <a
                        href="{{url('digital_transformation')}}"
                        class="d-flex stretched-link service-img"
                      >
                        <img loading="lazy"
                          src="{{asset('public/web/img/service-digitalTransformation.png')}}"
                          alt="service-ui-ux"
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <!-- services tabs content-detail end here... -->
              </div>
              <div class="col-12 col-md-7 col-lg-6">
                <!-- service tabs content buttons start here... -->
                <div
                  class="nav flex-column nav-pills"
                  id="v-pills-tab"
                  role="tablist"
                  aria-orientation="vertical"
                >
                  <button
                    class="nav-link tab-btn1 tab-btn1-anime"
                    id="v-pills-1-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#v-pills-1"
                    type="button"
                    role="tab"
                    aria-controls="v-pills-1"
                    aria-selected="false"
                  >
                    <a
                      class="text-decoration-none reset d-flex align-items-center justify-content-between"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseExample1"
                      role="button"
                      aria-expanded="true"
                      aria-controls="collapseExample1"
                      data-bs-parent="#v-pills-tab"
                      onclick="arrow1()"
                    >
                      UI & UX Excellence
                      <img src="{{asset('public/web/img/icons8-arrow-50.png')}}" class="tab-arrow tab-arrow1 rotate">
                    </a>
                  </button>

                  <div class="collapse show" id="collapseExample1">
                    <div class="card card-body tab-pane-content tab-pane-content1">
                      At Spark Business Technology, exceptional user experiences are at the heart of successful digital products. Our dedicated team of UI/UX designers is passionate about creating intuitive and visually appealing interfaces that captivate users and drive business growth.<br />
We understand that every interaction a user has with your product matters. That's why we take a user-centric approach to design, placing your users at the forefront of our process. Through meticulous research and analysis, we gain deep insights into your target audience, their behaviors, and their needs. This allows us to create interfaces that look stunning and provide a seamless and delightful user experience.

                      <a href="{{url('ui_and_ux_excellence')}}">Learn More</a>
                    </div>
                  </div>

                  <button
                    class="nav-link tab-btn2 tab-btn2-anime"
                    id="v-pills-2-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#v-pills-2"
                    type="button"
                    role="tab"
                    aria-controls="v-pills-2"
                    aria-selected="false"
                  >
                    <a
                      class="text-decoration-none reset d-flex align-items-center justify-content-between"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseExample2"
                      role="button"
                      aria-expanded="false"
                      aria-controls="collapseExample2"
                      data-bs-parent="#v-pills-tab"
                      onclick="arrow2()"
                    >
                      Highly Experienced Support & Maintenance
                      <img src="{{asset('public/web/img/icons8-arrow-50.png')}}" class="tab-arrow tab-arrow2" >
                    </a>
                  </button>
                  <div class="collapse" id="collapseExample2">
                    <div class="card card-body tab-pane-content tab-pane-content2">
                      Spark Business Technologies offer comprehensive hosting support services to ensure your  website or application runs smoothly, faster and seamlessly. <br/>

<strong>Backup and Restore</strong>

As businesses accumulate large amounts of data every day, backing up data and restoring critical business applications has become extremely important. Your company relies heavily on data. <br/>


<strong>Emergency Support</strong>

Unexpected IT issues can create a traumatic impact on your company. We provide emergency IT support services to help you get your systems back up and running as fast as possible without causing any interruption to your company.<br/>


<strong>Network Trobuleshooting</strong>

We have vast knowledge in providing support in solving problems with Networking, Server, and Storage solutions. Our highly skilled system engineers know the essential components required to deliver critical business services.
                      <a href="{{url('support_maintenance_services')}}">Learn More</a>
                    </div>
                  </div>
                  <button
                    class="nav-link tab-btn3 tab-btn3-anime"
                    id="v-pills-3-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#v-pills-3"
                    type="button"
                    role="tab"
                    aria-controls="v-pills-3"
                    aria-selected="false"
                    onclick="arrow3()"
                  >
                    <a
                      class="text-decoration-none reset d-flex align-items-center justify-content-between"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseExample3"
                      role="button"
                      aria-expanded="false"
                      aria-controls="collapseExample3"
                    >
                      Outstanding Mobile App Development
                      <img src="{{asset('public/web/img/icons8-arrow-50.png')}}" class="tab-arrow tab-arrow3"  >
                    </a>
                  </button>
                  <div class="collapse" id="collapseExample3">
                    <div class="card card-body tab-pane-content tab-pane-content3">
                     we specialize in creating cutting-edge mobile applications that deliver seamless user experiences and drive business growth. Our expert team of mobile app developers utilizes the latest technologies and industry best practices to bring your app ideas to life.<br />
Whether you need a native app for iOS or Android or a cross-platform solution, we have the expertise to meet your specific requirements. We work closely with you to understand your target audience, business goals, and desired features, ensuring that your app aligns perfectly with your brand and engages users effectively.

                      <a href="{{url('Mobile_app_development')}}">Learn More</a>
                    </div>
                  </div>
                  <button
                    class="nav-link active tab-btn4 tab-btn4-anime"
                    id="v-pills-4-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#v-pills-4"
                    type="button"
                    role="tab"
                    aria-controls="v-pills-4"
                    aria-selected="true"
                    onclick="arrow4()"
                  >
                    <a
                      class="text-decoration-none reset d-flex align-items-center justify-content-between"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseExample4"
                      role="button"
                      aria-expanded="false"
                      aria-controls="collapseExample4"
                    >
                      Graphic Designing
                      <img src="{{asset('public/web/img/icons8-arrow-50.png')}}" class="tab-arrow tab-arrow4 " >
                    </a>
                  </button>
                  <div class="collapse" id="collapseExample4">
                    <div class="card card-body tab-pane-content tab-pane-content4">
                      At Spark Business Technology, we believe in the power of captivating visuals to make a lasting impact. Our dedicated team of graphic designers is passionate about creating stunning designs that elevate your brand and effectively communicate your message.<br />
We understand that every design element should reflect your brand's identity and resonate with your target audience. Whether you need a striking logo, engaging marketing materials, or visually appealing website graphics, our designers are here to bring your ideas to life. We take the time to understand your business goals, target market, and desired aesthetic, ensuring that our designs align perfectly with your vision.

                      <a href="{{url('graphic_design_service')}}">Learn More</a>
                    </div>
                  </div>
                  <button
                    class="nav-link tab-btn5 tab-btn5-anime"
                    id="v-pills-5-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#v-pills-5"
                    type="button"
                    role="tab"
                    aria-controls="v-pills-5"
                    aria-selected="false"
                    onclick="arrow5()"
                  >
                    <a
                      class="text-decoration-none reset d-flex align-items-center justify-content-between"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseExample5"
                      role="button"
                      aria-expanded="false"
                      aria-controls="collapseExample5"
                    >
                      Superb Digital Marketing Services
                      <img src="{{asset('public/web/img/icons8-arrow-50.png')}}" class="tab-arrow tab-arrow5"   >
                    </a>
                  </button>
                  <div class="collapse" id="collapseExample5">
                    <div class="card card-body tab-pane-content tab-pane-content5">
                      Digital marketing refers to any method of engaging customers using digital channels - this may include search engine optimization (SEO), pay-per-click advertising (PPC), social media marketing, content creation, and email campaigns, among other methods.<br/>

We are passionate about helping businesses thrive in the digital realm at Spark Business Technology. Our expert team of digital marketers is equipped with the knowledge and skills to develop and execute strategic digital marketing campaigns that drive tangible results. From search engine optimization (SEO) and pay-per-click (PPC) advertising to social media marketing and content creation, we offer comprehensive services tailored to your specific needs. We understand that each business is unique, so we take the time to understand your goals, target audience, and industry landscape to create a customized digital marketing strategy that maximizes your online visibility and generates high-quality leads.
                      <a href="{{url('digital_marketing_services')}}">Learn More</a>
                    </div>
                  </div>
                  <button
                    class="nav-link tab-btn6 tab-btn6-anime"
                    id="v-pills-6-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#v-pills-6"
                    type="button"
                    role="tab"
                    aria-controls="v-pills-6"
                    aria-selected="false"
                    onclick="arrow6()"
                  >
                    <a
                      class="text-decoration-none reset d-flex align-items-center justify-content-between"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseExample6"
                      role="button"
                      aria-expanded="false"
                      aria-controls="collapseExample6"
                    >
                      First Class Digital Transformation Services
                      <img src="{{asset('public/web/img/icons8-arrow-50.png')}}" class="tab-arrow tab-arrow6" >
                    </a>
                  </button>
                  <div class="collapse" id="collapseExample6">
                    <div class="card card-body tab-pane-content tab-pane-content6">
                      Spark Business Technology understands the vital importance of digital transformation for ensuring businesses remain competitive and thrive in today's digital environment. Our experienced team is committed to helping organizations integrate new digital technologies, streamline processes, and open new growth opportunities.<br />
Digital transformation involves more than simply adopting new tools or technologies; it involves a holistic approach encompassing people, processes, and technologies. Our experienced consultants collaborate closely with you to assess your current state, identify areas for improvement, and formulate an actionable digital transformation roadmap explicitly tailored to your business goals.

                      <a href="{{url('digital_transformation')}}">Learn More</a>
                    </div>
                  </div>
                </div>
                <!-- service tabs content buttons end here... -->
              </div>
              <!-- services tab content end here... -->
            </div>
          </div>
        </div>
      </section>
      <!-- ============================= -->
      <!-- services end here... -->
      <!-- ============================= -->

      <!-- ============================= -->
      <!-- client success start here... -->
      <!-- ============================= -->
      <section class="client-success">
        <div class="container-fluid">
          <div class="max-content-width">
            <div class="row justify-content-center">
              <div class="col-12 col-md-10 col-lg-7">
                <h4 class="title splt">
                  Our achievements run parallel to our client’s success.
                </h4>
                <p class="description">
                  Integrated Systems Streamline your business, Improve your
                  business operations, reduce errors and improve efficiency.
                </p>
              </div>
            </div>
            <div class="row justify-content-around">
              <div class="col-12 col-md-6 col-lg-5">
                <div class="client-success-card client-success-card1">
                  <div class="card-img">
                    <img loading="lazy"
                      src="{{asset('public/web/img/client-success1.webp')}}"
                      alt="client-success1"
                    />
                  </div>
                  <div class="card-body">
                    <!-- <h4>
                      <a
                        href="project-detail.html"
                        type="button"
                        class="stretched-link"
                      >
                        Diversion Facility Management Software
                      </a>
                    </h4>
                    <p>
                      Optimising operations and resources to drive unmatched
                      efficiency, revolutionising businesses.
                    </p> -->
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-5">
                <div class="client-success-card client-success-card2">
                  <div class="card-body">
                    <!-- 
                    <h4>
                      <a
                        href="project-detail.html"
                        type="button"
                        class="stretched-link text-decoration-none"
                      >
                        Diversion Facility
                      </a>
                    </h4>
                    <p>
                      Optimising operations and resources to drive unmatched
                      efficiency, revolutionising businesses.
                    </p> -->
                  </div>
                  <div class="card-img">
                    <img loading="lazy"
                      src="{{asset('public/web/img/client-success2.webp')}}"
                      alt="client-success2"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ============================= -->
      <!-- client success end here... -->
      <!-- ============================= -->

      <!-- ============================= -->
      <!-- project with spark start here... -->
      <!-- ============================= -->
      <section class="join-spark">
        <div class="container-fluid">
          <div class="max-content-width">
            <div class="row justify-content-center">
              <div class="col-12 col-md-11 col-lg-10">
                <div class="join-spark-card">
                  <div class="card-body">
                    <h4 class="title">
                      Start your dream project with spark Tech
                    </h4>
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
                              <img loading="lazy"
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
      
     