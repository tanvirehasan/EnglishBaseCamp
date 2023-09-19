<?php require_once "view/header_footer/header.php" ?>

<!-- Start Banner Area -->
<div class="rbt-banner-area rbt-banner-7 bg-gradient-1 theme-shape header-transperent-spacer">
    <div class="wrapper w-100">
        <div class="container">
            <!-- PHP  -->
            <?php $data = SelectData('a_slider', '');
            $slider_row = $data->fetch_object(); ?>

            <div class="row g-5 justify-content-between align-items-center">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="content">
                        <div class="inner">
                            <div class="section-title text-start">
                                <span class="subtitle bg-primary-opacity"><?= $slider_row->short_text ?></span>
                            </div>
                            <h1 class="title"><?= $slider_row->slider_title ?></h1>
                            <div class="rbt-like-total">
                                <div class="profile-share">
                                    <a href="#" class="avatar" data-tooltip="Mark JOrdan" tabindex="0"><img src="assets/images/testimonial/client-04.png" alt="education"></a>
                                    <a href="#" class="avatar" data-tooltip="Mark" tabindex="0"><img src="assets/images/testimonial/client-05.png" alt="education"></a>
                                    <a href="#" class="avatar" data-tooltip="Jordan" tabindex="0"><img src="assets/images/testimonial/client-06.png" alt="education"></a>
                                    <div class="more-author-text">
                                        <h5 class="total-join-students">Join Over 3000+ Students</h5>
                                        <p class="subtitle">Have a new ideas every week.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="rbt-button-group justify-content-start mt--30">
                                <a class="rbt-btn btn-gradient rbt-switch-btn" href="<?= $slider_row->btn_url ?>">
                                    <span data-text="Sign Up Now"><?= $slider_row->btn_text ?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="thumbnail-wrapper">
                        <div class="thumbnail text-end">
                            <img src="assets/images/banner/<?= $slider_row->image_file ?>" alt="Education Images">
                        </div>
                        <div class="card-info bounce-slide">
                            <div class="inner">
                                <div class="name">Hillery. <span>/ USA</span></div>
                                <div class="rating-wrapper d-block d-sm-flex">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span>(Google Review)</span>
                                </div>
                            </div>
                            <div class="notify-icon">
                                <img src="assets/images/testimonial/client-12.png" alt="Client Images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Banner Area -->

<div class="rbt-categories-area bg-color-extra2 rbt-section-gap">
    <div class="container">
        <div class="row g-5">

            <?php
            $teab_data = SelectData('catagory', "");
            while ($catagorys = $teab_data->fetch_object()) { ?>
                <!-- Start Category Box Layout  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="rbt-cat-box rbt-cat-box-1 variation-3 text-center">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="course-filter-one-toggle.html">
                                    <img src="assets/images/category/image/<?= $catagorys->thamnil ?>" alt="Category Images">
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="services.php?title=<?= $catagorys->cat_title ?>"><?= $catagorys->cat_title ?></a></h5>
                                <p class="description"><?php echo html_entity_decode($catagorys->short_text) ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Category Box Layout  -->
            <?php } ?>



        </div>
    </div>
</div>

<!-- Start Card Style -->
<div class="rbt-course-card-area rbt-section-gap bg-color-white">
    <div class="container">
        <div class="row align-items-center mb--60">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <span class="subtitle bg-pink-opacity">Our Language Courses</span>
                    <h2 class="title">Language Courses</h2>
                    <p class="description has-medium-font-size mt--20">Language Academy Courses?</p>
                </div>
            </div>
        </div>
        <!-- Start Card Area -->
        <div class="row g-5">

            <?php
            $teab_data = SelectData('aa_our_services', " limit 3");
            while ($service = $teab_data->fetch_object()) { ?>

                <!-- Start Single Card  -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-card variation-03 rbt-hover">
                        <div class="rbt-card-img">
                            <a class="thumbnail-link" href="course-details.html">
                                <img src="assets/images/course/<?= $service->image ?>" alt="Card image">
                                <span class="rbt-btn btn-white icon-hover btn-md">
                                    <span class="btn-text">Read More</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="course-details.html"><?= $service->title ?></a>
                            </h5>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="course-details.html"><i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg">
                                            <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                                <path d="M10.614 0l5.629 5.629-5.63 5.629" />
                                                <path stroke-linecap="square" d="M.663 5.572h14.594" />
                                            </g>
                                        </svg></i></a>
                            </div>
                        </div>
                        <div class="card-information">
                            <div class="card-flag">
                                <img src="assets/images/shape/united-kingdom.svg" alt="united-kingdom">
                            </div>
                            <div class="card-count">21 programs</div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->
            <?php } ?>


        </div>
        <!-- End Card Area -->
    </div>
