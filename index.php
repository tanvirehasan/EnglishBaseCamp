<?php require_once "layout/header.php" ?>

<!--=====================================-->
<!--=       Hero Banner Area Start      =-->
<!--=====================================-->
<div class="hero-banner hero-style-1">
    <div class="container">

        <?php
        $data = SelectData('a_slider', '');
        while ($row = $data->fetch_object()) { ?>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-content">
                        <h1 class="title" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000"><?= $row->slider_title ?></h1>
                        <p data-sal-delay="200" data-sal="slide-up" data-sal-duration="1000"><?= $row->short_text ?></p>
                        <div class="banner-btn" data-sal-delay="400" data-sal="slide-up" data-sal-duration="1000">
                            <a href="<?= $row->btn_url ?>" class="edu-btn"><?= $row->btn_text ?> <i class="icon-4"></i></a>
                        </div>
                        <ul class="shape-group">
                            <li class="shape-1 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                <img data-depth="2" src="assets/images/about/shape-13.png" alt="Shape">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-thumbnail">
                        <div class="thumbnail" data-sal-delay="500" data-sal="slide-left" data-sal-duration="1000">
                            <img src="assets/images/banner/girl-1.webp" alt="Girl Image">
                        </div>

                        <ul class="shape-group">
                            <li class="shape-1" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                <img data-depth="1.5" src="assets/images/about/shape-15.png" alt="Shape">
                            </li>
                            <li class="shape-2 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                <img data-depth="-1.5" src="assets/images/about/shape-16.png" alt="Shape">
                            </li>
                            <li class="shape-3 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                <span data-depth="3" class="circle-shape"></span>
                            </li>
                            <li class="shape-4" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                <img data-depth="-1" src="assets/images/counterup/shape-02.png" alt="Shape">
                            </li>
                            <li class="shape-5 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                <img data-depth="1.5" src="assets/images/about/shape-13.png" alt="Shape">
                            </li>
                            <li class="shape-6 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                <img data-depth="-2" src="assets/images/about/shape-18.png" alt="Shape">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="shape-7">
        <img src="assets/images/about/h-1-shape-01.png" alt="Shape">
    </div>
</div>



<!--=====================================-->
<!--=       Features Area Start      =-->
<!--=====================================-->
<!-- Start Categories Area  -->
<div class="features-area-2">
    <div class="container">
        <div class="features-grid-wrap">
            <div class="features-box features-style-2 edublink-svg-animate">
                <div class="icon">
                    <img class="svgInject" src="assets/images/animated-svg-icons/online-class.svg" alt="animated icon">
                </div>
                <div class="content">
                    <h5 class="title"><span>3020</span> Online Courses</h5>
                </div>
            </div>
            <div class="features-box features-style-2 edublink-svg-animate">
                <div class="icon">
                    <img class="svgInject" src="assets/images/animated-svg-icons/instructor.svg" alt="animated icon">
                </div>
                <div class="content">
                    <h5 class="title"><span>Top</span>Instructors</h5>
                </div>
            </div>
            <div class="features-box features-style-2 edublink-svg-animate">
                <div class="icon certificate">
                    <img class="svgInject" src="assets/images/animated-svg-icons/certificate.svg" alt="animated icon">
                </div>
                <div class="content">
                    <h5 class="title"><span>Online</span>Certifications</h5>
                </div>
            </div>
            <div class="features-box features-style-2 edublink-svg-animate">
                <div class="icon">
                    <img class="svgInject" src="assets/images/animated-svg-icons/user.svg" alt="animated icon">
                </div>
                <div class="content">
                    <h5 class="title"><span>6000</span>Members</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Categories Area  -->
<!--=====================================-->
<!--=       Categories Area Start      =-->
<!--=====================================-->
<!-- Start Categories Area  -->
<div class="edu-categorie-area categorie-area-2 edu-section-gap">
    <div class="container">
        <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
            <h2 class="title">Test Prep</h2>
            <span class="shape-line"><i class="icon-19"></i></span>
            <p>Test prep training by Experts for your Study Abroad journey</p>
        </div>

        <div class="row g-5">
            <?php
            $teab_data = SelectData('aa_our_services', "WHERE catg_id='5'");
            while ($cours = $teab_data->fetch_object()) { ?>

                <div class="col-lg-4 col-md-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-2 color-primary-style edublink-svg-animate">
                        <div class="icon">
                            <i class="icon-9"></i>
                        </div>
                        <div class="content">
                            <a href="course-one.php?id=<?= $cours->title ?>">
                                <h5 class="title"><?= $cours->title ?></h5>
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- End Categories Area  -->
<!--=====================================-->
<!--=       About Us Area Start      	=-->
<!--=====================================-->
<div class="gap-bottom-equal edu-about-area about-style-1">
    <div class="container edublink-animated-shape">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="about-image-gallery">
                    <img class="main-img-1" src="assets/images/about/<?= About_Us('about_image') ?>" alt="About Image">
                    <div class="video-box" data-sal-delay="150" data-sal="slide-down" data-sal-duration="800">
                        <div class="inner">
                            <div class="thumb">
                                <img src="assets/images/about/about-02.webp" alt="About Image">
                                <a href="https://www.youtube.com/watch?v=PICj5tr9hcc" class="popup-icon video-popup-activation">
                                    <i class="icon-18"></i>
                                </a>
                            </div>
                            <div class="loading-bar">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="award-status bounce-slide">
                        <div class="inner">
                            <div class="icon">
                                <i class="icon-21"></i>
                            </div>
                            <div class="content">
                                <h6 class="title">29+</h6>
                                <span class="subtitle">Wonderful Awards</span>
                            </div>
                        </div>
                    </div>
                    <ul class="shape-group">
                        <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                            <img data-depth="1" src="assets/images/about/shape-36.png" alt="Shape">
                        </li>
                        <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                            <img data-depth="-1" src="assets/images/about/shape-37.png" alt="Shape">
                        </li>
                        <li class="shape-3 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                            <img data-depth="1" src="assets/images/about/shape-02.png" alt="Shape">
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6" data-sal-delay="150" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content">
                    <div class="section-title section-left">
                        <span class="pre-title">About Us</span>
                        <p><?php
                            $postcontent = html_entity_decode(About_Us('about_text'));
                            $content = strip_tags($postcontent);
                            echo mb_strimwidth($content, 0, 406, "..."); ?></p>
                    </div>

                </div>
            </div>
        </div>
        <ul class="shape-group">
            <li class="shape-1 circle scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                <span data-depth="-2.3"></span>
            </li>
        </ul>
    </div>
</div>
<!--=====================================-->
<!--=       Course Area Start      		=-->
<!--=====================================-->
<!-- Start Course Area  -->
<div class="edu-course-area course-area-1 edu-section-gap bg-lighten01">
    <div class="container">
        <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
            <span class="pre-title">Popular Courses</span>
            <h2 class="title">Pick A Course To Get Started</h2>
            <span class="shape-line"><i class="icon-19"></i></span>
        </div>
        <div class="row g-5">
            <!-- Start Single Course  -->
            <div class="col-md-6 col-xl-3" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-course course-style-1 hover-button-bg-white">
                    <div class="inner">
                        <div class="thumbnail">
                            <a href="course-details.html">
                                <img src="assets/images/course/course-07.jpg" alt="Course Meta">
                            </a>
                            <div class="time-top">
                                <span class="duration"><i class="icon-61"></i>4 Weeks</span>
                            </div>
                        </div>
                        <div class="content">
                            <span class="course-level">Advanced</span>
                            <h6 class="title">
                                <a href="#">Starting SEO as your Home Based Business</a>
                            </h6>
                            <div class="course-rating">
                                <div class="rating">
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                </div>
                                <span class="rating-count">(4.9 /8 Rating)</span>
                            </div>
                            <div class="course-price">$49.00</div>
                            <ul class="course-meta">
                                <li><i class="icon-24"></i>13 Lessons</li>
                                <li><i class="icon-25"></i>28 Students</li>
                            </ul>
                        </div>
                    </div>
                    <div class="course-hover-content-wrapper">
                        <button class="wishlist-btn"><i class="icon-22"></i></button>
                    </div>
                    <div class="course-hover-content">
                        <div class="content">
                            <button class="wishlist-btn"><i class="icon-22"></i></button>
                            <span class="course-level">Advanced</span>
                            <h6 class="title">
                                <a href="course-details.html">Starting SEO as your Home Based Business</a>
                            </h6>
                            <div class="course-rating">
                                <div class="rating">
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                </div>
                                <span class="rating-count">(4.9 /8 Rating)</span>
                            </div>
                            <div class="course-price">$49.00</div>
                            <p>Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod tempor.</p>
                            <ul class="course-meta">
                                <li><i class="icon-24"></i>13 Lessons</li>
                                <li><i class="icon-25"></i>28 Students</li>
                            </ul>
                            <a href="course-details.html" class="edu-btn btn-secondary btn-small">Enrolled <i class="icon-4"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Course  -->
            <!-- Start Single Course  -->
            <div class="col-md-6 col-xl-3" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-course course-style-1 hover-button-bg-white">
                    <div class="inner">
                        <div class="thumbnail">
                            <a href="course-details.html">
                                <img src="assets/images/course/course-04.jpg" alt="Course Meta">
                            </a>
                            <div class="time-top">
                                <span class="duration"><i class="icon-61"></i>3 Weeks</span>
                            </div>
                        </div>
                        <div class="content">
                            <span class="course-level">Beginner</span>
                            <h6 class="title">
                                <a href="#">Java Programming Masterclass for Software Developers</a>
                            </h6>
                            <div class="course-rating">
                                <div class="rating">
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                </div>
                                <span class="rating-count">(5.0 /7 Rating)</span>
                            </div>
                            <div class="course-price">$29.00</div>
                            <ul class="course-meta">
                                <li><i class="icon-24"></i>8 Lessons</li>
                                <li><i class="icon-25"></i>20 Students</li>
                            </ul>
                        </div>
                    </div>
                    <div class="course-hover-content-wrapper">
                        <button class="wishlist-btn"><i class="icon-22"></i></button>
                    </div>
                    <div class="course-hover-content">
                        <div class="content">
                            <button class="wishlist-btn"><i class="icon-22"></i></button>
                            <span class="course-level">Beginner</span>
                            <h6 class="title">
                                <a href="course-details.html">Java Programming Masterclass for Software Developers</a>
                            </h6>
                            <div class="course-rating">
                                <div class="rating">
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                </div>
                                <span class="rating-count">(5.0 /7 Rating)</span>
                            </div>
                            <div class="course-price">$29.00</div>
                            <p>Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod tempor.</p>
                            <ul class="course-meta">
                                <li><i class="icon-24"></i>8 Lessons</li>
                                <li><i class="icon-25"></i>20 Students</li>
                            </ul>
                            <a href="course-details.html" class="edu-btn btn-secondary btn-small">Enrolled <i class="icon-4"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Course  -->
            <!-- Start Single Course  -->
            <div class="col-md-6 col-xl-3" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-course course-style-1 hover-button-bg-white">
                    <div class="inner">
                        <div class="thumbnail">
                            <a href="course-details.html">
                                <img src="assets/images/course/course-05.jpg" alt="Course Meta">
                            </a>
                            <div class="time-top">
                                <span class="duration"><i class="icon-61"></i>8 Weeks</span>
                            </div>
                        </div>
                        <div class="content">
                            <span class="course-level">Advanced</span>
                            <h6 class="title">
                                <a href="#">Building A Better World One Student At A Time</a>
                            </h6>
                            <div class="course-rating">
                                <div class="rating">
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                </div>
                                <span class="rating-count">(4.8 /9 Rating)</span>
                            </div>
                            <div class="course-price">$35.00</div>
                            <ul class="course-meta">
                                <li><i class="icon-24"></i>32 Lessons</li>
                                <li><i class="icon-25"></i>18 Students</li>
                            </ul>
                        </div>
                    </div>
                    <div class="course-hover-content-wrapper">
                        <button class="wishlist-btn"><i class="icon-22"></i></button>
                    </div>
                    <div class="course-hover-content">
                        <div class="content">
                            <button class="wishlist-btn"><i class="icon-22"></i></button>
                            <span class="course-level">Advanced</span>
                            <h6 class="title">
                                <a href="course-details.html">Building A Better World One Student At A Time</a>
                            </h6>
                            <div class="course-rating">
                                <div class="rating">
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                </div>
                                <span class="rating-count">(4.8 /9 Rating)</span>
                            </div>
                            <div class="course-price">$29.00</div>
                            <p>Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod tempor.</p>
                            <ul class="course-meta">
                                <li><i class="icon-24"></i>35 Lessons</li>
                                <li><i class="icon-25"></i>18 Students</li>
                            </ul>
                            <a href="course-details.html" class="edu-btn btn-secondary btn-small">Enrolled <i class="icon-4"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Course  -->
            <!-- Start Single Course  -->
            <div class="col-md-6 col-xl-3" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-course course-style-1 hover-button-bg-white">
                    <div class="inner">
                        <div class="thumbnail">
                            <a href="course-details.html">
                                <img src="assets/images/course/course-06.jpg" alt="Course Meta">
                            </a>
                            <div class="time-top">
                                <span class="duration"><i class="icon-61"></i>6 Weeks</span>
                            </div>
                        </div>
                        <div class="content">
                            <span class="course-level">Intermediate</span>
                            <h6 class="title">
                                <a href="#">Master Your Personal Brand Like a Marketing Pro</a>
                            </h6>
                            <div class="course-rating">
                                <div class="rating">
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                </div>
                                <span class="rating-count">(4.7 /5 Rating)</span>
                            </div>
                            <div class="course-price">$49.00</div>
                            <ul class="course-meta">
                                <li><i class="icon-24"></i>15 Lessons</li>
                                <li><i class="icon-25"></i>12 Students</li>
                            </ul>
                        </div>
                    </div>
                    <div class="course-hover-content-wrapper">
                        <button class="wishlist-btn"><i class="icon-22"></i></button>
                    </div>
                    <div class="course-hover-content">
                        <div class="content">
                            <button class="wishlist-btn"><i class="icon-22"></i></button>
                            <span class="course-level">Intermediate</span>
                            <h6 class="title">
                                <a href="course-details.html">Master Your Personal Brand Like a Marketing Pro</a>
                            </h6>
                            <div class="course-rating">
                                <div class="rating">
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                    <i class="icon-23"></i>
                                </div>
                                <span class="rating-count">(4.7 /5 Rating)</span>
                            </div>
                            <div class="course-price">$49.00</div>
                            <p>Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod tempor.</p>
                            <ul class="course-meta">
                                <li><i class="icon-24"></i>15 Lessons</li>
                                <li><i class="icon-25"></i>12 Students</li>
                            </ul>
                            <a href="course-details.html" class="edu-btn btn-secondary btn-small">Enrolled <i class="icon-4"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Course  -->
        </div>
        <div class="course-view-all" data-sal-delay="150" data-sal="slide-up" data-sal-duration="1200">
            <a href="course-one.html" class="edu-btn">Browse more courses <i class="icon-4"></i></a>
        </div>
    </div>
</div>
<!-- End Course Area -->
<!--=====================================-->
<!--=       CounterUp Area Start      	=-->
<!--=====================================-->
<div class="counterup-area-2">
    <div class="container">
        <div class="row g-5 justify-content-center">
            <div class="col-lg-8">
                <div class="counterup-box-wrap">
                    <div class="counterup-box counterup-box-1">
                        <div class="edu-counterup counterup-style-2">
                            <h2 class="counter-item count-number primary-color">
                                <span class="odometer" data-odometer-final="45.2">.</span><span>K</span>
                            </h2>
                            <h6 class="title">Student Enrolled</h6>
                        </div>
                        <div class="edu-counterup counterup-style-2">
                            <h2 class="counter-item count-number secondary-color">
                                <span class="odometer" data-odometer-final="32.4">.</span><span>K</span>
                            </h2>
                            <h6 class="title">Class Completed</h6>
                        </div>
                    </div>
                    <div class="counterup-box counterup-box-2">
                        <div class="edu-counterup counterup-style-2">
                            <h2 class="counter-item count-number extra05-color">
                                <span class="odometer" data-odometer-final="354">.</span><span>+</span>
                            </h2>
                            <h6 class="title">Top Instructors</h6>
                        </div>
                        <div class="edu-counterup counterup-style-2">
                            <h2 class="counter-item count-number extra02-color">
                                <span class="odometer" data-odometer-final="99.9">.</span><span>%</span>
                            </h2>
                            <h6 class="title">Satisfaction Rate</h6>
                        </div>
                    </div>
                    <ul class="shape-group">
                        <li class="shape-1 scene">
                            <img data-depth="-2" src="assets/images/about/shape-13.png" alt="Shape">
                        </li>
                        <li class="shape-2">
                            <img class="rotateit" src="assets/images/counterup/shape-02.png" alt="Shape">
                        </li>
                        <li class="shape-3 scene">
                            <img data-depth="1.6" src="assets/images/counterup/shape-04.png" alt="Shape">
                        </li>
                        <li class="shape-4 scene">
                            <img data-depth="-1.6" src="assets/images/counterup/shape-05.png" alt="Shape">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=====================================-->
<!--=       Testimonial Area Start      =-->
<!--=====================================-->
<!-- Start Testimonial Area  -->
<div class="testimonial-area-1 section-gap-equal">
    <div class="container">
        <div class="row g-lg-5">
            <div class="col-lg-5">
                <div class="testimonial-heading-area">
                    <div class="section-title section-left" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                        <span class="pre-title">Testimonials</span>
                        <h2 class="title">What Our Students Have To Say</h2>
                        <span class="shape-line"><i class="icon-19"></i></span>
                        <p>Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod tempor incididunt labore dolore magna aliquaenim ad minim.</p>
                        <a href="#" class="edu-btn btn-large">View All<i class="icon-4"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="home-one-testimonial-activator swiper ">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-grid">
                                <div class="thumbnail">
                                    <img src="assets/images/testimonial/testimonial-01.png" alt="Testimonial">
                                    <span class="qoute-icon"><i class="icon-26"></i></span>

                                </div>
                                <div class="content">
                                    <p>Lorem ipsum dolor amet consec tur elit adicing sed do usmod zx tempor enim minim veniam quis nostrud exer citation.</p>
                                    <div class="rating-icon">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                    </div>
                                    <h5 class="title">Ray Sanchez</h5>
                                    <span class="subtitle">Student</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-grid">
                                <div class="thumbnail">
                                    <img src="assets/images/testimonial/testimonial-02.png" alt="Testimonial">
                                    <span class="qoute-icon"><i class="icon-26"></i></span>

                                </div>
                                <div class="content">
                                    <p>Lorem ipsum dolor amet consec tur elit adicing sed do usmod zx tempor enim minim veniam quis nostrud exer citation.</p>
                                    <div class="rating-icon">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                    </div>
                                    <h5 class="title">Thomas Lopez</h5>
                                    <span class="subtitle">Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-grid">
                                <div class="thumbnail">
                                    <img src="assets/images/testimonial/testimonial-03.png" alt="Testimonial">
                                    <span class="qoute-icon"><i class="icon-26"></i></span>

                                </div>
                                <div class="content">
                                    <p>Lorem ipsum dolor amet consec tur elit adicing sed do usmod zx tempor enim minim veniam quis nostrud exer citation.</p>
                                    <div class="rating-icon">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                    </div>
                                    <h5 class="title">Amber Page</h5>
                                    <span class="subtitle">Developer</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-grid">
                                <div class="thumbnail">
                                    <img src="assets/images/testimonial/testimonial-04.png" alt="Testimonial">
                                    <span class="qoute-icon"><i class="icon-26"></i></span>

                                </div>
                                <div class="content">
                                    <p>Lorem ipsum dolor amet consec tur elit adicing sed do usmod zx tempor enim minim veniam quis nostrud exer citation.</p>
                                    <div class="rating-icon">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                    </div>
                                    <h5 class="title">Robert Tapp</h5>
                                    <span class="subtitle">Content Creator</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Testimonial Area  -->
<!--=====================================-->
<!--=      Call To Action Area Start   	=-->
<!--=====================================-->
<!-- Start CTA Area  -->
<div class="home-one-cta-two cta-area-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="home-one-cta edu-cta-box bg-image">
                    <div class="inner">
                        <div class="content text-md-end">
                            <span class="subtitle">Get In Touch:</span>
                            <h3 class="title"><a href="mailto:info@edublink">info@edublink</a></h3>
                        </div>
                        <div class="sparator">
                            <span>or</span>
                        </div>
                        <div class="content">
                            <span class="subtitle">Call Us Via:</span>
                            <h3 class="title"><a href="tel:+011235641231">+01 123 5641 231</a></h3>
                        </div>
                    </div>
                    <ul class="shape-group">
                        <li class="shape-01 scene">
                            <img data-depth="2" src="assets/images/cta/shape-06.png" alt="shape">
                        </li>
                        <li class="shape-02 scene">
                            <img data-depth="-2" src="assets/images/cta/shape-12.png" alt="shape">
                        </li>
                        <li class="shape-03 scene">
                            <img data-depth="-3" src="assets/images/cta/shape-04.png" alt="shape">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End CTA Area  -->
<!--=====================================-->
<!--=      		Team Area Start   		=-->
<!--=====================================-->
<!-- Start Team Area  -->
<div class="edu-team-area team-area-1 gap-tb-text">
    <div class="container">
        <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
            <span class="pre-title">Our Team</span>
            <h2 class="title">Course Instructors</h2>
            <span class="shape-line"><i class="icon-19"></i></span>
        </div>
        <div class="row g-5">


            <?php
            $team_data = SelectData('our_team', "ORDER BY tid DESC;");
            while ($teams = $team_data->fetch_object()) { ?>

                <!-- Start Instructor Grid  -->
                <div class="col-lg-3 col-sm-6 col-12" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-team-grid team-style-1">
                        <div class="inner">
                            <div class="thumbnail-wrap">
                                <div class="thumbnail">
                                    <a href="team-details.html">
                                        <img src="assets/images/team/<?= $teams->profile_photos ?>" alt="team images">
                                    </a>
                                </div>
                                <ul class="team-share-info">
                                    <li><a href="#"><i class="icon-share-alt"></i></a></li>
                                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                                </ul>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="team-details.php?id=<?= $teams->tname ?>"><?= $teams->tname ?></a></h5>
                                <span class="designation"><?= $teams->dasinaton ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Instructor Grid  -->
            <?php } ?>

        </div>
    </div>
</div>
<!-- End Team Area  -->
<!--=====================================-->
<!--=      CTA Banner Area Start   		=-->
<!--=====================================-->
<!-- Start Ad Banner Area  -->
<div class="edu-cta-banner-area home-one-cta-wrapper bg-image">
    <div class="container">
        <div class="edu-cta-banner">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <h2 class="title">Get Your Quality Skills <span class="color-secondary">Certificate</span> Through EduBlink</h2>
                        <a href="contact-us.html" class="edu-btn">Get started now <i class="icon-4"></i></a>
                    </div>
                </div>
            </div>
            <ul class="shape-group">
                <li class="shape-01 scene">
                    <img data-depth="2.5" src="assets/images/cta/shape-10.png" alt="shape">
                </li>
                <li class="shape-02 scene">
                    <img data-depth="-2.5" src="assets/images/cta/shape-09.png" alt="shape">
                </li>
                <li class="shape-03 scene">
                    <img data-depth="-2" src="assets/images/cta/shape-08.png" alt="shape">
                </li>
                <li class="shape-04 scene">
                    <img data-depth="2" src="assets/images/about/shape-13.png" alt="shape">
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Ad Banner Area  -->



<!--=====================================-->
<!--=       Course Area Start      		=-->
<!--=====================================-->
<!-- Start Course Area  -->
<div class="edu-course-area course-area-1 edu-section-gap bg-lighten01">
    <div class="container">
        <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
            <span class="pre-title">Study Abroad</span>
            <h2 class="title">Select Your Dream Destination</h2>
            <span class="shape-line"><i class="icon-19"></i></span>
        </div>
        <div class="row g-5">

            <?php
            $teab_data = SelectData('aa_our_services', "WHERE catg_id='6'");
            while ($cours = $teab_data->fetch_object()) { ?>
                <!-- Start Single Course  -->
                <div class="col-md-4 col-xl-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-course course-style-1 hover-button-bg-white">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="course-details.html">
                                    <img src="assets/images/course/<?= $cours->image ?>" alt="Course Meta">
                                </a>
                            </div>
                            <div class="content">
                                <h4 class="title">
                                    <a href="#"><?= $cours->title ?></a>
                                </h4>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <!-- End Single Course  -->
        </div>
        <div class="course-view-all" data-sal-delay="150" data-sal="slide-up" data-sal-duration="1200">
            <a href="course-one.html" class="edu-btn">Browse more courses <i class="icon-4"></i></a>
        </div>
    </div>
</div>
<!-- End Course Area -->





<!--=====================================-->
<!--=      		Brand Area Start   		=-->
<!--=====================================-->
<!-- Start Brand Area  -->
<div class="edu-brand-area brand-area-1 gap-top-equal">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="brand-section-heading">
                    <div class="section-title section-left" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <span class="pre-title">Our Partners</span>
                        <h2 class="title">Learn with Our Partners</h2>
                        <span class="shape-line"><i class="icon-19"></i></span>
                        <p>Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod tempor incididunt.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="brand-grid-wrap">
                    <?php
                    $data = SelectData('our_clients', 'limit 8');
                    while ($row = $data->fetch_object()) { ?>
                        <div class="brand-grid">
                            <img src="assets/images/brand/<?= $row->client_logo ?>" alt="<?= $row->client_logo ?>">
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Brand Area  -->
<!--=====================================-->
<!--=      		Blog Area Start   		=-->
<!--=====================================-->
<!-- Start Blog Area  -->
<div class="edu-blog-area blog-area-1 edu-section-gap">
    <div class="container">
        <div class="section-title section-center" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
            <span class="pre-title">Latest Articles</span>
            <h2 class="title">Get News with English BaseCamp</h2>
            <span class="shape-line"><i class="icon-19"></i></span>
        </div>
        <div class="row g-5">

            <?php
            $blog_data = SelectData('blog', "WHERE resources='0' ORDER BY blog_id DESC limit 3");
            while ($blogs = $blog_data->fetch_object()) { ?>
                <!-- Start Blog Grid  -->
                <div class="col-lg-4 col-md-6 col-12" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-blog blog-style-1">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="blog-details.html">
                                    <img src="assets/images/blog/<?= $blogs->blog_image ?>" alt="<?= $blogs->blog_title ?>">
                                </a>
                            </div>
                            <div class="content position-top">
                                <div class="read-more-btn">
                                    <a class="btn-icon-round" href="blog-details.html"><i class="icon-4"></i></a>
                                </div>
                                <div class="category-wrap">
                                    <a href="#" class="blog-category"><?= postcate('blog_cate_title', $blogs->blog_catagory) ?></a>
                                </div>
                                <h5 class="title"><a href="blog-details.php"><?= $blogs->blog_title ?></a></h5>
                                <ul class="blog-meta">
                                    <li><i class="icon-27"></i><?= date('F d, Y', strtotime($blogs->blog_date_time)) ?></li>
                                    <!-- <li><i class="icon-28"></i>Com 09</li> -->
                                </ul>
                                <p><?php
                                    $blog_content = html_entity_decode($blogs->blog_text);
                                    $blog_text = strip_tags($blog_content);
                                    echo mb_strimwidth($blog_text, 0, 70, ".");
                                    ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Blog Grid  -->
            <?php } ?>




        </div>
    </div>
    <ul class="shape-group">
        <li class="shape-1 scene">
            <img data-depth="-1.4" src="assets/images/about/shape-02.png" alt="Shape">
        </li>
        <li class="shape-2 scene">
            <span data-depth="2.5"></span>
        </li>
        <li class="shape-3 scene">
            <img data-depth="-2.3" src="assets/images/counterup/shape-05.png" alt="Shape">
        </li>
    </ul>
</div>
<!-- End Blog Area  -->

<!--=====================================-->
<!--=        Footer Area Start       	=-->
<!--=====================================-->
<?php require_once "layout/footer.php" ?>