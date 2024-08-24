@extends('admin.template.admin_master')

@section('page-title', 'Blog')

@section('content')
    <div class="right_col" role="main">
        {{-- ListArea --}}
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        @if (isset($blog) && !empty($blog))
                            <h2>Update Blog</h2>
                        @else
                            <h2>Add New Blog</h2>
                        @endif
                        <div class="clearfix"></div>
                        @if (Session::has('message'))
                            <div class="alert alert-success">{{ Session::get('message') }}</div>
                        @endif 
                        @if (Session::has('error'))
                            <div class="alert alert-danger">{{ Session::get('error') }}</div>
                        @endif
                    </div>
                    <div class="x_content">
                        <form action="{{ route('admin.blog.save') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if (isset($blog) && !empty($blog))
                            <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                        @endif
                        <div class="well" style="overflow: auto">
                            <div class="form-row mb-10">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3">
                                    <label class="control-label">Blog Heading</label>
                                    <input type="text" class="form-control" value="{{isset($blog) ? $blog->heading : old('heading')}}" placeholder="Enter Blog Heading" name="heading" id="">
                                    @if ($errors->has('heading'))
                                        <span style="color: red">{{ $errors->first('heading') }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3">
                                    <label class="control-label">Blog Image 
                                        {{-- <small style="color:red">(size: 453 * 290)</small> --}}
                                    </label>
                                    <input type="file" name="image" class="form-control" placeholder="Catagory Image">
                                    @if ($errors->has('image'))
                                        <span style="color: red">{{ $errors->first('image') }}</span>
                                    @enderror
                                    <span class="help-block"></span>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                                    <label class="control-label">Blog Description</label>
                                    <textarea type="text" class="form-control" placeholder="Enter Blog Description" name="desc" id="description">{{isset($blog) ? $blog->desc : old('desc')}}</textarea>
                                    @if ($errors->has('desc'))
                                        <span style="color: red">{{ $errors->first('desc') }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-success" type="submit" value="Save & Exit">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script src="{{ asset('ckeditor4/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace( 'description', {
        height: 250,
    });
</script>
@endsection