</div>
<!-- End Card Style -->

<div class="rbt-counterup-area rbt-section-gapBottom bg-gradient-1">
    <div class="container">
        <div class="row mb--60">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <span class="subtitle bg-primary-opacity">Why Choose Us</span>
                    <h2 class="title">Why Choose Histudy</h2>
                    <p class="description has-medium-font-size mt--20 mb--0">Language Academic?</p>
                </div>
            </div>
        </div>
        <div class="row g-5 hanger-line">
            <!-- Start Single Counter  -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="rbt-counterup rbt-hover-03 border-bottom-gradient">
                    <div class="top-circle-shape"></div>
                    <div class="inner">
                        <div class="rbt-round-icon">
                            <img src="assets/images/icons/counter-01.png" alt="Icons Images">
                        </div>
                        <div class="content">
                            <h3 class="counter"><span class="odometer" data-count="500">00</span>
                            </h3>
                            <span class="subtitle">Learners &amp; counting</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Counter  -->

            <!-- Start Single Counter  -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--60 mt_md--30 mt_sm--30 mt_mobile--60">
                <div class="rbt-counterup rbt-hover-03 border-bottom-gradient">
                    <div class="top-circle-shape"></div>
                    <div class="inner">
                        <div class="rbt-round-icon">
                            <img src="assets/images/icons/counter-02.png" alt="Icons Images">
                        </div>
                        <div class="content">
                            <h3 class="counter"><span class="odometer" data-count="800">00</span>
                            </h3>
                            <span class="subtitle">Courses & Video</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Counter  -->

            <!-- Start Single Counter  -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt_md--60 mt_sm--60">
                <div class="rbt-counterup rbt-hover-03 border-bottom-gradient">
                    <div class="top-circle-shape"></div>
                    <div class="inner">
                        <div class="rbt-round-icon">
                            <img src="assets/images/icons/counter-03.png" alt="Icons Images">
                        </div>
                        <div class="content">
                            <h3 class="counter"><span class="odometer" data-count="1000">00</span>
                            </h3>
                            <span class="subtitle">Certified Students</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Counter  -->

            <!-- Start Single Counter  -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--60 mt_md--30 mt_sm--30 mt_mobile--60">
                <div class="rbt-counterup rbt-hover-03 border-bottom-gradient">
                    <div class="top-circle-shape"></div>
                    <div class="inner">
                        <div class="rbt-round-icon">
                            <img src="assets/images/icons/counter-04.png" alt="Icons Images">
                        </div>
                        <div class="content">
                            <h3 class="counter"><span class="odometer" data-count="100">00</span>
                            </h3>
                            <span class="subtitle">Registered Enrolls</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Counter  -->
        </div>
    </div>
</div>

