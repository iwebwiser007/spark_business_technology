<?php

$services = \App\Models\Service::all();
?>

<header>
  <!-- Header Navbar start here... -->
  <nav class="navbar navbar-expand-lg fixed-top" id="ScrollHeader">
    <div class="container-fluid">
      <!-- Header Main-Logo Start here... -->
      <a class="navbar-brand" href="{{url('/')}}">
        <img src="{{asset('public/web/img/SparkLogo.svg')}}" alt="MainLogo" />
      </a>
      <!-- Header Main-Logo Start here... -->
      <!-- Mobile screen toggle button start here... -->
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#NavbarCollapseToggle"
        aria-controls="NavbarCollapseToggle"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Mobile screen toggle button end here... -->

      <!-- Main Navbar links content start here... -->
      <div class="collapse navbar-collapse" id="NavbarCollapseToggle">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a
              class="nav-link {{ request()->is('home') ? 'active' : '' }}"
              aria-current="page"
              href="{{url ('home') }}"
              >Home</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{url ('about')}}">About</a>
          </li>
          <li class="nav-item position-relative">
            <a
              class="nav-link"
              aria-hidden="true"
              href="javascript:void(0);"
              >Services
              <!--SVG dropdown icon-->
              <svg
                class="icon"
                width="14"
                height="16"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 320 512"
              >
                <path
                  d="M151.5 347.8L3.5 201c-4.7-4.7-4.7-12.3 0-17l19.8-19.8c4.7-4.7 12.3-4.7 17 0L160 282.7l119.7-118.5c4.7-4.7 12.3-4.7 17 0l19.8 19.8c4.7 4.7 4.7 12.3 0 17l-148 146.8c-4.7 4.7-12.3 4.7-17 0z"
                />
              </svg>
              <!--SVG dropdown icon-->
            </a>
            <ul class="dropdown-nav">
            <!-- <li class="nav-item">
                <a class="nav-link {{ request()->is('spark_business') ? 'active' : '' }}" href="{{url('spark_business')}}">All Services</a>
              </li> -->
              @foreach ($services as $service)
              <li class="nav-item">
              <a class="nav-link {{ request()->is($service->link) ? 'active' : '' }}" href="{{ route('service.show', $service->link) }}">{{$service->name}}</a>
              </li>
              @endforeach

              {{-- <li class="nav-item">
                <a class="nav-link {{ request()->is('graphic_design_service') ? 'active' : '' }}" href="{{url('graphic_design_service')}}"
                  >Graphic Designing</a
                >
              </li>
               <li class="nav-item">
                <a class="nav-link {{ request()->is('digital_marketing_services') ? 'active' : '' }}" href="{{url('digital_marketing_services')}}"
                  >Digital marketing</a
                >
              </li>
                <li class="nav-item">
                <a
                  class="nav-link {{ request()->is('Mobile_app_development') ? 'active' : '' }}"
                  href="{{url('Mobile_app_development')}}"
                  >Mobile app development</a
                >
              </li>
              <li class="nav-item">
                  <a class="nav-link  {{ request()->is('support_maintenance_services') ? 'active' : '' }} "
                    href="{{url('support_maintenance_services')}}"
                    >Support & maintenance</a
                  >
                </li>
              <li class="nav-item">
                <a
                  class="nav-link {{ request()->is('ui_and_ux_excellence') ? 'active' : '' }}"
                  href="{{url('ui_and_ux_excellence')}}"
                  >UI & UX Excellence</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link {{ request()->is('digital_transformation') ? 'active' : '' }}"
                  href="{{url('digital_transformation')}}"
                  >Digital transformation
                </a>
              </li>  --}}
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('portfolio') ? 'active' : '' }}" href="{{url ('portfolio')}}">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('blog') ? 'active' : '' }}" href="{{url ('blog')}}">Blog</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <a href="{{url('contact_us')}}" type="button" class="btn btn-connect"
            >Let’s connect</a
          >
        </form>
      </div>
      <!-- Main Navbar links content end here... -->
    </div>
  </nav>
  <!-- Header Navbar end here... -->
</header>