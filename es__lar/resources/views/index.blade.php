@extends('layouts.base')
@section('title', 'Executive Solutions | Welcome')

@section('page-content')

<div id="Content">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div class="entry-content">
                <div class="section mcb-section" style="padding-top:0px; padding-bottom:0px; background-color:#f9faff">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_divider">
                                    <hr class="no_line" style="margin: 0 auto 200px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section mcb-section" style="padding-top:0px; padding-bottom:20px; background-color:#303945">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one employment-shadow column-margin-20px valign-top clearfix" style="padding:60px 50px 40px; background-color:#fff; margin-top:-200px">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one-third column_column">
                                    <div class="column_attr clearfix" style=" padding:35px 0 0">
                                        <h3><b>Talent Management</b><br>Solutions</h3>
                                    </div>
                                </div>

                                @foreach($solutions as $sol)

                                <div class="column mcb-column one-fifth column_hover_color ">
                                    <div class="hover_color" style="background:#fff;border-color:#b6bbc3;border-radius: 5px;" ontouchstart="this.classList.toggle('hover');">
                                        <div class="hover_color_bg" style="background:#fff;border-color:#f1f4f9;border-width:3px;">
                                            <a href="{{ $sol->slug }}">
                                                <div class="hover_color_wrapper" style="padding:30px 30px 15px;">
                                                    <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                                        <div class="image_wrapper">
                                                            <img class="scale-with-grid" alt="{{ $sol->name }}" src="/assets/images/es.png">
                                                        </div>
                                                    </div>
                                                    <hr class="no_line" style="margin:0 auto 20px">
                                                    <h6>{{ $sol->name }}</h6>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                @endforeach
                                
                            </div>
                        </div>
                        <div class="wrap mcb-wrap one valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_divider">
                                    <hr class="no_line" style="margin: 0 auto 110px">
                                </div>
                                <div class="column mcb-column one column_column">
                                    <div class="column_attr clearfix" style="background-image:url('/assets/content/employment/images/home_employment_pic2.png'); background-repeat:no-repeat; background-position:left top; padding:0 0 0 110px; background-position: 0 10px;">
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
                                    <a class="button  button_right button_size_2 button_theme button_js kill_the_icon" href="#" style="background-color: #328CDE"><span class="button_icon"><i class="icon-right-circled"></i></span><span class="button_label">Current job offers</span></a> <a class="button  button_right button_size_2 button_js kill_the_icon" href="#" style="background-color: #76767A"><span class="button_icon"><i class="icon-right-circled"></i></span><span class="button_label">Profile on Linkedin</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section mcb-section" style="padding-top:180px; padding-bottom:80px; background-color:#eff2f7; background-image:url(/assets/images/home_employment_sectionbg2.png); background-repeat:no-repeat; background-position:center top; ">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one-fourth column_column">
                                    <div class="column_attr clearfix" style="background-color:#328DDD; padding:50px 50px 35px;">
                                        <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                            <div class="image_wrapper">
                                                <img class="scale-with-grid" src="/assets/images/home_employment_pic22.png">
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

                <div class="section mcb-section" id="testimonials" style="padding-top:110px; padding-bottom:70px; background-color:#ffffff">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one  valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one-fourth column_placeholder">
                                    <div class="placeholder">
                                        &nbsp;
                                    </div>
                                </div>
                                <div class="column mcb-column one-second column_column">
                                    <div class="column_attr clearfix align_center">
                                        <h3><b>TESTIMONIALS</b></h3>
                                        <h5>What our customers say about us</h5>
                                    </div>
                                </div>
                                <div class="column mcb-column one column_testimonials ">
                                    <div class="testimonials_slider ">
                                        <ul class="testimonials_slider_ul">
                                            @foreach ($testimonials as $testi)
                                            
                                            <li>
                                                <div class="bq_wrapper">
                                                    <blockquote>{{ $testi->quote }}</blockquote>
                                                </div>
                                                <div class="hr_dots">
                                                    <span></span><span></span><span></span>
                                                </div>
                                                <div class="author">
                                                    <h5>{{ $testi->name }}</h5>
                                                    <span class="company">{{ $testi->Compnay }}</span>
                                                </div>
                                            </li>

                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section mcb-section" style="padding-top:0px; padding-bottom:120px; background-color:#eff2f7; background-image:url(/assets/content/employment/images/home_employment_sectionbg1.jpg); background-repeat:no-repeat; background-position:center top; ">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="placeholder">
                                        &nbsp;
                                    </div>
                                <div class="column mcb-column one column_column">
                                    <div class="placeholder">
                                        &nbsp;
                                    </div>
                                    <div class="column_attr clearfix align_center">
                                        <div class="placeholder">
                                        &nbsp;
                                    </div>
                                        <h3><b>News from the market</b></h3>
                                        <h5>Etiam ut felis et nisi sagittis posuere</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wrap mcb-wrap one employment-shadow column-margin-20px valign-top clearfix" style="padding:60px 50px 20px; background-color:#fff">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_blog ">
                                    <div class="column_filters">
                                        <div class="blog_wrapper isotope_wrapper clearfix">
                                            <div class="posts_group lm_wrapper col-4 masonry isotope">

                                                @foreach($blogs as $blog)
                                                
                                                <div class="post-item isotope-item clearfix post type-post format-standard has-post-thumbnail">
                                                    
                                                    <div class="image_frame post-photo-wrapper scale-with-grid image">
                                                        <div class="image_wrapper">
                                                            <a href="{{ $blog->slug }}">
                                                                <img src="{{ $blog->image }}" class="scale-with-grid wp-post-image">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="post-desc-wrapper">
                                                        <div class="post-desc">
                                                            <div class="post-head">
                                                                <div class="post-meta clearfix">
                                                                    <div class="author-date">
                                                                        <span class="vcard author post-author">
                                                                            <i class="icon-user"></i>
                                                                            <span class="fn">
                                                                                <a href="#">{{ __('Jhon Deo') }}</a>
                                                                            </span>
                                                                        </span>
                                                                        <div class="clearfix"></div>
                                                                        <span class="date">
                                                                            <i class="icon-clock"></i>
                                                                            <span class="post-date updated">{{ date('M d, Y', strtotime($blog->created_at)) }}</span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="category">
                                                                        <span class="cat-btn">Categories <i class="icon-down-dir"></i></span>
                                                                        <div class="cat-wrapper">
                                                                            <ul class="post-categories">
                                                                                <li>
                                                                                    <a href="#" rel="category tag">Uncategorized</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="post-title">
                                                                <h2 class="entry-title"><a href="{{ $blog->slug }}">{{ $blog->title }}</a></h2>
                                                            </div>
                                                            <div class="post-excerpt"></div>
                                                            <div class="post-footer">
                                                                <div class="button-love">
                                                                    <span class="love-text">Do you like it?</span><a href="#" class="mfn-love " data-id="55"><span class="icons-wrapper"><i class="icon-heart-empty-fa"></i><i class="icon-heart-fa"></i></span><span class="label">{{ $blog->comments_counts }}</span></a>
                                                                </div>
                                                                <div class="post-links">
                                                                    <i class="icon-doc-text"></i><a href="{{ $blog->slug }}" class="post-more">Read more</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                @endforeach


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
</div>

@stop