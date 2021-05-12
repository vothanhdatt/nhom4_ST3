<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
	<meta name="keywords" content="" />
    <title>Group 4</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    <!-- Styles -->
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Meta tag Keywords -->
    <!-- css files -->
    <link rel="stylesheet" href="../public/css/login_style.css" type="text/css" media="all" /> <!-- Style-CSS -->
    <link rel="stylesheet" href="../public/css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
    <!-- //online-fonts -->
    <link rel="stylesheet" href="../public/css/layout_style.css">
    <link rel="stylesheet" href="../public/css/main.min.css">
	<link rel="stylesheet" href="../public/css/weather-icons.min.css">
	<link rel="stylesheet" href="../public/css/toast-notification.css">
	<link rel="stylesheet" href="../public/css/page-tour.css">
	<link rel="stylesheet" href="../public/css/style.css">
	<link rel="stylesheet" href="../public/css/color.css">
	<link rel="stylesheet" href="../public/css/responsive.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <header>
    <div class="topbar stick">
			<div class="logo">
				<a title="" href="newsfeed.html"><img src="images/logo.png" alt=""></a>
			</div>
			<div class="top-area">
				<div class="main-menu">
					<span>
						<i class="fa fa-braille"></i>
					</span>
				</div>
				<div class="top-search">
					<form method="post" class="">
						<input type="text" placeholder="Search People, Pages, Groups etc">
						<button data-ripple><i class="ti-search"></i></button>
					</form>
				</div>
				<div class="page-name">
					<span>Newsfeed</span>
				</div>
				<ul class="setting-area">
					<li><a href="a.html" title="Home" data-ripple=""><i class="fa fa-home"></i></a></li>
					<li>
						<a href="#" title="Friend Requests" data-ripple="">
							<i class="fa fa-user"></i><em class="bg-red">5</em>
						</a>
						<div class="dropdowns">
							<span>5 New Requests <a href="#" title="">View all Requests</a></span>
							<ul class="drops-menu">
								<li>
									<div>
										<figure>
											<img src="images/resources/thumb-2.jpg" alt="">
										</figure>
										<div class="mesg-meta">
											<h6><a href="#" title="">Loren</a></h6>
											<span><b>Amy</b> is mutule friend</span>
											<i>yesterday</i>
										</div>
										<div class="add-del-friends">
											<a href="#" title=""><i class="fa fa-heart"></i></a>
											<a href="#" title=""><i class="fa fa-trash"></i></a>
										</div>
									</div>
								</li>
								<li>
									<div>
										<figure>
											<img src="images/resources/thumb-3.jpg" alt="">
										</figure>
										<div class="mesg-meta">
											<h6><a href="#" title="">Tina Trump</a></h6>
											<span><b>Simson</b> is mutule friend</span>
											<i>2 days ago</i>
										</div>
										<div class="add-del-friends">
											<a href="#" title=""><i class="fa fa-heart"></i></a>
											<a href="#" title=""><i class="fa fa-trash"></i></a>
										</div>
									</div>
								</li>
								<li>
									<div>
										<figure>
											<img src="images/resources/thumb-4.jpg" alt="">
										</figure>
										<div class="mesg-meta">
											<h6><a href="#" title="">Andrew</a></h6>
											<span><b>Bikra</b> is mutule friend</span>
											<i>4 hours ago</i>
										</div>
										<div class="add-del-friends">
											<a href="#" title=""><i class="fa fa-heart"></i></a>
											<a href="#" title=""><i class="fa fa-trash"></i></a>
										</div>
									</div>
								</li>
								<li>
									<div>
										<figure>
											<img src="images/resources/thumb-5.jpg" alt="">
										</figure>
										<div class="mesg-meta">
											<h6><a href="#" title="">Dasha</a></h6>
											<span><b>Sarah</b> is mutule friend</span>
											<i>9 hours ago</i>
										</div>
										<div class="add-del-friends">
											<a href="#" title=""><i class="fa fa-heart"></i></a>
											<a href="#" title=""><i class="fa fa-trash"></i></a>
										</div>
									</div>
								</li>
								<li>
									<div>
										<figure>
											<img src="images/resources/thumb-1.jpg" alt="">
										</figure>
										<div class="mesg-meta">
											<h6><a href="#" title="">Emily</a></h6>
											<span><b>Amy</b> is mutule friend</span>
											<i>4 hours ago</i>
										</div>
										<div class="add-del-friends">
											<a href="#" title=""><i class="fa fa-heart"></i></a>
											<a href="#" title=""><i class="fa fa-trash"></i></a>
										</div>
									</div>
								</li>
							</ul>
							<a href="friend-requests.html" title="" class="more-mesg">View All</a>
						</div>
					</li>
					<li>
						<a href="#" title="Notification" data-ripple="">
							<i class="fa fa-bell"></i><em class="bg-purple">7</em>
						</a>
						<div class="dropdowns">
							<span>4 New Notifications <a href="#" title="">Mark all as read</a></span>
							<ul class="drops-menu">
								<li>
									<a href="notifications.html" title="">
										<figure>
											<img src="images/resources/thumb-1.jpg" alt="">
											<span class="status f-online"></span>
										</figure>
										<div class="mesg-meta">
											<h6>sarah Loren</h6>
											<span>commented on your new profile status</span>
											<i>2 min ago</i>
										</div>
									</a>
								</li>
								<li>
									<a href="notifications.html" title="">
										<figure>
											<img src="images/resources/thumb-2.jpg" alt="">
											<span class="status f-online"></span>
										</figure>
										<div class="mesg-meta">
											<h6>Jhon doe</h6>
											<span>Nicholas Grissom just became friends. Write on his wall.</span>
											<i>4 hours ago</i>
											<figure>
												<span>Today is Marina Valentine’s Birthday! wish for celebrating</span>
												<img src="images/birthday.png" alt="">
											</figure>
										</div>
									</a>
								</li>
								<li>
									<a href="notifications.html" title="">
										<figure>
											<img src="images/resources/thumb-3.jpg" alt="">
											<span class="status f-online"></span>
										</figure>
										<div class="mesg-meta">
											<h6>Andrew</h6>
											<span>commented on your photo.</span>
											<i>Sunday</i>
											<figure>
												<span>"Celebrity looks Beautiful in that outfit! We should see
													each"</span>
												<img src="images/resources/admin.jpg" alt="">
											</figure>
										</div>
									</a>
								</li>
								<li>
									<a href="notifications.html" title="">
										<figure>
											<img src="images/resources/thumb-4.jpg" alt="">
											<span class="status f-online"></span>
										</figure>
										<div class="mesg-meta">
											<h6>Tom cruse</h6>
											<span>nvited you to attend to his event Goo in</span>
											<i>May 19</i>
										</div>
									</a>
									<span class="tag">New</span>
								</li>
								<li>
									<a href="notifications.html" title="">
										<figure>
											<img src="images/resources/thumb-5.jpg" alt="">
											<span class="status f-online"></span>
										</figure>
										<div class="mesg-meta">
											<h6>Amy</h6>
											<span>Andrew Changed his profile picture. </span>
											<i>dec 18</i>
										</div>
									</a>
									<span class="tag">New</span>
								</li>
							</ul>
							<a href="notifications.html" title="" class="more-mesg">View All</a>
						</div>
					</li>
					<li>
						<a href="#" title="Messages" data-ripple=""><i class="fa fa-commenting"></i><em
								class="bg-blue">9</em></a>
						<div class="dropdowns">
							<span>5 New Messages <a href="#" title="">Mark all as read</a></span>
							<ul class="drops-menu">
								<li>
									<a class="show-mesg" href="#" title="">
										<figure>
											<img src="images/resources/thumb-1.jpg" alt="">
											<span class="status f-online"></span>
										</figure>
										<div class="mesg-meta">
											<h6>sarah Loren</h6>
											<span><i class="ti-check"></i> Hi, how r u dear ...?</span>
											<i>2 min ago</i>
										</div>
									</a>
								</li>
								<li>
									<a class="show-mesg" href="#" title="">
										<figure>
											<img src="images/resources/thumb-2.jpg" alt="">
											<span class="status f-offline"></span>
										</figure>
										<div class="mesg-meta">
											<h6>Jhon doe</h6>
											<span><i class="ti-check"></i> We’ll have to check that at the office and
												see if the client is on board with</span>
											<i>2 min ago</i>
										</div>
									</a>
								</li>
								<li>
									<a class="show-mesg" href="#" title="">
										<figure>
											<img src="images/resources/thumb-3.jpg" alt="">
											<span class="status f-online"></span>
										</figure>
										<div class="mesg-meta">
											<h6>Andrew</h6>
											<span> <i class="fa fa-paperclip"></i>Hi Jack's! It’s Diana, I just wanted
												to let you know that we have to reschedule..</span>
											<i>2 min ago</i>
										</div>
									</a>
								</li>
								<li>
									<a class="show-mesg" href="#" title="">
										<figure>
											<img src="images/resources/thumb-4.jpg" alt="">
											<span class="status f-offline"></span>
										</figure>
										<div class="mesg-meta">
											<h6>Tom cruse</h6>
											<span><i class="ti-check"></i> Great, I’ll see you tomorrow!.</span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag">New</span>
								</li>
								<li>
									<a class="show-mesg" href="#" title="">
										<figure>
											<img src="images/resources/thumb-5.jpg" alt="">
											<span class="status f-away"></span>
										</figure>
										<div class="mesg-meta">
											<h6>Amy</h6>
											<span><i class="fa fa-paperclip"></i> Sed ut perspiciatis unde omnis iste
												natus error sit </span>
											<i>2 min ago</i>
										</div>
									</a>
									<span class="tag">New</span>
								</li>
							</ul>
							<a href="chat-messenger.html" title="" class="more-mesg">View All</a>
						</div>
					</li>
				</ul>
				<div class="user-img">
					<h5>Jack Carter</h5>
					<img src="images/resources/admin.jpg" alt="">
					<span class="status f-online"></span>
					<div class="user-setting">
						<span class="seting-title">Chat setting <a href="#" title="">see all</a></span>
						<ul class="chat-setting">
							<li><a href="#" title=""><span class="status f-online"></span>online</a></li>
							<li><a href="#" title=""><span class="status f-away"></span>away</a></li>
							<li><a href="#" title=""><span class="status f-off"></span>offline</a></li>
						</ul>
						<span class="seting-title">User setting <a href="#" title="">see all</a></span>
						<ul class="log-out">
							<li><a href="about.html" title=""><i class="ti-user"></i> view profile</a></li>
							<li><a href="setting.html" title=""><i class="ti-pencil-alt"></i>edit profile</a></li>
							<li><a href="#" title=""><i class="ti-target"></i>activity log</a></li>
							<li><a href="setting.html" title=""><i class="ti-settings"></i>account setting</a></li>
							<li><a href="logout.html" title=""><i class="ti-power-off"></i>log out</a></li>
						</ul>
					</div>
				</div>
				<span class="ti-settings main-menu" data-ripple=""></span>
			</div>
			<nav>
				<ul class="nav-list">
					<li><a class="" href="#" title=""><i class="fa fa-home"></i> Home Pages</a>
						<ul>
							<li><a href="index.html" title="">Pitnik Default</a></li>
							<li><a href="company-landing.html" title="">Company Landing</a></li>
							<li><a href="pitrest.html" title="">Pitrest</a></li>
							<li><a href="redpit.html" title="">Redpit</a></li>
							<li><a href="redpit-category.html" title="">Redpit Category</a></li>
							<li><a href="soundnik.html" title="">Soundnik</a></li>
							<li><a href="soundnik-detail.html" title="">Soundnik Single</a></li>
							<li><a href="career.html" title="">Pitjob</a></li>
							<li><a href="shop.html" title="">Shop</a></li>
							<li><a href="classified.html" title="">Classified</a></li>
							<li><a href="pitpoint.html" title="">PitPoint</a></li>
							<li><a href="pittube.html" title="">Pittube</a></li>
							<li><a href="chat-messenger.html" title="">Messenger</a></li>
						</ul>
					</li>
					<li><a class="" href="#" title=""><i class="fa fa-film"></i> Pittube</a>
						<ul>
							<li><a href="pittube.html" title="">Pittube</a></li>
							<li><a href="pittube-detail.html" title="">Pittube single</a></li>
							<li><a href="pittube-category.html" title="">Pittube Category</a></li>
							<li><a href="pittube-channel.html" title="">Pittube Channel</a></li>
							<li><a href="pittube-search-result.html" title="">Pittube Search Result</a></li>
						</ul>
					</li>
					<li><a class="" href="#" title=""><i class="fa fa-female"></i> PitPoint</a>
						<ul>
							<li><a href="pitpoint.html" title="">PitPoint</a></li>
							<li><a href="pitpoint-detail.html" title="">Pitpoint Detail</a></li>
							<li><a href="pitpoint-list.html" title="">Pitpoint List style</a></li>
							<li><a href="pitpoint-without-baner.html" title="">Pitpoint without Banner</a></li>
							<li><a href="pitpoint-search-result.html" title="">Pitpoint Search</a></li>
						</ul>
					</li>
					<li><a class="" href="#" title=""><i class="fa fa-graduation-cap"></i> Pitjob</a>
						<ul>
							<li><a href="career.html" title="">Pitjob</a></li>
							<li><a href="career-detail.html" title="">Pitjob Detail</a></li>
							<li><a href="career-search-result.html" title="">Job seach page</a></li>
							<li><a href="social-post-detail.html" title="">Social Post Detail</a></li>
						</ul>
					</li>
					<li><a class="" href="#" title=""><i class="fa fa-repeat"></i> Timeline</a>
						<ul>
							<li><a href="timeline.html" title="">Timeline</a></li>
							<li><a href="timeline-photos.html" title="">Timeline Photos</a></li>
							<li><a href="timeline-videos.html" title="">Timeline Videos</a></li>
							<li><a href="timeline-groups.html" title="">Timeline Groups</a></li>
							<li><a href="timeline-friends.html" title="">Timeline Friends</a></li>
							<li><a href="timeline-friends2.html" title="">Timeline Friends-2</a></li>
							<li><a href="about.html" title="">Timeline About</a></li>
							<li><a href="blog-posts.html" title="">Timeline Blog</a></li>
							<li><a href="friends-birthday.html" title="">Friends' Birthday</a></li>
							<li><a href="newsfeed.html" title="">Newsfeed</a></li>
							<li><a href="search-result.html" title="">Search Result</a></li>
						</ul>
					</li>
					<li><a class="" href="#" title=""><i class="fa fa-heart"></i> Favourit Page</a>
						<ul>
							<li><a href="fav-page.html" title="">Favourit Page</a></li>
							<li><a href="fav-favers.html" title="">Fav Page Likers</a></li>
							<li><a href="fav-events.html" title="">Fav Events</a></li>
							<li><a href="fav-event-invitations.html" title="">Fav Event Invitations</a></li>
							<li><a href="event-calendar.html" title="">Event Calendar</a></li>
							<li><a href="fav-page-create.html" title="">Create New Page</a></li>
							<li><a href="price-plans.html" title="">Price Plan</a></li>
						</ul>
					</li>
					<li><a class="" href="#" title=""><i class="fa fa-forumbee"></i> Forum</a>
						<ul>
							<li><a href="forum.html" title="">Forum</a></li>
							<li><a href="forum-create-topic.html" title="">Forum Create Topic</a></li>
							<li><a href="forum-open-topic.html" title="">Forum Open Topic</a></li>
							<li><a href="forums-category.html" title="">Forum Category</a></li>
						</ul>
					</li>
					<li><a class="" href="#" title=""><i class="fa fa-star-o"></i> Featured</a>
						<ul>
							<li><a href="chat-messenger.html" title="">Messenger (Chatting)</a></li>
							<li><a href="notifications.html" title="">Notifications</a></li>
							<li><a href="badges.html" title="">Badges</a></li>
							<li><a href="faq.html" title="">Faq's</a></li>
							<li><a href="contribution.html" title="">Contriburion Page</a></li>
							<li><a href="manage-page.html" title="">Manage Page</a></li>
							<li><a href="weather-forecast.html" title="">weather-forecast</a></li>
							<li><a href="statistics.html" title="">Statics/Analytics</a></li>
							<li><a href="shop-cart.html" title="">Shop Cart</a></li>
						</ul>
					</li>
					<li><a class="" href="#" title=""><i class="fa fa-gears"></i> Account Setting</a>
						<ul>
							<li><a href="setting.html" title="">Setting</a></li>
							<li><a href="privacy.html" title="">Privacy</a></li>
							<li><a href="support-and-help.html" title="">Support & Help</a></li>
							<li><a href="support-and-help-detail.html" title="">Support Detail</a></li>
							<li><a href="support-and-help-search-result.html" title="">Support Search</a></li>
						</ul>
					</li>
					<li><a class="" href="#" title=""><i class="fa fa-lock"></i> Authentication</a>
						<ul>
							<li><a href="login.html" title="">Login Page</a></li>
							<li><a href="register.html" title="">Register Page</a></li>
							<li><a href="logout.html" title="">Logout Page</a></li>
							<li><a href="coming-soon.html" title="">Coming Soon</a></li>
							<li><a href="error-404.html" title="">Error 404</a></li>
							<li><a href="error-404-2.html" title="">Error 404-2</a></li>
							<li><a href="error-500.html" title="">Error 500</a></li>
						</ul>
					</li>
					<li><a class="" href="#" title=""><i class="fa fa-wrench"></i> Tools</a>
						<ul>
							<li><a href="typography.html" title="">Typography</a></li>
							<li><a href="popup-modals.html" title="">Popups/Modals</a></li>
							<li><a href="post-versions.html" title="">Post Versions</a></li>
							<li><a href="sliders.html" title="">Sliders / Carousel</a></li>
							<li><a href="google-map.html" title="">Google Maps</a></li>
							<li><a href="widgets.html" title="">Widgets</a></li>
						</ul>
					</li>
				</ul>

			</nav><!-- nav menu -->
		</div>

    </header>

    <div class="content">
        @yield('content')
    </div>

    <footer>
        <div class="container">
            <p>Day la footer cua nhom 4</p>
        </div>
    </footer>
</body>

</html>