@extends('layouts.master')
@section('content')

<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area" style="background-image: url('img/banner/5.jpg');">
    <div class="container">
        <div class="pagination-area">
            <h1>Gallery</h1>
            <ul>
                <li><a href="#">Home</a> -</li>
                <li>Gallery</li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->
<!-- Gallery Area Start Here -->
<div class="gallery-area1">
    <div class="container">
        <div class="row gallery-wrapper">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="gallery-box">
                    <img src="img/gallery/5.jpg" class="img-responsive" alt="gallery">
                    <div class="gallery-content">
                        <a href="img/gallery/5.jpg" class="zoom"><i class="fa fa-link" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Gallery Area End Here -->
@endsection