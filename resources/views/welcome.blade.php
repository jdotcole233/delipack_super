
@extends('Header.index')


@section('content')

<div class="row">
    <div class="col-md-6 col-lg-3">
        <div
            class="widget-chart widget-chart2 text-left mb-3 card-btm-border card-shadow-primary border-primary card">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content">
                    <div class="widget-title opacity-5 text-uppercase">New
                        accounts
                    </div>
                    <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                        <div class="widget-chart-flex align-items-center">
                            <div>
                                <span class="opacity-10 text-success pr-2">
                                    <i class="fa fa-angle-up"></i>
                                </span>
                                234
                                <small class="opacity-5 pl-1">%</small>
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
    <div class="col-md-6 col-lg-3">
        <div
            class="widget-chart widget-chart2 text-left mb-3 card-btm-border card-shadow-danger border-danger card">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content">
                    <div class="widget-title opacity-5 text-uppercase">Total
                        Expenses
                    </div>
                    <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                        <div class="widget-chart-flex align-items-center">
                            <div>
                                <span class="opacity-10 text-danger pr-2">
                                    <i class="fa fa-angle-down"></i>
                                </span>
                                71
                                <small class="opacity-5 pl-1">%</small>
                            </div>
                            <div
                                class="widget-title ml-auto font-size-lg font-weight-normal text-muted">
                                <div
                                    class="circle-progress circle-progress-danger-sm d-inline-block">
                                    <small></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div
            class="widget-chart widget-chart2 text-left mb-3 card-btm-border card-shadow-warning border-warning card">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content">
                    <div class="widget-title opacity-5 text-uppercase">Company
                        Value
                    </div>
                    <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                        <div class="widget-chart-flex align-items-center">
                            <div>
                                <small class="opacity-5 pr-1">$</small>
                                1,45M
                            </div>
                            <div
                                class="widget-title ml-auto font-size-lg font-weight-normal text-muted">
                                <div
                                    class="circle-progress circle-progress-warning-sm d-inline-block">
                                    <small></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div
            class="widget-chart widget-chart2 text-left mb-3 card-btm-border card-shadow-success border-success card">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content">
                    <div class="widget-title opacity-5 text-uppercase">New
                        Employees
                    </div>
                    <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                        <div class="widget-chart-flex align-items-center">
                            <div>
                                <small class="text-success pr-1">+</small>
                                34
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
</div>
<div class="row">
    <div class="col-sm-12 col-md-7 col-lg-8">
        <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div
                    class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    Traffic Sources
                </div>
                <div class="btn-actions-pane-right text-capitalize">
                    <button class="btn btn-warning">Actions</button>
                </div>
            </div>
            <div class="pt-0 card-body">
                <div id="chart-combined"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-5 col-lg-4">
        <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div
                    class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    Income
                </div>
                <div
                    class="btn-actions-pane-right text-capitalize actions-icon-btn">
                    <div class="btn-group">
                        <button type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"
                            class="btn-icon btn-icon-only btn btn-link">
                            <i class="lnr-cog btn-icon-wrapper"></i>
                        </button>
                        <div tabindex="-1" role="menu" aria-hidden="true"
                            class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu dropdown-menu-right">
                            <h6 tabindex="-1" class="dropdown-header">
                                Header
                            </h6>
                            <button type="button" tabindex="0"
                                class="dropdown-item"><i
                                    class="dropdown-icon lnr-inbox">
                                </i><span>Menus</span>
                            </button>
                            <button type="button" tabindex="0"
                                class="dropdown-item"><i
                                    class="dropdown-icon lnr-file-empty">
                                </i><span>Settings</span>
                            </button>
                            <button type="button" tabindex="0"
                                class="dropdown-item"><i
                                    class="dropdown-icon lnr-book">
                                </i><span>Actions</span>
                            </button>
                            <div tabindex="-1" class="dropdown-divider"></div>
                            <div class="p-1 text-right">
                                <button
                                    class="mr-2 btn-shadow btn-sm btn btn-link">
                                    View
                                    Details
                                </button>
                                <button
                                    class="mr-2 btn-shadow btn-sm btn btn-primary">
                                    Action
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-0 card-body">
                <div id="chart-radial"></div>

                <div class="widget-content pt-0 w-100">
                    <div class="widget-content-outer">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left pr-2 fsize-1">
                                <div
                                    class="widget-numbers mt-0 fsize-3 text-warning">
                                    32%
                                </div>
                            </div>
                            <div class="widget-content-right w-100">
                                <div class="progress-bar-xs progress">
                                    <div class="progress-bar bg-warning"
                                        role="progressbar" aria-valuenow="32"
                                        aria-valuemin="0" aria-valuemax="100"
                                        style="width: 32%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content-left fsize-1">
                            <div class="text-muted opacity-6">Spendings Target
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-lg-3">
        <div
            class="card-shadow-primary mb-3 widget-chart widget-chart2 text-left card">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content">
                    <h6 class="widget-subheading">
                        Income</h6>
                    <div class="widget-chart-flex">
                        <div class="widget-numbers mb-0 w-100">
                            <div class="widget-chart-flex">
                                <div class="fsize-4">
                                    <small class="opacity-5">$</small>
                                    5,456
                                </div>
                                <div class="ml-auto">
                                    <div
                                        class="widget-title ml-auto font-size-lg font-weight-normal text-muted">
                                        <span
                                            class="text-success pl-2">+14%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div
            class="card-shadow-primary mb-3 widget-chart widget-chart2 text-left card">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content">
                    <h6 class="widget-subheading">
                        Expenses</h6>
                    <div class="widget-chart-flex">
                        <div class="widget-numbers mb-0 w-100">
                            <div class="widget-chart-flex">
                                <div class="fsize-4 text-danger">
                                    <small
                                        class="opacity-5 text-muted">$</small>
                                    4,764
                                </div>
                                <div class="ml-auto">
                                    <div
                                        class="widget-title ml-auto font-size-lg font-weight-normal text-muted">
                                        <span class="text-danger pl-2">
                                            <span class="pr-1">
                                                <i class="fa fa-angle-up"></i>
                                            </span>
                                            8%
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div
            class="card-shadow-primary mb-3 widget-chart widget-chart2 text-left card">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content">
                    <h6 class="widget-subheading">Spendings</h6>
                    <div class="widget-chart-flex">
                        <div class="widget-numbers mb-0 w-100">
                            <div class="widget-chart-flex">
                                <div class="fsize-4">
                                    <span class="text-success pr-2">
                                        <i class="fa fa-angle-down"></i>
                                    </span>
                                    <small class="opacity-5">$</small>
                                    1.5M
                                </div>
                                <div class="ml-auto">
                                    <div
                                        class="widget-title ml-auto font-size-lg font-weight-normal text-muted">
                                        <span class="text-success pl-2">
                                            <span class="pr-1">
                                                <i class="fa fa-angle-down"></i>
                                            </span>
                                            15%
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div
            class="card-shadow-primary mb-3 widget-chart widget-chart2 text-left card">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content">
                    <h6 class="widget-subheading">Totals</h6>
                    <div class="widget-chart-flex">
                        <div class="widget-numbers mb-0 w-100">
                            <div class="widget-chart-flex">
                                <div class="fsize-4">
                                    <small class="opacity-5">$</small>
                                    31,564
                                </div>
                                <div class="ml-auto">
                                    <div
                                        class="widget-title ml-auto font-size-lg font-weight-normal text-muted">
                                        <span
                                            class="text-warning pl-2">+76%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mbg-3 h-auto pl-0 pr-0 bg-transparent no-border card-header">
    <div class="card-header-title fsize-2 text-capitalize font-weight-normal">
        Target
        Section
    </div>
    <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
        <button class="btn btn-link btn-sm">View Details</button>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-lg-3">
        <div
            class="card-shadow-primary mb-3 widget-chart widget-chart2 text-left card">
            <div class="widget-content p-0 w-100">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left pr-2 fsize-1">
                            <div
                                class="widget-numbers mt-0 fsize-3 text-danger">
                                71%
                            </div>
                        </div>
                        <div class="widget-content-right w-100">
                            <div class="progress-bar-xs progress">
                                <div class="progress-bar bg-danger"
                                    role="progressbar" aria-valuenow="71"
                                    aria-valuemin="0" aria-valuemax="100"
                                    style="width: 71%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content-left fsize-1">
                        <div class="text-muted opacity-6">Income Target</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div
            class="card-shadow-primary mb-3 widget-chart widget-chart2 text-left card">
            <div class="widget-content p-0 w-100">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left pr-2 fsize-1">
                            <div
                                class="widget-numbers mt-0 fsize-3 text-success">
                                54%
                            </div>
                        </div>
                        <div class="widget-content-right w-100">
                            <div class="progress-bar-xs progress">
                                <div class="progress-bar bg-success"
                                    role="progressbar" aria-valuenow="54"
                                    aria-valuemin="0" aria-valuemax="100"
                                    style="width: 54%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content-left fsize-1">
                        <div class="text-muted opacity-6">Expenses Target</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div
            class="card-shadow-primary mb-3 widget-chart widget-chart2 text-left card">
            <div class="widget-content p-0 w-100">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left pr-2 fsize-1">
                            <div
                                class="widget-numbers mt-0 fsize-3 text-warning">
                                32%
                            </div>
                        </div>
                        <div class="widget-content-right w-100">
                            <div class="progress-bar-xs progress">
                                <div class="progress-bar bg-warning"
                                    role="progressbar" aria-valuenow="32"
                                    aria-valuemin="0" aria-valuemax="100"
                                    style="width: 32%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content-left fsize-1">
                        <div class="text-muted opacity-6">Spendings Target</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div
            class="card-shadow-primary mb-3 widget-chart widget-chart2 text-left card">
            <div class="widget-content p-0 w-100">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left pr-2 fsize-1">
                            <div class="widget-numbers mt-0 fsize-3 text-info">
                                89%
                            </div>
                        </div>
                        <div class="widget-content-right w-100">
                            <div class="progress-bar-xs progress">
                                <div class="progress-bar bg-info"
                                    role="progressbar" aria-valuenow="89"
                                    aria-valuemin="0" aria-valuemax="100"
                                    style="width: 89%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content-left fsize-1">
                        <div class="text-muted opacity-6">Totals Target</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12 col-lg-4">
        <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div
                    class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    Total Sales
                </div>
                <div
                    class="btn-actions-pane-right text-capitalize actions-icon-btn">
                    <div class="btn-group dropdown">
                        <button type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"
                            class="btn-icon btn-icon-only btn btn-link">
                            <i class="lnr-cog btn-icon-wrapper"></i>
                        </button>
                        <div tabindex="-1" role="menu" aria-hidden="true"
                            class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                            <h6 tabindex="-1" class="dropdown-header">Header
                            </h6>
                            <button type="button" tabindex="0"
                                class="dropdown-item"><i
                                    class="dropdown-icon lnr-inbox">
                                </i><span>Menus</span>
                            </button>
                            <button type="button" tabindex="0"
                                class="dropdown-item"><i
                                    class="dropdown-icon lnr-file-empty">
                                </i><span>Settings</span>
                            </button>
                            <button type="button" tabindex="0"
                                class="dropdown-item"><i
                                    class="dropdown-icon lnr-book">
                                </i><span>Actions</span>
                            </button>
                            <div tabindex="-1" class="dropdown-divider"></div>
                            <div class="p-1 text-right">
                                <button
                                    class="mr-2 btn-shadow btn-sm btn btn-link">
                                    View
                                    Details
                                </button>
                                <button
                                    class="mr-2 btn-shadow btn-sm btn btn-primary">
                                    Action
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div id="chart-col-1"></div>
            </div>
            <div class="p-0 d-block card-footer">
                <div class="grid-menu grid-menu-2col">
                    <div class="no-gutters row">
                        <div class="p-2 col-sm-6">
                            <button
                                class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark">
                                <i
                                    class="lnr-car text-primary opacity-7 btn-icon-wrapper mb-2">
                                </i>
                                Admin
                            </button>
                        </div>
                        <div class="p-2 col-sm-6">
                            <button
                                class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark">
                                <i
                                    class="lnr-bullhorn text-danger opacity-7 btn-icon-wrapper mb-2">
                                </i>
                                Blog
                            </button>
                        </div>
                        <div class="p-2 col-sm-6">
                            <button
                                class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark">
                                <i
                                    class="lnr-bug text-success opacity-7 btn-icon-wrapper mb-2">
                                </i>
                                Register
                            </button>
                        </div>
                        <div class="p-2 col-sm-6">
                            <button
                                class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark">
                                <i
                                    class="lnr-heart text-warning opacity-7 btn-icon-wrapper mb-2">
                                </i>
                                Directory
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-lg-4">
        <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div
                    class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    Daily Sales
                </div>
                <div class="btn-actions-pane-right text-capitalize">
                    <button
                        class="btn-wide btn-outline-2x btn btn-outline-focus btn-sm">
                        View All
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div id="chart-col-2"></div>
            </div>
            <div class="p-0 d-block card-footer">
                <div class="grid-menu grid-menu-2col">
                    <div class="no-gutters row">
                        <div class="p-2 col-sm-6">
                            <button
                                class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark">
                                <i
                                    class="lnr-apartment text-dark opacity-7 btn-icon-wrapper mb-2">
                                </i>
                                Overview
                            </button>
                        </div>
                        <div class="p-2 col-sm-6">
                            <button
                                class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark">
                                <i
                                    class="lnr-database text-dark opacity-7 btn-icon-wrapper mb-2">
                                </i>
                                Support
                            </button>
                        </div>
                        <div class="p-2 col-sm-6">
                            <button
                                class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark">
                                <i
                                    class="lnr-printer text-dark opacity-7 btn-icon-wrapper mb-2">
                                </i>
                                Activities
                            </button>
                        </div>
                        <div class="p-2 col-sm-6">
                            <button
                                class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark">
                                <i
                                    class="lnr-store text-dark opacity-7 btn-icon-wrapper mb-2">
                                </i>
                                Marketing
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-lg-4">
        <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div
                    class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    Total Expenses
                </div>
                <div class="btn-actions-pane-right text-capitalize">
                    <button
                        class="btn-wide btn-outline-2x btn btn-outline-primary btn-sm">
                        View All
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div id="chart-col-3"></div>
            </div>
            <div class="p-0 d-block card-footer">
                <div class="grid-menu grid-menu-2col">
                    <div class="no-gutters row">
                        <div class="p-2 col-sm-6">
                            <button
                                class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-success">
                                <i
                                    class="lnr-lighter text-success opacity-7 btn-icon-wrapper mb-2">
                                </i>
                                Accounts
                            </button>
                        </div>
                        <div class="p-2 col-sm-6">
                            <button
                                class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-warning">
                                <i
                                    class="lnr-construction text-warning opacity-7 btn-icon-wrapper mb-2">
                                </i>
                                Contacts
                            </button>
                        </div>
                        <div class="p-2 col-sm-6">
                            <button
                                class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-info">
                                <i
                                    class="lnr-bus text-info opacity-7 btn-icon-wrapper mb-2">
                                </i>
                                Products
                            </button>
                        </div>
                        <div class="p-2 col-sm-6">
                            <button
                                class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-alternate">
                                <i
                                    class="lnr-gift text-alternate opacity-7 btn-icon-wrapper mb-2">
                                </i>
                                Services
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main-card mb-3 card">
    <div class="card-header">
        <div
            class="card-header-title font-size-lg text-capitalize font-weight-normal">
            Company Agents Status
        </div>
        <div class="btn-actions-pane-right">
            <button type="button"
                class="btn-icon btn-wide btn-outline-2x btn btn-outline-focus btn-sm d-flex">
                Actions Menu
                <span class="pl-2 align-middle opacity-7">
                    <i class="fa fa-angle-right"></i>
                </span>
            </button>
        </div>
    </div>
    <div class="table-responsive">
        <table
            class="align-middle text-truncate mb-0 table table-borderless table-hover">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Avatar</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Company</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Due Date</th>
                    <th class="text-center">Target Achievement</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center text-muted" style="width: 80px;">#54
                    </td>
                    <td class="text-center" style="width: 80px;"><img width="40"
                            class="rounded-circle"
                            src="assets/images/avatars/4.jpg" alt=""></td>
                    <td class="text-center"><a href="javascript:void(0)">Juan C.
                            Cargill</a>
                    </td>
                    <td class="text-center"><a href="javascript:void(0)">Micro
                            Electronics</a></td>
                    <td class="text-center">
                        <div class="badge badge-pill badge-danger">Canceled
                        </div>
                    </td>
                    <td class="text-center">
                        <span class="pr-2 opacity-6">
                            <i class="fa fa-business-time"></i>
                        </span>
                        12 Dec
                    </td>
                    <td class="text-center" style="width: 200px;">
                        <div class="widget-content p-0">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left pr-2">
                                        <div
                                            class="widget-numbers fsize-1 text-danger">
                                            71%
                                        </div>
                                    </div>
                                    <div class="widget-content-right w-100">
                                        <div class="progress-bar-xs progress">
                                            <div class="progress-bar bg-danger"
                                                role="progressbar"
                                                aria-valuenow="71"
                                                aria-valuemin="0"
                                                aria-valuemax="100"
                                                style="width: 71%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="text-center">
                        <div role="group" class="btn-group-sm btn-group">
                            <button
                                class="btn-shadow btn btn-primary">Hire</button>
                            <button
                                class="btn-shadow btn btn-primary">Fire</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center text-muted" style="width: 80px;">#55
                    </td>
                    <td class="text-center" style="width: 80px;">
                        <img width="40" class="rounded-circle"
                            src="assets/images/avatars/3.jpg" alt="">
                    </td>
                    <td class="text-center"><a
                            href="javascript:void(0)">Johnathan
                            Phelan</a></td>
                    <td class="text-center"><a
                            href="javascript:void(0)">Hatchworks</a>
                    </td>
                    <td class="text-center">
                        <div class="badge badge-pill badge-info">On Hold</div>
                    </td>
                    <td class="text-center">
                        <span class="pr-2 opacity-6">
                            <i class="fa fa-business-time"></i>
                        </span>
                        15 Dec
                    </td>
                    <td class="text-center" style="width: 200px;">
                        <div class="widget-content p-0">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left pr-2">
                                        <div
                                            class="widget-numbers fsize-1 text-warning">
                                            54%
                                        </div>
                                    </div>
                                    <div class="widget-content-right w-100">
                                        <div class="progress-bar-xs progress">
                                            <div class="progress-bar bg-warning"
                                                role="progressbar"
                                                aria-valuenow="54"
                                                aria-valuemin="0"
                                                aria-valuemax="100"
                                                style="width: 54%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="text-center">
                        <div role="group" class="btn-group-sm btn-group">
                            <button
                                class="btn-shadow btn btn-primary">Hire</button>
                            <button
                                class="btn-shadow btn btn-primary">Fire</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center text-muted" style="width: 80px;">#56
                    </td>
                    <td class="text-center" style="width: 80px;">
                        <img width="40" class="rounded-circle"
                            src="assets/images/avatars/2.jpg" alt="">
                    </td>
                    <td class="text-center"><a href="javascript:void(0)">Darrell
                            Lowe</a>
                    </td>
                    <td class="text-center"><a href="javascript:void(0)">Riddle
                            Electronics</a></td>
                    <td class="text-center">
                        <div class="badge badge-pill badge-warning">In Progress
                        </div>
                    </td>
                    <td class="text-center">
                        <span class="pr-2 opacity-6">
                            <i class="fa fa-business-time"></i>
                        </span>
                        6 Dec
                    </td>
                    <td class="text-center" style="width: 200px;">
                        <div class="widget-content p-0">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left pr-2">
                                        <div
                                            class="widget-numbers fsize-1 text-success">
                                            97%
                                        </div>
                                    </div>
                                    <div class="widget-content-right w-100">
                                        <div class="progress-bar-xs progress">
                                            <div class="progress-bar bg-success"
                                                role="progressbar"
                                                aria-valuenow="97"
                                                aria-valuemin="0"
                                                aria-valuemax="100"
                                                style="width: 97%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="text-center">
                        <div role="group" class="btn-group-sm btn-group">
                            <button
                                class="btn-shadow btn btn-primary">Hire</button>
                            <button
                                class="btn-shadow btn btn-primary">Fire</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center text-muted" style="width: 80px;">#56
                    </td>
                    <td class="text-center" style="width: 80px;">
                        <img width="40" class="rounded-circle"
                            src="assets/images/avatars/1.jpg" alt="">
                    </td>
                    <td class="text-center"><a href="javascript:void(0)">George
                            T.
                            Cottrell</a></td>
                    <td class="text-center"><a
                            href="javascript:void(0)">Pixelcloud</a>
                    </td>
                    <td class="text-center">
                        <div class="badge badge-pill badge-success">Completed
                        </div>
                    </td>
                    <td class="text-center">
                        <span class="pr-2 opacity-6">
                            <i class="fa fa-business-time"></i>
                        </span>
                        19 Dec
                    </td>
                    <td class="text-center" style="width: 200px;">
                        <div class="widget-content p-0">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left pr-2">
                                        <div
                                            class="widget-numbers fsize-1 text-info">
                                            88%
                                        </div>
                                    </div>
                                    <div class="widget-content-right w-100">
                                        <div class="progress-bar-xs progress">
                                            <div class="progress-bar bg-info"
                                                role="progressbar"
                                                aria-valuenow="88"
                                                aria-valuemin="0"
                                                aria-valuemax="100"
                                                style="width: 88%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="text-center">
                        <div role="group" class="btn-group-sm btn-group">
                            <button
                                class="btn-shadow btn btn-primary">Hire</button>
                            <button
                                class="btn-shadow btn btn-primary">Fire</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="d-block p-4 text-center card-footer">
        <button
            class="btn-pill btn-shadow btn-wide fsize-1 btn btn-dark btn-lg">
            <span class="mr-2 opacity-7"><i class="fa fa-cog fa-spin"></i>
            </span>
            <span class="mr-1">View Complete Report</span>
        </button>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="app-wrapper-footer">
