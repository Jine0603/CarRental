<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Rentaly - Multipurpose Vehicle Car Rental Website Template</title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Rentaly - Multipurpose Vehicle Car Rental Website Template" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="css/mdb.min.css" rel="stylesheet" type="text/css" id="mdb">
    <link href="css/plugins.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/coloring.css" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="wrapper">
        
        <!-- page preloader begin -->
        <div id="de-preloader"></div>
        <!-- page preloader close -->

        <!-- header begin -->
        @if(Auth::check())
            @if(Auth::user()->user_type === 'admin')
                @include('include.header')
            @else
                @include('include.header1')
            @endif
        @else
            @include('include.header')
        @endif
        <!-- header close -->
         
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <!-- section begin -->
            <section id="subheader" class="jarallax text-light">
                <img src="images/background/subheader.jpg" class="jarallax-img" alt="">
                    <div class="center-y relative text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h1>News &amp; Updates</h1>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->

            <section id="section-content" aria-label="section">
                <div class="container">
                    <div class="row gx-5">
                        <div class="col-lg-8">
                            <div class="de-post-type-1">
                                <div class="d-image">
                                    <img alt="" src="images/news-2/pic-blog-1.jpg" class="lazy">
                                </div>
                                <div class="d-content">
                                    <div class="d-meta">
                                        <span class="d-by">By John Smith</span>
                                        <span class="d-date">June 15, 2022</span>
                                        <span class="d-tags">Technology</span>
                                    </div>
                                    <h4><a href="news-single.html">Enjoy Best Travel Experience<span></span></a></h4>
                                    <p>Ex ut dolore laboris pariatur voluptate reprehenderit qui dolore officia voluptate est nulla incididunt in tempor aliqua incididunt cupidatat ut cupidatat qui consectetur cillum id labore sunt id sint magna exercitation enim.</p>
                                    <a href="news-single.html" class="btn-main">Read More</a>
                                </div>
                            </div>
                            
                            <div class="de-post-type-1">
                                <div class="d-image">
                                    <img alt="" src="images/news-2/pic-blog-2.jpg" class="lazy">
                                </div>
                                <div class="d-content">
                                    <div class="d-meta">
                                        <span class="d-by">By John Smith</span>
                                        <span class="d-date">June 15, 2022</span>
                                        <span class="d-tags">Technology</span>
                                    </div>
                                    <h4><a href="news-single.html">The Future of Car Rent<span></span></a></h4>
                                    <p>Ex ut dolore laboris pariatur voluptate reprehenderit qui dolore officia voluptate est nulla incididunt in tempor aliqua incididunt cupidatat ut cupidatat qui consectetur cillum id labore sunt id sint magna exercitation enim.</p>
                                    <a href="news-single.html" class="btn-main">Read More</a>
                                </div>
                            </div>

                            <div class="de-post-type-1">
                                <div class="d-image">
                                    <img alt="" src="images/news-2/pic-blog-3.jpg" class="lazy">
                                </div>
                                <div class="d-content">
                                    <div class="d-meta">
                                        <span class="d-by">By John Smith</span>
                                        <span class="d-date">June 15, 2022</span>
                                        <span class="d-tags">Technology</span>
                                    </div>
                                    <h4><a href="news-single.html">Holiday Tips For Backpacker<span></span></a></h4>
                                    <p>Ex ut dolore laboris pariatur voluptate reprehenderit qui dolore officia voluptate est nulla incididunt in tempor aliqua incididunt cupidatat ut cupidatat qui consectetur cillum id labore sunt id sint magna exercitation enim.</p>
                                    <a href="news-single.html" class="btn-main">Read More</a>
                                </div>
                            </div>

                            <div class="de-post-type-1">
                                <div class="d-image">
                                    <img alt="" src="images/news-2/pic-blog-4.jpg" class="lazy">
                                </div>
                                <div class="d-content">
                                    <div class="d-meta">
                                        <span class="d-by">By John Smith</span>
                                        <span class="d-date">June 15, 2022</span>
                                        <span class="d-tags">Technology</span>
                                    </div>
                                    <h4><a href="news-single.html">Travel Destination For Couple<span></span></a></h4>
                                    <p>Ex ut dolore laboris pariatur voluptate reprehenderit qui dolore officia voluptate est nulla incididunt in tempor aliqua incididunt cupidatat ut cupidatat qui consectetur cillum id labore sunt id sint magna exercitation enim.</p>
                                    <a href="news-single.html" class="btn-main">Read More</a>
                                </div>
                            </div>

                            <div class="de-post-type-1">
                                <div class="d-image">
                                    <img alt="" src="images/news-2/pic-blog-5.jpg" class="lazy">
                                </div>
                                <div class="d-content">
                                    <div class="d-meta">
                                        <span class="d-by">By John Smith</span>
                                        <span class="d-date">June 15, 2022</span>
                                        <span class="d-tags">Technology</span>
                                    </div>
                                    <h4><a href="news-single.html">The Essential Guide to Hotel<span></span></a></h4>
                                    <p>Ex ut dolore laboris pariatur voluptate reprehenderit qui dolore officia voluptate est nulla incididunt in tempor aliqua incididunt cupidatat ut cupidatat qui consectetur cillum id labore sunt id sint magna exercitation enim.</p>
                                    <a href="news-single.html" class="btn-main">Read More</a>
                                </div>
                            </div>

                            <div class="de-post-type-1">
                                <div class="d-image">
                                    <img alt="" src="images/news-2/pic-blog-6.jpg" class="lazy">
                                </div>
                                <div class="d-content">
                                    <div class="d-meta">
                                        <span class="d-by">By John Smith</span>
                                        <span class="d-date">June 15, 2022</span>
                                        <span class="d-tags">Technology</span>
                                    </div>
                                    <h4><a href="news-single.html">Travel on a Budget<span></span></a></h4>
                                    <p>Ex ut dolore laboris pariatur voluptate reprehenderit qui dolore officia voluptate est nulla incididunt in tempor aliqua incididunt cupidatat ut cupidatat qui consectetur cillum id labore sunt id sint magna exercitation enim.</p>
                                    <a href="news-single.html" class="btn-main">Read More</a>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4">
                        <div class="widget widget-post">
                            <h4>Recent Posts</h4>
                            <div class="small-border"></div>
                            <ul class="de-bloglist-type-1">
                                <li>
                                    <div class="d-image">
                                        <img src="images/news-thumbnail/pic-blog-1.jpg" alt="">
                                    </div>
                                    <div class="d-content">
                                        <a href="#"><h4>Enjoy Best Travel Experience</h4></a>
                                        <div class="d-date">June 15, 2022</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-image">
                                        <img src="images/news-thumbnail/pic-blog-2.jpg" alt="">
                                    </div>
                                    <div class="d-content">
                                        <a href="#"><h4>The Future of Car Rent</h4></a>
                                        <div class="d-date">June 15, 2022</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-image">
                                        <img src="images/news-thumbnail/pic-blog-3.jpg" alt="">
                                    </div>
                                    <div class="d-content">
                                        <a href="#"><h4>Holiday Tips For Backpacker</h4></a>
                                        <div class="d-date">June 15, 2022</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-image">
                                        <img src="images/news-thumbnail/pic-blog-4.jpg" alt="">
                                    </div>
                                    <div class="d-content">
                                        <a href="#"><h4>Travel Destination For Couple</h4></a>
                                        <div class="d-date">June 15, 2022</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="widget widget_tags">
                            <h4>Popular Tags</h4>
                            <div class="small-border"></div>
                            <ul>
                                <li><a href="#link">Art</a></li>
                                <li><a href="#link">Application</a></li>
                                <li><a href="#link">Design</a></li>
                                <li><a href="#link">Entertainment</a></li>
                                <li><a href="#link">Internet</a></li>
                                <li><a href="#link">Marketing</a></li>
                                <li><a href="#link">Multipurpose</a></li>
                                <li><a href="#link">Music</a></li>
                                <li><a href="#link">Print</a></li>
                                <li><a href="#link">Programming</a></li>
                                <li><a href="#link">Responsive</a></li>
                                <li><a href="#link">Website</a></li>
                            </ul>
                        </div>

                        <div class="widget">
                            <h4>Testimonials</h4>
                            <div class="small-border"></div>
                            <div class="owl-carousel owl-theme" id="testimonial-carousel-1-col">
                                <div class="item">
                                    <div class="de_testi type-2">
                                        <blockquote>
                                            <h4>Excellent Service!</h4>
                                            <p>Great support, like i have never seen before. Thanks to the support team, they are very helpfull. This company provide customers great solution, that makes them best.
                                            </p>
                                            <div class="de_testi_by">
                                                <img alt="" class="rounded-circle" src="images/people/1.jpg"> <span>John, Pixar Studio</span>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi type-2">
                                        <blockquote>
                                            <h4>Excellent Service!</h4>
                                            <p>Great support, like i have never seen before. Thanks to the support team, they are very helpfull. This company provide customers great solution, that makes them best.</p>
                                            <div class="de_testi_by">
                                                <img alt="" class="rounded-circle" src="images/people/2.jpg"> <span>Sarah, Microsoft</span>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi type-2">
                                        <blockquote>
                                            <h4>Excellent Service!</h4>
                                            <p>Great support, like i have never seen before. Thanks to the support team, they are very helpfull. This company provide customers great solution, that makes them best.</p>
                                            <div class="de_testi_by">
                                                <img alt="" class="rounded-circle" src="images/people/3.jpg"> <span>Michael, Apple</span>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi type-2">
                                        <blockquote>
                                            <h4>Excellent Service!</h4>
                                            <p>Great support, like i have never seen before. Thanks to the support team, they are very helpfull. This company provide customers great solution, that makes them best.</p>
                                            <div class="de_testi_by">
                                                <img alt="" class="rounded-circle" src="images/people/4.jpg"> <span>Thomas, Samsung</span>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi type-2">
                                        <blockquote>
                                            <h4>Excellent Service!</h4>
                                            <p>Great support, like i have never seen before. Thanks to the support team, they are very helpfull. This company provide customers great solution, that makes them best.</p>
                                            <div class="de_testi_by">
                                                <img alt="" class="rounded-circle" src="images/people/1.jpg"> <span>John, Pixar Studio</span>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi type-2">
                                        <blockquote>
                                            <h4>Excellent Service!</h4>
                                            <p>Great support, like i have never seen before. Thanks to the support team, they are very helpfull. This company provide customers great solution, that makes them best.</p>
                                            <div class="de_testi_by">
                                                <img alt="" class="rounded-circle" src="images/people/2.jpg"> <span>Sarah, Microsoft</span>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi type-2">
                                        <blockquote>
                                            <h4>Excellent Service!</h4>
                                            <p>Great support, like i have never seen before. Thanks to the support team, they are very helpfull. This company provide customers great solution, that makes them best.</p>
                                            <div class="de_testi_by">
                                                <img alt="" class="rounded-circle" src="images/people/3.jpg"> <span>Michael, Apple</span>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi type-2">
                                        <blockquote>
                                            <h4>Excellent Service!</h4>
                                            <p>Great support, like i have never seen before. Thanks to the support team, they are very helpfull. This company provide customers great solution, that makes them best.</p>
                                            <div class="de_testi_by">
                                                <img alt="" class="rounded-circle" src="images/people/4.jpg"> <span>Thomas, Samsung</span>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>

                        

                    </div>
                    </div>

                        <div class="spacer-single"></div>
                                
                        <div class="col-md-12">
                            <ul class="pagination">
                                <li><a href="#">Prev</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">Next</a></li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </section>
        </div>
        <!-- content close -->
        <a href="#" id="back-to-top"></a>
        <!-- footer begin -->
        <footer class="text-light">
            <div class="container">
                <div class="row g-custom-x">
                    <div class="col-lg-3">
                        <div class="widget">
                            <h5>About Rentaly</h5>
                            <p>Where quality meets affordability. We understand the importance of a smooth and enjoyable journey without the burden of excessive costs. That's why we have meticulously crafted our offerings to provide you with top-notch vehicles at minimum expense.</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-3">
                        <div class="widget">
                            <h5>Contact Info</h5>
                            <address class="s1">
                                <span><i class="id-color fa fa-map-marker fa-lg"></i>08 W 36th St, New York, NY 10001</span>
                                <span><i class="id-color fa fa-phone fa-lg"></i>+1 333 9296</span>
                                <span><i class="id-color fa fa-envelope-o fa-lg"></i><a href="mailto:contact@example.com">contact@example.com</a></span>
                                <span><i class="id-color fa fa-file-pdf-o fa-lg"></i><a href="#">Download Brochure</a></span>
                            </address>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <h5>Quick Links</h5>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="widget">
                                    <ul>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Careers</a></li>
                                        <li><a href="#">News</a></li>
                                        <li><a href="#">Partners</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="widget">
                            <h5>Social Network</h5>
                            <div class="social-icons">
                                <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="de-flex">
                                <div class="de-flex-col">
                                    <a href="index.html">
                                        Copyright 2024 - Rentaly by Designesia
                                    </a>
                                </div>
                                <ul class="menu-simple">
                                    <li><a href="#">Terms &amp; Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->
    </div>
    
    <!-- Javascript Files
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>

</body>

</html>