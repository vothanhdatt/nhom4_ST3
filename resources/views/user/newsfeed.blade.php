@extends('layouts.user')
@section('content')

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
       
    </div><!-- responsive header -->

    <section>
        <div class="gap2 gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row merged20" id="page-contents">
                            <div class="col-lg-3">
                                <aside class="sidebar static left">

                                    @if(Auth::user())
                                    <div class="widget">
                                        <h4 class="widget-title">Shortcuts</h4>
                                        <ul class="naves">
                                            <li>
                                                <i class="ti-clipboard"></i>
                                                <a href="{{ asset('newsfeed') }}" title="">News feed</a>
                                            </li>

                                            <li>
                                                <i class="ti-user"></i>
                                                <a href="{{ asset('friends') }}/{{Auth::user()->id}}" title="">friends</a>
                                            </li>
                                            <li>
                                                <i class="ti-image"></i>
                                                <a href="{{ asset('photos') }}/{{Auth::user()->id}}" title="">images</a>
                                            </li>



                                            <li>
                                                <i class="ti-power-off"></i>
                                                <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"title="">Logout</a>
                                            </li>
                                        </ul>
                                    </div><!-- Shortcuts -->
                                    @endif

                                </aside>
                            </div><!-- sidebar -->
                            <div class="col-lg-6">
                                @guest
                                @else
                                <div class="central-meta postbox">
                                    <form action="{{route('add-post')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <!-- <input type="hidden" name="_token" valuepost="{{csrf_token()}}"> -->
                                        <input type="hidden" name="camera_img" class="camera-img" value="">
                                        
                                        <span class="create-post">Create post</span>
                                        <div class="new-postbox">
                                            
                                            <figure>
                                                <img src="images/resources/<?php echo($profile->avatar) ?>" alt="">
                                            </figure>
                                            <div class="post-status">
                                                <input type="hidden" class="input-permission" name="permission"  value="public">
                                                        <span class="show-permission" name="permission"><i class="fa fa-globe"
                                                                value="public"></i>Post Globaly</span>
                                                        <ul>
                                                            <li class="edit-public"><i class="fa fa-globe"></i> Post
                                                                Globaly</li>
                                                            <li class="edit-private"><i class="fa fa-user"></i> Post
                                                                Private</li>
                                                            <li class="edit-friends"><i class="fa fa-user-plus"></i>
                                                                Post Friends</li>
                                                        </ul>

                                                    </div>
                                            <div class="newpst-input">
                                                
                                                <textarea rows="2" placeholder="Share some what you are thinking?"
                                                    name="text"></textarea>
                                                
                                            </div>
                                            <div class="attachments">
                                                
                                                <ul>
                                                    
                                                    <li>


                                                        <div class="controls">
                                                            <i class="fa fa-image"></i>
                                                            <label class="fileContainer">
                                                                <input type="file" name="fileUpload" id="fileUpload">
                                                            </label>
                                                        </div>
                                                    </li>

                                                    <li class="icon-camera">
                                                        <i class="fa fa-camera" name="fileUpload1" id="fileUpload1"></i>

                                                    </li>
                                                    <li>

                                                    <a class="delete-photo-post" title="Delete Photo"><i
                                                            class="fas fa-trash-alt"></i></a>
                                                    </li>
                                                    
                                                    <div class="app">

                                                        <a href="#" id="start-camera" class="visible">Touch here to
                                                            start the app.</a>
                                                        <video id="camera-stream"></video>
                                                        <img id="snap">

                                                        <p id="error-message"></p>

                                                        <div class="controls-cam">
                                                            <a href="#" id="delete-photo" title="Delete Photo"
                                                                class="disabled"><i class="fas fa-trash-alt"></i></a>
                                                            <a href="#" id="take-photo" title="Take Photo"><i
                                                                    class="fa fa-camera"></i></a>
                                                            <a href="#" id="download-photo" download="selfie.png"
                                                                title="Save Photo" class="disabled"><i
                                                                    class="fa fa-download"></i></a>
                                                        </div>

                                                        <!-- Hidden canvas element. Used for taking snapshot of video. -->
                                                        <canvas></canvas>

                                                    </div>
                                                </ul>
                                                <figure class="img-newpost"></figure>
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
                                    @foreach($post as $valuepost)
                                    @if($valuepost)
                                    <div class="central-meta item">
                                        <div class="user-post">
                                            <div class="friend-info">
                                                <figure>
                                                    <img src="images/resources/<?php echo($valuepost->user->profile->avatar) ?>"
                                                        alt="">
                                                </figure>
                                                <div class="friend-name">
                                                    <div class="more">

                                                        @guest
                                                        @else
                                                        <div class="more-post-optns"><i class="ti-more-alt"></i>
                                                            <ul>
                                                                <?php if($valuepost->id_user == Auth::user()->id){
                                                                ?>
                                                                <li class="edit-post" data-postid="{{$valuepost->id}}">
                                                                    <i class="fa fa-pencil-square-o"></i>Editt
                                                                    Post
                                                                </li>
                                                                <li><a
                                                                        href="./deletepost/<?php echo($valuepost->id) ?>"><i
                                                                            class="fas fa-trash-alt"></i>Delete Post</a>
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
                                                    <ins><a href="{{asset('timeline')}}/{{$valuepost->user->id}}"
                                                            title="">{{$valuepost->user->name}}</a>
                                                        Post
                                                        Album</ins>
                                                    <span>

                                                        <i class="icon-permission">
                                                            @if($valuepost->permission == "public")
                                                            <i class="fa fa-globe"></i>
                                                            @elseif($valuepost->permission == "private")
                                                            <i class="fa fa-user"></i>
                                                            @else
                                                            <i class="fa fa-user-plus"></i>
                                                            @endif
                                                        </i> published:
                                                        {{$valuepost['created_at']}}
                                                        19:PM </span>
                                                </div>
                                                <div class="post-meta ">
                                                    <p class="post-content-{{$valuepost->id}}">
                                                        {{$valuepost['content']}}
                                                    </p>
                                                    <figure>

                                                        <div class="img-bunch-{{$valuepost->id}}">
                                                            @if($valuepost->images)
                                                            <div class="row">
                                                                <figure>
                                                                    <a class="strip src-post-image-{{$valuepost->id}}"
                                                                        href="images/resources/<?php echo($valuepost['images']) ?>"
                                                                        title="" data-strip-group="mygroup"
                                                                        data-strip-group-options="loop: false">
                                                                        <img src="images/resources/<?php echo($valuepost['images']) ?>"
                                                                            alt="">
                                                                        <input type="hidden" name=""
                                                                            class="post-image-{{$valuepost->id}}"
                                                                            value="<?php echo($valuepost['images']) ?>">
                                                                    </a>
                                                                </figure>
                                                            </div>
                                                            @endif
                                                        </div>

                                                        
                                                    </figure>
                                                    <div class="we-video-info">
                                                        <ul>

                                                            <li>
                                                                <div class="likes-{{$valuepost->id}} heart 
                                                                @if(Auth::user())
                                                                    @if($valuepost->like)
                                                                        @foreach($valuepost->like as $valuelike_user)
                                                                            @if($valuelike_user->user->id == Auth::user()->id)
                                                                                happy
                                                                             @endif
                                                                        @endforeach
                                                                    @endif
                                                                @endif
                                                                " title="Like/Dislike"
                                                                    data-postid="{{$valuepost->id}}" <?php 
                                                                    if(Auth::user()){
                                                                        ?>
                                                                            data-login="Yes"
                                                                        <?php
                                                                    }
                                                                    ?> > <a href="">❤</a>
                                                                    <span id="like-numb-{{$valuepost->id}}">

                                                                        <?php
                                                                            $countlike = 0;
                                                                            foreach($valuepost->like as $valuelike){
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
                                                                            foreach($valuepost->comment as $valuecmt){
                                                                                $countcmt++;
                                                                            }
                                                                            echo($countcmt);
                                                                        ?>
                                                                    </ins>
                                                                </span>
                                                            </li>



                                                        </ul>
                                                        <div class="users-thumb-list">
                                                            <?php
                                                                $countlike = 0;
                                                                foreach($valuepost->like as $valuelike){ ?>
                                                            <a data-toggle="tooltip" title="{{$valuelike->user->name}}"
                                                                href="{{asset('timeline')}}/{{$valuelike->user->id}}">
                                                                <img alt=""
                                                                    src="images/resources/{{$valuelike->user->profile->avatar}}">
                                                            </a>
                                                            <?php  }
                                                                
                                                            ?>



                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="coment-area" style="display: block;">
                                                    <ul class="we-comet">


                                                        <li class="list-comment-{{$valuepost->id}}">
                                                            @foreach($valuepost->comment as $valuecmt)
                                                            <div class="comment-area-{{$valuecmt->id}}">
                                                                <div class="comet-avatar">
                                                                    <img src="images/resources/<?php echo($valuecmt->user->profile->avatar) ?>"
                                                                        alt="">
                                                                </div>
                                                                <div class="we-comment">
                                                                    <h5><a href="{{asset('timeline')}}/{{$valuecmt->user->id}}"
                                                                            title="">{{$valuecmt->user->name}}
                                                                        </a></h5>

                                                                    <p class="content-comment-{{$valuecmt->id}}">
                                                                        {{$valuecmt->content}}</p>
                                                                    <div class="inline-itms">
                                                                        <span><?php echo($valuecmt->created_at) ?></span>
                                                                        <a class="we-reply" title="Reply"><i
                                                                                class="fa fa-reply"
                                                                                data-postid="{{$valuepost->id}}"
                                                                                data-name="{{$valuecmt->user->name}}"></i></a>
                                                                       
                                                                    </div>
                                                                    <div class="more">

                                                                        @guest
                                                                        @else
                                                                        <div class="more-post-optns"><i
                                                                                class="ti-more-alt"></i>
                                                                            <ul>
                                                                                <?php if($valuecmt->id_user == Auth::user()->id  ){
                                                                            ?>

                                                                                <li class="edit-comment"
                                                                                    data-cmtid="{{$valuecmt->id}}"><i
                                                                                        class="fa fa-pencil-square-o "></i>Edit
                                                                                    Comment
                                                                                </li>
                                                                                <li class="delete-comment"
                                                                                    data-cmtid="{{$valuecmt->id}}"><i
                                                                                        class="fas fa-trash-alt"></i>Delete
                                                                                    Comment</li>
                                                                                

                                                                                <?php
                                                                        }
                                                                        ?>
                                                                                @if($valuepost->id_user ==
                                                                                Auth::user()->id && $valuecmt->id_user
                                                                                != Auth::user()->id)
                                                                                <li class="delete-comment"
                                                                                    data-cmtid="{{$valuecmt->id}}"><i
                                                                                        class="fas fa-trash-alt"></i>Delete
                                                                                    Comment</li>
                                                                                <li class="bad-report"><i
                                                                                        class="fa fa-flag"></i>Report
                                                                                    Comment</li>

                                                                                @endif
                                                                            </ul>
                                                                        </div>
                                                                        @endguest

                                                                    </div>
                                                                </div>
                                                            </div>

                                                            @endforeach
                                                        </li>



                                                        
                                                        @guest
                                                        @else
                                                        <li class="post-comment">
                                                            <div class="comet-avatar">
                                                                <img src="images/resources/<?php echo($profile->avatar) ?>"
                                                                    alt="">
                                                            </div>
                                                            <div class="post-comt-box">
                                                                <form action="#" method="post"
                                                                    enctype="multipart/form-data">
                                                                    <input type="hidden" name="_token"
                                                                        valuepost="{{csrf_token()}}">

                                                                    <textarea data-postid="{{$valuepost->id}}"
                                                                        placeholder="Post your comment" name="text"
                                                                        id="comment-content-{{$valuepost->id}}"></textarea>
                                                                    


                                                                </form>
                                                            </div>
                                                        </li>
                                                        @endguest

                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    @endif

                                    @endforeach

                                </div>
                            </div><!-- centerl meta -->
                            <div class="col-lg-3">
                                <aside class="sidebar static right">
                                    


                                </aside>
                            </div><!-- sidebar -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>





<div class="popup-wraper-edit">
    <div class="popup post-sharing">
        <span class="popup-closed-edit"><i class="ti-close"></i></span>
        <div class="popup-meta">
            <div class="popup-head">

                <div class="post-status">
                    <span class="show-permission"><i class="fa fa-globe" value="public"></i>Post Globaly</span>
                    <ul>
                        <li class="edit-public"><i class="fa fa-globe"></i> Post Globaly</li>
                        <li class="edit-private"><i class="fa fa-user"></i> Post Private</li>
                        <li class="edit-friends"><i class="fa fa-user-plus"></i> Post Friends</li>
                    </ul>

                </div>
            </div>
            <div class="postbox">
                <div class="post-comt-box">
                    <form method="post">

                        <textarea class="edit-post-content" placeholder="Say something about this...">OKKkkkk</textarea>
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
                    </form>
                </div>
                <figure class="img-post"></figure>
                <div class="attachments">
                    <ul>
                        <li>
                            <!-- <form method="post" enctype="multipart/form-data" action="upload.php">
                                <input type="file" name="images" id="images" multiple />
                            </form> -->
                            <div class="controls">
                                <i class="fa fa-image"></i>
                                <label class="fileContainer">
                                    <input type="file" name="images" id="images">
                                </label>
                                <a  class="delete-photo-edit" title="Delete Photo"><i
                                        class="fas fa-trash-alt"></i></a>
                            </div>
                        </li>
                    </ul>

                </div>

                <div class="we-video-info">
                    <button class="main-btn color btn-submit-edit-post" data-ripple="">Submit</button>
                    <button class="main-btn cancel btn-cancel-edit-post" data-ripple="">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div><!-- edit popup -->






<script src="../public/js/main.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>
<script src="../public/js/map-init.js"></script>
<script src="../public/js/script.js"></script>
<script src="../public/js/like.js"></script>
<script src="../public/js/editpost.js"></script>
<script src="../public/js/comment.js"></script>
<script src="../public/js/camera.js"></script>

@endsection