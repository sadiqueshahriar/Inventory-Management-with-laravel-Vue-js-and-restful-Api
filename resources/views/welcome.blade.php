<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="token" id="token" value="{{ csrf_token() }}">
    {{-- vue css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!--favicon-->

    <link rel="icon" href=" {{ asset('backend/Agile (looping arrow).png') }}" type="image/png" height="16px"
        width="16px" />
    <!--plugins-->
    <link href=" {{ asset('backend/assets/plugins/notifications/css/lobibox.min.css') }}" rel="stylesheet" />
    <link href=" {{ asset('backend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <link href=" {{ asset('backend/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href=" {{ asset('backend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}"
        rel="stylesheet" />
    <link href=" {{ asset('backend/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <!-- loader-->
    <link href=" {{ asset('backend/assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src=" {{ asset('backend/assets/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link href=" {{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href=" {{ asset('backend/assets/css/app.css') }}" rel="stylesheet">
    <link href=" {{ asset('backend/assets/css/icons.css') }}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href=" {{ asset('backend/assets/css/dark-theme.css') }}" />
    <link rel="stylesheet" href=" {{ asset('backend/assets/css/semi-dark.css') }}" />
    <link rel="stylesheet" href=" {{ asset('backend/assets/css/header-colors.css') }}" />
    <title> Inventory--Management</title>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        <div id="app">
            <!--sidebar wrapper -->
            <div class="sidebar-wrapper" data-simplebar="true" id="sidbar"
                v-show="$route.path==='/' || $route.path==='/register' ||$route.path==='/forgot' ? false : true"
                style="display: none;">
                <div class="sidebar-header">
                    <div>
                        <img src="{{ asset('backend/Agile (looping arrow).png') }}" height="25px" width="25px">
                    </div>
                    <router-link to="/home">
                        <div>

                            <h4 class="logo-text">Dashboard</h4>
                        </div>
                    </router-link>
                    <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
                    </div>
                </div>
                <!--navigation-->
                <ul class="metismenu" id="menu">
                    <li>
                        <router-link to="/pos">
                            <img src="{{ asset('backend/pos.png') }}" height="20px" width="20px">
                            <div class="menu-title">POS</div>
                        </router-link>
                    </li>

                    <li>
                        <a href="javascript:;" class="has-arrow">
                            <img src="{{ asset('backend/professional employee.png') }}" height="20px" width="20px">
                            <div class="menu-title">Employee</div>
                        </a>
                        <ul>
                            <li>
                                <router-link to="/store-employee"><i class="bx bx-right-arrow-alt"></i>Add Employee
                                </router-link>
                            </li>
                            <li>
                                <router-link to="/employee"><i class="bx bx-right-arrow-alt"></i>All Employee
                                </router-link>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="has-arrow">
                            <img src="{{ asset('backend/Teamwork.png') }}" height="20px" width="20px">
                            <div class="menu-title">Suppliers</div>
                        </a>
                        <ul>

                            <li>
                                <router-link to="/store-supplier"><i class="bx bx-right-arrow-alt"></i>Add Supplier
                                </router-link>
                            </li>
                            <li>
                                <router-link to="/supplier"><i class="bx bx-right-arrow-alt"></i>All Suppliers
                                </router-link>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="javascript:;" class="has-arrow">
                            <img src="{{ asset('backend/hierarchical structure.png') }}" height="20px" width="20px">
                            <div class="menu-title">Category</div>
                        </a>
                        <ul>

                            <li>
                                <router-link to="/store-category"><i class="bx bx-right-arrow-alt"></i>Add Category
                                </router-link>
                            </li>
                            <li>
                                <router-link to="/category"><i class="bx bx-right-arrow-alt"></i>All Category
                                </router-link>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="javascript:;" class="has-arrow">
                            <img src="{{ asset('backend/5-star product quality.png') }}" height="20px" width="20px">
                            <div class="menu-title">Products</div>
                        </a>
                        <ul>

                            <li>
                                <router-link to="/store-product"><i class="bx bx-right-arrow-alt"></i>Add Product
                                </router-link>
                            </li>
                            <li>
                                <router-link to="/product"><i class="bx bx-right-arrow-alt"></i>All Product
                                </router-link>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="javascript:;" class="has-arrow">
                            <img src="{{ asset('backend/Creativity.png') }}" height="20px" width="20px">
                            <div class="menu-title">Expense</div>
                        </a>
                        <ul>

                            <li>
                                <router-link to="/store-expense"><i class="bx bx-right-arrow-alt"></i>Add Expense
                                </router-link>
                            </li>
                            <li>
                                <router-link to="/expense"><i class="bx bx-right-arrow-alt"></i>All Expense
                                </router-link>
                            </li>

                        </ul>
                    </li>


                    <li>
                        <a href="javascript:;" class="has-arrow">
                            <img src="{{ asset('backend/target consumer.png') }}" height="20px" width="20px">
                            <div class="menu-title">Customers</div>
                        </a>
                        <ul>

                            <li>
                                <router-link to="/store-customer"><i class="bx bx-right-arrow-alt"></i>Add Customer
                                </router-link>
                            </li>
                            <li>
                                <router-link to="/customer"><i class="bx bx-right-arrow-alt"></i>All Customer
                                </router-link>
                            </li>

                        </ul>
                    </li>


                    <li>
                        <a href="javascript:;" class="has-arrow">
                            <img src="{{ asset('backend/Time is money.png') }}" height="20px" width="20px">
                            <div class="menu-title">Salary</div>
                        </a>
                        <ul>

                            <li>
                                <router-link to="/given-salary"><i class="bx bx-right-arrow-alt"></i>Add Salary
                                </router-link>
                            </li>
                            <li>
                                <router-link to="/salary"><i class="bx bx-right-arrow-alt"></i>All Salary</router-link>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="javascript:;" class="has-arrow">
                            <img src="{{ asset('backend/Developing Product.png') }}" height="20px" width="20px">
                            <div class="menu-title">Orders</div>
                        </a>
                        <ul>

                            <li>
                                <router-link to="/order"><i class="bx bx-right-arrow-alt"></i>Todays Order</router-link>
                            </li>
                            <li>
                                <router-link to="/search"><i class="bx bx-right-arrow-alt"></i>Search</router-link>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <router-link to="/stock">
                            <img src="{{ asset('backend/Warehouse.png') }}" height="20px" width="20px">
                            <div class="menu-title">Stock</div>
                        </router-link>
                    </li>
                </ul>
                <!--end navigation-->
            </div>
            <!--end sidebar wrapper -->
            <!--start header -->
            <header id="topbar"
                v-show="$route.path==='/' || $route.path==='/register' ||$route.path==='/forgot' ? false : true"
                style="display: none;">
                <div class="topbar d-flex align-items-center">
                    <nav class="navbar navbar-expand">
                        <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                        </div>
                        <div class="search-bar flex-grow-1">
                            <div class="position-relative search-bar-box">
                                <input type="text" class="form-control search-control" placeholder="Type to search...">
                                <span class="position-absolute top-50 search-show translate-middle-y"><i
                                        class='bx bx-search'></i></span>
                                <span class="position-absolute top-50 search-close translate-middle-y"><i
                                        class='bx bx-x'></i></span>
                            </div>
                        </div>
                        <div class="top-menu ms-auto">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item mobile-search-icon">
                                    <a class="nav-link" href="#"> <i class='bx bx-search'></i>
                                    </a>
                                </li>

                                <li class="nav-item dropdown dropdown-large">

                                    <div class="dropdown-menu dropdown-menu-end">

                                        <div class="header-notifications-list">



                                        </div>

                                    </div>
                                </li>
                                <li class="nav-item dropdown dropdown-large">

                                    <div class="dropdown-menu dropdown-menu-end">

                                        <div class="header-message-list">


                                        </div>

                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="user-box dropdown">
                            <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret"
                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                                <img src="{{ asset('backend/assets/images/avatars/pro_pic.jpg') }}" class="user-img"
                                    alt="user avatar">
                                <div class="user-info ps-3">
                                    <p class="user-name mb-0">shahriar Shuvo</p>
                                    <p class="designattion mb-0">Developer</p>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">

                                <li>
                                    <router-link to="/logout" class="dropdown-item"><i
                                            class='bx bx-log-out-circle'></i><span>Logout</span></router-link>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </header>
            <!--end header -->

            <!--start page wrapper -->
            <div class="page-wrapper">
                <router-view></router-view>
            </div>
            <!--end page wrapper -->
            <!--start overlay-->
            <div class="overlay toggle-icon"></div>
            <!--end overlay-->
            <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
                    class='bx bxs-up-arrow-alt'></i></a>
            <!--End Back To Top Button-->
            <footer class="page-footer">
                <p class="mb-0">Copyright © 2021. All right reserved by <a
                        href="https://www.facebook.com/sadiq.shahriar/" target="_blank">Shahriar</a></p>
            </footer>

        </div>
    </div>
    <!--end wrapper-->
    <!--start switcher-->

    <!--end switcher-->
    <script src=" {{ asset('js/app.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src=" {{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--plugins-->
    <script src=" {{ asset('backend/assets/js/jquery.min.js') }}"></script>
    <script src=" {{ asset('backend/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src=" {{ asset('backend/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src=" {{ asset('backend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src=" {{ asset('backend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src=" {{ asset('backend/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script>
        let token = localStorage.getItem('token');
        if (token) {
            $('#sidbar').css("display", "");
            $('#topbar').css("display", "");
        }
    </script>


    <script src=" {{ asset('backend/assets/plugins/chartjs/js/Chart.min.js') }}"></script>
    <script src=" {{ asset('backend/assets/plugins/chartjs/js/Chart.extension.js') }}"></script>
    <script src=" {{ asset('backend/assets/plugins/sparkline-charts/jquery.sparkline.min.js') }}"></script>
    <!--notification js -->
    <script src=" {{ asset('backend/assets/plugins/notifications/js/lobibox.min.js') }}"></script>
    <script src=" {{ asset('backend/assets/plugins/notifications/js/notifications.min.js') }}"></script>
    <script src=" {{ asset('backend/assets/js/index.js') }}"></script>
    <!--app JS-->
    <script src=" {{ asset('backend/assets/js/app.js') }}"></script>
</body>

</html>