<div class="app-footer">
<div class="">
<div class="app-footer__inner">
<div class="app-footer-left">
<div class="footer-dots">
<div class="dropdown">
    <a aria-haspopup="true" aria-expanded="false" data-toggle="dropdown"
        class="dot-btn-wrapper">
        <i class="dot-btn-icon typcn typcn-warning-outline text-warning"></i>
        <div class="badge badge-dot badge-abs badge-dot-sm badge-danger">Danger
        </div>
    </a>
    <div tabindex="-1" role="menu" aria-hidden="true"
        class="dropdown-menu-xl rm-pointers dropdown-menu">
        <div class="dropdown-menu-header mb-0">
            <div class="dropdown-menu-header-inner bg-deep-blue">
                <div class="menu-header-image opacity-1"
                    style="background-image: url('assets/images/dropdown-header/city3.jpg');">
                </div>
                <div class="menu-header-content text-dark">
                    <h5 class="menu-header-title">Notifications</h5>
                    <h6 class="menu-header-subtitle">You have <b>21</b> unread
                        messages</h6>
                </div>
            </div>
        </div>
        <ul
            class="tabs-animated-shadow tabs-animated nav nav-justified tabs-shadow-bordered p-3">
            <li class="nav-item">
                <a role="tab" class="nav-link active" data-toggle="tab"
                    href="#tab-messages-header1">
                    <span>Messages</span>
                </a>
            </li>
            <li class="nav-item">
                <a role="tab" class="nav-link" data-toggle="tab"
                    href="#tab-events-header1">
                    <span>Events</span>
                </a>
            </li>
            <li class="nav-item">
                <a role="tab" class="nav-link" data-toggle="tab"
                    href="#tab-errors-header1">
                    <span>System</span>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab-messages-header1"
                role="tabpanel">
                <div class="scroll-area-sm">
                    <div class="scrollbar-container">
                        <div class="p-3">
                            <div class="notifications-box">
                                <div
                                    class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--one-column">
                                    <div
                                        class="vertical-timeline-item dot-danger vertical-timeline-element">
                                        <div><span
                                                class="vertical-timeline-element-icon bounce-in"></span>
                                            <div
                                                class="vertical-timeline-element-content bounce-in">
                                                <h4 class="timeline-title">All
                                                    Hands Meeting</h4><span
                                                    class="vertical-timeline-element-date"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="vertical-timeline-item dot-warning vertical-timeline-element">
                                        <div><span
                                                class="vertical-timeline-element-icon bounce-in"></span>
                                            <div
                                                class="vertical-timeline-element-content bounce-in">
                                                <p>Yet another one, at <span
                                                        class="text-success">15:00
                                                        PM</span></p><span
                                                    class="vertical-timeline-element-date"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="vertical-timeline-item dot-success vertical-timeline-element">
                                        <div><span
                                                class="vertical-timeline-element-icon bounce-in"></span>
                                            <div
                                                class="vertical-timeline-element-content bounce-in">
                                                <h4 class="timeline-title">Build
                                                    the production release
                                                    <span
                                                        class="badge badge-danger ml-2">NEW</span>
                                                </h4>
                                                <span
                                                    class="vertical-timeline-element-date"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="vertical-timeline-item dot-primary vertical-timeline-element">
                                        <div><span
                                                class="vertical-timeline-element-icon bounce-in"></span>
                                            <div
                                                class="vertical-timeline-element-content bounce-in">
                                                <h4 class="timeline-title">
                                                    Something not important
                                                    <div
                                                        class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                                        <div
                                                            class="avatar-icon-wrapper avatar-icon-sm">
                                                            <div
                                                                class="avatar-icon">
                                                                <img src="assets/images/avatars/1.jpg"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="avatar-icon-wrapper avatar-icon-sm">
                                                            <div
                                                                class="avatar-icon">
                                                                <img src="assets/images/avatars/2.jpg"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="avatar-icon-wrapper avatar-icon-sm">
                                                            <div
                                                                class="avatar-icon">
                                                                <img src="assets/images/avatars/3.jpg"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="avatar-icon-wrapper avatar-icon-sm">
                                                            <div
                                                                class="avatar-icon">
                                                                <img src="assets/images/avatars/4.jpg"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="avatar-icon-wrapper avatar-icon-sm">
                                                            <div
                                                                class="avatar-icon">
                                                                <img src="assets/images/avatars/5.jpg"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="avatar-icon-wrapper avatar-icon-sm">
                                                            <div
                                                                class="avatar-icon">
                                                                <img src="assets/images/avatars/9.jpg"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="avatar-icon-wrapper avatar-icon-sm">
                                                            <div
                                                                class="avatar-icon">
                                                                <img src="assets/images/avatars/7.jpg"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="avatar-icon-wrapper avatar-icon-sm">
                                                            <div
                                                                class="avatar-icon">
                                                                <img src="assets/images/avatars/8.jpg"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                                            <div
                                                                class="avatar-icon">
                                                                <i>+</i></div>
                                                        </div>
                                                    </div>
                                                </h4>
                                                <span
                                                    class="vertical-timeline-element-date"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="vertical-timeline-item dot-info vertical-timeline-element">
                                        <div><span
                                                class="vertical-timeline-element-icon bounce-in"></span>
                                            <div
                                                class="vertical-timeline-element-content bounce-in">
                                                <h4 class="timeline-title">This
                                                    dot has an info state</h4>
                                                <span
                                                    class="vertical-timeline-element-date"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="vertical-timeline-item dot-danger vertical-timeline-element">
                                        <div><span
                                                class="vertical-timeline-element-icon bounce-in"></span>
                                            <div
                                                class="vertical-timeline-element-content bounce-in">
                                                <h4 class="timeline-title">All
                                                    Hands Meeting</h4><span
                                                    class="vertical-timeline-element-date"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="vertical-timeline-item dot-warning vertical-timeline-element">
                                        <div><span
                                                class="vertical-timeline-element-icon bounce-in"></span>
                                            <div
                                                class="vertical-timeline-element-content bounce-in">
                                                <p>Yet another one, at <span
                                                        class="text-success">15:00
                                                        PM</span></p><span
                                                    class="vertical-timeline-element-date"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="vertical-timeline-item dot-success vertical-timeline-element">
                                        <div><span
                                                class="vertical-timeline-element-icon bounce-in"></span>
                                            <div
                                                class="vertical-timeline-element-content bounce-in">
                                                <h4 class="timeline-title">Build
                                                    the production release
                                                    <span
                                                        class="badge badge-danger ml-2">NEW</span>
                                                </h4>
                                                <span
                                                    class="vertical-timeline-element-date"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="vertical-timeline-item dot-dark vertical-timeline-element">
                                        <div><span
                                                class="vertical-timeline-element-icon bounce-in"></span>
                                            <div
                                                class="vertical-timeline-element-content bounce-in">
                                                <h4 class="timeline-title">This
                                                    dot has a dark state</h4>
                                                <span
                                                    class="vertical-timeline-element-date"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tab-events-header1" role="tabpanel">
                <div class="scroll-area-sm">
                    <div class="scrollbar-container">
                        <div class="p-3">
                            <div
                                class="vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                <div
                                    class="vertical-timeline-item vertical-timeline-element">
                                    <div><span
                                            class="vertical-timeline-element-icon bounce-in"><i
                                                class="badge badge-dot badge-dot-xl badge-success">
                                            </i></span>
                                        <div
                                            class="vertical-timeline-element-content bounce-in">
                                            <h4 class="timeline-title">All Hands
                                                Meeting</h4>
                                            <p>Lorem ipsum dolor sic amet, today
                                                at <a
                                                    href="javascript:void(0);">12:00
                                                    PM</a></p><span
                                                class="vertical-timeline-element-date"></span>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="vertical-timeline-item vertical-timeline-element">
                                    <div><span
                                            class="vertical-timeline-element-icon bounce-in"><i
                                                class="badge badge-dot badge-dot-xl badge-warning">
                                            </i></span>
                                        <div
                                            class="vertical-timeline-element-content bounce-in">
                                            <p>Another meeting today, at <b
                                                    class="text-danger">12:00
                                                    PM</b></p>
                                            <p>Yet another one, at <span
                                                    class="text-success">15:00
                                                    PM</span></p><span
                                                class="vertical-timeline-element-date"></span>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="vertical-timeline-item vertical-timeline-element">
                                    <div><span
                                            class="vertical-timeline-element-icon bounce-in"><i
                                                class="badge badge-dot badge-dot-xl badge-danger">
                                            </i></span>
                                        <div
                                            class="vertical-timeline-element-content bounce-in">
                                            <h4 class="timeline-title">Build the
                                                production release</h4>
                                            <p>Lorem ipsum dolor sit
                                                amit,consectetur eiusmdd tempor
                                                incididunt ut labore et dolore
                                                magna elit enim at minim veniam
                                                quis nostrud</p><span
                                                class="vertical-timeline-element-date"></span>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="vertical-timeline-item vertical-timeline-element">
                                    <div><span
                                            class="vertical-timeline-element-icon bounce-in"><i
                                                class="badge badge-dot badge-dot-xl badge-primary">
                                            </i></span>
                                        <div
                                            class="vertical-timeline-element-content bounce-in">
                                            <h4
                                                class="timeline-title text-success">
                                                Something not important</h4>
                                            <p>Lorem ipsum dolor sit
                                                amit,consectetur elit enim at
                                                minim veniam quis nostrud</p>
                                            <span
                                                class="vertical-timeline-element-date"></span>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="vertical-timeline-item vertical-timeline-element">
                                    <div><span
                                            class="vertical-timeline-element-icon bounce-in"><i
                                                class="badge badge-dot badge-dot-xl badge-success">
                                            </i></span>
                                        <div
                                            class="vertical-timeline-element-content bounce-in">
                                            <h4 class="timeline-title">All Hands
                                                Meeting</h4>
                                            <p>Lorem ipsum dolor sic amet, today
                                                at <a
                                                    href="javascript:void(0);">12:00
                                                    PM</a></p><span
                                                class="vertical-timeline-element-date"></span>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="vertical-timeline-item vertical-timeline-element">
                                    <div><span
                                            class="vertical-timeline-element-icon bounce-in"><i
                                                class="badge badge-dot badge-dot-xl badge-warning">
                                            </i></span>
                                        <div
                                            class="vertical-timeline-element-content bounce-in">
                                            <p>Another meeting today, at <b
                                                    class="text-danger">12:00
                                                    PM</b></p>
                                            <p>Yet another one, at <span
                                                    class="text-success">15:00
                                                    PM</span></p><span
                                                class="vertical-timeline-element-date"></span>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="vertical-timeline-item vertical-timeline-element">
                                    <div><span
                                            class="vertical-timeline-element-icon bounce-in"><i
                                                class="badge badge-dot badge-dot-xl badge-danger">
                                            </i></span>
                                        <div
                                            class="vertical-timeline-element-content bounce-in">
                                            <h4 class="timeline-title">Build the
                                                production release</h4>
                                            <p>Lorem ipsum dolor sit
                                                amit,consectetur eiusmdd tempor
                                                incididunt ut labore et dolore
                                                magna elit enim at minim veniam
                                                quis nostrud</p><span
                                                class="vertical-timeline-element-date"></span>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="vertical-timeline-item vertical-timeline-element">
                                    <div><span
                                            class="vertical-timeline-element-icon bounce-in"><i
                                                class="badge badge-dot badge-dot-xl badge-primary">
                                            </i></span>
                                        <div
                                            class="vertical-timeline-element-content bounce-in">
                                            <h4
                                                class="timeline-title text-success">
                                                Something not important</h4>
                                            <p>Lorem ipsum dolor sit
                                                amit,consectetur elit enim at
                                                minim veniam quis nostrud</p>
                                            <span
                                                class="vertical-timeline-element-date"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tab-errors-header1" role="tabpanel">
                <div class="scroll-area-sm">
                    <div class="scrollbar-container">
                        <div class="no-results pt-3 pb-0">
                            <div
                                class="swal2-icon swal2-success swal2-animate-success-icon">
                                <div class="swal2-success-circular-line-left"
                                    style="background-color: rgb(255, 255, 255);">
                                </div>
                                <span class="swal2-success-line-tip"></span>
                                <span class="swal2-success-line-long"></span>
                                <div class="swal2-success-ring"></div>
                                <div class="swal2-success-fix"
                                    style="background-color: rgb(255, 255, 255);">
                                </div>
                                <div class="swal2-success-circular-line-right"
                                    style="background-color: rgb(255, 255, 255);">
                                </div>
                            </div>
                            <div class="results-subtitle">All caught up!</div>
                            <div class="results-title">There are no system
                                errors!</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="nav flex-column">
            <li class="nav-item-divider nav-item"></li>
            <li class="nav-item-btn text-center nav-item">
                <button
                    class="btn-shadow btn-wide btn-pill btn btn-focus btn-sm">View
                    Latest Changes</button>
            </li>
        </ul>
    </div>
