@extends('layouts.master')
@section('content')
<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area" style="background-image: url('img/banner/5.jpg');">
    <div class="container">
        <div class="pagination-area">
            <h1>Event Details</h1>
            <ul>
                <li><a href="#">Home</a> -</li>
                <li>Details</li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->
<!-- Event Details Page Area Start Here -->
<div class="event-details-page-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-12">
                <div class="event-details-inner">
                    <div class="event-details-img">
                        <div class="countdown-content">
                            <div id="countdown"></div>
                        </div>
                        <a href="#"><img src="{{url('img/event/5.jpg')}}" alt="event" class="img-responsive"></a>
                    </div>
                    <h2 class="title-default-left-bold-lowhight"><a href="#">Bimply dummy text of the printing and typesetting industry</a></h2>
                    <ul class="event-info-inline title-bar-sm-high">
                        <li><i class="fa fa-calendar" aria-hidden="true"></i>22 December, 2016</li>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>NewYork Tower, Melbourne</li>
                    </ul>
                    <p>Bimply dummy text of the printing and typesetting istryrem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.when an unknown printer took a galley of type and scrambled it to make
                        a type specimen book. It has survived not only five centuriesp into electronic.simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when
                        an unknown printer took a galley of type and scrambled it to make a type specimen book.Bimply dummy text of the printing and typesetting istryrem Ipsum has been the industry's standard dummy text ever since the 1500s, when
                        an unknown printer.when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuriesp into electronic.simply dummy text of the printing and typesetting
                        industry.
                    </p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
                <div class="sidebar">
                    <div class="sidebar-box">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Search</h3>
                            <div class="sidebar-find-course">
                                <form id="checkout-form">
                                    <div class="form-group course-name">
                                        <input id="first-name" placeholder="Type Here . . .." class="form-control" type="text" />
                                    </div>
                                    <div class="form-group">
                                        <button class="sidebar-search-btn-full disabled" type="submit" value="Login">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Categories</h3>
                            <ul class="sidebar-categories">
                                <li><a href="#">GMAT</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Event Details Page Area End Here -->
    
@endsection