@extends('admin.template.admin_master')

@section('page-title', 'Dashboard')

@section('content')
  <div class="right_col" role="main">
      <!-- top tiles -->
      {{-- <div class="row tile_count">
        <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count"  style="text-align: center">
            <div class="dash-box">
              <div class="count green"></div>
              <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
            </div>
        </div>
      </div>  --}}
      <!-- /top tiles -->
      <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Enquiry List</h2>
                    {{-- <a href="{{ route('admin.gallery.form') }}" class="btn btn-primary btn-xs btn-spl pull-right"><i
                            class="fa fa-plus"></i> Add Gallery</a> --}}
                    <div class="clearfix"></div>
                    @if (Session::has('message'))
                        <div class="alert alert-success">{{ Session::get('message') }}</div>
                    @endif
                    @if (Session::has('error'))
                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
                    @endif
                </div>
                <div>
                    <div class="x_content">
                        <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action" id="myTable">
                                <thead>
                                    <tr>
                                        <th>SI</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="form-text-element">
                                    @foreach ($contacts as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->mobile }}</td>
                                            <td>{{ $item->subject }}</td>
                                            <td>{{ $item->message }}</td>
                                            <td>
                                                <a href="{{ route('admin.contact.delete', ['id' => $item->id]) }}"
                                                    class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                                                {{-- @if ($item->status == 1)
                                                    <a href="{{ route('admin.team.status', ['id' => $item->id]) }}"
                                                        class="btn btn-xs btn-danger">Disable</a>
                                                @else
                                                    <a href="{{ route('admin.team.status', ['id' => $item->id]) }}"
                                                        class="btn btn-xs btn-success">Enable</a>
                                                @endif --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center"><a href="{{route('admin.contact.list')}}" class="btn btn-round btn-primary btn-xs">View More Result</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Catagory --}}
    {{-- <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
              <h2>Recent Orders</h2>
              <div class="clearfix"></div>
          </div>
          <div>
            <div class="x_content">
              <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action">
                  <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Order Date</th>
                        <th>Order Ammount</th>
                        <th>Shipping Charge</th>
                        <th>Total Ammount</th>
                        <th>Payment Status</th>
                        <th>Payment Method</th>
                        <th>Order Status</th>
                    </tr>
                  </thead>
                  <tbody class="form-text-element">
                  </tbody>
                </table>
              </div>
              <div class="text-center"><a href="#" class="btn btn-round btn-primary btn-xs">View More Result</a></div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}

    {{-- Product --}}
    {{-- <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
              <h2>Recent Books</h2>
              <div class="clearfix"></div>
          </div>
          <div>
            <div class="x_content">
              <div class="table-responsive">
              <table class="table table-striped jambo_table bulk_action">
                <thead>
                  <tr>
                      <th>SI</th>
                      <th>Name</th>
                      <th>Category</th>
                      <th>Sub Category</th>
                      <th>Status</th>
                  </tr>
                </thead>
                <tbody class="form-text-element">
                </tbody>
              </table>
              </div>
              <div class="text-center"><a href="#" class="btn btn-round btn-primary btn-xs">View More Result</a></div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}

    {{-- User & Contact --}}
    <div class="row">
      {{-- User --}}
      {{-- <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
              <h2>User List</h2>
              <div class="clearfix"></div>
          </div>
          <div>
            <div class="x_content">
              <div class="table-responsive">
              <table class="table table-striped jambo_table bulk_action">
                <thead>
                  <tr>
                      <th>SI</th>
                      <th>Name</th>
                      <th>Mobile</th>
                      <th>Email</th>
                      <th>Status</th>
                  </tr>
                </thead>
                <tbody class="form-text-element">
                </tbody>
              </table>
              </div>
              <div class="text-center"><a href="#" class="btn btn-round btn-primary btn-xs">View More Result</a></div>
            </div>
          </div>
        </div>
      </div> --}}

      {{-- Contact --}}
      {{-- <div class="col-md-6">
        <div class="x_panel">
          <div class="x_title">
              <h2>Enquiry List</h2>
              <div class="clearfix"></div>
          </div>
          <div>
            <div class="x_content">
              <div class="table-responsive">
              <table class="table table-striped jambo_table bulk_action">
                <thead>
                  <tr>
                      <th>SI</th>
                      <th>Name</th>
                      <th>Category</th>
                      <th>Status</th>
                  </tr>
                </thead>
                <tbody class="form-text-element">
                  <tr>
                    <td>1</td>
                    <td>Lorem ipsum dolor sit amet consectetur </td>
                    <td>Catagory 21 </td>
                    <td>
                      <label class="label label-success">Active</label>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Lorem ipsum dolor sit amet consectetur </td>
                    <td>Catagory 21 </td>
                    <td>
                      <label class="label label-danger">Disabled</label>
                    </td>
                  </tr>
                  @foreach($products as $data)
                    <tr>
                      <td>{{ $loop->iteration}}</td>
                      <td>{{ $data->name }}</td>
                      <td>{{ $data->category->name??null }}</td>
                      <td>@if($data->status ==1)
                            <a  class="btn btn btn-success btn-xs">Active</a>
                          @elseif($data->status ==2)
                            <a  class="btn btn btn-danger btn-xs">Inactive</a>
                          @else
                            <a  class="btn btn btn-warning btn-xs">Requested</a>
                          @endif
                        </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              </div>
              <div class="text-center"><a href="#" class="btn btn-round btn-primary btn-xs">View More Result</a></div>
            </div>
          </div>
        </div>
      </div> --}}
    </div>
  </div>
@endsection