</div>
<div class="dots-separator"></div>
<div class="dropdown">
    <a class="dot-btn-wrapper dd-chart-btn-2" aria-haspopup="true"
        data-toggle="dropdown" aria-expanded="false">
        <i class="dot-btn-icon typcn typcn-chart-bar-outline text-danger"></i>
        <div class="badge badge-dot badge-abs badge-dot-sm badge-warning">
            Warning</div>
    </a>
    <div tabindex="-1" role="menu" aria-hidden="true"
        class="dropdown-menu-xl rm-pointers dropdown-menu">
        <div class="dropdown-menu-header">
            <div class="dropdown-menu-header-inner bg-premium-dark">
                <div class="menu-header-image"
                    style="background-image: url('assets/images/dropdown-header/abstract4.jpg');">
                </div>
                <div class="menu-header-content text-white">
                    <h5 class="menu-header-title">Users Online
                    </h5>
                    <h6 class="menu-header-subtitle">Recent Account Activity
                        Overview
                    </h6>
                </div>
            </div>
        </div>
        <div class="widget-chart">
            <div class="widget-chart-content">
                <div class="icon-wrapper rounded-circle">
                    <div class="icon-wrapper-bg opacity-9 bg-focus">
                    </div>
                    <i class="lnr-users text-white">
                    </i>
                </div>
                <div class="widget-numbers">
                    <span>344k</span>
                </div>
                <div class="widget-subheading pt-2">
                    Profile views since last login
                </div>
                <div class="widget-description text-danger">
                    <span class="pr-1">
                        <span>176%</span>
                    </span>
                    <i class="fa fa-arrow-left"></i>
                </div>
            </div>
            <div class="widget-chart-wrapper">
                <div id="dashboard-sparkline-carousel-4-pop"></div>
            </div>
        </div>
        <ul class="nav flex-column">
            <li class="nav-item-divider mt-0 nav-item">
            </li>
            <li class="nav-item-btn text-center nav-item">
                <button
                    class="btn-shine btn-wide btn-pill btn btn-warning btn-sm">
                    <i class="fa fa-cog fa-spin mr-2">
                    </i>
                    View Details
                </button>
            </li>
        </ul>
    </div>
