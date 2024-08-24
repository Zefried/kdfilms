@extends('admin.template.admin_master')

@section('page-title', 'Youtube')

@section('content')
    <div class="right_col" role="main">
        {{-- ListArea --}}
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Youtube List</h2>
                        <a href="{{ route('admin.youtube.form') }}" class="btn btn-primary btn-xs btn-spl pull-right"><i
                                class="fa fa-plus"></i> Add Videos</a>
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
                                            <th>Sl</th>
                                            <th>Videos</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="form-text-element">
                                        @foreach ($list as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><a href="https://www.youtube.com/watch?v={{$item->video_id}}" target="_blank">
                                                    <img height="300px" width="350px" src="https://img.youtube.com/vi/{{$item->video_id}}/sddefault.jpg" class="img-responsive">
                                                </a></td>
                                                <td> <a href="{{ route('admin.youtube.form', ['id' => $item->id]) }}"
                                                    class="btn btn-xs btn-info"><i class="fa fa-edit"></i> Edit</a> 
                                                </td>                                            
                                            </tr>                                            
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
@endsection
