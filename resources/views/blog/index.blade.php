@extends('layouts.layout1')

@section('fsf-content')
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-11 d-flex align-items-center justify-content-between">
                    <h1 class="logo">
                        <a href="/">
                            <img src="./Images/FSF-Logo.png" alt="" class="img-fluid" />
                            Family-S-Foundation</a>
                    </h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="index.html" class="logo"><img src="./Images/FSF-Logo.png" alt="" class="img-fluid"></a> -->

                    <nav id="navbar" class="navbar">
                        <ul>
                            <li>
                                <a class="nav-link scrollto active" href="/">Home</a>
                            </li>
                            <li>
                                <a class="nav-link scrollto" href="/home">Admin</a>
                            </li>
                        </ul>
                        <i class="bi bi-list mobile-nav-toggle"></i>
                    </nav>
                    <!-- .navbar -->
                </div>
            </div>
        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <h2>Family Salvation Foundation Blog</h2>
            </div>
        </section><!-- End Breadcrumbs -->


        <section class="blog read-more-container" id="blog">
            <div class="container" data-aos="fade-up">
                <div class="row">

                    <div class="col-lg-8 entries">

                        <!-- @if (Auth::check())
    <div class=" pt-2 m-auto w-4/5">
                            <a href="/create">Create Post</a>
                        </div>
    @endif -->

                        @foreach ($posts as $post)
                            <article class="entry">


                                <div class="entry-img">


                                    <img src="{{ asset('DisplayImages/' . $post->image_path) }}" alt=""
                                        srcset="">


                                </div>


                                <h2 class="entry-title">
                                    <a href="">{{ $post->title }}</a>
                                </h2>

                                <div class="entry-meta">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                                href="">{{ $post->user->name }}</a></li>
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                                href=""><time>{{ date('jS M Y', strtotime($post->updated_at)) }}</time></a>
                                        </li>

                                    </ul>
                                </div>

                                @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                                    <ul>
                                        <li class="d-flex align-items-center"> <a href="/blog/{{ $post->slug }}/edit">Edit
                                                Post </a></li>

                                        <form action="/blog/{{ $post->slug }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" >Delete Post</button>
                                            
                                        </form>


                                    </ul>
                                @endif
                                @auth
                                    <div class="col-lg-8 entries">

                                    </div>
                                @endauth

                                <div class="entry-content">
                                    <p>
                                        {{ $post->introduction }}
                                    </p>

                                    <div class="read-more-text">

                                        <p>{{ $post->paragraph }}</p>

                                        <blockquote>
                                            <p>{{ $post->qoute }}</p>
                                        </blockquote>

                                        <p>{{ $post->description }}</p>

                                        <h3>{{ $post->heading1 }}</h3>
                                        <p>
                                            {{ $post->description2 }}
                                        </p>
                                        {{-- <div class="row">
                                            <section class="hero">
                                                <div class="hero-container">
                                                    <div id="heroCarousel" class="carousel slide carousel-fade"
                                                        data-bs-ride="carousel" data-bs-interval="5000">
                                                        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

                                                        <div class="carousel-inner" role="listbox">
                                                            <div class="carousel-item active">
                                                                <img src="{{ asset('img/about-vision.jpg') }}"
                                                                    alt="" class="img-fluid">
                                                            </div>
                                                            <div class="carousel-item ">
                                                                <img src="{{ asset('img/about-mission.jpg') }}"
                                                                    alt="" class="img-fluid">
                                                            </div>
                                                            <div class="carousel-item ">
                                                                <img src="{{ asset('img/about-plan.jpg') }}" alt=""
                                                                    class="img-fluid">
                                                            </div>
                                                            <div class="carousel-item ">
                                                                <img src="{{ asset('Images/pads.jpeg') }}" alt=""
                                                                    class="img-fluid">
                                                            </div>
                                                        </div>

                                                        <a class="carousel-control-prev" href="#heroCarousel" role="button"
                                                            data-bs-slide="prev">
                                                            <span class="carousel-control-prev-icon bi bi-chevron-left"
                                                                aria-hidden="true"></span>
                                                        </a>

                                                        <a class="carousel-control-next" href="#heroCarousel" role="button"
                                                            data-bs-slide="next">
                                                            <span class="carousel-control-next-icon bi bi-chevron-right"
                                                                aria-hidden="true"></span>
                                                        </a>
                                                    </div>
                                                </div>

                                            </section>
                                        </div> --}}
                                        <h3>{{ $post->heading2 }}</h3>
                                        <p>
                                            {{ $post->description3 }}
                                        </p>
                                        <p>
                                            {{ $post->conclusion }}
                                        </p>
                                    </div>
                                    <span class="read-more-btn">Read More</span>
                                </div>
                            </article>
                        @endforeach

                        <!-- End blog entry -->

                    </div><!-- End blog entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <h3 class="sidebar-title">Search</h3>
                            <div class="sidebar-item search-form">
                                <form action="">
                                    <input type="text" class="form-control">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div><!-- End sidebar search formn-->

                            <h3 class="sidebar-title">Tags</h3>
                            <div class="sidebar-item tags">
                                <ul>
                                    <li><a href="#">SHRS</a></li>
                                    <li><a href="#">GBV</a></li>
                                    <li><a href="#">Economic Empowerment</a></li>
                                    <li><a href="#">Advocacy</a></li>
                                    <li><a href="#">Youth Centers</a></li>
                                    <li><a href="#">Family Centered Services</a></li>
                                    <li><a href="#">Men & Boy Involvement</a></li>
                                    <li><a href="#">Consultancy</a></li>
                                    <li><a href="#">Orphaned & Volunerable Children</a></li>

                                </ul>
                            </div><!-- End sidebar tags-->

                            {{-- <h3 class="sidebar-title">Recent Posts</h3>
                            <div class="sidebar-item recent-posts">
                                <div class="post-item clearfix">
                                    <img src="assets/img/blog/blog-recent-1.jpg" alt="">
                                    <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>


                            </div><!-- End sidebar recent posts--> --}}



                        </div><!-- End sidebar -->

                    </div><!-- End blog sidebar -->

                </div>
            </div>

        </section>

        @include('layouts.footer2')
    @endsection
