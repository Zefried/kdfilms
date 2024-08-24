@extends('admin.template.admin_master')

@section('page-title', 'Gallery')

@section('content')
    <div class="right_col" role="main">
        {{-- ListArea --}}
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Gallery List</h2>
                        <a href="{{ route('admin.gallery.galleryform') }}" class="btn btn-primary btn-xs btn-spl pull-right"><i
                                class="fa fa-plus"></i> Add Gallery</a>
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
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="form-text-element">
                                        @foreach ($galleries as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><img src="{{ asset('backend_images/' . $item->image) }}"
                                                        style="height:80px;"></td>
                                                <td>
                                                    {{-- <a href="{{ route('admin.gallery.form', ['id' => $item->id]) }}"
                                                        class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a> --}}
                                                    <a href="{{ route('admin.gallery.gallerydelete', ['id' => $item->id]) }}"
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
