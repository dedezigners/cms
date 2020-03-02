@extends('layouts.base')
@section('title', $title)

@section('page-content')

<div id="Content">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div class="entry-content">

                @include('includes.breadcrumb')

                <div class="flv_sections_16 section" id="hoverbox">
                    <div class="section_wrapper clearfix">
                        <div class="items_group clearfix">
                            <!-- One full width row-->
                            <div class="column one column_column">
                                <div class="column_attr ">
                                    <h5 class="flv_style_4"></h5>
                                </div>
                            </div>

                            @foreach($solutions as $sol)
                            
                            <div class="column one-third column_hover_box">
                                <div class="hover_box">
                                    <a href="{{ $sol->slug }}">
                                        <div class="hover_box_wrapper">
                                            <img class="visible_photo scale-with-grid" src="{{ asset($sol->image) }}" alt="{{ asset($sol->name) }}">
                                            <img class="hidden_photo scale-with-grid" src="{{ asset($sol->image) }}" alt="{{ asset($sol->name) }}">
                                        </div>
                                    </a>
                                </div>
                            </div>

                            @endforeach
                        </div>
                    </div>
                </div>


                <div class="section full-width flv_sections_16">
                    <div class="section_wrapper clearfix">
                        <div class="items_group clearfix">
                            <!-- One full width row-->
                            <div class="column one column_fancy_divider">
                                <div class="fancy-divider">
                                    <svg preserveAspectRatio="none" viewBox="0 0 100 100" height="100" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="flv_style_50">
                                        <path d="M0 100 C50 0 50 0 100 100 Z" class="flv_style_50">
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="section center dark flv_sections_41">
                    <div class="section_wrapper clearfix">
                        <div class="items_group clearfix">
                            <!-- Page Title-->
                            <!-- One full width row-->
                            <div class="column one column_fancy_heading">
                                <div class="fancy_heading fancy_heading_icon">
                                    <h2 class="title">Stamp</h2>
                                </div>
                            </div>
                            <!-- One full width row-->
                            <div class="column one column_column">
                                <div class="column_attr ">
                                    <p class="big">
                                        Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula. Ut molestie a, ultricies porta urna. Vestibulum commodo volutpat a, convallis ac, laoreet enim. Phasellus fermentum in, dolor. Pellentesque facilisis. Nulla imperdiet sit amet magna. Vestibulum dapibus, mauris nec malesuada fames ac turpis velit, rhoncus eu, luctus et interdum adipiscing wisi. Aliquam erat ac ipsum. Integer aliquam purus
                                    </p>
                                    <br>

                                <div class="inside">
                                        <h3>
                                            Want to know more about our solutions. Talk to us today !
                                        </h3>
                                        <a class="button button_left button_js" style="background-color: #ffffff" href="#"><span class="button_icon"><i class="icon-mail"></i></span><span style="color: #3c4653;" class="button_label">Contact us</span></a>
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