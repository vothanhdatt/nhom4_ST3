@extends('layouts.user')
@section('content')

<section>
    <div class="gap2 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row merged20" id="page-contents">
                        <div class="col-lg-12">
                            <div class="search-meta">
                                <span>Your search result <i></i> </span>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <aside class="sidebar static left">



                            </aside>
                        </div><!-- sidebar -->
                        <div class="col-lg-8">
                            <div class="search-tab">


                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active fade show " id="All">
									@if($searchuser)
                                        <div class="central-meta item">
                                            <span class="create-post">People<a title=""></a></span>
                                            @foreach($searchuser as $value)

                                            <div class="pit-friends">
                                                <figure><a href="{{asset('timeline')}}/{{$value->id}}" title=""><img
                                                            src="{{asset('images/resources')}}/{{$value->profile->avatar}}"
                                                            alt=""></a></figure>
                                                <div class="pit-frnz-meta">
                                                    <a href="{{asset('timeline')}}/{{$value->id}}"
                                                        title="">{{$value->name}}</a>
                                                    <i>Tornoto</i>
                                                    <ul class="add-remove-frnd">
                                                        <li class="add-tofrndlist">
                                                            <a title="See"
                                                                href="{{asset('timeline')}}/{{$value->id}}"><i
                                                                    class="fas fa-eye"></i></a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>


                                            @endforeach
                                        </div><!-- searched peoples -->
                                        @endif

                                        @if($searchpost)
										<div class="central-meta item">
                                            <span class="create-post">Pictures<a title="" ></a></span>
                                        @foreach($searchpost as $value)

                                        <div class="user-post">
                                            <div class="friend-info">
                                                <figure>
                                                    <img src="{{asset('images/resources')}}/{{$value->user->profile->avatar}}" alt="">
                                                </figure>
                                                <div class="friend-name">
                                                    
                                                    <ins><a href="{{asset('timeline')}}/{{$value->user->id}}" title="">{{$value->user->name}}</a> Post</ins>
                                                    <span> published: {{$value->created_at}}
                                                    </span>

                                                </div>
                                                <div class="post-meta searched">
                                                    <div class="linked-image align-right">
                                                        <a title=""><img src="{{asset('images/resources')}}/{{$value->images}}"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="detail">
                                                        <p>{{$value->content}} </p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
										</div><!-- post with image -->
                                        @endif
                                        

                                        
                                       



                                    </div>



                                </div>

                            </div>
                        </div>
                        <div class="col-lg-2">

                        </div>
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