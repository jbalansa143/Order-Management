<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <title>Cashier</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- plugin css -->
        <link href="../assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
       
        {{-- bootstrap table --}}
        <link href="../assets/libs/bootstrap-table/bootstrap-table.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="../assets/css/config/material/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
        <link href="../assets/css/config/material/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

        <link href="../assets/css/config/material/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
        <link href="../assets/css/config/material/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

        <!-- icons -->
        <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="loading" data-layout-mode="horizontal" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
             <div class="navbar-custom">
                <div class="container-fluid">
                    <ul class="list-unstyled topnav-menu float-end mb-0">

                        {{-- <li class="d-none d-lg-block">
                            <form class="app-search">
                                <div class="app-search-box dropdown">
                                    <div class="input-group">
                                        <input type="search" class="form-control" placeholder="Search..." id="top-search">
                                        <button class="btn input-group-text" type="submit">
                                            <i class="fe-search"></i>
                                        </button>
                                    </div>
                                    <div class="dropdown-menu dropdown-lg" id="search-dropdown">
                                        <!-- item-->
                                        <div class="dropdown-header noti-title">
                                            <h5 class="text-overflow mb-2">Found 22 results</h5>
                                        </div>
            
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="fe-home me-1"></i>
                                            <span>Analytics Report</span>
                                        </a>
            
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="fe-aperture me-1"></i>
                                            <span>How can I help you?</span>
                                        </a>
                            
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="fe-settings me-1"></i>
                                            <span>User profile settings</span>
                                        </a>

                                        <!-- item-->
                                        <div class="dropdown-header noti-title">
                                            <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                                        </div>

                                        <div class="notification-list">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="d-flex align-items-start">
                                                    <img class="d-flex me-2 rounded-circle" src="../assets/images/users/user-2.jpg" alt="Generic placeholder image" height="32">
                                                    <div class="w-100">
                                                        <h5 class="m-0 font-14">Erwin E. Brown</h5>
                                                        <span class="font-12 mb-0">UI Designer</span>
                                                    </div>
                                                </div>
                                            </a>

                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="d-flex align-items-start">
                                                    <img class="d-flex me-2 rounded-circle" src="../assets/images/users/user-5.jpg" alt="Generic placeholder image" height="32">
                                                    <div class="w-100">
                                                        <h5 class="m-0 font-14">Jacob Deo</h5>
                                                        <span class="font-12 mb-0">Developer</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
            
                                    </div>  
                                </div>
                            </form>
                        </li> --}}
    
                        {{-- <li class="dropdown d-inline-block d-lg-none">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fe-search noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-lg dropdown-menu-end p-0">
                                <form class="p-3">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                </form>
                            </div>
                        </li> --}}
    
                        <li class="dropdown d-none d-lg-inline-block">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen" href="#">
                                <i class="fe-maximize noti-icon"></i>
                            </a>
                        </li>
    
                        
    
                        
            
                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fe-bell noti-icon"></i>
                                <span class="badge bg-danger rounded-circle noti-icon-badge">9</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-lg">
    
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="m-0">
                                        <span class="float-end">
                                            <a href="" class="text-dark">
                                                <small>Clear All</small>
                                            </a>
                                        </span>Notification
                                    </h5>
                                </div>
    
                                <div class="noti-scroll" data-simplebar>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                        <div class="notify-icon">
                                            <img src="../assets/images/users/user-1.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Cristina Pride</p>
                                        <p class="text-muted mb-0 user-msg">
                                            <small>Hi, How are you? What about our next meeting</small>
                                        </p>
                                    </a>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-primary">
                                            <i class="mdi mdi-comment-account-outline"></i>
                                        </div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin
                                            <small class="text-muted">1 min ago</small>
                                        </p>
                                    </a>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon">
                                            <img src="../assets/images/users/user-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Karen Robinson</p>
                                        <p class="text-muted mb-0 user-msg">
                                            <small>Wow ! this admin looks good and awesome design</small>
                                        </p>
                                    </a>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-warning">
                                            <i class="mdi mdi-account-plus"></i>
                                        </div>
                                        <p class="notify-details">New user registered.
                                            <small class="text-muted">5 hours ago</small>
                                        </p>
                                    </a>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info">
                                            <i class="mdi mdi-comment-account-outline"></i>
                                        </div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin
                                            <small class="text-muted">4 days ago</small>
                                        </p>
                                    </a>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-secondary">
                                            <i class="mdi mdi-heart"></i>
                                        </div>
                                        <p class="notify-details">Carlos Crouch liked
                                            <b>Admin</b>
                                            <small class="text-muted">13 days ago</small>
                                        </p>
                                    </a>
                                </div>
    
                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                    View all
                                    <i class="fe-arrow-right"></i>
                                </a>
    
                            </div>
                        </li>
    
                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="../assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle">
                                <span class="pro-user-name ms-1">
                                    Cashier <i class="mdi mdi-chevron-down"></i> 
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>
    
                                <!-- item-->
                                {{-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-user"></i>
                                    <span>My Account</span>
                                </a> --}}
    
                                <!-- item-->
                                {{-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-settings"></i>
                                    <span>Settings</span>
                                </a>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-lock"></i>
                                    <span>Lock Screen</span>
                                </a> --}}
    
                                <div class="dropdown-divider"></div>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-log-out"></i>
                                    <span>Logout</span>
                                </a>
    
                            </div>
                        </li>
    
    
                    </ul>
    
                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="#">
                            <span class="flex justify-center items-center">
                                <h2 class="text-white font-bold">Cashier</h2>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end Topbar -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Orders</h4>
                                        <p class="sub-header mb-0">
                                            List of pending orders
                                        </p>
    
                                        <table data-toggle="table" data-search="true" data-show-refresh="true" data-sort-name="id" data-page-list="[5, 10, 20]"
                                            data-page-size="5" data-pagination="true" data-show-pagination-switch="true" class="table-borderless">
                                            <thead class="table-light">
                                                <tr>
                                                    <th data-field="id" data-sortable="true" data-formatter="invoiceFormatter">Order ID</th>
                                                    <th data-field="name" data-sortable="true">Name</th>
                                                    <th data-field="date" data-sortable="true" data-formatter="dateFormatter">Order Date</th>
                                                    <th data-field="amount" data-align="center" data-sortable="true" data-sorter="priceSorter">Price</th>
                                                    <th data-field="status" data-align="center" data-sortable="true" data-formatter="statusFormatter">Status
                                                    </th>
                                        
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
                                                <tr>
                                                    <td>UB-1609</td>
                                                    <td>Boudreaux</td>
                                                    <td>22 Jun 2017</td>
                                                    <td>$ 35.00</td>
                                                    <td>Unpaid</td>
                                                </tr>
                                                <tr>
                                                    <td>UB-1610</td>
                                                    <td>Woldt</td>
                                                    <td>24 Jun 2017</td>
                                                    <td>$ 15.00</td>
                                                    <td>Paid</td>
                                                </tr>
                                        
                                                <tr>
                                                    <td>UB-1611</td>
                                                    <td>Leonardo</td>
                                                    <td>25 Jun 2017</td>
                                                    <td>$ 35.00</td>
                                                    <td>Shipped</td>
                                                </tr>
                                        
                                                <tr>
                                                    <td>UB-1612</td>
                                                    <td>Halladay</td>
                                                    <td>27 Jun 2017</td>
                                                    <td>$ 35.00</td>
                                                    <td>Refunded</td>
                                                </tr>
                                        
                                                <tr>
                                                    <td>UB-1613</td>
                                                    <td>Badgett</td>
                                                    <td>28 Jun 2017</td>
                                                    <td>$ 95.00</td>
                                                    <td>Unpaid</td>
                                                </tr>
                                                <tr>
                                                    <td>UB-1614</td>
                                                    <td>Boudreaux</td>
                                                    <td>29 Jun 2017</td>
                                                    <td>$ 35.00</td>
                                                    <td>Paid</td>
                                                </tr>
                                        
                                                <tr>
                                                    <td>UB-1615</td>
                                                    <td>Boudreaux</td>
                                                    <td>22 Jun 2017</td>
                                                    <td>$ 35.00</td>
                                                    <td>Shipped</td>
                                                </tr>
                                        
                                                <tr>
                                                    <td>UB-1616</td>
                                                    <td>Boudreaux</td>
                                                    <td>22 Jun 2017</td>
                                                    <td>$ 35.00</td>
                                                    <td>Refunded</td>
                                                </tr>
                                        
                                                <tr>
                                                    <td>UB-1617</td>
                                                    <td>Boudreaux</td>
                                                    <td>22 Jun 2017</td>
                                                    <td>$ 35.00</td>
                                                    <td>Unpaid</td>
                                                </tr>
                                                <tr>
                                                    <td>UB-1618</td>
                                                    <td>Boudreaux</td>
                                                    <td>22 Jun 2017</td>
                                                    <td>$ 35.00</td>
                                                    <td>Paid</td>
                                                </tr>
                                        
                                                <tr>
                                                    <td>UB-1619</td>
                                                    <td>Boudreaux</td>
                                                    <td>22 Jun 2017</td>
                                                    <td>$ 35.00</td>
                                                    <td>Shipped</td>
                                                </tr>
                                        
                                                <tr>
                                                    <td>UB-1620</td>
                                                    <td>Boudreaux</td>
                                                    <td>22 Jun 2017</td>
                                                    <td>$ 35.00</td>
                                                    <td>Refunded</td>
                                                </tr>
                                        
                                                <tr>
                                                    <td>UB-1621</td>
                                                    <td>Boudreaux</td>
                                                    <td>22 Jun 2017</td>
                                                    <td>$ 35.00</td>
                                                    <td>Unpaid</td>
                                                </tr>
                                                <tr>
                                                    <td>UB-1622</td>
                                                    <td>Boudreaux</td>
                                                    <td>22 Jun 2017</td>
                                                    <td>$ 35.00</td>
                                                    <td>Paid</td>
                                                </tr>
                                        
                                                <tr>
                                                    <td>UB-1623</td>
                                                    <td>Boudreaux</td>
                                                    <td>22 Jun 2017</td>
                                                    <td>$ 35.00</td>
                                                    <td>Shipped</td>
                                                </tr>
                                        
                                                <tr>
                                                    <td>UB-1624</td>
                                                    <td>Boudreaux</td>
                                                    <td>22 Jun 2017</td>
                                                    <td>$ 35.00</td>
                                                    <td>Refunded</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->

                           



                        </div>
                        <!-- end row -->         
                        
                    </div> <!-- container -->

                </div> <!-- content -->       
            </div>

        </div>
        <!-- END wrapper -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="../assets/js/vendor.min.js"></script>

        {{-- Bootstrap table --}}
        <script src="../assets/libs/bootstrap-table/bootstrap-table.min.js"></script>
           <!-- Init js -->
           <script src="../assets/js/pages/bootstrap-tables.init.js"></script>

        <!-- Plugins js-->
        <script src="../assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="../assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="../assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>

        <!-- Dashboard 2 init -->
        <script src="../assets/js/pages/dashboard-2.init.js"></script>

        <!-- App js -->
        <script src="../assets/js/app.min.js"></script>
        
    </body>
</html>