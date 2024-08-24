@extends('web.template.master')
@section('content')
<style>
.widget_recent_entries h3 {
    color: white;
}

.blog-content {
    box-shadow: 2px 7px 9px -1px white;
    padding: 20px;
}

.blog-text-issue{
    word-wrap: break-word;
}





</style>
<!-- Start Page Title Area -->
<div class="page-title-area item-bg2">
    <div class="container">
        <h1>Blog Details <br><span><a style="color:#ff0427;" href="{{route('web.index')}}">Home</a></span></h1>

        <!-- <ul>
            <li><a href="index-2.html">Home</a></li>
            <li>Blog</li>
        </ul> -->
    </div>
</div>

<section class="blog-area ptb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6">


                <div class="single-blog-card">
                    <a href="#"><img src="{{asset('backend_images/'.$blog->image)}}" alt="image"></a>

                    <div class="blog-post-content">
                        <h3>{{$blog->heading}}</h3>
                    </div>
                </div>
                <div class="blog-content blog-text-issue">
                    {!! $blog->desc !!}
                </div>

            </div>



            <div class="col-lg-4">
                <div class="sidebar">

                    <div class="widget widget_recent_entries">
                        <h3 class="widget-title">
                            KD FILMS
                        </h3>

                        <ul class="new-blog-links">
                            @forelse ($other_blogs as $item)
                            <li>
                                <a href="{{route('web.blogdetails',['id'=>$item->id])}}">
                                    <img src="{{asset('backend_images/'.$item->image)}}" alt="image">
                                </a>

                                <h5><a href="{{route('web.blogdetails',['id'=>$item->id])}}">{{$item->heading}}</a></h5>
                                <p class="date">{{Carbon\Carbon::parse($item->created_at)->format('d M, Y')}}</p>
                            </li>
                            @empty

                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection