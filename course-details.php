<?php require_once "layout/header.php";

if (isset($_GET['id'])) {
    $b_id = htmlspecialchars($_GET['id']);
    $id = html_entity_decode($b_id);
    $blog_data = SelectData('blog', "where blog_title='{$id}' ");
    $$blogs = $blog_data->fetch_object();
?>

    <div class="edu-breadcrumb-area breadcrumb-style-3">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="edu-breadcrumb">
                    <li class="breadcrumb-item"><a href="index-one.html">Home</a></li>
                    <li class="separator"><i class="icon-angle-right"></i></li>
                    <li class="breadcrumb-item"><a href="course-one.html">Courses</a></li>
                    <li class="separator"><i class="icon-angle-right"></i></li>
                    <li class="breadcrumb-item active" aria-current="page">Course Details</li>
                </ul>
                <div class="page-title">
                    <h1 class="title"><?= $blogs->blog_title ?></h1>
                </div>
                <ul class="course-meta">
                    <li><i class="icon-58"></i>by Edward Norton</li>
                    <li><i class="icon-59"></i>English</li>
                    <li class="course-rating">
                        <div class="rating">
                            <i class="icon-23"></i>
                            <i class="icon-23"></i>
                            <i class="icon-23"></i>
                            <i class="icon-23"></i>
                            <i class="icon-23"></i>
                        </div>
                        <span class="rating-count">(720 Rating)</span>
                    </li>
                </ul>
            </div>
        </div>
        <ul class="shape-group">
            <li class="shape-1">
                <span></span>
            </li>
            <li class="shape-2 scene"><img data-depth="2" src="assets/images/about/shape-13.png" alt="shape"></li>
            <li class="shape-3 scene"><img data-depth="-2" src="assets/images/about/shape-15.png" alt="shape"></li>
            <li class="shape-4">
                <span></span>
            </li>
            <li class="shape-5 scene"><img data-depth="2" src="assets/images/about/shape-07.png" alt="shape"></li>
        </ul>
    </div>

    <!--=====================================-->
    <!--=     Courses Details Area Start    =-->
    <!--=====================================-->
    <section class="edu-section-gap course-details-area">
        <div class="container">
            <div class="row row--30">
                <div class="col-lg-8">
                    <div class="course-details-content">

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                <div class="course-tab-content">
                                    <div class="course-overview">
                                        <?php echo html_entity_decode($blogs->blog_text); ?>
                                    </div>
                                </div>
                            </div>



                            <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                <div class="course-tab-content">
                                    <div class="course-review">
                                        <h3 class="heading-title">Course Rating</h3>
                                        <p>5.00 average rating based on 7 rating</p>
                                        <div class="row g-0 align-items-center">
                                            <div class="col-sm-4">
                                                <div class="rating-box">
                                                    <div class="rating-number">5.0</div>
                                                    <div class="rating">
                                                        <i class="icon-23"></i>
                                                        <i class="icon-23"></i>
                                                        <i class="icon-23"></i>
                                                        <i class="icon-23"></i>
                                                        <i class="icon-23"></i>
                                                    </div>
                                                    <span>(7 Review)</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="review-wrapper">

                                                    <div class="single-progress-bar">
                                                        <div class="rating-text">
                                                            5 <i class="icon-23"></i>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="rating-value">7</span>
                                                    </div>

                                                    <div class="single-progress-bar">
                                                        <div class="rating-text">
                                                            4 <i class="icon-23"></i>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="rating-value">0</span>
                                                    </div>

                                                    <div class="single-progress-bar">
                                                        <div class="rating-text">
                                                            4 <i class="icon-23"></i>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="rating-value">0</span>
                                                    </div>

                                                    <div class="single-progress-bar">
                                                        <div class="rating-text">
                                                            4 <i class="icon-23"></i>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="rating-value">0</span>
                                                    </div>

                                                    <div class="single-progress-bar">
                                                        <div class="rating-text">
                                                            4 <i class="icon-23"></i>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="rating-value">0</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="course-sidebar-3 sidebar-top-position">
                        <div class="edu-course-widget widget-course-summery">
                            <div class="inner">
                                <div class="thumbnail">
                                    <img src="assets/images/course/course-46.jpg" alt="Courses">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=     More Courses Area Start    =-->
    <!--=====================================-->
    <!-- Start Course Area  -->
    <div class="gap-bottom-equal">
        <div class="container">
            <div class="section-title section-left" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <h3 class="title">More Courses for You</h3>
            </div>
            <div class="row g-5">
                <!-- Start Single Course  -->
                <div class="col-12 col-xl-4 col-lg-6 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-course course-style-5 inline" data-tipped-options="inline: 'inline-tooltip-1'">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="course-details.html">
                                    <img src="assets/images/course/course-15.jpg" alt="Course Meta">
                                </a>
                            </div>
                            <div class="content">
                                <div class="course-price price-round">$30</div>
                                <span class="course-level">Cooking</span>
                                <h5 class="title">
                                    <a href="course-details.html">Healthy Sushi Roll - Japanese Popular Cooking Class</a>
                                </h5>
                                <div class="course-rating">
                                    <div class="rating">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                    </div>
                                    <span class="rating-count">(5)</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectur elit sed eiusmod ex tempor.</p>
                                <ul class="course-meta">
                                    <li><i class="icon-24"></i>15 Lessons</li>
                                    <li><i class="icon-25"></i>42 Students</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div id="inline-tooltip-1" style="display:none">
                        <div class="course-layout-five-tooltip-content">
                            <div class="content">
                                <span class="course-level">Cooking</span>
                                <h5 class="title">
                                    <a href="course-details.html">Healthy Sushi Roll - Japanese Popular Cooking Class</a>
                                </h5>
                                <div class="course-rating">
                                    <div class="rating">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                    </div>
                                    <span class="rating-count">(5)</span>
                                </div>
                                <ul class="course-meta">
                                    <li>15 Lessons</li>
                                    <li>35 hrs</li>
                                    <li>Beginner</li>
                                </ul>
                                <div class="course-feature">
                                    <h6 class="title">What You’ll Learn?</h6>
                                    <ul>
                                        <li>Professional Japanese cooking from beginners to experts</li>
                                        <li>Will be able to cook authentic Italian recipes in their own kitchen</li>
                                        <li>Understand the HOW of cooking, before thinking of the WHAT to cook.</li>
                                    </ul>
                                </div>
                                <div class="button-group">
                                    <a href="#" class="edu-btn btn-medium">Add to Cart</a>
                                    <a href="#" class="wishlist-btn btn-outline-dark"><i class="icon-22"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Course  -->

                <!-- Start Single Course  -->
                <div class="col-12 col-xl-4 col-lg-6 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-course course-style-5 inline" data-tipped-options="inline: 'inline-tooltip-2'">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="course-details.html">
                                    <img src="assets/images/course/course-16.jpg" alt="Course Meta">
                                </a>
                            </div>
                            <div class="content">
                                <div class="course-price price-round">$40</div>
                                <span class="course-level">Cooking</span>
                                <h5 class="title">
                                    <a href="course-details.html">Nutrition Kitchen - Basics of Cooking for Busy People</a>
                                </h5>
                                <div class="course-rating">
                                    <div class="rating">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                    </div>
                                    <span class="rating-count">(4.8)</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectur elit sed eiusmod ex tempor.</p>
                                <ul class="course-meta">
                                    <li><i class="icon-24"></i>35 Lessons</li>
                                    <li><i class="icon-25"></i>80 Students</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div id="inline-tooltip-2" style="display:none">
                        <div class="course-layout-five-tooltip-content">
                            <div class="content">
                                <span class="course-level">Cooking</span>
                                <h5 class="title">
                                    <a href="course-details.html">Nutrition Kitchen - Basics of Cooking for Busy People</a>
                                </h5>
                                <div class="course-rating">
                                    <div class="rating">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                    </div>
                                    <span class="rating-count">(4.8)</span>
                                </div>
                                <ul class="course-meta">
                                    <li>35 Lessons</li>
                                    <li>28 hrs</li>
                                    <li>Advanced</li>
                                </ul>
                                <div class="course-feature">
                                    <h6 class="title">What You’ll Learn?</h6>
                                    <ul>
                                        <li>Prepare a huge variety of simple, delicious, healthy recipes.</li>
                                        <li>Professional Indian cooking from beginners to experts</li>
                                        <li>Serve delicious and healthy meals for your loved ones.</li>
                                    </ul>
                                </div>
                                <div class="button-group">
                                    <a href="#" class="edu-btn btn-medium">Add to Cart</a>
                                    <a href="#" class="wishlist-btn btn-outline-dark"><i class="icon-22"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Course  -->

                <!-- Start Single Course  -->
                <div class="col-12 col-xl-4 col-lg-6 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-course course-style-5 inline" data-tipped-options="inline: 'inline-tooltip-3'">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="course-details.html">
                                    <img src="assets/images/course/course-17.jpg" alt="Course Meta">
                                </a>
                            </div>
                            <div class="content">
                                <div class="course-price price-round">$50</div>
                                <span class="course-level">Cooking</span>
                                <h5 class="title">
                                    <a href="course-details.html">Vegan Thai Cooking Classes Popular Vegan Recipes</a>
                                </h5>
                                <div class="course-rating">
                                    <div class="rating">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                    </div>
                                    <span class="rating-count">(5)</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectur elit sed eiusmod ex tempor.</p>
                                <ul class="course-meta">
                                    <li><i class="icon-24"></i>8 Lessons</li>
                                    <li><i class="icon-25"></i>20 Students</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div id="inline-tooltip-3" style="display:none">
                        <div class="course-layout-five-tooltip-content">
                            <div class="content">
                                <span class="course-level">Cooking</span>
                                <h5 class="title">
                                    <a href="course-details.html">Vegan Thai Cooking Classes Popular Vegan Recipes</a>
                                </h5>
                                <div class="course-rating">
                                    <div class="rating">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                    </div>
                                    <span class="rating-count">(5)</span>
                                </div>
                                <ul class="course-meta">
                                    <li>8 Lessons</li>
                                    <li>20 hrs</li>
                                    <li>All Levels</li>
                                </ul>
                                <div class="course-feature">
                                    <h6 class="title">What You’ll Learn?</h6>
                                    <ul>
                                        <ul>
                                            <li>Cook much loved recipes like ravioli, pizza and pesto from scratch</li>
                                            <li>Cook better than restaurant Thai food at home</li>
                                            <li>Keep your food safe from harmful bacteria and disease.</li>
                                        </ul>
                                    </ul>
                                </div>
                                <div class="button-group">
                                    <a href="#" class="edu-btn btn-medium">Add to Cart</a>
                                    <a href="#" class="wishlist-btn btn-outline-dark"><i class="icon-22"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Course  -->
            </div>
        </div>
    </div>
    <!-- End Course Area -->



<?php }
require_once "layout/footer.php" ?>