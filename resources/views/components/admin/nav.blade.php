<?php
$logo = App\Models\Logo::get()->first();
$adminLogo = $logo->admin_logo;
?>
<aside class="sidebar-wrapper" id="sidebar">
    <div class="sidebar-content">
        <!-- sidebar logo start here  -->
        <div class="sidebar-logo">
            <a href="{{ route('dashboard') }}" class="logo_link">
                <span style="">
                    <img src="{{asset('storage/app/public/logos/' . $adminLogo)}}" alt="" style="height: 60px; width: 137px; margin-left:23px;">
                </span>

             
            </a>
        </div>
        <!-- sidebar logo end here  -->
        <div class="sidebar-scroll">
            <!-- sidebar list area start here  -->
            <ul class="sidebar-list list-unstyled">
                <li class="sidebar-header">
                    <p>Menu</p>
                </li>
                <!-- dashboard  -->
                <li class="sidebar-item">
                    <a href="{{ route('dashboard') }}" class="sidebar-link {{request()->routeIs('dashboard') ? 'active' : ''}}">
                        <span><svg
                                xmlns="http://www.w3.org/2000/svg"
                                height="20"
                                viewBox="0 -960 960 960"
                                width="20"
                                fill="#5f6368">
                                <path
                                    d="M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z" />
                            </svg>
                        </span>
                        Dashboard
                    </a>
                </li>
                <!-- heading start here -->
                <li class="sidebar-item" id="has-dropdown-header">
                    <a
                        href="#"
                        class="sidebar-link collapsed has-dropdown {{ request()->routeIs('admin.headerAdd') || request()->routeIs('admin.headerList') ? 'active' : '' }}"
                        data-bs-toggle="collapse"
                        data-bs-target="#head"
                        aria-expanded="true"
                        aria-controls="head">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20" fill="#5f6368">
                                <path d="M144-744v-72h672v72H144Zm600 72q33 0 52.5 19.5T816-600v384q0 33-19.5 52.5T744-144H216q-33 0-52.5-19.5T144-216v-384q0-33 19.5-52.5T216-672h528Zm0 72H216v384h528v-384Zm-528 0v384-384Z" />
                            </svg>
                        </span>
                        Header
                        <span class="arrow">
                            <svg id="direction-header" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20" fill="#5f6368">
                                <path d="M480-345 240-585l56-56 184 183 184-183 56 56-240 240Z" />
                            </svg>
                        </span>
                    </a>


                    <ul
                        id="head"
                        class="sidebar-dropdown list-unstyled collapse {{ request()->routeIs('admin.headerAdd') || request()->routeIs('admin.headerList') ? 'show' : '' }}"
                        data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('admin.headerAdd') }}" class="sidebar-link {{ request()->routeIs('admin.headerAdd') ? 'active' : '' }}">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="8" viewBox="0 -960 960 960" width="8" fill="#5f6368">
                                        <path d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                                    </svg>
                                </span>
                                Add Heading
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('admin.headerList') }}" class="sidebar-link {{ request()->routeIs('admin.headerList') ? 'active' : '' }}">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="8" viewBox="0 -960 960 960" width="8" fill="#5f6368">
                                        <path d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                                    </svg>
                                </span>
                                Heading List
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Banner start here-->
                <li class="sidebar-item" id="has-dropdown-banner">
                    <a
                        href="#"
                        class="sidebar-link collapsed has-dropdown {{ request()->routeIs('admin.bannerAdd') || request()->routeIs('admin.bannerList') ? 'active' : '' }}"
                        data-bs-toggle="collapse"
                        data-bs-target="#banner"
                        aria-expanded="true"
                        aria-controls="banner">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20" fill="#5f6368">
                                <path d="M336-600v-72h288v72H336ZM264-48q-29.7 0-50.85-21.15Q192-90.3 192-120v-720q0-29.7 21.15-50.85Q234.3-912 264-912h432q29.7 0 50.85 21.15Q768-869.7 768-840v720q0 29.7-21.15 50.85Q725.7-48 696-48H264Zm0-120v48h432v-48H264Zm0-72h432v-480H264v480Zm0-552h432v-48H264v48Zm0 0v-48 48Zm0 624v48-48Z" />
                            </svg>
                        </span>
                        Banner
                        <span class="arrow">
                            <svg id="direction-banner" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20" fill="#5f6368">
                                <path d="M480-345 240-585l56-56 184 183 184-183 56 56-240 240Z" />
                            </svg>
                        </span>
                    </a>
                    <ul
                        id="banner"
                        class="sidebar-dropdown list-unstyled collapse {{ request()->routeIs('admin.bannerAdd') || request()->routeIs('admin.bannerList') ? 'show' : '' }}"
                        data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('admin.bannerAdd') }}" class="sidebar-link {{ request()->routeIs('admin.bannerAdd') ? 'active' : '' }}">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="8" viewBox="0 -960 960 960" width="8" fill="#5f6368">
                                        <path d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                                    </svg>
                                </span>
                                Add Banner
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('admin.bannerList') }}" class="sidebar-link {{ request()->routeIs('admin.bannerList') ? 'active' : '' }}">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="8" viewBox="0 -960 960 960" width="8" fill="#5f6368">
                                        <path d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                                    </svg>
                                </span>
                                Banner List
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Banner end here  -->

                <!-- social links start here  -->
                <li class="sidebar-item">
                    <a href="{{ route('admin.socialLinkList') }}" class="sidebar-link {{request()->routeIs('admin.socialLinkList') ? 'active' : ''}}">
                        <span><svg
                                xmlns="http://www.w3.org/2000/svg"
                                height="20"
                                viewBox="0 -960 960 960"
                                width="20"
                                fill="#5f6368">
                                <path
                                    d="M648-96q-50 0-85-35t-35-85q0-9 4-29L295-390q-16 14-36.05 22-20.04 8-42.95 8-50 0-85-35t-35-85q0-50 35-85t85-35q23 0 43 8t36 22l237-145q-2-7-3-13.81-1-6.81-1-15.19 0-50 35-85t85-35q50 0 85 35t35 85q0 50-35 85t-85 35q-23 0-43-8t-36-22L332-509q2 7 3 13.81 1 6.81 1 15.19 0 8.38-1 15.19-1 6.81-3 13.81l237 145q16-14 36.05-22 20.04-8 42.95-8 50 0 85 35t35 85q0 50-35 85t-85 35Zm0-72q20.4 0 34.2-13.8Q696-195.6 696-216q0-20.4-13.8-34.2Q668.4-264 648-264q-20.4 0-34.2 13.8Q600-236.4 600-216q0 20.4 13.8 34.2Q627.6-168 648-168ZM216-432q20.4 0 34.2-13.8Q264-459.6 264-480q0-20.4-13.8-34.2Q236.4-528 216-528q-20.4 0-34.2 13.8Q168-500.4 168-480q0 20.4 13.8 34.2Q195.6-432 216-432Zm432-264q20.4 0 34.2-13.8Q696-723.6 696-744q0-20.4-13.8-34.2Q668.4-792 648-792q-20.4 0-34.2 13.8Q600-764.4 600-744q0 20.4 13.8 34.2Q627.6-696 648-696Zm0 480ZM216-480Zm432-264Z" />
                            </svg>
                        </span>
                        Social Links
                    </a>
                </li>
                <!-- social links end here  -->

                <!-- feedback start here  -->
                <li class="sidebar-item" id="has-dropdown-feedback">
                    <a
                        href="#"
                        class="sidebar-link collapsed has-dropdown {{ request()->routeIs('admin.feedbackAdd') || request()->routeIs('admin.feedbackList') ? 'active' : '' }}"
                        data-bs-toggle="collapse"
                        data-bs-target="#feedback"
                        aria-expanded="true"
                        aria-controls="feedback">
                        <span><svg
                                xmlns="http://www.w3.org/2000/svg"
                                height="20"
                                viewBox="0 -960 960 960"
                                width="20"
                                fill="#5f6368">
                                <path
                                    d="M479.79-360q15.21 0 25.71-10.29t10.5-25.5q0-15.21-10.29-25.71t-25.5-10.5q-15.21 0-25.71 10.29t-10.5 25.5q0 15.21 10.29 25.71t25.5 10.5ZM444-480h72v-264h-72v264ZM96-96v-696q0-29.7 21.15-50.85Q138.3-864 168-864h624q29.7 0 50.85 21.15Q864-821.7 864-792v480q0 29.7-21.15 50.85Q821.7-240 792-240H240L96-96Zm114-216h582v-480H168v522l42-42Zm-42 0v-480 480Z" />
                            </svg>
                        </span>

                        Feedback

                        <!-- caret down svg start here  -->
                        <span class="arrow"><svg
                                id="direction-feedback"
                                xmlns="http://www.w3.org/2000/svg"
                                height="20"
                                viewBox="0 -960 960 960"
                                width="20"
                                fill="#5f6368">
                                <path
                                    d="M480-345 240-585l56-56 184 183 184-183 56 56-240 240Z" />
                            </svg>
                        </span>
                        <!-- caret down svg end here  -->
                    </a>
                    <ul
                        id="feedback"
                        class="sidebar-dropdown list-unstyled collapse  {{ request()->routeIs('admin.feedbackAdd') || request()->routeIs('admin.feedbackList') ? 'show' : '' }}"
                        data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('admin.feedbackAdd') }}" class="sidebar-link {{ request()->routeIs('admin.feedbackAdd') ? 'active' : '' }}">
                                <span>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        height="8"
                                        viewBox="0 -960 960 960"
                                        width="8"
                                        fill="#5f6368">
                                        <path
                                            d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                                    </svg>
                                </span>
                                Add Feedback
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('admin.feedbackList') }}" class="sidebar-link {{ request()->routeIs('admin.feedbackList') ? 'active' : '' }}">
                                <span>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        height="8"
                                        viewBox="0 -960 960 960"
                                        width="8"
                                        fill="#5f6368">
                                        <path
                                            d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                                    </svg>
                                </span>
                                Feedback List
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- feedback end here  -->

                <!-- client start here  -->
                <li class="sidebar-item" id="has-dropdown-client">
                    <a
                        href="#"
                        class="sidebar-link collapsed has-dropdown {{ request()->routeIs('admin.clientAdd') || request()->routeIs('admin.clientList') ? 'active' : '' }}"
                        data-bs-toggle="collapse"
                        data-bs-target="#client"
                        aria-expanded="true"
                        aria-controls="client">
                        <span><svg
                                xmlns="http://www.w3.org/2000/svg"
                                height="20"
                                viewBox="0 -960 960 960"
                                width="20"
                                fill="#5f6368">
                                <path
                                    d="M480-480q-60 0-102-42t-42-102q0-60 42-102t102-42q60 0 102 42t42 102q0 60-42 102t-102 42ZM192-192v-96q0-23 12.5-43.5T239-366q55-32 116.29-49 61.29-17 124.5-17t124.71 17Q666-398 721-366q22 13 34.5 34t12.5 44v96H192Zm72-72h432v-24q0-5.18-3.03-9.41-3.02-4.24-7.97-6.59-46-28-98-42t-107-14q-55 0-107 14t-98 42q-5 4-8 7.72-3 3.73-3 8.28v24Zm216.21-288Q510-552 531-573.21t21-51Q552-654 530.79-675t-51-21Q450-696 429-674.79t-21 51Q408-594 429.21-573t51 21Zm-.21-72Zm0 360Z" />
                            </svg>
                        </span>

                        Our Clients

                        <!-- caret down svg start here  -->
                        <span class="arrow"><svg
                                id="direction-client"
                                xmlns="http://www.w3.org/2000/svg"
                                height="20"
                                viewBox="0 -960 960 960"
                                width="20"
                                fill="#5f6368">
                                <path
                                    d="M480-345 240-585l56-56 184 183 184-183 56 56-240 240Z" />
                            </svg>
                        </span>
                        <!-- caret down svg end here  -->
                    </a>
                    <ul
                        id="client"
                        class="sidebar-dropdown list-unstyled collapse {{ request()->routeIs('admin.clientAdd') || request()->routeIs('admin.clientList') ? 'show' : '' }}"
                        data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('admin.clientAdd') }}" class="sidebar-link {{request()->routeIs('admin.clientAdd') ? 'active' : '' }}">
                                <span>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        height="8"
                                        viewBox="0 -960 960 960"
                                        width="8"
                                        fill="#5f6368">
                                        <path
                                            d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                                    </svg>
                                </span>
                                Add Client
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('admin.clientList') }}" class="sidebar-link {{request()->routeIs('admin.clientList') ? 'active' : '' }}">
                                <span>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        height="8"
                                        viewBox="0 -960 960 960"
                                        width="8"
                                        fill="#5f6368">
                                        <path
                                            d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                                    </svg>
                                </span>
                                Client List
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- client end here  -->

                <li class="sidebar-item" id="has-dropdown-blog">
                    <a
                        href="#"
                        class="sidebar-link collapsed has-dropdown {{ request()->routeIs('admin.blogAdd') || request()->routeIs('admin.blogList') ? 'active' : '' }}"
                        data-bs-toggle="collapse"
                        data-bs-target="#blog"
                        aria-expanded="{{ request()->routeIs('admin.blogAdd') || request()->routeIs('admin.blogList') ? 'true' : 'false' }}"
                        aria-controls="blog">
                        <span><svg
                                xmlns="http://www.w3.org/2000/svg"
                                height="20"
                                viewBox="0 -960 960 960"
                                width="20"
                                fill="#5f6368">
                                <path
                                    d="M192-396v-72h288v72H192Zm0-150v-72h432v72H192Zm0-150v-72h432v72H192Zm336 504v-113l210-209q7.26-7.41 16.13-10.71Q763-528 771.76-528q9.55 0 18.31 3.5Q798.83-521 806-514l44 45q6.59 7.26 10.29 16.13Q864-444 864-435.24t-3.29 17.92q-3.3 9.15-10.71 16.32L641-192H528Zm288-243-45-45 45 45ZM576-240h45l115-115-22-23-22-22-116 115v45Zm138-138-22-22 44 45-22-23Z" />
                            </svg>
                        </span>
                        Our Blogs

                        <!-- caret down svg start here  -->
                        <span class="arrow"><svg
                                id="direction-blog"
                                xmlns="http://www.w3.org/2000/svg"
                                height="20"
                                viewBox="0 -960 960 960"
                                width="20"
                                fill="#5f6368">
                                <path
                                    d="M480-345 240-585l56-56 184 183 184-183 56 56-240 240Z" />
                            </svg>
                        </span>
                        <!-- caret down svg end here  -->
                    </a>
                    <ul
                        id="blog"
                        class="sidebar-dropdown list-unstyled collapse {{ request()->routeIs('admin.blogAdd') || request()->routeIs('admin.blogList') ? 'show' : '' }}"
                        data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('admin.blogAdd') }}" class="sidebar-link {{ request()->routeIs('admin.blogAdd') ? 'active' : '' }}">
                                <span>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        height="8"
                                        viewBox="0 -960 960 960"
                                        width="8"
                                        fill="#5f6368">
                                        <path
                                            d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                                    </svg>
                                </span>
                                Add Blog
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('admin.blogList') }}" class="sidebar-link {{ request()->routeIs('admin.blogList') ? 'active' : '' }}">
                                <span>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        height="8"
                                        viewBox="0 -960 960 960"
                                        width="8"
                                        fill="#5f6368">
                                        <path
                                            d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                                    </svg>
                                </span>
                                Blog List
                            </a>
                        </li>
                    </ul>
                </li>


                <!-- Stack and Technology area start here  -->
                <li class="sidebar-item" id="has-dropdown-stack">
                    <a
                        href="#"
                        class="sidebar-link collapsed has-dropdown {{ request()->routeIs('admin.technologyAdd') || request()->routeIs('admin.technologyList') ? 'active' : '' }}"
                        data-bs-toggle="collapse"
                        data-bs-target="#stack"
                        aria-expanded="true"
                        aria-controls="stack">
                        <span><svg
                                xmlns="http://www.w3.org/2000/svg"
                                height="20"
                                viewBox="0 -960 960 960"
                                width="20"
                                fill="#5f6368">
                                <path
                                    d="M96-192v-96h96v-408q0-29.7 21.15-50.85Q234.3-768 264-768h552v72H264v408h216v96H96Zm516.28 0q-15.28 0-25.78-10.34-10.5-10.34-10.5-25.63v-359.74q0-15.29 10.34-25.79t25.62-10.5h215.76q15.28 0 25.78 10.34 10.5 10.34 10.5 25.63v359.74q0 15.29-10.34 25.79T828.04-192H612.28ZM648-288h144v-264H648v264Zm0 0h144-144Z" />
                            </svg>
                        </span>

                        Technologies

                        <!-- caret down svg start here  -->
                        <span class="arrow"><svg
                                id="direction-stack"
                                xmlns="http://www.w3.org/2000/svg"
                                height="20"
                                viewBox="0 -960 960 960"
                                width="20"
                                fill="#5f6368">
                                <path
                                    d="M480-345 240-585l56-56 184 183 184-183 56 56-240 240Z" />
                            </svg>
                        </span>
                        <!-- caret down svg end here  -->
                    </a>
                    <ul
                        id="stack"
                        class="sidebar-dropdown list-unstyled collapse {{ request()->routeIs('admin.technologyAdd') || request()->routeIs('admin.technologyList') ? 'show' : '' }}"
                        data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('admin.technologyAdd') }}" class="sidebar-link {{ request()->routeIs('admin.technologyAdd') ? 'active' : '' }}">
                                <span>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        height="8"
                                        viewBox="0 -960 960 960"
                                        width="8"
                                        fill="#5f6368">
                                        <path
                                            d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                                    </svg>
                                </span>
                                Add Technology
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('admin.technologyList') }}" class="sidebar-link {{  request()->routeIs('admin.technologyList') ? 'active' : '' }}">
                                <span>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        height="8"
                                        viewBox="0 -960 960 960"
                                        width="8"
                                        fill="#5f6368">
                                        <path
                                            d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                                    </svg>
                                </span>
                                Technology List
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Stack and Technology area end here  -->

                <!-- branches area start here  -->
                <li class="sidebar-item" id="has-dropdown-branch">
                    <a
                        href="#"
                        class="sidebar-link collapsed has-dropdown {{ request()->routeIs('admin.branchAdd') || request()->routeIs('admin.branchList') ? 'active' : '' }}"
                        data-bs-toggle="collapse"
                        data-bs-target="#branch"
                        aria-expanded="true"
                        aria-controls="stack">
                        <span><svg
                                xmlns="http://www.w3.org/2000/svg"
                                height="20"
                                viewBox="0 -960 960 960"
                                width="20"
                                fill="#5f6368">
                                <path
                                    d="M144-96v-240h108v-180h192v-108H336v-240h288v240H516v108h192v180h108v240H528v-240h108v-108H324v108h108v240H144Zm264-600h144v-96H408v96ZM216-168h144v-96H216v96Zm384 0h144v-96H600v96ZM480-691ZM360-264Zm240 0Z" />
                            </svg>
                        </span>

                        Branches

                        <!-- caret down svg start here  -->
                        <span class="arrow"><svg
                                id="direction-branch"
                                xmlns="http://www.w3.org/2000/svg"
                                height="20"
                                viewBox="0 -960 960 960"
                                width="20"
                                fill="#5f6368">
                                <path
                                    d="M480-345 240-585l56-56 184 183 184-183 56 56-240 240Z" />
                            </svg>
                        </span>
                        <!-- caret down svg end here  -->
                    </a>
                    <ul
                        id="branch"
                        class="sidebar-dropdown list-unstyled collapse {{ request()->routeIs('admin.branchAdd') || request()->routeIs('admin.branchList') ? 'show' : '' }}"
                        data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('admin.branchAdd') }}" class="sidebar-link {{ request()->routeIs('admin.branchAdd') ? 'active' : '' }}">
                                <span>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        height="8"
                                        viewBox="0 -960 960 960"
                                        width="8"
                                        fill="#5f6368">
                                        <path
                                            d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                                    </svg>
                                </span>
                                Add Branches
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('admin.branchList') }}" class="sidebar-link {{ request()->routeIs('admin.branchList') ? 'active' : '' }}">
                                <span>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        height="8"
                                        viewBox="0 -960 960 960"
                                        width="8"
                                        fill="#5f6368">
                                        <path
                                            d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                                    </svg>
                                </span>
                                Branch List
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- branches area end here  -->

                <!-- services area start here  -->
                <li class="sidebar-item" id="has-dropdown-services">
                    <a
                        href="#"
                        class="sidebar-link collapsed has-dropdown {{ request()->routeIs('admin.serviceAdd') || request()->routeIs('admin.serviceList') ? 'active' : '' }}"
                        data-bs-toggle="collapse"
                        data-bs-target="#services"
                        aria-expanded="true"
                        aria-controls="stack">
                        <span><svg
                                xmlns="http://www.w3.org/2000/svg"
                                height="20"
                                viewBox="0 -960 960 960"
                                width="20"
                                fill="#5f6368">
                                <path
                                    d="M384-480q-60 0-102-42t-42-102q0-60 42-102t102-42q60 0 102 42t42 102q0 60-42 102t-102 42ZM96-192v-92q0-26 12.5-47.5T143-366q55-32 116-49t125-17q11 0 20.5.5T425-430q-7 17-10.5 35t-5.5 36l-25-1q-54 0-106 14t-99 42q-4.95 2.94-7.98 8.24Q168-290.47 168-284v20h251q4.85 18.63 12.92 36.81Q440-209 451-192H96Zm543 48-12-56q-14-5-26.5-12T577-228l-55 17-32-55 41-40q-4-14-3.5-29t3.5-29l-41-39 32-56 54 16q11-10 24-17.5t27-11.5l13-56h64l13 56q14 5 27 12t24 17l54-15 32 55-40 38q2 15 2 30.05 0 15.06-3 28.95l41 39-32 55-55-16q-11 9-23.5 16.5T717-200l-14 56h-64Zm33.21-120Q702-264 723-285.21t21-51Q744-366 722.79-387t-51-21Q642-408 621-386.79t-21 51Q600-306 621.21-285t51 21Zm-288-288Q414-552 435-573.21t21-51Q456-654 434.79-675t-51-21Q354-696 333-674.79t-21 51Q312-594 333.21-573t51 21Zm-.21-72Zm35 360Z" />
                            </svg>
                        </span>

                        Services

                        <!-- caret down svg start here  -->
                        <span class="arrow"><svg
                                id="direction-services"
                                xmlns="http://www.w3.org/2000/svg"
                                height="20"
                                viewBox="0 -960 960 960"
                                width="20"
                                fill="#5f6368">
                                <path
                                    d="M480-345 240-585l56-56 184 183 184-183 56 56-240 240Z" />
                            </svg>
                        </span>
                        <!-- caret down svg end here  -->
                    </a>
                    <ul
                        id="services"
                        class="sidebar-dropdown list-unstyled collapse {{ request()->routeIs('admin.serviceAdd') || request()->routeIs('admin.serviceList') ? 'show' : '' }}"
                        data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('admin.serviceAdd') }}" class="sidebar-link {{ request()->routeIs('admin.serviceAdd') ? 'active' : '' }}">
                                <span>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        height="8"
                                        viewBox="0 -960 960 960"
                                        width="8"
                                        fill="#5f6368">
                                        <path
                                            d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                                    </svg>
                                </span>
                                Add Services
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('admin.serviceList') }}" class="sidebar-link {{ request()->routeIs('admin.serviceList') ? 'active' : '' }}">
                                <span>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        height="8"
                                        viewBox="0 -960 960 960"
                                        width="8"
                                        fill="#5f6368">
                                        <path
                                            d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                                    </svg>
                                </span>
                                Services List
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- services area end here  -->

                <!-- Industries area start here  -->
                <li class="sidebar-item" id="has-dropdown-industries">
                    <a
                        href="#"
                        class="sidebar-link collapsed has-dropdown {{ request()->routeIs('admin.industryAdd') || request()->routeIs('admin.industryList') ? 'active' : '' }}"
                        data-bs-toggle="collapse"
                        data-bs-target="#industries"
                        aria-expanded="true"
                        aria-controls="stack">
                        <span><svg
                                xmlns="http://www.w3.org/2000/svg"
                                height="20"
                                viewBox="0 -960 960 960"
                                width="20"
                                fill="#5f6368">
                                <path
                                    d="m246-480-13-56q-14-5-26-12t-23-16l-56 17-32-56 42-40q-2-14-2.5-29t2.5-29l-42-38 32-56 55 16q11-10 23.5-17t26.5-12l13-56h64l13 56q14 5 27 12t24 17l55-16 31 56-40 37q3 15 3 30t-3 30l41 40-32 55-56-17q-11 10-23.5 16.5T323-536l-13 56h-64Zm33-120q30 0 51-21t21-51q0-30-21-51t-51-21q-30 0-51 21t-21 51q0 30 21 51t51 21ZM619-96l-16-71q-17-6-32.5-14.5T541-202l-69 22-40-70 52-49q-4-18-4-36.5t4-36.5l-52-48 40-70 68 21q14-12 30-21.5t33-15.5l16-70h80l17 70q18 6 34 15t30 22l68-21 40 70-51 47q4 19 4 37.5t-4 37.5l51 48-40 70-68-22q-14 12-30.5 21T716-166l-17 70h-80Zm41-144q40 0 68-28t28-68q0-40-28-68t-68-28q-40 0-68 28t-28 68q0 40 28 68t68 28Z" />
                            </svg>
                        </span>

                        Industry

                        <!-- caret down svg start here  -->
                        <span class="arrow"><svg
                                id="direction-industries"
                                xmlns="http://www.w3.org/2000/svg"
                                height="20"
                                viewBox="0 -960 960 960"
                                width="20"
                                fill="#5f6368">
                                <path
                                    d="M480-345 240-585l56-56 184 183 184-183 56 56-240 240Z" />
                            </svg>
                        </span>
                        <!-- caret down svg end here  -->
                    </a>
                    <ul
                        id="industries"
                        class="sidebar-dropdown list-unstyled collapse {{ request()->routeIs('admin.industryAdd') || request()->routeIs('admin.industryList') ? 'show' : '' }}"
                        data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('admin.industryAdd') }}" class="sidebar-link {{ request()->routeIs('admin.industryAdd') ? 'active' : '' }}">
                                <span>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        height="8"
                                        viewBox="0 -960 960 960"
                                        width="8"
                                        fill="#5f6368">
                                        <path
                                            d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                                    </svg>
                                </span>
                                Add Industry
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('admin.industryList') }}" class="sidebar-link {{ request()->routeIs('admin.industryList') ? 'active' : '' }}">
                                <span>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        height="8"
                                        viewBox="0 -960 960 960"
                                        width="8"
                                        fill="#5f6368">
                                        <path
                                            d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                                    </svg>
                                </span>
                                Industry List
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Industries area end here  -->

                <!-- certificates start here  -->
                <li class="sidebar-item" id="has-dropdown-certificate">
                    <a
                        href="#"
                        class="sidebar-link collapsed has-dropdown {{ request()->routeIs('admin.certificateAdd') || request()->routeIs('admin.certificateList') ? 'active' : '' }}"
                        data-bs-toggle="collapse"
                        data-bs-target="#certificate"
                        aria-expanded="true"
                        aria-controls="stack">
                        <span><svg
                                xmlns="http://www.w3.org/2000/svg"
                                height="20px"
                                viewBox="0 -960 960 960"
                                width="20px"
                                fill="#5f6368">
                                <path
                                    d="m391-415 34-110-89-70h109l35-108 35 108h109l-89 70 34 110-89-68-89 68ZM263-48v-280q-43-37-69-99t-26-125q0-130 91-221t221-91q130 0 221 91t91 221q0 64-24 125.5T696-327v279L480-96 263-48Zm217-264q100 0 170-70t70-170q0-100-70-170t-170-70q-100 0-170 70t-70 170q0 100 70 170t170 70ZM335-138l145-32 144 32v-138q-33 18-69.5 27t-74.5 9q-38 0-75-8.5T335-276v138Zm145-70Z" />
                            </svg>
                        </span>

                        Certificate

                        <!-- caret down svg start here  -->
                        <span class="arrow"><svg
                                id="direction-certificate"
                                xmlns="http://www.w3.org/2000/svg"
                                height="20"
                                viewBox="0 -960 960 960"
                                width="20"
                                fill="#5f6368">
                                <path
                                    d="M480-345 240-585l56-56 184 183 184-183 56 56-240 240Z" />
                            </svg>
                        </span>
                        <!-- caret down svg end here  -->
                    </a>
                    <ul
                        id="certificate"
                        class="sidebar-dropdown list-unstyled collapse {{ request()->routeIs('admin.certificateAdd') || request()->routeIs('admin.certificateList') ? 'show' : '' }}"
                        data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('admin.certificateAdd') }}" class="sidebar-link {{ request()->routeIs('admin.certificateAdd') ? 'active' : '' }}">
                                <span>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        height="8"
                                        viewBox="0 -960 960 960"
                                        width="8"
                                        fill="#5f6368">
                                        <path
                                            d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                                    </svg>
                                </span>
                                Add Certicate
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('admin.certificateList') }}" class="sidebar-link {{ request()->routeIs('admin.certificateList') ? 'active' : '' }}">
                                <span>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        height="8"
                                        viewBox="0 -960 960 960"
                                        width="8"
                                        fill="#5f6368">
                                        <path
                                            d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                                    </svg>
                                </span>
                                Certificate List
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- certificates end here  -->

                <!-- case study start here  -->
                {{-- <li class="sidebar-item" id="has-dropdown-case">
                    <a
                        href="#"
                        class="sidebar-link collapsed has-dropdown {{ request()->routeIs('add-edit-case-study') || request()->routeIs('case-study-list') ? 'active' : '' }}"
                data-bs-toggle="collapse"
                data-bs-target="#case"
                aria-expanded="true"
                aria-controls="stack">
                <span><svg
                        xmlns="http://www.w3.org/2000/svg"
                        height="20"
                        viewBox="0 -960 960 960"
                        width="20"
                        fill="#5f6368">
                        <path
                            d="M336-240h288v-72H336v72Zm0-144h288v-72H336v72ZM263.72-96Q234-96 213-117.15T192-168v-624q0-29.7 21.15-50.85Q234.3-864 264-864h312l192 192v504q0 29.7-21.16 50.85Q725.68-96 695.96-96H263.72ZM528-624v-168H264v624h432v-456H528ZM264-792v189-189 624-624Z" />
                    </svg>
                </span>

                Case Study

                <!-- caret down svg start here  -->
                <span class="arrow"><svg
                        id="direction-case"
                        xmlns="http://www.w3.org/2000/svg"
                        height="20"
                        viewBox="0 -960 960 960"
                        width="20"
                        fill="#5f6368">
                        <path
                            d="M480-345 240-585l56-56 184 183 184-183 56 56-240 240Z" />
                    </svg>
                </span>
                <!-- caret down svg end here  -->
                </a>
                <ul
                    id="case"
                    class="sidebar-dropdown list-unstyled collapse {{ request()->routeIs('add-edit-case-study') || request()->routeIs('case-study-list') ? 'show' : '' }}"
                    data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="{{ route('add-edit-case-study') }}" class="sidebar-link {{ request()->routeIs('add-edit-case-study') ? 'active' : '' }}">
                            <span>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    height="8"
                                    viewBox="0 -960 960 960"
                                    width="8"
                                    fill="#5f6368">
                                    <path
                                        d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                                </svg>
                            </span>
                            Add Case
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="{{ route('case-study-list') }}" class="sidebar-link {{ request()->routeIs('case-study-list') ? 'active' : '' }}">
                            <span>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    height="8"
                                    viewBox="0 -960 960 960"
                                    width="8"
                                    fill="#5f6368">
                                    <path
                                        d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                                </svg>
                            </span>
                            Case List
                        </a>
                    </li>
                </ul>
                </li> --}}

                <li class="sidebar-item" id="has-dropdown-setting">
                    <a
                        href="#"
                        class="sidebar-link collapsed has-dropdown {{ request()->routeIs('admin.logo')  ? 'active' : '' }}"
                        data-bs-toggle="collapse"
                        data-bs-target="#setting"
                        aria-expanded="true"
                        aria-controls="stack">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492M5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0" />
                                <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115z" />
                            </svg>
                        </span>

                        Settings

                        <!-- caret down svg start here  -->
                        <span class="arrow"><svg
                                id="direction-setting"
                                xmlns="http://www.w3.org/2000/svg"
                                height="20"
                                viewBox="0 -960 960 960"
                                width="20"
                                fill="#5f6368">
                                <path
                                    d="M480-345 240-585l56-56 184 183 184-183 56 56-240 240Z" />
                            </svg>
                        </span>
                        <!-- caret down svg end here  -->
                    </a>
                    <ul
                        id="setting"
                        class="sidebar-dropdown list-unstyled collapse {{ request()->routeIs('admin.logo') ? 'show' : '' }}"
                        data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('admin.logo') }}" class="sidebar-link {{ request()->routeIs('admin.logo') ? 'active' : '' }}">
                                <span>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        height="8"
                                        viewBox="0 -960 960 960"
                                        width="8"
                                        fill="#5f6368">
                                        <path
                                            d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                                    </svg>
                                </span>
                                Update Logo
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- case study end here  -->
            </ul> <br><br>
            <!-- sidebar list area end here  -->
        </div>
    </div>
</aside>