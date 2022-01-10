@extends('layouts.master')
@section('content')
<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area" style="background-image: {{url('img/banner/4.jpg')}};">
    <div class="container">
        <div class="pagination-area">
            <h1>Single Course - 02</h1>
            <ul>
                <li><a href="#">Home</a> -</li>
                <li>Courses Details</li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->
<!-- Courses Page 4 Area Start Here -->
<div class="courses-page-area4">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-12">
                <div class="course-details-inner">
                    <h2 class="title-default-left title-bar-high">Advance WordPress Development Class</h2>
                    <p>Bimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specime
                        book. It has survived not only five centuries.</p>
                    <img src="{{url('img/course/19.jpg')}}" class="img-responsive" alt="course">
                    <div class="course-details-tab-area">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <ul class="course-details-tab-btn nav" id="myTab" role="tablist">
                                    <li class="menu-item" role="presentation"><a class="menu-link active" id="menu-1-tab" data-bs-toggle="tab" href="#menu-1" role="tab" aria-controls="menu-1" aria-selected="false">Features</a></li>
                                    <li class="menu-item" role="presentation"><a class="menu-link" id="menu-2-tab" data-bs-toggle="tab" href="#menu-2" role="tab" aria-controls="menu-2" aria-selected="false">Lecturers</a></li>
                                </ul>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane tab-item animated fadeIn show active" id="menu-1" role="tabpanel" aria-labelledby="menu-1-tab">
                                        <ul class="course-feature">
                                            <li>Start: 01 January, 2017</li>
                                            <li>Course Duration: 3 Month</li>
                                            <li>Total Credits: 150</li>
                                            <li>Seats Available: 200</li>
                                            <li>Total Classes : 100</li>
                                            <li>Lecturer: 03</li>
                                            <li>Class: Sunday - Monday</li>
                                            <li>Class Time: 10 am - 11.00 am</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane tab-item animated fadeIn" id="menu-2" role="tabpanel" aria-labelledby="menu-1-tab">
                                        <div class="course-details-skilled-lecturers">
                                            <ul>
                                                <li>
                                                    <div class="skilled-lecturers-img">
                                                        <a href="#"><img src="{{url('img/sidebar/1.jpg')}}" class="img-responsive" alt="skilled"></a>
                                                    </div>
                                                    <div class="skilled-lecturers-content">
                                                        <h4><a href="#">Kazi Fahim</a></h4>
                                                        <p>Senior UI Designer</p>
                                                    </div>
                                                    <div class="skilled-lecturers-schedule">
                                                        <ul>
                                                            <li>
                                                                <h4>Day</h4>
                                                                <p>Wed Day</p>
                                                            </li>
                                                            <li>
                                                                <h4>Time</h4>
                                                                <p>9 am - 11 am</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="skilled-lecturers-details">
                                                        <a href="#" class="details-accent-btn">Details</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="skilled-lecturers-img">
                                                        <a href="#"><img src="{{url('img/sidebar/2.jpg')}}" class="img-responsive" alt="skilled"></a>
                                                    </div>
                                                    <div class="skilled-lecturers-content">
                                                        <h4><a href="#">Monalisa Deo</a></h4>
                                                        <p>Senior WordPress Developer</p>
                                                    </div>
                                                    <div class="skilled-lecturers-schedule">
                                                        <ul>
                                                            <li>
                                                                <h4>Day</h4>
                                                                <p>Sun Day</p>
                                                            </li>
                                                            <li>
                                                                <h4>Time</h4>
                                                                <p>08 pm - 10 pm</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="skilled-lecturers-details">
                                                        <a href="#" class="details-accent-btn">Details</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="skilled-lecturers-img">
                                                        <a href="#"><img src="{{url('img/sidebar/3.jpg')}}" class="img-responsive" alt="skilled"></a>
                                                    </div>
                                                    <div class="skilled-lecturers-content">
                                                        <h4><a href="#">John Berry</a></h4>
                                                        <p>Senior Finance Lecturer</p>
                                                    </div>
                                                    <div class="skilled-lecturers-schedule">
                                                        <ul>
                                                            <li>
                                                                <h4>Day</h4>
                                                                <p>Mon Day</p>
                                                            </li>
                                                            <li>
                                                                <h4>Time</h4>
                                                                <p>04 pm - 11 05</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="skilled-lecturers-details">
                                                        <a href="#" class="details-accent-btn">Details</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="related-courses-title-area">
                    <h3>Related Courses</h3>
                </div>
                <div id="shadow-carousel" class="related-courses-carousel">
                    <div class="rc-carousel" data-loop="true" data-items="3" data-margin="15" data-autoplay="false" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true"
                        data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="1" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="2" data-r-medium-nav="true" data-r-medium-dots="false"
                        data-r-large="3" data-r-large-nav="true" data-r-large-dots="false">
                        <div class="courses-box1">
                            <div class="single-item-wrapper">
                                <div class="courses-img-wrapper hvr-bounce-to-right">
                                    <img class="img-responsive" src="{{url('img/course/3.jpg')}}" alt="courses">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                                <div class="courses-content-wrapper">
                                    <h3 class="item-title"><a href="#">Regular MBA</a></h3>
                                    <p class="item-content">Rmply dummy text printing setting industry it’s free demo.</p>
                                    <ul class="courses-info">
                                        <li>1 Year
                                            <br><span> Course</span></li>
                                        <li>50
                                            <br><span> Classes</span></li>
                                        <li>10 am - 11 am
                                            <br><span> Time</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
                <div class="sidebar">
                    <div class="sidebar-box">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Course Price</h3>
                            <div class="sidebar-course-price">
                                <a href="#" class="enroll-btn">Enroll THis Course</a>
                                <a href="#" class="download-btn">Download PDF</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Courses Page 3 Area End Here -->
@endsection