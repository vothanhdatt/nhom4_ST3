@extends('layouts.user')
@section('content')
@guest
{{ __('Chua dang nhap') }}
@else
{{ __('Da dang nhap') }}
@endguest
<div class="theme-layout">
    <div class="postoverlay"></div>

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
                        <li><a href="about.html" title="">Timeline About</a></li>
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
                            <div class="col-lg-3">
                                <aside class="sidebar static left">
                                    <div class="widget">
                                        <div class="weather-widget low-opacity bluesh">
                                            <div class="bg-image"
                                                style="background-image: url(images/resources/weather.jpg)"></div>
                                            <span class="refresh-content"><i class="fa fa-refresh"></i></span>
                                            <div class="weather-week">
                                                <div class="icon sun-shower">
                                                    <div class="cloud"></div>
                                                    <div class="sun">
                                                        <div class="rays"></div>
                                                    </div>
                                                    <div class="rain"></div>
                                                </div>
                                            </div>
                                            <div class="weather-infos">
                                                <span class="weather-tem">25</span>
                                                <h3>Cloudy Skyes<i>Sicklervilte, New Jersey</i></h3>
                                                <div class="weather-date skyblue-bg">
                                                    <span>MAY<strong>21</strong></span>
                                                </div>
                                            </div>
                                            <div class="monthly-weather">
                                                <ul>
                                                    <li>
                                                        <span>Sun</span>
                                                        <a href="#" title=""><i class="wi wi-day-sunny"></i></a>
                                                        <em>40°</em>
                                                    </li>
                                                    <li>
                                                        <span>Mon</span>
                                                        <a href="#" title=""><i class="wi wi-day-cloudy"></i></a>
                                                        <em>10°</em>
                                                    </li>
                                                    <li>
                                                        <span>Tue</span>
                                                        <a href="#" title=""><i class="wi wi-day-hail"></i></a>
                                                        <em>20°</em>
                                                    </li>
                                                    <li>
                                                        <span>Wed</span>
                                                        <a href="#" title=""><i class="wi wi-day-lightning"></i></a>
                                                        <em>34°</em>
                                                    </li>
                                                    <li>
                                                        <span>Thu</span>
                                                        <a href="#" title=""><i class="wi wi-day-showers"></i></a>
                                                        <em>22°</em>
                                                    </li>
                                                    <li>
                                                        <span>Fri</span>
                                                        <a href="#" title=""><i class="wi wi-day-windy"></i></a>
                                                        <em>26°</em>
                                                    </li>
                                                    <li>
                                                        <span>Sat</span>
                                                        <a href="#" title=""><i
                                                                class="wi wi-day-sunny-overcast"></i></a>
                                                        <em>30°</em>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div><!-- Weather Widget -->
                                    </div><!-- weather widget-->
                                    <div class="widget whitish low-opacity">
                                        <div style="background-image: url(images/resources/dob2.png)" class="bg-image">
                                        </div>
                                        <div class="dob-head">
                                            <img src="images/resources/sug-page-5.jpg" alt="">
                                            <span>22nd Birthday</span>
                                            <div class="dob">
                                                <i>19</i>
                                                <span>September</span>
                                            </div>
                                        </div>
                                        <div class="dob-meta">
                                            <figure><img src="images/resources/dob-cake.gif" alt=""></figure>
                                            <h6><a href="#" title="">Lucy Carbel</a> valentine's birthday</h6>
                                            <p>leave a message with your best wishes on his profile.</p>
                                        </div>
                                    </div><!-- birthday widget -->
                                    <div class="widget">
                                        <h4 class="widget-title">Twitter feed</h4>
                                        <ul class="twiter-feed">
                                            <li>
                                                <i class="fa fa-twitter"></i>
                                                <span>
                                                    <i>jhon william</i>
                                                    @jhonwilliam
                                                </span>
                                                <p>tomorrow with the company we were working and 5 child run away
                                                    from the working place. <a href="#" title="">#daydream5k</a>
                                                </p>
                                                <em>2 hours ago</em>
                                            </li>
                                            <li>
                                                <i class="fa fa-twitter"></i>
                                                <span>
                                                    <i>Kelly watson</i>
                                                    @kelly
                                                </span>
                                                <p>tomorrow with the company we were working and 5 child run away
                                                    from the working place. <a href="#" title="">#daydream5k</a>
                                                </p>
                                                <em>2 hours ago</em>
                                            </li>
                                            <li>
                                                <i class="fa fa-twitter"></i>
                                                <span>
                                                    <i>Jony bravo</i>
                                                    @jonibravo
                                                </span>
                                                <p>tomorrow with the company we were working and 5 child run away
                                                    from the working place. <a href="#" title="">#daydream5k</a>
                                                </p>
                                                <em>2 hours ago</em>
                                            </li>
                                        </ul>
                                    </div><!-- twitter feed-->
                                    <div class="advertisment-box">
                                        <h4 class="">advertisment</h4>
                                        <figure>
                                            <a href="#" title="Advertisment"><img src="images/resources/ad-widget.gif"
                                                    alt=""></a>
                                        </figure>
                                    </div><!-- advertisment box -->
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
                                        <h4 class="widget-title">Recent Activity</h4>
                                        <ul class="activitiez">
                                            <li>
                                                <div class="activity-meta">
                                                    <i>10 hours Ago</i>
                                                    <span><a href="#" title="">Commented on Video posted </a></span>
                                                    <h6>by <a href="time-line.html">black demon.</a></h6>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="activity-meta">
                                                    <i>30 Days Ago</i>
                                                    <span><a href="#" title="">Posted your status. “Hello guys, how
                                                            are you?”</a></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="activity-meta">
                                                    <i>2 Years Ago</i>
                                                    <span><a href="#" title="">Share a video on her
                                                            timeline.</a></span>
                                                    <h6>"<a href="#">you are so funny mr.been.</a>"</h6>
                                                </div>
                                            </li>
                                        </ul>
                                    </div><!-- recent activites -->
                                    <div class="widget stick-widget">
                                        <h4 class="widget-title">Who's follownig</h4>
                                        <ul class="followers">
                                            <li>
                                                <figure><img src="images/resources/friend-avatar2.jpg" alt="">
                                                </figure>
                                                <div class="friend-meta">
                                                    <h4><a href="time-line.html" title="">Kelly Bill</a></h4>
                                                    <a href="#" title="" class="underline">Add Friend</a>
                                                </div>
                                            </li>
                                            <li>
                                                <figure><img src="images/resources/friend-avatar4.jpg" alt="">
                                                </figure>
                                                <div class="friend-meta">
                                                    <h4><a href="time-line.html" title="">Issabel</a></h4>
                                                    <a href="#" title="" class="underline">Add Friend</a>
                                                </div>
                                            </li>
                                            <li>
                                                <figure><img src="images/resources/friend-avatar6.jpg" alt="">
                                                </figure>
                                                <div class="friend-meta">
                                                    <h4><a href="time-line.html" title="">Andrew</a></h4>
                                                    <a href="#" title="" class="underline">Add Friend</a>
                                                </div>
                                            </li>
                                            <li>
                                                <figure><img src="images/resources/friend-avatar8.jpg" alt="">
                                                </figure>
                                                <div class="friend-meta">
                                                    <h4><a href="time-line.html" title="">Sophia</a></h4>
                                                    <a href="#" title="" class="underline">Add Friend</a>
                                                </div>
                                            </li>
                                            <li>
                                                <figure><img src="images/resources/friend-avatar3.jpg" alt="">
                                                </figure>
                                                <div class="friend-meta">
                                                    <h4><a href="time-line.html" title="">Allen</a></h4>
                                                    <a href="#" title="" class="underline">Add Friend</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div><!-- who's following -->
                                </aside>
                            </div><!-- sidebar -->
                            <div class="col-lg-6">
                                @guest
                                @else
                                <div class="central-meta postbox">
                                    <form action="{{route('add-post')}}" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <span class="create-post">Create post</span>
                                        <div class="new-postbox">
                                            <figure>
                                                <img src="images/resources/<?php echo(Auth::user()->avatar) ?>" alt="">
                                            </figure>
                                            <div class="newpst-input">
                                                <form method="post">
                                                    <textarea rows="2" placeholder="Share some what you are thinking?"
                                                        name="text"> </textarea>
                                                </form>
                                            </div>
                                            <div class="attachments">
                                                <ul>
                                                    <li>
                                                        <span class="add-loc">
                                                            <i class="fa fa-map-marker"></i>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-music"></i>
                                                        <label class="fileContainer">
                                                            <input type="file">
                                                        </label>
                                                    </li>
                                                    <li>


                                                        <div class="controls">
                                                            <i class="fa fa-image"></i>
                                                            <label class="fileContainer">
                                                                <input type="file" name="fileUpload" id="fileUpload">
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-video-camera"></i>
                                                        <label class="fileContainer">
                                                            <input type="file">
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-camera"></i>
                                                        <label class="fileContainer">
                                                            <input type="file">
                                                        </label>
                                                    </li>
                                                    <li class="preview-btn">
                                                        <button class="post-btn-preview" type="submit"
                                                            data-ripple="">Preview</button>
                                                    </li>
                                                </ul>
                                                <button class="post-btn" type="submit" data-ripple="">Post</button>

                                            </div>
                                            <div class="add-location-post">
                                                <span>Drag map point to selected area</span>
                                                <div class="row">

                                                    <div class="col-lg-6">
                                                        <label class="control-label">Lat :</label>
                                                        <input type="text" class="" id="us3-lat" />
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label>Long :</label>
                                                        <input type="text" class="" id="us3-lon" />
                                                    </div>
                                                </div>
                                                <!-- map -->
                                                <div id="us3"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div><!-- add post new box -->
                                @endguest

                                <div class="loadMore">
                                    @foreach($post as $value)

                                    <div class="central-meta item">
                                        <div class="user-post">
                                            <div class="friend-info">
                                                <figure>
                                                    <img src="images/resources/<?php echo($value->user->avatar) ?>"
                                                        alt="">
                                                </figure>
                                                <div class="friend-name">
                                                    <div class="more">

                                                        @guest
                                                        @else
                                                        <div class="more-post-optns"><i class="ti-more-alt"></i>
                                                            <ul>
                                                                <?php if($value->id_user == Auth::user()->id){
                                                                ?>
                                                                <li class="edit-post"><i
                                                                            class="fa fa-pencil-square-o"></i>Editt
                                                                        Post
                                                                </li>
                                                                <li><a href="./deletepost/<?php echo($value->id) ?>"><i
                                                                            class="fa fa-trash-o"></i>Delete Post</a>
                                                                </li>
                                                                <?php
                                                            }
                                                            else{ ?>
                                                                <li class="bad-report"><i class="fa fa-flag"></i>Report
                                                                    Post</li>

                                                                <?php
                                                            }
                                                            ?>




                                                            </ul>
                                                        </div>
                                                        @endguest


                                                    </div>
                                                    <ins><a href="time-line.html" title="">{{$value->user->name}}</a>
                                                        Post
                                                        Album</ins>
                                                    <span><i class="fa fa-globe"></i> published:
                                                        {{$value['created_at']}}
                                                        19:PM </span>
                                                </div>
                                                <div class="post-meta">
                                                    <p>
                                                        {{$value['content']}}
                                                    </p>
                                                    <figure>
                                                        <div class="img-bunch">
                                                            <div class="row">
                                                                <figure>
                                                                    <a class="strip"
                                                                        href="images/resources/<?php echo($value['images']) ?>"
                                                                        title="" data-strip-group="mygroup"
                                                                        data-strip-group-options="loop: false">
                                                                        <img src="images/resources/<?php echo($value['images']) ?>"
                                                                            alt="">
                                                                    </a>
                                                                </figure>
                                                                <!--
                                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                                    <figure>
                                                                        <a class="strip"
                                                                            href="images/resources/avatar.jpg" title=""
                                                                            data-strip-group="mygroup"
                                                                            data-strip-group-options="loop: false">
                                                                            <img src="images/resources/avatar.jpg"
                                                                                alt="">
                                                                        </a>
                                                                    </figure>
                                                                    <figure>
                                                                        <a class="strip"
                                                                            href="images/resources/album2.jpg" title=""
                                                                            data-strip-group="mygroup"
                                                                            data-strip-group-options="loop: false">
                                                                            <img src="images/resources/album2.jpg"
                                                                                alt="">
                                                                        </a>
                                                                    </figure>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                                    <figure>
                                                                        <a class="strip"
                                                                            href="images/resources/album6.jpg" title=""
                                                                            data-strip-group="mygroup"
                                                                            data-strip-group-options="loop: false">
                                                                            <img src="images/resources/album6.jpg"
                                                                                alt="">
                                                                        </a>
                                                                    </figure>
                                                                    <figure>
                                                                        <a class="strip"
                                                                            href="images/resources/album5.jpg" title=""
                                                                            data-strip-group="mygroup"
                                                                            data-strip-group-options="loop: false">
                                                                            <img src="images/resources/album5.jpg"
                                                                                alt="">
                                                                        </a>
                                                                    </figure>
                                                                    <figure>
                                                                        <a class="strip"
                                                                            href="images/resources/album4.jpg" title=""
                                                                            data-strip-group="mygroup"
                                                                            data-strip-group-options="loop: false">
                                                                            <img src="images/resources/album4.jpg"
                                                                                alt="">
                                                                        </a>
                                                                        <div class="more-photos">
                                                                            <span>+15</span>
                                                                        </div>
                                                                    </figure>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                        <ul class="like-dislike">
                                                            <li><a class="bg-purple" href="#"
                                                                    title="Save to Pin Post"><i
                                                                        class="fa fa-thumb-tack"></i></a></li>
                                                            <li><a class="bg-blue" href="#" title="Like Post"><i
                                                                        class="ti-thumb-up"></i></a></li>
                                                            <li><a class="bg-red" href="#" title="dislike Post"><i
                                                                        class="ti-thumb-down"></i></a></li>
                                                        </ul>
                                                    </figure>
                                                    <div class="we-video-info">
                                                        <ul>
                                                            <li>
                                                                <span class="views" title="views">
                                                                    <i class="fa fa-eye"></i>
                                                                    <ins>1.2k</ins>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <div class="likes-{{$value->id}} heart 
                                                                    @if(!empty($value->like))
                                                                        @foreach($value->like as $valuelike_user)
                                                                            @if($valuelike_user->user->id ==1)
                                                                                happy
                                                                             @endif
                                                                        @endforeach
                                                                    @endif
                                                                " title="Like/Dislike" data-postid="{{$value->id}}"> <a
                                                                        href="">❤</a>
                                                                    <span id="like-numb-{{$value->id}}">

                                                                        <?php
                                                                            $countlike = 0;
                                                                            foreach($value->like as $valuelike){
                                                                                $countlike++;
                                                                            }
                                                                            echo($countlike);
                                                                        ?>


                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <span class="comment" title="Comments">
                                                                    <i class="fa fa-commenting"></i>
                                                                    <ins>
                                                                        <?php
                                                                            $countcmt = 0;
                                                                            foreach($value->comment as $valuecmt){
                                                                                $countcmt++;
                                                                            }
                                                                            echo($countcmt);
                                                                        ?>
                                                                    </ins>
                                                                </span>
                                                            </li>

                                                            <li>
                                                                <span>
                                                                    <a class="share-pst" href="#" title="Share">
                                                                        <i class="fa fa-share-alt"></i>
                                                                    </a>
                                                                    <ins>20</ins>
                                                                </span>
                                                            </li>

                                                        </ul>
                                                        <div class="users-thumb-list">
                                                            <a data-toggle="tooltip" title="Anderw" href="#">
                                                                <img alt="" src="images/resources/userlist-1.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="frank" href="#">
                                                                <img alt="" src="images/resources/userlist-2.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="Sara" href="#">
                                                                <img alt="" src="images/resources/userlist-3.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="Amy" href="#">
                                                                <img alt="" src="images/resources/userlist-4.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="Ema" href="#">
                                                                <img alt="" src="images/resources/userlist-5.jpg">
                                                            </a>
                                                            <span><strong>You</strong>, <b>Sarah</b> and <a href="#"
                                                                    title="">24+ more</a> liked</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="coment-area" style="display: block;">
                                                    <ul class="we-comet">
                                                        

                                                        <li class="list-comment-{{$value->id}}">
                                                        @foreach($value->comment as $valuecmt)
                                                            <div class="comet-avatar">
                                                                <img src="images/resources/<?php echo($valuecmt->user->avatar) ?>"
                                                                    alt="">
                                                            </div>
                                                            <div class="we-comment">
                                                                <h5><a href="time-line.html"
                                                                        title="">{{$valuecmt->user->name}}
                                                                    </a></h5>
                                                                <p>{{$valuecmt->content}}</p>
                                                                <div class="inline-itms">
                                                                    <span><?php echo($valuecmt->created_at) ?></span>
                                                                    <a class="we-reply" href="#" title="Reply"><i
                                                                            class="fa fa-reply"></i></a>
                                                                    <a href="#" title=""><i
                                                                            class="fa fa-heart"></i><span>20</span></a>
                                                                </div>
                                                                <div class="more">

                                                                    @guest
                                                                    @else
                                                                    <div class="more-post-optns"><i
                                                                            class="ti-more-alt"></i>
                                                                        <ul>
                                                                            <?php if($valuecmt->id_user == Auth::user()->id){
                                                                            ?>

                                                                            <li><i
                                                                                    class="fa fa-pencil-square-o "></i>Edit
                                                                                Comment
                                                                            </li>
                                                                            <li><a
                                                                                    href="./deletecomment/<?php echo($valuecmt->id) ?>"><i
                                                                                        class="fa fa-trash-o"></i>Delete
                                                                                    Comment</a></li>
                                                                            <li class="bad-report"><i
                                                                                    class="fa fa-flag"></i>Report
                                                                                Comment</li>

                                                                            <?php
                                                                        }
                                                                        ?>


                                                                        </ul>
                                                                    </div>
                                                                    @endguest

                                                                </div>
                                                            </div>
                                                            @endforeach
                                                        </li>

                                                        

                                                        <li>
                                                            <a href="#" title="" class="showmore underline">more
                                                                comments+</a>
                                                        </li>
                                                        @guest
                                                        @else
                                                        <li class="post-comment">
                                                            <div class="comet-avatar">
                                                                <img src="images/resources/<?php echo(Auth::user()->avatar) ?>"
                                                                    alt="">
                                                            </div>
                                                            <div class="post-comt-box">
                                                                <form action="#" method="post"
                                                                    enctype="multipart/form-data">
                                                                    <input type="hidden" name="_token"
                                                                        value="{{csrf_token()}}">
                                                                    <textarea placeholder="Post your comment"
                                                                        name="text"
                                                                        id="comment-content-{{$value->id}}"></textarea>
                                                                    <div class="add-smiles">
                                                                        <div class="uploadimage">
                                                                            <i class="fa fa-image"></i>
                                                                            <label class="fileContainer">
                                                                                <input type="file">
                                                                            </label>
                                                                        </div>
                                                                        <span class="em em-expressionless"
                                                                            title="add icon"></span>
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

                                                                    <button class="btn btn-md-2 btn-primary btn-comment"
                                                                        data-postid="{{$value->id}}"
                                                                        type="submit"></button>
                                                                </form>
                                                            </div>
                                                        </li>
                                                        @endguest

                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- album post -->
                                    <div class="central-meta item">
                                        <div class="user-post">
                                            <div class="friend-info">
                                                <figure>
                                                    <img src="images/resources/nearly1.jpg" alt="">
                                                </figure>
                                                <div class="friend-name">
                                                    <div class="more">
                                                        <div class="more-post-optns"><i class="ti-more-alt"></i>
                                                            <ul>
                                                                <li><i class="fa fa-pencil-square-o"></i>Edit Post
                                                                </li>
                                                                <li><a href="./deletepost/<?php echo($value->id) ?>"><i
                                                                            class="fa fa-trash-o"></i></a>Delete Post
                                                                </li>
                                                                <li class="bad-report"><i class="fa fa-flag"></i>Report
                                                                    Post</li>
                                                                <li><i class="fa fa-address-card-o"></i>Boost This
                                                                    Post</li>
                                                                <li><i class="fa fa-clock-o"></i>Schedule Post</li>
                                                                <li><i class="fa fa-wpexplorer"></i>Select as
                                                                    featured</li>
                                                                <li><i class="fa fa-bell-slash-o"></i>Turn off
                                                                    Notifications</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <ins><a href="time-line.html" title="">Digital Market</a></ins>
                                                    <span>sponsored <i class="fa fa-globe"></i></span>

                                                </div>
                                                <div class="post-meta">
                                                    <figure>
                                                        <img src="images/sponsors.gif" alt="">
                                                        <ul class="like-dislike">
                                                            <li><a class="bg-purple" href="#"
                                                                    title="Save to Pin Post"><i
                                                                        class="fa fa-thumb-tack"></i></a></li>
                                                            <li><a class="bg-blue" href="#" title="Like Post"><i
                                                                        class="ti-thumb-up"></i></a></li>
                                                            <li><a class="bg-red" href="#" title="dislike Post"><i
                                                                        class="ti-thumb-down"></i></a></li>
                                                        </ul>
                                                    </figure>
                                                    <div class="description">
                                                        <a href="#" class="learnmore" data-ripple="">Learn More</a>
                                                        <p>
                                                            Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus
                                                            eget condimentum rhoncus, sem quam semper libero, sit
                                                            amet adipiscing sem neque sed ipsum. Nam quam nunc.

                                                        </p>
                                                    </div>
                                                    <div class="we-video-info">
                                                        <ul>
                                                            <li>
                                                                <span class="views" title="views">
                                                                    <i class="fa fa-eye"></i>
                                                                    <ins>1.2k</ins>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <div class="likes heart" title="Like/Dislike">❤
                                                                    <span>2K</span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <span class="comment" title="Comments">
                                                                    <i class="fa fa-commenting"></i>
                                                                    <ins>52</ins>
                                                                </span>
                                                            </li>

                                                            <li>
                                                                <span>
                                                                    <a class="share-pst" href="#" title="Share">
                                                                        <i class="fa fa-share-alt"></i>
                                                                    </a>
                                                                    <ins>20</ins>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        <div class="users-thumb-list">
                                                            <a data-toggle="tooltip" title="Anderw" href="#">
                                                                <img alt="" src="images/resources/userlist-1.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="frank" href="#">
                                                                <img alt="" src="images/resources/userlist-2.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="Sara" href="#">
                                                                <img alt="" src="images/resources/userlist-3.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="Amy" href="#">
                                                                <img alt="" src="images/resources/userlist-4.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="Ema" href="#">
                                                                <img alt="" src="images/resources/userlist-5.jpg">
                                                            </a>
                                                            <span><strong>You</strong>, <b>Sarah</b> and <a href="#"
                                                                    title="">24+ more</a> liked</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="coment-area" style="">
                                                    <ul class="we-comet">
                                                        <li>
                                                            <div class="comet-avatar">
                                                                <img src="images/resources/nearly3.jpg" alt="">
                                                            </div>
                                                            <div class="we-comment">
                                                                <h5><a href="time-line.html" title="">Jason
                                                                        borne</a></h5>
                                                                <p>we are working for the dance and sing songs. this
                                                                    video is very awesome for the youngster. please
                                                                    vote this video and like our channel</p>
                                                                <div class="inline-itms">
                                                                    <span>1 year ago</span>
                                                                    <a class="we-reply" href="#" title="Reply"><i
                                                                            class="fa fa-reply"></i></a>
                                                                    <a href="#" title=""><i
                                                                            class="fa fa-heart"></i><span>20</span></a>
                                                                </div>
                                                            </div>

                                                        </li>
                                                        <li>
                                                            <div class="comet-avatar">
                                                                <img src="images/resources/comet-4.jpg" alt="">
                                                            </div>
                                                            <div class="we-comment">
                                                                <h5><a href="time-line.html" title="">Sophia</a>
                                                                </h5>
                                                                <p>we are working for the dance and sing songs. this
                                                                    video is very awesome for the youngster.
                                                                    <i class="em em-smiley"></i>
                                                                </p>
                                                                <div class="inline-itms">
                                                                    <span>1 year ago</span>
                                                                    <a class="we-reply" href="#" title="Reply"><i
                                                                            class="fa fa-reply"></i></a>
                                                                    <a href="#" title=""><i
                                                                            class="fa fa-heart"></i><span>20</span></a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="" class="showmore underline">more
                                                                comments+</a>
                                                        </li>
                                                        <li class="post-comment">
                                                            <div class="comet-avatar">
                                                                <img src="images/resources/nearly1.jpg" alt="">
                                                            </div>
                                                            <div class="post-comt-box">
                                                                <form action="#" method="post"
                                                                    enctype="multipart/form-data">
                                                                    <input type="hidden" name="_token"
                                                                        value="{{csrf_token()}}">

                                                                    <textarea placeholder="Post your comment"
                                                                        name="text"></textarea>
                                                                    <div class="add-smiles">
                                                                        <div class="uploadimage">
                                                                            <i class="fa fa-image"></i>
                                                                            <label class="fileContainer">
                                                                                <input type="file">
                                                                            </label>
                                                                        </div>
                                                                        <span class="em em-expressionless"
                                                                            title="add icon"></span>
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

                                                                    <button type="submit"
                                                                        class="btn btn-md-2 btn-primary comment"></button>
                                                                </form>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- digital sponsors -->
                                    <div class="central-meta item">
                                        <div class="user-post">
                                            <div class="friend-info">
                                                <figure>
                                                    <img alt="" src="images/resources/friend-avatar10.jpg">
                                                </figure>
                                                <div class="friend-name">
                                                    <div class="more">
                                                        <div class="more-post-optns"><i class="ti-more-alt"></i>
                                                            <ul>
                                                                <li><i class="fa fa-pencil-square-o"></i>Edit Post
                                                                </li>
                                                                <li><i class="fa fa-trash-o"></i>Delete Post</li>
                                                                <li class="bad-report"><i class="fa fa-flag"></i>Report
                                                                    Post</li>
                                                                <li><i class="fa fa-address-card-o"></i>Boost This
                                                                    Post</li>
                                                                <li><i class="fa fa-clock-o"></i>Schedule Post</li>
                                                                <li><i class="fa fa-wpexplorer"></i>Select as
                                                                    featured</li>
                                                                <li><i class="fa fa-bell-slash-o"></i>Turn off
                                                                    Notifications</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <ins><a title="" href="time-line.html">Janice Griffith</a></ins>
                                                    <span>published: june,2 2010 19:PM</span>
                                                </div>
                                                <div class="description">
                                                    <p>
                                                        Curabitur World's most beautiful car in <a title=""
                                                            href="#">#test drive booking !</a> the most beatuiful
                                                        car available in america and the saudia arabia, you can book
                                                        your test drive by our official website
                                                    </p>
                                                </div>
                                                <div class="post-meta">
                                                    <div class="linked-image align-left">
                                                        <a title="" href="#"><img alt=""
                                                                src="images/resources/page1.jpg"></a>
                                                    </div>
                                                    <div class="detail">
                                                        <span>Love Maid - HighChill</span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur ipisicing elit,
                                                            sed do eiusmod tempor incididunt ut labore et dolore
                                                            magna aliqua... </p>
                                                        <a title="" href="#">www.sample.com</a>
                                                    </div>

                                                    <ul class="like-dislike">
                                                        <li><a class="bg-purple" href="#" title="Save to Pin Post"><i
                                                                    class="fa fa-thumb-tack"></i></a></li>
                                                        <li><a class="bg-blue" href="#" title="Like Post"><i
                                                                    class="ti-thumb-up"></i></a></li>
                                                        <li><a class="bg-red" href="#" title="dislike Post"><i
                                                                    class="ti-thumb-down"></i></a></li>
                                                    </ul>
                                                    <div class="we-video-info">
                                                        <ul>
                                                            <li>
                                                                <span class="views" title="views">
                                                                    <i class="fa fa-eye"></i>
                                                                    <ins>1.2k</ins>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <div class="likes heart" title="Like/Dislike">❤
                                                                    <span>2K</span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <span class="comment" title="Comments">
                                                                    <i class="fa fa-commenting"></i>
                                                                    <ins>52</ins>
                                                                </span>
                                                            </li>

                                                            <li>
                                                                <span>
                                                                    <a class="share-pst" href="#" title="Share">
                                                                        <i class="fa fa-share-alt"></i>
                                                                    </a>
                                                                    <ins>20</ins>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        <div class="users-thumb-list">
                                                            <a data-toggle="tooltip" title="Anderw" href="#">
                                                                <img alt="" src="images/resources/userlist-1.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="frank" href="#">
                                                                <img alt="" src="images/resources/userlist-2.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="Sara" href="#">
                                                                <img alt="" src="images/resources/userlist-3.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="Amy" href="#">
                                                                <img alt="" src="images/resources/userlist-4.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="Ema" href="#">
                                                                <img alt="" src="images/resources/userlist-5.jpg">
                                                            </a>
                                                            <span><strong>You</strong>, <b>Sarah</b> and <a href="#"
                                                                    title="">24+ more</a> liked</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="coment-area" style="">
                                                    <ul class="we-comet">
                                                        <li>
                                                            <div class="comet-avatar">
                                                                <img src="images/resources/nearly3.jpg" alt="">
                                                            </div>
                                                            <div class="we-comment">
                                                                <h5><a href="time-line.html" title="">Jason
                                                                        borne</a></h5>
                                                                <p>we are working for the dance and sing songs. this
                                                                    video is very awesome for the youngster. please
                                                                    vote this video and like our channel</p>
                                                                <div class="inline-itms">
                                                                    <span>1 year ago</span>
                                                                    <a class="we-reply" href="#" title="Reply"><i
                                                                            class="fa fa-reply"></i></a>
                                                                    <a href="#" title=""><i
                                                                            class="fa fa-heart"></i><span>20</span></a>
                                                                </div>
                                                            </div>

                                                        </li>
                                                        <li>
                                                            <div class="comet-avatar">
                                                                <img src="images/resources/comet-4.jpg" alt="">
                                                            </div>
                                                            <div class="we-comment">
                                                                <h5><a href="time-line.html" title="">Sophia</a>
                                                                </h5>
                                                                <p>we are working for the dance and sing songs. this
                                                                    video is very awesome for the youngster.
                                                                    <i class="em em-smiley"></i>
                                                                </p>
                                                                <div class="inline-itms">
                                                                    <span>1 year ago</span>
                                                                    <a class="we-reply" href="#" title="Reply"><i
                                                                            class="fa fa-reply"></i></a>
                                                                    <a href="#" title=""><i
                                                                            class="fa fa-heart"></i><span>20</span></a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="" class="showmore underline">more
                                                                comments+</a>
                                                        </li>
                                                        <li class="post-comment">
                                                            <div class="comet-avatar">
                                                                <img src="images/resources/nearly1.jpg" alt="">
                                                            </div>
                                                            <div class="post-comt-box">
                                                                <form method="post">
                                                                    <textarea
                                                                        placeholder="Post your comment"></textarea>
                                                                    <div class="add-smiles">
                                                                        <div class="uploadimage">
                                                                            <i class="fa fa-image"></i>
                                                                            <label class="fileContainer">
                                                                                <input type="file">
                                                                            </label>
                                                                        </div>
                                                                        <span class="em em-expressionless"
                                                                            title="add icon"></span>
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

                                                                    <button type="submit"></button>
                                                                </form>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- love post -->
                                    <div class="central-meta item">
                                        <div class="user-post">
                                            <div class="friend-info">
                                                <figure>
                                                    <img src="images/resources/friend-avatar10.jpg" alt="">
                                                </figure>
                                                <div class="friend-name">
                                                    <div class="more">
                                                        <div class="more-post-optns"><i class="ti-more-alt"></i>
                                                            <ul>
                                                                <li><i class="fa fa-pencil-square-o"></i>Edit Post
                                                                </li>
                                                                <li><i class="fa fa-trash-o"></i>Delete Post</li>
                                                                <li class="bad-report"><i class="fa fa-flag"></i>Report
                                                                    Post</li>
                                                                <li><i class="fa fa-address-card-o"></i>Boost This
                                                                    Post</li>
                                                                <li><i class="fa fa-clock-o"></i>Schedule Post</li>
                                                                <li><i class="fa fa-wpexplorer"></i>Select as
                                                                    featured</li>
                                                                <li><i class="fa fa-bell-slash-o"></i>Turn off
                                                                    Notifications</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <ins><a href="time-line.html" title="">Mathilda
                                                            Brinker</a></ins>
                                                    <span>published: june,2 2020 19:PM</span>
                                                </div>
                                                <div class="post-meta">
                                                    <div class="description">
                                                        <p>
                                                            World's most beautiful car in Curabitur <a href="#"
                                                                title="">#test drive booking !</a> the most
                                                            beatuiful car available in america and the saudia
                                                            arabia, you can book your test drive by our official
                                                            website
                                                        </p>
                                                    </div>

                                                    <ul class="like-dislike">
                                                        <li><a href="#" title="Save to Pin Post"><i
                                                                    class="fa fa-thumb-tack"></i></a></li>
                                                        <li><a href="#" title="Like Post"><i
                                                                    class="ti-thumb-up"></i></a></li>
                                                        <li><a href="#" title="dislike Post"><i
                                                                    class="ti-thumb-down"></i></a></li>
                                                    </ul>
                                                    <div class="we-video-info">
                                                        <ul>
                                                            <li>
                                                                <span class="views" title="views">
                                                                    <i class="fa fa-eye"></i>
                                                                    <ins>1.2k</ins>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <div class="likes heart" title="Like/Dislike">❤
                                                                    <span>2K</span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <span class="comment" title="Comments">
                                                                    <i class="fa fa-commenting"></i>
                                                                    <ins>52</ins>
                                                                </span>
                                                            </li>

                                                            <li>
                                                                <span>
                                                                    <a class="share-pst" href="#" title="Share">
                                                                        <i class="fa fa-share-alt"></i>
                                                                    </a>
                                                                    <ins>20</ins>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        <div class="users-thumb-list">
                                                            <a data-toggle="tooltip" title="Anderw" href="#">
                                                                <img alt="" src="images/resources/userlist-1.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="frank" href="#">
                                                                <img alt="" src="images/resources/userlist-2.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="Sara" href="#">
                                                                <img alt="" src="images/resources/userlist-3.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="Amy" href="#">
                                                                <img alt="" src="images/resources/userlist-4.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="Ema" href="#">
                                                                <img alt="" src="images/resources/userlist-5.jpg">
                                                            </a>
                                                            <span><strong>You</strong>, <b>Sarah</b> and <a href="#"
                                                                    title="">24+ more</a> liked</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="coment-area" style="">
                                                    <ul class="we-comet">
                                                        <li>
                                                            <div class="comet-avatar">
                                                                <img src="images/resources/nearly3.jpg" alt="">
                                                            </div>
                                                            <div class="we-comment">
                                                                <h5><a href="time-line.html" title="">Jason
                                                                        borne</a></h5>
                                                                <p>we are working for the dance and sing songs. this
                                                                    video is very awesome for the youngster. please
                                                                    vote this video and like our channel</p>
                                                                <div class="inline-itms">
                                                                    <span>1 year ago</span>
                                                                    <a class="we-reply" href="#" title="Reply"><i
                                                                            class="fa fa-reply"></i></a>
                                                                    <a href="#" title=""><i
                                                                            class="fa fa-heart"></i><span>20</span></a>
                                                                </div>
                                                            </div>

                                                        </li>
                                                        <li>
                                                            <div class="comet-avatar">
                                                                <img src="images/resources/comet-4.jpg" alt="">
                                                            </div>
                                                            <div class="we-comment">
                                                                <h5><a href="time-line.html" title="">Sophia</a>
                                                                </h5>
                                                                <p>we are working for the dance and sing songs. this
                                                                    video is very awesome for the youngster.
                                                                    <i class="em em-smiley"></i>
                                                                </p>
                                                                <div class="inline-itms">
                                                                    <span>1 year ago</span>
                                                                    <a class="we-reply" href="#" title="Reply"><i
                                                                            class="fa fa-reply"></i></a>
                                                                    <a href="#" title=""><i
                                                                            class="fa fa-heart"></i><span>20</span></a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="" class="showmore underline">more
                                                                comments+</a>
                                                        </li>
                                                        <li class="post-comment">
                                                            <div class="comet-avatar">
                                                                <img src="images/resources/nearly1.jpg" alt="">
                                                            </div>
                                                            <div class="post-comt-box">
                                                                <form method="post">
                                                                    <textarea
                                                                        placeholder="Post your comment"></textarea>
                                                                    <div class="add-smiles">
                                                                        <div class="uploadimage">
                                                                            <i class="fa fa-image"></i>
                                                                            <label class="fileContainer">
                                                                                <input type="file">
                                                                            </label>
                                                                        </div>
                                                                        <span class="em em-expressionless"
                                                                            title="add icon"></span>
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

                                                                    <button type="submit"></button>
                                                                </form>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- without image -->

                                    <div class="central-meta item">
                                        <div class="user-post">
                                            <div class="friend-info">
                                                <figure>
                                                    <img src="images/resources/nearly1.jpg" alt="">
                                                </figure>
                                                <div class="friend-name">
                                                    <div class="more">
                                                        <div class="more-post-optns"><i class="ti-more-alt"></i>
                                                            <ul>
                                                                <li><i class="fa fa-pencil-square-o"></i>Edit Post
                                                                </li>
                                                                <li><i class="fa fa-trash-o"></i>Delete Post</li>
                                                                <li class="bad-report"><i class="fa fa-flag"></i>Report
                                                                    Post</li>
                                                                <li><i class="fa fa-address-card-o"></i>Boost This
                                                                    Post</li>
                                                                <li><i class="fa fa-clock-o"></i>Schedule Post</li>
                                                                <li><i class="fa fa-wpexplorer"></i>Select as
                                                                    featured</li>
                                                                <li><i class="fa fa-bell-slash-o"></i>Turn off
                                                                    Notifications</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <ins><a href="time-line.html" title="">Jack Carter</a> share <a
                                                            href="#" title="">link</a></ins>
                                                    <span><i class="fa fa-globe"></i> published: january,5 2010
                                                        19:PM </span>
                                                </div>
                                                <div class="post-meta">
                                                    <figure>
                                                        <a href="https://www.youtube.com/watch?v=fF382gwEnG8" title=""
                                                            data-strip-group="mygroup" class="strip vdeo-link"
                                                            data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }">
                                                            <img src="images/resources/user-post.jpg" alt="">
                                                            <i>
                                                                <svg version="1.1" class="play"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                                    y="0px" height="55px" width="55px"
                                                                    viewBox="0 0 100 100"
                                                                    enable-background="new 0 0 100 100"
                                                                    xml:space="preserve">
                                                                    <path class="stroke-solid" fill="none" stroke="" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
																C97.3,23.7,75.7,2.3,49.9,2.5" />
                                                                    <path class="icon" fill=""
                                                                        d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z" />
                                                                </svg>
                                                            </i>
                                                            <h2>Canada tourist spots you must visit in 2020</h2>
                                                        </a>
                                                        <ul class="like-dislike">
                                                            <li><a class="bg-purple" href="#"
                                                                    title="Save to Pin Post"><i
                                                                        class="fa fa-thumb-tack"></i></a></li>
                                                            <li><a class="bg-blue" href="#" title="Like Post"><i
                                                                        class="ti-thumb-up"></i></a></li>
                                                            <li><a class="bg-red" href="#" title="dislike Post"><i
                                                                        class="ti-thumb-down"></i></a></li>
                                                        </ul>

                                                    </figure>
                                                    <div class="description">
                                                        <p>
                                                            Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus
                                                            eget condimentum rhoncus, sem quam semper libero, sit
                                                            amet adipiscing sem neque sed ipsum. Nam quam nunc.
                                                        </p>
                                                    </div>
                                                    <div class="we-video-info">
                                                        <ul>
                                                            <li>
                                                                <span class="views" title="views">
                                                                    <i class="fa fa-eye"></i>
                                                                    <ins>1.2k</ins>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <div class="likes heart" title="Like/Dislike">❤
                                                                    <span>2K</span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <span class="comment" title="Comments">
                                                                    <i class="fa fa-commenting"></i>
                                                                    <ins>52</ins>
                                                                </span>
                                                            </li>

                                                            <li>
                                                                <span>
                                                                    <a class="share-pst" href="#" title="Share">
                                                                        <i class="fa fa-share-alt"></i>
                                                                    </a>
                                                                    <ins>20</ins>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        <div class="users-thumb-list">
                                                            <a data-toggle="tooltip" title="Anderw" href="#">
                                                                <img alt="" src="images/resources/userlist-1.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="frank" href="#">
                                                                <img alt="" src="images/resources/userlist-2.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="Sara" href="#">
                                                                <img alt="" src="images/resources/userlist-3.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="Amy" href="#">
                                                                <img alt="" src="images/resources/userlist-4.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="Ema" href="#">
                                                                <img alt="" src="images/resources/userlist-5.jpg">
                                                            </a>
                                                            <span><strong>You</strong>, <b>Sarah</b> and <a href="#"
                                                                    title="">24+ more</a> liked</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="coment-area" style="">
                                                    <ul class="we-comet">
                                                        <li>
                                                            <div class="comet-avatar">
                                                                <img src="images/resources/nearly3.jpg" alt="">
                                                            </div>
                                                            <div class="we-comment">
                                                                <h5><a href="time-line.html" title="">Jason
                                                                        borne</a></h5>
                                                                <p>we are working for the dance and sing songs. this
                                                                    video is very awesome for the youngster. please
                                                                    vote this video and like our channel</p>
                                                                <div class="inline-itms">
                                                                    <span>1 year ago</span>
                                                                    <a class="we-reply" href="#" title="Reply"><i
                                                                            class="fa fa-reply"></i></a>
                                                                    <a href="#" title=""><i
                                                                            class="fa fa-heart"></i><span>20</span></a>
                                                                </div>
                                                            </div>

                                                        </li>
                                                        <li>
                                                            <div class="comet-avatar">
                                                                <img src="images/resources/comet-4.jpg" alt="">
                                                            </div>
                                                            <div class="we-comment">
                                                                <h5><a href="time-line.html" title="">Sophia</a>
                                                                </h5>
                                                                <p>we are working for the dance and sing songs. this
                                                                    video is very awesome for the youngster.
                                                                    <i class="em em-smiley"></i>
                                                                </p>
                                                                <div class="inline-itms">
                                                                    <span>1 year ago</span>
                                                                    <a class="we-reply" href="#" title="Reply"><i
                                                                            class="fa fa-reply"></i></a>
                                                                    <a href="#" title=""><i
                                                                            class="fa fa-heart"></i><span>20</span></a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="" class="showmore underline">more
                                                                comments+</a>
                                                        </li>
                                                        <li class="post-comment">
                                                            <div class="comet-avatar">
                                                                <img src="images/resources/nearly1.jpg" alt="">
                                                            </div>
                                                            <div class="post-comt-box">
                                                                <form method="post">
                                                                    <textarea
                                                                        placeholder="Post your comment"></textarea>
                                                                    <div class="add-smiles">
                                                                        <div class="uploadimage">
                                                                            <i class="fa fa-image"></i>
                                                                            <label class="fileContainer">
                                                                                <input type="file">
                                                                            </label>
                                                                        </div>
                                                                        <span class="em em-expressionless"
                                                                            title="add icon"></span>
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
                                                                    <button type="submit"></button>
                                                                </form>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- video post -->
                                </div>
                            </div><!-- centerl meta -->
                            <div class="col-lg-3">
                                <aside class="sidebar static right">
                                    <div class="widget">
                                        <h4 class="widget-title">Your page</h4>
                                        <div class="your-page">
                                            <figure>
                                                <a href="#" title=""><img src="images/resources/friend-avatar9.jpg"
                                                        alt=""></a>
                                            </figure>
                                            <div class="page-meta">
                                                <a href="#" title="" class="underline">My Creative Page</a>
                                                <span><i class="ti-comment"></i><a href="insight.html" title="">Messages
                                                        <em>9</em></a></span>
                                                <span><i class="ti-bell"></i><a href="insight.html"
                                                        title="">Notifications <em>2</em></a></span>
                                            </div>
                                            <ul class="page-publishes">
                                                <li>
                                                    <span><i class="ti-pencil-alt"></i>Publish</span>
                                                </li>
                                                <li>
                                                    <span><i class="ti-camera"></i>Photo</span>
                                                </li>
                                                <li>
                                                    <span><i class="ti-video-camera"></i>Live</span>
                                                </li>
                                                <li>
                                                    <span><i class="fa fa-user-plus"></i>Invite</span>
                                                </li>
                                            </ul>
                                            <div class="page-likes">
                                                <ul class="nav nav-tabs likes-btn">
                                                    <li class="nav-item"><a class="active" href="#link1"
                                                            data-toggle="tab" data-ripple="">likes</a></li>
                                                    <li class="nav-item"><a class="" href="#link2" data-toggle="tab"
                                                            data-ripple="">views</a></li>
                                                </ul>
                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                    <div class="tab-pane active fade show " id="link1">
                                                        <span><i class="ti-heart"></i>884</span>
                                                        <a href="#" title="weekly-likes">35 new likes this week</a>
                                                        <div class="users-thumb-list">
                                                            <a href="#" title="Anderw" data-toggle="tooltip">
                                                                <img src="images/resources/userlist-1.jpg" alt="">
                                                            </a>
                                                            <a href="#" title="frank" data-toggle="tooltip">
                                                                <img src="images/resources/userlist-2.jpg" alt="">
                                                            </a>
                                                            <a href="#" title="Sara" data-toggle="tooltip">
                                                                <img src="images/resources/userlist-3.jpg" alt="">
                                                            </a>
                                                            <a href="#" title="Amy" data-toggle="tooltip">
                                                                <img src="images/resources/userlist-4.jpg" alt="">
                                                            </a>
                                                            <a href="#" title="Ema" data-toggle="tooltip">
                                                                <img src="images/resources/userlist-5.jpg" alt="">
                                                            </a>
                                                            <a href="#" title="Sophie" data-toggle="tooltip">
                                                                <img src="images/resources/userlist-6.jpg" alt="">
                                                            </a>
                                                            <a href="#" title="Maria" data-toggle="tooltip">
                                                                <img src="images/resources/userlist-7.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="link2">
                                                        <span><i class="fa fa-eye"></i>440</span>
                                                        <a href="#" title="weekly-likes">440 new views this week</a>
                                                        <div class="users-thumb-list">
                                                            <a href="#" title="Anderw" data-toggle="tooltip">
                                                                <img src="images/resources/userlist-1.jpg" alt="">
                                                            </a>
                                                            <a href="#" title="frank" data-toggle="tooltip">
                                                                <img src="images/resources/userlist-2.jpg" alt="">
                                                            </a>
                                                            <a href="#" title="Sara" data-toggle="tooltip">
                                                                <img src="images/resources/userlist-3.jpg" alt="">
                                                            </a>
                                                            <a href="#" title="Amy" data-toggle="tooltip">
                                                                <img src="images/resources/userlist-4.jpg" alt="">
                                                            </a>
                                                            <a href="#" title="Ema" data-toggle="tooltip">
                                                                <img src="images/resources/userlist-5.jpg" alt="">
                                                            </a>
                                                            <a href="#" title="Sophie" data-toggle="tooltip">
                                                                <img src="images/resources/userlist-6.jpg" alt="">
                                                            </a>
                                                            <a href="#" title="Maria" data-toggle="tooltip">
                                                                <img src="images/resources/userlist-7.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- page like widget -->
                                    <div class="widget">
                                        <h4 class="widget-title">Explor Events <a title="" href="#" class="see-all">See
                                                All</a></h4>
                                        <div class="rec-events bg-purple">
                                            <i class="ti-gift"></i>
                                            <h6><a href="#" title="">Ocean Motel good night event in columbia</a>
                                            </h6>
                                            <img src="images/clock.png" alt="">
                                        </div>
                                        <div class="rec-events bg-blue">
                                            <i class="ti-microphone"></i>
                                            <h6><a href="#" title="">2016 The 3rd International Conference</a></h6>
                                            <img src="images/clock.png" alt="">
                                        </div>
                                    </div><!-- explore events -->
                                    <div class="widget">
                                        <h4 class="widget-title">Profile intro</h4>
                                        <ul class="short-profile">
                                            <li>
                                                <span>about</span>
                                                <p>Hi, i am jhon kates, i am 32 years old and worked as a web
                                                    developer in microsoft </p>
                                            </li>
                                            <li>
                                                <span>fav tv show</span>
                                                <p>Sacred Games, Spartcus Blood, Games of Theron </p>
                                            </li>
                                            <li>
                                                <span>favourit music</span>
                                                <p>Justin Biber, Shakira, Nati Natasah</p>
                                            </li>
                                        </ul>
                                    </div><!-- profile intro widget -->
                                    <div class="widget stick-widget">
                                        <h4 class="widget-title">Recent Links <a title="" href="#" class="see-all">See
                                                All</a></h4>
                                        <ul class="recent-links">
                                            <li>
                                                <figure><img src="images/resources/recentlink-1.jpg" alt="">
                                                </figure>
                                                <div class="re-links-meta">
                                                    <h6><a href="#" title="">moira's fade reaches much farther than
                                                            you think.</a></h6>
                                                    <span>2 weeks ago </span>
                                                </div>
                                            </li>
                                            <li>
                                                <figure><img src="images/resources/recentlink-2.jpg" alt="">
                                                </figure>
                                                <div class="re-links-meta">
                                                    <h6><a href="#" title="">daniel asks if we want him to do the
                                                            voice of doomfist</a></h6>
                                                    <span>3 months ago </span>
                                                </div>
                                            </li>
                                            <li>
                                                <figure><img src="images/resources/recentlink-3.jpg" alt="">
                                                </figure>
                                                <div class="re-links-meta">
                                                    <h6><a href="#" title="">the pitnik overwatch scandals.</a></h6>
                                                    <span>1 day before</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div><!-- recent links -->
                                </aside>
                            </div><!-- sidebar -->
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

