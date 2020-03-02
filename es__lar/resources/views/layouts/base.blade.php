<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('assets/content/employment/images/favicon.png') }}">

    <!-- FONTS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,900">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Poppins:100,300,400,400italic,500,700,700italic">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/be_style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/content/employment/css/structure.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/content/employment/css/employment.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/content/employment/css/custom.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/content/employment/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/content/employment/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/content/employment/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/content/employment/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/content/employment/css/public.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/content/employment/css/unittest.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/content/employment/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/content/employment/css/responsive.css') }}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    <!-- Revolution Slider -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/rs-plugin/css/settings.css') }}">

    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>

</head>

<body class="color-custom style-default button-default layout-full-width if-zoom if-border-hide no-content-padding header-classic minimalist-header-no sticky-header sticky-tb-color ab-hide subheader-both-center menu-link-color menuo-no-borders menuo-right footer-copy-center mobile-tb-center mobile-side-slide mobile-mini-mr-ll tablet-sticky mobile-header-mini mobile-sticky be-reg-2075">
    <div id="Wrapper">
        <div id="Header_wrapper">
            <header id="Header">
                <div class="header_placeholder"></div>
				<header class="header_top fixed header_ab">
                    <div class="">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="h_contact_info">
                                        
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="header_social_top">
                                        <div class="header_social">
                                            <h6>Follow us:</h6>
                                            
                                            @foreach($socials as $social)
                                            <a href="{{ $social->social_link }}"><i class="icon-{{ $social->social }}"></i></a>
                                            @endforeach

                                        </div>
                                        <a href="#" class="header_btn"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav class="navbar">
                        <div class="container">
                            <!--========== Brand and toggle get grouped for better mobile display ==========-->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="lnr lnr-menu"></i>
                                    <i class="lnr lnr-cross"></i>
                                </button>
                                <a class="navbar-brand" href="/" padding-bottom="10px">
                                    <img src="/assets/images/01.png" alt="executive solutions">
                                </a>
                            </div>
                            <!--========== Collect the nav links, forms, and other content for toggling ==========-->
                            <div class="collapse navbar-right navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul id="nav" class="nav navbar-nav menu_two">

                                    @php

                                    $callToActionButtons = [];

                                    @endphp
                                    @foreach ($menus as $menu)

                                        @if ($menu->call_to_action)
                                        
                                            @php

                                            array_push($callToActionButtons, [
                                                'name'     =>      $menu->name,
                                                'slug'     =>      $menu->slug
                                            ]);

                                            @endphp

                                        @else
                                        
                                        <li class="menu-item dropdown submenudropdown">
                                            <a href="{{ $menu->slug }}" data-toggle="dropdown" class="dropdown-toggle">{{ $menu->name }}</a>
                                        </li>

                                        @endif


                                    @endforeach
                                    
                                </ul>
                                <div class="menu_btn">
                                    <ul class="menu_action">
                                        @foreach ($callToActionButtons as $btn => $key)
                                        
                                        <li class="action_menu">
                                            <a class="banner_btn {{ (($btn+1) % 2 == 0 ? 'btn-getnow2' : 'btn-getnow') }}" href="{{ $key['slug'] }}">{{ $key['name'] }}</a>
                                        </li>

                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- /.navbar-collapse -->
                        </div>
                    </nav>
                </header>
                
                @if (!isset($breadcrumb))

                <div class="mfn-main-slider" id="mfn-rev-slider">
                    <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                        <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.6.3.1">
                            <ul>
                                @foreach($slides as $slide)
                                
                                <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    
                                    <img src="{{ asset($slide->image) }}" title="home_employment_slider_bg" alt="banner" width="1920" height="615" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                    
                                    <div class="tp-caption   tp-resizeme" id="slide-1-layer-1" data-x="60" data-y="111" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames="[{"delay":150,"speed":900,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 55px; line-height: 65px; font-weight: 300; color: #3c4653; letter-spacing: 0px;font-family:Poppins;">
                                        {!! $slide->slide_text !!}
                                    </div>

                                    <a class="tp-caption rev-btn  tp-resizeme" href="{{ $slide->button_1_url }}" target="_self" id="slide-1-layer-3" data-x="60" data-y="360" data-width="['auto']" data-height="['auto']" data-type="button" data-actions='' data-responsive_offset="on" data-frames='[{"delay":200,"speed":900,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(243,61,68);bs:solid;bw:0 0 0 0;br:3px 3px 3px 3px;"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[20,20,20,20]" data-paddingright="[35,35,35,35]" data-paddingbottom="[20,20,20,20]" data-paddingleft="[35,35,35,35]" style="z-index: 6; white-space: nowrap; font-size: 17px; line-height: 17px; font-weight: 500; color: rgba(255,255,255,1); letter-spacing: px;font-family:Poppins;background-color:#328CDE;border-color:rgba(0,0,0,1);border-radius:5px 5px 5px 5px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">{{ $slide->button_1 }} <i class="icon-right-circled"></i></a>
                                    <a class="tp-caption rev-btn  tp-resizeme" href="{{ $slide->button_2_url }}" target="_self" id="slide-1-layer-4" data-x="320" data-y="360" data-width="['auto']" data-height="['auto']" data-type="button" data-actions='' data-responsive_offset="on" data-frames='[{"delay":250,"speed":900,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(29,37,46);bs:solid;bw:0 0 0 0;br:3px 3px 3px 3px;"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[20,20,20,20]" data-paddingright="[35,35,35,35]" data-paddingbottom="[20,20,20,20]" data-paddingleft="[35,35,35,35]" style="z-index: 7; white-space: nowrap; font-size: 17px; line-height: 17px; font-weight: 500; color: rgba(255,255,255,1); letter-spacing: px;font-family:Poppins;background-color:#77777B ;border-color:rgba(0,0,0,1);border-radius:5px 5px 5px 5px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">{{ $slide->button_2 }} <i class="icon-right-circled"></i></a>
                                </li>

                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                @endif
            </header>
        </div>

        @yield('page-content')

        <footer class="footer_area_two">
            <div class="footer_top">
                <div class="illustration_bg"></div>
                <div class="container">
                    <div class="row d_flex">
                        <div class="col-md-4 col-xs-6">
                            <div class="service_wedget">
                                <h3 class="f_title">Quick Links</h3>
                                <div class="menu-service-menu-container">
                                    <ul id="menu-service-menu" class="">
                                        <li class="menu-item"><a href="#">About us</a></li>
                                        <li class="menu-item"><a href="#">Solutions</a></li>
                                        <li class="menu-item"><a href="#">Sectors</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <div class="service_wedget">
                                <h3 class="f_title">Contact</h3>
                                <div class="menu-service-menu-container">
                                    <ul id="menu-service-menu" class="">
                                        <li class="menu-item"><a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></li>
                                        <li class="menu-item"><a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a></li>
                                        <li class="menu-item">{!! $setting->address !!}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <div class="service_wedget">
                                <h3 class="f_title">Sign up to our jobs newsletter</h3>
                                <div class="">
                                    <form class="sm_subscribe_form" action="#">
                                        <input name="EMAIL" id="mce-EMAIL" type="email" placeholder="Email Address">
                                        <button type="submit" class="subscribe_btn">Subscribe</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bottom_two">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6">
                            <p>© 2020 All Rights Reserved <a href="#">Executive Solutions</a></p>
                        </div>
                        <div class="col-xs-6 text-right">
                            <div class="social_footer">
                                <ul>
                                    <li class="follow_text">Follow Us</li>

                                    @foreach($socials as $social)
                                    <li><a href="{{ $social->social_link }}"><i class="icon-{{ $social->social }}"></i></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    
    <!-- side menu -->
    <div id="body_overlay"></div>

    <!-- JS -->
    <script src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/mfn.menu.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.plugins.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.jplayer.min.js') }}"></script>
    <script src="{{ asset('assets/js/animations/animations.js') }}"></script>
    <script src="{{ asset('assets/js/translate3d.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>

    <script src="{{ asset('assets/plugins/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/rs-plugin/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/rs-plugin/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/rs-plugin/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/rs-plugin/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/rs-plugin/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/rs-plugin/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/rs-plugin/js/extensions/revolution.extension.parallax.min.js') }}"></script>

    <script>
        var revapi1, tpj = jQuery;
		  tpj(document).ready(function() {
			  if (tpj("#rev_slider_1_1").revolution == undefined) {
				  revslider_showDoubleJqueryError("#rev_slider_1_1");
			  } else {
				  revapi1 = tpj("#rev_slider_1_1").show().revolution({
					  sliderType : "hero",
					  sliderLayout : "auto",
					  dottedOverlay : "none",
					  delay : 9000,
					  visibilityLevels : [1240, 1024, 778, 480],
					  gridwidth : 1240,
					  gridheight : 615,
					  lazyType : "none",
					  shadow : 0,
					  spinner : "spinner2",
					  autoHeight : "off",
					  disableProgressBar : "on",
					  hideThumbsOnMobile : "off",
					  hideSliderAtLimit : 0,
					  hideCaptionAtLimit : 0,
					  hideAllCaptionAtLilmit : 0,
					  debugMode : false,
					  fallbacks : {
						  simplifyAll : "off",
						  disableFocusListener : false,
					  }
				  });
			  }
		  });
    </script>

</body>

</html>