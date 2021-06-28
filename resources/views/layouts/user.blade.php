<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrfToken" content="{{ csrf_token() }}">
    <title>Group 4</title>
    <link rel="icon" href="http://localhost/project/public/images/fav.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="{{ asset('css/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/weather-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />


</head>

<body>
    <!-- header -->
    <header>
        <!-- topbar -->
        <div class="topbar stick">
            <div class="logo">
                <a title="" href="{{ url('newsfeed') }}"><img src="{{ asset('images') }}/logo.png" alt=""></a>
            </div>
            
            <div class="top-area">
                @guest
                @else
                <div class="top-search">
                    <form method="post" action="{{asset('search')}}" class="">
                    @csrf
                        <input type="text" name="key" placeholder="Search People">
                        <button data-ripple><i class="ti-search"></i></button>
                    </form>
                </div>
                
                @endguest
                
                
                @guest
                <div class="guest-header">
                    <a class="link" href="{{ url('login') }}">Login</a>
                    <a class="link" href="{{ url('register') }}">Register</a>
                </div>

                @else
                <!-- setting area header -->
                <ul class="setting-area">
                    <li><a href="{{ url('newsfeed') }}" title="Home" data-ripple=""><i class="fa fa-home"></i></a></li>
                    <li>
                        <a href="#" title="Friend Requests" data-ripple="">
                            <i class="fa fa-user"></i><em class="bg-red">{{count($frwait)}}</em>
                        </a>

                        <div class="dropdowns">

                            <ul class="drops-menu">
                                @foreach($frwait as $frwait1)
                                @foreach($alluser as $userfr)
                                @if($userfr->id == $frwait1->id_request)
                                <li>
                                    <div>
                                        <figure>
                                            <img src="{{ asset('images/resources') }}/{{$userfr->profile->avatar}}" alt="">
                                        </figure>
                                        <div class="mesg-meta">
                                            <h6><a href="{{asset('timeline')}}/{{$userfr->id}}" title="">{{$userfr->name}}</a></h6>
                                            <span><b>Want to make friends with you</b>  </span>
                                            <!-- <i>{{$frwait1->created_at}}</i> -->
                                        </div>
                                        <div class="add-del-friends">
                                            <a href="{{asset('timeline')}}/{{$userfr->id}}" title="See">See</a>
                                           
                                        </div>
                                    </div>
                                </li>
                                @endif
                                @endforeach
                                @endforeach


                            </ul>

                        </div>
                    </li>


                </ul>
                <!-- user header -->

                <div class="user-img">
                    <h5>{{ Auth::user()->name }}</h5>
                    <img src="{{ asset('images/resources') }}/{{Auth::user()->profile->avatar}}" alt="" height="36px"
                        width="36px">
                    <span class="status f-online"></span>
                    <div class="user-setting">



                        <ul class="log-out">
                            <li><a href="{{ url('timeline') }}/{{Auth::user()->id}}" title=""><i class="ti-user"></i>
                                    view profile</a></li>
                            <li><a href="{{asset('setting')}}/{{Auth::user()->id}}" title=""><i
                                        class="ti-pencil-alt"></i>edit profile</a>
                            </li>
                            @if(Auth::user()->admin == 1)
                            <li><a href="{{asset('admin')}}" title=""><i
                                        class="ti-pencil-alt"></i>Admin</a>
                            </li>


                            @endif
                            
                            </li>
                            <li><a href="{{ route('logout') }}" title="" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="
                                    ti-power-off"></i>log out</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </div>
                </div>
                @endguest




            </div>

        </div>

    </header>

    <!-- container -->
    <div class="content">
        <div class="wavy-wraper">
            <div class="wavy">
                <span style="--i:1;">G</span>
                <span style="--i:2;">R</span>
                <span style="--i:3;">O</span>
                <span style="--i:4;">U</span>
                <span style="--i:5;">P</span>
                <span style="--i:6;"></span>
                <span style="--i:7;">4</span>
                <span style="--i:8;">.</span>
                <span style="--i:9;">.</span>
            </div>
        </div>

        <!-- left sidebar menu -->


        <!-- right sidebar user chat -->


        @yield('content')

        <!-- bottom bar -->
        <div class="bottombar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <span class="copyright">© GROUP 4</span>
                        <i><img src="{{ asset('images') }}/credit-cards.png" alt=""></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>