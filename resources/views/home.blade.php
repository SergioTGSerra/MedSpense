<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
        <title>MedSpense &mdash; {{ __('Take Care of You With MedSpense') }}</title>
        <meta name="description" content="Resonance &mdash; One & Multi Page Creative Template">  
        <meta charset="utf-8">
        <meta name="author" content="https://themeforest.net/user/bestlooker/portfolio">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <!-- Favicon -->
        <link rel="icon" href="landing/images/favicon.png" type="image/png" sizes="any">
        <link rel="icon" href="landing/images/favicon.svg" type="image/svg+xml">         

        <!-- CSS -->
        <link rel="stylesheet" href="landing/css/bootstrap.min.css">
        <link rel="stylesheet" href="landing/css/style.css">
        <link rel="stylesheet" href="landing/css/style-responsive.css">
        <link rel="stylesheet" href="landing/css/vertical-rhythm.min.css">
        <link rel="stylesheet" href="landing/css/magnific-popup.css">
        <link rel="stylesheet" href="landing/css/owl.carousel.css">
        <link rel="stylesheet" href="landing/css/splitting.css">
        <link rel="stylesheet" href="landing/css/YTPlayer.css">
        <link rel="stylesheet" href="landing/css/home.css">
        
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;1,400&display=swap" rel="stylesheet">
    
    </head>
    <body class="appear-animate">
        
        <!-- Page Loader -->        
        <div class="page-loader color">
            <div class="loader">Loading...</div>
        </div>
        <!-- End Page Loader -->
        
        <!-- Skip to Content -->
        <a href="#main" class="btn skip-to-content">Skip to Content</a>
        <!-- End Skip to Content -->
        
        <!-- Page Wrap -->
        <div class="page" id="top">
            
            <!-- Navigation Panel -->
            <nav class="main-nav transparent stick-fixed wow-menubar wch-unset">
                <div class="main-nav-sub full-wrapper">
                    
                    <!-- Logo  (* Add your text or image to the link tag. Use SVG or PNG image format. 
                    If you use a PNG logo image, the image resolution must be equal 200% of the visible logo
                    image size for support of retina screens. See details in the template documentation. *) -->
                    <div class="nav-logo-wrap position-static local-scroll">
                        <a href="#top" class="logo">
                            <img src="/landing/images/logo-dark.svg" alt="Company Logo"/>
                        </a>
                    </div>
                    
                    <!-- Mobile Menu Button -->
                    <div class="mobile-nav" role="button" tabindex="0">
                        <i class="mobile-nav-icon"></i>
                        <span class="visually-hidden">Menu</span>
                    </div>
                    
                    <!-- Main Menu -->
                    <div class="inner-nav desktop-nav">
                        <ul class="clearlist scroll-nav local-scroll justify-content-end">                            
                            <li><a href="#home" class="active">{{ __('Home') }}</a></li>
                            <li><a href="#about">{{ __('About Us') }}</a></li>
                            <li><a href="#services">{{ __('Services') }}</a></li>
                            <li><a href="#team">{{ __('Team') }}</a></li>
                            <li><a href="#contact">{{ __('Contact Us') }}</a></li>
                            
                            <li class="desktop-nav-display">
                                <div class="vr mt-2"></div>
                            </li>
                            
                            <!-- Languages -->
                            <li>
                                <a href="#" class="mn-has-sub">{{ App::currentLocale() == 'pt' ? 'PT' : 'EN' }} <i class="mi-chevron-down"></i></a>
                                
                                <ul class="mn-sub to-left">                                    
                                    <li><a href="{{ url('en') }}">English</a></li>
                                    <li><a href="{{ url('pt') }}">Português</a></li>
                                </ul>
                                
                            </li>
                            <!-- End Languages -->  
                                                      
                            <li>
                                <a href="#contact" class="opacity-1 no-hover">
                                    <span class="btn btn-mod btn-color-light btn-small btn-circle" data-btn-animate="y">{{ __('Get in touch') }}</span>
                                </a>
                            </li>
                        </ul>                      
                        
                    </div>
                    <!-- End Main Menu -->
                    
                </div>
            </nav>
            <!-- End Navigation Panel -->
            
            <main id="main">
            
                <!-- Home Section -->
                <section class="home-section" id="home">
                    
                    <!-- Background Shape -->
                    <div class="bg-shape-2 wow fadeIn">
                        <img src="landing/images/bg-shape-2.svg" alt="" />
                    </div>
                    <!-- End Background Shape -->
                    
                    <div class="container position-relative min-height-100vh d-flex align-items-center pt-100 pb-100 pt-md-120 pb-md-120">
                        
                        <!-- Home Section Content -->
                        <div class="home-content text-start">
                            <div class="row">
                                
                                <!-- Home Section Text -->
                                <div class="col-md-10 offset-md-1 col-lg-6 offset-lg-0 d-flex align-items-center mb-md-60 mb-sm-30">
                                    <div class="w-100 text-center text-lg-start">
                                        
                                        <h1 class="hs-title-10 mb-40 mb-sm-20 wow fadeInUp">
                                            {{ __('Protect the health of patients and the medical institution. Be') }}
                                            <span class="visually-hidden">{{ __('healthy') }}, {{ __('eficient') }}, {{ __('safe') }}</span>
                                            <span data-period="3250" data-type='[ "{{ __("healthy") }}", "{{ __("efficient") }}", "{{ __("smart") }}"]' class="typewrite color-primary-1" aria-hidden="true"><span class="wrap"></span></span>
                                        </h1>
                                        
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <p class="section-descr mb-50 mb-sm-40 wow fadeInUp" data-wow-delay="0.15s">
                                                    {{ __('Manage the financial aspects of your medical institution efficiently and securely.') }}
                                                </p>
                                            </div>
                                        </div>
                                    
                                        <div class="local-scroll wow fadeInUp wch-unset" data-wow-delay="0.3s" data-wow-offset="0">
                                            
                                            <a href="#contact" class="btn btn-mod btn-color btn-large btn-circle btn-hover-anim mb-xs-10">
                                                <span>{{ __('Request demo') }}</span>
                                            </a>
                                            
                                            <a href="#about" class="link-hover-anim ms-2 ms-sm-5 me-2" data-link-animate="y">{{ __('Contact Us') }}<i class="mi-arrow-right size-24"></i></a>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- End Home Section Text -->
                                
                                <!-- Images -->
                                <div class="col-lg-6 d-flex align-items-center">
                                    <div class="w-100 ps-xl-3 wow fadeInLeft" data-wow-delay="0.15s">                                        
                                        <div class="composition-4">
                                            
                                            <div class="composition-4-decoration opacity-065">
                                                <img src="landing/images/decoration-1.svg" alt="" />
                                            </div>
                                            
                                            <div class="composition-4-image-1">
                                                <div class="composition-4-image-1-inner">
                                                    <img src="landing/images/hs-image-1.jpg" alt="Image Description" />
                                                </div>
                                            </div>
                                            
                                            <div class="composition-4-image-2">
                                                <div class="composition-4-image-2-inner">
                                                    <img src="landing/images/hs-image-2.jpg" alt="Image Description" />
                                                </div>
                                            </div>
                                            
                                        </div>                                        
                                    </div>
                                </div>
                                <!-- End Images -->
                                
                            </div>                            
                        </div>
                        <!-- End Home Section Content -->
                        
                        <!-- Scroll Down -->
                        <div class="local-scroll scroll-down-wrap-type-1 wow fadeInUp" data-wow-offset="0">
                            <div class="container text-center text-lg-start">
                                <a href="#about" class="scroll-down-1">
                                    <div class="scroll-down-1-icon">
                                        <i class="mi-arrow-down"></i>
                                    </div>
                                    <div class="scroll-down-1-text">{{ __('Scroll down') }}</div>
                                </a>
                            </div>                            
                        </div>
                        <!-- End Scroll Down -->
                        
                    </div>
                    
                </section>
                <!-- End Home Section -->
                
                
                <!-- Divider -->
                <hr class="mt-0 mb-0"/>
                <!-- End Divider -->
                
                
                <!-- About Section -->
                <section class="page-section" id="about">
                    <div class="container position-relative">
                    
                        <div class="row">
                            
                            <!-- Section Text -->
                            <div class="col-lg-6 d-flex align-items-center order-first order-lg-last mb-md-60 mb-sm-40">
                                <div class="w-100 wow fadeInUp">
                                    
                                    <h2 class="section-caption-slick mb-30 mb-sm-20">
                                        {{ __('About MedSpense') }}
                                    </h2>
                                    
                                    <h3 class="section-title mb-30">
                                        {{ __('Innovation in financial management in the healthcare area.')}}
                                    </h3>
                                    
                                    <p class="text-gray mb-40">
                                        {{ __('We are a team passionate about transforming financial management in the healthcare area. Combining technology expertise and deep industry knowledge, MedSpense was born to simplify the lives of healthcare professionals and medical institutions, allowing them to focus on what really matters: caring for patients.')}}
                                    </p>         
                                    
                                    <!-- Features List -->
                                    <div class="row features-list mt-n20 mb-50 mb-sm-30">
                                        
                                        <!-- Features List Item -->
                                        <div class="col-sm-6 col-lg-12 col-xl-6 d-flex mt-20">
                                            <div class="features-list-icon">
                                                <i class="mi-check"></i>
                                            </div>
                                            <div class="features-list-text">
                                                {{ __('Experience in the Health Sector.')}}
                                            </div>
                                        </div>
                                        <!-- End Features List Item -->
                                        
                                        <!-- Features List Item -->
                                        <div class="col-sm-6 col-lg-12 col-xl-6 col-lg-6 d-flex mt-20">
                                            <div class="features-list-icon">
                                                <i class="mi-check"></i>
                                            </div>
                                            <div class="features-list-text">
                                                {{ __('Commitment to Innovation.')}}
                                            </div>
                                        </div>
                                        <!-- End Features List Item -->
                                        
                                        <!-- Features List Item -->
                                        <div class="col-sm-6 col-lg-12 col-xl-6 d-flex mt-20">
                                            <div class="features-list-icon">
                                                <i class="mi-check"></i>
                                            </div>
                                            <div class="features-list-text">
                                                {{ __('Data Security as a Priority.')}}
                                            </div>
                                        </div>
                                        <!-- End Features List Item -->
                                        
                                        <!-- Features List Item -->
                                        <div class="col-sm-6 col-lg-12 col-xl-6 d-flex mt-20">
                                            <div class="features-list-icon">
                                                <i class="mi-check"></i>
                                            </div>
                                            <div class="features-list-text">
                                               {{ __('Exceptional Customer Support.')}}
                                            </div>
                                        </div>
                                        <!-- End Features List Item -->
                                        
                                    </div>
                                    <!-- End Features List -->  
                                    
                                    <div class="local-scroll wch-unset">
                                            
                                        <a href="#contact" class="btn btn-mod btn-color btn-large btn-circle btn-hover-anim mb-xs-10">
                                            <span>{{ __('Request demo')}}</span>
                                        </a>
                                        
                                        <a href="#services" class="link-hover-anim ms-2 ms-sm-5 me-2" data-link-animate="y">{{ __('Contact Us')}}<i class="mi-arrow-right size-24"></i></a>
                                        
                                    </div>                         
                                    
                                </div>
                            </div>
                            <!-- End Section Text -->
                            
                            <!-- Image -->
                            <div class="col-lg-6 d-flex align-items-center">
                                <div class="w-100 pe-lg-5">                                    
                                    <div class="composition-5">
                                            
                                        <div class="composition-5-decoration opacity-065">
                                            <img src="landing/images/decoration-1.svg" alt="" />
                                        </div>
                                        
                                        <div class="composition-5-image-1">
                                            <div class="composition-5-image-1-inner">
                                                <img src="landing/images/hs-image-3.jpg" alt="Image Description" class="wow scaleOutIn" data-wow-offset="200" />
                                            </div>
                                        </div>
                                        
                                        <div class="composition-5-image-2">
                                            <div class="composition-5-image-2-inner">
                                                <img src="landing/images/hs-image-4.jpg" alt="Image Description" class="wow scaleOutIn" data-wow-offset="0" />
                                            </div>
                                        </div>
                                        
                                    </div>                                    
                                </div>
                            </div>
                            <!-- End Images -->
                            
                        </div>                                   
                    
                    </div>
                </section>
                <!-- End About Section -->
                
                
                <!-- Numbers Section -->
                <section class="page-section bg-light-alpha-90 bg-scroll" style="background-image: url(landing/images/section-bg-1.jpg)">
                    <div class="container position-relative">
                        
                        <!-- Numbers Grid -->
                        <div class="row mt-n30 wow fadeInUp">
                            
                            <!-- Numbers Item -->
                            <div class="col-sm-6 col-xl-3 d-flex align-items-stretch mt-30">
                                <div class="number-2-item">
                                    <div class="number-2-title">
                                        100%
                                    </div>
                                    <div class="number-2-descr">
                                        {{ __('Total Transparency')}}
                                    </div>
                                </div>
                            </div>
                            <!-- End Numbers Item -->
                            
                            <!-- Numbers Item -->
                            <div class="col-sm-6 col-xl-3 d-flex align-items-stretch mt-30">
                                <div class="number-2-item">                                    
                                    <div class="number-2-title">
                                        Super
                                    </div>
                                    <div class="number-2-descr">
                                        {{ __('Efficient Financial Management')}}
                                    </div>
                                </div>
                            </div>
                            <!-- End Numbers Item -->
                            
                            <!-- Numbers Item -->
                            <div class="col-sm-6 col-xl-3 d-flex align-items-stretch mt-30">
                                <div class="number-2-item">
                                    <div class="number-2-title">
                                        +30k
                                    </div>
                                    <div class="number-2-descr">
                                        {{ __('Satisfied Customers')}}
                                    </div>
                                </div>
                            </div>
                            <!-- End Numbers Item -->
                            
                            <!-- Numbers Item -->
                            <div class="col-sm-6 col-xl-3 d-flex align-items-stretch mt-30">
                                <div class="number-2-item">
                                    <div class="number-2-title">
                                        24 / 7
                                    </div>
                                    <div class="number-2-descr">
                                        {{ __('Personalized Support')}}
                                    </div>
                                </div>
                            </div>
                            <!-- End Numbers Item -->
                            
                        </div>
                        <!-- End Numbers Grid -->                 
                    
                    </div>
                </section>
                <!-- End Numbers Section -->
                
                
                <!-- Services Section -->
                <section class="page-section" id="services">
                    <div class="container position-relative">
                    
                        <div class="row">
                            
                            <!-- Left Column -->
                            <div class="col-lg-5 mb-md-60 mb-sm-40">
                                                                    
                                <h2 class="section-caption-slick mb-30 mb-sm-20">
                                    {{ __('Our Services')}}
                                </h2>
                                
                                <h3 class="section-title mb-30">
                                    {{ __('We provide the best financial management solutions for healthcare.')}}
                                </h3>
                                
                                <p class="section-descr mb-50 mb-sm-40">
                                    {{ __('The power of financial efficiency in healthcare with MedSpence.')}}
                                </p>
                                
                                <div class="local-scroll">
                                        
                                    <a href="#contact" class="btn btn-mod btn-color btn-large btn-circle btn-hover-anim mb-xs-10">
                                        <span>{{ __('Request demo')}}</span>
                                    </a>
                                    
                                </div>
                                                   
                            </div>
                            <!-- End Left Column -->
                            
                            <!-- Right Column -->
                            <div class="col-lg-7 col-xl-6 offset-xl-1">
                                
                                <!-- Services Grid -->                 
                                <div class="row mt-n50 mt-sm-n40">
                                    
                                    <!-- Services Item -->
                                    <div class="col-md-6 mt-50 mt-sm-40 wow fadeIn" data-wow-delay="0">
                                        <h4 class="services-6-caption">{{ __('Management')}}</h4>
                                        <div class="services-6-separator"></div>
                                        <h5 class="services-6-title">{{ __("Simplified Management")}}</h5>
                                        <p class="services-6-text mb-0">
                                            {{ __('Let MedSpence take care of your institution, freeing up time for what really matters: health.')}}
                                        </p>
                                    </div>
                                    <!-- End services Item -->
                                    
                                    <!-- Services Item -->
                                    <div class="col-md-6 mt-50 mt-sm-40 wow fadeIn" data-wow-delay="0.05s">
                                        <h4 class="services-6-caption">{{ __('Financial')}}<aside></aside></h4>
                                        <div class="services-6-separator"></div>
                                        <h5 class="services-6-title">{{ __('Efficient Billing')}}</h5>
                                        <p class="services-6-text mb-0">
                                            {{ __('Optimize the billing process. With MedSpence, you can generate accurate invoices and track payments effectively.')}}
                                        </p>
                                    </div>
                                    <!-- End services Item -->
                                    
                                    <!-- Services Item -->
                                    <div class="col-md-6 mt-50 mt-sm-40 wow fadeIn" data-wow-delay="0.1s">
                                        <h4 class="services-6-caption">{{ __('Reports')}}</h4>
                                        <div class="services-6-separator"></div>
                                        <h5 class="services-6-title">{{ __('Detailed Reports and Real-Time Analysis')}}</h5>
                                        <p class="services-6-text mb-0">
                                            {{ __('Get valuable insights into financial performance. MedSpence offers detailed reports and real-time analysis to help make informed decisions.')}}
                                        </p>
                                    </div>
                                    <!-- End services Item -->
                                    
                                    <!-- Services Item -->
                                    <div class="col-md-6 mt-50 mt-sm-40 wow fadeIn" data-wow-delay="0.15s">
                                        <h4 class="services-6-caption">{{ __('Integration')}}</h4>
                                        <div class="services-6-separator"></div>
                                        <h5 class="services-6-title">{{ __('Seamless Integration with Accounting Systems')}}</h5>
                                        <p class="services-6-text mb-0">
                                            {{ __('Connect MedSpence with the accounting systems you already use. Simplify the reconciliation process and keep everything in sync.')}}
                                        </p>
                                    </div>
                                    <!-- End services Item -->
                                    
                                </div>
                                <!-- Services Grid -->
                                    
                            </div>
                            <!-- End Right Column -->
                        
                        </div>
                        
                        <div class="page-section">
                            <hr class="mt-0 mb-0"/>
                        </div>
                        
                        <div class="row mb-50 mb-sm-50">
                            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3 text-center">
                                <h2 class="section-title-small mb-20">
                                    {{ __('Why choose MedSpence?')}}
                                </h2>
                                <p class="text-gray mb-0">
                                    {{ __('Simply the best financial management solution for healthcare professionals.')}}
                                </p>
                            </div>
                        </div>
                        
                        <!-- Features Grid -->
                        <div class="row mt-n30">
                            
                            <!-- Feature Item -->
                            <div class="col-sm-6 col-xl-3 d-flex align-items-stretch">
                                <div class="alt-features-item box-shadow text-center mt-30">
                                    <div class="alt-features-icon mb-10 color-primary-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                                            <path d="M21.62 20.196c1.055-.922 1.737-2.262 1.737-3.772 0-1.321-.521-2.515-1.357-3.412v-6.946l-11.001-6.066-11 6v12.131l11 5.869 5.468-2.917c.578.231 1.205.367 1.865.367.903 0 1.739-.258 2.471-.676l2.394 3.226.803-.596-2.38-3.208zm-11.121 2.404l-9.5-5.069v-10.447l9.5 4.946v10.57zm1-.001v-10.567l5.067-2.608.029.015.021-.04 4.384-2.256v5.039c-.774-.488-1.686-.782-2.668-.782-2.773 0-5.024 2.252-5.024 5.024 0 1.686.838 3.171 2.113 4.083l-3.922 2.092zm6.833-2.149c-2.219 0-4.024-1.808-4.024-4.026s1.805-4.025 4.024-4.025c2.22 0 4.025 1.807 4.025 4.025 0 2.218-1.805 4.026-4.025 4.026zm-.364-3.333l-1.306-1.147-.66.751 2.029 1.782 2.966-3.12-.725-.689-2.304 2.423zm-16.371-10.85l4.349-2.372 9.534 4.964-4.479 2.305-9.404-4.897zm9.4-5.127l9.404 5.186-3.832 1.972-9.565-4.98 3.993-2.178z"/>
                                        </svg>
                                    </div>
                                    <h4 class="alt-features-title">{{ __('Total Efficiency')}}</h4>
                                    <div class="alt-features-descr">
                                        {{ __('Optimize finances, free up time for what really matters.')}}
                                    </div>
                                </div>
                            </div>
                            <!-- End Feature Item -->
                            
                            <!-- Feature Item -->
                            <div class="col-sm-6 col-xl-3 d-flex align-items-stretch">
                                <div class="alt-features-item box-shadow text-center mt-30">
                                    <div class="alt-features-icon mb-10 color-primary-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                                            <path d="M12 0c-3.371 2.866-5.484 3-9 3v11.535c0 4.603 3.203 5.804 9 9.465 5.797-3.661 9-4.862 9-9.465v-11.535c-3.516 0-5.629-.134-9-3zm0 1.292c2.942 2.31 5.12 2.655 8 2.701v10.542c0 3.891-2.638 4.943-8 8.284-5.375-3.35-8-4.414-8-8.284v-10.542c2.88-.046 5.058-.391 8-2.701zm5 7.739l-5.992 6.623-3.672-3.931.701-.683 3.008 3.184 5.227-5.878.728.685z"/>
                                        </svg>
                                    </div>
                                    <h4 class="alt-features-title">{{ __('Absolute Transparency')}}</h4>
                                    <div class="alt-features-descr">
                                        {{ __('Have total control with detailed reports and real-time analysis.')}}
                                    </div>
                                </div>
                            </div>
                            <!-- End Feature Item -->
                            
                            <!-- Feature Item -->
                            <div class="col-sm-6 col-xl-3 d-flex align-items-stretch">
                                <div class="alt-features-item box-shadow text-center mt-30">
                                    <div class="alt-features-icon mb-10 color-primary-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                                            <path d="M6.514 24.015h-3v-3.39c-2.08-.638-3.5-2.652-3.5-5.04 0-1.19.202-1.693 1.774-5.603.521-1.294 1.195-2.97 2.068-5.179.204-.518.67-.806 1.17-.802.482.004.941.284 1.146.802.718 1.817 1.302 3.274 1.777 4.454.26-.596.567-1.288.928-2.103.694-1.565 1.591-3.592 2.754-6.265.258-.592.881-.906 1.397-.888.572.015 1.126.329 1.369.888 1.163 2.673 2.06 4.7 2.754 6.265 2.094 4.727 2.363 5.334 2.363 6.764 0 2.927-2.078 5.422-5 6.082v4.015h-3v-4.015c-.943-.213-1.797-.617-2.523-1.165-.612.845-1.466 1.48-2.477 1.79v3.39zm14.493-6c1.652 0 2.993 1.341 2.993 2.993s-1.341 2.993-2.993 2.993-2.993-1.341-2.993-2.993 1.341-2.993 2.993-2.993zm.007.993c1.104 0 2 .896 2 2s-.896 2-2 2-2-.896-2-2 .896-2 2-2zm-7.5 3.993v-3.839c4.906-.786 5-4.751 5-5.244 0-1.218-.216-1.705-2.277-6.359-2.134-4.82-2.721-6.198-2.755-6.261-.079-.145-.193-.292-.455-.297-.238 0-.37.092-.481.297-.034.063-.621 1.441-2.755 6.261-2.061 4.654-2.277 5.141-2.277 6.359 0 .493.094 4.458 5 5.244v3.839h1zm-6.123-12.448l-.08-.198c-1.589-3.957-2.04-5.116-2.067-5.171-.072-.151-.15-.226-.226-.228-.109 0-.188.13-.235.228-.028.05-.316.818-2.066 5.171-1.542 3.833-1.703 4.233-1.703 5.23 0 1.988 1.076 3.728 3.5 4.25v3.166h1v-3.166c1.266-.273 2.159-.876 2.725-1.666-1.078-1.12-1.725-2.619-1.725-4.251 0-.979.126-1.572.877-3.365z"/>
                                        </svg>
                                    </div>
                                    <h4 class="alt-features-title">{{ __('Exceptional Support')}}</h4>
                                    <div class="alt-features-descr">
                                        {{ __('Our team is always ready to help and offer expert guidance.')}}
                                    </div>
                                </div>
                            </div>
                            <!-- End Feature Item -->
                            
                            <!-- Feature Item -->
                            <div class="col-sm-6 col-xl-3 d-flex align-items-stretch">
                                <div class="alt-features-item box-shadow text-center mt-30">
                                    <div class="alt-features-icon mb-10 color-primary-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                                            <path d="M4.57 18.55l2.43.335-1.769 1.7.432 2.415-2.163-1.157-2.163 1.157.432-2.415-1.769-1.7 2.43-.335 1.07-2.207 1.07 2.207zm8.5 0l2.43.335-1.769 1.7.432 2.415-2.163-1.157-2.163 1.157.432-2.415-1.769-1.7 2.43-.335 1.07-2.207 1.07 2.207zm8.5 0l2.43.335-1.769 1.7.432 2.415-2.163-1.157-2.163 1.157.432-2.415-1.769-1.7 2.43-.335 1.07-2.207 1.07 2.207zm-18.473.918l-.917.126.667.641-.163.91.816-.436.816.436-.163-.91.667-.641-.917-.126-.403-.832-.403.832zm8.5 0l-.917.126.667.641-.163.91.816-.436.816.436-.163-.91.667-.641-.917-.126-.403-.832-.403.832zm8.5 0l-.917.126.667.641-.163.91.816-.436.816.436-.163-.91.667-.641-.917-.126-.403-.832-.403.832zm3.903-4.468h-24v-2.059c0-.99.079-1.562 1.249-1.833 1.352-.311 2.61-.585 1.999-1.734-1.852-3.502-.49-5.374 1.468-5.374 1.994 0 3.324 1.943 1.466 5.374-.318.585-.14.944.284 1.195.237-.226.591-.398 1.122-.521 1.683-.389 3.344-.736 2.545-2.209-2.366-4.364-.674-6.839 1.866-6.839 2.491 0 4.226 2.383 1.866 6.839-.775 1.464.826 1.812 2.545 2.209.532.123.887.295 1.123.522.425-.252.604-.61.285-1.196-1.858-3.431-.528-5.374 1.466-5.374 1.958 0 3.32 1.872 1.468 5.374-.61 1.149.647 1.423 1.999 1.734 1.17.271 1.249.843 1.249 1.833v2.059zm-6-1h5v-1.059c0-.783.021-.744-.475-.858-2.277-.536-2.551-.979-2.785-1.49-.162-.355-.27-.936.129-1.688.765-1.447.968-2.67.555-3.354-.393-.652-1.789-.83-2.289.012-.408.685-.197 1.931.562 3.334.407.749.301 1.332.141 1.688-.129.286-.282.581-.886.884.04.266.048.57.048.912v1.619zm-11.953-2.531c-.602-.304-.756-.598-.885-.884-.16-.356-.266-.939.141-1.688.76-1.403.971-2.649.562-3.334-.5-.842-1.896-.664-2.289-.012-.413.684-.21 1.907.555 3.354.399.752.291 1.333.129 1.688-.233.511-.508.954-2.785 1.49-.495.114-.475.075-.475.858v1.059h5v-1.623c0-.341.007-.643.047-.908zm10.953 2.531v-1.619c0-1.127-.03-1.178-.814-1.359-2.751-.634-3.093-1.162-3.359-1.744-.181-.395-.301-1.048.154-1.907 1.022-1.929 1.278-3.582.703-4.538-.437-.725-1.244-.833-1.685-.833-.446 0-1.259.11-1.699.85-.577.969-.318 2.613.712 4.512.465.857.348 1.51.169 1.909-.289.641-.679 1.114-3.368 1.751-.783.181-.813.232-.813 1.355v1.623h10z"/>
                                        </svg>
                                    </div>
                                    <h4 class="alt-features-title">{{ __('Comproved Results')}}</h4>
                                    <div class="alt-features-descr">
                                        {{ _('Trust in a reliable solution with a solid base of satisfied customers.')}}
                                    </div>
                                </div>
                            </div>
                            <!-- End Feature Item -->
                            
                        </div>      
                        <!-- End Features Grid -->
                        
                    </div>
                </section>
                <!-- End Services Section -->
               
                
                <!-- Call to Action Section -->
                <section class="page-section pt-0">                    
                    <div class="container">  
                                          
                        <div class="small-section bg-gray-light-1 ps-4 ps-lg-0 pe-4 pe-lg-0 round position-relative overflow-hidden">
                            
                            <!-- Decoration Circles -->
                            <div class="decoration-12"></div>
                            <div class="decoration-13"></div>
                            <!-- End Decoration Circles -->                            
                            
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                                    <div class="row">
                                        
                                        <div class="col-md-7 col-lg-8 text-center text-md-start mb-sm-20">
                                            <h2 class="section-title-small mb-20">{{ __('Ready to simplify?')}}</h2>
                                            <p class="text-gray mb-0">
                                                {{ __('The MedSpence is the financial management solution you need.')}}
                                            </p>
                                        </div>
                                        
                                        <div class="col-md-5 col-lg-4 text-center text-md-end pt-2">
                                            <a href="#contact" class="btn btn-mod btn-color btn-large btn-circle btn-hover-anim">
                                                <span>{{ __('Contact Us')}}</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>  
                                              
                    </div>
                </section>
                <!-- End Call to Action Section -->
                
                
                <!-- Divider -->
                <hr class="mt-0 mb-0"/>
                <!-- End Divider -->
                
                
                <!-- Team Section -->
                <section class="page-section" id="team">
                    
                    <!-- Background Shape -->
                    <div class="bg-shape-3">
                        <img src="landing/images/bg-shape-3.svg" alt="" />
                    </div>
                    <!-- End Background Shape -->
                    
                    <div class="container position-relative">
                    
                        <div class="row mb-60 mb-sm-40">
                            
                            <div class="col-lg-8 offset-lg-2 text-center mb-md-30">
                                                              
                                <h2 class="section-caption-slick mb-30 mb-sm-20">{{ __('Our Team')}}</h2> 
                                                               
                                <h3 class="section-title mb-30"></h3>
                            
                                <p class="section-descr mb-0">{{ __('We believe in making the best work, and being the best to work with.')}}</p>
                            
                            </div>                          
                            
                        </div>
                        
                        <!-- Blog Posts Grid -->
                        <div class="row mt-n30">
                            
                            <!-- Post Item -->
                            <div class="post-prev-3 col-12 col-lg-10 offset-lg-1 col-xl-6 offset-xl-0 mt-30">                                
                                <div class="post-prev-3-container d-block d-sm-flex">
                                
                                    <div class="post-prev-3-img">
                                        <img src="landing/images/team/serra.jpg" alt="Add Image Description" class="wow scaleOutIn" />
                                    </div>
                                    
                                    <div class="post-prev-3-intro">
                                        
                                        <h4 class="post-prev-3-title">{{ __('Unstoppable Innovation')}}</h4>
                                        
                                        <div class="post-prev-3-text">
                                            {{ __('With creativity and dedication, Sérgio Serra continuously raises the standards of excellence in the development of innovative solutions.')}}
                                        </div>
                                        
                                        <div class="post-prev-3-info clearfix">
                                            <div class="float-start">
                                                <a href="#"><img class="post-prev-3-author-img" width="30" height="30" src="landing/images/team/serra-88.jpg" alt="Image Description" /></a> <a href="#">Sérgio Serra</a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                
                                </div>                                
                            </div>
                            <!-- End Post Item -->
                            
                            <!-- Post Item -->
                            <div class="post-prev-3 col-12 col-lg-10 offset-lg-1 col-xl-6 offset-xl-0 mt-30">                                
                                <div class="post-prev-3-container d-block d-sm-flex">
                                
                                    <div class="post-prev-3-img">
                                        <img src="landing/images/team/andre.jpg" alt="Add Image Description" class="wow scaleOutIn" />
                                    </div>
                                    
                                    <div class="post-prev-3-intro">
                                        
                                        <h4 class="post-prev-3-title">{{ __('Excellence in Action')}}</h4>
                                        
                                        <div class="post-prev-3-text">
                                            {{ __('With passion and dedication, André Vale constantly redefines the limits of excellence in software development with innovative solutions.')}}
                                        </div>
                                        
                                        <div class="post-prev-3-info clearfix">
                                            <div class="float-start">
                                                <a href="#"><img class="post-prev-3-author-img" width="30" height="30" src="landing/images/team/andre-88.jpg" alt="Image Description" /></a> <a href="#">André Vale</a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                
                                </div>                                
                            </div>
                            <!-- End Post Item -->                                        
                            
                        </div>
                        <!-- End Blog Posts Grid -->                        
                                               
                    </div>
                    
                </section>
                <!-- End Team Section -->
                
                <!-- Newsletter Section -->
                <section class="page-section bg-gray-light-1 overflow-hidden">
                    
                    <!-- Decoration Circles -->
                    <div class="decoration-14"></div>
                    <div class="decoration-15"></div>
                    <!-- End Decoration Circles -->
                    
                    <!-- Decoration Dots -->
                    <div class="decoration-16 opacity-035 d-none d-md-block">
                        <img src="landing/images/decoration-2.svg" alt="Image Description" />
                    </div>
                    <div class="decoration-17 opacity-035 d-none d-md-block">
                        <img src="landing/images/decoration-2.svg" alt="Image Description" />
                    </div>
                    <!-- End Decoration Dots -->
                    
                    <div class="container position-relative">
                        
                        <div class="row">
                            <div class="col-md-8 offset-md-2 col-xl-6 offset-xl-3 wow fadeInUp">
                                
                                <h2 class="section-title-small text-center mb-40">{{ __('Stay informed with our newsletter.')}}</h2>
                                
                                <form id="mailchimp" class="form">
                                
                                    <div class="d-sm-flex justify-content-between mb-3">
                                        <label for="newsletter-email" class="visually-hidden">{{ __('Your Email')}}</label>
                                        <input placeholder="Enter your email" class="newsletter-field input-lg input-circle" id="newsletter-email" name="newsletter-email" type="email" pattern=".{5,100}" required aria-required="true">
                                        <button type="submit" aria-controls="subscribe-result" class="newsletter-button btn btn-mod btn-color btn-large btn-circle btn-hover-anim">
                                            <span>{{ __('Subscribe Now')}}</span>
                                        </button>
                                    </div>
                                    
                                    <div class="form-tip">
                                        <i class="icon-info size-16"></i>
                                        {{ __('By sending the form you agree to the')}} <a href="#">{{ __('Terms & Conditions')}}</a> {{ __('and')}} <a href="#"> {{ __('Privacy Policy')}}</a>.
                                    </div>
                                    
                                    <div id="subscribe-result" role="region" aria-live="polite" aria-atomic="true"></div>
                                
                                </form>
                                
                            </div>
                        </div>
                    
                    </div>
                    
                </section>
                <!-- End Newsletter Section -->
                
                
                <!-- Contact Section -->
                <section class="page-section" id="contact">
                    <div class="container position-relative">
                    
                          <div class="row">
                            
                            <!-- Left Column -->
                            <div class="col-lg-4 mb-md-50 mb-sm-30 position-relative z-index-1"> 
                                                           
                                <h2 class="section-caption-slick mb-30 mb-sm-20">{{ __('Contact Us')}}</h2>
                                
                                <h3 class="section-title mb-50 mb-sm-30">{{ __('We’re open to talk to good people.')}}</h3>
                                
                                <!-- Contact Information -->
                                <div class="row">
                                    <div class="col-md-11">
                                        
                                        <!-- Address -->
                                        <div class="contact-item mb-30 mb-sm-20">
                                            <div class="ci-icon">
                                                <i class="mi-location"></i>
                                            </div>
                                            <h4 class="ci-title visually-hidden">
                                                {{ __('Our Address')}}
                                            </h4>
                                            <div class="ci-text">
                                                Av. do Atlântico 644 4900, Viana do Castelo
                                            </div>
                                            <div>
                                                <a href="https://maps.app.goo.gl/tgH5W4EkYxWhbKam8" class="link-hover-anim" data-link-animate="y" rel="nofollow noopener" target="_blank">{{ __('See Map')}} <i class="mi-arrow-right size-18"></i></a>
                                            </div>
                                        </div>
                                        <!-- End Address -->
                                        
                                        <!-- Email -->                                    
                                        <div class="contact-item mb-30 mb-sm-20">
                                            <div class="ci-icon">
                                                <i class="mi-email"></i>
                                            </div>
                                            <h4 class="ci-title visually-hidden">
                                                {{ __('Our Email')}}
                                            </h4>
                                            <div class="ci-text">
                                                medspence@lusohost.pt
                                            </div>
                                            <div>
                                                <a href="mailto:medspence@lusohost.pt" class="link-hover-anim" data-link-animate="y">{{ __('Say Hello')}} <i class="mi-arrow-right size-18"></i></a>
                                            </div>
                                        </div>                                    
                                        <!-- End Email -->
                                        
                                        <!-- Phone -->
                                        <div class="contact-item">
                                            <div class="ci-icon">
                                                <i class="mi-mobile"></i>
                                            </div>
                                            <h4 class="ci-title visually-hidden">
                                                {{ __('Contact Us')}}
                                            </h4>
                                            <div class="ci-text">
                                                +351 258 819 700
                                                <div class="small">
                                                    ({{ __('Monday-Friday')}}: 8am to 18pm)
                                                </div>
                                            </div>
                                            <div>
                                                <a href="tel:+351258819700" class="link-hover-anim" data-link-animate="y">{{ __('Call now')}}<i class="mi-arrow-right size-18"></i></a>
                                            </div>
                                        </div>
                                        <!-- End Phone -->
                                        
                                    </div>
                                </div>
                                <!-- End Contact Information -->
                            
                            </div>
                            <!-- End Left Column -->
                            
                            <!-- Right Column -->
                            <div class="col-lg-8 col-xl-7 offset-xl-1 wow fadeInUp">                                
                                <div class="row g-0">
                                    
                                    <!-- Google Map Column -->
                                    <div class="col-md-5 d-flex align-items-stretch pt-40 pt-sm-0 pb-40 pb-sm-0 mb-sm-30">
                                        <div class="map-boxed-1 d-flex align-items-stretch">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3840.680757261383!2d-8.851276708482676!3d41.6948480825723!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd25c9d271131d39%3A0x7adf1f41800a5ef0!2sEscola%20Superior%20de%20Tecnologia%20e%20Gest%C3%A3o%20-%20Instituto%20Polit%C3%A9cnico%20de%20Viana%20do%20Castelo!5e0!3m2!1spt-PT!2spt!4v1699474425562!5m2!1spt-PT!2spt" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                    <!-- End Google Map Column -->
                                    
                                    <!-- Contact Form Column -->
                                    <div class="col-md-7">
                                        <div class="box-shadow bg-white round p-4 p-sm-5 position-relative z-index-1">
                                    
                                            <h4 class="h3 mb-40 mb-sm-30">{{ __('Get in touch')}}</h4>
                                            
                                            <!-- Contact Form -->
                                            <form class="form contact-form" id="contact_form">
                                                
                                                <!-- Name -->
                                                <div class="form-group">
                                                    <label for="name" class="visually-hidden">{{ __('Name')}}</label>
                                                    <input type="text" name="name" id="name" class="input-lg input-circle form-control" placeholder="{{ __('Name')}}" pattern=".{3,100}" required aria-required="true">
                                                </div>
                                                <!-- End Name -->
                                                        
                                                <!-- Email -->
                                                <div class="form-group">
                                                    <label for="email" class="visually-hidden">{{ __('Email')}}</label>
                                                    <input type="email" name="email" id="email" class="input-lg input-circle form-control" placeholder="{{ __('Email')}}" pattern=".{5,100}" required aria-required="true">
                                                </div>
                                                <!-- End Email -->
                                                
                                                <!-- Message -->
                                                <div class="form-group">
                                                    <label for="message" class="visually-hidden">{{ __('Message')}}</label>
                                                    <textarea name="message" id="message" class="input-lg input-circle form-control" style="height: 130px;" placeholder="{{ __('Message')}}"></textarea>
                                                </div>
                                                
                                                <!-- Send Button -->
                                                <button class="submit_btn btn btn-mod btn-color btn-large btn-full btn-circle btn-hover-anim" id="submit_btn" aria-controls="result">
                                                    <span>{{ __('Send Message')}}</span>
                                                </button>
                                                <!-- End Send Button -->
                                                
                                                <!-- Inform Tip -->
                                                <div class="form-tip w-100 pt-30 mt-sm-20">
                                                    <i class="icon-info size-16"></i>
                                                    {{ __('All the fields are required. By sending the form you agree to the')}} <a href="#">{{ __('Terms & Conditions')}}</a> {{ __('and')}} <a href="#">{{ __('Privacy Policy')}}</a>.
                                                </div>
                                                <!-- End Inform Tip -->
                                               
                                               <div id="result" role="region" aria-live="polite" aria-atomic="true"></div>
                                               
                                            </form>
                                            <!-- End Contact Form -->
                                            
                                        </div>
                                    </div>
                                    <!-- End Contact Form Column -->
                                    
                                </div>
                            </div>    
                            <!-- End Right Column -->
                            
                        </div>            
                    
                    </div>
                </section>
                <!-- End Contact Section -->
                
            </main>
            
            <!-- Footer -->
            <footer class="page-section footer position-relative overflow-hidden pb-30">
                
                <!-- Background Shape -->
                <div class="bg-shape-4">
                    <img src="landing/images/bg-shape-4.svg" alt="" />
                </div>
                <!-- End Background Shape -->
                
                <div class="container position-relative">
                    
                    <div class="row pb-120 pb-sm-80 pb-xs-50">
                                                
                        <div class="col-md-4 col-lg-3 text-gray mb-sm-50">
                            
                            <div class="mb-30">
                                <img src="/landing/images/logo-dark.svg" alt="MedSpence Logo" />
                            </div>
                            
                            <p>
                                {{ __('To transform healthcare through financial excellence - MedSpence, your partner on the path to success.')}}
                            </p>
                            
                            <div class="clearlinks">                                
                                <strong>T.</strong> <a href="tel:+351258819700">+351 258 819 700</a>
                            </div>
                            
                            <div class="clearlinks">
                                <strong>E.</strong> <a href="mailto:medspence@lusohost.pt">medspence@lusohost.pt</a>
                            </div>
                            
                        </div>
                        
                        <div class="col-md-7 offset-md-1 offset-lg-2">                            
                            <div class="row mt-n30">
                                
                                <!-- Footer Widget -->
                                <div class="col-sm-4 mt-30">
                                    
                                    <h3 class="fw-title">{{ __('Company')}}</h3>
                                    
                                    <ul class="fw-menu clearlist local-scroll">                                        
                                        <li><a href="#about">{{ __('About Us')}}</a></li>
                                        <li><a href="#services">{{ __('Service')}}</a></li>
                                        <li><a href="#team">{{ __('Team')}}</a></li>
                                        <li><a href="#contact">{{ __('Contact Us')}}</a></li>
                                    </ul>
                                    
                                </div>
                                <!-- End Footer Widget -->
                                
                                <!-- Footer Widget -->
                                <div class="col-sm-4 mt-30">
                                    
                                    <h3 class="fw-title">{{ __('Social Media')}}</h3>
                                    
                                    <ul class="fw-menu clearlist">
                                        <li>
                                            <a href="#" rel="noopener nofollow" target="_blank">
                                                <i class="fa-facebook"></i>
                                                Facebook
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" rel="noopener nofollow" target="_blank">
                                                <i class="fa-youtube"></i>
                                                Youtube
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" rel="noopener nofollow" target="_blank">
                                                <i class="fa-pinterest"></i>
                                                Pinterest
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" rel="noopener nofollow" target="_blank">
                                                <i class="fa-linkedin"></i>
                                                LinkedIn
                                            </a>
                                        </li>
                                    </ul>
                                    
                                </div>
                                <!-- End Footer Widget -->
                                
                                <!-- Footer Widget -->
                                <div class="col-sm-4 mt-30">
                                    
                                    <h3 class="fw-title">{{ __('Legal')}}</h3>
                                    
                                    <ul class="fw-menu clearlist">                                     
                                        <li><a href="#">{{ __('Privacy Policy')}}</a></li>
                                        <li><a href="#">{{ __('Terms & Conditions')}}</a></li>
                                    </ul>
                                    
                                </div>
                                <!-- End Footer Widget -->                                
                                
                            </div>                            
                        </div>
                        
                    </div>
                    
                    <!-- Footer Text -->
                    <div class="row text-gray">
                        
                        <div class="col-md-4 col-lg-3">
                            <b>© MedSpence 2023.</b>
                        </div>
                        
                        <div class="col-md-7 offset-md-1 offset-lg-2 clearfix">
                            
                            <b>Based in Braga, Portugal.</b>
                            
                            <!-- Back to Top Link -->
                            <div class="local-scroll float-end mt-n20 mt-sm-10">
                                <a href="#top" class="link-to-top color-light">                                
                                    <i class="mi-arrow-up size-24"></i>
                                    <span class="visually-hidden">{{ __('Scroll to top')}}</span>
                                </a>
                            </div>
                            <!-- End Back to Top Link -->
                            
                        </div>
                        
                    </div>
                    <!-- End Footer Text --> 
                    
                 </div>
                 
            </footer>
            <!-- End Footer -->
        
        </div>
        <!-- End Page Wrap -->      
        
        <!-- JS -->
        <script src="/landing/js/jquery.min.js"></script>
        <script src="/landing/js/bootstrap.bundle.min.js"></script>
        <script src="/landing/js/plugins.js"></script>
        <script src="/landing/js/jquery.ajaxchimp.min.js"></script>             
        <script src="/landing/js/contact-form.js"></script>        
        <script src="/landing/js/all.js"></script> 
        <!-- End JS -->       
        
    </body>
</html>