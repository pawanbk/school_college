@extends('layouts.master')
@section('content')
<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area" style="background-image: url('img/banner/5.jpg');">
        <div class="container">
            <div class="pagination-area">
                <h1>Courses</h1>
                <ul>
                    <li><a href="#">Home</a> -</li>
                    <li>Course</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Page Banner Area End Here -->
    <!-- Courses Page 1 Area Start Here -->
    <div class="courses-page-area1">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-md-8 col-sm-12 order-md-2">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="courses-page-top-area">
                                <div class="courses-page-top-left">
                                    <p>Showing 13-24 of 50 results</p>
                                </div>
                                <div class="courses-page-top-right">
                                    <ul class="nav" role="tablist">
                                    <li class="menu-item" role="presentation"><a class="menu-link active" id="menu-1-tab" data-bs-toggle="tab" href="#menu-1" role="tab" aria-controls="menu-1" aria-selected="true"><i class="fa fa-th-large"></i></a></li>
                                            <li class="menu-item" role="presentation"><a class="menu-link" id="menu-2-tab" data-bs-toggle="tab" href="#menu-2" role="tab" aria-controls="menu-2" aria-selected="false"><i class="fa fa-list"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Tab panes -->
                        <div class="tab-content">
                                <div class="tab-pane tab-item animated fadeIn show active" id="menu-1" role="tabpanel" aria-labelledby="menu-1-tab">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                            <div class="courses-box1">
                                                <div class="single-item-wrapper">
                                                    <div class="courses-img-wrapper hvr-bounce-to-bottom">
                                                        <img class="img-responsive" src="img/course/1.jpg" alt="courses">
                                                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                    </div>
                                                    <div class="courses-content-wrapper">
                                                        <h3 class="item-title"><a href="#">Basic Philosopphy</a></h3>
                                                        <p class="item-content">Rmply dummy text printing setting industry it’s free demo.</p>
                                                        <ul class="courses-info">
                                                            <li>7 Months
                                                                <br><span> Course</span></li>
                                                            <li>30
                                                                <br><span> Classes</span></li>
                                                            <li>10 pm - 11 pm
                                                                <br><span> Classes</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                                <!-- Listed product show -->
                                <div class="tab-pane tab-item animated fadeIn" id="menu-2" role="tabpanel" aria-labelledby="menu-2-tab">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <div class="courses-box3">
                                                <div class="single-item-wrapper">
                                                    <div class="courses-img-wrapper hvr-bounce-to-right">
                                                        <img class="img-responsive" src="img/course/1.jpg" alt="courses">
                                                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                    </div>
                                                    <div class="courses-content-wrapper">
                                                        <h3 class="item-title"><a href="#">GMAT</a></h3>
                                                        <p class="item-content">Rmply dummy text printing setting industry iLorem ipsum dolor sit consectetuer adipiscing elit et diam nonummy.t’s free demo.</p>
                                                        <ul class="courses-info">
                                                            <li>1 Year
                                                                <br><span> Course</span></li>
                                                            <li>15
                                                                <br><span> Classes</span></li>
                                                            <li>05 pm - 07 pm
                                                                <br><span> Time</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <ul class="pagination-left">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 order-md-1">
                    <div class="sidebar">
                        <div class="sidebar-box">
                            <div class="sidebar-box-inner">
                                <h3 class="sidebar-title">Find your Course</h3>
                                <div class="sidebar-find-course">
                                    <form id="checkout-form">
                                        <div class="form-group course-name">
                                            <input id="first-name" placeholder="Course Name" class="form-control" type="text" />
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-select">
                                                <select id="district" class='select2'>
                                                    <option value="0">Categories</option>
                                                    <option value="1">Categories 1</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button class="sidebar-search-btn disabled" type="submit" value="Login">Search Course</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-box">
                            <div class="sidebar-add-area overlay-primaryColor">
                                <img src="img/banner/7.jpg" class="img-responsive" alt="banner">
                                <a href="#" class="sidebar-ghost-btn">Apply Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses Page 1 Area End Here -->
    @endsection