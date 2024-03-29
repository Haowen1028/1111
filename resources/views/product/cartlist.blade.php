<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Codescandy" name="author">
    <title>Order List Dashboard - FreshCart </title>

    <!-- Libs CSS -->
    <link href="/css/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="/css/theme.min.css">
    <!-- Libs JS -->
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/simplebar.min.js"></script>

    <!-- Theme JS -->
    <script src="/js/theme.min.js"></script>
    <link href="/css/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="./assets/images/cart-shopping-solid.svg">
</head>

<body>

    <!-- main -->
    <nav class="navbar navbar-expand-lg navbar-glass">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center w-100">
                <div class="d-flex align-items-center">
                    <a class="text-inherit d-block d-xl-none me-4" data-bs-toggle="offcanvas" href="#offcanvasExample"
                        role="button" aria-controls="offcanvasExample">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                            class="bi bi-text-indent-right" viewBox="0 0 16 16">
                            <i class="fa-solid fa-bars-staggered mb-5"></i>
                        </svg>
                    </a>
                    <form role="search">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    </form>
                </div>
                <div>
                    <ul class="list-unstyled d-flex align-items-center mb-0 ms-5 ms-lg-0">
                        <li class="dropdown-center ">
                            <a class="position-relative btn-icon btn-ghost-secondary btn rounded-circle" href="#"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-light fa-bell"></i>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger mt-2 ms-n2">
                                    2
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg p-0 border-0 ">
                                <div
                                    class="border-bottom p-5 d-flex
                justify-content-between align-items-center">
                                    <div>
                                        <h5 class="mb-1">Notifications</h5>
                                        <p class="mb-0 small">You have 2 unread messages</p>
                                    </div>
                                    <a href="#" class="text-muted">
                                    </a><a href="#" class="btn btn-ghost-secondary btn-icon rounded-circle"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        data-bs-title="Mark all as read">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            fill="currentColor" class="bi bi-check2-all text-success"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z">
                                            </path>
                                            <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z">
                                            </path>
                                        </svg>
                                    </a>

                                </div>
                                <div data-simplebar="init" style="height: 250px;">
                                    <div class="simplebar-wrapper" style="margin: 0px;">
                                        <div class="simplebar-height-auto-observer-wrapper">
                                            <div class="simplebar-height-auto-observer"></div>
                                        </div>
                                        <div class="simplebar-mask">
                                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                                    aria-label="scrollable content"
                                                    style="height: auto; overflow: hidden;">
                                                    <div class="simplebar-content" style="padding: 0px;">
                                                        <!-- List group -->
                                                        <ul
                                                            class="list-group list-group-flush notification-list-scroll fs-6">
                                                            <!-- List group item -->
                                                            <li
                                                                class="list-group-item px-5 py-4 list-group-item-action active">
                                                                <a href="#" class="text-muted">
                                                                    <div class="d-flex">
                                                                        <img src="./assets/images/avatar/avatar-1.jpg"
                                                                            alt=""
                                                                            class="avatar avatar-md rounded-circle ">
                                                                        <div class="ms-4">
                                                                            <p class="mb-1">
                                                                                <span class="text-dark">Your order is
                                                                                    placed</span> waiting for shipping
                                                                            </p>
                                                                            <span><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="12" height="12"
                                                                                    fill="currentColor"
                                                                                    class="bi bi-clock text-muted"
                                                                                    viewBox="0 0 16 16">
                                                                                    <path
                                                                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z">
                                                                                    </path>
                                                                                </svg><small class="ms-2">1 minute
                                                                                    ago</small></span>
                                                                        </div>
                                                                    </div>
                                                                </a>



                                                            </li>
                                                            <li
                                                                class="list-group-item  px-5 py-4 list-group-item-action">
                                                                <a href="#" class="text-muted">
                                                                    <div class="d-flex">
                                                                        <img src="./assets/images/avatar/avatar-5.jpg"
                                                                            alt=""
                                                                            class="avatar avatar-md rounded-circle ">
                                                                        <div class="ms-4">
                                                                            <p class="mb-1">
                                                                                <span class="text-dark">Jitu Chauhan
                                                                                </span> answered to your pending order
                                                                                list with notes
                                                                            </p>
                                                                            <span><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="12" height="12"
                                                                                    fill="currentColor"
                                                                                    class="bi bi-clock text-muted"
                                                                                    viewBox="0 0 16 16">
                                                                                    <path
                                                                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z">
                                                                                    </path>
                                                                                </svg><small class="ms-2">2 days
                                                                                    ago</small></span>
                                                                        </div>
                                                                    </div>
                                                                </a>



                                                            </li>
                                                            <li
                                                                class="list-group-item px-5 py-4 list-group-item-action">
                                                                <a href="#" class="text-muted">
                                                                    <div class="d-flex">
                                                                        <img src="./assets/images/avatar/avatar-2.jpg"
                                                                            alt=""
                                                                            class="avatar avatar-md rounded-circle ">
                                                                        <div class="ms-4">
                                                                            <p class="mb-1">
                                                                                <span class="text-dark">You have new
                                                                                    messages</span> 2 unread messages
                                                                            </p>
                                                                            <span><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="12" height="12"
                                                                                    fill="currentColor"
                                                                                    class="bi bi-clock text-muted"
                                                                                    viewBox="0 0 16 16">
                                                                                    <path
                                                                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z">
                                                                                    </path>
                                                                                </svg><small class="ms-2">3 days
                                                                                    ago</small></span>
                                                                        </div>
                                                                    </div>
                                                                </a>



                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                                    </div>
                                </div>
                                <div class="border-top px-5 py-4 text-center">
                                    <a href="#" class=" ">
                                        View All
                                    </a>
                                </div>
                            </div>

                        </li>
                        <li class="dropdown ms-4">
                            <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="./assets/images/avatar/avatar-1.jpg" alt=""
                                    class="avatar avatar-md rounded-circle">
                            </a>

                            <div class="dropdown-menu dropdown-menu-end p-0">



                                <div class="lh-1 px-5 py-4 border-bottom">
                                    <h5 class="mb-1 h6">FreshCart Admin</h5>
                                    <small>admindemo@email.com</small>
                                </div>



                                <ul class="list-unstyled px-2 py-3">

                                    <li>
                                        <a class="dropdown-item" href="#">
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            Profile
                                        </a>


                                    </li>


                                    <li>
                                        <a class="dropdown-item" href="#">

                                            Settings
                                        </a>
                                    </li>

                                </ul>
                                <div class="border-top px-5 py-3">

                                    <a href="#">Log Out</a>
                                </div>



                            </div>

                        </li>
                    </ul>

                </div>

            </div>
        </div>
    </nav>
    <div class="main-wrapper">
        <!-- navbar vertical -->
        <nav class="navbar-vertical-nav d-none d-xl-block ">
            <div class="navbar-vertical">
                <div class="px-4 py-5">
                    <a href="#" class="navbar-brand">
                        <img src="./assets/images/logo/freshcart-logo.svg" alt="">
                    </a>
                </div>
                <div class="navbar-vertical-content flex-grow-1" data-simplebar="init">
                    <div class="simplebar-wrapper" style="margin: 0px;">
                        <div class="simplebar-height-auto-observer-wrapper">
                            <div class="simplebar-height-auto-observer"></div>
                        </div>
                        <div class="simplebar-mask">
                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                    aria-label="scrollable content" style="height: auto; overflow: hidden;">
                                    <div class="simplebar-content" style="padding: 0px;">
                                        <ul class="navbar-nav flex-column" id="sideNavbar">
                                            <li class="nav-item ">
                                                <a class="nav-link " href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-regular fa-house-chimney-blank"></i></span>
                                                        <span class="nav-link-text">Dashboard</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item mt-6 mb-3">
                                                <span class="nav-label">Store Managements</span>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link " href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-sharp fa-light fa-cart-shopping"></i></span>
                                                        <span class="nav-link-text">Products</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link " href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-regular fa-list-ul"></i></span>
                                                        <span class="nav-link-text">Categories</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link  " href="#" data-bs-toggle="collapse"
                                                    data-bs-target="#navCategoriesOrders" aria-expanded="false"
                                                    aria-controls="navCategoriesOrders">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-sharp fa-light fa-briefcase-blank"></i></span>
                                                        <span class="nav-link-text">Orders</span>
                                                    </div>
                                                </a>
                                                <div id="navCategoriesOrders" class="collapse  show "
                                                    data-bs-parent="#sideNavbar">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item ">
                                                            <a class="nav-link  active " href="#">
                                                                List
                                                            </a>
                                                        </li>
                                                        <!-- Nav item -->
                                                        <li class="nav-item ">
                                                            <a class="nav-link " href="#">
                                                                Single
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li class="nav-item ">
                                                <a class="nav-link " href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-thin fa-shop"></i></span>
                                                        <span class="nav-link-text">Sellers / Vendors</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link " href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-light fa-user-group"></i></span>
                                                        <span class="nav-link-text">Customers</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link " href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-thin fa-star"></i></span>
                                                        <span class="nav-link-text">Reviews</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- Nav item -->
                                            <li class="nav-item">
                                                <a class="nav-link  collapsed " href="#"
                                                    data-bs-toggle="collapse" data-bs-target="#navMenuLevelFirst"
                                                    aria-expanded="false" aria-controls="navMenuLevelFirst">
                                                    <span class="nav-link-icon"><i
                                                            class="fa-light fa-arrow-turn-down-right fa-rotate-90"></i></span>
                                                    <span class="nav-link-text">Menu Level</span>
                                                </a>
                                                <div id="navMenuLevelFirst" class="collapse "
                                                    data-bs-parent="#sideNavbar">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link " href="#"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#navMenuLevelSecond1"
                                                                aria-expanded="false"
                                                                aria-controls="navMenuLevelSecond1">
                                                                Two Level
                                                            </a>
                                                            <div id="navMenuLevelSecond1" class="collapse"
                                                                data-bs-parent="#navMenuLevel">
                                                                <ul class="nav flex-column">
                                                                    <li class="nav-item">
                                                                        <a class="nav-link " href="#">NavItem
                                                                            1</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link " href="#">NavItem
                                                                            2</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link  collapsed  " href="#"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#navMenuLevelThreeOne1"
                                                                aria-expanded="false"
                                                                aria-controls="navMenuLevelThreeOne1">
                                                                Three Level
                                                            </a>
                                                            <div id="navMenuLevelThreeOne1" class="collapse "
                                                                data-bs-parent="#navMenuLevel">
                                                                <ul class="nav flex-column">
                                                                    <li class="nav-item">
                                                                        <a class="nav-link  collapsed " href="#"
                                                                            data-bs-toggle="collapse"
                                                                            data-bs-target="#navMenuLevelThreeTwo"
                                                                            aria-expanded="false"
                                                                            aria-controls="navMenuLevelThreeTwo">
                                                                            NavItem 1
                                                                        </a>
                                                                        <div id="navMenuLevelThreeTwo"
                                                                            class="collapse collapse "
                                                                            data-bs-parent="#navMenuLevelThree">
                                                                            <ul class="nav flex-column">
                                                                                <li class="nav-item">
                                                                                    <a class="nav-link "
                                                                                        href="#">
                                                                                        NavChild Item 1
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link " href="#">Nav
                                                                            Item 2</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li class="nav-item mt-6 mb-3">
                                                <span class="nav-label">Site Settings</span> <span
                                                    class="badge bg-light-info text-dark-info">Coming Soon</span>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link disabled" href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-thin fa-newspaper"></i></span>
                                                        <span class="nav-link-text">Blog</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link disabled" href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-thin fa-images"></i></span>
                                                        <span class="nav-link-text">Media</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link disabled" href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-light fa-gear"></i></span>
                                                        <span class="nav-link-text">Store Settings</span>
                                                    </div>
                                                </a>
                                            </li>

                                            <li class="nav-item mt-6 mb-3">
                                                <span class="nav-label">Support</span> <span
                                                    class="badge bg-light-info text-dark-info">Coming Soon</span>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link disabled" href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-sharp fa-solid fa-headphones"></i></span>
                                                        <span class="nav-link-text">Support Ticket</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link disabled" href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-light fa-circle-question"></i></span>
                                                        <span class="nav-link-text">Help Center</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link disabled" href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-duotone fa-infinity"></i></span>
                                                        <span class="nav-link-text">How FreshCart Works</span>
                                                    </div>
                                                </a>
                                            </li>

                                            <li class="nav-item mt-6 mb-3">
                                                <span class="nav-label">Our Apps</span>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link disabled" href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-brands fa-apple"></i></span>
                                                        <span class="nav-link-text">Apple Store</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link disabled" href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-brands fa-google-play"></i></span>
                                                        <span class="nav-link-text">Google Play Store</span>
                                                    </div>
                                                </a>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                    </div>
                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                    </div>
                    <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                        <div class="simplebar-scrollbar"
                            style="height: 0px; transform: translate3d(0px, 0px, 0px); display: none;"></div>
                    </div>
                </div>
            </div>
        </nav>

        <nav class="navbar-vertical-nav offcanvas offcanvas-start navbar-offcanvac" tabindex="-1"
            id="offcanvasExample">
            <div class="navbar-vertical">
                <div class="px-4 py-5 d-flex justify-content-between align-items-center">
                    <a href="#" class="navbar-brand">
                        <img src="./assets/images/logo/freshcart-logo.svg" alt="">
                    </a>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="navbar-vertical-content flex-grow-1 simplebar-scrollable-y" data-simplebar="init">
                    <div class="simplebar-wrapper" style="margin: 0px;">
                        <div class="simplebar-height-auto-observer-wrapper">
                            <div class="simplebar-height-auto-observer"></div>
                        </div>
                        <div class="simplebar-mask">
                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                    aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                                    <div class="simplebar-content" style="padding: 0px;">
                                        <ul class="navbar-nav flex-column">
                                            <li class="nav-item ">
                                                <a class="nav-link " href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-regular fa-house-chimney-blank"></i></span>
                                                        <span>Dashboard</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item mt-6 mb-3">
                                                <span class="nav-label">Store Managements</span>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link " href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-sharp fa-light fa-cart-shopping"></i></span>
                                                        <span class="nav-link-text">Products</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link " href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-regular fa-list-ul"></i></span>
                                                        <span class="nav-link-text">Categories</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link  " href="#" data-bs-toggle="collapse"
                                                    data-bs-target="#navOrders" aria-expanded="false"
                                                    aria-controls="navOrders">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-sharp fa-light fa-briefcase-blank"></i></span>
                                                        <span class="nav-link-text">Orders</span>
                                                    </div>
                                                </a>
                                                <div id="navOrders" class="collapse  show "
                                                    data-bs-parent="#sideNavbar">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item ">
                                                            <a class="nav-link  active " href="#">
                                                                List
                                                            </a>
                                                        </li>
                                                        <!-- Nav item -->
                                                        <li class="nav-item ">
                                                            <a class="nav-link " href="#">
                                                                Single

                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link " href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-thin fa-shop"></i></span>
                                                        <span class="nav-link-text">Sellers / Vendors</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link " href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-light fa-user-group"></i></span>
                                                        <span class="nav-link-text">Customers</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link " href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-thin fa-star"></i></span>
                                                        <span class="nav-link-text">Reviews</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item mt-6 mb-3">
                                                <span class="nav-label">Site Settings</span> <span
                                                    class="badge bg-light-info text-dark-info">Coming Soon</span>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link disabled" href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-thin fa-newspaper"></i></span>
                                                        <span class="nav-link-text">Blog</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link disabled" href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-thin fa-images"></i></span>
                                                        <span class="nav-link-text">Media</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link disabled" href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-light fa-gear"></i></span>
                                                        <span class="nav-link-text">Store Settings</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item mt-6 mb-3">
                                                <span class="nav-label">Support</span> <span
                                                    class="badge bg-light-info text-dark-info">Coming Soon</span>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link disabled" href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-sharp fa-solid fa-headphones"></i></span>
                                                        <span class="nav-link-text">Support Ticket</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link disabled" href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-light fa-circle-question"></i></span>
                                                        <span class="nav-link-text">Help Center</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link disabled" href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-duotone fa-infinity"></i></span>
                                                        <span class="nav-link-text">How FreshCart Works</span>
                                                    </div>
                                                </a>
                                            </li>

                                            <li class="nav-item mt-6 mb-3">
                                                <span class="nav-label">Our Apps</span>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link disabled" href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-brands fa-apple"></i></span>
                                                        <span class="nav-link-text">Apple Store</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link disabled" href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-brands fa-google-play"></i></span>
                                                        <span class="nav-link-text">Google Play Store</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li id="navMenuLevel" class="collapse " data-bs-parent="#sideNavbar">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link " href="#" data-bs-toggle="collapse"
                                                            data-bs-target="#navMenuLevelSecond2"
                                                            aria-expanded="false" aria-controls="navMenuLevelSecond2">
                                                            Two Level
                                                        </a>
                                                        <div id="navMenuLevelSecond2" class="collapse"
                                                            data-bs-parent="#navMenuLevel">
                                                            <ul class="nav flex-column">
                                                                <li class="nav-item">
                                                                    <a class="nav-link " href="#">NavItem 1</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link " href="#">NavItem 2</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link  collapsed  " href="#"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#navMenuLevelThree2" aria-expanded="false"
                                                            aria-controls="navMenuLevelThree2">
                                                            Three Level
                                                        </a>
                                                        <div id="navMenuLevelThree2" class="collapse "
                                                            data-bs-parent="#navMenuLevel">
                                                            <ul class="nav flex-column">
                                                                <li class="nav-item">
                                                                    <a class="nav-link  collapsed " href="#"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#navMenuLevelThree3"
                                                                        aria-expanded="false"
                                                                        aria-controls="navMenuLevelThree3">
                                                                        NavItem 1
                                                                    </a>
                                                                    <div id="navMenuLevelThree3"
                                                                        class="collapse collapse "
                                                                        data-bs-parent="#navMenuLevelThree">
                                                                        <ul class="nav flex-column">
                                                                            <li class="nav-item">
                                                                                <a class="nav-link " href="#">
                                                                                    NavChild Item 1
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link " href="#">Nav
                                                                        Item 2</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="simplebar-placeholder" style="width: 279px; height: 1102px;"></div>
                    </div>
                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                    </div>
                    <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                        <div class="simplebar-scrollbar"
                            style="height: 702px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                    </div>
                </div>
            </div>

        </nav>


        <!-- main wrapper -->
        <main class="main-content-wrapper">
            <div class="container">
                <!-- row -->
                <div class="row mb-8">
                    <div class="col-md-12">
                        <!-- page header -->
                        <div>
                            <h2>Product List</h2>
                            <!-- breacrumb -->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Order List</li>
                                </ol>
                            </nav>

                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-12 mb-5">
                        <!-- card -->
                        <div class="card h-100 card-lg">
                            <div class=" p-6 ">
                                <div class="row justify-content-between ">
                                    <div class="col-md-4 col-12 mb-2 mb-md-0 flex-row">
                                        <!-- form -->
                                        <form class="d-flex" role="search">
                                            <input class="form-control" type="search" placeholder="Search"
                                                aria-label="Search">
                                            <a href="{{ route('product.create') }}" class="btn btn-primary">新增產品按鈕
                                                {{-- <button href="/Addcartlist" class="btn btn-primary"></button> --}}
                                            </a>
                                        </form>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-12">
                                        <!-- select -->
                                        <select class="form-select">
                                            <option selected="">Status</option>
                                            <option value="Success">Success</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Cancel">Cancel</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-body p-0">
                                <!-- table responsive -->
                                <div class="table-responsive">
                                    <table
                                        class="table table-centered table-hover text-nowrap table-borderless mb-0 table-with-checkbox">
                                        <thead class="bg-light">
                                            <tr>
                                                <th>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="checkAll">
                                                        <label class="form-check-label" for="checkAll">

                                                        </label>
                                                    </div>
                                                </th>
                                                <th>Image</th>
                                                <th>產品名稱</th>
                                                <th>產品描述</th>
                                                <th>新增日期</th>
                                                {{-- <th></th> --}}
                                                <th>顯示</th>
                                                <th>產品價格</th>
                                                <th>功能</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($products as $product)
                                                <tr>

                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="orderOne">
                                                            <label class="form-check-label" for="orderOne">

                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"> <img src="{{ asset($product->img_path) }}"
                                                                alt="" class="icon-shape icon-md"></a>
                                                    </td>
                                                    <td>{{ $product->name }}</td>
                                                    <td>{{ $product->desc }}</td>
                                                    <td>{{ $product->created_at->format('Y/m-d') }}</td>

                                                    <td>01 May 2023 (10:12 am)</td>


                                                    <td>
                                                        @if ($product->status == 1)
                                                            <span
                                                                class="badge bg-light-primary text-dark-primary">顯示</span>
                                                        @else
                                                            <span class="badge bg-danger ">不顯示</span>
                                                        @endif
                                                    </td>
                                                    <td>{{ $product->price }}</td>

                                                    <td>
                                                        <div class="dropdown">

                                                            <div><a class="dropdown-item" href="#">
                                                                    <i class="fa-regular fa-trash-can me-3"></i>刪除</a>
                                                            </div>
                                                            <div><a class="dropdown-item"
                                                                    href="{{ route('product.edit', ['id' => $product->id]) }}">
                                                                    <i
                                                                        class="fa-light fa-pen-to-square me-3"></i>編輯</a>
                                                            </div>

                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="border-top d-md-flex justify-content-between align-items-center p-6">
                                <span>Showing 1 to 8 of 12 entries</span>
                                <nav class="mt-2 mt-md-0">
                                    <ul class="pagination mb-0 ">
                                        <li class="page-item disabled"><a class="page-link "
                                                href="#">Previous</a></li>
                                        <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </main>
    </div>
</body>

</html>