</div>

</div>
</div>
<div class="app-footer-right">
<ul class="header-megamenu nav">
<li class="nav-item">
    <a data-placement="top" rel="popover-focus" data-offset="300"
        data-toggle="popover-custom" class="nav-link">
        Footer Menu
        <div class="badge badge-success ml-0 ml-1">
            <small>Old</small>
        </div>
        <i class="fa fa-angle-up ml-2 opacity-8"></i>
    </a>
    <div class="rm-max-width rm-pointers">
        <div class="d-none popover-custom-content">
            <div class="dropdown-mega-menu dropdown-mega-menu-sm">
                <div class="grid-menu grid-menu-2col">
                    <div class="no-gutters row">
                        <div class="col-sm-6 col-xl-6">
                            <ul class="nav flex-column">
                                <li class="nav-item-header nav-item">Overview
                                </li>
                                <li class="nav-item"><a
                                        href="javascript:void(0);"
                                        class="nav-link"><i
                                            class="nav-link-icon lnr-inbox">
                                        </i><span>Contacts</span></a></li>
                                <li class="nav-item"><a
                                        href="javascript:void(0);"
                                        class="nav-link"><i
                                            class="nav-link-icon lnr-book">
                                        </i><span>Incidents</span>
                                        <div
                                            class="ml-auto badge badge-pill badge-danger">
                                            5</div>
                                    </a></li>
                                <li class="nav-item"><a
                                        href="javascript:void(0);"
                                        class="nav-link"><i
                                            class="nav-link-icon lnr-picture">
                                        </i><span>Companies</span></a></li>
                                <li class="nav-item"><a disabled=""
                                        href="javascript:void(0);"
                                        class="nav-link disabled"><i
                                            class="nav-link-icon lnr-file-empty">
                                        </i><span>Dashboards</span></a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-xl-6">
                            <ul class="nav flex-column">
                                <li class="nav-item-header nav-item">Sales &amp;
                                    Marketing</li>
                                <li class="nav-item"><a
                                        href="javascript:void(0);"
                                        class="nav-link">Queues</a></li>
                                <li class="nav-item"><a
                                        href="javascript:void(0);"
                                        class="nav-link">Resource Groups</a>
                                </li>
                                <li class="nav-item"><a
                                        href="javascript:void(0);"
                                        class="nav-link">Goal Metrics
                                        <div
                                            class="ml-auto badge badge-warning">
                                            3</div>
                                    </a></li>
                                <li class="nav-item"><a
                                        href="javascript:void(0);"
                                        class="nav-link">Campaigns</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
