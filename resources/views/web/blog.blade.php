@extends('web.template.master')
@section('content')

<style>
    .footer-area {
    padding-top: 30px;
}

.ptb-120 {
    padding-top: 24px;
    padding-bottom: 20px;
}
</style>

<!-- Start Page Title Area -->
<div class="page-title-area item-bg2">
    <div class="container">
        <h1>Blog <br><span><a style="color:#ff0427;" href="{{route('web.index')}}">Home</a></span></h1>

        <!-- <ul>
            <li><a href="index-2.html">Home</a></li>
            <li>Blog</li>
        </ul> -->
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Blog Area -->
<section class="blog-area ptb-120 bg-image">
    <div class="container">
        <div class="row">
            @forelse ($blogs as $item)
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="blog-image">
                        <a href="#"><img src="assets/img/why-three-resize.jpg" alt="image"></a>

                        <div class="post-tag">
                            <a href="#">KD FILMS</a>
                        </div>
                    </div>

                    <div class="blog-post-content">
                        <span class="date">{{Carbon\Carbon::parse($item->created_at)->format('d M, Y')}}</span>
                        <h3><a href="{{route('web.blogdetails',['id'=>$item->id])}}">{{$item->heading}}</a></h3>
                        <p><a href="{{route('web.blogdetails',['id'=>$item->id])}}" class="read-more-btn">Read More <i
                                    class="icofont-double-right"></i></a></p>

                        <!-- <a href="#"><img src="assets/img/why-three-resize.jpg" alt="image"></a> -->

                    </div>
                </div>
            </div>
            @empty
            @endforelse



            <!-- <div class="col-lg-12 col-md-12">
                <div class="pagination-area">
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <li class="page-item"><a class="page-link" href="#"><i class="icofont-double-left"></i></a>
                            </li>
                            <li class="page-item"><a class="page-link active" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="icofont-double-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div> -->
        </div>
    </div>
</section>
<!-- End Blog Area -->



@endsection