@extends('Header.index')


@section('content')


<!-- 
                        <div class="app-inner-layout__wrapper">
                            <div class="app-inner-layout__content card"> -->
                                <div class="app-inner-layout__top-pane">
                                    <div class="pane-left">
                                        <div class="mobile-app-menu-btn">
                                            <button type="button" class="hamburger hamburger--elastic">
                                                <span class="hamburger-box">
                                                    <span class="hamburger-inner"></span>
                                                </span>
                                            </button>
                                        </div>
                                        <h4 class="mb-0">Inbox</h4>
                                        <div class="btn-group dropdown">
                                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-link">
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="pane-right">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fa fa-search fa-w-16 "></i>
                                                </div>
                                            </div>
                                            <input placeholder="Search..." type="text" class="form-control"></div>
                                    </div>
                                </div>
                                <div class="bg-white">
                                    <div class="table-responsive">
                                        <table class="text-nowrap table-lg mb-0 table table-hover">
                                            <tbody>
                                            <tr>
                                                <td class="text-center" style="width: 78px;">
                                                    <div class="custom-checkbox custom-control">
                                                        <input type="checkbox" id="eCheckbox1" class="custom-control-input">
                                                        <label class="custom-control-label" for="eCheckbox1">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td class="text-left pl-1">
                                                    <i class="fa fa-star"></i>
                                                </td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                                            </div>
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">Alina Mcloughlin</div>
                                                                <div class="widget-subheading">Last seen online 15
                                                                    minutes ago
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-left">Nullam dictum felis eu pede mollis pretium.</td>
                                                <td>
                                                    <i class="fa fa-tags fa-w-20 opacity-4"></i>
                                                </td>
                                                <td class="text-right">
                                                    <i class="fa fa-calendar-alt opacity-4 mr-2"></i>
                                                    7 Dec
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="width: 78px;">
                                                    <div class="custom-checkbox custom-control"><input type="checkbox" id="eCheckbox12" class="custom-control-input"><label class="custom-control-label" for="eCheckbox12">&nbsp;</label></div>
                                                </td>
                                                <td class="text-left pl-1">
                                                    <i class="fa fa-star"></i>
                                                </td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <img width="42" class="rounded-circle" src="assets/images/avatars/2.jpg" alt="">
                                                            </div>
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">John Smith</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-left">But I must explain to you how all this mistaken
                                                    idea of denouncing pleasure ...
                                                </td>
                                                <td>
                                                    <i class="fa fa-tags fa-w-20 opacity-4"></i>
                                                </td>
                                                <td class="text-right">
                                                    <i class="fa fa-calendar-alt opacity-4 mr-2"></i>
                                                    7 Dec
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="width: 78px;">
                                                    <div class="custom-checkbox custom-control"><input type="checkbox" id="eCheckbox13" class="custom-control-input"><label class="custom-control-label" for="eCheckbox13">&nbsp;</label></div>
                                                </td>
                                                <td class="text-left pl-1">
                                                    <i class="fa fa-star"></i>
                                                </td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <img width="42" class="rounded-circle" src="assets/images/avatars/3.jpg" alt="">
                                                            </div>
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">Eliot Huber</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-left">But I must explain to you how all this mistaken
                                                    idea of denouncing pleasure ...
                                                </td>
                                                <td>
                                                    <i class="fa fa-tags fa-w-20 opacity-4"></i>
                                                </td>
                                                <td class="text-right">
                                                    <i class="fa fa-calendar-alt opacity-4 mr-2"></i>
                                                    7 Dec
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="width: 78px;">
                                                    <div class="custom-checkbox custom-control"><input type="checkbox" id="eCheckbox14" class="custom-control-input"><label class="custom-control-label" for="eCheckbox14">&nbsp;</label></div>
                                                </td>
                                                <td class="text-left pl-1">
                                                    <i class="fa fa-star"></i>
                                                </td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <img width="42" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                                            </div>
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">Ella-Rose Henry</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-left">Create stunning UIs for your pages with these
                                                    layout components...
                                                </td>
                                                <td>
                                                    <i class="fa fa-tags fa-w-20 opacity-4"></i>
                                                </td>
                                                <td class="text-right">
                                                    <i class="fa fa-calendar-alt opacity-4 mr-2"></i>
                                                    7 Dec
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="width: 78px;">
                                                    <div class="custom-checkbox custom-control"><input type="checkbox" id="eCheckbox15" class="custom-control-input"><label class="custom-control-label" for="eCheckbox15">&nbsp;</label></div>
                                                </td>
                                                <td class="text-left pl-1">
                                                    <i class="fa fa-star"></i>
                                                </td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <img width="42" class="rounded-circle" src="assets/images/avatars/5.jpg" alt="">
                                                            </div>
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">Vinnie Wagstaff</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-left">Etiam sit amet orci eget eros faucibus...</td>
                                                <td>
                                                    <i class="fa fa-tags fa-w-20 opacity-4"></i>
                                                </td>
                                                <td class="text-right">
                                                    <i class="fa fa-calendar-alt opacity-4 mr-2"></i>
                                                    7 Dec
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="width: 78px;">
                                                    <div class="custom-checkbox custom-control"><input type="checkbox" id="eCheckbox16" class="custom-control-input"><label class="custom-control-label" for="eCheckbox16">&nbsp;</label></div>
                                                </td>
                                                <td class="text-left pl-1">
                                                    <i class="fa fa-star"></i>
                                                </td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <img width="42" class="rounded-circle" src="assets/images/avatars/6.jpg" alt="">
                                                            </div>
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">Alina Mcloughlin</div>
                                                                <div class="widget-subheading">Last seen online 15
                                                                    minutes ago
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-left">Nullam dictum felis eu pede mollis pretium.</td>
                                                <td>
                                                    <i class="fa fa-tags fa-w-20 opacity-4"></i>
                                                </td>
                                                <td class="text-right">
                                                    <i class="fa fa-calendar-alt opacity-4 mr-2"></i>
                                                    5 mins ago
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="width: 78px;">
                                                    <div class="custom-checkbox custom-control"><input type="checkbox" id="eCheckbox17" class="custom-control-input"><label class="custom-control-label" for="eCheckbox17">&nbsp;</label></div>
                                                </td>
                                                <td class="text-left pl-1">
                                                    <i class="fa fa-star"></i>
                                                </td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <img width="42" class="rounded-circle" src="assets/images/avatars/7.jpg" alt="">
                                                            </div>
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">Eliot Huber</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-left">But I must explain to you how all this mistaken
                                                    idea of denouncing pleasure ...
                                                </td>
                                                <td>
                                                    <i class="fa fa-tags fa-w-20 opacity-4"></i>
                                                </td>
                                                <td class="text-right">
                                                    <i class="fa fa-calendar-alt opacity-4 mr-2"></i>
                                                    7 Dec
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="width: 78px;">
                                                    <div class="custom-checkbox custom-control"><input type="checkbox" id="eCheckbox18" class="custom-control-input"><label class="custom-control-label" for="eCheckbox18">&nbsp;</label></div>
                                                </td>
                                                <td class="text-left pl-1">
                                                    <i class="fa fa-star"></i>
                                                </td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <img width="42" class="rounded-circle" src="assets/images/avatars/8.jpg" alt="">
                                                            </div>
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">Eliot Huber</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-left">But I must explain to you how all this mistaken
                                                    idea of denouncing pleasure ...
                                                </td>
                                                <td>
                                                    <i class="fa fa-tags fa-w-20 opacity-4"></i>
                                                </td>
                                                <td class="text-right">
                                                    <i class="fa fa-calendar-alt opacity-4 mr-2"></i>
                                                    7 Dec
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="width: 78px;">
                                                    <div class="custom-checkbox custom-control"><input type="checkbox" id="eCheckbox19" class="custom-control-input"><label class="custom-control-label" for="eCheckbox19">&nbsp;</label></div>
                                                </td>
                                                <td class="text-left pl-1">
                                                    <i class="fa fa-star"></i>
                                                </td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <img width="42" class="rounded-circle" src="assets/images/avatars/9.jpg" alt="">
                                                            </div>
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">Ella-Rose Henry</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-left">Create stunning UIs for your pages with these
                                                    layout components...
                                                </td>
                                                <td>
                                                    <i class="fa fa-tags fa-w-20 opacity-4"></i>
                                                </td>
                                                <td class="text-right">
                                                    <i class="fa fa-calendar-alt opacity-4 mr-2"></i>
                                                    7 Dec
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="app-inner-layout__bottom-pane d-block text-center">
                                        <nav class="" aria-label="Page navigation example">
                                            <ul class="pagination">
                                                <li class="page-item"><a href="javascript:void(0);" class="page-link" aria-label="Previous"><span aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
                                                <li class="page-item"><a href="javascript:void(0);" class="page-link">1</a></li>
                                                <li class="page-item active"><a href="javascript:void(0);" class="page-link">2</a></li>
                                                <li class="page-item"><a href="javascript:void(0);" class="page-link">3</a></li>
                                                <li class="page-item"><a href="javascript:void(0);" class="page-link">4</a></li>
                                                <li class="page-item"><a href="javascript:void(0);" class="page-link">5</a></li>
                                                <li class="page-item"><a href="javascript:void(0);" class="page-link" aria-label="Next"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="app-inner-layout__sidebar card">
                                <ul class="nav flex-column">
                                    <li class="pt-3 pl-3 pr-3 pb-3 nav-item">
                                        <button class="btn-pill btn-shadow btn btn-primary btn-block">Write New Email
                                        </button>
                                    </li>
                                    <li class="nav-item-header nav-item">My Account</li>
                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-chat"> </i><span>Inbox</span>
                                        <div class="ml-auto badge badge-pill badge-info">8</div>
                                    </a></li>
                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-wallet"> </i><span>Sent Items</span></a></li>
                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-config"> </i><span>All Messages</span>
                                        <div class="ml-auto badge badge-success">New</div>
                                    </a></li>
                                    <li class="nav-item-divider nav-item"></li>
                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-box2"> </i><span>Trash</span></a></li>
                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-coffee"> </i><span>Others</span>
                                        <div class="ml-auto badge badge-warning">512</div>
                                    </a></li>
                                    <li class="nav-item-divider nav-item"></li>
                                    <li class="nav-item-header nav-item">Online Friends</li>
                                    <li class="text-center p-2 nav-item">
                                        <div>
                                            <div class="avatar-icon-wrapper">
                                                <div class="badge badge-primary badge-dot badge-dot-lg"></div>
                                                <div class="avatar-icon"><img src="assets/images/avatars/1.jpg" alt=""></div>
                                            </div>
                                            <div class="avatar-icon-wrapper">
                                                <div class="badge badge-focus badge-dot badge-dot-lg"></div>
                                                <div class="avatar-icon"><img src="assets/images/avatars/2.jpg" alt=""></div>
                                            </div>
                                            <div class="avatar-icon-wrapper">
                                                <div class="badge badge-warning badge-dot badge-dot-lg"></div>
                                                <div class="avatar-icon"><img src="assets/images/avatars/3.jpg" alt=""></div>
                                            </div>
                                            <div class="avatar-icon-wrapper">
                                                <div class="badge badge-danger badge-dot badge-dot-lg"></div>
                                                <div class="avatar-icon"><img src="assets/images/avatars/4.jpg" alt=""></div>
                                            </div>
                                            <div class="avatar-icon-wrapper">
                                                <div class="badge badge-info badge-dot badge-dot-lg"></div>
                                                <div class="avatar-icon"><img src="assets/images/avatars/5.jpg" alt=""></div>
                                            </div>
                                            <div class="avatar-icon-wrapper">
                                                <div class="badge badge-success badge-dot badge-dot-lg"></div>
                                                <div class="avatar-icon"><img src="assets/images/avatars/6.jpg" alt=""></div>
                                            </div>
                                            <div class="avatar-icon-wrapper">
                                                <div class="badge badge-secondary badge-dot badge-dot-lg"></div>
                                                <div class="avatar-icon"><img src="assets/images/avatars/7.jpg" alt=""></div>
                                            </div>
                                            <div class="avatar-icon-wrapper">
                                                <div class="badge badge-warning badge-dot badge-dot-lg"></div>
                                                <div class="avatar-icon"><img src="assets/images/avatars/8.jpg" alt=""></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item-btn text-center nav-item">
                                        <button class="btn-wide btn-pill btn btn-success btn-sm">Start New Conversation
                                        </button>
                                    </li>
                                    <li class="nav-item-divider nav-item"></li>
                                    <li class="nav-item-header nav-item">Tags
                                        <small class="ml-1">Important</small>
                                    </li>
                                    <li class="nav-item">
                                        <button type="button" tabindex="0" class="d-flex align-items-center dropdown-item">
                                            <div class="badge ml-0 mr-3 badge-dot badge-dot-xl badge-success">Dark</div>
                                            Important
                                        </button>
                                        <button type="button" tabindex="0" class="d-flex align-items-center dropdown-item">
                                            <div class="badge ml-0 mr-3 badge-dot badge-dot-xl badge-danger">Dark</div>
                                            Favourites
                                        </button>
                                        <button type="button" tabindex="0" class="d-flex align-items-center dropdown-item">
                                            <div class="badge ml-0 mr-3 badge-dot badge-dot-xl badge-warning">Dark</div>
                                            Actions
                                        </button>
                                        <div tabindex="-1" class="dropdown-divider"></div>
                                        <button type="button" tabindex="0" class="d-flex align-items-center dropdown-item">
                                            <div class="badge ml-0 mr-3 badge-dot badge-dot-xl badge-primary">Dark</div>
                                            Other Tags
                                        </button>
                                    </li>
                                </ul>
                            <!-- </div>
                        </div> -->
@endsection