<div class="app-drawer-wrapper">
<div class="drawer-nav-btn">
<button type="button" class="hamburger hamburger--elastic is-active">
<span class="hamburger-box"><span class="hamburger-inner"></span></span></button>
</div>
<div class="drawer-content-wrapper">
<div class="scrollbar-container">
<h3 class="drawer-heading">Servers Status</h3>
<div class="drawer-section">
<div class="row">
<div class="col">
<div class="progress-box">
<h4>Server Load 1</h4>
<div class="circle-progress circle-progress-gradient-xl mx-auto">
<small></small>
</div>
</div>
</div>
<div class="col">
<div class="progress-box">
<h4>Server Load 2</h4>
<div class="circle-progress circle-progress-success-xl mx-auto">
<small></small>
</div>
</div>
</div>
<div class="col">
<div class="progress-box">
<h4>Server Load 3</h4>
<div class="circle-progress circle-progress-danger-xl mx-auto">
<small></small>
</div>
</div>
</div>
</div>
<div class="divider"></div>
<div class="mt-3">
<h5 class="text-center card-title">Live Statistics</h5>
<div id="sparkline-carousel-3"></div>
<div class="row">
<div class="col">
<div class="widget-chart p-0">
<div class="widget-chart-content">
<div class="widget-numbers text-warning fsize-3">43</div>
<div class="widget-subheading pt-1">Packages</div>
</div>
</div>
</div>
<div class="col">
<div class="widget-chart p-0">
<div class="widget-chart-content">
<div class="widget-numbers text-danger fsize-3">65</div>
<div class="widget-subheading pt-1">Dropped</div>
</div>
</div>
</div>
<div class="col">
<div class="widget-chart p-0">
<div class="widget-chart-content">
<div class="widget-numbers text-success fsize-3">18</div>
<div class="widget-subheading pt-1">Invalid</div>
</div>
</div>
</div>
</div>
<div class="divider"></div>
<div class="text-center mt-2 d-block">
<button class="mr-2 border-0 btn-transition btn btn-outline-danger">Escalate Issue</button>
<button class="border-0 btn-transition btn btn-outline-success">Support Center</button>
</div>
</div>
</div>
<h3 class="drawer-heading">File Transfers</h3>
<div class="drawer-section p-0">
<div class="files-box">
<ul class="list-group list-group-flush">
<li class="pt-2 pb-2 pr-2 list-group-item">
<div class="widget-content p-0">
<div class="widget-content-wrapper">
<div
    class="widget-content-left opacity-6 fsize-2 mr-3 text-primary center-elem">
    <i class="fa fa-file-alt"></i>
