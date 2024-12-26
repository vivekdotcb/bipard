
<?php  $db = \Config\Database::connect(); ?>

<!DOCTYPE html>
<html lang="en">


<head>
    <title><?= singleData('db_setting',['id' => 1])['name']; ?> | Admin</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="colorlib" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/backend/files/bower_components/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>public/backend/files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/backend/files/assets/css/font-awesome-n.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>public/backend/files/bower_components/chartist/css/chartist.css" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/backend/files/assets/css/widget.css">

    <link rel="icon" href="<?= base_url(singleData('db_setting',['id' => 1])['favicon']) ?>" type="image/x-icon">
    
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/backend/files/assets/icon/feather/css/feather.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/backend/files/assets/icon/themify-icons/themify-icons.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/backend/files/assets/icon/icofont/css/icofont.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/backend/files/assets/icon/font-awesome/css/font-awesome.min.css">
    <script src="<?= base_url() ?>public/backend/cities.js"></script>

    <link rel="stylesheet" type="text/css"
        href="<?= base_url() ?>public/backend/files/bower_components/bootstrap-multiselect/css/bootstrap-multiselect.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/backend/files/bower_components/multiselect/css/multi-select.css" />

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/backend/files/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/backend/files/assets/css/pages.css">
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    
    <link href="<?= base_url('public/common/css/toastr.css');?>" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


 
 <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</head>

<body>

    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a href="<?= base_url() ?>admin">
                            <!-- <img class="img-fluid" src="<?= base_url(singleData('db_setting',['id' => 1])['logo']) ?>" alt="Theme-Logo" width="180" height="80" /> -->
                            <p style="color: red; font-size: 30px; font-weight: 1000;"> BIPARD </p>

                        </a>
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu icon-toggle-right"></i>
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-prepend search-close">
                                            <i class="feather icon-x input-group-text"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn">
                                            <i class="feather icon-search input-group-text"></i>
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                    <i class="full-screen feather icon-maximize"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            
                           
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <!-- <img src="<?= base_url() ?>public/uplode/05.jpg" class="img-radius" alt="User-Profile-Image"> -->
                                        <span><?= $_SESSION['user']['name']; ?></span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        
                                        <li>
                                            <a href="<?= base_url()?>logout">
                                                <i class="feather icon-log-out"></i> Logout
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

//----------side bar----------------------------------------------------------------------------------



