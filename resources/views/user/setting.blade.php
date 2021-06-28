@extends('layouts.user')
@section('content')

<div class="theme-layout">

    <div class="responsive-header">
        <div class="mh-head first Sticky">
            <span class="mh-btns-left">
                <a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
            </span>
            <span class="mh-text">
                <a href="newsfeed.html" title=""><img src="{{asset('images')}}/logo2.png" alt=""></a>
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
                                                    <a class="active" href="{{asset('timeline')}}/{{$user->id}}">Timeline</a>
                                                </li>
                                                <li>
                                                    <a class="" href="{{asset('about')}}/{{$user->id}}">About</a>
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
                            <div class="col-lg-12">
                                <div class="central-meta">
                                    <div class="about">
                                        <div class="d-flex flex-row mt-2">
                                            <ul class="nav nav-tabs nav-tabs--vertical nav-tabs--left">
                                                
                                                <li class="nav-item">
                                                    <a href="#edit-profile" class="nav-link" data-toggle="tab"><i
                                                    class="fa fa-gear"></i> Edit Profile</a>
                                                </li>
                                               
                                            </ul>
                                            <div class="tab-content">
                                                
                                                <div class="tab-pane fade" id="edit-profile">
                                                    <div class="set-title">
                                                        <h5>Edit Profile</h5>
                                                        
                                                    </div>
                                                    <div class="setting-meta">
                                                        
                                                        </div>
                                                    </div>
                                                    <div class="stg-form-area">
                                                   
                                                        <form method="post" action="{{asset('editprofile')}}/{{$user->id}}" class="c-form">
                                                        @csrf
                                                        <div class="change-photo">
                                                            <input type="hidden" name="avatar" value="">
                                                            <figure class="show-avatar"><img src="{{asset('images/resources')}}/{{$profile->avatar}}" alt="">
                                                            </figure>
                                                            <div class="edit-img">
                                                                <form class="edit-phto">

                                                                    <label class="fileContainer " >
                                                                        <i class="fa fa-camera-retro"></i>
                                                                        Chage Avatar
                                                                        <input type="file" id="edit-avatar" name="edit-avatar">
                                                                    </label>
                                                                </form>
                                                            </div>
                                                            <div>
                                                                <label>Display Name</label>
                                                                <input disabled type="text" placeholder="{{Auth::user()->name}}">
                                                            </div>

                                                            
                                                            <div>
                                                                <label>Email Address</label>
                                                                
                                                                <input disabled type="text" placeholder="{{Auth::user()->email}}">
                                                            </div>
                                                            <div>
                                                                <label>Gender</label>
                                                                <input type="hidden" name="valuegender" value="0" class="valuegender">
                                                                <div class="form-radio">
                                                                    @if($profile->gender == 0)
                                                                    <div class="radio">
                                                                        <label class="male">
                                                                            <input type="radio" checked="checked"
                                                                                name="gender"><i
                                                                                class="check-box" value="0"></i>Male
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label class="female">
                                                                            <input type="radio" name="gender"><i
                                                                                class="check-box" value="1"></i>Female
                                                                        </label>
                                                                    </div>
                                                                    @endif
                                                                    @if($profile->gender == 1)
                                                                    <div class="radio">
                                                                        <label class="male">
                                                                            <input type="radio" 
                                                                                name="gender"><i
                                                                                class="check-box" value="0"></i>Male
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label class="female">
                                                                            <input type="radio" name="gender" checked="checked"><i
                                                                                class="check-box" value="1"></i>Female
                                                                        </label>
                                                                    </div>
                                                                    @endif
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <label>about your profile</label>
                                                                <textarea name="aboutme" rows="3"
                                                                    placeholder="write someting about yourself">{{$profile->about_me}}</textarea>
                                                            </div>

                                                            <div>
                                                                <label>Address</label>
                                                                <textarea name="address" id="address"  rows="3" placeholder="Ho Chi Minh">{{$profile->address}}</textarea>
                                                                
                                                            </div>
                                                            
                                                            <div>
                                                                
                                                                <button type="submit" data-ripple="">Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div><!-- edit profile -->
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- centerl meta -->
                            <div class="col-lg-3">
                                <aside class="sidebar static">
                                    
                                </aside>
                            </div><!-- sidebar -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>

<script src="{{asset('js/main.min.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/editprofile.js')}}"></script>
@endsection