</div>
<div class="widget-content-left">
    <div class="widget-heading font-weight-normal">TPSReport.docx</div>
</div>
<div class="widget-content-right widget-content-actions">
    <button class="btn-icon btn-icon-only btn btn-link btn-sm">
        <i class="fa fa-cloud-download-alt"></i>
    </button>
</div>
</div>
</div>
</li>
<li class="pt-2 pb-2 pr-2 list-group-item">
<div class="widget-content p-0">
<div class="widget-content-wrapper">
<div
    class="widget-content-left opacity-6 fsize-2 mr-3 text-warning center-elem">
    <i class="fa fa-file-archive"></i>
</div>
<div class="widget-content-left">
    <div class="widget-heading font-weight-normal">Latest_photos.zip</div>
</div>
<div class="widget-content-right widget-content-actions">
    <button class="btn-icon btn-icon-only btn btn-link btn-sm">
        <i class="fa fa-cloud-download-alt"></i>
    </button>
</div>
</div>
</div>
</li>
<li class="pt-2 pb-2 pr-2 list-group-item">
<div class="widget-content p-0">
<div class="widget-content-wrapper">
<div class="widget-content-left opacity-6 fsize-2 mr-3 text-danger center-elem">
    <i class="fa fa-file-pdf"></i>
</div>
<div class="widget-content-left">
    <div class="widget-heading font-weight-normal">Annual Revenue.pdf</div>
