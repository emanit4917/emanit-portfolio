<!doctype html>
<html class="no-js" lang="en">
<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:27:43 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Kufa - Personal Portfolio HTML5 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

        <!-- CSS here -->
        <link rel="stylesheet" href="{{asset('frontend_asset/')}}/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('frontend_asset/')}}/css/animate.min.css">
        <link rel="stylesheet" href="{{asset('frontend_asset/')}}css/magnific-popup.css">
        <link rel="stylesheet" href="{{asset('frontend_asset/')}}/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="{{asset('frontend_asset/')}}/css/flaticon.css">
        <link rel="stylesheet" href="{{asset('frontend_asset/')}}/css/slick.css">
        <link rel="stylesheet" href="{{asset('frontend_asset/')}}/css/aos.css">
        <link rel="stylesheet" href="{{asset('frontend_asset/')}}/css/default.css">
        <link rel="stylesheet" href="{{asset('frontend_asset/')}}/css/style.css">
        <link rel="stylesheet" href="{{asset('frontend_asset/')}}/css/responsive.css">
    </head>
    <body class="theme-bg">

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

        <!-- header-start -->
        <header>
            <div id="header-sticky" class="transparent-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-menu">
                                <nav class="navbar navbar-expand-lg">
                                    <a href="index.html" class="navbar-brand logo-sticky-none"><img src="{{asset('frontend_asset')}}/img/logo/logo.png" alt="Logo"></a>
                                    <a href="index.html" class="navbar-brand s-logo-none"><img src="{{asset('frontend_asset')}}/img/logo/s_logo.png" alt="Logo"></a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarNav">
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                    </button>
                                    
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                      <ul class="navbar-nav ml-auto">
                                            @foreach($nav_data as $nav)
                                                <li class="nav-item "><a class="nav-link"  href="#{{$nav->link}}" >{{$nav->navbar}}</a></li>
                                            @endforeach
                                        </ul>
                                       </div>
                                    <div class="header-btn">
                                        <a href="#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- offcanvas-start -->
            <div class="extra-info">
                <div class="close-icon menu-close">
                    <button>
                        <i class="far fa-window-close"></i>
                    </button>
                </div>
                <div class="logo-side mb-30">
                    <a href="index-2.html">
                        <img src="{{asset('frontend_asset')}}/img/logo/logo.png" alt="" />
                    </a>
                </div>
            @foreach($address_data as $adds)
                <div class="side-info mb-30">
                    <div class="contact-list mb-30">
                        <h4>Office Address</h4>
                        <p>{{$adds->loc_name}}</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Phone Number</h4>
                        <p>{{$adds->phone}}</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Email Address</h4>
                        <p>{{$adds->email}}</p>
                    </div>
            @endforeach
                </div>
                <div class="social-icon-right mt-20">
                    @foreach($socail as $pop_soc)
                    <a href="{{$pop_soc->links}}"><i class="{{$pop_soc->icon_name}}"></i></a>
                  @endforeach
                </div>
            </div>
            <div class="offcanvas-overly"></div>
            <!-- offcanvas-end -->
        </header>
        <!-- header-end -->

        <!-- main-area -->
        <main>
         <!-- banner-area -->
            <section id="home" class="banner-area banner-bg fix">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6">
                            <div class="banner-content">
                                @foreach($banners as $banner)
                                <h6 class="wow fadeInUp" data-wow-delay="0.2s">{{$banner->heading}}</h6>
                                <h2 class="wow fadeInUp" data-wow-delay="0.4s">{{$banner->name_title}}</h2>
                                <p class="wow fadeInUp" data-wow-delay="0.6s">​{{$banner->description}}</p>
                                @endforeach
                                <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                    <ul>
                                        @foreach($socail as $socail_data)
                                        <li><a href="{{$socail_data->links}}"><i class="{{$socail_data->icon_name}}"></i></a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <a href="#" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIO</a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                            <div class="banner-img text-right">
                                <img src="{{asset($banner->banner_photo)}}"  alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-shape"><img src="{{asset('frontend_asset')}}/img/shape/dot_circle.png" class="rotateme" alt="img"></div>
            </section>
        <!-- banner-area-end -->

        <!-- about-area-->
            <section id="about" class="about-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about-img">
                                <img src="{{asset('frontend_asset')}}/img/banner/banner_img2.png" title="me-01" alt="me-01">
                            </div>
                        </div>
                        <div class="col-lg-6 pr-90">
                            <div class="section-title mb-25">
                                <span>Introduction</span>
                                <h2>About Me</h2>
                            </div>

                            <div class="about-content">
                                @foreach($education_alls as $edu_info)
                                <p>{{$edu_info->short_dec}}</p>
                                <h3>{{$edu_info->edu_title}}</h3>
                            </div>
                            <!-- Education Item -->
                            <div class="education">
                                <div class="year">{{$edu_info->years}}</div>
                                <div class="line"></div>
                                <div class="location">
                                    <span>{{$edu_info->skill_heading}}</span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: {{$edu_info->parchentage}};" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                 @endforeach
                            </div> 
                          
                            <!-- End Education Item -->
                        
                        </div>
                    </div>
                </div>
            </section>
            
        <!-- about-area-end -->

         <!-- Services-area -->
            <section id="service" class="services-area pt-120 pb-50">
				<div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>WHAT WE DO</span>
                                <h2>Services and Solutions</h2>
                            </div>
                        </div>
                    </div>
					<div class="row">  
                        @foreach($service as $service_row)
						<div class="col-lg-4 col-md-6">
                      
							<div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                                <i class="{{$service_row->icons}}"></i>
								<h3>{{$service_row->head_title}}</h3>
								<p>
                                     {{$service_row->short_desc}}
								</p>
                               </div> 
                           
						</div>
                         @endforeach
					</div>
				</div>
			</section>
            <!-- Services-area-end -->

            <!-- Portfolios-area -->
            <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>Portfolio Showcase</span>
                                <h2>My Recent Best Works</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                     @foreach($portfolios as $portfolio_data)
                        <div class="col-lg-4 col-md-6 pitem">
                           <div class="speaker-box">
								<div class="speaker-thumb">
									<img src="{{$portfolio_data->thum_photo}}" alt="img">
								</div>
								<div class="speaker-overlay">
									<span>{{$portfolio_data->thum_heading}}</span>
									<h4><a href="{{route('portfolio.single', $portfolio_data->id)}}">{{$portfolio_data->thum_title}}</a></h4>
									<a href="{{route('portfolio.single', $portfolio_data->id)}}" class="arrow-btn">{{$portfolio_data->thum_btn_text}} <span></span></a>
								</div>
							</div>
                         </div>  
                         @endforeach
                    </div>
                  
                </div>
            </section>
            <!-- services-area-end -->
            
            <!-- fact-area -->
            <section class="fact-area">
                <div class="container">
                    <div class="fact-wrap">
                        <div class="row justify-content-between">
                            @foreach($counter_data as $counter_row)
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="{{$counter_row->count_icon}}"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count">{{$counter_row->count_number}}</span></h2>
                                        <span>{{$counter_row->count_title}}</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
            <!-- fact-area-end -->

            <!-- testimonial-area -->
            <section class="testimonial-area primary-bg pt-115 pb-115">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>testimonial</span>
                                <h2>happy customer quotes</h2>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10 ml-2">
                            @foreach($testmoniales as $test_data)
                            <div class="testimonial-active">
                                <div class="single-testimonial text-center">
                                    <div class="testi-avatar text-center">
                                        <img src="{{$test_data->testmonial_photo}}" alt="img">
                                    </div>
                                    <div class="testi-content text-center">
                                        <h4><span>“</span>{{$test_data->short_desc}}<span>”</span></h4>
                                        <div class="testi-avatar-info">
                                            <h5>{{$test_data->title_name}}</h5>
                                            <span>{{$test_data->title_head}}</span>
                                        </div>
                                    </div>
                                </div>
                               @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->

            <!-- brand-area -->
            <div class="barnd-area pt-100 pb-100">
                <div class="container">
                    <div class="row brand-active">
                        @foreach($brande_data as $brande_alls)
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="{{$brande_alls->brand_photo}}" alt="img">
                            </div>
                        </div>
                       @endforeach
                </div>
            </div>
            <!-- brand-area-end -->

            <!-- contact-area -->
            <section id="contact" class="contact-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section-title mb-20">
                                <span>information</span>
                                <h2>Contact Information</h2>
                            </div>
                            <div class="contact-content">
                                @foreach($address_data as $add_row)
                                <p>{{$add_row->short_desc}}</p>
                                <h5>OFFICE IN <span>NEW YORK</span></h5>
                                <div class="contact-list">
                                    <ul>
                                        <li><i class="fas fa-map-marker"></i><span>addess :</span>{{$add_row->loc_name}}</li>
                                        <li><i class="fas fa-headphones"></i><span>Phone :</span>{{$add_row->phone}}</li>
                                        <li><i class="fas fa-globe-asia"></i><span>e-mail :</span>{{$add_row->email}}</li>
                                    </ul>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-form">
                                <form action="{{route('contact.store')}}" method="post">
                                    @csrf
                                    <input type="text" name="name" placeholder="your name *">
                                    <input type="email" name="email" placeholder="your email *">
                                    <textarea name="message" id="message" placeholder="your message *"></textarea>
                                    <button class="btn">BUY TICKET</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer -->
        <footer>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="copyright-text text-center">
                                <p>Copyright© <span>Kufa</span> | All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->
        <!-- JS here -->
        <script src="{{asset('frontend_asset/')}}/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="{{asset('frontend_asset/')}}/js/popper.min.js"></script>
        <script src="{{asset('frontend_asset/')}}/js/bootstrap.min.js"></script>
        <script src="{{asset('frontend_asset/')}}/js/isotope.pkgd.min.js"></script>
        <script src="{{asset('frontend_asset/')}}/js/one-page-nav-min.js"></script>
        <script src="{{asset('frontend_asset/')}}/js/slick.min.js"></script>
        <script src="{{asset('frontend_asset/')}}/js/ajax-form.js"></script>
        <script src="{{asset('frontend_asset/')}}/js/wow.min.js"></script>
        <script src="{{asset('frontend_asset/')}}/js/aos.js"></script>
        <script src="{{asset('frontend_asset/')}}/js/jquery.waypoints.min.js"></script>
        <script src="{{asset('frontend_asset/')}}/js/jquery.counterup.min.js"></script>
        <script src="{{asset('frontend_asset/')}}/js/jquery.scrollUp.min.js"></script>
        <script src="{{asset('frontend_asset/')}}/js/imagesloaded.pkgd.min.js"></script>
        <script src="{{asset('frontend_asset/')}}/js/jquery.magnific-popup.min.js"></script>
        <script src="{{asset('frontend_asset/')}}/js/plugins.js"></script>
        <script src="{{asset('frontend_asset/')}}/js/main.js"></script>
    </body>

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:28:17 GMT -->
</html>
