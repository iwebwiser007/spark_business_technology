@extends('components.admin.layouts')
@section('content')
<div class="main-right-container" id="main-right-container">
  <!-- main data start here  -->
  <div class="main-data">
    <div class="container-fluid">
      <!-- dashboard-head start here... -->
      <div class="dash-head">
        <div class="dash_title d-flex flex-column">
          <!-- dashboard banner title start here  -->
          <h2 class="main-title text-start">Dashboard</h2>
          <!-- <p>Check your daily tasks & schedules</p> -->
          <!-- dashboard banner title end here  -->
        </div>

        <!-- add banner breadcrumb start here  -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">
            Dashboard
          </li>
        </ol>
        <!-- add banner breadcrumb end here  -->
      </div>
      <!-- dashboard-head end here... -->

      <div class="container-fluid">
        <!-- welcome card, data cards, revenue graph and service popularity start here  -->
        <div class="row">
          <div class="col-12 col-md-6">
            <!-- welcome area start here  -->
            {{--<div class="col-12">
             <div class="card p-0 rounded-4">
                <div
                  class="card-body welcome_div d-flex justify-content-between">
                  <!-- welcome message start here  -->
                  <div class="d-flex flex-column justify-content-center">
                    <h2>Hey Admin, Welcome Back</h2>
            <p>Check your daily tasks & schedules</p>
          </div>
          <!-- welcome message end here  -->

          <!-- welcome image start here  -->
          <span class="admin_vector">
            <img
              src="../assets/img/admin_dash.png"
              class="img-fluid"
              alt="admin logo" />
          </span>
          <!-- welcome image end here  -->
        </div>
      </div>
    </div>--}}
            <!-- welcome area end here  -->

            <!-- data cards start here  -->
            <div class="row d-flex flex-nowrap">
              <!-- total visitors start here  -->
              <div class="col-12 col-md-6 col-lg-5 data_card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-column">
                      <!-- <span class="dash_img bg-danger-subtle">
                        <img src="../assets/img/people.png" class="img-fluid" alt="diagram" />
                      </span> -->
                      <span class="dash_img bg-danger-subtle"><svg
                          xmlns="http://www.w3.org/2000/svg"
                          height="20"
                          viewBox="0 -960 960 960"
                          width="20"
                          fill="#5f6368">
                          <path
                            d="M480-480q-60 0-102-42t-42-102q0-60 42-102t102-42q60 0 102 42t42 102q0 60-42 102t-102 42ZM192-192v-96q0-23 12.5-43.5T239-366q55-32 116.29-49 61.29-17 124.5-17t124.71 17Q666-398 721-366q22 13 34.5 34t12.5 44v96H192Zm72-72h432v-24q0-5.18-3.03-9.41-3.02-4.24-7.97-6.59-46-28-98-42t-107-14q-55 0-107 14t-98 42q-5 4-8 7.72-3 3.73-3 8.28v24Zm216.21-288Q510-552 531-573.21t21-51Q552-654 530.79-675t-51-21Q450-696 429-674.79t-21 51Q408-594 429.21-573t51 21Zm-.21-72Zm0 360Z" />
                        </svg>
                      </span>
                      <h2 class="my-2">Total Clients</h2>
                      <p>{{$totalClients}}</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- total visitors end here  -->

              <!-- total leads start here  -->
              <div class="col-12 col-md-6 col-lg-5 data_card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-column">
                      <!-- <span class="dash_img bg-success-subtle">
                        <img src="../assets/img/people.png" class="img-fluid" alt="diagram" />
                      </span> -->
                      <span class="dash_img bg-success-subtle"><svg
                          xmlns="http://www.w3.org/2000/svg"
                          height="20"
                          viewBox="0 -960 960 960"
                          width="20"
                          fill="#5f6368">
                          <path
                            d="M96-192v-96h96v-408q0-29.7 21.15-50.85Q234.3-768 264-768h552v72H264v408h216v96H96Zm516.28 0q-15.28 0-25.78-10.34-10.5-10.34-10.5-25.63v-359.74q0-15.29 10.34-25.79t25.62-10.5h215.76q15.28 0 25.78 10.34 10.5 10.34 10.5 25.63v359.74q0 15.29-10.34 25.79T828.04-192H612.28ZM648-288h144v-264H648v264Zm0 0h144-144Z" />
                        </svg>
                      </span>
                      <h2 class="my-2">Total Technologies</h2>
                      <p>{{$totalTechnologies}}</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- total leads end here  -->

              <!-- Active projects start here  -->
              <div class="col-12 col-md-6 col-lg-5 data_card">
                <div class="card data_card">
                  <div class="card-body">
                    <div class="d-flex flex-column">
                      <span class="dash_img bg-warning-subtle">
                        <!-- <img src="../assets/img/briefing.png" class="img-fluid" alt="diagram" /> -->
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          height="20"
                          viewBox="0 -960 960 960"
                          width="20"
                          fill="#5f6368">
                          <path
                            d="M144-96v-240h108v-180h192v-108H336v-240h288v240H516v108h192v180h108v240H528v-240h108v-108H324v108h108v240H144Zm264-600h144v-96H408v96ZM216-168h144v-96H216v96Zm384 0h144v-96H600v96ZM480-691ZM360-264Zm240 0Z" />
                        </svg>
                      </span>
                      <h2 class="my-2">Total Branches</h2>
                      <p>{{$totalBranches}}</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Active Projects end here  -->

              <!-- Completed Projects Start here  -->
              <div class="col-12 col-md-6 col-lg-5 data_card">
                <div class="card data_card">
                  <div class="card-body">
                    <div class="d-flex flex-column">
                      <span class="dash_img bg-info-subtle">
                        <!-- <img src="../assets/img/briefing.png" class="img-fluid" alt="diagram" /> -->
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          height="20"
                          viewBox="0 -960 960 960"
                          width="20"
                          fill="#5f6368">
                          <path
                            d="M384-480q-60 0-102-42t-42-102q0-60 42-102t102-42q60 0 102 42t42 102q0 60-42 102t-102 42ZM96-192v-92q0-26 12.5-47.5T143-366q55-32 116-49t125-17q11 0 20.5.5T425-430q-7 17-10.5 35t-5.5 36l-25-1q-54 0-106 14t-99 42q-4.95 2.94-7.98 8.24Q168-290.47 168-284v20h251q4.85 18.63 12.92 36.81Q440-209 451-192H96Zm543 48-12-56q-14-5-26.5-12T577-228l-55 17-32-55 41-40q-4-14-3.5-29t3.5-29l-41-39 32-56 54 16q11-10 24-17.5t27-11.5l13-56h64l13 56q14 5 27 12t24 17l54-15 32 55-40 38q2 15 2 30.05 0 15.06-3 28.95l41 39-32 55-55-16q-11 9-23.5 16.5T717-200l-14 56h-64Zm33.21-120Q702-264 723-285.21t21-51Q744-366 722.79-387t-51-21Q642-408 621-386.79t-21 51Q600-306 621.21-285t51 21Zm-288-288Q414-552 435-573.21t21-51Q456-654 434.79-675t-51-21Q354-696 333-674.79t-21 51Q312-594 333.21-573t51 21Zm-.21-72Zm35 360Z" />
                        </svg>
                      </span>
                      <h2 class="my-2">Total Services</h2>
                      <p>{{$totalServices}}</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Completed Projects end here  -->

              <!-- Total revenue start here  -->
              <div class="col-12 col-md-6 col-lg-4 data_card">
                <div class="card data_card">
                  <div class="card-body">
                    <div class="d-flex flex-column">
                      <span class="dash_img bg-danger-subtle">
                        <!-- <img src="../assets/img/increase.png" class="img-fluid" alt="diagram" /> -->
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          height="20"
                          viewBox="0 -960 960 960"
                          width="20"
                          fill="#5f6368">
                          <path
                            d="M479.79-360q15.21 0 25.71-10.29t10.5-25.5q0-15.21-10.29-25.71t-25.5-10.5q-15.21 0-25.71 10.29t-10.5 25.5q0 15.21 10.29 25.71t25.5 10.5ZM444-480h72v-264h-72v264ZM96-96v-696q0-29.7 21.15-50.85Q138.3-864 168-864h624q29.7 0 50.85 21.15Q864-821.7 864-792v480q0 29.7-21.15 50.85Q821.7-240 792-240H240L96-96Zm114-216h582v-480H168v522l42-42Zm-42 0v-480 480Z" />
                        </svg>
                      </span>
                      <h2 class="my-2">Total Feedback</h2>
                      <p>{{$totalFeedbacks}}</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Total revenue end here  -->
            </div>

            <!-- data cards end here  -->
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="card ">
              <!-- card header start here  -->
              <div class="card-header">
                <div class="card-title">
                  <h2>Revenue</h2>
                </div>
              </div>
              <!-- card header end here  -->
              <div class="card-body">
                <div id="revenue_chart" class="chart"></div>
              </div>
            </div>
          </div>
          <!-- revenue graph end here  -->

          <!-- service popularity card start here  -->
          <div class="col-6">
            <div class="card ">
              <!-- card header start here  -->
              <div class="card-header">
                <div class="card-title">
                  <h2>Service Popularity</h2>
                </div>
              </div>
              <!-- card header end here  -->
              <div class="card-body">
                <div id="service_popularity" class="chart"></div>
              </div>
            </div>
          </div>
          <!-- service popularity card end here  -->
        </div>


        <!-- welcome card, data cards, revenue graph and service popularity end here  -->

        <!-- Project status, customer demographics and website traffic graphs start here  -->
        <div class="row">
          <!-- customer demographics card start here  -->
          <div class="col-12 col-lg-4">
            <div class="card">
              <!-- card header start here  -->
              <div class="card-header">
                <div class="card-title">
                  <h2>Customer Demographics</h2>
                </div>
              </div>
              <!-- card header end here  -->
              <div class="card-body">
                <div id="customer_demo" class="chart1"></div>
              </div>
            </div>
          </div>
          <!-- customer demographics card end here  -->

          <!-- Project Status graph start here  -->
          <div class="col-12 col-lg-4">
            <div class="card">
              <!-- card header start here  -->
              <div class="card-header">
                <div class="card-title">
                  <h2>Project Status</h2>
                </div>
              </div>
              <!-- card header end here  -->
              <div class="card-body">
                <div id="service_chart" class="chart1"></div>
              </div>
            </div>
          </div>
          <!-- Project Status graph end here  -->

          <!-- Website traffic graph start here  -->
          <div class="col-12 col-lg-4">
            <div class="card">
              <!-- card header start here  -->
              <div class="card-header">
                <div class="card-title">
                  <h2>Website Traffic</h2>
                </div>
              </div>
              <!-- card header end here  -->
              <div class="card-body">
                <div id="website_traffic" class="chart1"></div>
              </div>
            </div>
          </div>
          <!-- Website Graphic graph end here  -->
        </div>
        <!-- Project status, customer demographics and website traffic graphs end here  -->
      </div>
    </div>
  </div>
  <!-- main data end here  -->
</div>
<script
  type="text/javascript"
  src="https://www.gstatic.com/charts/loader.js"></script>
<script src="../public/assets/js/graph.js"></script>
@endsection