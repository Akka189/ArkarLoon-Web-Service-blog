@extends('frontend.layout.app')

@section('title','home')

@section('content')

    <!-- About -->
    <div id="about" class="section md-padding">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <!-- Section header -->
                <div class="section-header text-center">
                    <h2 class="title">Welcome to Website</h2>
                </div>
                <!-- /Section header -->

                <!-- about -->
                <div class="col-md-4">
                    <div class="about">
                        <i class="fa fa-cogs"></i>
                        <h3>Fully Customizible</h3>
                        <p>
                            The design from Arkar Loon must be my own creations. And you can customize my web desings for your project.
                        </p>
                    </div>
                </div>
                <!-- /about -->

                <!-- about -->
                <div class="col-md-4">
                    <div class="about">
                        <i class="fa fa-magic"></i>
                        <h3>Awesome Features</h3>
                        <p>
                            Arkar Loon's design and system development all are latest features. You may feel the best experience to my projects.
                        </p>
                    </div>
                </div>
                <!-- /about -->

                <!-- about -->
                <div class="col-md-4">
                    <div class="about">
                        <i class="fa fa-mobile"></i>
                        <h3>Fully Responsive</h3>
                        <p>
                            Responsive is essentially need for all devices to users. Don't worry about that! My design are responsible all devices.
                        </p>
                    </div>
                </div>
                <!-- /about -->

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </div>
    <!-- /About -->

    <!-- Service -->
    <div id="service" class="section md-padding">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <!-- Section header -->
                <div class="section-header text-center">
                    <h2 class="title">What I offer</h2>
                </div>
                <!-- /Section header -->

                <!-- service -->
                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <i class="fa fa-diamond"></i>
                        <h3>Website Design</h3>
                        <p>You can get the most beautiful and useful web design and custom the design for your website as you want.</p>
                    </div>
                </div>
                <!-- /service -->

                <!-- service -->
                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <i class="fa fa-rocket"></i>
                        <h3>Web Development</h3>
                        <p>Keep your website product up-to-date and up and running with my superior technical maintenance services.</p>
                    </div>
                </div>
                <!-- /service -->

                <!-- service -->
                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <i class="fa fa-cogs"></i>
                        <h3>Project Management</h3>
                        <p>Better ideas for your website and  process with my attentive project management.</p>
                    </div>
                </div>
                <!-- /service -->

                <!-- service -->
                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <i class="fa fa-connectdevelop"></i>
                        <h3>UI/UX Development</h3>
                        <p>Make your website eye-pleasing for better market penetration and the best experiences.</p>
                    </div>
                </div>
                <!-- /service -->

                <!-- service -->
                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <i class="fa fa-newspaper-o"></i>
                        <h3>Self Customization</h3>
                        <p>You can choice your favourite design upon my two prototype project for your website.</p>
                    </div>
                </div>
                <!-- /service -->

                <!-- service -->
                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <i class="fa fa-clock-o"></i>
                        <h3>Save Time</h3>
                        <p>You can start use your website only a few week after start ordered for website.</p>
                    </div>
                </div>
                <!-- /service -->

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </div>
    <!-- /Service -->


    <!-- Why Choose Us -->
    <div id="features" class="section sm-padding bg-grey">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <!-- why choose us content -->
                <div class="col-md-6">
                    <div class="section-header">
                        <h2 class="title">Why Choose Us</h2>
                    </div>
                    <p>I'll bring the world latest & most beautiful website design for you. I always use the latest features and tools so that your website up to date.</p>
                    <div class="feature">
                        <i class="fa fa-check"></i>
                        <p><b>SEO</b>(<b>S</b>earch <b>E</b>ngine <b>O</b>ptimization) friendly.</p>
                    </div>
                    <div class="feature">
                        <i class="fa fa-check"></i>
                        <p>Save on <b>TIME</b> and <b>MONEY</b>.</p>
                    </div>
                    <div class="feature">
                        <i class="fa fa-check"></i>
                        <p><b>24/7</b> support to clients.</p>
                    </div>
                    <div class="feature">
                        <i class="fa fa-check"></i>
                        <p><b>Customization</b> for your ordered website.</p>
                    </div>
                </div>
                <!-- /why choose us content -->

                <!-- About slider -->
                <div class="col-md-6">
                    <div id="about-slider" class="owl-carousel owl-theme">
                        <img src="{{ url('/master/frontend/images/about11.jpg') }}" alt="">
                        <img src="{{ url('/master/frontend/images/about5.jpg') }}" alt="">
                        <img src="{{ url('/master/frontend/images/about3.jpg') }}" alt="">
                        <img src="{{ url('/master/frontend/images/about4.jpg') }}" alt="">
                    </div>
                </div>
                <!-- /About slider -->

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </div>
    <!-- /Why Choose Us -->

    <!-- Team -->
    <div id="team" class="section md-padding">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <!-- Section header -->
                <div class="section-header text-center">
                    <h2 class="title">Our Team</h2>
                </div>
                <!-- /Section header -->

                <!-- team -->
                @foreach($users as $user)
                    @if($user->count() < 3)
                        <div class="mx-auto">
                            <div class="mx-auto">
                                <div class="col-sm-4">
                                    <div class="team">
                                        <div class="team-img">
                                            <img class="img-responsive" src="{{ Storage::disk('public')->url('profile/'.$user->image) }}" alt="{{ $user->name }}">
                                        </div>
                                        <div class="team-content">
                                            <h3>{{ $user->name }}</h3>
                                            <span>{{ $user->about }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-sm-4">
                            <div class="team">
                                <div class="team-img">
                                    <img class="img-responsive" src="{{ Storage::disk('public')->url('profile/'.$user->image) }}" alt="{{ $user->name }}">
                                </div>
                                <div class="team-content">
                                    <h3>{{ $user->name }}</h3>
                                    <span>{{ $user->about }}</span>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
                <!-- /team -->

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </div>
    <!-- /Team -->

    <!-- Blog -->
    <div id="blog" class="section md-padding bg-grey">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <!-- Section header -->
                <div class="section-header text-center">
                    <h2 class="title">Recents Posts</h2>
                </div>
                <!-- /Section header -->

                <!-- blog -->

                @foreach($posts as $post)
                    <div class="col-md-4">
                        <div style="max-height: 556px;" class="blog">
                            <div class="blog-img">
                                <img class="img-responsive" src="{{ Storage::disk('public')->url('post/'.$post->image) }}" alt="{{ $post->title }}">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user"><a href="{{ route('author.profile',$post->user->username) }}">{{ $post->user->name }}</a></i></li>
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
                <!-- /blog -->

            </div>
            <!-- /Row -->

            <!-- Row -->
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="text-center margin-toper">
                        <a href="{{ asset('/allpost') }}"><button class="main-btn">See More</button></a>
                    </div>
                </div>
            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </div>
    <!-- /Blog -->

    <!-- Contact -->
    <div id="contact" class="section md-padding">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <!-- Section-header -->
                <div class="section-header text-center">
                    <h2 class="title">Get in touch</h2>
                </div>
                <!-- /Section-header -->

                <!-- contact -->
                <div class="col-sm-4">
                    <div class="contact">
                        <i class="fa fa-phone"></i>
                        <h3>Phone</h3>
                        <a href="tel:+95 9400289153">09 400289153</a>
                    </div>
                </div>
                <!-- /contact -->

                <!-- contact -->
                <div class="col-sm-4">
                    <div class="contact">
                        <i class="fa fa-envelope"></i>
                        <h3>Email</h3>
                        <a href="mailto:akkaminthwin@gmail.com">akkaminthwin@gmail.com</a>
                    </div>
                </div>
                <!-- /contact -->

                <!-- contact -->
                <div class="col-sm-4">
                    <div class="contact">
                        <i class="fa fa-map-marker"></i>
                        <h3>Address</h3>
                        <p>No(9) Phadamyar Ghayhar 3<sup>rd</sup> Street, Halden,Yangon, Myanmar</p>
                    </div>
                </div>
                <!-- /contact -->

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </div>
    <!-- /Contact -->

    <!-- Back to top -->
    <div id="back-to-top"></div>
    <!-- /Back to top -->

    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- /Preloader -->
@endsection()
