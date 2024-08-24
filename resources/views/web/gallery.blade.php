@extends('web.template.master')
@section('content')

<!-- Start Page Title Area -->

<!-- Start Page Title Area -->
<div class="page-title-area item-bg1">
    <div class="container">
        <h1>Gallery<span><a style="color:#ff0427;" href="{{route('web.index')}}">Home</a></span></h1>
    </div>
</div>

<style>
/* Hide the lightbox initially */
.lightbox {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.9);
    text-align: center;
    z-index: 999999;
}

.lightbox img{
	margin-top: 110px;
}

.lightbox-content {
    margin: auto;
    display: block;
    max-width: 80%;
    max-height: 80%;
}

.close-button {
    position: absolute;
    top: 15px;
    right: 15px;
    font-size: 30px;
    color: #fff;
    cursor: pointer;
}

.nav {
	display: flex;
	justify-content: center;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 100%;
	gap: 80%;
}

.prev,
.next {
    display: inline-block;
    font-size: 40px;
    color: #fff;
    cursor: pointer;
    padding: 20px;
    text-decoration: none;
}

.prev {
    left: 0;
}

.next {
    right: 0;
}

img.gallery-item {
    height: 230px;
    width: 415px;
}

.gallery-item{
	margin-top: 20px;
    box-shadow: 2px 2px 9px #d0d2d2;
}

.gallery-space{
    margin: 60px 0px;
}

@media only screen and (min-width: 350px) and (max-width: 600px) {


    .nav {
    display: flex;
    justify-content: center;
    position: absolute;
    top: 32%;
    transform: translateY(-50%);
    width: 100%;
    gap: 50%;
}

.lightbox-content {
    margin: auto;
    display: block;
    max-width: 90%;
    max-height: 90%;
}

.page-title-area {
    padding-top: 75px;
    padding-bottom: 100px;
    margin-bottom: -65px;
}

}


</style>

<div class="gallery-space">
    <div class="container">
        <div class="row">
            @forelse ($galleries as $item)
                <div class=" col-lg-4 gallery-img">
                    <div class="gallery-img">
                        <img class="gallery-item" src="{{asset('backend_images/'.$item->image)}}" alt="Image 1">
                    </div>
                </div>
            @empty
                
            @endforelse
        </div>
    </div>
</div>




<div class="lightbox">
    <span class="close-button" onclick="closeLightbox()">&times;</span>
    <img class="lightbox-content" id="lightbox-image">
    <div class="nav">
        <a class="prev" onclick="changeImage(-1)">&#10094;</a>
        <a class="next" onclick="changeImage(1)">&#10095;</a>
    </div>
</div>


@endsection