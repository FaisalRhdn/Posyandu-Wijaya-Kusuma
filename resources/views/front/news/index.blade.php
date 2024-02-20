@extends('front.layouts.index')

@section('content')
  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="../assets/img/logo.png" alt="/">
        <!-- <h1>Darrusholihin<span>.</span></h1> -->
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="../#about">Tentang Kami</a></li>
          <li><a href="../#services">Berita Terbaru</a></li>
          <li><a href="../#stats-counter">Social Media</a></li>
          <li><a href="../#contact">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
<section id="services" class="services sections-bg">
      <div class="container" data-aos="fade-up">
<div class="section-header">
          <h2>Postingan</h2>
          <p>Postingan Berita Pondok Pesantren DARUSSHOLIHIN</p>
        </div>
        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
        @foreach ($post as $itemPost)
        <div class="col-lg-4 col-md-6">
            <div class="service-item  position-relative">
              <div class="post-image">
              <a style="color: dark " href="/frontpost/{{ $itemPost->id }}">
                    @if (@empty($itemPost->image))
                        <img style="max-width: 80%" position="center"
                            src="https://plus.unsplash.com/premium_photo-1682390303849-9cf52609ce82?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80"
                            alt="">
                    @else
                        <img style="max-width: 80% position:center" src="{{ asset('storage/' . $itemPost->image) }}" class="img-fluid mt-3">
                    @endif
                </div>
                <br>
              <h3>{{ $itemPost->title ?? '' }}</h3>
              <div>{{ \Illuminate\Support\Str::limit(strip_tags($itemPost->description), 70) }}
                    @if (strlen(strip_tags($itemPost->description)) > 70)
                    @endif
                </div>
                <a href="/frontpost/{{ $itemPost->id }}" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                <div> Posted At : {{ Carbon\Carbon::parse($itemPost->created_at)->format('j F Y') }} </div>
            </div>
          </div>
                @endforeach<!-- End Service Item --><!--  -->
        </div>

      </div>
    </section><!-- End Our Services Section -->
@endsection
