<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <base href="/landing/"/>
        
        <title>MedSpense &mdash; {{ __('Take Care of You With MedSpense') }}</title>
        <meta name="description" content="MedSpence &mdash; Take Care of You With MedSpense">  
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <!-- Favicon -->
        <link rel="icon" href="images/favicon.png" type="image/png" sizes="any">
        <link rel="icon" href="images/favicon.svg" type="image/svg+xml">         

        <!-- CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style-responsive.css">
        <link rel="stylesheet" href="css/vertical-rhythm.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/splitting.css">
        <link rel="stylesheet" href="css/YTPlayer.css">
        <link rel="stylesheet" href="css/home.css">
        
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
        <a href="/#main" class="btn skip-to-content">Skip to Content</a>
        <!-- End Skip to Content -->
        
        <!-- Page Wrap -->
        <div class="page" id="top">
            
            <!-- Navigation Panel -->
            <nav class="main-nav transparent stick-fixed wow-menubar wch-unset">
                <div class="main-nav-sub full-wrapper">

                    <!-- Logo -->
                    <div class="nav-logo-wrap position-static local-scroll">
                        <a href="/" class="logo">
                            <img src="images/logo-dark.svg" alt="Company Logo"/>
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
                            <li><a href="/#home" class="active">{{ __('Home') }}</a></li>
                            <li><a href="/#about">{{ __('About Us') }}</a></li>
                            <li><a href="/#services">{{ __('Services') }}</a></li>
                            <li><a href="/#team">{{ __('Team') }}</a></li>
                            <li><a href="/#contact">{{ __('Contact Us') }}</a></li>
                            
                            <li class="desktop-nav-display">
                                <div class="vr mt-2"></div>
                            </li>
                            
                            <!-- Languages -->
                            <li>
                                <a href="/#" class="mn-has-sub">{{ App::currentLocale() == 'pt' ? 'PT' : 'EN' }} <i class="mi-chevron-down"></i></a>
                                
                                <ul class="mn-sub to-left">                                    
                                    <li><a href="{{ url('en') }}">English</a></li>
                                    <li><a href="{{ url('pt') }}">Português</a></li>
                                </ul>
                                
                            </li>
                            <!-- End Languages -->  
                                                      
                            <li>
                                <a href="/app/dashboard" class="opacity-1 no-hover">
                                    <span class="btn btn-mod btn-color-light btn-small btn-circle" data-btn-animate="y">{{ __('App') }}</span>
                                </a>
                            </li>
                        </ul>                      
                        
                    </div>
                    <!-- End Main Menu -->
                    
                </div>
            </nav>
            <!-- End Navigation Panel -->
            
            <main id="main">

                @yield('content')
                
            </main>
            
            <!-- Footer -->
            <footer class="page-section footer position-relative overflow-hidden pb-30">
                
                <!-- Background Shape -->
                <div class="bg-shape-4">
                    <img src="images/bg-shape-4.svg" alt="" />
                </div>
                <!-- End Background Shape -->
                
                <div class="container position-relative">
                    
                    <div class="row pb-120 pb-sm-80 pb-xs-50">
                                                
                        <div class="col-md-4 col-lg-3 text-gray mb-sm-50">
                            
                            <div class="mb-30">
                                <img src="images/logo-dark.svg" alt="MedSpence Logo" />
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
                                        <li><a href="/#about">{{ __('About Us')}}</a></li>
                                        <li><a href="/#services">{{ __('Service')}}</a></li>
                                        <li><a href="/#team">{{ __('Team')}}</a></li>
                                        <li><a href="/#contact">{{ __('Contact Us')}}</a></li>
                                    </ul>
                                    
                                </div>
                                <!-- End Footer Widget -->
                                
                                <!-- Footer Widget -->
                                <div class="col-sm-4 mt-30">
                                    
                                    <h3 class="fw-title">{{ __('Social Media')}}</h3>
                                    
                                    <ul class="fw-menu clearlist">
                                        <li>
                                            <a href="https://www.facebook.com/ipvc.oficial/" rel="noopener nofollow" target="_blank">
                                                <i class="fa-facebook"></i>
                                                Facebook
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com/user/ipvctv" rel="noopener nofollow" target="_blank">
                                                <i class="fa-youtube"></i>
                                                Youtube
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com/school/instituto-polit-cnico-de-viana-do-castelo/" rel="noopener nofollow" target="_blank">
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
                                        <li><a href="{{ route('privacy-policy') }}">{{ __('Privacy Policy')}}</a></li>
                                        <li><a href="{{ route('terms-of-service') }}">{{ __('Terms & Conditions')}}</a></li>
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
                                <a href="/#top" class="link-to-top color-light">                                
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
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>             
        <script src="js/contact-form.js"></script>        
        <script src="js/all.js"></script> 
        <!-- End JS -->       
        
    </body>
</html>