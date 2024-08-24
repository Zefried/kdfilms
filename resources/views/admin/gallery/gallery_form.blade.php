@extends('admin.template.admin_master')

@section('page-title', 'Gallery')

@section('content')
    <div class="right_col" role="main">
        {{-- ListArea --}}
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        @if (isset($gallery) && !empty($gallery))
                            <h2>Update Gallery</h2>
                        @else
                            <h2>Add New Gallery</h2>
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
                        <form action="{{ route('admin.gallery.gallerysubmit') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{-- <input type="hidden" name="type" value="{{ $type }}"> --}}
                        @if (isset($gallery) && !empty($gallery))
                            <input type="hidden" name="gallery_id" value="{{ $gallery->id }}">
                        @endif
                        <div class="well" style="overflow: auto">
                            <div class="form-row mb-10">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3">
                                    <label class="control-label">Image 
                                        {{-- <small style="color:red">(size: 453 * 290)</small> --}}
                                    </label>
                                    <input type="file" name="image[]" class="form-control" placeholder="Image" multiple>
                                    @if ($errors->has('image'))
                                        <span style="color: red">{{ $errors->first('image') }}</span>
                                    @enderror
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" style="text-align: center">
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