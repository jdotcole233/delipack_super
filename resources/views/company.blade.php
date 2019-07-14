

@extends('Header.index')

<!-- <h2>HEllo</h2> -->
<!-- Modal Content goes here -->

<div class="modal fade bd-example-modal-lg-1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-modal="true">
        <form action="{{url('/addCompany')}}" method="post" enctype="multipart/form-data">
          @csrf
                <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Company Registration</h5>
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
                                                        <input type="name" name="company_name" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <label for="company_abbreviation">Company Abbreviation</label>
                                                        <input type="name" name="company_abbreviation" class="form-control">
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
                                                        <input type="tel" name="company_phone_one" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <label for="company_phone_two">Company Phone 2</label>
                                                        <input type="name" name="company_phone_two" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                    <label for="company_email" class="">Company Email</label>
                                                    <input type="email" name="company_email" id="" class="form-control">
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
                                                            <input type="tel" name="region" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <label for="address">Address</label>
                                                            <input type="address" name="address" class="form-control">
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
                                                            <input type="tel" name="city" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <label for="area">Area</label>
                                                            <input type="name" name="area" class="form-control">
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
                                                            <input type="tel" name="twitter_handle" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <label for="instagram_handle">Instagram Handle</label>
                                                            <input type="name" name="instagram_handle" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <label for="facebook_handle">Facebook Handle</label>
                                                            <input type="name" name="facebook_handle" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
        </form>
    </div>

    <!-- /end of the modal content -->


@section('content')

<div class="container-fluid">
    <div class="row mb-4">
        <div class="container mt-2" >
            <button class="btn btn-primary pull-right" data-toggle="modal" data-target=".bd-example-modal-lg">Register Company</button>
        </div>
    </div>
</div>


<div class="container mt-4">
    <div class="card mb-3">
        <div class="card-header-tab card-header">
            <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                <i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Easy
                Dynamic Tables
            </div>
            <div class="btn-actions-pane-right actions-icon-btn">
                <div class="btn-group dropdown">
                    <button type="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"
                            class="btn-icon btn-icon-only btn btn-link"><i
                            class="pe-7s-menu btn-icon-wrapper"></i></button>
                    <div tabindex="-1" role="menu" aria-hidden="true"
                         class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                        <h6 tabindex="-1" class="dropdown-header">
                            Header</h6>
                        <button type="button" tabindex="0" class="dropdown-item"><i
                                class="dropdown-icon lnr-inbox"> </i><span>Menus</span>
                        </button>
                        <button type="button" tabindex="0" class="dropdown-item"><i
                                class="dropdown-icon lnr-file-empty"> </i><span>Settings</span>
                        </button>
                        <button type="button" tabindex="0" class="dropdown-item"><i
                                class="dropdown-icon lnr-book"> </i><span>Actions</span>
                        </button>
                        <div tabindex="-1" class="dropdown-divider"></div>
                        <div class="p-3 text-right">
                            <button class="mr-2 btn-shadow btn-sm btn btn-link">View
                                Details
                            </button>
                            <button class="mr-2 btn-shadow btn-sm btn btn-primary">
                                Action
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table style="width: 100%;" id="example"
                   class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone Number 1</th>
                    <th>Phone Number 2</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($company_data as $data)
                <tr>
                        <td>{{$data->company_name}}</td>
                        <td>{{$data->company_phone_one}}</td>
                        <td>{{$data->company_phone_two}}</td>
                        <td>{{$data->address}}</td>
                        <td>2{{$data->company_email}}</td>
                        <td>
                            <a href="{{url('/viewcompany')}}" class="btn btn-info">View</a>
                            <button class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg-1">Notify</button>
                            <button class="btn btn-danger deactivateCompanyBtn">Deactivate</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Phone Number 1</th>
                        <th>Phone Number 2</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>




@endsection
