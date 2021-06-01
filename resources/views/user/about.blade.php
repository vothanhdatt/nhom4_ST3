
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
                            <li><a href="{{ url('friends') }}" title="">Friends' Birthday</a></li>
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
                                            <li><span>4.7/5</span></li>
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
                                                        <a class="active" href="{{ url('about') }}">About</a>
                                                    </li>
                                                    <li>
                                                        <a class="" href="{{ url('friends') }}">Friends</a>
                                                    </li>
                                                    <li>
                                                        <a class="" href="{{ url('photos') }}">Photos</a>
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
                                <div class="col-lg-4 col-md-4">
                                    <aside class="sidebar">
                                        <div class="central-meta stick-widget">
                                            <span class="create-post">Personal Info</span>
                                            <div class="personal-head">
                                                <span class="f-title"><i class="fa fa-user"></i> About Me:</span>
                                                <p>
                                                    Hi, I’m John Carter, I’m 36 and I work as a Digital Designer for the
                                                    “dewwater” Agency in Ontario, Canada
                                                </p>
                                                <span class="f-title"><i class="fa fa-birthday-cake"></i>
                                                    Birthday:</span>
                                                <p>
                                                    December 17, 1985
                                                </p>
                                                <span class="f-title"><i class="fa fa-phone"></i> Phone Number:</span>
                                                <p>
                                                    +1-989-232435234
                                                </p>
                                                <span class="f-title"><i class="fa fa-medkit"></i> Blood group:</span>
                                                <p>
                                                    B+
                                                </p>
                                                <span class="f-title"><i class="fa fa-male"></i> Gender:</span>
                                                <p>
                                                    Male
                                                </p>
                                                <span class="f-title"><i class="fa fa-globe"></i> Country:</span>
                                                <p>
                                                    San Francisco, California, USA
                                                </p>
                                                <span class="f-title"><i class="fa fa-briefcase"></i> Occupation:</span>
                                                <p>
                                                    UI/UX Designer
                                                </p>
                                                <span class="f-title"><i class="fa fa-handshake-o"></i> Joined:</span>
                                                <p>
                                                    December 20, 2001
                                                </p>

                                                <span class="f-title"><i class="fa fa-envelope"></i> Email &
                                                    Website:</span>
                                                <p>
                                                    <a href="wpkixx.html" title="">www.wpkixx.com</a> <a
                                                        href="http://wpkixx.com/cdn-cgi/l/email-protection"
                                                        class="__cf_email__"
                                                        data-cfemail="ebbb829f858280ab92849e99868a8287c5888486">[email&#160;protected]</a>
                                                </p>

                                            </div>
                                        </div>
                                    </aside>
                                </div>
                                <div class="col-lg-8 col-md-8">
                                    <div class="central-meta">
                                        <span class="create-post">General Info<a href="#" title="">See All</a></span>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="gen-metabox">
                                                    <span><i class="fa fa-puzzle-piece"></i> Hobbies</span>
                                                    <p>
                                                        I like to ride the bicycle, swimming, and working out. I also
                                                        like reading design magazines, and searching on internet, and
                                                        also binge watching a good hollywood Movies while it’s raining
                                                        outside.
                                                    </p>
                                                </div>
                                                <div class="gen-metabox">
                                                    <span><i class="fa fa-plus"></i> Others Interests</span>
                                                    <p>
                                                        Swimming, Surfing, Uber Diving, Anime, Photography, Tattoos,
                                                        Street Art.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="gen-metabox">
                                                    <span><i class="fa fa-mortar-board"></i> Education</span>
                                                    <p>
                                                        Master of computer science, sixteen years degree From <a
                                                            href="#" title="">Oxford Uniersity, London</a>
                                                    </p>
                                                </div>
                                                <div class="gen-metabox">
                                                    <span><i class="fa fa-certificate"></i> Work and experience</span>
                                                    <p>
                                                        Currently working in the "color hands" web development agency
                                                        from the last 5 five years as <a href="#" title="">Senior UI/UX
                                                            Designer</a>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="gen-metabox no-margin">
                                                    <span><i class="fa fa-sitemap"></i> Social Networks</span>
                                                    <ul class="sociaz-media">
                                                        <li><a class="facebook" href="#" title=""><i
                                                                    class="fa fa-facebook"></i></a></li>
                                                        <li><a class="twitter" href="#" title=""><i
                                                                    class="fa fa-twitter"></i></a></li>
                                                        <li><a class="google" href="#" title=""><i
                                                                    class="fa fa-google-plus"></i></a></li>
                                                        <li><a class="vk" href="#" title=""><i class="fa fa-vk"></i></a>
                                                        </li>
                                                        <li><a class="instagram" href="#" title=""><i
                                                                    class="fa fa-instagram"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="gen-metabox no-margin">
                                                    <span><i class="fa fa-trophy"></i> Badges</span>
                                                    <ul class="badged">
                                                        <li><img src="images/badges/badge2.png" alt=""></li>
                                                        <li><img src="images/badges/badge19.png" alt=""></li>
                                                        <li><img src="images/badges/badge21.png" alt=""></li>
                                                        <li><img src="images/badges/badge3.png" alt=""></li>
                                                        <li><img src="images/badges/badge4.png" alt=""></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="central-meta">
                                        <span class="create-post">Favourit Movies & TV Shows (33) <a href="#"
                                                title="">See All</a></span>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <div class="fav-play">
                                                    <figure>
                                                        <img src="images/resources/tvplay1.jpg" alt="">
                                                    </figure>
                                                    <span class="tv-play-title">Attaturk Tv Series 2017 </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <div class="fav-play">
                                                    <figure>
                                                        <img src="images/resources/tvplay2.jpg" alt="">
                                                    </figure>
                                                    <span class="tv-play-title">Thor Hollywood Movie 2017 </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <div class="fav-play">
                                                    <figure>
                                                        <img src="images/resources/tvplay3.jpg" alt="">
                                                    </figure>
                                                    <span class="tv-play-title">Spider Men 2015 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="central-meta">
                                        <span class="create-post">Friend's (320) <a href="timeline-friends2.html"
                                                title="">See All</a></span>
                                        <ul class="frndz-list">
                                            <li>
                                                <img src="images/resources/recent1.jpg" alt="">
                                                <div class="sugtd-frnd-meta">
                                                    <a href="#" title="">Olivia</a>
                                                    <span>1 mutual friend</span>
                                                    <ul class="add-remove-frnd">
                                                        <li class="add-tofrndlist"><a class="send-mesg" href="#"
                                                                title="Send Message"><i
                                                                    class="fa fa-commenting"></i></a></li>
                                                        <li class="remove-frnd"><a href="#" title="remove friend"><i
                                                                    class="fa fa-user-times"></i></a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="images/resources/recent2.jpg" alt="">
                                                <div class="sugtd-frnd-meta">
                                                    <a href="#" title="">Emma watson</a>
                                                    <span>2 mutual friend</span>
                                                    <ul class="add-remove-frnd">
                                                        <li class="add-tofrndlist"><a class="send-mesg" href="#"
                                                                title="Send Message"><i
                                                                    class="fa fa-commenting"></i></a></li>
                                                        <li class="remove-frnd"><a href="#" title="remove friend"><i
                                                                    class="fa fa-user-times"></i></a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="images/resources/recent3.jpg" alt="">
                                                <div class="sugtd-frnd-meta">
                                                    <a href="#" title="">Isabella</a>
                                                    <span><a href="#" title="">Emmy</a> is mutual friend</span>
                                                    <ul class="add-remove-frnd">
                                                        <li class="add-tofrndlist"><a class="send-mesg" href="#"
                                                                title="Send Message"><i
                                                                    class="fa fa-commenting"></i></a></li>
                                                        <li class="remove-frnd"><a href="#" title="remove friend"><i
                                                                    class="fa fa-user-times"></i></a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="images/resources/recent4.jpg" alt="">
                                                <div class="sugtd-frnd-meta">
                                                    <a href="#" title="">Amelia</a>
                                                    <span>5 mutual friend</span>
                                                    <ul class="add-remove-frnd">
                                                        <li class="add-tofrndlist"><a class="send-mesg" href="#"
                                                                title="Send Message"><i
                                                                    class="fa fa-commenting"></i></a></li>
                                                        <li class="remove-frnd"><a href="#" title="remove friend"><i
                                                                    class="fa fa-user-times"></i></a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="images/resources/recent5.jpg" alt="">
                                                <div class="sugtd-frnd-meta">
                                                    <a href="#" title="">Sophia</a>
                                                    <span>1 mutual friend</span>
                                                    <ul class="add-remove-frnd">
                                                        <li class="add-tofrndlist"><a class="send-mesg" href="#"
                                                                title="Send Message"><i
                                                                    class="fa fa-commenting"></i></a></li>
                                                        <li class="remove-frnd"><a href="#" title="remove friend"><i
                                                                    class="fa fa-user-times"></i></a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="images/resources/recent6.jpg" alt="">
                                                <div class="sugtd-frnd-meta">
                                                    <a href="#" title="">Amelia</a>
                                                    <span>3 mutual friend</span>
                                                    <ul class="add-remove-frnd">
                                                        <li class="add-tofrndlist"><a class="send-mesg" href="#"
                                                                title="Send Message"><i
                                                                    class="fa fa-commenting"></i></a></li>
                                                        <li class="remove-frnd"><a href="#" title="remove friend"><i
                                                                    class="fa fa-user-times"></i></a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div><!-- friends list -->
                                    <div class="central-meta">
                                        <span class="create-post">Photos (580) <a href="{{ url('photos') }}"
                                                title="">See All</a></span>
                                        <ul class="photos-list">
                                            <li>
                                                <div class="item-box">
                                                    <a class="strip" href="images/resources/photo-22.jpg" title=""
                                                        data-strip-group="mygroup"
                                                        data-strip-group-options="loop: false">
                                                        <img src="images/resources/photo2.jpg" alt=""></a>
                                                    <div class="over-photo">
                                                        <div class="likes heart" title="Like/Dislike">❤ <span>15</span>
                                                        </div>
                                                        <span>20 hours ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item-box">
                                                    <a class="strip" href="images/resources/photo-33.jpg" title=""
                                                        data-strip-group="mygroup"
                                                        data-strip-group-options="loop: false">
                                                        <img src="images/resources/photo3.jpg" alt=""></a>
                                                    <div class="over-photo">
                                                        <div class="likes heart" title="Like/Dislike">❤ <span>20</span>
                                                        </div>
                                                        <span>20 days ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item-box">
                                                    <a class="strip" href="images/resources/photo-44.jpg" title=""
                                                        data-strip-group="mygroup"
                                                        data-strip-group-options="loop: false">
                                                        <img src="images/resources/photo4.jpg" alt=""></a>
                                                    <div class="over-photo">
                                                        <div class="likes heart" title="Like/Dislike">❤ <span>155</span>
                                                        </div>
                                                        <span>Yesterday</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item-box">
                                                    <a class="strip" href="images/resources/photo-55.jpg" title=""
                                                        data-strip-group="mygroup"
                                                        data-strip-group-options="loop: false">
                                                        <img src="images/resources/photo5.jpg" alt=""></a>
                                                    <div class="over-photo">
                                                        <div class="likes heart" title="Like/Dislike">❤ <span>201</span>
                                                        </div>
                                                        <span>3 weeks ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item-box">
                                                    <a class="strip" href="images/resources/photo-66.jpg" title=""
                                                        data-strip-group="mygroup"
                                                        data-strip-group-options="loop: false">
                                                        <img src="images/resources/photo6.jpg" alt=""></a>
                                                    <div class="over-photo">
                                                        <div class="likes heart" title="Like/Dislike">❤ <span>81</span>
                                                        </div>
                                                        <span>2 months ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item-box">
                                                    <a class="strip" href="images/resources/photo-77.jpg" title=""
                                                        data-strip-group="mygroup"
                                                        data-strip-group-options="loop: false">
                                                        <img src="images/resources/photo7.jpg" alt=""></a>
                                                    <div class="over-photo">
                                                        <div class="likes heart" title="Like/Dislike">❤ <span>98</span>
                                                        </div>
                                                        <span>1 day</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item-box">
                                                    <a class="strip" href="images/resources/photo-88.jpg" title=""
                                                        data-strip-group="mygroup"
                                                        data-strip-group-options="loop: false">
                                                        <img src="images/resources/photo8.jpg" alt=""></a>
                                                    <div class="over-photo">
                                                        <div class="likes heart" title="Like/Dislike">❤ <span>87</span>
                                                        </div>
                                                        <span>23 hours ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="central-meta">
                                        <span class="create-post">Videos (33) <a href="timeline-videos.html"
                                                title="">See All</a></span>
                                        <ul class="videos-list">
                                            <li>
                                                <div class="item-box">
                                                    <a href="https://www.youtube.com/watch?v=fF382gwEnG8&amp;t=1s"
                                                        title="" data-strip-group="mygroup" class="strip"
                                                        data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img
                                                            src="images/resources/vid-11.jpg" alt="">
                                                        <i>
                                                            <svg version="1.1" class="play"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                                y="0px" height="50px" width="50px" viewBox="0 0 100 100"
                                                                enable-background="new 0 0 100 100"
                                                                xml:space="preserve">
                                                                <path class="stroke-solid" fill="none" stroke="" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
													C97.3,23.7,75.7,2.3,49.9,2.5" />
                                                                <path class="icon" fill=""
                                                                    d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z" />
                                                            </svg>
                                                        </i>
                                                    </a>
                                                    <div class="over-photo">
                                                        <div class="likes heart" title="Like/Dislike">❤ <span>15</span>
                                                        </div>
                                                        <span>20 hours ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item-box">
                                                    <a href="https://www.youtube.com/watch?v=fF382gwEnG8&amp;t=1s"
                                                        title="" data-strip-group="mygroup" class="strip"
                                                        data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img
                                                            src="images/resources/vid-12.jpg" alt="">
                                                        <i>
                                                            <svg version="1.1" class="play"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                                y="0px" height="50px" width="50px" viewBox="0 0 100 100"
                                                                enable-background="new 0 0 100 100"
                                                                xml:space="preserve">
                                                                <path class="stroke-solid" fill="none" stroke="" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
														C97.3,23.7,75.7,2.3,49.9,2.5" />
                                                                <path class="icon" fill=""
                                                                    d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z" />
                                                            </svg>
                                                        </i>
                                                    </a>
                                                    <div class="over-photo">
                                                        <div class="likes heart" title="Like/Dislike">❤ <span>20</span>
                                                        </div>
                                                        <span>20 hours ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item-box">
                                                    <a href="https://www.youtube.com/watch?v=fF382gwEnG8&amp;t=1s"
                                                        title="" data-strip-group="mygroup" class="strip"
                                                        data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img
                                                            src="images/resources/vid-10.jpg" alt="">
                                                        <i>
                                                            <svg version="1.1" class="play"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                                y="0px" height="50px" width="50px" viewBox="0 0 100 100"
                                                                enable-background="new 0 0 100 100"
                                                                xml:space="preserve">
                                                                <path class="stroke-solid" fill="none" stroke="" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
														C97.3,23.7,75.7,2.3,49.9,2.5" />
                                                                <path class="icon" fill=""
                                                                    d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z" />
                                                            </svg>
                                                        </i>
                                                    </a>
                                                    <div class="over-photo">
                                                        <div class="likes heart" title="Like/Dislike">❤ <span>49</span>
                                                        </div>
                                                        <span>20 days ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item-box">
                                                    <a href="https://www.youtube.com/watch?v=fF382gwEnG8&amp;t=1s"
                                                        title="" data-strip-group="mygroup" class="strip"
                                                        data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img
                                                            src="images/resources/vid-9.jpg" alt="">
                                                        <i>
                                                            <svg version="1.1" class="play"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                                y="0px" height="50px" width="50px" viewBox="0 0 100 100"
                                                                enable-background="new 0 0 100 100"
                                                                xml:space="preserve">
                                                                <path class="stroke-solid" fill="none" stroke="" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
														C97.3,23.7,75.7,2.3,49.9,2.5" />
                                                                <path class="icon" fill=""
                                                                    d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z" />
                                                            </svg>
                                                        </i>
                                                    </a>
                                                    <div class="over-photo">
                                                        <div class="likes heart" title="Like/Dislike">❤ <span>156</span>
                                                        </div>
                                                        <span>Yesterday</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item-box">
                                                    <a href="https://www.youtube.com/watch?v=fF382gwEnG8&amp;t=1s"
                                                        title="" data-strip-group="mygroup" class="strip"
                                                        data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img
                                                            src="images/resources/vid-6.jpg" alt="">
                                                        <i>
                                                            <svg version="1.1" class="play"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                                y="0px" height="50px" width="50px" viewBox="0 0 100 100"
                                                                enable-background="new 0 0 100 100"
                                                                xml:space="preserve">
                                                                <path class="stroke-solid" fill="none" stroke="" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
														C97.3,23.7,75.7,2.3,49.9,2.5" />
                                                                <path class="icon" fill=""
                                                                    d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z" />
                                                            </svg>
                                                        </i>
                                                    </a>
                                                    <div class="over-photo">
                                                        <div class="likes heart" title="Like/Dislike">❤ <span>202</span>
                                                        </div>
                                                        <span>3 weeks ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- content -->




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

    <!-- <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
    <script src="js/main.min.js"></script>
    <script src="js/script.js"></script>
    @endsection
