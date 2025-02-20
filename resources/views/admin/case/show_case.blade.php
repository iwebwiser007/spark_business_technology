@extends('components.admin.layouts')
@section('content')
<div class="main-right-container" id="main-right-container">
    <div class="container-fluid">
        <!-- dashboard-head start here... -->
        <div class="dash-head">
            <!-- dashboard banner title start here  -->
            <div class="dash_title">
                <a href="{{url()->previous()}}" role="button" class="btn link-btn">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        height="20"
                        viewBox="0 -960 960 960"
                        width="20"
                        fill="#FFFFFF">
                        <path
                            d="m313-440 224 224-57 56-320-320 320-320 57 56-224 224h487v80H313Z" />
                    </svg>
                </a>
                <h2 class="main-title">Case Study Preview</h2>
                <!-- <h2 class="text-dark ms-2">Add Header</h2> -->
            </div>
            <!-- dashboard banner title end here  -->

            <!-- add banner breadcrumb start here  -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="#">Case List</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Preview
                </li>
            </ol>
            <!-- add banner breadcrumb end here  -->
        </div>
        <!-- dashboard-head end here... -->

        <div class="container-fluid">
            <!-- card start here  -->
            <div class="card">
                <!-- card header start here  -->
                <div class="card-header">
                    <div
                        class="card-title d-flex justify-content-between align-items-center d-none">
                        <h2 class="">Feedback List</h2>
                    </div>
                </div>
                <!-- card header end here  -->

                <!-- card body start here  -->
                <div class="card-body">
                    <div class="gap-3 client_info">
                        <span class="client_logo">
                            <img
                                src="../public/assets/img/client-1.webp"
                                alt="Client-2" />
                        </span>

                        <div class="profile-info">
                            <h2>Medifellows</h2>
                            <p>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    height="20"
                                    viewBox="0 -960 960 960"
                                    width="20"
                                    fill="#5f6368">
                                    <path
                                        d="M528-432h216v-72H528v72Zm0-120h216v-72H528v72ZM192-336h288v-45q0-29-44-52t-100.5-23q-56.5 0-100 22.5T192-381v45Zm144.21-144Q366-480 387-501.21t21-51Q408-582 386.79-603t-51-21Q306-624 285-602.79t-21 51Q264-522 285.21-501t51 21ZM168-192q-29.7 0-50.85-21.16Q96-234.32 96-264.04v-432.24Q96-726 117.15-747T168-768h624q29.7 0 50.85 21.16Q864-725.68 864-695.96v432.24Q864-234 842.85-213T792-192H168Zm0-72h624v-432H168v432Zm0 0v-432 432Z" />
                                </svg>
                                Health Care & Lifestyle
                            </p>
                            <p>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    height="20"
                                    viewBox="0 -960 960 960"
                                    width="20"
                                    fill="#5f6368">
                                    <path
                                        d="M480-307q96-79 144-151.5t48-135.1q0-86.68-53.5-142.54Q565-792 480-792t-138.5 56Q288-680 288-594.06 288-532 336-460t144 153Zm0 91Q346-317 281-410.61q-65-93.6-65-183.39 0-118.01 73.56-194 73.56-76 190.5-76t190.44 76Q744-712.01 744-594q0 89.79-65 183.39Q614-317 480-216Zm.21-312Q510-528 531-549.21t21-51Q552-630 530.79-651t-51-21Q450-672 429-650.79t-21 51Q408-570 429.21-549t51 21ZM216-96v-72h528v72H216Zm264-504Z" />
                                </svg>
                                Fiona Cape Town, South Africa
                            </p>
                            <p>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    height="20"
                                    viewBox="0 -960 960 960"
                                    width="20"
                                    fill="#5f6368">
                                    <path
                                        d="M40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm720 0v-120q0-44-24.5-84.5T666-434q51 6 96 20.5t84 35.5q36 20 55 44.5t19 53.5v120H760ZM360-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm400-160q0 66-47 113t-113 47q-11 0-28-2.5t-28-5.5q27-32 41.5-71t14.5-81q0-42-14.5-81T544-792q14-5 28-6.5t28-1.5q66 0 113 47t47 113ZM120-240h480v-32q0-11-5.5-20T580-306q-54-27-109-40.5T360-360q-56 0-111 13.5T140-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T440-640q0-33-23.5-56.5T360-720q-33 0-56.5 23.5T280-640q0 33 23.5 56.5T360-560Zm0 320Zm0-400Z" />
                                </svg>

                                10K+ users
                            </p>
                        </div>
                    </div>
                </div>
                <!-- card body end here  -->

                <!-- card footer start here  -->
                <div class="card-footer">
                    <!-- Nav pills -->
                    <ul class="nav nav-pills" role="tablist">
                        <!-- about list start here  -->
                        <li class="nav-item">
                            <a
                                class="nav-link active"
                                data-bs-toggle="pill"
                                href="#about">About</a>
                        </li>
                        <!-- about list end here  -->
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                data-bs-toggle="pill"
                                href="#challenges">Challenges</a>
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                data-bs-toggle="pill"
                                href="#impact">Impact</a>
                        </li>

                        <!-- phases list start here  -->
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                data-bs-toggle="pill"
                                href="#phases">Phases</a>
                        </li>
                        <!-- phases list end here  -->

                        <!-- certificate start here  -->
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                data-bs-toggle="pill"
                                href="#certificate_div">Certificates</a>
                        </li>
                        <!-- certificate end here  -->

                        <!-- Apps start here  -->
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="pill" href="#apps">Apps</a>
                        </li>
                        <!-- Apps end here  -->
                    </ul>
                </div>
                <!-- card footer end here  -->
            </div>
            <!-- card end here  -->

            <!-- Tab panes -->
            <div class="tab-content">
                <!-- about start here  -->
                <div id="about" class="container tab-pane active">
                    <br />
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h3 class="tab_heading">Medifellow</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-12 tab_data">
                                    <span class="text-muted slogan w-75">
                                        <label for="quote">"</label>
                                        Lorem ipsum dolor sit amet consectetur,
                                        adipisicing elit. nesciunt dolore amet alias eum
                                        nisi recusandae. Laboriosam maxime fugit,
                                        obcaecati saepe non nisi ratione alias ipsa amet
                                        quidem?
                                        <label for="quote">"</label>
                                    </span>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.
                                        <br />
                                        Lorem, ipsum dolor sit amet consectetur
                                        adipisicing elit. Nam repudiandae sint officiis
                                        rem corrupti accusamus? Optio alias, non quos
                                        odio exercitationem ipsam esse nemo ratione,
                                        deserunt, quis in placeat veniam aspernatur
                                        laborum laboriosam labore veritatis. Corrupti,
                                        soluta quod ducimus nisi reiciendis suscipit
                                        similique deleniti. Excepturi earum placeat
                                        necessitatibus et magnam?
                                        <br />
                                        Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Rem perferendis neque sed
                                        commodi tempore delectus asperiores sequi
                                        maiores nihil mollitia ea a aperiam odit,
                                        quaerat voluptas voluptate illo adipisci
                                        exercitationem doloremque temporibus? Rerum esse
                                        laboriosam odit nobis! Harum, earum
                                        reprehenderit!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- about end here  -->

                <!-- challenges start here  -->
                <div id="challenges" class="container tab-pane fade">
                    <br />
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h3 class="tab_heading">Challenges</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="tab_img">
                                        <img
                                            src="../public/assets/img/medifellowAbout.webp"
                                            width="90%"
                                            alt="aboutImage"
                                            class="img-fluid" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 tab_data">
                                    <h3>Key Challenges</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.
                                        <br />
                                        Lorem, ipsum dolor sit amet consectetur
                                        adipisicing elit. Nam repudiandae sint officiis
                                        rem corrupti accusamus? Optio alias, non quos
                                        odio exercitationem ipsam esse nemo ratione,
                                        deserunt, quis in placeat veniam aspernatur
                                        laborum laboriosam labore veritatis. Corrupti,
                                        soluta quod ducimus nisi reiciendis suscipit
                                        similique deleniti. Excepturi earum placeat
                                        necessitatibus et magnam?
                                        <br />
                                        Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Rem perferendis neque sed
                                        commodi tempore delectus asperiores sequi
                                        maiores nihil mollitia ea a aperiam odit,
                                        quaerat voluptas voluptate illo adipisci
                                        exercitationem doloremque temporibus? Rerum esse
                                        laboriosam odit nobis! Harum, earum
                                        reprehenderit!
                                    </p>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-12 col-md-6 tab_data">
                                    <h3>Solution</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.
                                        <br />
                                        Lorem, ipsum dolor sit amet consectetur
                                        adipisicing elit. Nam repudiandae sint officiis
                                        rem corrupti accusamus? Optio alias, non quos
                                        odio exercitationem ipsam esse nemo ratione,
                                        deserunt, quis in placeat veniam aspernatur
                                        laborum laboriosam labore veritatis. Corrupti,
                                        soluta quod ducimus nisi reiciendis suscipit
                                        similique deleniti. Excepturi earum placeat
                                        necessitatibus et magnam?
                                    </p>
                                    <ul class="px-2">
                                        <li>
                                            Lorem ipsum dolor sit amet consectetur,
                                            adipisicing elit. Harum quam molestias libero.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet consectetur,
                                            adipisicing elit. Harum quam molestias libero.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet consectetur,
                                            adipisicing elit. Harum quam molestias libero.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet consectetur,
                                            adipisicing elit. Harum quam molestias libero.
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="tab_img">
                                        <img
                                            src="../public/assets/img/medifellowAbout.webp"
                                            width="90%"
                                            alt="aboutImage"
                                            class="img-fluid" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- challenges end here  -->

                <!-- phases start here  -->
                <div id="phases" class="container tab-pane fade">
                    <br />
                    <div class="card p-0">
                        <div class="card-body p-0">
                            <div class="container impact_div">
                                <div class="col-12 border-bottom">
                                    <h2 class="tab_heading">Phases</h2>
                                </div>
                                <div class="list_div">
                                    <h3>Phase-1</h3>
                                    <ul class="list-unstyled d-flex flex-wrap gap-4">
                                        <li class="list-group-item">User Login</li>
                                        <li class="list-group-item">User Signup</li>
                                        <li class="list-group-item">Forgot Password</li>
                                        <li class="list-group-item">User Account</li>
                                        <li class="list-group-item">Editing</li>
                                        <li class="list-group-item">News Feed</li>
                                        <li class="list-group-item">Chat</li>
                                        <li class="list-group-item">
                                            Push Notification
                                        </li>
                                        <li class="list-group-item">Groups</li>
                                        <li class="list-group-item">Groups</li>
                                        <li class="list-group-item">Groups</li>
                                        <li class="list-group-item">Groups</li>
                                        <li class="list-group-item">Groups</li>
                                        <li class="list-group-item">Groups</li>
                                        <li class="list-group-item">Groups</li>
                                        <li class="list-group-item">Groups</li>
                                        <li class="list-group-item">Groups</li>
                                        <li class="list-group-item">Groups</li>
                                    </ul>
                                </div>
                                <div class="list_div">
                                    <h3 class="btn">Phase-2</h3>
                                    <ul class="list-unstyled d-flex flex-wrap gap-4">
                                        <li class="list-group-item">User Signup</li>
                                        <li class="list-group-item">User Login</li>
                                        <li class="list-group-item">Forgot Password</li>
                                        <li class="list-group-item">User Account</li>
                                        <li class="list-group-item">Editing</li>
                                        <li class="list-group-item">News Feed</li>
                                        <li class="list-group-item">Chat</li>
                                        <li class="list-group-item">
                                            Push Notification
                                        </li>
                                        <li class="list-group-item">Groups</li>
                                    </ul>
                                </div>

                                <div class="list_div">
                                    <h3 class="btn">Phase-3</h3>
                                    <ul class="list-unstyled d-flex flex-wrap gap-4">
                                        <li class="list-group-item">User Signup</li>
                                        <li class="list-group-item">User Login</li>
                                        <li class="list-group-item">Forgot Password</li>
                                        <li class="list-group-item">User Account</li>
                                        <li class="list-group-item">Editing</li>
                                        <li class="list-group-item">News Feed</li>
                                        <li class="list-group-item">Chat</li>
                                        <li class="list-group-item">
                                            Push Notification
                                        </li>
                                        <li class="list-group-item">Groups</li>
                                    </ul>
                                </div>

                                <div class="list_div">
                                    <h3 class="btn">Phase-4</h3>
                                    <ul class="list-unstyled d-flex flex-wrap gap-4">
                                        <li class="list-group-item">User Signup</li>
                                        <li class="list-group-item">User Login</li>
                                        <li class="list-group-item">Forgot Password</li>
                                        <li class="list-group-item">User Account</li>
                                        <li class="list-group-item">Editing</li>
                                        <li class="list-group-item">News Feed</li>
                                        <li class="list-group-item">Chat</li>
                                        <li class="list-group-item">
                                            Push Notification
                                        </li>
                                        <li class="list-group-item">Groups</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- phases end here  -->

                <!-- impact start here  -->
                <div id="impact" class="container tab-pane fade">
                    <br />
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h3 class="tab_heading">Impact</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="tab_img">
                                        <img
                                            src="../public/assets/img/medifellowAbout.webp"
                                            width="90%"
                                            alt="aboutImage"
                                            class="img-fluid" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 tab_data">
                                    <h3>Bussiness Impact</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.
                                        <br />
                                        Lorem, ipsum dolor sit amet consectetur
                                        adipisicing elit. Nam repudiandae sint officiis
                                        rem corrupti accusamus? Optio alias, non quos
                                        odio exercitationem ipsam esse nemo ratione,
                                        deserunt, quis in placeat veniam aspernatur
                                        laborum laboriosam labore veritatis. Corrupti,
                                        soluta quod ducimus nisi reiciendis suscipit
                                        similique deleniti. Excepturi earum placeat
                                        necessitatibus et magnam?
                                        <br />
                                        Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Rem perferendis neque sed
                                        commodi tempore delectus asperiores sequi
                                        maiores nihil mollitia ea a aperiam odit,
                                        quaerat voluptas voluptate illo adipisci
                                        exercitationem doloremque temporibus? Rerum esse
                                        laboriosam odit nobis! Harum, earum
                                        reprehenderit!
                                    </p>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-12 col-md-6 tab_data">
                                    <h3>User Impact</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.
                                        <br />
                                        Lorem, ipsum dolor sit amet consectetur
                                        adipisicing elit. Nam repudiandae sint officiis
                                        rem corrupti accusamus? Optio alias, non quos
                                        odio exercitationem ipsam esse nemo ratione,
                                        deserunt, quis in placeat veniam aspernatur
                                        laborum laboriosam labore veritatis. Corrupti,
                                        soluta quod ducimus nisi reiciendis suscipit
                                        similique deleniti. Excepturi earum placeat
                                        necessitatibus et magnam?
                                    </p>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="tab_img">
                                        <img
                                            src="../public/assets/img/medifellowAbout.webp"
                                            width="90%"
                                            alt="aboutImage"
                                            class="img-fluid" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- impact end here  -->

                <!-- certificate start here  -->
                <div id="certificate_div" class="container tab-pane fade">
                    <br />
                    <div class="card mb-3">
                        <div class="card-header border-bottom">
                            <h3 class="tab_heading">Certificates</h3>
                        </div>
                        <div class="card-body">
                            <div class="row certificate_div">
                                <!-- certificate-1 start here  -->
                                <div
                                    class="col-12 col-md-4 mb-4 mb-lg-0 certificate_area">
                                    <a
                                        href="#!"
                                        class="certificate_img"
                                        data-bs-toggle="modal"
                                        data-bs-target="#certificate-1">
                                        <img
                                            src="../public/assets/img/certificate-1.webp"
                                            class="img-fluid" />
                                    </a>
                                </div>
                                <!-- certificate-1 end here  -->

                                <!-- certificate-1 modal start here  -->
                                <div
                                    class="modal fade"
                                    id="certificate-1"
                                    tabindex="-1"
                                    aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1
                                                    class="modal-title"
                                                    id="exampleModalLabel">
                                                    Certificate-1
                                                </h1>
                                                <button
                                                    type="button"
                                                    class="btn-close"
                                                    data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>

                                            <!-- modal body start here  -->
                                            <div class="modal-body">
                                                <span>
                                                    <img
                                                        src="../public/assets/img/certificate-1.webp"
                                                        alt="image"
                                                        class="img-fluid" />
                                                </span>
                                                <button
                                                    type="button"
                                                    class="btn btn-secondary cancel_modal my-3"
                                                    data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                            <!-- modal body end here  -->
                                        </div>
                                    </div>
                                </div>
                                <!-- certificate-1 modal end here  -->

                                <!-- certificate-2 start here  -->
                                <div class="col-12 col-md-4 mb-4 mb-lg-0">
                                    <a
                                        href="#!"
                                        class="certificate_img"
                                        data-bs-toggle="modal"
                                        data-bs-target="#certificate-2">
                                        <img
                                            src="../public/assets/img/Certificate-2.webp"
                                            class="img-fluid" />
                                    </a>
                                </div>
                                <!-- certificate-2 end here  -->

                                <!-- certificate-2 modal start here  -->
                                <div
                                    class="modal fade"
                                    id="certificate-2"
                                    tabindex="-1"
                                    aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1
                                                    class="modal-title"
                                                    id="exampleModalLabel">
                                                    Certificate-2
                                                </h1>
                                                <button
                                                    type="button"
                                                    class="btn-close"
                                                    data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>

                                            <!-- modal body start here  -->
                                            <div class="modal-body">
                                                <span>
                                                    <img
                                                        src="../public/assets/img/certificate-2.webp"
                                                        alt="image"
                                                        class="img-fluid" />
                                                </span>
                                                <button
                                                    type="button"
                                                    class="btn btn-secondary cancel_modal my-3"
                                                    data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                            <!-- modal body end here  -->
                                        </div>
                                    </div>
                                </div>
                                <!-- certificate-2 modal end here  -->

                                <!-- certificate-3 start here  -->
                                <div class="col-12 col-md-4 mb-4 mb-lg-0">
                                    <a
                                        href="#!"
                                        class="certificate_img"
                                        data-bs-toggle="modal"
                                        data-bs-target="#certificate-3">
                                        <img
                                            src="../public/assets/img/Certificate-3.webp"
                                            class="img-fluid" />
                                    </a>
                                </div>
                                <!-- certificate-3 end here  -->

                                <!-- certificate-3 modal start here  -->
                                <div
                                    class="modal fade"
                                    id="certificate-3"
                                    tabindex="-1"
                                    aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1
                                                    class="modal-title"
                                                    id="exampleModalLabel">
                                                    Certificate-3
                                                </h1>
                                                <button
                                                    type="button"
                                                    class="btn-close"
                                                    data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>

                                            <!-- modal body start here  -->
                                            <div class="modal-body">
                                                <span>
                                                    <img
                                                        src="../publicassets/img/certificate-3.webp"
                                                        alt="image"
                                                        class="img-fluid" />
                                                </span>
                                                <button
                                                    type="button"
                                                    class="btn btn-secondary cancel_modal my-3"
                                                    data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                            <!-- modal body end here  -->
                                        </div>
                                    </div>
                                </div>
                                <!-- certificate-3 modal end here  -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- certificate end here  -->

                <!-- Apps division start here  -->
                <div id="apps" class="container tab-pane fade">
                    <br />
                    <div class="card">
                        <div class="card-body">
                            <div class="app_div">
                                <a
                                    href="#"
                                    class="btn mx-2 btn-outline-primary rounded-pill"
                                    role="button">
                                    <img
                                        src="../publicassets/img/playstore.png"
                                        alt="playStore" />
                                    Google Store
                                </a>

                                <a
                                    href="#"
                                    class="btn mx-2 btn-outline-primary rounded-pill"
                                    role="button">
                                    <img
                                        src="../publicassets/img/apple_icon.png"
                                        alt="appleStore" />
                                    Apple Store
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Apps division end here  -->
            </div>
        </div>
    </div>
</div>
@endsection