@extends('frontend.layout.app1')
@section('title')
{{ $post->title }}
@endsection
@section('content')
<!-- header wrapper -->
<div class="header-wrapper sm-padding1 bg-grey">
    <div class="container">
        <h2>Blog Post</h2>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/#blog') }}">Blog</a></li>
            <li class="breadcrumb-item"><a href="{{ asset('/allpost') }}">All posts</a></li>
            <li class="breadcrumb-item active">{{ $post->title }}</li>
        </ul>
    </div>
</div>
<!-- /header wrapper -->
</header>
<!-- /Header -->
<!-- Blog -->
<div id="blog" class="section md-padding1">
<!-- Container -->
<div class="container">
    <!-- Row -->
    <div class="row">
        <!-- Main -->
        <main id="main" class="col-md-9">
            <div class="blog">
                <div class="blog-img">
                    <img class="img-responsive" src="{{ Storage::disk('public')->url('post/'.$post->image) }}">
                </div>
                <div class="blog-content">
                    <ul class="blog-meta">
                        <li><i class="fa fa-user"></i><a href="{{ route('author.profile',$post->user->username) }}">{{ $post->user->name }}</a></li>
                        <li><i class="fa fa-clock-o"></i>{{ $post->created_at->diffForHumans()}}</li>
                        <li><i class="fa fa-eye">{{ $post->view_count }}</i></li>
                    </ul>
                    <h3>{{ $post->title }}</h3>
                    <p>{!! html_entity_decode($post->body) !!}</p>
                </div>
                <!-- blog tags -->
                <div class="blog-tags">
                    <h5>Tags :</h5>
                    @foreach($post->tags as $tag)
                        <a href="{{ route('tag.posts',$tag->slug) }}"><i class="fa fa-tag"></i>{{ $tag->name }}</a>
                    @endforeach
                </div>
                <!-- blog tags -->


            </div>
        </main>
        <!-- /Main -->
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
            <!-- Posts sidebar -->
            <div class="widget">
                <h3 class="title">Popular Posts</h3>
                <!-- single post -->
                @foreach($popularposts as $popularpost)
                    <div class="widget-post">
                        <a href="{{ route('posts',$popularpost->slug) }}">
                            <img style="width: 100px;height: 65px;" src="{{ Storage::disk('public')->url('post/'.$popularpost->image) }}" alt="">{{ $popularpost->title }}
                        </a>
                        <ul class="blog-meta">
                            <li>{{ $popularpost->created_at->diffForHumans() }}</li>
                        </ul>
                    </div>
                @endforeach
                <!-- /single post -->
            </div>
            <!-- /Posts sidebar -->
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

        </aside>
        <!-- /Aside -->
    </div>
    <!-- /Row -->
</div>
<!-- /Container -->
</div>
<!-- /Blog -->
@endsection()
