<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Web Admin panel</title>
<link rel="icon" type="image/png" href="template/images/fav.png">
<link rel="stylesheet" href="template/css/font-awesome.min.css">
	<link rel="stylesheet" href="template/css/themify-icons.css">
    <link rel="stylesheet" href="template/css/line-icons.css">
<link rel="stylesheet" href="template/css/bootstrap.min.css">
<link rel="stylesheet" href="template/css/animate.min.css">
<link rel="stylesheet" href="template/css/perfect-scrollbar.min.css">
<link rel="stylesheet" href="template/css/jquery.datepicker.min.css">
<!-- calander -->
<link rel="stylesheet" href="template/css/style.css">
<link rel="stylesheet" href="template/css/color.css">
<link rel="stylesheet" href="template/css/responsive.css">
</head>
<body>
<!-- Start Page Loading -->
<?php if (count($sub_data)!='') { ?>
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
<div class="panel-layout">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="main-page">
          <header>
			<div class="side-menus">
				<div class="side-header">
					<div class="logo"><a title="" href="template/index-2.html"><img alt="" src="template/images/logo2.png"></a></div>
					<nav class="slide-menu">
                                        <span>Navigation <i class="ti-layout"></i></span>
                                        <ul class="parent-menu">
                                            <li class="menu-item-has-children"> <a title="#"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
                                                <ul>
                                                    <li><a href="template/index-2.html" title="">Home</a></li>
                                                    <!-- <li><a href="template/index2.html" title="">Dashboard 2</a></li>
                                                    <li><a href="template/index3.html" title="">Dashboard 3</a></li>
                                                    <li><a href="template/index4.html" title="">Dashboard 4</a></li>
                                                    <li><a href="template/index5.html" title="">Dashboard 5</a></li> -->
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"> <a title=""><i class="fa fa-shopping-cart"></i><span>New Orders</span></a>
                                                <ul class="mega">
                                                    <li><a href="template/index-boxed.html" title="">New Products</a></li>
                                                    <li><a href="template/overlap-sidebar.html">All Products</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"> <a title=""><i class="fa fa-laptop"></i><span>Products</span></a>
                                                <ul class="mega">
                                                    <!-- <li><a href="template/product.html" title="">product</a></li>
                                                    <li><a href="template/product-detail.html">product-detail</a></li>
                                                    <li><a href="template/product-order.html">product-order</a></li> -->
                                                    <li><a href="{{ url('add_redirect')}}">Add product</a></li>
                                                    <li><a href="{{ url('view_product')}}">View Product</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"> <a title="#"><i class="fa fa-bookmark-o"></i><span>Previous Orders</span></a>
                                                <ul>
                                                    <!-- <li><a href="template/accordion-n-tabs.html">accordions & tabs</a></li>
                                                    <li><a href="template/elements.html">elements</a></li>
                                                    <li><a href="template/invoices.html">invoices</a></li>
                                                    <li><a href="template/tabels.html">tabels styles</a></li>
                                                    <li><a href="typography.html">typography</a></li>
                                                    <li><a href="template/megamenu.html">mega menu styles</a></li>
                                                    <li><a href="template/socials-btns.html">social buttons</a></li>
                                                    <li><a href="template/testimonials.html">testimonials styles</a></li>
													<li><a href="template/calendar.html">event calendar</a></li> -->
                                                </ul>
                                            </li>
											<!-- <li><a href="template/inbox.html" title=""><i class="fa fa-inbox"></i><span>inbox</span><ins>5</ins></a></li>
                                            <li><a href="template/charts.html" title=""><i class="fa fa-bar-chart"></i><span>charts</span></a></li>
                                            <li> <a href="template/maps.html" title=""><i class="fa fa-globe"></i><span>Google maps</span></a> </li>
											<li class="menu-item-has-children"> 
												<a title=""><i class="fa fa-flag"></i><span>Icons</span></a>
                                                <ul>
                                                    <li><a href="template/icons.html">Font Awesome</a></li>
                                                    <li><a href="template/icons2.html">Themify Icons</a></li>
                                                </ul>
                                            </li> -->
											<!-- <li class="menu-item-has-children active"> <a title=""><i class="fa fa-inbox"></i><span>Pages</span></a>
                                                <ul class="mega" style="display: block;">
                                                    <li><a class="active" href="template/profile.html">profile</a></li>
                                                    <li><a href="template/edit-profile.html">edit profile</a></li>
                                                    <li><a href="template/login.html">login</a></li>
                                                    <li><a href="template/register.html">register</a></li>
                                                    <li><a href="template/forgot-pass.html">forgot password</a></li>
                                                </ul>
                                            </li> -->
                                            <!-- <li class="menu-item-has-children"> <a title=""><i class="fa fa-external-link"></i><span>extras</span></a>
                                                <ul class="mega">
                                                    <li><a href="template/404.html">404 error page</a></li>
                                                    <li><a href="template/505.html">505 error page</a></li>
                                                    <li><a href="template/maintenance.html">maintenance</a></li>
                                                    <li><a href="template/coming-soon.html">coming soon </a></li>
                                                    
                                                </ul>
                                            </li> -->
                                        </ul>
                                    </nav>
				</div>
			</div>
		</header>
			<!-- side header -->
		<?php }?>
			<div class="topbar">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-2">
							<div class="logo"><a href="template/index-2.html" title=""><img src="template/images/logo.png" alt=""></a></div>
						</div>
						<div class="col-lg-9">
							<ul class="notify-area">
								<li>
									<div class="nav-icon3"> <span></span> <span></span> <span></span> <span></span> </div>
									<i class="fa fa-navicon nav-icon3"></i>
								</li>
								<li class="notifications"><!-- <a href="#" title=""><i class="fa fa-bell-o"></i></a><span class="red-bg">02</span> -->
									<div class="drop notify"> <span class="drop-head">Notifications</span>
										<ul class="drop-meta">
											<li> <i class="notifi-icon blue">N</i>
												<div class="notifi-meta">
													<h4><a href="#" title="">Nulla Vel Metus Scelerisque Ante Commodo. </a></h4>
													<span>02:34PM</span> </div>
											</li>
											<li> <i class="notifi-icon red">C</i>
												<div class="notifi-meta">
													<h4><a href="#" title="">Nulla Vel Metus Scelerisque Ante Commodo. </a></h4>
													<span>02:34PM</span> </div>
											</li>
											<li> <i class="notifi-icon yellow">A</i>
												<div class="notifi-meta">
													<h4><a href="#" title="">Nulla Vel Metus Scelerisque Ante Commodo. </a></h4>
													<span>02:34PM</span> </div>
											</li>
											<li> <i class="notifi-icon blue">N</i>
												<div class="notifi-meta">
													<h4><a href="#" title="">Nulla Vel Metus Scelerisque Ante Commodo. </a></h4>
													<span>02:34PM</span> </div>
											</li>
										</ul>
										<span class="drop-bottom"><a href="#" title="">View More Notifications</a></span> </div>
								</li>
								<li class="messages"><a href="#" title=""><!-- <i class="fa fa-envelope-o"></i></a><span class="blue-bg">10</span> -->
									<div class="drop messages"> <span class="drop-head">3 New Message <i class="fa fa-pencil-square-o"></i></span>
										<ul class="drop-meta">
											<li> <i class="notifi-icon"><img src="template/images/resources/user-mesg.jpg" alt=""></i>
												<div class="notifi-meta"> <span>02:34PM</span>
													<h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
												</div>
											</li>
											<li> <i class="notifi-icon"><img src="template/images/resources/user-mesg2.jpg" alt=""></i>
												<div class="notifi-meta"> <span>02:34PM</span>
													<h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
												</div>
											</li>
											<li> <i class="notifi-icon"><img src="template/images/resources/user-mesg3.jpg" alt=""></i>
												<div class="notifi-meta"> <span>02:34PM</span>
													<h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
												</div>
											</li>
											<li> <i class="notifi-icon"><img src="template/images/resources/user-mesg.jpg" alt=""></i>
												<div class="notifi-meta"> <span>02:34PM</span>
													<h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
												</div>
											</li>
											<li> <i class="notifi-icon"><img src="template/images/resources/user-mesg2.jpg" alt=""></i>
												<div class="notifi-meta"> <span>02:34PM</span>
													<h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
												</div>
											</li>
										</ul>
										<span class="drop-bottom"><a href="#" title="">View More messages</a></span> </div>
								</li>
								<li class="mega"><!-- <a href="#" title="">mega</a> -->
									<div class="mega-menu">
										<div class="row mega-style1">
											<div class="col-lg-4">
												<div class="mega-post-info"> <span>envato market</span>
													<ul>
														<li><a href="#" title="">Envato Market</a></li>
														<li><a href="#" title="">terms</a></li>
														<li><a href="#" title="">licenses</a></li>
														<li><a href="#" title="">market API</a></li>
														<li><a href="#" title="">Become an affiliate</a></li>
														<li><a href="#" title="">help</a></li>
														<li><a href="#" title="">Themes and templatelates</a></li>
													</ul>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="mega-post-info"> <span>Themeforest</span>
													<ul>
														<li><a href="#" title="">Envato Market</a></li>
														<li><a href="#" title="">terms</a></li>
														<li><a href="#" title="">licenses</a></li>
														<li><a href="#" title="">market API</a></li>
														<li><a href="#" title="">Become an affiliate</a></li>
														<li><a href="#" title="">help</a></li>
														<li><a href="#" title="">Themes and templatelates</a></li>
													</ul>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="mega-post-info"> <span>Evato Element</span>
													<ul>
														<li><a href="#" title="">Envato Market</a></li>
														<li><a href="#" title="">terms</a></li>
														<li><a href="#" title="">licenses</a></li>
														<li><a href="#" title="">market API</a></li>
														<li><a href="#" title="">Become an affiliate</a></li>
														<li><a href="#" title="">help</a></li>
														<li><a href="#" title="">Themes and templatelates</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</li>
							</ul>
							<div class="t-search">
								<form method="post">
									<input type="text" placeholder="Enter Your Keyword">
									<button type="submit"><i class="fa fa-search"></i></button>
								</form>
							</div>
							<!-- <ul class="seting-area">
								<li class="langages">
									<a href="#" title="">Eng</a>
									<ul class="drop language">
										<li class="lang-selected"><a href="#"><i class="fa fa-check"></i> Eng</a></li>
										<li><a href="#">Rus</a></li>
										<li><a href="#">Jap</a></li>
										<li><a href="#">Arb</a></li>
									</ul>
								</li>
								<li class="setting-panel"><a href="#" title=""><i class="icon-equalizer"></i></a></li>
							</ul> -->
						</div>
						<div class="col-lg-1">
							<div class="user-head">
								<div class="admin">
									<div class="admin-avatar"><img src="<?php echo Auth::user()->logo;?>" style="height: 40px;width: 40px" alt=""> <!-- <i class="online"></i> --> </div>
								</div>
								<div class="drop setting"> <span class="drop-head"><?php echo $user = Auth::user()->name;?><i>30 days trial</i></span>
									<ul class="drop-meta">
										<li> <a href="#" title=""><i class="fa fa-eyedropper"></i>Edit Profile</a> </li>
										<li> <a href="{{ route('change_password') }}" title=""><i class="fa fa-lock"></i>Change Password</a> </li>
									</ul>
									<span class="drop-bottom"><a href="{{ route('logout') }}" title=""><i class="fa fa-sign-out"></i>log Out</a></span> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
          <div class="main-content">
            
            <div class="responsive-header">
                                <div class="logo-area">
                                    <ul class="notify-area">
                                        <li>
                                            <div class="nav-icon3"> <span></span> <span></span> <span></span> <span></span> </div>
                                        </li>
                                        <li class="notifications"><a href="#" title=""><i class="fa fa-bell-o"></i></a><span class="red-bg">02</span>
                                            <div class="drop notify"> <span class="drop-head">Notifications</span>
                                                <ul class="drop-meta">
                                                    <li> <i class="notifi-icon blue">N</i>
                                                        <div class="notifi-meta">
                                                            <h4><a href="#" title="">Nulla Vel Metus Scelerisque Ante Commodo. </a></h4>
                                                            <span>02:34PM</span> </div>
                                                    </li>
                                                    <li> <i class="notifi-icon red">C</i>
                                                        <div class="notifi-meta">
                                                            <h4><a href="#" title="">Nulla Vel Metus Scelerisque Ante Commodo. </a></h4>
                                                            <span>02:34PM</span> </div>
                                                    </li>
                                                    <li> <i class="notifi-icon yellow">A</i>
                                                        <div class="notifi-meta">
                                                            <h4><a href="#" title="">Nulla Vel Metus Scelerisque Ante Commodo. </a></h4>
                                                            <span>02:34PM</span> </div>
                                                    </li>
                                                    <li> <i class="notifi-icon blue">N</i>
                                                        <div class="notifi-meta">
                                                            <h4><a href="#" title="">Nulla Vel Metus Scelerisque Ante Commodo. </a></h4>
                                                            <span>02:34PM</span> </div>
                                                    </li>
                                                </ul>
                                                <span class="drop-bottom"><a href="#" title="">View More Notifications</a></span> </div>
                                        </li>
                                        <li class="messages"><a href="#" title=""><i class="fa fa-envelope-o"></i></a><span class="blue-bg">10</span>
                                            <div class="drop messages"> <span class="drop-head">3 New Message <i class="fa fa-pencil-square-o"></i></span>
                                                <ul class="drop-meta">
                                                    <li> <i class="notifi-icon"><img src="template/images/resources/user-mesg.jpg" alt=""></i>
                                                        <div class="notifi-meta"> <span>02:34PM</span>
                                                            <h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                        </div>
                                                    </li>
                                                    <li> <i class="notifi-icon"><img src="template/images/resources/user-mesg2.jpg" alt=""></i>
                                                        <div class="notifi-meta"> <span>02:34PM</span>
                                                            <h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                        </div>
                                                    </li>
                                                    <li> <i class="notifi-icon"><img src="template/images/resources/user-mesg3.jpg" alt=""></i>
                                                        <div class="notifi-meta"> <span>02:34PM</span>
                                                            <h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                        </div>
                                                    </li>
                                                    <li> <i class="notifi-icon"><img src="template/images/resources/user-mesg.jpg" alt=""></i>
                                                        <div class="notifi-meta"> <span>02:34PM</span>
                                                            <h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                        </div>
                                                    </li>
                                                    <li> <i class="notifi-icon"><img src="template/images/resources/user-mesg2.jpg" alt=""></i>
                                                        <div class="notifi-meta"> <span>02:34PM</span>
                                                            <h4><a href="#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <span class="drop-bottom"><a href="#" title="">View More messages</a></span> </div>
                                        </li>
                                    </ul>
									
                                    <div class="user-head">
									<div class="admin">
										<div class="admin-avatar"> <img src="template/images/resources/admin.png" alt=""> <i class="online"></i> </div>
									</div>
									<div class="drop setting"> <span class="drop-head">stifen Doe <i>30 days trial</i></span>
										<ul class="drop-meta">
											<li> <a href="#" title=""><i class="fa fa-eyedropper"></i>Edit Profile</a> </li>
											<li> <a href="#" title=""><i class="fa fa-envelope-o"></i>My Inbox</a> </li>
											<li> <a href="#" title=""><i class="fa fa-adjust"></i>task</a> </li>
											<li> <a href="#" title=""><i class="fa fa-calendar"></i>Calender</a> </li>
											<li> <a href="#" title=""><i class="fa fa-align-right"></i>Balance Report</a> </li>
										</ul>
										<span class="drop-bottom"><a href="#" title=""><i class="fa fa-sign-out"></i>log Out</a></span> </div>
                                    </div>
									<ul class="seting-area">
									<li class="langages">
										<a title="" href="#">Eng</a>
										<ul class="drop language">
											<li class="lang-selected"><a href="#"><i class="fa fa-check"></i> Eng</a></li>
											<li><a href="#">Rus</a></li>
											<li><a href="#">Jap</a></li>
											<li><a href="#">Arb</a></li>
										</ul>
									</li>
									<li class="setting-panel"><a title="" href="#"><i class="icon-equalizer"></i></a></li>
								</ul>
                                </div>
                                <div class="t-search">
                                    <form method="post">
                                        <input type="text" placeholder="Enter Your Keyword">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
            <!-- responsive header -->
            <div class="panel-body">
                            
              <div class="content-area">
                <div class="sub-bar">
                  <div class="sub-title">
                    <h4>Dashboard:</h4>
                    <span>Welcome To web Admin Panel!</span>
                  </div>
                  <ul class="bread-crumb">
                    <li><a href="#" title="">Home</a></li>
                    <li>Dashbord</li>
                  </ul>
                </div>
                <div class="profile">
                  <div class="row merged">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                      <div class="profile-bg"> <img src="<?php echo $user = Auth::user()->image;?>" alt="">
                        <div class="admin-meta"> <img src="template/images/resources/profile-avatar.jpg" alt="">
                          <h5><?php echo $user = Auth::user()->name;?>
