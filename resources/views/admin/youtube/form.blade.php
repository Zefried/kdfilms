@extends('admin.template.admin_master')

@section('page-title', 'Youtube')

@section('content')
    <div class="right_col" role="main">
        {{-- ListArea --}}
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form action="{{route('admin.youtube.submit')}}" method="post">
                            @csrf
                            @if (isset($data) && !empty($data))
                                <input type="hidden" name="youtube_id" value="{{$data->id}}">                                
                            @endif
                            <div class="row" style="margin-bottom: 50px;">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label"> Youtube Link </label>
                                    <input type="text" name="video_link" id="video_link" class="form-control"
                                        value="{{ isset($data) ? 'https://www.youtube.com/watch?v=' . $data->video_id : old('video_link') }}">
                                    @if ($errors->has('video_link'))
                                        <span style="color: red">{{ $errors->first('video_link') }}</span>
                                    @endif
                                </div>
                            </div>

                            {{-- <div class="row" style="margin-bottom: 50px;">

                            </div> --}}

                            <div class="form-group col-lg-12 mt-4" style="text-align: center;padding-top: 10px;">
                                <input class="btn btn-success" type="submit" value="Save">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="{{ asset('ckeditor4/ckeditor.js') }}"></script>
    <script>
        $(document).ready(function() {

            CKEDITOR.replace('description', {
                height: 250,
            });

            $("#image").change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#showImage").attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files[0]);
            });

        });
    </script>


@endsection