<div class="popup-wraper2">
    <div class="popup post-sharing">
        <span class="popup-closed"><i class="ti-close"></i></span>
        <div class="popup-meta">
            <div class="popup-head">
                <select data-placeholder="Share to friends..." multiple class="chosen-select multi">
                    <option>Share in your feed</option>
                    <option>Share in friend feed</option>
                    <option>Share in a page</option>
                    <option>Share in a group</option>
                    <option>Share in message</option>
                </select>
                <div class="post-status">
                    <span><i class="fa fa-globe"></i></span>
                    <ul>
                        <li><a href="#" title=""><i class="fa fa-globe"></i> Post Globaly</a></li>
                        <li><a href="#" title=""><i class="fa fa-user"></i> Post Private</a></li>
                        <li><a href="#" title=""><i class="fa fa-user-plus"></i> Post Friends</a></li>
                    </ul>
                </div>
            </div>
            <div class="postbox">
                <div class="post-comt-box">
                    <form method="post">
                        <input type="text" placeholder="Search Friends, Pages, Groups, etc....">
                        <textarea placeholder="Say something about this..."></textarea>
                        <div class="add-smiles">
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

                        <button type="submit"></button>
                    </form>
                </div>
                <figure><img src="images/resources/share-post.jpg" alt=""></figure>
                <div class="friend-info">
                    <figure>
                        <img alt="" src="images/resources/admin.jpg">
                    </figure>
                    <div class="friend-name">
                        <ins><a title="" href="time-line.html">Jack Carter</a> share <a title="" href="#">link</a></ins>
                        <span>Yesterday with @Jack Piller and @Emily Stone at the concert of # Rock'n'Rolla in
                            Ontario.</span>
                    </div>
                </div>
                <div class="share-to-other">
                    <span>Share to other socials</span>
                    <ul>
                        <li><a class="facebook-color" href="#" title=""><i class="fa fa-facebook-square"></i></a>
                        </li>
                        <li><a class="twitter-color" href="#" title=""><i class="fa fa-twitter-square"></i></a></li>
                        <li><a class="dribble-color" href="#" title=""><i class="fa fa-dribbble"></i></a></li>
                        <li><a class="instagram-color" href="#" title=""><i class="fa fa-instagram"></i></a></li>
                        <li><a class="pinterest-color" href="#" title=""><i class="fa fa-pinterest-square"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="copy-email">
                    <span>Copy & Email</span>
                    <ul>
                        <li><a href="#" title="Copy Post Link"><i class="fa fa-link"></i></a></li>
                        <li><a href="#" title="Email this Post"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
                <div class="we-video-info">
                    <ul>
                        <li>
                            <span title="" data-toggle="tooltip" class="views" data-original-title="views">
                                <i class="fa fa-eye"></i>
                                <ins>1.2k</ins>
                            </span>
                        </li>
                        <li>
                            <span title="" data-toggle="tooltip" class="views" data-original-title="views">
                                <i class="fa fa-share-alt"></i>
                                <ins>20k</ins>
                            </span>
                        </li>
                    </ul>
                    <button class="main-btn color" data-ripple="">Submit</button>
                    <button class="main-btn cancel" data-ripple="">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div><!-- share popup -->