</h5>
                          <span><?php echo $user = Auth::user()->email;?></span> </div>
                      </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">
                      <div class="row">
                        <!-- <div class="col-md-6 col-sm-6">
                          <ul class="follow-btns">
                            <li class="active"><a class="follow" href="#" title="">follow</a></li>
                            <li><a class="message" href="#" title="">message</a></li>
                          </ul>
                        </div> -->
                        <!-- <div class="col-md-6 col-sm-6">
                          <ul class="profile-socials">
                            <li><a class="facebook" href="#" title=""><i class="fa fa-facebook"></i></a></li>
                            <li><a class="twitter" href="#" title=""><i class="fa fa-twitter"></i></a></li>
                            <li><a class="vk" href="#" title=""><i class="fa fa-vk"></i></a></li>
                            <li><a class="tumblr" href="#" title=""><i class="fa fa-tumblr"></i></a></li>
                          </ul>
                        </div> -->
                        <div class="col-md-12">
                          <div class="sub-area">
                            <ul>
                              <li><a href="#" title=""><i class="fa fa-briefcase"></i>View Profile</a></li>
                              <li><a href="edit_profile" title=""><i class="fa fa-gear"></i>Account Settings </a></li>
                              <li><a href="#" title=""><i class="fa fa-adjust"></i>Customers </a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="about">
						  <div class="row">
							<div class="col-md-6">
							  <div class="about-info">
								<h4>About Vendor:</h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut consectet uer adipiscing elit laoreet dolore magna.</p>
							  </div>
							</div>
							<!-- <div class="col-md-6">
							  <ul class="vlaue-show">
								<li> <span>37</span> <a href="#" title="">Products</a> </li>
								<li> <span>59</span> <a href="#" title="">New Orders</a> </li>
								<li> <span>60</span> <a href="#" title="">Customers</a> </li> 
							</div> -->
						</div> 
                      </div>
                    </div>
                  </div>
                </div>
                <?php if (count($sub_data)!='') { ?>
                	
                <div class="row">

                  <div class="col-md-6 col-sm-6 col-xs-12">

                    
                    <!-- user list --> 
                  </div><br><br>
                
                </div>
                <div class="info-section">
                                        <div class="panel-widget">
											<div class="mini-stats">
												<p>Products</p>
												<span><i class="fa fa-ellipsis-v"></i></span>
												
												<h3>{{count($product_count)}}</h3>
												<a href="{{ url('view_product')}}" style="color: white;"><em>Total Products <i class="fa fa-arrow-right"></i></em></a>
												<i class="fa fa-bitcoin"></i> 
											</div>
                                        </div>

                                        <div class="panel-widget">
                                            <div class="mini-stats purpal-grdnt">
                                                <p>Categories</p>
                                                <span><i class="fa fa-ellipsis-v"></i></span>
                                                <h3>{{count($category)}}</h3>
												<em>Total Categories</em>
                                                <i class="fa fa-dollar"></i> 
											</div>
                                        </div>

                                        <div class="panel-widget">
                                            <div class="mini-stats blue-grdnt">
                                                <p>Customers</p>
                                                <span><i class="fa fa-ellipsis-v"></i></span>
                                                <h3>$9,102</h3>
												<em>Ratings by Market Capitalization</em>
                                                <i class="fa fa-ruble"></i> 
											</div>
                                        </div>

                                    </div>


              </div>

              <?php 
                }else{ ?>
              

              <form  method="post" action="{{ ('/subscription')}}">
                     {{ csrf_field() }} 
                <div class="col-lg-4 col-sm-12">
		<div class="widget rmndr-bg">
		  <div class="widget-title">
			<h4>Trial Pack</h4>
			<i class="rmndr-icn fa fa-bookmark"></i> </div>
		  <div class="widget-peding">
			<div class="reminder">
			  <h2><a href="#" title="">$200</a></h2>
			  <input type="hidden" name="pack_name" value="Trial pack">
			  <input type="hidden" name="pack_amount" value="$200">
			  <p>Pick the day. Enjoy it - to the hilt. The Day as it comes. People as they come to the poingt and follow twitter </p>
			  <button type="submit" title="" class="btn-st rd-30 rd-clr">Subscribe <i class="fa fa-thumbs-o-up"></i></button> </div>
		  </div>
		</div>
	  </div>
	</form>
	<form  method="post" action="{{ ('/subscription')}}">
                     {{ csrf_field() }} 
	  <div class="col-lg-4 col-sm-12">
		<div class="widget rmndr-bg">
		  <div class="widget-title">
			<h4>Monthly Pack</h4>
			<i class="rmndr-icn fa fa-bookmark"></i> </div>
		  <div class="widget-peding">
			<div class="reminder">
			  <h2><a href="#" title="">$500</a></h2>
			  <input type="hidden" name="pack_name" value="Monthly pack">
			  <input type="hidden" name="pack_amount" value="$500">
			  <p>Pick the day. Enjoy it - to the hilt. The Day as it comes. People as they come to the poingt and follow twitter </p>
			  <button type="submit" title="" class="btn-st rd-30 rd-clr">Subscribe  <i class="fa fa-thumbs-o-up"></i></button>  </div>
		  </div>
		</div>
	  </div>
	</form>
	  <form  method="post" action="{{ ('/subscription')}}">
                     {{ csrf_field() }} 
	  <div class="col-lg-4 col-sm-12">
		<div class="widget rmndr-bg">
		  <div class="widget-title">
			<h4>Yearly Pack</h4>
			<i class="rmndr-icn fa fa-bookmark"></i> </div>
		  <div class="widget-peding">
			<div class="reminder">
			  <h2><a href="#" title="">$900</a></h2>
			  <input type="hidden" name="pack_name" value="Yearly pack">
			  <input type="hidden" name="pack_amount" value="$900">
			  <p>Pick the day. Enjoy it - to the hilt. The Day as it comes. People as they come to the poingt and follow twitter </p>
			  <button type="submit" title="" class="btn-st rd-30 rd-clr">Subscribe  <i class="fa fa-thumbs-o-up"></i></button> </div>
		  </div>
		</div>
	  </div>
	</form>
<?php } ?>
	
              <div class="bottombar"> 
					<span>© 2019. Dewwater. All Rights Reserved.</span>
				</div>
              <!-- bottombar --> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="side-panel">
            <h4 class="panel-title">General Setting</h4>
            <form method="post">
                <div class="setting-row">
                    <span>use night mode</span>
                    <input type="checkbox" id="nightmode1"/> 
                    <label for="nightmode1" data-on-label="ON" data-off-label="OFF"></label>
                </div>
                <div class="setting-row">
                    <span>Notifications</span>
                    <input type="checkbox" id="switch22" /> 
                    <label for="switch22" data-on-label="ON" data-off-label="OFF"></label>
                </div>
                <div class="setting-row">
                    <span>Notification sound</span>
                    <input type="checkbox" id="switch33" /> 
                    <label for="switch33" data-on-label="ON" data-off-label="OFF"></label>
                </div>
                <div class="setting-row">
                    <span>My profile</span>
                    <input type="checkbox" id="switch44" /> 
                    <label for="switch44" data-on-label="ON" data-off-label="OFF"></label>
                </div>
                <div class="setting-row">
                    <span>Show profile</span>
                    <input type="checkbox" id="switch55" /> 
                    <label for="switch55" data-on-label="ON" data-off-label="OFF"></label>
                </div>
            </form>
            <h4 class="panel-title">Account Setting</h4>
            <form method="post">
                <div class="setting-row">
                    <span>Sub users</span>
                    <input type="checkbox" id="switch66" /> 
                    <label for="switch66" data-on-label="ON" data-off-label="OFF"></label>
                </div>
                <div class="setting-row">
                    <span>personal account</span>
                    <input type="checkbox" id="switch77" /> 
                    <label for="switch77" data-on-label="ON" data-off-label="OFF"></label>
                </div>
                <div class="setting-row">
                    <span>Business account</span>
                    <input type="checkbox" id="switch88" /> 
                    <label for="switch88" data-on-label="ON" data-off-label="OFF"></label>
                </div>
                <div class="setting-row">
                    <span>Show me online</span>
                    <input type="checkbox" id="switch99" /> 
                    <label for="switch99" data-on-label="ON" data-off-label="OFF"></label>
                </div>
                <div class="setting-row">
                    <span>Delete history</span>
                    <input type="checkbox" id="switch101" /> 
                    <label for="switch101" data-on-label="ON" data-off-label="OFF"></label>
                </div>
                <div class="setting-row">
                    <span>Expose author name</span>
                    <input type="checkbox" id="switch111" /> 
                    <label for="switch111" data-on-label="ON" data-off-label="OFF"></label>
                </div>
            </form>
        </div><!-- side panel -->
<script src="template/js/jquery.js"></script> 
<script src="template/js/bootstrap.min.js"></script> 
<script src="template/js/perfect-scrollbar.jquery.min.js"></script> 
<script src="template/js/chart.min.js"></script> 
<script src="template/js/echart.min.js"></script> 
<script src="template/js/jquery.sparkline.min.js"></script> 
<script src="template/js/custom2.js"></script> 
<script src="template/js/custom.js"></script><!-- scripts -->
</body>
</html>