@extends('frontend.layout.app1')
@section('title','Author Profile')
@section('content')
<!-- header wrapper -->
<div class="header-wrapper sm-padding1 bg-grey">
    <div class="container">
        <h2>{{ $author->name }}'s Posts</h2>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/#blog') }}">Blog</a></li>
            <li class="breadcrumb-item active">{{ $author->name }}'s Posts</li>
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
                <main class="col-md-9">
                    @foreach($posts as $post)
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
                                                    <li><i class="fa fa-eye">{{ $post->view_count }}</i></li>
                                                </ul>
                                                <h3><a style="color: #0D0A0A;" href="{{ route('posts',$post->slug) }}">{{ $post->title }}</a></h3>
                                                <p>{!! str_limit($post->body,150) !!}</p>
                                                <a href="{{ route('posts',$post->slug) }}">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    @endforeach
                </main>
                <!-- /blog -->

                <!-- Aside -->
                <aside id="aside" class="col-md-3 bg-as">
                    <!-- About Author-->
                    <div class="team">
                        <div class="team-img">
                            <img class="img-responsive" src="{{ Storage::disk('public')->url('profile/'.$post->user->image) }}" alt="Author Image">
                        </div>
                        <div class="team-content">
                            <h3 class="text-center">{{ $author->name }}</h3>
                            <span class="text-center">{{ $author->about }}</span><br>
                            <strong>Total Posts : {{ $author->posts->count() }}</strong>
                        </div>
                    </div>
                    <!-- /About Author-->
                </aside>
                <!-- /Aside -->


            </div>
            <!-- /Row -->
        </div>
        <!-- /Container -->

    </div>
</div>
<!-- /Blog -->
@endsection()