<div class="popup-wraper-edit">
    <div class="popup post-sharing">
        <span class="popup-closed"><i class="ti-close"></i></span>
        <div class="popup-meta">
            <div class="popup-head">
                <select data-placeholder="Share to friends..." multiple class="chosen-select multi">
                    <option>Share in your feed</option>
                    <option>Share in friend feed</option>
                    <option>Share in a page</option>
                    <option>Share in a group</option>
                    <option>Share in message</option>
                </select>
                <div class="post-status">
                    <span><i class="fa fa-globe"></i></span>
                    <ul>
                        <li><a href="#" title=""><i class="fa fa-globe"></i> Post Globaly</a></li>
                        <li><a href="#" title=""><i class="fa fa-user"></i> Post Private</a></li>
                        <li><a href="#" title=""><i class="fa fa-user-plus"></i> Post Friends</a></li>
                    </ul>
                </div>
            </div>
            <div class="postbox">
                <div class="post-comt-box">
                    <form method="post">
                        <input type="text" placeholder="Search Friends, Pages, Groups, etc....">
                        <textarea placeholder="Say something about this..."></textarea>
                        <div class="add-smiles">
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

                        <button type="submit"></button>
                    </form>
                </div>
                <figure><img src="images/resources/share-post.jpg" alt=""></figure>
                <div class="friend-info">
                    <figure>
                        <img alt="" src="images/resources/admin.jpg">
                    </figure>
                    <div class="friend-name">
                        <ins><a title="" href="time-line.html">Jack Carter</a> share <a title="" href="#">link</a></ins>
                        <span>Yesterday with @Jack Piller and @Emily Stone at the concert of # Rock'n'Rolla in
                            Ontario.</span>
                    </div>
                </div>
                <div class="share-to-other">
                    <span>Share to other socials</span>
                    <ul>
                        <li><a class="facebook-color" href="#" title=""><i class="fa fa-facebook-square"></i></a>
                        </li>
                        <li><a class="twitter-color" href="#" title=""><i class="fa fa-twitter-square"></i></a></li>
                        <li><a class="dribble-color" href="#" title=""><i class="fa fa-dribbble"></i></a></li>
                        <li><a class="instagram-color" href="#" title=""><i class="fa fa-instagram"></i></a></li>
                        <li><a class="pinterest-color" href="#" title=""><i class="fa fa-pinterest-square"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="copy-email">
                    <span>Copy & Email</span>
                    <ul>
                        <li><a href="#" title="Copy Post Link"><i class="fa fa-link"></i></a></li>
                        <li><a href="#" title="Email this Post"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
                <div class="we-video-info">
                    <ul>
                        <li>
                            <span title="" data-toggle="tooltip" class="views" data-original-title="views">
                                <i class="fa fa-eye"></i>
                                <ins>1.2k</ins>
                            </span>
                        </li>
                        <li>
                            <span title="" data-toggle="tooltip" class="views" data-original-title="views">
                                <i class="fa fa-share-alt"></i>
                                <ins>20k</ins>
                            </span>
                        </li>
                    </ul>
                    <button class="main-btn color" data-ripple="">Submit</button>
                    <button class="main-btn cancel" data-ripple="">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div><!-- edit popup -->


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

<script src="../public/js/main.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>
<script src="../public/js/map-init.js"></script>
<script src="../public/js/script.js"></script>
<script src="../public/js/like.js"></script>
<script src="../public/js/editpost.js"></script>

@endsection