<div class="pcoded-main-container">
    <div class="pcoded-wrapper">

        <nav class="pcoded-navbar">
            <div class="nav-list">
                <div class="pcoded-inner-navbar main-menu">
                    <div class="pcoded-navigation-label">Navigation</div>
                    <ul class="pcoded-item pcoded-left-item">

                        <li class="<?php if ($page_name == 'home') { echo "active pcoded-trigger";} ?>">
                            <a href="<?= base_url('admin') ?>" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                <span class="pcoded-mtext">Dashboard</span>
                            </a>
                        </li>


                        <?php if (isset($_SESSION['user']) && $_SESSION['role'] == 10){?>
                            
                            <li class="<?php if ($page_name == 'table') { echo "active pcoded-trigger";} ?>">
                                <a href="<?= base_url('admin/table') ?>" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                    <span class="pcoded-mtext">Table</span>
                                </a>
                            </li>

                            <li class="<?php if ($page_name == 'column') { echo "active pcoded-trigger";} ?>">
                                <a href="<?= base_url('admin/column') ?>" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                    <span class="pcoded-mtext">Column</span>
                                </a>
                            </li>
                                
                        <?php } ?>

                        <?php if ($_SESSION['role'] == '5'): ?>
                            <li class="<?php if ($page_name == 'training_admin_profile') { echo "active pcoded-trigger";} ?>">
                                <a href="<?= base_url('admin/training_admin_profile') ?>" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                    <span class="pcoded-mtext">Profile</span>
                                </a>
                            </li>
                            <li class="<?php if ($page_name == 'training_daily_report') { echo "active pcoded-trigger";} ?>">
                                <a href="<?= base_url('admin/training_daily_report') ?>" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                    <span class="pcoded-mtext">Daily Report</span>
                                </a>
                            </li>
                        <?php endif ?>

                        <?php if ($_SESSION['role'] == '6'): ?>
                            <li class="<?php if ($page_name == 'mess_admin_profile') { echo "active pcoded-trigger";} ?>">
                                <a href="<?= base_url('admin/mess_admin_profile') ?>" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                    <span class="pcoded-mtext">Profile</span>
                                </a>
                            </li>
                            <li class="<?php if ($page_name == 'mess_daily_report') { echo "active pcoded-trigger";} ?>">
                                <a href="<?= base_url('admin/mess_daily_report') ?>" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                    <span class="pcoded-mtext">Daily Report</span>
                                </a>
                            </li>
                        <?php endif ?>
                        

                        <?php if ($_SESSION['role'] == '9'): ?>
                            <li class="<?php if ($page_name == 'hostel_admin_profile') { echo "active pcoded-trigger";} ?>">
                                <a href="<?= base_url('admin/hostel_admin_profile') ?>" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                    <span class="pcoded-mtext">Profile</span>
                                </a>
                            </li>
                            <li class="<?php if ($page_name == 'hostel_daily_report') { echo "active pcoded-trigger";} ?>">
                                <a href="<?= base_url('admin/hostel_daily_report') ?>" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                    <span class="pcoded-mtext">Daily Report</span>
                                </a>
                            </li>
                        <?php endif ?>


                        <?php if ($_SESSION['role'] == '2' || $_SESSION['role'] == '1'): ?>
                            
                                <li class="pcoded-hasmenu <?php if($page_name == 'training_report' || $page_name == 'mess_report' || $page_name == 'hostel_report')  { echo "active pcoded-trigger";} ?>">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                        <span class="pcoded-mtext">View Daily Report</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                     
                                        <li class="<?php if ($page_name == 'training_report') { echo "active pcoded-trigger";} ?>">
                                            <a href="<?= base_url('training_report') ?>" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                                <span class="pcoded-mtext">Training Report</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($page_name == 'mess_report') { echo "active pcoded-trigger";} ?>">
                                            <a href="<?= base_url('mess_report') ?>" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                                <span class="pcoded-mtext">Mess Report</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($page_name == 'hostel_report') { echo "active pcoded-trigger";} ?>">
                                            <a href="<?= base_url('hostel_report') ?>" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                                <span class="pcoded-mtext">Hostel Report</span>
                                            </a>
                                        </li>
                                   
                                    </ul>
                                </li>

                                <li class="pcoded-hasmenu <?php if($page_name == 'daily_night_watch_report' || $page_name == 'mess_inspection' || $page_name == 'hostel_inspection')  { echo "active pcoded-trigger";} ?>">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                        <span class="pcoded-mtext">Inspection Report</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                     
                                        <li class="<?php if ($page_name == 'daily_night_watch_report') { echo "active pcoded-trigger";} ?>">
                                            <a href="<?= base_url('admin/daily_night_watch_report') ?>" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                                <span class="pcoded-mtext">Daily Night Inspection</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($page_name == 'mess_inspection') { echo "active pcoded-trigger";} ?>">
                                            <a href="<?= base_url('mess_inspection') ?>" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                                <span class="pcoded-mtext">Mess Inspection</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($page_name == 'hostel_inspection') { echo "active pcoded-trigger";} ?>">
                                            <a href="<?= base_url('hostel_inspection') ?>" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                                <span class="pcoded-mtext">Hostel Inspection</span>
                                            </a>
                                        </li>
                                   
                                    </ul>
                                </li>
                        <?php endif ?>
                        
                        <li class="">
                            <a href="<?= base_url()?>logout" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-menu"></i>
                                </span>
                                <span class="pcoded-mtext">Logout</span>
                            </a>
                        </li>
                        
                      
                    </ul>
                   
                </div>
            </div>
        </nav>

        
