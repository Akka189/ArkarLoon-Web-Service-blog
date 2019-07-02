@extends('frontend.layout.app1')
@section('title','blog post')
@section('content')
<!-- header wrapper -->
<div class="header-wrapper sm-padding1 bg-grey">
    <div class="container">
        <h2>All posts</h2>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/#blog') }}">Blog</a></li>
            <li class="breadcrumb-item active">All Blog Posts</li>
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
                <div class="col-md-9">
                    @foreach($posts as $post)
                    <div class="col-md-4">
                        <div class="blog">
                            <div class="blog-img">
                                <img class="img-responsive" src="{{ Storage::disk('public')->url('post/'.$post->image) }}" alt="{{ $post->title }}">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user"></i><a href="{{ route('author.profile',$post->user->username) }}">{{ $post->user->name }}</a></li>
                                    <li><i class="fa fa-clock-o"></i>{{ $post->created_at->diffForHumans()}}</li>
                                    <li><i class="fa fa-eye">{{ $post->view_count }}</i></li>
                                </ul>
                                <h3><a style="color: #0D0A0A;" href="{{ route('posts',$post->slug) }}">{{ $post->title }}</a></h3>
                                <p>{!! str_limit($post->body,150) !!}</p>
                                <a href="{{ route('posts',$post->slug) }}">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                    <div class="row">
                        <div class="container">
                            <div class="col-md-8 col-md-offset-4">{{ $posts->links() }}</div>
                        </div>
                    </div>
                </div>
                <!-- Aside -->
                <aside id="aside" class="col-md-3">
                    <!-- Search -->
                    <div class="widget">
                        <h3 class="title">Search a post</h3>
                        <div class="widget-search">
                            <form method="GET" action="{{ route('search') }}">
                                <input name="query" class="search-input" type="text" placeholder="search">
                                <button class="search-btn" type="button"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- /Search -->
                    <!-- Category -->
                    <div class="widget">
                        <h3 class="title">Categories</h3>
                        <div class="widget-category">
                            @foreach($categories as $category)
                                <a href="{{ route('category.posts',$category->slug) }}">{{ $category->name }}<span>({{ $category->posts->count() }} )</span></a>
                            @endforeach
                        </div>
                    </div>
                    <!-- /Category -->

                    <!-- Tags -->
                    <div class="widget">
                        <h3 class="title">Tags</h3>
                        <div class="widget-tags">
                            @foreach($tags as $tag)
                                <a href="{{ route('tag.posts',$tag->slug) }}"><i class="fa fa-tag"></i>{{ $tag->name }}</a>
                            @endforeach
                        </div>
                    </div>
                    <!-- /Tags -->

                    <!-- Subscriber -->
                    <div class="widget">
                        <h3 class="title">Subscribe</h3>
                        <div class="">
                            <form method="POST" action="{{ route('subscriber.store') }}">
                                @csrf

                                <input class="email-input" name="email" type="email" placeholder="Enter your email">
                                <button class="main-btn" type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                    @if(session()->has('jsAlert'))
                        <script>
                            alert({{ session()->get('jsAlert') }});
                        </script>
                    @endif
                    <!-- /Subscriber -->

                </aside>
                <!-- /Aside -->
                <!-- /blog -->


            </div>
            <!-- /Row -->
        </div>
        <!-- /Container -->

    </div>
</div>
<!-- /Blog -->
@endsection()