<div class="rbt-about-area about-style-1 rbt-section-gapTop pb--100 pb_md--80 pb_sm--80 bg-color-white">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <img src="assets/images/about/about-03.png" alt="Education Images">
            </div>
            <div class="col-lg-6">
                <div class="inner pl--50 pl_sm--0 pl_md--0">
                    <div class="section-title text-start">
                        <span class="subtitle bg-coral-opacity">Know About Us</span>
                        <h2 class="title">English & Global Study Base Camp Pvt Ltd</h2>
                    </div>

                    <!-- <p class="description mt--30"></p> -->
                    <?php
                    $postcontent = html_entity_decode(About_Us('about_text'));
                    $content = strip_tags($postcontent);
                    echo mb_strimwidth($content, 0, 600, "...");
                    ?>

                    <!-- Start Feature List  -->

                    <!-- End Feature List  -->
                    <div class="about-btn mt--40">
                        <a class="rbt-btn btn-gradient hover-icon-reverse" href="aboutus.php">
                            <span class="icon-reverse-wrapper">
                                <span class="btn-text">More About Us</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="rbt-countdown-area bg_image bg_image--6 bg_image_fixed rbt-section-gap" data-black-overlay="5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="inner">
                    <div class="section-title text-start">
                        <span class="subtitle bg-white-opacity">Why Choose Us</span>
                        <h2 class="title color-white">Free Resources Learning English for Beginner</h2>
                        <p class="description has-medium-font-size mt--20 mb--0 color-white opacity-7">Learning new technology, data sience, university, communicate to global world and build a bright future with our histudy.</p>
                    </div>
                    <div class="countdown-style-1 mt--50">
                        <div class="countdown" data-date="2025-12-30">
                            <div class="countdown-container days">
                                <span class="countdown-value">87</span>
                                <span class="countdown-heading">Days</span>
                            </div>
                            <div class="countdown-container hours">
                                <span class="countdown-value">23</span>
                                <span class="countdown-heading">Hours</span>
                            </div>
                            <div class="countdown-container minutes">
                                <span class="countdown-value">38</span>
                                <span class="countdown-heading">Minutes</span>
                            </div>
                            <div class="countdown-container seconds">
                                <span class="countdown-value">27</span>
                                <span class="countdown-heading">Seconds</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="rbt-contact-form contact-form-style-1 w-100">
                    <div class="section-title text-start">
                        <span class="subtitle bg-primary-opacity">EDUCATION FOR EVERYONE</span>
                    </div>
                    <h3 class="title">Sign Up for Free Resources</h3>
                    <form id="contact-form" class="w-100">
                        <div class="form-group">
                            <input name="con_name" type="text" />
                            <label>Name</label>
                            <span class="focus-border"></span>
                        </div>
                        <div class="form-group">
                            <input name="con_email" type="email">
                            <label>Email</label>
                            <span class="focus-border"></span>
                        </div>
                        <div class="form-group">
                            <input type="text">
                            <label>Phone</label>
                            <span class="focus-border"></span>
                        </div>
                        <div class="form-submit-group mt--40">
                            <button type="submit" class="rbt-btn btn-gradient hover-icon-reverse w-100">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">GET IT NOW</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start Blog Style -->
<div class="rbt-rbt-blog-area rbt-section-gap bg-gradient-1">
    <div class="container">
        <div class="row mb--55 row--30 align-items-end">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <span class="subtitle bg-pink-opacity">Our Posts</span>
                    <h2 class="title">Blog & News</h2>
                    <p class="description has-medium-font-size mt--20">Language Academy Blog.</p>
                </div>
            </div>
        </div>
        <!-- Start Card Area -->
        <div class="row g-5">


            <?php
            $blog_data = SelectData('blog', " ORDER BY blog_id DESC limit 3");
            while ($blogs = $blog_data->fetch_object()) { ?>
                <!-- Start Single Card  -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="rbt-card variation-02 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="blog-details.php?id=<?= $blogs->blog_title ?>">
                                <img src="assets/images/blog/<?= $blogs->blog_image ?>" alt="Card image"> </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="blog-details.php?id=<?= $blogs->blog_title ?>"><?= $blogs->blog_title ?></a></h5>
                            <p class="rbt-card-text">
                                <?php $blog_content = html_entity_decode($blogs->blog_text);
                                $blog_text = strip_tags($blog_content);
                                echo mb_strimwidth($blog_text, 0, 70, "."); ?>
                            </p>

                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="blog-details.html">Learn
                                    More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg">
                                            <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                                <path d="M10.614 0l5.629 5.629-5.63 5.629" />
                                                <path stroke-linecap="square" d="M.663 5.572h14.594" />
                                            </g>
                                        </svg></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->
            <?php } ?>



        </div>
        <!-- End Card Area -->
    </div>
</div>
<!-- End Blog Style -->

<?php require_once "view/header_footer/footer.php" ?>