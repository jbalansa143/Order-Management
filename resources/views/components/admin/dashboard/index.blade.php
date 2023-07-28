@extends('layouts.app')

@section('content')
<!-- Begin page -->
<div id="wrapper">
     <!-- Topbar Start -->
     <x-admin.dashboard.top-bar />
            <!-- ========== Left Sidebar Start ========== -->
            <x-admin.dashboard.left-side-bar />
            <!-- Left Sidebar End -->

            <!-- Start Page Content here -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <x-admin.dashboard.page-title />
                        <!-- end page title --> 

                        <x-admin.dashboard.dashboard-card />
        
                        <!-- end row -->

                        <x-admin.dashboard.dashboard-analytics />
                        
                        <!-- end row -->

                        <div class="row">
                           <x-admin.dashboard.card-map />

                            <x-admin.dashboard.card-table />
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <x-admin.dashboard.footer />
                <!-- end Footer -->

            </div>

            <!-- End Page content -->

        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <x-admin.dashboard.right-side-bar />
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
@endsection