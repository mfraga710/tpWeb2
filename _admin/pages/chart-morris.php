<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../assets/vendor/charts/morris-bundle/morris.css">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
       <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="../index.php">Concept</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="../assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="../assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">
John Abraham</span>is now following you
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="../assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="../assets/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown connection">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                                <li class="connection-list">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/github.png" alt="" > <span>Github</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/dribbble.png" alt="" > <span>Dribbble</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/dropbox.png" alt="" > <span>Dropbox</span></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/bitbucket.png" alt=""> <span>Bitbucket</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/mail_chimp.png" alt="" ><span>Mail chimp</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/slack.png" alt="" > <span>Slack</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="conntection-footer"><a href="#">More</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">
John Abraham</h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
       <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.php" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-2" aria-controls="submenu-1-2">E-Commerce</a>
                                            <div id="submenu-1-2" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="../index.php">E Commerce Dashboard</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="../ecommerce-product.php">Product List</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="../ecommerce-product-single.php">Product Single</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="../ecommerce-product-checkout.php">Product Checkout</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../dashboard-finance.php">Finance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../dashboard-sales.php">Sales</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-1" aria-controls="submenu-1-1">Infulencer</a>
                                            <div id="submenu-1-1" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="../dashboard-influencer.php">Influencer</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="../influencer-finder.php">Influencer Finder</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="../influencer-profile.php">Influencer Profile</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>UI Elements</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="cards.php">Cards <span class="badge badge-secondary">New</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="general.php">General</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="carousel.php">Carousel</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="listgroup.php">List Group</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="typography.php">Typography</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="accordions.php">Accordions</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="tabs.php">Tabs</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Chart</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="chart-c3.php">C3 Charts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="chart-chartist.php">Chartist Charts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="chart-charts.php">Chart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="chart-morris.php">Morris</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="chart-sparkline.php">Sparkline</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="chart-gauge.php">Guage</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Forms</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="form-elements.php">Form Elements</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="form-validation.php">Parsely Validations</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="multiselect.php">Multiselect</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Tables</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="general-table.php">General Tables</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="data-tables.php">Data Tables</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-divider">
                                Features
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-fw fa-file"></i>Pages</a>
                                <div id="submenu-6" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="invoice.php">Invoice</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="blank-page.php">Blank Page</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="blank-page-header.php">Blank Page Header</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="login.php">Login</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="404-page.php">404 page</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="sign-up.php">Sign up Page</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="forgot-password.php">Forgot Password</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pricing.php">Pricing Tables</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="timeline.php">Timeline</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="calendar.php">Calendar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="sortable-nestable-lists.php">Sortable/Nestable List</a>
                                        </li>
                                       <li class="nav-item">
                                            <a class="nav-link" href="widgets.php">Widgets</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="media-object.php">Media Objects</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="cropper-image.php">Cropper</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="color-picker.php">Color Picker</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7"><i class="fas fa-fw fa-inbox"></i>Apps <span class="badge badge-secondary">New</span></a>
                                <div id="submenu-7" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="inbox.php">Inbox</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="email-details.php">Email Detail</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="email-compose.php">Email Compose</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="message-chat.php">Message Chat</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-8" aria-controls="submenu-8"><i class="fas fa-fw fa-columns"></i>Icons</a>
                                <div id="submenu-8" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="icon-fontawesome.php">FontAwesome Icons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="icon-material.php">Material Icons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="icon-simple-lineicon.php">Simpleline Icon</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="icon-themify.php">Themify Icon</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="icon-flag.php">Flag Icons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="icon-weather.php">Weather Icon</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-9" aria-controls="submenu-9"><i class="fas fa-fw fa-map-marker-alt"></i>Maps</a>
                                <div id="submenu-9" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="map-google.php">Google Maps</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="map-vector.php">Vector Maps</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fas fa-f fa-folder"></i>Menu Level</a>
                                <div id="submenu-10" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Level 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-11" aria-controls="submenu-11">Level 2</a>
                                            <div id="submenu-11" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Level 1</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Level 2</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Level 3</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Morris.js </h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Charts</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Morris.js</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
               
                    <div class="row">
                        <!-- ============================================================== -->
                        <!--area chart  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Area Chart</h5>
                                <div class="card-body">
                                    <div id="morris_area"></div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!--end area chart  -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!--line chart  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Line Chart</h5>
                                <div class="card-body">
                                    <div id="morris_line"></div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!--end line chart  -->
                        <!-- ============================================================== -->
                    </div>
                    <div class="row">
                        <!-- ============================================================== -->
                        <!--bar chart  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Bar Chart</h5>
                                <div class="card-body">
                                    <div id="morris_bar"></div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!--end bar chart  -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!--stacked chart  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Stacked Bars </h5>
                                <div class="card-body">
                                    <div id="morris_stacked"></div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!--end stacked chart  -->
                        <!-- ============================================================== -->
                    </div>
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- upadating chart  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Updating data </h5>
                                <div class="card-body">
                                    <div id="morris_udateing"></div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end upadating chart  -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- donut chart  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Donut Chart </h5>
                                <div class="card-body">
                                    <div id="morris_donut"></div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end donut chart  -->
                        <!-- ============================================================== -->
                    </div>
               
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="../assets/vendor/charts/morris-bundle/morris.js"></script>
    <script src="../assets/vendor/charts/morris-bundle/Morrisjs.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
</body>

 
</html>