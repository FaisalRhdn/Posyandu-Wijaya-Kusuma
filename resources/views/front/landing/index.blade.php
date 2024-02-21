  @extends('front.layouts.index')

  @section('content')
      
  <!-- ======= Header ======= -->
      <!-- <section id="topbar" class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">ponpesdarussholihinbenowo@gmail.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62 813 3513 7003</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="https://www.youtube.com/@ppdarussholihinbenowotvoff4446" class="twitter"><i class="bi bi-youtube"></i></a>
          <a href="https://www.facebook.com/profile.php?id=100006304969492" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/pp_darussholihin" class="instagram"><i class="bi bi-instagram"></i></a>
        </div>
      </div>
    </section>End Top Bar -->

    <header id="header" class="header d-flex align-items-center">

      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="../assets/img/Logo Posyandu Wijaya Kusuma.png" alt="/">
          <!-- <h1>Darrusholihin<span>.</span></h1> -->
        </a>
        <nav id="navbar" class="navbar">
          <ul>
            <li><a href="#hero">Home</a></li>
            <li><a href="#about">Tentang Kami</a></li>
            <li><a href="#services">Berita Terbaru</a></li>
            <li><a href="#stats-counter">Social Media</a></li>
            <li><a href="#contact">Contact</a></li>
            <li>
            <div class="welcome-container">
            <a>@if (auth()->check())
            Welcome, {{ auth()->user()->name }}</a>
            </div>
            </li>
            <li>
            <img src="{{ asset('storage/' . auth()->user()->avatar) }}" alt="User Avatar" class="avatar">
            </li>
            <li>
             <form action="{{ route('voyager.logout') }}" method="POST" class="logout-form">
            @csrf
            <button type="submit" class="logout-button">Logout</button>
            </form>
             @else
            <div class="login-container">
            <a href="{{ route('voyager.login') }}" class="login-button">Login</a>
            </div>
            @endif
            </li>
          </ul> 
        </nav><!-- .navbar -->

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      </div>

    </header><!-- End Header -->
      
  <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">
      <div class="container position-relative">
        <div class="row gy-5" data-aos="fade-in">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
            <h2>Posyandu <span>Wijaya Kusuma 3</span></h2>
            <p>Jl. Tengger Raya No.4, Banjar Sugihan, Kec. Tandes, Surabaya </p>
            <div class="d-flex justify-content-center justify-content-lg-start">
              <a href="#about" class="btn-get-started">Get Started</a>
              <a href="https://www.youtube.com/watch?v=codB6V6j3x4&t=1s" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2">
          <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/img/carousel-1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/img/carousel-2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/img/carousel-3.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
          </div>
        </div>
      </div>
      
      <div class="icon-boxes position-relative">
        <div class="container position-relative">
          <div class="row gy-4 mt-5">

            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-easel"></i></div>
                <h4 class="title"><a href="#faq" class="stretched-link">Pendidikan</a></h4>
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-gem"></i></div>
                <h4 class="title"><a href="#faq" class="stretched-link">Fasilitas</a></h4>
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-graph-up"></i></div>
                <h4 class="title"><a href="#faq" class="stretched-link">Program Unggulan</a></h4>
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-command"></i></div>
                <h4 class="title"><a href="#faq" class="stretched-link">Ektra Kurikuler</a></h4>
              </div>
            </div><!--End Icon Box -->

          </div>
        </div>
      </div>

      </div>
    </section>
    <!-- End Hero Section -->


      <!-- ======= About Us Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">

          <div class="section-header">
            <h2>PONDOK PESANTREN DARUSSHOLIHIN</h2>
            <p>Belajar Al-Qur'an dan Mengamalkannya Kitab salaf, Modern dan Extra</p>
          </div>

          <div class="row gy-4">
            <div class="col-lg-6">
              <h3>Yayasan Pondok Pesantren DARUSSHOLIHIN Benowo </h3>
              <img src="assets/img/gedung.png" class="img-fluid rounded-4 mb-4" alt="">
              <p>       Yayasan pondok pesantren DARUSSHOLIHIN Benowo - Surabaya sebagai salah satu pesantren salafiyah yang ada di Surabaya yang ikut bertanggung jawab mempersiapkan sumber daya manusia yang memiliki dasar pendidikan tidak bisa di pandang sebelah mata dengan berorientasi pada profesional yang selalu menjunjung tinggi Etika perjuangan Agama agar dapat berpartisipasi aktif sebagai subyek pembangun moral dan Agama nasional.</p>
              <p>di dirikan kira - kira tahun 1972 M Oleh K.H Ahmad RIdwan Yasin dengan suatu pendidikan yang berpola salafiyah modern memiliki beberapa tujuan pendidikan agar menghasilkan para pendidik Agama Islam yang siap berjuang tanpa pamrih.</p>
            </div>
            <div class="col-lg-6">
              <div class="content ps-0 ps-lg-5">
                <p class="fst-italic">
                  Adapun tujuan pendidikan yang di inginkan oleh beliau K.H Ahmad Ridwan Yasin adalah sebagai berikut
                </p>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Menyiapkan Kader pejuang Agama Islam yang terampil .</li>
                  <li><i class="bi bi-check-circle-fill"></i> Membekali siswa ( santri ) dengan hasil teori dan pengalaman yang telah di lakukan K.H Ahmad Ridwan Yasin selama bertahun - tahun sehingga bisa di terima di masyarakat khususnya di wilayah Benowo Surabaya dan sekitarnya.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Bisa memberikan pelayanan kepada masyarakat sesuai dengan profesi sebagai seorang santri.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Mampu menghadapi situasi apapun dengan kepercayaan diri dan keteguhan.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Mempunyai motifasi perjuangan guna mengikuti perkembangan zaman yang semakin modern dengan tanpa meninggalkan Etika perjuangan berdasarkan nilai - nilai Ahli Sunnah wal Jama'ah.</li>
                </ul>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
                </p>

                <div class="position-relative mt-4">
                  <img src="assets/img/about-2.jpg" class="img-fluid rounded-4" alt="">
                  <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section><!-- End About Us Section -->

      <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq">
          <div class="container" data-aos="fade-up">

            <div class="row gy-4">

              <div class="col-lg-4">
                
                <div class="content px-xl-5">
                  <h3>Ayo<strong>Mondok</strong></h3>
                  <p>
                    Sambil Sekolah & Kuliah
                  </p>
                  <!-- <div class="fb-page"
      data-href="https://www.facebook.com/profile.php?id=100006304969492"
      data-tabs="timeline"
      data-adapt-container-width="true"
      data-hide-cover="false"
      data-show-facepile="true">
      <blockquote cite="https://www.facebook.com/profile.php?id=100006304969492" class="fb-xfbml-parse-ignore">
          <a href="https://www.facebook.com/profile.php?id=100006304969492">Pesantren Darussholihin Benowo Sby</a>
      </blockquote>
  </div> -->
            </div>
              </div>

            <div class="col-lg-8">

              <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                      <span class="num">1. </span>
                      Pendidikan
                    </button>
                  </h3>
                  <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                    <h5> 1. Tahfidz <br>
                      2. Pengajian Kitab Kuning<br>
                      3. Kajian Umum Kitab Tafsir Jalalain<br>
                      4. Kajian Kitab Metode At-Tasbit<br>
                      5. Istigosah Kubro Awal Bulan<br>
                      6. Bimbingan Ubudiyah & Akhlak<br></h5>
                    </div>
                  </div>
                </div><!-- # Faq item-->

                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                      <span class="num">2. </span>
                      Fasilitas
                    </button>
                  </h3>
                  <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                    <h5> 1. Masjid <br>
                      2. Kantin Pesantren<br>
                      3. Gedung Madrasah <br>
                      4. Asrama Putra & Putri<br>
                      5. Gedung Pesantren Milik Sendiri<br></h5>
                    </div>
                  </div>
                </div><!-- # Faq item-->

                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                      <span class="num">3. </span>
                      Program Unggulan
                    </button>
                  </h3>
                  <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                    <h5> 1. Tahfidz <br>
                      2. Pembacaan Kitab Kuning<br></h5>
                    </div>
                  </div>
                </div><!-- # Faq item-->

                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                      <span class="num">4.</span>
                      Extra Kurikuler
                    </button>
                  </h3>
                  <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                    <h5> 1. Seni Banjari <br>
                      2. Qiroatul Qulub<br>
                      3. Praktik Ubudiyah <br>
                      4. Training Khithobiyah<br>
                      5. Lalaran Nadhom<br></h5>
                    </div>
                  </div>
                </div><!-- # Faq item-->

              </div>

            </div>
          </div>
        </div>
      </section><!-- End Frequently Asked Questions Section -->

      <!-- ======= Our Services Section ======= -->
      
      <!-- End Our Services Section -->

      <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2>Sosial Media Kami</h2>
            <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p>
          </div>     
        <div class="row gy-4 align-items-center">

          <div class="col-lg-4">
            <div class="info-stats-container d-flex flex-column align-items-center justify-content-center">
            <div class="info-stats-item">
                  <div class="text-center">
                    <h4><strong>FACEBOOK</strong></h4>
                  </div>
                </div>
                  <div class="iframe-container">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D100006304969492&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" 
                      class="responsive-iframe align-items-center" height="400" width="340" frameborder="0" allowfullscreen="true"></iframe>
                      </div>
          </div>
          </div>

          <div class="col-lg-4 text-center">
            <div class="info-stats-container d-flex flex-column align-items-center justify-content-center">
            <div class="info-stats-item text-center">
                  <div class="text-center">
                    <h4><strong>YOUTUBE</strong></h4>
                  </div>
                  
                </div>  
            <iframe src='https://widget-35ab81510cc04f7abd92562939d405dd.elfsig.ht' width='100%' height='400' frameborder='0'></iframe>
                </div> 
          </div>

         <div class="col-lg-4">
          <div class="info-stats-container d-flex flex-column align-items-center justify-content-center">
            <div class="info-stats-item">
                  <div class="text-center">
                    <h4><strong>INSTAGRAM</strong></h4>
                  </div>
                </div>
            <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/pp_darussholihin/" data-instgrm-version="12" style="margin: 0 auto; max-width: 100%; width: 100%; max-height: 388px;"></blockquote>

          </div>

        </div>

      </div>
    </section>
    
    <!-- End Stats Counter Section -->

      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

          <div class="section-header">
            <h2>Contact</h2>
            <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p>
          </div>

          <div class="row gx-lg-0 gy-4"> 
        
            <div class="col-lg-4">

              <div class="info-container d-flex flex-column align-items-center justify-content-center">
                <div class="info-item d-flex">
                  <i class="bi bi-geo-alt flex-shrink-0"></i>
                  <div>
                    <h4>Lokasi:</h4>
                    <p>Jln. Kauman 03/01 Benowo Pakal Surabaya</p>
                  </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex">
                  <i class="bi bi-envelope flex-shrink-0"></i>
                  <div>
                    <h4>Email:</h4>
                    <p>darussholihinbenowo@gmail.com</p>
                  </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex">
                  <i class="bi bi-phone flex-shrink-0"></i>
                  <div>
                    <h4>Telepon:</h4>
                    <p>+62 813 3513 7003</p>
                  </div>
                </div><!-- End Info Item -->

              </div>

            </div>

            <div class="col-lg-8 ">
                <div class="row gx-lg-0 gy-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.058425380458!2d112.6113398758874!3d-7.234176671048878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78012477648a9d%3A0x1fe9736ad5dd8b37!2sPondok%20Pesantren%20Darussholihin%20Benowo!5e0!3m2!1sid!2sid!4v1690946732069!5m2!1sid!2sid" 
              width="600" height="600" style="border:0; position:relative;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
            </div><!-- End Contact Form -->

          </div>

        </div>
      </section><!-- End Contact Section -->

    </main><!-- End #main -->
  @endsection

  