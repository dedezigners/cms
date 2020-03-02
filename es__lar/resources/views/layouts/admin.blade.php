<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="/admin/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/assets/content/employment/images/favicon.png">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>{{ ucfirst($title) }}</title>
    <meta content='width=device-width, initial-scale=1.1, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <!-- Fonts and icons -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="/admin/assets/css/material-dashboard.min.css?v=2.1.1" rel="stylesheet" />
    <link href="/admin/assets/css/helper.css" rel="stylesheet" />
    <link href="/admin/assets/demo/demo.css?v=2.1" rel="stylesheet" />
</head>

<body>

    <div class="wrapper ">
        <div class="sidebar" data-color="azure" data-background-color="black">
            <!--
            Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
            Tip 2: you can also add an image using data-image tag
            -->

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <div class="logo">
                <a href="/cms" class="simple-text logo-mini">ES</a>
                <a href="/cms" class="simple-text logo-normal">Executive Sol</a>
            </div>
            <div class="sidebar-wrapper">
                <div class="user">
                    <div class="user-info">
                        <a class="username">
                            <span>{{ Auth::user()->name }}</span>
                        </a>
                    </div>
                </div>
                <ul class="nav">
                    <li class="nav-item active"><a class="nav-link" href="/cms"><i class="material-icons">dashboard</i><p> Dashboard </p></a></li>
                    
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#productPages"><i class="material-icons">local_offer</i><p> Modules<b class="caret"></b></p></a>
                        <div class="collapse" id="productPages">
                            <ul class="nav">
                                @foreach($modules as $module)
                                    <li class="nav-item">
                                        <a class="nav-link" href="/module/{{ $module }}"><span class="sidebar-mini"> {{ $module[0] }} </span><span class="sidebar-normal"> {{ $module }} </span></a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="{{ route('index') }}">
                            <i class="material-icons">home</i>
                            <p> {{ __('Preview') }} </p>
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="material-icons">power_settings_new</i>
                            <p> {{ __('Logout') }} </p>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-minimize">
                            <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                                <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                                <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
                            </button>
                        </div>
                        <a class="navbar-brand">{{ ucfirst($title) }}</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">
                        <form class="navbar-form">
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Search...">
                                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                    <i class="material-icons">search</i><div class="ripple-container"></div>
                                </button>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/cms"><i class="material-icons">dashboard</i><p class="d-lg-none d-md-block">Stats</p></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">person</i><p class="d-lg-none d-md-block">Account</p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->

            @yield('content')
        </div>
    </div>

    <!--   Core JS Files   -->
    <script src="/admin/assets/js/core/jquery.min.js"></script>
    <script src="/admin/assets/js/core/popper.min.js"></script>
    <script src="/admin/assets/js/core/bootstrap-material-design.min.js"></script>
    <script src="/admin/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <script src="/admin/assets/js/plugins/moment.min.js"></script>
    <script src="/admin/assets/js/plugins/sweetalert2.js"></script>
    <script src="/admin/assets/js/plugins/jquery.validate.min.js"></script>
    <script src="/admin/assets/js/plugins/jquery.bootstrap-wizard.js"></script>
    <script src="/admin/assets/js/plugins/bootstrap-selectpicker.js"></script>
    <script src="/admin/assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
    <script src="/admin/assets/js/plugins/jquery.dataTables.min.js"></script>
    <script src="/admin/assets/js/plugins/bootstrap-tagsinput.js"></script>
    <script src="/admin/assets/js/plugins/jasny-bootstrap.min.js"></script>
    <script src="/admin/assets/js/plugins/fullcalendar.min.js"></script>
    <script src="/admin/assets/js/plugins/jquery-jvectormap.js"></script>
    <script src="/admin/assets/js/plugins/nouislider.min.js"></script>
    <!-- <script src="tps://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script> -->
    <script src="/admin/assets/js/plugins/arrive.min.js"></script>
    <!-- <script src="tps://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script> -->
    <!-- <script async der src="https://buttons.github.io/buttons.js"></script> -->
    <script src="/admin/assets/js/plugins/chartist.min.js"></script>
    <script src="/admin/assets/js/plugins/bootstrap-notify.js"></script>
    <script src="/admin/assets/js/material-dashboard.min.js?v=2.1.7" type="text/javascript"></script>
    <script src="/admin/assets/demo/demo.js"></script>

    <script src="/admin/assets/js/toastr.min.js"></script>
    <script>
        $(document).ready(function() {

            @if(Session::has('success'))
                
                md.showNotification('bottom','right', "{{ Session::get('success') }}");

            @elseif(Session::has('info'))
                
                md.showNotification('bottom','right', "{{ Session::get('info') }}");

            @elseif(Session::has('error'))
                
                md.showNotification('bottom','right', "{{ Session::get('error') }}");

            @endif
        
        });
    </script>

    <link href="/admin/assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <script src="/admin/assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
    <script>
        jQuery(document).ready(function() {
            // Select2
            $(".singleSelect").select2();
            $(".limitedMultiselect").select2({
                maximumSelectionLength: 10
            });
            $(".multi-tags").select2({
                
                tags: true,
                tokenSeparators: [',', ' ']
                });
        });
    </script>

    <script src="/admin/assets/js/plugins/ckeditor.js"></script>
    <script>
        ClassicEditor
        .create( ckeditor, {
            toolbar: [
                'heading', '|', 'bold', 'italic', 'link', 'unlink', '|', 'bulletedList', 'numberedList', 'blockQuote', 'inserttable', '|', 'undo', 'redo'
            ]
        })
        .catch( error => {
            console.error( error );
        });
    </script>

    <script>
        $(document).ready(function() {
            $().ready(function() {
                $sidebar = $('.sidebar');
                $sidebar_img_container = $sidebar.find('.sidebar-background');
                $full_page = $('.full-page');
                $sidebar_responsive = $('body > .navbar-collapse');
                window_width = $(window).width();
                fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

                if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                    if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                        $('.fixed-plugin .dropdown').addClass('open');
                    }
                }

                $('.fixed-plugin a').click(function(event) {
                    // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                    if ($(this).hasClass('switch-trigger')) {
                        if (event.stopPropagation) {
                            event.stopPropagation();
                        } else if (window.event) {
                            window.event.cancelBubble = true;
                        }
                    }
                });

                $('.fixed-plugin .active-color span').click(function() {
                    $full_page_background = $('.full-page-background');

                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data-color', new_color);
                    }

                    if ($full_page.length != 0) {
                        $full_page.attr('filter-color', new_color);
                    }

                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.attr('data-color', new_color);
                    }
                });

                $('.fixed-plugin .background-color .badge').click(function() {
                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('background-color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data-background-color', new_color);
                    }
                });

                $('.fixed-plugin .img-holder').click(function() {
                    $full_page_background = $('.full-page-background');

                    $(this).parent('li').siblings().removeClass('active');
                    $(this).parent('li').addClass('active');


                    var new_image = $(this).find("img").attr('src');

                    if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                        $sidebar_img_container.fadeOut('fast', function() {
                            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                            $sidebar_img_container.fadeIn('fast');
                        });
                    }

                    if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                        $full_page_background.fadeOut('fast', function() {
                            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                            $full_page_background.fadeIn('fast');
                        });
                    }

                    if ($('.switch-sidebar-image input:checked').length == 0) {
                        var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                        $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                        $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                    }

                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                    }
                });

                $('.switch-sidebar-image input').change(function() {
                    $full_page_background = $('.full-page-background');

                    $input = $(this);

                    if ($input.is(':checked')) {
                        if ($sidebar_img_container.length != 0) {
                            $sidebar_img_container.fadeIn('fast');
                            $sidebar.attr('data-image', '#');
                        }

                        if ($full_page_background.length != 0) {
                            $full_page_background.fadeIn('fast');
                            $full_page.attr('data-image', '#');
                        }

                        background_image = true;
                    } else {
                        if ($sidebar_img_container.length != 0) {
                            $sidebar.removeAttr('data-image');
                            $sidebar_img_container.fadeOut('fast');
                        }

                        if ($full_page_background.length != 0) {
                            $full_page.removeAttr('data-image', '#');
                            $full_page_background.fadeOut('fast');
                        }

                        background_image = false;
                    }
                });

                $('.switch-sidebar-mini input').change(function() {
                    $body = $('body');

                    $input = $(this);

                    if (md.misc.sidebar_mini_active == true) {
                        $('body').removeClass('sidebar-mini');
                        md.misc.sidebar_mini_active = false;
                        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();
                    } else {
                        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                        setTimeout(function() {
                            $('body').addClass('sidebar-mini');
                            md.misc.sidebar_mini_active = true;
                        }, 300);
                    }

                    // we simulate the window Resize so the charts will get updated in realtime.
                    var simulateWindowResize = setInterval(function() {
                        window.dispatchEvent(new Event('resize'));
                    }, 180);

                    // we stop the simulation of Window Resize after the animations are completed
                    setTimeout(function() {
                        clearInterval(simulateWindowResize);
                    }, 1000);

                });
            });
        });
    </script>

    <?php 
    if (isset($dashboard) && $dashboard === true) {
        ?>
        <script>
            $(document).ready(function() {
                // Javascript method's body can be found in assets/js/demos.js
                md.initDashboardPageCharts();
                md.initVectorMap();
                md.initFormExtendedDatetimepickers();
            });
        </script>
        <?php
    } ?>

    <?php 
    if (isset($dataTables) && $dataTables === true) {
        ?>
        <script>
            $(document).ready(function() {
                $('#datatables').DataTable({
                    "pagingType": "full_numbers",
                    "lengthMenu": [
                        [10, 25, 50, -1],
                        [10, 25, 50, "All"]
                    ],
                    responsive: true,
                    language: {
                        search: "_INPUT_",
                        searchPlaceholder: "Search records",
                    }
                });

                var table = $('#datatable').DataTable();

                // Edit record
                table.on('click', '.edit', function() {
                    $tr = $(this).closest('tr');
                    var data = table.row($tr).data();
                    alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
                });

                // Delete a record
                table.on('click', '.remove', function(e) {
                    $tr = $(this).closest('tr');
                    table.row($tr).remove().draw();
                    e.preventDefault();
                });

                //Like record
                table.on('click', '.like', function() {
                    alert('You clicked on Like button');
                });
            });
        </script>
        <?php
    } ?>

    <?php 
    if (isset($datePicker) && $datePicker === true) {
        ?>
        <script>
            $(document).ready(function() {
            // initialise Datetimepicker and Sliders
            md.initFormExtendedDatetimepickers();
            if ($('.slider').length != 0) {
                md.initSliders();
            }
            });
        </script>
        <?php
    } ?>

    <!-- form Select2 Start -->
    <?php
    if (isset($formSelect) && $formSelect === true) {
    ?>
    <link href="/assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <script src="/assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
    <script>
        jQuery(document).ready(function() {
            // Select2
            $(".singleSelect").select2();
            $(".limitedMultiselect").select2({
                maximumSelectionLength: 10
            });
            $(".multi-tags").select2({
                
                tags: true,
                tokenSeparators: [',', ' ']
                });
        });
    </script>
    <?php
    } ?>
    <!-- form Select2 End -->

    <?php 
    if (isset($ckEditor) && $ckEditor === true) {
        ?>
        <script src="/assets/js/plugins/ckeditor.js"></script>

        <script>
            ClassicEditor
            .create( ckeditor, {
                toolbar: [
                    'heading', '|', 'bold', 'italic', 'link', 'unlink', '|', 'bulletedList', 'numberedList', 'blockQuote', 'inserttable', '|', 'undo', 'redo'
                ]
            })
            .catch( error => {
                console.error( error );
            });
        </script>
        <?php
    } ?>

    <?php 
    if (isset($uploadImage) && $uploadImage === true) {
        ?>
        <link rel="stylesheet" href="/assets/plugins/croppie/croppie.css">
        <script src="/assets/plugins/croppie/croppie.js"></script>
        <?php
    } ?>

    <script src="/admin/assets/js/custom.js?2"></script>

    <?php 
    if (isset($_SESSION['flash_msg'], $_SESSION['flash_type'])) {
        ?>
        <script>
            $(document).ready(function() {
                md.showNotification('top','center', "<?= $_SESSION['flash_msg'] ?>", "<?= $_SESSION['flash_type'] ?>");
            });
        </script>
        <?php
        unset($_SESSION['flash_msg']);
        unset($_SESSION['flash_type']);
    } ?>
    
</body>
</html>