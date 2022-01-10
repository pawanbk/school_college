
@extends('layouts.master')
@section('content')    
    <!-- Slider 1 Area Start Here -->
    <div class="slider1-area overlay-default index1">
        <div class="bend niceties preview-1">
            <div id="ensign-nivoslider-3" class="slides">
                @foreach($data['banner'] as $key=>$banner)
                <img src="http://localhost/school_college_admin/uploads/banner/{{$banner->featured_image}}" alt="slider" 
                title="#slider-direction-{{$key+1}}"/>
                @endforeach
            </div>
            @foreach($data['banner'] as $key=>$banner)
            <div id="slider-direction-{{$key+1}}" class="t-cn slider-direction">
                <div class="slider-content s-tb slide-{{$key+1}}">
                    <div class="title-container s-tb-c">
                        <div class="title1">{{$banner->banner_title}}</div>
                        <p>{{$banner->banner_description}}</p>
                        <div class="slider-btn-area">
                            <a href="{{$banner->banner_link}}" class="default-big-btn">Start a Course</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Slider 1 Area End Here -->
    <!-- Service 1 Area Start Here -->
    <!-- <div class="service1-area">
        <div class="service1-inner-area">
            <div class="container">
                <div class="row service1-wrapper">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 service-box1">
                        <div class="service-box-content">
                            <h3><a href="#">Scholarship Facility</a></h3>
                            <p>Eimply dummy text printing ypese tting industry.</p>
                        </div>
                        <div class="service-box-icon">
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 service-box1">
                        <div class="service-box-content">
                            <h3><a href="#">Skilled Lecturers</a></h3>
                            <p>Eimply dummy text printing ypese tting industry.</p>
                        </div>
                        <div class="service-box-icon">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 service-box1">
                        <div class="service-box-content">
                            <h3><a href="#">Book Library & Store</a></h3>
                            <p>Eimply dummy text printing ypese tting industry.</p>
                        </div>
                        <div class="service-box-icon">
                            <i class="fa fa-book" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Service 1 Area End Here -->
    <!-- About 1 Area Start Here -->
    <div class="about1-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="about-img-holder wow fadeIn" data-wow-duration="2s" data-wow-delay=".2s">
                        <img src="http://localhost/school_college_admin/uploads/about/{{$data['about']->featured_image}}" alt="about" class="img-responsive" />
                    </div>
                </div>
                <div class="col-xl-7 p-2">
                    <h1 class="about-title wow fadeIn" data-wow-duration="1s" data-wow-delay=".2s">{{$data['about']->title}}</h1>
                    <p class="about-sub-title wow fadeIn" data-wow-duration="1s" data-wow-delay=".2s">{{$data['about']->description}}</p>
                    <a href="#" class="view-all-accent-btn" style="margin-bottom:60px">Learn More..</a>
            </div>  
        </div>
    </div>
    <!-- About 1 Area End Here -->
    <!-- Courses 1 Area Start Here -->
    <div class="featured-area bg-common-style" style="background-image: url('img/featured/back.jpg');">
            <div class="container">
                <h2 class="title-default-textPrimary-left">Featured Courses</h2>
            </div>
            <div class="container">
                <div class="row featured-wrapper" id="gallery-wrapper">
                    <!-- foreach -->
                    @foreach($data['featured_courses'] as $course)
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="featured-box">
                            <div class="featured-img-holder hvr-bounce-to-right">
                                <img src="http://localhost/school_college_admin/uploads/course/{{$course->featured_image}}" 
                                class="img-responsive" alt="featured">
                                <a href="http://localhost/school_college_admin/uploads/course/{{$course->featured_image}}" class="zoom"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                            </div>
                            <div class="featured-content-holder">
                                <h3><a href="#">{{$course->name}}</a></h3>
                                <p>Rmply dummy printing ypesetting industry it’s free demo.</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- endforeach -->
                </div>
                <div class="view-all-btn-area">
                    <a href="#" class="ghost-btn-big">View All Courses</a>
                </div>
            </div>
        </div>
    <!-- Courses 1 Area End Here -->
    
    <!-- Lecturers Area Start Here -->
    <div class="lecturers-area">
        <div class="container">
            <h2 class="title-default-left">Our Skilled Lecturers</h2>
        </div>
        <div class="container">
            <div class="rc-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="false" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true"
                data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="3" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="4" data-r-medium-nav="true" data-r-medium-dots="false"
                data-r-large="4" data-r-large-nav="true" data-r-large-dots="false">
                @foreach($data['lecturer'] as $lecturer)
                <div class="single-item">
                    <div class="lecturers1-item-wrapper">
                        <div class="lecturers-img-wrapper">
                            <a href="#"><img class="img-responsive" 
                            src="http://localhost/school_college_admin/uploads/lecturer/{{$lecturer->featured_image}}" 
                            alt="team"></a>
                        </div>
                        <div class="lecturers-content-wrapper">
                            <h3 class="item-title"><a href="#">{{$lecturer->full_name}}</a></h3>
                            <span class="item-designation">Senior Finance Lecturer</span>
                            <ul class="lecturers-social">
                                <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Lecturers Area End Here -->
     <!-- student life at campus -->
    <div class="student-life-area overlay-student bg-common-style" style="background-image: url('img/banner/1.jpg');">
        <div class="container">
            <div class="student-life-content">
                <h2 class="student-life-title">Student Life at Academics</h2>
                <p class="student-life-sub-title">Vmply dummy text of the printing and typesetting industryorem
                    <br>Ipsum industry's standard dum an unknowramble.
                </p>
                <a href="#" class="view-all-accent-btn">Read More</a>
            </div>
        </div>
    </div>
    <!-- Video Area End Here -->
    <!-- News and Event Area Start Here -->
    <div class="news-event-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 news-inner-area">
                    <h2 class="title-default-left">Latest News</h2>
                    <ul class="news-wrapper">
                        @foreach($data['news'] as $news)
                        <li>
                            <div class="news-img-holder">
                                <a href="#"><img src="http://localhost/school_college_admin/uploads/news/{{$news->featured_image}}" class="img-responsive" alt="news"></a>
                            </div>
                            <div class="news-content-holder">
                                <h3><a href="single-news.html">{{$news->title}}</a></h3>
                                <div class="post-date">{{$news->published_date}}</div>
                                {!!$news->description!!}
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    <div class="news-btn-holder">
                        <a href="#" class="view-all-accent-btn">View All</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 event-inner-area">
                    <h2 class="title-default-left">Upcoming Events</h2>
                    <ul class="event-wrapper">
                        <li class="wow bounceInUp" data-wow-duration="2s" data-wow-delay=".1s">
                            <div class="event-calender-wrapper">
                                <div class="event-calender-holder">
                                    <h3>26</h3>
                                    <p>Jan</p>
                                    <span>2017</span>
                                </div>
                            </div>
                            <div class="event-content-holder">
                                <h3><a href="single-event.html">Html MeetUp Conference 2017</a></h3>
                                <p>Pellentese turpis dignissim amet area ducation process facilitating Knowledge. Pellentese turpis dignissim amet area ducation process facilitating Knowledge. Pellentese turpis dignissim amet area ducation.</p>
                                <ul>
                                    <li>04:00 PM - 06:00 PM</li>
                                    <li>Australia , Melborn</li>
                                </ul>
                            </div>
                        </li>
                        <li class="wow bounceInUp" data-wow-duration="2s" data-wow-delay=".3s">
                            <div class="event-calender-wrapper">
                                <div class="event-calender-holder">
                                    <h3>26</h3>
                                    <p>Jan</p>
                                    <span>2017</span>
                                </div>
                            </div>
                            <div class="event-content-holder">
                                <h3><a href="single-event.html">Workshop On UI Design</a></h3>
                                <p>Pellentese turpis dignissim amet area ducation process facilitating Knowledge. Pellentese turpis dignissim amet area ducation process facilitating Knowledge. Pellentese turpis dignissim amet area ducation.</p>
                                <ul>
                                    <li>03:00 PM - 05:00 PM</li>
                                    <li>Australia , Melborn</li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <div class="event-btn-holder">
                        <a href="#" class="view-all-primary-btn">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- News and Event Area End Here -->
   
    <!-- Counter Area Start Here -->
    <div class="counter-area bg-primary-deep" style="background-image: url('img/banner/4.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".20s">
                    <h2 class="about-counter title-bar-counter" data-num="{{count($data['lecturer'])}}">{{count($data['lecturer'])}}</h2>
                    <p>PROFESSIONAL LECTURER</p>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".40s">
                    <h2 class="about-counter title-bar-counter" data-num="{{$data['total_courses']['0']->count}}">{{$data['total_courses']['0']->count}}</h2>
                    <p>NEWS COURSES EVERY YEARS</p>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".80s">
                    <h2 class="about-counter title-bar-counter" data-num="{{count($data['students'])}}">{{count($data['students'])}}</h2>
                    <p>REGISTERED STUDENTS</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Area End Here -->
    <!-- Students Say Area Start Here -->
    <div class="students-say-area">
        <h2 class="title-default-center">What Our Students Say</h2>
        <div class="container">
            <div class="rc-carousel" data-loop="true" data-items="2" data-margin="30" data-autoplay="false" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="true" data-nav="false" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="false"
                data-r-x-small-dots="true" data-r-x-medium="2" data-r-x-medium-nav="false" data-r-x-medium-dots="true" data-r-small="2" data-r-small-nav="false" data-r-small-dots="true" data-r-medium="2" data-r-medium-nav="false" data-r-medium-dots="true"
                data-r-large="2" data-r-large-nav="false" data-r-large-dots="true">
                <div class="single-item">
                    <div class="single-item-wrapper">
                        <div class="profile-img-wrapper">
                            <a href="#" class="profile-img"><img class="profile-img-responsive img-circle" src="img/students/1.jpg" alt="Testimonial"></a>
                        </div>
                        <div class="tlp-tm-content-wrapper">
                            <h3 class="item-title"><a href="#">Rosy Janner</a></h3>
                            <span class="item-designation">UI Designer</span>
                            <ul class="rating-wrapper">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="item-content">Pellentesque tellus arcu, laoreet volutpavenenatis molestPellentesque commodo lorem lectus pretium vehicula.</div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="single-item-wrapper">
                        <div class="profile-img-wrapper">
                            <a href="#" class="profile-img"><img class="profile-img-responsive img-circle" src="img/students/2.jpg" alt="Testimonial"></a>
                        </div>
                        <div class="tlp-tm-content-wrapper">
                            <h3 class="item-title"><a href="#">Dainel Dina</a></h3>
                            <span class="item-designation">Manager</span>
                            <ul class="rating-wrapper">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="item-content">Pellentesque tellus arcu, laoreet volutpavenenatis molestPellentesque commodo lorem lectus pretium vehicula.</div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="single-item-wrapper">
                        <div class="profile-img-wrapper">
                            <a href="#" class="profile-img"><img class="profile-img-responsive img-circle" src="img/students/1.jpg" alt="Testimonial"></a>
                        </div>
                        <div class="tlp-tm-content-wrapper">
                            <h3 class="item-title"><a href="#">Rosy Janner</a></h3>
                            <span class="item-designation">UI Designer</span>
                            <ul class="rating-wrapper">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="item-content">Pellentesque tellus arcu, laoreet volutpavenenatis molestPellentesque commodo lorem lectus pretium vehicula.</div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="single-item-wrapper">
                        <div class="profile-img-wrapper">
                            <a href="#" class="profile-img"><img class="profile-img-responsive img-circle" src="img/students/2.jpg" alt="Testimonial"></a>
                        </div>
                        <div class="tlp-tm-content-wrapper">
                            <h3 class="item-title"><a href="#">Dainel Dina</a></h3>
                            <span class="item-designation">Manager</span>
                            <ul class="rating-wrapper">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="item-content">Pellentesque tellus arcu, laoreet volutpavenenatis molestPellentesque commodo lorem lectus pretium vehicula.</div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="single-item-wrapper">
                        <div class="profile-img-wrapper">
                            <a href="#" class="profile-img"><img class="profile-img-responsive img-circle" src="img/students/1.jpg" alt="Testimonial"></a>
                        </div>
                        <div class="tlp-tm-content-wrapper">
                            <h3 class="item-title"><a href="#">Rosy Janner</a></h3>
                            <span class="item-designation">UI Designer</span>
                            <ul class="rating-wrapper">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="item-content">Pellentesque tellus arcu, laoreet volutpavenenatis molestPellentesque commodo lorem lectus pretium vehicula.</div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="single-item-wrapper">
                        <div class="profile-img-wrapper">
                            <a href="#" class="profile-img"><img class="profile-img-responsive img-circle" src="img/students/2.jpg" alt="Testimonial"></a>
                        </div>
                        <div class="tlp-tm-content-wrapper">
                            <h3 class="item-title"><a href="#">Dainel Dina</a></h3>
                            <span class="item-designation">Manager</span>
                            <ul class="rating-wrapper">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="item-content">Pellentesque tellus arcu, laoreet volutpavenenatis molestPellentesque commodo lorem lectus pretium vehicula.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Students Say Area End Here -->
    <!-- Students Join 1 Area Start Here -->
    <div class="students-join1-area">
        <div class="container">
            <div class="students-join1-wrapper">
                <div class="students-join1-left">
                    <div id="ri-grid" class="author-banner-bg ri-grid header text-center">
                        <ul class="ri-grid-list">
                        @foreach($data['students'] as $student)
                            <li>
                                <a href="#"><img src="http://localhost/school_college_admin/uploads/student/{{$student->featured_image}}" alt=""></a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="students-join1-right">
                    <div>
                        <h2>Our valueable Students.</h2>
                        <a href="#" class="join-now-btn" style="margin-bottom: 10px;">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Students Join 1 Area End Here -->
    <!-- Brand Area Start Here -->
    <div class="brand-area">
        <div class="container">
            <div class="rc-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-r-x-small="2" data-r-x-small-nav="false"
                data-r-x-small-dots="false" data-r-x-medium="3" data-r-x-medium-nav="false" data-r-x-medium-dots="false" data-r-small="4" data-r-small-nav="false" data-r-small-dots="false" data-r-medium="4" data-r-medium-nav="false" data-r-medium-dots="false"
                data-r-large="4" data-r-large-nav="false" data-r-large-dots="false">
                @foreach($data['academic_partner'] as $partner)
                <div class="brand-area-box">
                    <a href="#"><img src="http://localhost/school_college_admin/uploads/partner/{{$partner->logo}}" alt="brand"></a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Brand Area End Here -->
@endsection