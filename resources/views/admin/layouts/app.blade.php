<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->

<head>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="">

<!-- Bootstrap Stylesheet -->
<link rel="stylesheet" href="/admin/bootstrap/css/bootstrap.min.css" media="screen">

<!-- jquery-ui Stylesheets -->
<link rel="stylesheet" href="/admin/assets/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" href="/admin/assets/jui/jquery-ui.custom.css" media="screen">
<link rel="stylesheet" href="/admin/assets/jui/timepicker/jquery-ui-timepicker.css" media="screen">

<!-- Uniform Stylesheet -->
<link rel="stylesheet" href="/admin/plugins/uniform/css/uniform.default.css">

<!-- Plugin Stylsheets first to ease overrides -->

<!-- iButton -->
<link rel="stylesheet" href="/admin/plugins/ibutton/jquery.ibutton.css" media="screen">

<!-- Circular Stat -->
<link rel="stylesheet" href="/admin/custom-plugins/circular-stat/circular-stat.css">

<!-- Fullcalendar -->
<link rel="stylesheet" href="/admin/plugins/fullcalendar/fullcalendar.css" media="screen">
<link rel="stylesheet" href="/admin/plugins/fullcalendar/fullcalendar.print.css" media="print">

<!-- End Plugin Stylesheets -->

<!-- Main Layout Stylesheet -->
<link rel="stylesheet" href="/admin/assets/css/fonts/icomoon/style.css" media="screen">
<link rel="stylesheet" href="/admin/assets/css/main-style.css" media="screen">

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<title>MoonCake :: Responsive Admin Template</title>

</head>

