@extends('layouts.user')
@section('content')



@if(Auth::user())
@if(Auth::user()->admin ==1)
<section>
    <div class="page-header">
        <div class="header-inner">
            <h2>Admin</h2>
            <p>
                Welcome to Group4 Social Network.!!!
            </p>
        </div>
        <figure><img src="images/resources/baner-forum.png" alt=""></figure>
    </div>
</section><!-- sub header -->
<section>
    <div class="gap gray-bg">
        <div class="container">
            <div class="row merged20">
                <div class="col-lg-9">

                    <div class="central-meta">
                        <div class="forum-open">
                            <h5 class=""><i class="fa fa-star"></i> All post</h5>
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th>Author</th>
                                        <th>Post Date</th>
                                        <th>Content</th>
                                        <th>Images</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($post)
                                    @foreach($post as $value)
                                    <tr>
                                        <td class="topic-data">
                                            <img src="{{asset('images/resources')}}/{{$value->user->profile->avatar}}"
                                                alt="">
                                            <span>{{$value->user->name}}</span>
                                            <em>{{$value->user->profile->address}}</em>
                                        </td>
                                        <td class="date-n-reply">
                                            <span>{{$value->created_at}}</span>

                                        </td>
                                        <td class="topic-detail">
                                            <p>{{$value->content}}</p>
                                        </td>
                                        <td class="topic-detail">
                                            @if($value->images == "")
                                            No images
                                            @else
                                            <img src="{{asset('images/resources')}}/{{$value->images}}" alt="">
                                            @endif

                                        </td>
                                        <td>
                                            <a href="{{asset('deletepost')}}/{{$value->id}}"><i
                                                    class="fas fa-trash-alt"></i> Remove</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <!-- <aside class="sidebar static">
							
							<div class="widget">
								<h4 class="widget-title">Forum Statistics</h4>
								<ul class="forum-static">
									<li>
										<a href="#" title="">Forums</a>
										<span>13</span>
									</li>
									<li>
										<a href="#" title="">Registered Users</a>
										<span>50</span>
									</li>
									<li>
										<a href="#" title="">Topics</a>
										<span>14</span>
									</li>
									<li>
										<a href="#" title="">Replies</a>
										<span>32</span>
									</li>
									<li>
										<a href="#" title="">Topic Tags</a>
										<span>50</span>
									</li>
								</ul>
							</div>
							
						</aside>	 -->
                    <div class="central-meta item">
                        <span class="create-post">People<a title=""></a></span>
                        @if($alluser)
                        @foreach($alluser as $value)
                        @if($value != Auth::user())
                        <div class="pit-friends">
                            <figure><a href="#" title=""><img src="{{asset('images/resources')}}/{{$value->profile->avatar}}" alt=""></a></figure>
                            <div class="pit-frnz-meta">
                                <a href="{{asset('timeline')}}/{{$value->id}}" title="">{{$value->name}}</a>
                                <i>{{$value->profile->address}}</i>
                                <ul class="add-remove-frnd">
                                    <li class="add-tofrndlist">
                                        <a title="Remove user" href="{{asset('deleteuser')}}/{{$value->id}}"><i class="fas fa-trash-alt"></i></a>
                                    </li>
									
                                    <li class="remove-frnd">
                                        <a title="See" href="{{asset('timeline')}}/{{$value->id}}"><i class="fas fa-eye"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @endif

                        @endforeach
                        @endif


                    </div><!-- searched peoples -->
                </div>
            </div>
        </div>
    </div>
</section>
@else
<section>
    <div class="page-header">
        <div class="header-inner">
            <h2>STOP</h2>
            <p>
			You do not have access!!!!
            </p>
        </div>
        <figure><img src="images/resources/baner-forum.png" alt=""></figure>
    </div>
</section><!-- sub header -->
@endif
@endif


<!-- <section>
		<div class="getquot-baner purple high-opacity">
			<div class="bg-image" style="background-image:url(images/resources/animated-bg2.png)"></div>
			<span>Want to join our awesome forum and start interacting with others?</span>
			<a title="" href="#">Sign up</a>
		</div>
	</section> -->



</div>
<script src="{{asset('js/main.min.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>



@endsection