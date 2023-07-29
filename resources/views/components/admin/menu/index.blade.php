@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="widget-rounded-circle card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-lg rounded-circle bg-primary">
                            <i class="fe-tag font-22 avatar-title text-white"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-end">
                            <h3 class="text-dark mt-1"><span data-plugin="counterup">3,947</span></h3>
                            <p class="text-muted mb-1 text-truncate">Total Menus</p>
                        </div>
                    </div>
                </div> <!-- end row-->
            </div>
        </div> <!-- end widget-rounded-circle-->
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="widget-rounded-circle card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-lg rounded-circle bg-warning">
                            <i class="fe-clock font-22 avatar-title text-white"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-end">
                            <h3 class="text-dark mt-1"><span data-plugin="counterup">624</span></h3>
                            <p class="text-muted mb-1 text-truncate">Pending Tickets</p>
                        </div>
                    </div>
                </div> <!-- end row-->
            </div>
        </div> <!-- end widget-rounded-circle-->
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="widget-rounded-circle card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-lg rounded-circle bg-success">
                            <i class="fe-check-circle font-22 avatar-title text-white"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-end">
                            <h3 class="text-dark mt-1"><span data-plugin="counterup">3195</span></h3>
                            <p class="text-muted mb-1 text-truncate">Closed Tickets</p>
                        </div>
                    </div>
                </div> <!-- end row-->
            </div>
        </div> <!-- end widget-rounded-circle-->
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="widget-rounded-circle card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-lg rounded-circle bg-danger">
                            <i class="fe-trash-2 font-22 avatar-title text-white"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-end">
                            <h3 class="text-dark mt-1"><span data-plugin="counterup">128</span></h3>
                            <p class="text-muted mb-1 text-truncate">Deleted Tickets</p>
                        </div>
                    </div>
                </div> <!-- end row-->
            </div>
        </div> <!-- end widget-rounded-circle-->
    </div> <!-- end col-->
</div>
<!-- end row -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('menu.create') }}" class="btn btn-sm btn-blue waves-effect waves-light float-end">
                    <i class="mdi mdi-plus-circle"></i> Add Menu
                </a>
                <h4 class="header-title mb-4">Manage Tickets</h4>

                <div class="table-responsive">
                    <table class="table table-hover m-0 table-centered dt-responsive nowrap w-100" id="tickets-table">
                        <thead>
                        <tr>
                            <th>
                                ID
                            </th>
                            <th>Requested By</th>
                            <th>Subject</th>
                            <th>Assignee</th>
                            <th>Priority</th>
                            <th>Status</th>
                            <th>Created Date</th>
                            <th>Due Date</th>
                            <th class="hidden-sm">Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td><b>#1256</b></td>
                            <td>
                                <a href="javascript: void(0);" class="text-body">
                                    <img src="{{ asset('assets/images/users/user-2.jpg') }}" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                    <span class="ms-2">George A. Llanes</span>
                                </a>
                            </td>

                            <td>
                                Support for theme
                            </td>

                            <td>
                                <a href="javascript: void(0);">
                                    <img src="{{ asset('assets/images/users/user-10.jpg') }}" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                </a>
                            </td>

                            <td>
                                <span class="badge bg-soft-secondary text-secondary">Low</span>
                            </td>

                            <td>
                                <span class="badge bg-success">Open</span>
                            </td>

                            <td>
                                2017/04/28
                            </td>

                            <td>
                                2017/04/28
                            </td>

                            <td>
                                <div class="btn-group dropdown">
                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil me-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-check-all me-2 text-muted font-18 vertical-middle"></i>Close</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete me-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-star me-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td><b>#2542</b></td>
                            <td>
                                <a href="javascript: void(0);" class="text-body">
                                    <img src="{{ asset('assets/images/users/user-3.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                    <span class="ms-2">Jose D. Delacruz</span>
                                </a>
                            </td>

                            <td>
                                New submission on your website
                            </td>

                            <td>
                                <a href="javascript: void(0);">
                                    <img src="{{ asset('assets/images/users/user-9.jpg') }}" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                </a>
                            </td>

                            <td>
                                <span class="badge bg-soft-warning text-warning">Medium</span>
                            </td>

                            <td>
                                <span class="badge bg-secondary text-light">Closed</span>
                            </td>

                            <td>
                                2008/04/25
                            </td>

                            <td>
                                2008/04/25
                            </td>

                            <td>
                                <div class="btn-group dropdown">
                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil me-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-check-all me-2 text-muted font-18 vertical-middle"></i>Close</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete me-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-star me-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!-- end col -->
</div>
<!-- end row -->
@endsection