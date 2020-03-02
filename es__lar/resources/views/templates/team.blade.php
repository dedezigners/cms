@extends('layouts.base')
@section('title', $title)

@section('page-content')

<div id="Content">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div class="entry-content">

                @include('includes.breadcrumb')

                <div class="content_wrapper clearfix">
                    <div class="sections_group">
                        <div class="entry-content">
                            <div class="section flv_sections_11">
                                <div class="section_wrapper clearfix">
                                    <div class="items_group clearfix">
                                        <!-- Page Title-->
                                        <!-- One full width row-->
                                        <div class="column one column_fancy_heading">
                                            <div class="fancy_heading fancy_heading_icon">
                                            <h2 class="title">&nbsp;</h2>

                                                <span class="icon_top"><i class="icon-users"></i></span>
                                                <h2 class="title">We are workoholics</h2>

                                                <div class="inside">
                                                    <span class="big">Donec vestibulum justo a diam ultricies pellentesque. Quisque mattis diam vel lacus tincidunt elementu s pellentesque</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Page devider -->
                                        <!-- One full width row-->
                                        
                                        @foreach ($teams as $team)

                                        <div class="column one-fourth column_our_team">
                                            <!-- Team Member Area -->
                                            <div class="team team_vertical">
                                                <div class="image_frame no_link scale-with-grid">
                                                    <div class="image_wrapper"><img class="scale-with-grid" src="{{ $team->image }}" alt="{{ $team->name }}" />
                                                    </div>
                                                </div>
                                                <div class="desc_wrapper">
                                                    <h4>{{ $team->name }}</h4>
                                                    <p class="subtitle">{{ $team->designation }}</p>
                                                    <hr class="hr_color" />
                                                    
                                                    <div class="links">
                                                        <a href="mailto:{{ $team->email }}" class="icon_bar icon_bar_small">
                                                            <span class="t"><i class="icon-mail"></i></span>
                                                            <span class="b"><i class="icon-mail"></i></span>
                                                        </a>
                                                        
                                                        <a target="_blank" href="{{ $team->linkedin }}" class="icon_bar icon_bar_small">
                                                            <span class="t"><i class="icon-linkedin"></i></span>
                                                            <span class="b"><i class="icon-linkedin"></i></span>
                                                        </a>
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

            <div align="center" class="section dark flv_sections_2">
                <div class="section_wrapper clearfix">
                    <div class="items_group clearfix">
                        <!-- One full width row-->
                        <div class="column one column_call_to_action">
                            <div class="call_to_action">
                                <div class="inside">
                                    <h3>
                                        Want to know more about our solutions. Talk to us today !
                                    </h3>
                                    <a class="button button_left button_js kill_the_icon" style="background-color: #ffffff" href="#"><span class="button_icon"><i class="icon-mail"></i></span><span style="color: #3c4653;" class="button_label">Contact us</span></a>
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