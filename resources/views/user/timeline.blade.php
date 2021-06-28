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
                                        <li class="icon-wait"><a data-iduser="{{$user->id}}"
                                                data-idfollow="{{Auth::user()->id}}"
                                                data-idfriend="{{$friendRQ[0]->id}}" title="Wait For Accept"
                                                data-toggle="tooltip">
                                                <i class="fas fa-people-arrows " data-iduser="{{$user->id}}"
                                                    data-idfollow="{{Auth::user()->id}}"
                                                    data-idfriend="{{$friendRQ[0]->id}}"></i></a></li>

                                        <li class="icon-following"><a title="Following" data-toggle="tooltip">
                                                <i class="fas fa-star"></i> </a></li>
                                        <!-- Mình gửi lời mời và đã chấp nhận -->
                                        @elseif($friendRQ[0]->status == 1)
                                        <li><a title="Friend" data-toggle="tooltip">
                                                <i class="fas fa-user-friends btn-addfriend"
                                                    data-iduser="{{$user->id}}"></i></a></li>

                                        <li class="icon-unfriend"><a data-idfollow="{{Auth::user()->id}}"
                                                data-iduser="{{$user->id}}" title="Unfiend" data-toggle="tooltip">
                                                <i data-iduser="{{$user->id}}" data-idfollow="{{Auth::user()->id}}"
                                                    class="fas fa-user-slash"></i> </a></li>
                                        @if(count($follow) != 0)
                                        <li class="icon-following"><a data-idfollow="{{Auth::user()->id}}"
                                                data-iduser="{{$user->id}}" title="Following" data-toggle="tooltip">
                                                <i data-idfollow="{{Auth::user()->id}}" data-iduser="{{$user->id}}"
                                                    class="fas fa-star"></i> </a></li>
                                        @else
                                        <li class="icon-follow"><a data-idfollow="{{Auth::user()->id}}"
                                                data-iduser="{{$user->id}}" title="Follow" data-toggle="tooltip">
                                                <i data-idfollow="{{Auth::user()->id}}" data-iduser="{{$user->id}}"
                                                    class="far fa-star"></i></a></li>
                                        @endif




                                        @endif
                                        @endif
                                        <!-- Chưa có gì hết -->
                                        @if(count($friendRQ) == 0 && count($friendAC) == 0)

                                        <li class="icon-addfriend"><a data-idfollow="{{Auth::user()->id}}"
                                                data-iduser="{{$user->id}}" title="Add friend" data-toggle="tooltip"><i
                                                    class="fa fa-user-plus " data-idfollow="{{Auth::user()->id}}"
                                                    data-iduser="{{$user->id}}"></i></a></li>
                                        @if(count($follow) != 0)
                                        <li class="icon-following"><a data-idfollow="{{Auth::user()->id}}"
                                                data-iduser="{{$user->id}}" title="Following" data-toggle="tooltip">
                                                <i data-idfollow="{{Auth::user()->id}}" data-iduser="{{$user->id}}"
                                                    class="fas fa-star"></i> </a></li>
                                        @else
                                        <li class="icon-follow"><a data-idfollow="{{Auth::user()->id}}"
                                                data-iduser="{{$user->id}}" title="Follow" data-toggle="tooltip">
                                                <i data-idfollow="{{Auth::user()->id}}" data-iduser="{{$user->id}}"
                                                    class="far fa-star"></i> </a></li>
                                        @endif

                                        @endif

                                        @if(count($friendAC) != 0)
                                        <!-- Người ta gửi lời mời cho mình và chưa chấp nhận -->
                                        @if($friendAC[0]->status == 0)
                                        <li class="icon-accept"><a data-idrequest="{{$user->id}}"
                                                data-idaccept="{{Auth::user()->id}}" title="Accept"
                                                data-toggle="tooltip">
                                                <i data-idrequest="{{$user->id}}" data-idaccept="{{Auth::user()->id}}"
                                                    class="fas fa-check "></i></a></li>

                                        <li class="icon-remove"><a data-idrequest="{{$user->id}}"
                                                data-idaccept="{{Auth::user()->id}}" title="Remove"
                                                data-toggle="tooltip">
                                                <i data-idrequest="{{$user->id}}" data-idaccept="{{Auth::user()->id}}"
                                                    class="far fa-window-close "></i></a></li>

                                        @endif
                                        <!-- Người ta gửi lời mời cho mình và đã chấp nhận -->
                                        @if($friendAC[0]->status == 1)
                                        <li><a title="Friend" data-toggle="tooltip">
                                                <i class="fas fa-user-friends btn-addfriend"
                                                    data-iduser="{{$user->id}}"></i></a></li>

                                        <li class="icon-unfriend"><a data-iduser="{{$user->id}}"
                                                data-idfollow="{{Auth::user()->id}}" title="Unfiend"
                                                data-toggle="tooltip">
                                                <i data-iduser="{{$user->id}}" data-idfollow="{{Auth::user()->id}}"
                                                    class="fas fa-user-slash"></i> </a></li>
                                        @if(count($follow) != 0)
                                        <li class="icon-following"><a data-idfollow="{{Auth::user()->id}}"
                                                data-iduser="{{$user->id}}" title="Following" data-toggle="tooltip">
                                                <i data-idfollow="{{Auth::user()->id}}" data-iduser="{{$user->id}}"
                                                    class="fas fa-star"></i> </a></li>
                                        @else
                                        <li class="icon-follow"><a data-idfollow="{{Auth::user()->id}}"
                                                data-iduser="{{$user->id}}" title="Follow" data-toggle="tooltip">
                                                <i data-idfollow="{{Auth::user()->id}}" data-iduser="{{$user->id}}"
                                                    class="far fa-star"></i></a></li>
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
                                                        src="{{asset('images/resources')}}/{{$user->profile->avatar}}">
                                                    
                                                </div>

                                                <div class="author-content">
                                                    <a class="h4 author-name" href="about.html">{{$user->name}}</a>
                                                    <div class="country">{{$user->profile->address}}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-9">
                                            <ul class="profile-menu">
                                                <li>
                                                    <a class="active"
                                                        href="{{asset('timeline')}}/{{$user->id}}">Timeline</a>
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
                            <div class="col-lg-3">
                                <aside class="sidebar static left">






                                </aside>
                            </div><!-- sidebar -->
                            <div class="col-lg-6">
                                @guest
                                @else
                                @if($user->id == Auth::user()->id)
                                <div class="central-meta postbox">
                                    <form action="{{route('add-post')}}" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <!-- <input type="hidden" name="_token" valuepost="{{csrf_token()}}"> -->
                                        <input type="hidden" name="camera_img" class="camera-img" value="">
                                        <span class="create-post">Create post</span>

                                        <div class="new-postbox">

                                            <figure>
                                                <img src="{{asset('images/resources')}}/<?php echo($profile->avatar) ?>"
                                                    alt="">
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


                                                        <div class="controls">
                                                            <i class="fa fa-image"></i>
                                                            <label class="fileContainer">
                                                                <input type="file" name="fileUpload" id="fileUpload">
                                                            </label>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <i class="icon-camera fa fa-camera" name="fileUpload1"
                                                            id="fileUpload1"></i>

                                                    </li>
                                                    <li class="show-permission" name="permission">
                                                        <i class="fa fa-globe" value="public"></i>

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
                                                <input type="hidden" class="input-permission" name="permission"
                                                    value="public">
                                                
                                                <ul>
                                                    <li class="edit-public"><i class="fa fa-globe"></i> Post
                                                        Globaly</li>
                                                    <li class="edit-private"><i class="fa fa-user"></i> Post
                                                        Private</li>
                                                    <li class="edit-friends"><i class="fa fa-user-plus"></i>
                                                        Post Friends</li>
                                                </ul>

                                            </div>
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
                                @endif
                                @endguest
                                <div class="loadMore">
                                
                                @if($post)
                                
                                @foreach($post as $valuepost)
                                <div class="central-meta item">
                                    <div class="user-post">
                                        <div class="friend-info">
                                            <figure>
                                                <img src="{{asset('images/resources')}}/<?php echo($valuepost->user->profile->avatar) ?>"
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
                                                                    href="{{asset('deletepost')}}/<?php echo($valuepost->id) ?>"><i
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
                                                <ins><a href="{{asset('timeline')}}/{{$valuepost->user->id}}" title="">{{$valuepost->user->name}}</a>
                                                    Post
                                                </ins>
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
                                                                    href="{{asset('images/resources')}}/<?php echo($valuepost['images']) ?>"
                                                                    title="" data-strip-group="mygroup"
                                                                    data-strip-group-options="loop: false">
                                                                    <img src="{{asset('images/resources')}}/<?php echo($valuepost['images']) ?>"
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
                                                                    ?>> <a href="">❤</a>
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
                                                                src="{{asset('images/resources')}}/{{$valuelike->user->profile->avatar}}">
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
                                                                <img src="{{asset('images/resources')}}/<?php echo($valuecmt->user->profile->avatar) ?>"
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
                                                                            <li class="bad-report"><i
                                                                                    class="fa fa-flag"></i>Report
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
                                                            <img src="{{asset('images/resources')}}/<?php echo($profile->avatar) ?>"
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
                                @endforeach
                                @endif

                            </div>
                            </div><!-- add post new box -->
                            
                          



                            
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
</section><!-- content -->


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
                                <a href="#" class="delete-photo-edit" title="Delete Photo"><i
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





<script src="{{asset('js/main.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>
<script src="{{asset('js/map-init.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/like.js')}}"></script>
<script src="{{asset('js/editpost.js')}}"></script>
<script src="{{asset('js/comment.js')}}"></script>
<script src="{{asset('js/addfriends.js')}}"></script>
<script src="{{asset('js/camera.js')}}"></script>



@endsection