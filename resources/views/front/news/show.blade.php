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
      <div class="container">
      <div class="section-header">
      <h2 style="text-transform: uppercase">{{ $frontPost->title }}</h2>
        </div>
      <div class="service-item  position-relative">

        <div class="row">
            {{-- <div class="product-card"> --}}

            <div class="product-image" style="text-align: center">
                {{-- @if ($frontPost->image) --}}
                <div style="position:relative; overflow:hidden">
                    <img src="{{ asset('storage/' . $frontPost->image) }}" class="img-fluid">
                </div>
            </div>
            <div class="product-content ">
                <br>
                <h4>{{ $frontPost->description }}</h4>
                <br>
                <div> Posted At : {{ Carbon\Carbon::parse($frontPost->created_at)->format('j F Y') }} </div>

                <div class="text-center"><a href="/post" class="btn btn-success">Lihat Semua Berita</a></div>
                {{-- <h4 style="color: blue">Harga Tiket Rp {{ number_format($frontPost->harga) }}</> --}}

                {{-- <div class="product-price">IDR 30K <span>IDR 55K</span></div> --}}
            </div>


            {{-- </div> --}}
</div>
        </div>
    </section>
@endsection
