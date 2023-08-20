<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Cart | UBold - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{  asset('assets/images/favicon.ico') }}">

	    <!-- App css -->
	    <link href="{{  asset('assets/css/config/material/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
	    <link href="{{  asset('assets/css/config/material/app.min.css') }}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

	    <link href="{{  asset('assets/css/config/material/bootstrap-dark.min.css') }}" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
	    <link href="{{  asset('assets/css/config/material/app-dark.min.css') }}" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

	    <!-- icons -->
	    <link href="{{  asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    </head>

    <!-- body start -->
    <body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

        <!-- Begin page -->
        <div id="wrapper">
                    <!-- Start Content-->
                    <div class="container">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">My Cart</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="table-responsive">
                                                    <table class="table table-borderless table-nowrap table-centered mb-0">
                                                        <thead class="table-light">
                                                            <tr>
                                                                <th>Menu</th>
                                                                <th>Price</th>
                                                                <th>Quantity</th>
                                                                <th>Total</th>
                                                                <th style="width: 50px;"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($cart as $cartItem)
                                                            <tr>
                                                                <td>
                                                                    <img src="{{  asset('assets/images/products/product-1.png') }}" alt="contact-img"
                                                                        title="contact-img" class="rounded me-3" height="48" />
                                                                    <p class="m-0 d-inline-block align-middle font-16">
                                                                        <a href="ecommerce-product-detail.html" class="text-reset font-family-secondary">{{ $cartItem->menu }}</a>
                                                                        <br>
                                                                        <small class="me-2">{{ $cartItem->category }}</small>
                                                                        <small><b>Color:</b> Light Green
                                                                        </small>
                                                                    </p>
                                                                </td>
                                                                <td>
                                                                    ₱ {{ $cartItem->price }}
                                                                </td>
                                                                <td>
                                                                    <input type="number" max="10" min="1" value="{{ $cartItem->quantity }}" class="form-control" placeholder="Qty" style="width: 90px;">
                                                                </td>
                                                                <td>
                                                                    ₱{{ $cartItem->price * $cartItem->quantity }}
                                                                </td>
                                                                <td>
                                                                    <a href="{{ route('cart.destroy', $cartItem->id) }}" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive-->
                                            </div>
                                            <!-- end col -->

                                            <div class="col-lg-4">
                                                <div class="border p-3 mt-4 mt-lg-0 rounded">
                                                    <h4 class="header-title mb-3">Order Summary</h4>

                                                    <div class="table-responsive">
                                                        <table class="table mb-0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Grand Total :</td>
                                                                    <td>$1571.19</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Discount : </td>
                                                                    <td>-$157.11</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Shipping Charge :</td>
                                                                    <td>$25</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Estimated Tax : </td>
                                                                    <td>$19.22</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Total :</th>
                                                                    <th>$1458.3</th>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- end table-responsive -->
                                                </div>

                                                {{-- <div class="alert alert-warning mt-3" role="alert">
                                                    Use coupon code <strong>UBTF25</strong> and get 25% discount !
                                                </div> --}}

                                                <div class="col-sm-6">
                                                    <div class="text-sm-end">
                                                        
                                                    </div>
                                                </div> <!-- end col -->
                                                <div class="d-grid gap-2 col-6 mx-auto mt-4">
                                                    {{-- <input type="text" class="form-control form-control-light" placeholder="Coupon code" aria-label="Recipient's username"> --}}
                                                    <a href="ecommerce-checkout.html" class="btn btn-primary"><i class="mdi mdi-cart-plus me-1"></i> Checkout</a>
                                                   
                                                            <a href="{{ route('customer.index') }}" class="btn text-muted d-none d-sm-inline-block btn-link fw-semibold">
                                                                <i class="mdi mdi-arrow-left"></i> Order more</a>
                                                 
                                                </div>

                                            </div> <!-- end col -->

                                        </div> <!-- end row -->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

        </div>
        <!-- END wrapper -->

        <!-- Vendor js -->
        <script src="{{  asset('assets/js/vendor.min.js') }}"></script>

        <!-- App js -->
        <script src="{{  asset('assets/js/app.min.js') }}"></script>
        
    </body>
</html>