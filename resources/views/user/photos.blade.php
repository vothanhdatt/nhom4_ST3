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
                                                    <a class="" href="{{asset('timeline')}}/{{$user->id}}">Timeline</a>
                                                </li>
                                                <li>
                                                    <a class="" href="{{asset('about')}}/{{$user->id}}">About</a>
                                                </li>
                                                <li>
                                                    <a class="" href="{{asset('friends')}}/{{$user->id}}">Friends</a>
                                                </li>
                                                <li>
                                                    <a class="active" href="{{asset('photos')}}/{{$user->id}}">Photos</a>
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
                                                    <i class="ti-user"></i>
                                                    <a href="{{asset('friends')}}/{{$user->id}}" title="">friends</a>
                                                </li>
                                                <li>
                                                    <i class="ti-image"></i>
                                                    <a href="{{asset('photos')}}/{{$user->id}}" title="">images</a>
                                                </li>
                                                
                                               
                                                <li>
                                                    <i class="ti-power-off"></i>
                                                    <a href="{{asset('logout')}}" title="">Logout</a>
                                                </li>
                                            </ul>
                                        </div><!-- Shortcuts -->
                                       

                                    </aside>
                                </div><!-- sidebar -->
                                <div class="col-lg-9">
                                    <div class="central-meta">
                                        <div class="title-block">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="align-left">
                                                        <h5>Photos <span>{{count($post)}}</span></h5>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div><!-- title block -->
                                    <div class="central-meta">
                                        <div class="row merged5">
                                            @foreach($post as $post)
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                <div class="item-box">
                                                    <a class="strip" href="{{asset('images/resources')}}/{{$post->images}}" title=""
                                                        data-strip-group="mygroup"
                                                        data-strip-group-options="loop: false">
                                                        <img src="{{asset('images/resources')}}/{{$post->images}}" alt=""></a>
                                                    <div class="over-photo">
                                                        <a title=""><i class="fa fa-heart"></i>{{count($post->like)}} </a>
                                                        <span>{{$post->created_at}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            
                                            
                                        </div>

                                        <div class="lodmore">
                                            
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


 



    <script src="{{asset('js/main.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    @endsection
