@extends('Header.index')

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="">
    <form action="{{url('/updateCompany')}}" method="post" enctype="multipart/form-data">
          @csrf
                <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Edit Company</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <label for="company_name">Company Name</label>
                                                        <input type="name" id="company_name" name="company_name" class="form-control">
                                                        <input type="hidden" id="company_id" name="company_id"  class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <label for="company_abbreviation">Company Abbreviation</label>
                                                        <input type="name" id="company_abbreviation" name="company_abbreviation" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <label for="company_phone_one">Company Phone 1</label>
                                                        <input type="tel" id="company_phone_one" name="company_phone_one" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <label for="company_phone_two">Company Phone 2</label>
                                                        <input type="name" id="company_phone_two" name="company_phone_two" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                    <label for="company_email" class="">Company Email</label>
                                                    <input type="email" id="company_email" name="company_email" id="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <!-- <div class="container"> -->
                                                    <label for="company_logo" class="">Company Logo</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="company_logo_path" id="inputfilename" class="form-control custom-file-input">
                                                        <label for="company_logo" id="labelcontext" class="custom-file-label"></label>
                                                    </div>
                                                <!-- </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                            <div class="col-md-6">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <label for="region">Region</label>
                                                            <input type="tel" id="region" name="region" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <label for="address">Address</label>
                                                            <input type="address" id="address" name="address" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="row">
                                            <div class="col-md-6">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <label for="city">City</label>
                                                            <input type="tel" id="city" name="city" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <label for="area">Area</label>
                                                            <input type="name" id="area" name="area" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <label for="twitter_handle">Twitter Handle</label>
                                                            <input type="tel" id="twitter_handle" name="twitter_handle" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <label for="instagram_handle">Instagram Handle</label>
                                                            <input type="name" id="instagram_handle" name="instagram_handle" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <label for="facebook_handle">Facebook Handle</label>
                                                            <input type="name" id="facebook_handle" name="facebook_handle" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update changes</button>
                            </div>
                        </div>
                    </div>
        </form>
    </div>
  </div>
</div>

@section('content')

<div class="container-fluid">
    <div class="row mb-4">
        <div class="container mt-2" >
        <button class="btn btn-primary pull-right editCompany" data-companydata="{{$company_data}}" >Edit Company</button>
        </div>
    </div>
</div>

