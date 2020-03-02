@extends('layouts.base')
@section('title', $title)

@section('page-content')

<div id="Content">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div class="entry-content">

                @include('includes.breadcrumb')

                <div class="section mcb-section" style="padding-top:0px; padding-bottom:80px;">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one-second valign-top clearfix" style="margin-top:-120px">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_image ">
                                    <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                        <div class="image_wrapper">
                                            <img class="scale-with-grid" src="/assets/content/employment/images/home_employment_pic17.jpg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wrap mcb-wrap one-second valign-top clearfix" style="padding:50px 0 0 5%">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_column">
                                    <div class="column_attr clearfix">
                                        <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                            <div class="image_wrapper">
                                                <img class="scale-with-grid" src="/assets/content/employment/images/home_employment_pic18s.png">
                                            </div>
                                        </div>
                                        <hr class="no_line" style="margin:0 auto 30px">
                                        <h2>Excepteur sint occaecat cupidatat non proident</h2>
                                        <p>
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco lo laboris aliquip ex ea lorem commodo consequat uis aute irure dolor in.
                                        </p>
                                        <p>
                                            Lorem reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde
                                        </p>
                                        <hr class="no_line" style="margin:0 auto 15px">
                                        <a class="button  button_right button_size_2 button_theme button_js" href="#" style=" background-image: -webkit-linear-gradient(45deg, rgb(22, 192, 255) 0%, rgb(22, 107, 255) 100%);"><span class="button_icon"><i class="icon-right-circled" ></i></span><span class="button_label">Current job offers</span></a> <a class="button  button_right button_size_2 button_js" href="#" style="background-color: #77777A"><span class="button_icon"><i class="icon-right-circled" ></i></span><span class="button_label">Profile on Linkedin</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section mcb-section" style="padding-top:180px; padding-bottom:80px; background-color:#eff2f7; background-image:url(/assets/content/employment/images/home_employment_sectionbg2.png); background-repeat:no-repeat; background-position:center top; ">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one-fourth column_column">
                                    <div class="column_attr clearfix" style="background-color:#328DDD; padding:50px 50px 35px;">
                                        <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                            <div class="image_wrapper">
                                                <img class="scale-with-grid" src="/assets/content/employment/images/home_employment_pic22.png">
                                            </div>
                                        </div>
                                        <hr class="no_line" style="margin:0 auto 20px">
                                        <h3 style="color:#fff">Fusce ut velit laoreet tempus arcu eu</h3>
                                    </div>
                                </div>
                                
                                @foreach ($statistics as $stat)
                                
                                <div class="column mcb-column one-fourth column_column">
                                    <div class="column_attr clearfix align_center" style="background-color:#fff; padding:50px 50px 35px;">
                                        <div class="chart_box">
                                            <div class="chart" data-percent="42" data-bar-color="#328DDD" data-line-width="8">
                                                <div class="num">{{ $stat->percentage }}%</div>
                                            </div>
                                            <p><big>{{ $stat->title }}</big></p>
                                        </div>
                                        <hr class="no_line" style="margin:0 auto 20px">
                                        <p>{{ $stat->description }}</p>
                                    </div>
                                </div>

                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section mcb-section" style="padding-top:110px; padding-bottom:70px;">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one valign-top clearfix">
                            
                            <!-- One Third (1/3) Column -->
                            <div class="column one-third column_column">
                                <div class="column_attr ">
                                    <h3 class="themecolor">Our Mission</h3>
                                    <p>
                                        <span>We are Muffin group and we love what we do. We are located in <span class="tooltip" data-tooltip="Mon-Fri 8:00am-6:00pm (GMT +1)" >Europe</span> and reply always within 24 hours.</span>
                                    
                                        Donec ullamcorper nulla non metus auctor fringilla. Sed posuere consectetur est at lobortis. <span class="tooltip" data-tooltip="Mor porta ac consecteturbi leo risus porta">Morbi leo risus</span> , porta ac consect etur, vestibulum at eros. Donec ullamcorper nulla non metus.
                                    </p>
                                </div>
                            </div>
                            <!-- One Third (1/3) Column -->
                            <div class="column one-third column_column">
                                <div class="column_attr ">
                                    <h3 class="themecolor">Our Vision</h3>
                                    <p>
                                        Our mission is very clear - provide best and fully tested products and solutions for our customers
                                    
                                        Donec ullamcorper nulla non metus auctor fringilla. Sed posuere consectetur est at lobortis. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec ullamcorper nulla non metus.
                                    </p>
                                </div>
                            </div>
                            <!-- One Third (1/3) Column -->
                            <div class="column one-third column_column">
                                <div class="column_attr ">
                                    <h3 class="themecolor">Our Passion</h3>
                                    <p>
                                        <span>We love working with WordPress. Themes based on this web software gives unlimited possibilities.</span>
                                    </p>
                                    <p>
                                        Donec ullamcorper nulla non metus auctor fringilla. Sed posuere consectetur est at lobortis. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec ullamcorper nulla non metus.
                                    </p>
                                </div>
                            </div>
                            <!-- Page devider -->
                            <!-- One full width row-->
                            <div class="column one column_divider">
                                <hr class="flv_margin_40" />
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section mcb-section" style="padding-top:120px; padding-bottom:80px; background-color: #eff2f7;">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one-second valign-top clearfix" style="padding:0 5% 0 0">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_column">
                                    <div class="column_attr clearfix">
                                        <h2>Many desktop publishing packages and web page editors now</h2>
                                        <p>
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco lo laboris aliquip ex ea lorem commodo consequat uis aute irure dolor in Lorem reprehenderit in voluptate velit esse cillum dolore eu fugiat.
                                        </p>
                                    </div>
                                </div>
                                <div class="column mcb-column two-fifth column_image ">
                                    <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                        <div class="image_wrapper">
                                            <img class="scale-with-grid" src="/assets/content/employment/images/home_employment_pic20.jpg">
                                        </div>
                                    </div>
                                </div>
                                <div class="column mcb-column three-fifth column_column">
                                    <div class="column_attr clearfix" style="background-color:#375d90; padding:50px 40px 35px;">
                                        <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                            <div class="image_wrapper">
                                                <img class="scale-with-grid" src="/assets/content/employment/images/home_employment_pic21.png">
                                            </div>
                                        </div>
                                        <hr class="no_line" style="margin:0 auto 20px">
                                        <h5 style="color: #829bbc;">The repository is waiting for your application</h5>
                                        <h4 style="color:#fff">+61 (0) 791 803 458</h4><a class="button  button_right button_size_2 button_theme button_js" href="#" style="background-color: #76767A"><span class="button_icon"><i class="icon-right-circled" ></i></span><span class="button_label">Submit CV</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wrap mcb-wrap one-second valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_image ">
                                    <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                        <div class="image_wrapper">
                                            <img class="scale-with-grid" src="/assets/content/employment/images/home_employment_pic19.jpg">
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
</div>

@stop