@extends('frontend.layout.app1')
@section('title','Tag')
@section('content')
<!-- header wrapper -->
<div class="header-wrapper sm-padding1 bg-grey">
    <div class="container">
        <h2>{{ $tag->name }} Posts</h2>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/#blog') }}">Blog</a></li>
            <li class="breadcrumb-item active">{{ $tag->name }}</li>
        </ul>
    </div>
</div>
<!-- /header wrapper -->
</header>
<!-- /Header -->
<!-- Blog -->
<div id="blog" class="section md-padding1">
    <div id="blog" class="section sm-padding bg-grey">

        <!-- Container -->
        <div class="container-fluid">

            <!-- Row -->
            <div class="row">

                <!-- blog -->
                <main class="col-md-12">
                    @if($tag->posts->count() > 0)
                        @foreach($tag->posts as $post)
                            @if($tag->posts->count() > 3)
                                <div class="col"><br>
                                    <div class="col-md-4">
                                        <div class="blog">
                                            <div class="blog-img">
                                                <img class="img-responsive" src="{{ Storage::disk('public')->url('post/'.$post->image) }}" alt="{{ $post->title }}">
                                            </div>
                                            <div class="blog-content">
                                                <ul class="blog-meta">
                                                    <li><i class="fa fa-user"></i>{{ $post->user->name }}</li>
                                                    <li><i class="fa fa-clock-o"></i>{{ $post->created_at->diffForHumans()}}</li>
                                                </ul>
                                                <h3><a style="color: #0D0A0A;" href="{{ route('posts',$post->slug) }}">{{ $post->title }}</a></h3>
                                                <p>{!! str_limit($post->body,150) !!}</p>
                                                <a href="{{ route('posts',$post->slug) }}">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="col-md-4">
                                    <div class="blog">
                                        <div class="blog-img">
                                            <img class="img-responsive" src="{{ Storage::disk('public')->url('post/'.$post->image) }}" alt="{{ $post->title }}">
                                        </div>
                                        <div class="blog-content">
                                            <ul class="blog-meta">
                                                <li><i class="fa fa-user"></i>{{ $post->user->name }}</li>
                                                <li><i class="fa fa-clock-o"></i>{{ $post->created_at->diffForHumans()}}</li>
                                            </ul>
                                            <h3><a style="color: #0D0A0A;" href="{{ route('posts',$post->slug) }}">{{ $post->title }}</a></h3>
                                            <p>{!! str_limit($post->body,150) !!}</p>
                                            <a href="{{ route('posts',$post->slug) }}">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @else
                        <div class="col-md-4">
                            <div class="blog">
                                <h3>
                                    <strong>Sorry No post found :(</strong>
                                </h3>
                            </div>
                        </div>
                    @endif
                </main>
                <!-- /blog -->


            </div>
            <!-- /Row -->
        </div>
        <!-- /Container -->

    </div>
</div>
<!-- /Blog -->
@endsection()