<div class="container-fluid">

    <!-- Big chart graph -->
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="mb-3 card">
                <div class="card-header-tab card-header">
                    <div
                        class="card-header-title font-size-lg text-capitalize font-weight-normal">
                        <b> {{$company_data->company_name}}'s </b>  <span> Total salaries for the year </span>
                    </div>
                </div>
                <div class="pt-0 card-body">
                    <div id="chart-combined"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of big chart graph -->

    <!-- Sub Graphs -->
    <div class="row">
    <div class="col-md-6 col-lg-4 col-xl-4">
        <div class="card-hover-shadow-2x mb-3 card">
            <div class="rm-border responsive-center text-left card-header">
                <div><h5 class="menu-header-title text-capitalize text-success">
                    Cancelled
                    Errands</h5></div>
            </div>
            <div class="widget-chart widget-chart2 text-left pt-0">
                <div class="widget-chat-wrapper-outer">
                    <div class="widget-chart-content">
                        <div class="widget-chart-flex">
                            <div class="widget-numbers">
                                <div class="widget-chart-flex">
                                <div class="text-success"><span>{{$cancelled_errands}}</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-chart-wrapper widget-chart-wrapper-lg he-auto opacity-10 m-0">
                        <div id="dashboard-sparkline-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 col-xl-4">
        <div class="card-hover-shadow-2x mb-3 card">
            <div class="rm-border responsive-center text-left card-header">
                <div><h5 class="menu-header-title text-capitalize text-success">
                    Successful errands</h5></div>
            </div>
            <div class="widget-chart widget-chart2 text-left pt-0">
                <div class="widget-chat-wrapper-outer">
                    <div class="widget-chart-content">
                        <div class="widget-chart-flex">
                            <div class="widget-numbers">
                                <div class="widget-chart-flex">
                                    <div class="text-success"><span>{{$active_errands}}</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-chart-wrapper widget-chart-wrapper-lg he-auto opacity-10 m-0">
                        <div id="dashboard-sparkline-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 col-xl-4">
        <div class="card-hover-shadow-2x mb-3 card">
            <div class="rm-border responsive-center text-left card-header">
                <div><h5 class="menu-header-title text-capitalize text-success">
                    Company
                    Rating</h5></div>
            </div>
            <div class="widget-chart widget-chart2 text-left pt-0">
                <div class="widget-chat-wrapper-outer">
                    <div class="widget-chart-content">
                        <div class="widget-chart-flex">
                            <div class="widget-numbers">
                                <div class="widget-chart-flex">
                                <div class="text-success"><span>{{$company_rating}}</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-chart-wrapper widget-chart-wrapper-lg he-auto opacity-10 m-0">
                        <div id="dashboard-sparkline-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div
            class="widget-chart widget-chart2 text-left mb-3 card-btm-border card-shadow-success border-success card">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content">
                    <div class="widget-title opacity-5 text-uppercase">
                        Employees
                    </div>
                    <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                        <div class="widget-chart-flex align-items-center">
                            <div>
                                <small class="text-success pr-1">+</small>
                                {{$total_employees}}
                                <small class="opacity-5 pl-1">hires</small>
                            </div>
                            <div
                                class="widget-title ml-auto font-size-lg font-weight-normal text-muted">
                                <div
                                    class="circle-progress circle-progress-success-sm d-inline-block">
                                    <small></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div
            class="widget-chart widget-chart2 text-left mb-3 card-btm-border card-shadow-primary border-primary card">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content">
                    <div class="widget-title opacity-5 text-uppercase">Motor Bikes
                    </div>
                    <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                        <div class="widget-chart-flex align-items-center">
                            <div>
                                <span class="opacity-10 text-success pr-2">
                                    <i class="fa fa-angle-up"></i>
                                </span>
                                {{$total_bikes}}
                                <small class="opacity-5 pl-1"></small>
                            </div>
                            <div
                                class="widget-title ml-auto font-size-lg font-weight-normal text-muted">
                                <div
                                    class="circle-progress circle-progress-gradient-alt-sm d-inline-block">
                                    <small></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div
            class="widget-chart widget-chart2 text-left mb-3 card-btm-border card-shadow-primary border-primary card">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content">
                    <div class="widget-title opacity-5 text-uppercase">Total Errands
                    </div>
                    <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                        <div class="widget-chart-flex align-items-center">
                            <div>
                                <span class="opacity-10 text-success pr-2">
                                    <i class="fa fa-angle-up"></i>
                                </span>
                                {{$active_errands}}
                                <small class="opacity-5 pl-1"> </small>
                            </div>
                            <div
                                class="widget-title ml-auto font-size-lg font-weight-normal text-muted">
                                <div
                                    class="circle-progress circle-progress-gradient-alt-sm d-inline-block">
                                    <small></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div
            class="widget-chart widget-chart2 text-left mb-3 card-btm-border card-shadow-success border-success card">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content">
                    <div class="widget-title opacity-5 text-uppercase">
                        Daily Transactions
                    </div>
                    <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                        <div class="widget-chart-flex align-items-center">
                            <div>
                                <small class="text-success pr-1">+</small>
                                <small class="opacity-5 pl-1">GHC</small>
                                {{$daily_transactions}}
                            </div>
                            <div
                                class="widget-title ml-auto font-size-lg font-weight-normal text-muted">
                                <div
                                    class="circle-progress circle-progress-success-sm d-inline-block">
                                    <small></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div
            class="widget-chart widget-chart2 text-left mb-3 card-btm-border card-shadow-primary border-primary card">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content">
                    <div class="widget-title opacity-5 text-uppercase">Total Transactions
                    </div>
                    <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                        <div class="widget-chart-flex align-items-center">
                            <div>
                                <span class="opacity-10 text-success pr-2">
                                    <i class="fa fa-angle-up"></i>
                                </span>
                                {{$total_transactions}}
                                <small class="opacity-5 pl-1"></small>
                            </div>
                            <div
                                class="widget-title ml-auto font-size-lg font-weight-normal text-muted">
                                <div
                                    class="circle-progress circle-progress-gradient-alt-sm d-inline-block">
                                    <small></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div
            class="widget-chart widget-chart2 text-left mb-3 card-btm-border card-shadow-primary border-primary card">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content">
                    <div class="widget-title opacity-5 text-uppercase">Daily Commission
                    </div>
                    <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                        <div class="widget-chart-flex align-items-center">
                            <div>
                                <span class="opacity-10 text-success pr-2">
                                    <i class="fa fa-angle-up"></i>
                                </span>
                                <small class="opacity-5 pl-1">GHC</small>
                                {{($daily_commission == 0)? 0 : $daily_commission}}
                            </div>
                            <div
                                class="widget-title ml-auto font-size-lg font-weight-normal text-muted">
                                <div
                                    class="circle-progress circle-progress-gradient-alt-sm d-inline-block">
                                    <small></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-12">
        <div
            class="widget-chart widget-chart2 text-left mb-3 card-btm-border card-shadow-primary border-primary card">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content">
                    <div class="widget-title opacity-5 text-uppercase">Total Commission
                    </div>
                    <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                        <div class="widget-chart-flex align-items-center">
                            <div>
                                <span class="opacity-10 text-success pr-2">
                                    <i class="fa fa-angle-up"></i>
                                </span>
                                <small class="opacity-5 pl-1">GHC</small>
                                {{($total_commission == 0)? 0 : $total_commission}}
                            </div>
                            <div
                                class="widget-title ml-auto font-size-lg font-weight-normal text-muted">
                                <div
                                    class="circle-progress circle-progress-gradient-alt-sm d-inline-block">
                                    <small></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End of sub grapgh data -->


<!-- <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-modal="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            
        </div>
    </div>
</div> -->




@endsection