</div>
<div class="widget-content-right widget-content-actions">
    <button class="btn-icon btn-icon-only btn btn-link btn-sm">
        <i class="fa fa-cloud-download-alt"></i>
    </button>
</div>
</div>
</div>
</li>
<li class="pt-2 pb-2 pr-2 list-group-item">
<div class="widget-content p-0">
<div class="widget-content-wrapper">
<div
    class="widget-content-left opacity-6 fsize-2 mr-3 text-success center-elem">
    <i class="fa fa-file-excel"></i>
</div>
<div class="widget-content-left">
    <div class="widget-heading font-weight-normal">Analytics_GrowthReport.xls
    </div>
</div>
<div class="widget-content-right widget-content-actions">
    <button class="btn-icon btn-icon-only btn btn-link btn-sm">
        <i class="fa fa-cloud-download-alt"></i>
    </button>
</div>
</div>
</div>
</li>
</ul>
</div>
</div>
<h3 class="drawer-heading">Tasks in Progress</h3>
<div class="drawer-section p-0">
<div class="todo-box">
<ul class="todo-list-wrapper list-group list-group-flush">
<li class="list-group-item">
<div class="todo-indicator bg-warning"></div>
<div class="widget-content p-0">
<div class="widget-content-wrapper">
<div class="widget-content-left mr-2">
    <div class="custom-checkbox custom-control">
        <input type="checkbox" id="exampleCustomCheckbox1266"
            class="custom-control-input">
        <label class="custom-control-label"
            for="exampleCustomCheckbox1266">&nbsp;</label></div>
</div>
<div class="widget-content-left">
    <div class="widget-heading">Wash the car
        <div class="badge badge-danger ml-2">Rejected</div>
    </div>
    <div class="widget-subheading"><i>Written by Bob</i></div>
</div>
<div class="widget-content-right widget-content-actions">
    <button class="border-0 btn-transition btn btn-outline-success">
        <i class="fa fa-check"></i>
    </button>
    <button class="border-0 btn-transition btn btn-outline-danger">
        <i class="fa fa-trash-alt"></i>
    </button>
</div>
</div>
</div>
</li>
<li class="list-group-item">
<div class="todo-indicator bg-focus"></div>
<div class="widget-content p-0">
<div class="widget-content-wrapper">
<div class="widget-content-left mr-2">
    <div class="custom-checkbox custom-control">
        <input type="checkbox" id="exampleCustomCheckbox1666"
            class="custom-control-input">
        <label class="custom-control-label"
            for="exampleCustomCheckbox1666">&nbsp;</label></div>
</div>
<div class="widget-content-left">
    <div class="widget-heading">Task with hover dropdown menu</div>
    <div class="widget-subheading">
        <div>By Johnny
            <div class="badge badge-pill badge-info ml-2">NEW</div>
        </div>
    </div>
</div>
<div class="widget-content-right widget-content-actions">
    <div class="d-inline-block dropdown">
        <button type="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false" class="border-0 btn-transition btn btn-link">
            <i class="fa fa-ellipsis-h">
            </i>
        </button>
        <div tabindex="-1" role="menu" aria-hidden="true"
            class="dropdown-menu dropdown-menu-right">
            <h6 tabindex="-1" class="dropdown-header">Header</h6>
            <button type="button" disabled="" tabindex="-1"
                class="disabled dropdown-item">Action</button>
            <button type="button" tabindex="0" class="dropdown-item">Another
                Action</button>
            <div tabindex="-1" class="dropdown-divider"></div>
            <button type="button" tabindex="0" class="dropdown-item">Another
                Action</button>
        </div>
    </div>