<body>

    <div id="customizer">
        <div id="showButton"><i class="icon-cogs"></i></div>
        <div id="layoutMode">
            <label class="checkbox"><input type="checkbox" class="uniform" name="layout-mode" value="boxed"> Boxed</label>
        </div>
    </div>

	<div id="wrapper">
        <header id="header" class="navbar navbar-inverse">
            <div class="navbar-inner">
                <div class="container">
					<div class="brand-wrap pull-left">
						<div class="brand-img">
							<a class="brand" href="#">
								<img src="assets/images/logo.png" alt="">
							</a>
						</div>
					</div>
                    
                    <div id="header-right" class="clearfix">
						<div id="nav-toggle" data-toggle="collapse" data-target="#navigation" class="collapsed">
							<i class="icon-caret-down"></i>
						</div>
						<div id="header-search">
							<span id="search-toggle" data-toggle="dropdown">
								<i class="icon-search"></i>
							</span>
							<form class="navbar-search">
								<input type="text" class="search-query" placeholder="Search">
							</form>
						</div>
						<div id="dropdown-lists">
							<a class="item" href="#">
								<span class="item-icon"><i class="icon-exclamation-sign"></i></span>
								<span class="item-label">Notifications</span>
								<span class="item-count">4</span>
							</a>
							<a class="item" href="mail.html">
								<span class="item-icon"><i class="icon-envelope"></i></span>
								<span class="item-label">Messages</span>
								<span class="item-count">16</span>
							</a>
						</div>
                        
                        <div id="header-functions" class="pull-right">
                        	<div id="user-info" class="clearfix">
                                <span class="info">
                                	Welcome
                                    <span class="name">Shana-chan</span>
                                </span>
                            	<div class="avatar">
                                	<a class="dropdown-toggle" href="#" data-toggle="dropdown">
                                    	<img src="assets/images/pp.jpg" alt="Avatar">
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                    	<li><a href="profile.html"><i class="icol-user"></i> My Profile</a></li>
                                    	<li><a href="#"><i class="icol-layout"></i> My Invoices</a></li>                                        
                                        <li class="divider"></li>
                                        <li><a href="index.html"><i class="icol-key"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="logout-ribbon">
                            	<a href="index.html"><i class="icon-off"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <div id="content-wrap">
        	<div id="content">
            	<div id="content-outer">
                	<div id="content-inner">
                    	<aside id="sidebar">
                        	<nav id="navigation" class="collapse">
                            	<ul>
                                	<li @if($tab == 'main') class="active" @endif>
                                    	<span title="General">
                                    		<i class="icon-home"></i>
											<span class="nav-title">Основные</span>
                                        </span>
                                    	<ul class="inner-nav">
                                        	<li @if(\Request::path() == 'web-admin')class="active" @endif><a href="/web-admin"><i class="icol-grid"></i> Заказы</a></li>
                                        	<li @if(\Request::path() == 'web-admin/messages')class="active" @endif><a href="/web-admin/messages"><i class="icol-email"></i> Сообщения</a></li>
                                            
                                        </ul>
                                    </li>
                                	<li @if($tab == 'prices') class="active" @endif>
                                    	<span title="Table">
                                    		<i class="icon-table"></i>
											<span class="nav-title">Цены</span>
                                        </span>
                                    	<ul class="inner-nav">
                                        	<li @if(\Request::path() == 'web-admin/types-of-promotions')class="active" @endif><a href="/web-admin/types-of-promotions"><i class="icol-cog"></i>Типы накруток</a></li>
                                            
                                        </ul>
                                    </li>
                                	
                                </ul>
                            </nav>
                        </aside>

                        <div id="sidebar-separator"></div>
                        
                        <section id="main" class="clearfix">
                        	@yield('content')
                        </section>
                    </div>
                </div>
            </div>
        </div>
        
        <footer id="footer">
            <div class="footer-left">MoonCake - Responsive Admin Template</div>
            <div class="footer-right"><p>Copyright 2012. All Rights Reserved.</p></div>
        </footer>
        
    </div>

    <!-- Core Scripts -->
    <script src="/admin/assets/js/libs/jquery-1.8.2.min.js"></script>
    <script src="/admin/bootstrap/js/bootstrap.min.js"></script>
    <script src="/admin/assets/js/libs/jquery.placeholder.min.js"></script>
    <script src="/admin/assets/js/libs/jquery.mousewheel.min.js"></script>
    
    <!-- Template Script -->
    <script src="/admin/assets/js/template.js"></script>
    <script src="/admin/assets/js/setup.js"></script>

    <!-- Customizer, remove if not needed -->
    <script src="/admin/assets/js/customizer.js"></script>

    <!-- Uniform Script -->
    <script src="/admin/plugins/uniform/jquery.uniform.min.js"></script>
    
    <!-- jquery-ui Scripts -->
    <script src="/admin/assets/jui/js/jquery-ui-1.8.24.min.js"></script>
    <script src="/admin/assets/jui/jquery-ui.custom.min.js"></script>
    <script src="/admin/assets/jui/timepicker/jquery-ui-timepicker.min.js"></script>
    <script src="/admin/assets/jui/jquery.ui.touch-punch.min.js"></script>
    
    <!-- Plugin Scripts -->
    
    <!-- Flot -->
    <!--[if lt IE 9]>
    <script src="/admin/assets/js/libs/excanvas.min.js"></script>
    <![endif]-->
    <script src="/admin/plugins/flot/jquery.flot.min.js"></script>
    <script src="/admin/plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>
    <script src="/admin/plugins/flot/plugins/jquery.flot.pie.min.js"></script>
    <script src="/admin/plugins/flot/plugins/jquery.flot.resize.min.js"></script>

    <!-- Circular Stat -->
    <script src="/admin/custom-plugins/circular-stat/circular-stat.min.js"></script>

    <!-- SparkLine -->
    <script src="/admin/plugins/sparkline/jquery.sparkline.min.js"></script>
    
    <!-- iButton -->
    <script src="/admin/plugins/ibutton/jquery.ibutton.min.js"></script>

    <!-- Full Calendar -->
    <script src="/admin/plugins/fullcalendar/fullcalendar.min.js"></script>
    
    <!-- DataTables -->
    <script src="/admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/admin/plugins/datatables/TableTools/js/TableTools.min.js"></script>
    <script src="/admin/plugins/datatables/dataTables.bootstrap.js"></script>
    
    <!-- Demo Scripts -->
    <script src="/admin/assets/js/demo/dashboard.js"></script>

</body>

</html>
