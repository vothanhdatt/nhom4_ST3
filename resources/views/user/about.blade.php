
@extends('layouts.user')
@section('content')
    <div class="theme-layout">

        <div class="responsive-header">
            <div class="mh-head first Sticky">
                <span class="mh-btns-left">
                    <a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
                </span>
                <span class="mh-text">
                    <a href="{{ url('newsfeed') }}" title=""><img src="{{asset('images')}}/logo2.png" alt=""></a>
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
                                    <img src="{{asset('images/resources')}}/profile-image.jpg" alt="">
                                    @guest
                                    @else
                                    <ul class="profile-controls">
                                    @if($user->id != Auth::user()->id)
                                    
                                        @if(count($friendRQ) != 0)
                                            <!-- Mình gửi lời mời và chưa chấp nhận -->
                                            @if($friendRQ[0]->status == 0)
                                            <li class="icon-wait"><a data-iduser="{{$user->id}}" data-idfollow="{{Auth::user()->id}}" data-idfriend="{{$friendRQ[0]->id}}" title="Wait For Accept" data-toggle="tooltip">
                                            <i class="fas fa-people-arrows " data-iduser="{{$user->id}}" data-idfollow="{{Auth::user()->id}}" data-idfriend="{{$friendRQ[0]->id}}"></i></a></li>

                                            <li class="icon-following"><a title="Following" data-toggle="tooltip">
                                            <i class="fas fa-star"></i> </a></li>
                                            <!-- Mình gửi lời mời và đã chấp nhận -->
                                            @elseif($friendRQ[0]->status == 1)
                                            <li><a  title="Friend" data-toggle="tooltip">
                                            <i class="fas fa-user-friends btn-addfriend"  data-iduser="{{$user->id}}"></i></a></li>

                                            <li class="icon-unfriend"><a data-idfollow="{{Auth::user()->id}}" data-iduser="{{$user->id}}"  title="Unfiend" data-toggle="tooltip">
                                            <i data-iduser="{{$user->id}}" data-idfollow="{{Auth::user()->id}}" class="fas fa-user-slash"></i> </a></li>
                                            @if(count($follow) != 0)
                                                <li class="icon-following" ><a data-idfollow="{{Auth::user()->id}}" data-iduser="{{$user->id}}" title="Following" data-toggle="tooltip">
                                                <i data-idfollow="{{Auth::user()->id}}" data-iduser="{{$user->id}}" class="fas fa-star"></i> </a></li>
                                                @else
                                                <li class="icon-follow"><a data-idfollow="{{Auth::user()->id}}"  data-iduser="{{$user->id}}" title="Follow" data-toggle="tooltip">
                                                <i data-idfollow="{{Auth::user()->id}}"  data-iduser="{{$user->id}}" class="far fa-star"></i></a></li>
                                                @endif
                                            

                                            <li><a  class="send-mesg"  title="Send Message" data-toggle="tooltip"><i
                                                    class="fa fa-comment" ></i></a></li>
                                            
                                            @endif
                                        @endif
                                        <!-- Chưa có gì hết -->
                                        @if(count($friendRQ) == 0 && count($friendAC) == 0)
                                        
                                            <li class="icon-addfriend" ><a data-idfollow="{{Auth::user()->id}}" data-iduser="{{$user->id}}"  title="Add friend" data-toggle="tooltip"><i
                                                    class="fa fa-user-plus " data-idfollow="{{Auth::user()->id}}" data-iduser="{{$user->id}}"></i></a></li>
                                            @if(count($follow) != 0)
                                            <li class="icon-following" ><a data-idfollow="{{Auth::user()->id}}" data-iduser="{{$user->id}}" title="Following" data-toggle="tooltip">
                                            <i data-idfollow="{{Auth::user()->id}}" data-iduser="{{$user->id}}" class="fas fa-star"></i> </a></li>
                                            @else
                                            <li class="icon-follow"><a data-idfollow="{{Auth::user()->id}}"  data-iduser="{{$user->id}}" title="Follow" data-toggle="tooltip">
                                            <i data-idfollow="{{Auth::user()->id}}"  data-iduser="{{$user->id}}" class="far fa-star"></i> </a></li>
                                            @endif
                                            
                                        @endif

                                        @if(count($friendAC) != 0)
                                            <!-- Người ta gửi lời mời cho mình và chưa chấp nhận -->
                                            @if($friendAC[0]->status == 0)
                                            <li class="icon-accept"><a data-idrequest="{{$user->id}}"  data-idaccept="{{Auth::user()->id}}"  title="Accept" data-toggle="tooltip">
                                            <i data-idrequest="{{$user->id}}"  data-idaccept="{{Auth::user()->id}}" class="fas fa-check "></i></a></li>
                                            
                                            <li class="icon-remove"><a data-idrequest="{{$user->id}}"  data-idaccept="{{Auth::user()->id}}"  title="Remove" data-toggle="tooltip">
                                            <i data-idrequest="{{$user->id}}"  data-idaccept="{{Auth::user()->id}}" class="far fa-window-close "></i></a></li>
                                            
                                            @endif
                                            <!-- Người ta gửi lời mời cho mình và đã chấp nhận -->
                                            @if($friendAC[0]->status == 1)
                                            <li><a  title="Friend" data-toggle="tooltip">
                                            <i class="fas fa-user-friends btn-addfriend" data-iduser="{{$user->id}}"></i></a></li>

                                            <li class="icon-unfriend"><a data-iduser="{{$user->id}}" data-idfollow="{{Auth::user()->id}}" title="Unfiend" data-toggle="tooltip">
                                            <i data-iduser="{{$user->id}}" data-idfollow="{{Auth::user()->id}}" class="fas fa-user-slash"></i> </a></li>
                                                @if(count($follow) != 0)
                                                <li class="icon-following" ><a data-idfollow="{{Auth::user()->id}}" data-iduser="{{$user->id}}" title="Following" data-toggle="tooltip">
                                                <i data-idfollow="{{Auth::user()->id}}" data-iduser="{{$user->id}}" class="fas fa-star"></i> </a></li>
                                                @else
                                                <li class="icon-follow"><a data-idfollow="{{Auth::user()->id}}"  data-iduser="{{$user->id}}" title="Follow" data-toggle="tooltip">
                                                <i data-idfollow="{{Auth::user()->id}}"  data-iduser="{{$user->id}}" class="far fa-star"></i></a></li>
                                                @endif
                                            

                                            <li><a class="send-mesg"  title="Send Message" data-toggle="tooltip"><i
                                                    class="fa fa-comment"></i></a></li>

                                                    
                                            @endif
                                        @endif
                                       
                                    @else
                                       
                                    </ul>
                                    @endif
                                    @endguest
                                    
                                    
                                    
                                </figure>
                                
                                <div class="profile-section">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-3">
                                            <div class="profile-author">
                                                <div class="profile-author-thumb">
                                                    <img alt="author"
                                                        src="{{asset('images/resources')}}/{{$profile->avatar}}">
                                                    <div class="edit-dp">
                                                        <label class="fileContainer">
                                                            <i class="fa fa-camera"></i>
                                                            <input type="file">
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="author-content">
                                                    <a class="h4 author-name"
                                                        href="about.html">{{$user->name}}</a>
                                                    <div class="country">{{$user->profile->address}}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-9">
                                            <ul class="profile-menu">
                                                <li>
                                                    <a class="" href="{{asset('timeline')}}/{{$user->id}}">Timeline</a>
                                                </li>
                                                <li>
                                                    <a class="active" href="{{asset('about')}}/{{$user->id}}">About</a>
                                                </li>
                                                <li>
                                                    <a class="" href="{{asset('friends')}}/{{$user->id}}">Friends</a>
                                                </li>
                                                <li>
                                                    <a class="" href="{{asset('photos')}}/{{$user->id}}">Photos</a>
                                                </li>
                                                
                                                
                                            </ul>
                                            <ol class="folw-detail">
                                                <li><span>Posts</span><ins>{{count($user->post)}}</ins></li>
                                                <li><span>Followers</span><ins>{{count($followers)}}</ins></li>
                                                <li><span>Following</span><ins>{{count($following)}}</ins></li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- user profile banner  -->
                                <!-- <div class="col-lg-4 col-md-4">
                                    
                                </div> -->
                                <div class="col-lg-12 col-md-12">
                                    <aside class="sidebar">
                                        <div class="central-meta stick-widget">
                                            <span class="create-post">Personal Info</span>
                                            <div class="personal-head">
                                                <span class="f-title"><i class="fa fa-user"></i> About Me:</span>
                                                <p>
                                                    {{$profile->about_me}}
                                                </p>
                                                <span class="f-title"><i class="fa fa-birthday-cake"></i>
                                                    Birthday:</span>
                                                <p>
                                                {{$profile->birth_date}}
                                                </p>
                                                <span class="f-title"><i class="fa fa-phone"></i> Phone Number:</span>
                                                <p>
                                                {{$profile->phone}}
                                                </p>
                                                
                                                <span class="f-title"><i class="fa fa-male"></i> Gender:</span>
                                                <p>
                                                @if($profile->gender == 0)
                                                Male
                                                @else
                                                Female
                                                @endif
                                                </p>
                                                <span class="f-title"><i class="fa fa-globe"></i> Country:</span>
                                                <p>
                                                {{$profile->address}}
                                                </p>
                                                
                                                


                                            </div>
                                        </div>
                                    </aside>
                                    
                                    <!-- <div class="central-meta">
                                        <span class="create-post">Friend's (320) <a href="timeline-friends2.html"
                                                title="">See All</a></span>
                                        <ul class="frndz-list">
                                            <li>
                                                <img src="{{asset('images/resources')}}/recent1.jpg" alt="">
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
                                                <img src="{{asset('images/resources')}}/recent2.jpg" alt="">
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
                                                <img src="{{asset('images/resources')}}/recent3.jpg" alt="">
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
                                                <img src="{{asset('images/resources')}}/recent4.jpg" alt="">
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
                                                <img src="{{asset('images/resources')}}/recent5.jpg" alt="">
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
                                                <img src="{{asset('images/resources')}}/recent6.jpg" alt="">
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
                                    </div>friends list -->
                                    <!-- <div class="central-meta">
                                        <span class="create-post">Photos (580) <a href="{{ url('photos') }}"
                                                title="">See All</a></span>
                                        <ul class="photos-list">
                                            <li>
                                                <div class="item-box">
                                                    <a class="strip" href="{{asset('images/resources')}}/photo-22.jpg" title=""
                                                        data-strip-group="mygroup"
                                                        data-strip-group-options="loop: false">
                                                        <img src="{{asset('images/resources')}}/photo2.jpg" alt=""></a>
                                                    <div class="over-photo">
                                                        <div class="likes heart" title="Like/Dislike">❤ <span>15</span>
                                                        </div>
                                                        <span>20 hours ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item-box">
                                                    <a class="strip" href="{{asset('images/resources')}}/photo-33.jpg" title=""
                                                        data-strip-group="mygroup"
                                                        data-strip-group-options="loop: false">
                                                        <img src="{{asset('images/resources')}}/photo3.jpg" alt=""></a>
                                                    <div class="over-photo">
                                                        <div class="likes heart" title="Like/Dislike">❤ <span>20</span>
                                                        </div>
                                                        <span>20 days ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item-box">
                                                    <a class="strip" href="{{asset('images/resources')}}/photo-44.jpg" title=""
                                                        data-strip-group="mygroup"
                                                        data-strip-group-options="loop: false">
                                                        <img src="{{asset('images/resources')}}/photo4.jpg" alt=""></a>
                                                    <div class="over-photo">
                                                        <div class="likes heart" title="Like/Dislike">❤ <span>155</span>
                                                        </div>
                                                        <span>Yesterday</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item-box">
                                                    <a class="strip" href="{{asset('images/resources')}}/photo-55.jpg" title=""
                                                        data-strip-group="mygroup"
                                                        data-strip-group-options="loop: false">
                                                        <img src="{{asset('images/resources')}}/photo5.jpg" alt=""></a>
                                                    <div class="over-photo">
                                                        <div class="likes heart" title="Like/Dislike">❤ <span>201</span>
                                                        </div>
                                                        <span>3 weeks ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item-box">
                                                    <a class="strip" href="{{asset('images/resources')}}/photo-66.jpg" title=""
                                                        data-strip-group="mygroup"
                                                        data-strip-group-options="loop: false">
                                                        <img src="{{asset('images/resources')}}/photo6.jpg" alt=""></a>
                                                    <div class="over-photo">
                                                        <div class="likes heart" title="Like/Dislike">❤ <span>81</span>
                                                        </div>
                                                        <span>2 months ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item-box">
                                                    <a class="strip" href="{{asset('images/resources')}}/photo-77.jpg" title=""
                                                        data-strip-group="mygroup"
                                                        data-strip-group-options="loop: false">
                                                        <img src="{{asset('images/resources')}}/photo7.jpg" alt=""></a>
                                                    <div class="over-photo">
                                                        <div class="likes heart" title="Like/Dislike">❤ <span>98</span>
                                                        </div>
                                                        <span>1 day</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item-box">
                                                    <a class="strip" href="{{asset('images/resources')}}/photo-88.jpg" title=""
                                                        data-strip-group="mygroup"
                                                        data-strip-group-options="loop: false">
                                                        <img src="{{asset('images/resources')}}/photo8.jpg" alt=""></a>
                                                    <div class="over-photo">
                                                        <div class="likes heart" title="Like/Dislike">❤ <span>87</span>
                                                        </div>
                                                        <span>23 hours ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- content -->




    </div>
    

    <!-- <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
    <script src="{{asset('js/main.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    @endsection
