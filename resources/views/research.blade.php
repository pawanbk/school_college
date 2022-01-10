@extends('layouts.master')
@section('content')

    <!-- Inner Page Banner Area Start Here -->
    <div class="inner-page-banner-area" style="background-image: url('img/banner/5.jpg');">
        <div class="container">
            <div class="pagination-area">
                <h1>Research</h1>
                <ul>
                    <li><a href="#">Home</a> -</li>
                    <li>Research</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Page Banner Area End Here -->
    <!-- Research Page 3 Area Start Here -->
    <div class="research-page3-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-md-8 col-sm-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="research-box3">
                                <img src="img/research/16.jpg" class="img-responsive" alt="research">
                                <h2 class="title-default-left-bold title-bar-high"><a href="#">Future UX Design Tecnique</a></h2>
                                <p>Bimply dummy text of the printing and typesetting istryrem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchangedwhen an unknown printer took a galley of type and scrambled.</p>
                                <a href="#" class="default-big-btn">Read MOre</a>
                            </div>
                        </div>
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
                                            <input id="first-name" placeholder="Research Name" class="form-control" type="text" />
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-select">
                                                <select id="district" class='select2'>
                                                    <option value="0">Categories</option>
                                                    <option value="1">category 1</option>
                                                </select>
                                            </div>
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
                                <h3 class="sidebar-title">Latest Research</h3>
                                <div class="sidebar-latest-research-area">
                                    <ul>
                                        <li>
                                            <div class="latest-research-img">
                                                <a href="#"><img src="img/sidebar/8.jpg" class="img-responsive" alt="skilled"></a>
                                            </div>
                                            <div class="latest-research-content">
                                                <h4>30 Nov, 2016</h4>
                                                <p>when an unknown printer took.</p>
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
    </div>
    <!-- Research Page 3 Area End Here -->
        
@endsection