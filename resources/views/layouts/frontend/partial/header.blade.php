<!-- Header -->    
    <header id="home">
        <!-- Background Image -->
        <div class="bg-img" style="background-image: url({{ url('/master/frontend/images/background1.jpg') }});">
            <div class="overlay"></div>
        </div>
        <!-- /Background Image -->

        <!-- Nav -->
        <nav id="nav" class="navbar nav-transparent">
            <div class="container">

                <div class="navbar-header">
                    <!-- Logo -->
                    <div class="navbar-brand">
                        <a href="https://www.arkarloon.com">
                            <img class="logo" src="{{ url('/master/frontend/images/logo.png') }}" alt="logo">
                        </a>
                    </div>
                    <!-- /Logo -->

                    <!-- Collapse nav button -->
                    <div class="nav-collapse">
                        <span></span>
                    </div>
                    <!-- /Collapse nav button -->
                </div>

                <!--  Main navigation  -->
                <ul class="main-nav nav navbar-nav navbar-right">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#service">Services</a></li>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#team">Our Team</a></li>
                    <li class="has-dropdown"><a href="#blog">Blog</a>
                        <ul class="dropdown">
                            <li><a href="{{ asset('/allpost') }}">blog post</a></li>
                        </ul>
                    </li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <!-- /Main navigation -->

            </div>
        </nav>
        <!-- /Nav -->

        <!-- home wrapper -->
        <div class="home-wrapper">
            <div class="container">
                <div class="row">

                    <!-- home content -->
                    <div class="col-md-10 col-md-offset-1">
                        <div class="home-content">
                            <h1 class="white-text">Arkar Loon</h1>
                            <h2 class="white-text">Web Design and Development Service</h2>
                            <p class="white-text">
                                <b><i></i></b> A website is essentially need for your business. All of the succeeding businesses have a website. The websites will let your business to popular. Let Arkar Loon give you the best websites...
                            </p>
                            <button class="white-btn"><a href="#contact">Get Started!</a></button>
                        </div>
                    </div>
                    <!-- /home content -->

                </div>
            </div>
        </div>
        <!-- /home wrapper -->

    </header>
<!-- /Header -->