</div>
</div>
</div>
</li>
<li class="list-group-item">
<div class="todo-indicator bg-primary"></div>
<div class="widget-content p-0">
<div class="widget-content-wrapper">
<div class="widget-content-left mr-2">
    <div class="custom-checkbox custom-control">
        <input type="checkbox" id="exampleCustomCheckbox4777"
            class="custom-control-input">
        <label class="custom-control-label"
            for="exampleCustomCheckbox4777">&nbsp;</label></div>
</div>
<div class="widget-content-left flex2">
    <div class="widget-heading">Badge on the right task</div>
    <div class="widget-subheading">This task has show on hover actions!</div>
</div>
<div class="widget-content-right widget-content-actions">
    <button class="border-0 btn-transition btn btn-outline-success">
        <i class="fa fa-check">
        </i>
    </button>
</div>
<div class="widget-content-right ml-3">
    <div class="badge badge-pill badge-success">Latest Task</div>
</div>
</div>
</div>
</li>
<li class="list-group-item">
<div class="todo-indicator bg-info"></div>
<div class="widget-content p-0">
<div class="widget-content-wrapper">
<div class="widget-content-left mr-2">
    <div class="custom-checkbox custom-control">
        <input type="checkbox" id="exampleCustomCheckbox2444"
            class="custom-control-input">
        <label class="custom-control-label"
            for="exampleCustomCheckbox2444">&nbsp;</label></div>
</div>
<div class="widget-content-left mr-3">
    <div class="widget-content-left"><img width="42" class="rounded"
            src="assets/images/avatars/1.jpg" alt="" /></div>
</div>
<div class="widget-content-left">
    <div class="widget-heading">Go grocery shopping</div>
    <div class="widget-subheading">A short description ...</div>
</div>
<div class="widget-content-right widget-content-actions">
    <button class="border-0 btn-transition btn btn-sm btn-outline-success">
        <i class="fa fa-check"></i>
    </button>
    <button class="border-0 btn-transition btn btn-sm btn-outline-danger">
        <i class="fa fa-trash-alt"></i>
    </button>
</div>
</div>
</div>
</li>
<li class="list-group-item">
<div class="todo-indicator bg-success"></div>
<div class="widget-content p-0">
<div class="widget-content-wrapper">
<div class="widget-content-left mr-2">
    <div class="custom-checkbox custom-control">
        <input type="checkbox" id="exampleCustomCheckbox3222"
            class="custom-control-input">
        <label class="custom-control-label"
            for="exampleCustomCheckbox3222">&nbsp;</label></div>
</div>
<div class="widget-content-left flex2">
    <div class="widget-heading">Development Task</div>
    <div class="widget-subheading">Finish React ToDo List App</div>
</div>
<div class="widget-content-right">
    <div class="badge badge-warning mr-2">69</div>
</div>
<div class="widget-content-right">
    <button class="border-0 btn-transition btn btn-outline-success">
        <i class="fa fa-check">
        </i>
    </button>
    <button class="border-0 btn-transition btn btn-outline-danger">
        <i class="fa fa-trash-alt">
        </i>
    </button>
</div>
</div>
</div>
</li>
</ul>
</div>
</div>
<h3 class="drawer-heading">Urgent Notifications</h3>
<div class="drawer-section">
<div class="notifications-box">
<div
class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--one-column">
<div class="vertical-timeline-item dot-danger vertical-timeline-element">
<div><span class="vertical-timeline-element-icon bounce-in"></span>
<div class="vertical-timeline-element-content bounce-in">
<h4 class="timeline-title">All Hands Meeting</h4><span
    class="vertical-timeline-element-date"></span>
</div>
</div>
</div>
<div class="vertical-timeline-item dot-warning vertical-timeline-element">
<div><span class="vertical-timeline-element-icon bounce-in"></span>
<div class="vertical-timeline-element-content bounce-in">
<p>Yet another one, at <span class="text-success">15:00 PM</span></p><span
    class="vertical-timeline-element-date"></span>
</div>
</div>
</div>
<div class="vertical-timeline-item dot-success vertical-timeline-element">
<div><span class="vertical-timeline-element-icon bounce-in"></span>
<div class="vertical-timeline-element-content bounce-in">
<h4 class="timeline-title">Build the production release
    <div class="badge badge-danger ml-2">NEW</div>
</h4>
<span class="vertical-timeline-element-date"></span>
</div>
</div>
</div>
<div class="vertical-timeline-item dot-primary vertical-timeline-element">
<div><span class="vertical-timeline-element-icon bounce-in"></span>
<div class="vertical-timeline-element-content bounce-in">
<h4 class="timeline-title">Something not important
    <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
        <div class="avatar-icon-wrapper avatar-icon-sm">
            <div class="avatar-icon"><img src="assets/images/avatars/1.jpg"
                    alt=""></div>
        </div>
        <div class="avatar-icon-wrapper avatar-icon-sm">
            <div class="avatar-icon"><img src="assets/images/avatars/2.jpg"
                    alt=""></div>
        </div>
        <div class="avatar-icon-wrapper avatar-icon-sm">
            <div class="avatar-icon"><img src="assets/images/avatars/3.jpg"
                    alt=""></div>
        </div>
        <div class="avatar-icon-wrapper avatar-icon-sm">
            <div class="avatar-icon"><img src="assets/images/avatars/4.jpg"
                    alt=""></div>
        </div>
        <div class="avatar-icon-wrapper avatar-icon-sm">
            <div class="avatar-icon"><img src="assets/images/avatars/5.jpg"
                    alt=""></div>
        </div>
        <div class="avatar-icon-wrapper avatar-icon-sm">
            <div class="avatar-icon"><img src="assets/images/avatars/6.jpg"
                    alt=""></div>
        </div>
        <div class="avatar-icon-wrapper avatar-icon-sm">
            <div class="avatar-icon"><img src="assets/images/avatars/7.jpg"
                    alt=""></div>
        </div>
        <div class="avatar-icon-wrapper avatar-icon-sm">
            <div class="avatar-icon"><img src="assets/images/avatars/8.jpg"
                    alt=""></div>
        </div>
        <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
            <div class="avatar-icon"><i>+</i></div>
        </div>
    </div>
</h4>
<span class="vertical-timeline-element-date"></span>
</div>
</div>
</div>
<div class="vertical-timeline-item dot-info vertical-timeline-element">
<div><span class="vertical-timeline-element-icon bounce-in"></span>
<div class="vertical-timeline-element-content bounce-in">
<h4 class="timeline-title">This dot has an info state</h4><span
    class="vertical-timeline-element-date"></span>
</div>
</div>
</div>
<div class="vertical-timeline-item dot-dark vertical-timeline-element">
<div><span class="vertical-timeline-element-icon is-hidden"></span>
<div class="vertical-timeline-element-content is-hidden">
<h4 class="timeline-title">This dot has a dark state</h4><span
    class="vertical-timeline-element-date"></span>
</div>
</div>
</div>
</div>
</div>
</div>

@endsection
