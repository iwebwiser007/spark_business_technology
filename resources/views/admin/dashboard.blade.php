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
                        <div class="col-12">
                          <div class="card p-0 rounded-4">
                            <div
                              class="card-body welcome_div d-flex justify-content-between"
                            >
                              <!-- welcome message start here  -->
                              <div class="d-flex flex-column justify-content-center">
                                <h2>Hey Chitra, Welcome Back</h2>
                                <p>Check your daily tasks & schedules</p>
                              </div>
                              <!-- welcome message end here  -->

                              <!-- welcome image start here  -->
                              <span class="admin_vector">
                                <img
                                  src="../assets/img/admin_dash.png"
                                  class="img-fluid"
                                  alt="admin logo"
                                />
                              </span>
                              <!-- welcome image end here  -->
                            </div>
                          </div>
                        </div>
                        <!-- welcome area end here  -->

                        <!-- data cards start here  -->
                        <div class="row">
                          <!-- total visitors start here  -->
                          <div class="col-12 col-md-6 col-lg-4 data_card">
                            <div class="card">
                              <div class="card-body">
                                <div class="d-flex flex-column">
                                  <span class="dash_img bg-danger-subtle">
                                    <img
                                      src="../assets/img/people.png"
                                      class="img-fluid"
                                      alt="diagram"
                                    />
                                  </span>
                                  <h2 class="my-2">Total Visitors</h2>
                                  <p>200</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- total visitors end here  -->

                          <!-- total leads start here  -->
                          <div class="col-12 col-md-6 col-lg-4 data_card">
                            <div class="card">
                              <div class="card-body">
                                <div class="d-flex flex-column">
                                  <span class="dash_img bg-success-subtle">
                                    <img
                                      src="../assets/img/people.png"
                                      class="img-fluid"
                                      alt="diagram"
                                    />
                                  </span>
                                  <h2 class="my-2">Total Leads</h2>
                                  <p>20</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- total leads end here  -->

                          <!-- Active projects start here  -->
                          <div class="col-12 col-md-6 col-lg-4 data_card">
                            <div class="card data_card">
                              <div class="card-body">
                                <div class="d-flex flex-column">
                                  <span class="dash_img bg-warning-subtle">
                                    <img
                                      src="../assets/img/briefing.png"
                                      class="img-fluid"
                                      alt="diagram"
                                    />
                                  </span>
                                  <h2 class="my-2">Active Projects</h2>
                                  <p>10</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Active Projects end here  -->

                          <!-- Completed Projects Start here  -->
                          <div class="col-12 col-md-6 col-lg-4 data_card">
                            <div class="card data_card">
                              <div class="card-body">
                                <div class="d-flex flex-column">
                                  <span class="dash_img bg-info-subtle">
                                    <img
                                      src="../assets/img/briefing.png"
                                      class="img-fluid"
                                      alt="diagram"
                                    />
                                  </span>
                                  <h2 class="my-2">Completed Projects</h2>
                                  <p>105</p>
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
                                    <img
                                      src="../assets/img/increase.png"
                                      class="img-fluid"
                                      alt="diagram"
                                    />
                                  </span>
                                  <h2 class="my-2">Total Revenue</h2>
                                  <p>200K</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Total revenue end here  -->

                          <!-- Pending Tasks start here  -->
                          <div class="col-12 col-md-6 col-lg-4 data_card">
                            <div class="card data_card">
                              <div class="card-body">
                                <div class="d-flex flex-column">
                                  <span class="dash_img bg-warning-subtle">
                                    <img
                                      src="../assets/img/briefing.png"
                                      class="img-fluid"
                                      alt="diagram"
                                    />
                                  </span>
                                  <h2 class="my-2">Pending Tasks</h2>
                                  <p>10</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Pending Tasks end here  -->

                          <div class="col-12 col-md-6 col-lg-4 data_card">
                            <div class="card data_card">
                              <div class="card-body">
                                <div class="d-flex flex-column">
                                  <span class="dash_img bg-warning-subtle">
                                    <img
                                      src="../assets/img/user.png"
                                      class="img-fluid"
                                      alt="diagram"
                                    />
                                  </span>
                                  <h2 class="my-2">New Users</h2>
                                  <p>7</p>
                                </div>
                              </div>
                            </div>
                          </div>

                          <!-- Total Services start here  -->
                          <div class="col-12 col-md-6 col-lg-4 data_card">
                            <div class="card data_card">
                              <div class="card-body">
                                <div class="d-flex flex-column">
                                  <span class="dash_img bg-success-subtle">
                                    <img
                                      src="../assets/img/briefing.png"
                                      class="img-fluid"
                                      alt="diagram"
                                    />
                                  </span>
                                  <h2 class="my-2">Total Services</h2>
                                  <p>5</p>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-12 col-md-6 col-lg-4 data_card">
                            <div class="card data_card">
                              <div class="card-body">
                                <div class="d-flex flex-column">
                                  <span class="dash_img bg-warning-subtle">
                                    <img
                                      src="../assets/img/support.png"
                                      class="img-fluid"
                                      alt="diagram"
                                    />
                                  </span>
                                  <h2 class="my-2">Service Requests</h2>
                                  <p>4</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- data cards end here  -->
                      </div>
                      <div class="col-6">
                        <!-- revenue graph start here  -->
                        <div class="card">
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
                        <!-- revenue graph end here  -->

                        <!-- service popularity card start here  -->
                        <div class="card">
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
                        <!-- service popularity card end here  -->
                      </div>
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
@endsection