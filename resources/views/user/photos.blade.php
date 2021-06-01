@extends('layouts.user')
@section('content')

    <div class="theme-layout">

        <div class="responsive-header">
            <div class="mh-head first Sticky">
                <span class="mh-btns-left">
                    <a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
                </span>
                <span class="mh-text">
                    <a href="{{ url('newsfeed') }}" title=""><img src="images/logo2.png" alt=""></a>
                </span>
                <span class="mh-btns-right">
                    <a class="fa fa-sliders" href="#shoppingbag"></a>
                </span>
            </div>
            <div class="mh-head second">
                <form class="mh-form">
                    <input placeholder="search" />
                    <a href="#/" class="fa fa-search"></a>
                </form>
            </div>
            <nav id="menu" class="res-menu">
                <ul>
                    <li><span>Home Pages</span>
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
                    <li><span>Pittube</span>
                        <ul>
                            <li><a href="pittube.html" title="">Pittube</a></li>
                            <li><a href="pittube-detail.html" title="">Pittube single</a></li>
                            <li><a href="pittube-category.html" title="">Pittube Category</a></li>
                            <li><a href="pittube-channel.html" title="">Pittube Channel</a></li>
                            <li><a href="pittube-search-result.html" title="">Pittube Search Result</a></li>
                        </ul>
                    </li>
                    <li><span>PitPoint</span>
                        <ul>
                            <li><a href="pitpoint.html" title="">PitPoint</a></li>
                            <li><a href="pitpoint-detail.html" title="">Pitpoint Detail</a></li>
                            <li><a href="pitpoint-list.html" title="">Pitpoint List style</a></li>
                            <li><a href="pitpoint-without-baner.html" title="">Pitpoint without Banner</a></li>
                            <li><a href="pitpoint-search-result.html" title="">Pitpoint Search</a></li>
                        </ul>
                    </li>
                    <li><span>Pitjob</span>
                        <ul>
                            <li><a href="career.html" title="">Pitjob</a></li>
                            <li><a href="career-detail.html" title="">Pitjob Detail</a></li>
                            <li><a href="career-search-result.html" title="">Job seach page</a></li>
                            <li><a href="social-post-detail.html" title="">Social Post Detail</a></li>
                        </ul>
                    </li>
                    <li><span>Timeline</span>
                        <ul>
                            <li><a href="{{ url('timeline') }}" title="">Timeline</a></li>
                            <li><a href="{{ url('photos') }}" title="">Timeline Photos</a></li>
                            <li><a href="timeline-videos.html" title="">Timeline Videos</a></li>
                            <li><a href="timeline-groups.html" title="">Timeline Groups</a></li>
                            <li><a href="{{ url('friends') }}" title="">Timeline Friends</a></li>
                            <li><a href="timeline-friends2.html" title="">Timeline Friends-2</a></li>
                            <li><a href="{{ url('about') }}" title="">Timeline About</a></li>
                            <li><a href="blog-posts.html" title="">Timeline Blog</a></li>
                            <li><a href="friends-birthday.html" title="">Friends' Birthday</a></li>
                            <li><a href="{{ url('newsfeed') }}" title="">Newsfeed</a></li>
                            <li><a href="search-result.html" title="">Search Result</a></li>
                        </ul>
                    </li>
                    <li><span>Favourit Page</span>
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
                    <li><span>Forum</span>
                        <ul>
                            <li><a href="forum.html" title="">Forum</a></li>
                            <li><a href="forum-create-topic.html" title="">Forum Create Topic</a></li>
                            <li><a href="forum-open-topic.html" title="">Forum Open Topic</a></li>
                            <li><a href="forums-category.html" title="">Forum Category</a></li>
                        </ul>
                    </li>
                    <li><span>Featured</span>
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
                    <li><span>Account Setting</span>
                        <ul>
                            <li><a href="{{ url('setting') }}" title="">Setting</a></li>
                            <li><a href="privacy.html" title="">Privacy</a></li>
                            <li><a href="support-and-help.html" title="">Support & Help</a></li>
                            <li><a href="support-and-help-detail.html" title="">Support Detail</a></li>
                            <li><a href="support-and-help-search-result.html" title="">Support Search</a></li>
                        </ul>
                    </li>
                    <li><span>Authentication</span>
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
                    <li><span>Tools</span>
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
            </nav>
            <nav id="shoppingbag">
                <div>
                    <div class="">
                        <form method="post">
                            <div class="setting-row">
                                <span>use night mode</span>
                                <input type="checkbox" id="nightmode" />
                                <label for="nightmode" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Notifications</span>
                                <input type="checkbox" id="switch2" />
                                <label for="switch2" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Notification sound</span>
                                <input type="checkbox" id="switch3" />
                                <label for="switch3" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>My profile</span>
                                <input type="checkbox" id="switch4" />
                                <label for="switch4" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Show profile</span>
                                <input type="checkbox" id="switch5" />
                                <label for="switch5" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                        </form>
                        <h4 class="panel-title">Account Setting</h4>
                        <form method="post">
                            <div class="setting-row">
                                <span>Sub users</span>
                                <input type="checkbox" id="switch6" />
                                <label for="switch6" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>personal account</span>
                                <input type="checkbox" id="switch7" />
                                <label for="switch7" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Business account</span>
                                <input type="checkbox" id="switch8" />
                                <label for="switch8" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Show me online</span>
                                <input type="checkbox" id="switch9" />
                                <label for="switch9" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Delete history</span>
                                <input type="checkbox" id="switch10" />
                                <label for="switch10" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Expose author name</span>
                                <input type="checkbox" id="switch11" />
                                <label for="switch11" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
        </div><!-- responsive header -->





        <section>
            <div class="gap2 gray-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row merged20" id="page-contents">
                                <div class="user-profile">
                                    <figure>
                                        <div class="edit-pp">
                                            <label class="fileContainer">
                                                <i class="fa fa-camera"></i>
                                                <input type="file">
                                            </label>
                                        </div>
                                        <img src="images/resources/profile-image.jpg" alt="">
                                        <ul class="profile-controls">
                                            <li><a href="#" title="Add friend" data-toggle="tooltip"><i
                                                        class="fa fa-user-plus"></i></a></li>
                                            <li><a href="#" title="Follow" data-toggle="tooltip"><i
                                                        class="fa fa-star"></i></a></li>
                                            <li><a class="send-mesg" href="#" title="Send Message"
                                                    data-toggle="tooltip"><i class="fa fa-comment"></i></a></li>
                                            <li>
                                                <div class="edit-seting" title="Edit Profile image"><i
                                                        class="fa fa-sliders"></i>
                                                    <ul class="more-dropdown">
                                                        <li><a href="{{ url('setting') }}" title="">Update Profile Photo</a>
                                                        </li>
                                                        <li><a href="{{ url('setting') }}" title="">Update Header Photo</a></li>
                                                        <li><a href="{{ url('setting') }}" title="">Account Settings</a></li>
                                                        <li><a href="support-and-help.html" title="">Find Support</a>
                                                        </li>
                                                        <li><a class="bad-report" href="#" title="">Report Profile</a>
                                                        </li>
                                                        <li><a href="#" title="">Block Profile</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                        <ol class="pit-rate">
                                            <li class="rated"><i class="fa fa-star"></i></li>
                                            <li class="rated"><i class="fa fa-star"></i></li>
                                            <li class="rated"><i class="fa fa-star"></i></li>
                                            <li class="rated"><i class="fa fa-star"></i></li>
                                            <li class=""><i class="fa fa-star"></i></li>
                                            <li>4.7/5</li>
                                        </ol>
                                    </figure>

                                    <div class="profile-section">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3">
                                                <div class="profile-author">
                                                    <div class="profile-author-thumb">
                                                        <img alt="author" src="images/resources/author.jpg">
                                                        <div class="edit-dp">
                                                            <label class="fileContainer">
                                                                <i class="fa fa-camera"></i>
                                                                <input type="file">
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="author-content">
                                                        <a class="h4 author-name" href="{{ url('about') }}">Jack
                                                            Carter</a>
                                                        <div class="country">Ontario, CA</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-10 col-md-9">
                                                <ul class="profile-menu">
                                                    <li>
                                                        <a class="" href="{{ url('timeline') }}">Timeline</a>
                                                    </li>
                                                    <li>
                                                        <a class="" href="{{ url('about') }}">About</a>
                                                    </li>
                                                    <li>
                                                        <a class="" href="{{ url('friends') }}">Friends</a>
                                                    </li>
                                                    <li>
                                                        <a class="active" href="{{ url('photos') }}">Photos</a>
                                                    </li>
                                                    <li>
                                                        <a class="" href="timeline-videos.html">Videos</a>
                                                    </li>
                                                    <li>
                                                        <div class="more">
                                                            <i class="fa fa-ellipsis-h"></i>
                                                            <ul class="more-dropdown">
                                                                <li>
                                                                    <a href="timeline-groups.html">Profile Groups</a>
                                                                </li>
                                                                <li>
                                                                    <a href="statistics.html">Profile Analytics</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ol class="folw-detail">
                                                    <li><span>Posts</span><ins>101</ins></li>
                                                    <li><span>Followers</span><ins>1.3K</ins></li>
                                                    <li><span>Following</span><ins>22</ins></li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- user profile banner  -->
                                <div class="col-lg-3">
                                    <aside class="sidebar static">
                                        <div class="widget">
                                            <h4 class="widget-title">Shortcuts</h4>
                                            <ul class="naves">
                                                <li>
                                                    <i class="ti-clipboard"></i>
                                                    <a href="{{ url('newsfeed') }}" title="">News feed</a>
                                                </li>
                                                <li>
                                                    <i class="ti-mouse-alt"></i>
                                                    <a href="inbox.html" title="">Inbox</a>
                                                </li>
                                                <li>
                                                    <i class="ti-files"></i>
                                                    <a href="fav-page.html" title="">My pages</a>
                                                </li>
                                                <li>
                                                    <i class="ti-user"></i>
                                                    <a href="{{ url('friends') }}" title="">friends</a>
                                                </li>
                                                <li>
                                                    <i class="ti-image"></i>
                                                    <a href="{{ url('photos') }}" title="">images</a>
                                                </li>
                                                <li>
                                                    <i class="ti-video-camera"></i>
                                                    <a href="timeline-videos.html" title="">videos</a>
                                                </li>
                                                <li>
                                                    <i class="ti-comments-smiley"></i>
                                                    <a href="messages.html" title="">Messages</a>
                                                </li>
                                                <li>
                                                    <i class="ti-bell"></i>
                                                    <a href="notifications.html" title="">Notifications</a>
                                                </li>
                                                <li>
                                                    <i class="ti-share"></i>
                                                    <a href="people-nearby.html" title="">People Nearby</a>
                                                </li>
                                                <li>
                                                    <i class="fa fa-bar-chart-o"></i>
                                                    <a href="insights.html" title="">insights</a>
                                                </li>
                                                <li>
                                                    <i class="ti-power-off"></i>
                                                    <a href="landing.html" title="">Logout</a>
                                                </li>
                                            </ul>
                                        </div><!-- Shortcuts -->
                                        <div class="widget">
                                            <h4 class="widget-title">Profile intro</h4>
                                            <ul class="short-profile">
                                                <li>
                                                    <span>about</span>
                                                    <p>Hi, i am jhon kates, i am 32 years old and worked as a web
                                                        developer in microsoft company. </p>
                                                </li>
                                                <li>
                                                    <span>fav tv show</span>
                                                    <p>Sacred Games, Spartcus Blood, Games of theron</p>
                                                </li>
                                                <li>
                                                    <span>favourit music</span>
                                                    <p>Justin Biber, Nati Natsha, Shakira</p>
                                                </li>
                                            </ul>
                                        </div><!-- profile intro widget -->

                                    </aside>
                                </div><!-- sidebar -->
                                <div class="col-lg-9">
                                    <div class="central-meta">
                                        <div class="title-block">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="align-left">
                                                        <h5>Photos <span>62</span></h5>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="row merged20">
                                                        <div class="col-lg-7 col-md-7 col-sm-7">
                                                            <form method="post">
                                                                <input type="text" placeholder="Search Photo">
                                                                <button type="submit"><i
                                                                        class="fa fa-search"></i></button>
                                                            </form>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                                            <div class="select-options">
                                                                <select class="select">
                                                                    <option>Sort by</option>
                                                                    <option>A to Z</option>
                                                                    <option>See All</option>
                                                                    <option>Newest</option>
                                                                    <option>oldest</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-1 col-md-1 col-sm-1">
                                                            <div class="option-list">
                                                                <i class="fa fa-ellipsis-v"></i>
                                                                <ul>
                                                                    <li class="active"><i class="fa fa-check"></i><a
                                                                            title="" href="#">Show Public</a></li>
                                                                    <li><a title="" href="#">Show only Friends</a></li>
                                                                    <li><a title="" href="#">Hide all Posts</a></li>
                                                                    <li><a title="" href="#">Mute Notifications</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- title block -->
                                    <div class="central-meta">
                                        <div class="row merged5">
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                <div class="item-box">
                                                    <div class="item-upload album">
                                                        <i class="fa fa-plus-circle"></i>
                                                        <div class="upload-meta">
                                                            <h5>Upload photo or album</h5>
                                                            <span>its only take a few seconds!</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                <div class="item-box">
                                                    <a class="strip" href="images/resources/photo-101.jpg" title=""
                                                        data-strip-group="mygroup"
                                                        data-strip-group-options="loop: false">
                                                        <img src="images/resources/photo1.jpg" alt=""></a>
                                                    <div class="over-photo">
                                                        <a href="#" title=""><i class="fa fa-heart"></i> 15</a>
                                                        <span>20 hours ago</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                <div class="item-box">
                                                    <a class="strip" href="images/resources/photo-22.jpg" title=""
                                                        data-strip-group="mygroup"
                                                        data-strip-group-options="loop: false">
                                                        <img src="images/resources/photo2.jpg" alt=""></a>
                                                    <div class="over-photo">
                                                        <a href="#" title=""><i class="fa fa-heart"></i> 20</a>
                                                        <span>20 days ago</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                <div class="item-box">
                                                    <a class="strip" href="images/resources/photo-33.jpg" title=""
                                                        data-strip-group="mygroup"
                                                        data-strip-group-options="loop: false">
                                                        <img src="images/resources/photo3.jpg" alt=""></a>
                                                    <div class="over-photo">
                                                        <a href="#" title=""><i class="fa fa-heart"></i> 155</a>
                                                        <span>Yesterday</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                <div class="item-box">
                                                    <a class="strip" href="images/resources/photo-44.jpg" title=""
                                                        data-strip-group="mygroup"
                                                        data-strip-group-options="loop: false">
                                                        <img src="images/resources/photo4.jpg" alt=""></a>
                                                    <div class="over-photo">
                                                        <a href="#" title=""><i class="fa fa-heart"></i> 201</a>
                                                        <span>3 weeks ago</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                <div class="item-box">
                                                    <a class="strip" href="images/resources/photo-55.jpg" title=""
                                                        data-strip-group="mygroup"
                                                        data-strip-group-options="loop: false">
                                                        <img src="images/resources/photo5.jpg" alt=""></a>
                                                    <div class="over-photo">
                                                        <a href="#" title=""><i class="fa fa-heart"></i> 81</a>
                                                        <span>2 months ago</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                <div class="item-box">
                                                    <a class="strip" href="images/resources/photo-66.jpg" title=""
                                                        data-strip-group="mygroup"
                                                        data-strip-group-options="loop: false">
                                                        <img src="images/resources/photo6.jpg" alt=""></a>
                                                    <div class="over-photo">
                                                        <a href="#" title=""><i class="fa fa-heart"></i> 98</a>
                                                        <span>1 day</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                <div class="item-box">
                                                    <a class="strip" href="images/resources/photo-77.jpg" title=""
                                                        data-strip-group="mygroup"
                                                        data-strip-group-options="loop: false">
                                                        <img src="images/resources/photo7.jpg" alt=""></a>
                                                    <div class="over-photo">
                                                        <a href="#" title=""><i class="fa fa-heart"></i> 87</a>
                                                        <span>23 hours ago</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                <div class="item-box">
                                                    <a class="strip" href="images/resources/photo-88.jpg" title=""
                                                        data-strip-group="mygroup"
                                                        data-strip-group-options="loop: false">
                                                        <img src="images/resources/photo8.jpg" alt=""></a>
                                                    <div class="over-photo">
                                                        <a href="#" title=""><i class="fa fa-heart"></i> 60</a>
                                                        <span>3 days ago</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                <div class="item-box">
                                                    <a class="strip" href="images/resources/photo-99.jpg" title=""
                                                        data-strip-group="mygroup"
                                                        data-strip-group-options="loop: false">
                                                        <img src="images/resources/photo9.jpg" alt=""></a>
                                                    <div class="over-photo">
                                                        <a href="#" title=""><i class="fa fa-heart"></i> 897</a>
                                                        <span>1 year ago</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                <div class="item-box">
                                                    <a class="strip" href="images/resources/photo-1001.jpg" title=""
                                                        data-strip-group="mygroup"
                                                        data-strip-group-options="loop: false">
                                                        <img src="images/resources/photo10.jpg" alt=""></a>
                                                    <div class="over-photo">
                                                        <a href="#" title=""><i class="fa fa-heart"></i> 983</a>
                                                        <span>2 years ago</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                <div class="item-box">
                                                    <a class="strip" href="images/resources/photo-1011.jpg" title=""
                                                        data-strip-group="mygroup"
                                                        data-strip-group-options="loop: false">
                                                        <img src="images/resources/photo11.jpg" alt=""></a>
                                                    <div class="over-photo">
                                                        <a href="#" title=""><i class="fa fa-heart"></i> 40</a>
                                                        <span>4 days ago</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                <div class="item-box">
                                                    <a class="strip" href="images/resources/photo-1012.jpg" title=""
                                                        data-strip-group="mygroup"
                                                        data-strip-group-options="loop: false">
                                                        <img src="images/resources/photo12.jpg" alt=""></a>
                                                    <div class="over-photo">
                                                        <a href="#" title=""><i class="fa fa-heart"></i> 15</a>
                                                        <span>20 hours ago</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                <div class="item-box">
                                                    <a class="strip" href="images/resources/photo-1013.jpg" title=""
                                                        data-strip-group="mygroup"
                                                        data-strip-group-options="loop: false">
                                                        <img src="images/resources/photo13.jpg" alt=""></a>
                                                    <div class="over-photo">
                                                        <a href="#" title=""><i class="fa fa-heart"></i> 59</a>
                                                        <span>20 days ago</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                <div class="item-box">
                                                    <a class="strip" href="images/resources/photo-1014.jpg" title=""
                                                        data-strip-group="mygroup"
                                                        data-strip-group-options="loop: false">
                                                        <img src="images/resources/photo14.jpg" alt=""></a>
                                                    <div class="over-photo">
                                                        <a href="#" title=""><i class="fa fa-heart"></i> 66</a>
                                                        <span>1 year ago</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                <div class="item-box">
                                                    <a class="strip" href="images/resources/photo-1015.jpg" title=""
                                                        data-strip-group="mygroup"
                                                        data-strip-group-options="loop: false">
                                                        <img src="images/resources/photo15.jpg" alt=""></a>
                                                    <div class="over-photo">
                                                        <a href="#" title=""><i class="fa fa-heart"></i> 98</a>
                                                        <span>9 months ago</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="lodmore">
                                            <span>Viewing 1-15 of 62 Pictures</span>
                                            <button class="btn-view btn-load-more"></button>
                                        </div>
                                    </div><!-- photos -->
                                </div><!-- centerl meta -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
    <div class="side-panel">
        <h4 class="panel-title">General Setting</h4>
        <form method="post">
            <div class="setting-row">
                <span>use night mode</span>
                <input type="checkbox" id="nightmode1" />
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

    <div class="popup-wraper5">
        <div class="popup">
            <span class="popup-closed"><i class="ti-close"></i></span>
            <div class="popup-meta">
                <div class="popup-head">
                    <h5>Upload Pictures & Videos</h5>
                </div>
                <div class="upload-boxes">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="smal-box">
                                <label class="fileContainer">
                                    <i class=" ti-layout-media-center-alt"></i>
                                    <input type="file">
                                    <em>Upload New</em>
                                    <span>Choose form Computer</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="smal-box">
                                <div class="from-gallery">
                                    <i class="ti-layout-grid2"></i>
                                    <em>From Gallery Or Album</em>
                                    <span>Choose form already uploaded</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sugested-photos">
                        <h5>Suggested Photos & Videos <a href="#" title="">See All</a></h5>
                        <ul class="sugestd-photo-caro">
                            <li><img src="images/resources/sug1.jpg" alt=""></li>
                            <li><img src="images/resources/sug2.jpg" alt=""></li>
                            <li><img src="images/resources/sug3.jpg" alt=""></li>
                            <li><img src="images/resources/sug4.jpg" alt=""></li>
                            <li><img src="images/resources/sug5.jpg" alt=""></li>
                        </ul>
                    </div>
                    <a class="main-btn" href="#" title="" data-ripple="">Proceed</a>
                </div>
            </div>
        </div>
        <div class="already-gallery">
            <div class="popup-head">
                <h5>Choose from gallery</h5>
            </div>
            <ul class="sugestd-photo-caro">
                <li><img src="images/resources/sug1.jpg" alt=""></li>
                <li><img src="images/resources/sug2.jpg" alt=""></li>
                <li><img src="images/resources/sug3.jpg" alt=""></li>
                <li><img src="images/resources/sug4.jpg" alt=""></li>
                <li><img src="images/resources/sug5.jpg" alt=""></li>
                <li><img src="images/resources/sug6.jpg" alt=""></li>
                <li><img src="images/resources/sug7.jpg" alt=""></li>
                <li><img src="images/resources/sug4.jpg" alt=""></li>
                <li><img src="images/resources/sug1.jpg" alt=""></li>
                <li><img src="images/resources/sug2.jpg" alt=""></li>
                <li><img src="images/resources/sug4.jpg" alt=""></li>
                <li><img src="images/resources/sug5.jpg" alt=""></li>
                <li><img src="images/resources/sug6.jpg" alt=""></li>
                <li><img src="images/resources/sug7.jpg" alt=""></li>
                <li><img src="images/resources/sug1.jpg" alt=""></li>
                <li><img src="images/resources/sug4.jpg" alt=""></li>
                <li><img src="images/resources/sug5.jpg" alt=""></li>
            </ul>
            <a class="main-btn" href="#" title="" data-ripple="">Confirm</a>
            <a class="main-btn canceld" href="#" title="" data-ripple="">Cancel</a>
        </div>
    </div><!-- upload popup -->

    <div class="popup-wraper1">
        <div class="popup direct-mesg">
            <span class="popup-closed"><i class="ti-close"></i></span>
            <div class="popup-meta">
                <div class="popup-head">
                    <h5>Send Message</h5>
                </div>
                <div class="send-message">
                    <form method="post" class="c-form">
                        <input type="text" placeholder="Sophia">
                        <textarea placeholder="Write Message"></textarea>
                        <button type="submit" class="main-btn">Send</button>
                    </form>
                    <div class="add-smiles">
                        <div class="uploadimage">
                            <i class="fa fa-image"></i>
                            <label class="fileContainer">
                                <input type="file">
                            </label>
                        </div>
                        <span title="add icon" class="em em-expressionless"></span>
                        <div class="smiles-bunch">
                            <i class="em em---1"></i>
                            <i class="em em-smiley"></i>
                            <i class="em em-anguished"></i>
                            <i class="em em-laughing"></i>
                            <i class="em em-angry"></i>
                            <i class="em em-astonished"></i>
                            <i class="em em-blush"></i>
                            <i class="em em-disappointed"></i>
                            <i class="em em-worried"></i>
                            <i class="em em-kissing_heart"></i>
                            <i class="em em-rage"></i>
                            <i class="em em-stuck_out_tongue"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div><!-- send message popup -->

    <div class="popup-wraper3">
        <div class="popup">
            <span class="popup-closed"><i class="ti-close"></i></span>
            <div class="popup-meta">
                <div class="popup-head">
                    <h5>Report Post</h5>
                </div>
                <div class="Rpt-meta">
                    <span>We're sorry something's wrong. How can we help?</span>
                    <form method="post" class="c-form">
                        <div class="form-radio">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="radio" checked="checked"><i class="check-box"></i>It's
                                    spam or abuse
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="radio"><i class="check-box"></i>It breaks r/technology's
                                    rules
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="radio"><i class="check-box"></i>Not Related
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="radio"><i class="check-box"></i>Other issues
                                </label>
                            </div>
                        </div>
                        <div>
                            <label>Write about Report</label>
                            <textarea placeholder="write someting about Post" rows="2"></textarea>
                        </div>
                        <div>
                            <button data-ripple="" type="submit" class="main-btn">Submit</button>
                            <a href="#" data-ripple="" class="main-btn3 cancel">Close</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- report popup -->


    <script src="js/main.min.js"></script>
    <script src="js/script.js"></script>
    @endsection
