@extends('layouts.base')
@section('title', $title)

@section('page-content')

<div id="Content">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div class="entry-content">

                @include('includes.breadcrumb')

                <div class="section mcb-section" style="padding-top:0px; padding-bottom:0px; background-color: white;">
                    <div class="__background-gradiant"></div>
                    <div class="section_wrapper mcb-section-inner __contact-left-menu" style="display:flex;">
                        <div class="wrap mcb-wrap one-third valign-top clearfix contact-sidebar" style="flex: 1;">
                            <ul class="nav nav-tabs">
                                <h6>Help us direct you to the right person:</h6>
                                <li class="active"><a data-toggle="tab" href="#menu">Job Seeker</a></li>
                                <li><a data-toggle="tab" href="#menu1">Employer</a></li>
                            </ul>

                            <div class="looking-for-help-section">
                                <h6>Looking for something else?</h6>
                                <h2 class="bold">We’re here to help.</h2>
                                <ul>
                                    <li>
                                        <a href="#!">
                                        <svg width="31px" height="35px" viewBox="0 0 31 35">
                                            <g id="Most-Current" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="FBHS_Contact1" transform="translate(-266.000000, -1606.000000)" fill="#FFF">
                                                    <g id="Secondary-Contacts" transform="translate(180.000000, 1483.000000)">
                                                        <g id="1" transform="translate(0.000000, 123.000000)">
                                                            <path d="M86.2859943,21.7068837 L88.8015319,10.6847571 C90.2113166,3.48230166 97.0404944,-1.18435362 104.054299,0.263350213 C109.17267,1.32053465 113.173248,5.4276859 114.200735,10.6847571 L116.717276,21.7068837 C118.056822,27.6069209 114.508781,33.5110796 108.773315,34.9268412 C107.651507,35.1998956 106.52669,34.4858325 106.261791,33.3338518 C106.225668,33.1782622 106.207607,33.0195815 106.206604,32.8578096 L106.206604,28.9278862 C106.207607,28.7331417 106.291893,28.5487011 106.43839,28.4250538 C108.688025,26.4879128 110.019544,23.6522679 110.095803,20.6383649 L110.196144,15.6358011 C110.206178,15.2071572 109.976398,14.8114858 109.605138,14.6146805 C107.831117,13.7295719 106.33805,12.3457525 105.300528,10.6229334 C105.036633,10.1850159 104.476732,10.0510646 104.050285,10.3230887 C104.012156,10.3478182 103.97503,10.3756388 103.940914,10.4055202 C99.4737527,14.3364741 95.6939242,14.7506925 93.7423005,14.6363188 C93.2546455,14.605407 92.8362254,14.9876832 92.80813,15.4884548 C92.8061232,15.5100931 92.8061232,15.5327617 92.8061232,15.5533696 L92.8623139,18.5920021 L92.8623139,18.6373394 L92.9275353,18.7527436 C93.0740325,18.9990078 93.2325705,19.2380592 93.4051563,19.4668067 C94.587168,21.0278539 96.9812935,22.8753507 99.1456391,23.3184202 C99.858057,22.400339 101.160477,22.2488711 102.055515,22.9804509 C102.948546,23.7120308 103.09705,25.0494825 102.384632,25.9685941 C102.076587,26.3642655 101.642112,26.6342287 101.156464,26.7310858 C101.023011,26.7568456 100.886548,26.7702408 100.750084,26.7702408 C100.027633,26.76818 99.3583611,26.3848733 98.9780704,25.7553025 C97.0304603,25.4163028 94.7477128,23.99745 93.3630133,22.868138 L93.3529792,22.8537124 L93.174373,22.6898798 C93.6690519,24.9248048 94.8621011,26.9320127 96.5709006,28.4065067 C96.7224148,28.5342756 96.8077043,28.7259289 96.8036907,28.9278862 L96.8036907,32.8578096 C96.8026873,34.042763 95.8685168,35.0010296 94.7146005,34.9999992 C94.5510454,34.9999992 94.3884937,34.9814521 94.2289522,34.9422971 C88.4864626,33.5255051 84.9374173,27.6110424 86.2859943,21.7068837" id="Fill-1"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <h5>Customer Support</h5>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                        <svg width="31px" height="28px" viewBox="0 0 31 28">
                                            <g id="Most-Current" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="FBHS_Contact1" transform="translate(-860.000000, -1610.000000)" fill="#FFF">
                                                <g id="Secondary-Contacts" transform="translate(180.000000, 1483.000000)">
                                                <g id="3" transform="translate(623.000000, 127.000000)">
                                                    <g id="Page-1" transform="translate(57.000000, 0.000000)">
                                                    <g id="icon/pr">
                                                        <path d="M13.0898232,11.706733 L25.3858451,11.706733 L25.3858451,5.74926746 L13.0898232,5.74926746 L13.0898232,11.706733 Z M13.0898232,16.6470273 L25.3858451,16.6470273 L25.3858451,14.8826365 L13.0898232,14.8826365 L13.0898232,16.6470273 Z M13.0898232,21.6720124 L25.3858451,21.6720124 L25.3858451,19.9076215 L13.0898232,19.9076215 L13.0898232,21.6720124 Z M28.926108,0 L9.7254902,0 L9.7254902,28 L28.926108,28 C30.0718185,28 31,27.0542865 31,25.8889064 L31,2.1119758 C31,0.945713476 30.0718185,0 28.926108,0 L28.926108,0 Z" id="Fill-1"></path>
                                                        <path d="M4.77934006,25.8775937 L4.77934006,11.9058988 C4.77934006,10.8282876 3.9034982,9.95555556 2.82225588,9.95555556 L1.82637479,9.95555556 C0.817156002,9.95555556 0,10.7715245 0,11.777295 L0,25.8767068 C0,27.0492188 0.952311293,28 2.12780665,28 L6.07843137,28 C5.41510343,28 4.77934006,27.0492188 4.77934006,25.8775937" id="Fill-3"></path>
                                                        <path d="M9.23354248,0 C8.1629281,0 7.29411765,0.94486105 7.29411765,2.11204235 L7.29411765,25.8897221 C7.29411765,27.055139 8.1629281,28 9.23354248,28 L9.7254902,28 L9.7254902,0 L9.23354248,0 Z" id="Fill-4"></path>
                                                    </g>
                                                    </g>
                                                </g>
                                                </g>
                                            </g>
                                            </g>
                                        </svg>
                                        <h5>PR/Media</h5>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                        <svg width="30px" height="28px" viewBox="0 0 30 28">
                                            <g stroke="none" stroke-width="1" fill="#FFF">
                                            <path d="M24.8136334,0 L5.18580512,0 C2.322168,0 0,2.29994619 0,5.13722344 L0,14.1195372 L0,16.4837939 L0,25.5896515 C0,28.8127916 2.42977858,26.9046317 2.42977858,26.9046317 L10.7286041,21.6210173 L24.8136334,21.6210173 C27.6772705,21.6210173 29.9977304,19.3210711 29.9977304,16.4837939 L29.9977304,5.13722344 C29.9977304,2.29994619 27.6772705,0 24.8136334,0 M7.24492503,12.5583154 C5.95188996,12.5583154 4.90225978,11.5183471 4.90225978,10.2389069 C4.90225978,8.95608184 5.95188996,7.9186521 7.24492503,7.9186521 C8.5379601,7.9186521 9.58588219,8.95608184 9.58588219,10.2389069 C9.58588219,11.5183471 8.5379601,12.5583154 7.24492503,12.5583154 M14.9997192,12.5583154 C13.7066842,12.5583154 12.6604702,11.5183471 12.6604702,10.2389069 C12.6604702,8.95608184 13.7066842,7.9186521 14.9997192,7.9186521 C16.2936084,7.9186521 17.3406764,8.95608184 17.3406764,10.2389069 C17.3406764,11.5183471 16.2936084,12.5583154 14.9997192,12.5583154 M22.7553675,12.5583154 C21.4614784,12.5583154 20.4152644,11.5183471 20.4152644,10.2389069 C20.4152644,8.95608184 21.4614784,7.9186521 22.7553675,7.9186521 C24.0484026,7.9186521 25.0963247,8.95608184 25.0963247,10.2389069 C25.0963247,11.5183471 24.0484026,12.5583154 22.7553675,12.5583154"></path>
                                            </g>
                                        </svg>
                                        <h5>General Inquiries</h5>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="wrap mcb-wrap two-third valign-top clearfix" style="padding: 80px 25px; background-color: #fff; display: flex; align-items: stretch;">
                            <div class="tab-content">
                                <div id="menu" class="tab-pane fade in active">
                                    <div class="column_attr clearfix">
                                        <h3>Sign up now and Get Started!</h3>
                                        <hr class="no_line" style="margin:0 auto 20px">
                                        <a class="banner_btn btn-getnow2" href="#!" >Job Portal</a>
                                    </div>
                                </div>
                                <div id="menu1" class="tab-pane fade">
                                    <div class="column_attr clearfix">
                                        <h3>Employer &mdash; Contact Form</h3>
                                        <hr class="no_line" style="margin:0 auto 20px">
                                        <div id="contactWrapper">
                                            <form id="contactform">
                                                <div class="column one-second">
                                                    <input placeholder="Your name" type="text" name="name" id="name" size="40" aria-required="true" aria-invalid="false" />
                                                </div>
                                                <div class="column one-second">
                                                    <input placeholder="Your e-mail" type="email" name="email" id="email" size="40" aria-required="true" aria-invalid="false" />
                                                </div>
                                                <div class="column one">
                                                    <input placeholder="Subject" type="text" name="subject" id="subject" size="40" aria-invalid="false" />
                                                </div>
                                                <div class="column one">
                                                    <textarea placeholder="Message" name="body" id="body" style="width:100%;" rows="6" aria-invalid="false"></textarea>
                                                </div>
                                                <div class="column one">
                                                    <input type="button" value="Send A Message" id="submit" onClick="return check_values();">
                                                </div>
                                            </form>
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