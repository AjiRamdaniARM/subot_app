@extends('trainer.layouts.main')
@section('children')

<body class="scrollbar-hidden">

  <main class="guide-profile">
    <!-- banner start -->
    <section class="banner position-relative">
      <img src="{{ asset('assets/img/cover.jpg') }}" alt="Banner" class="w-100 img-fluid">
      
      <!-- title -->
      <div class="page-title">
        <button type="button" onclick="window.location.href='{{ url('/explore') }}'" class="back-btn back-page-btn d-flex align-items-center justify-content-center rounded-full">
          <img src="{{ asset('assets/trainerSvg/svg/arrow-left-black.svg') }}" alt="arrow">
        </button>
      </div>
    </section>
    <!-- banner end -->

    <!-- profile-info start -->
    <section class="profile-info px-24">
      <div class="image overflow-hidden radius-10">
        <img src="../../assets/images/profile/profile.png" alt="" class="img-fluid w-100">
      </div>

      <h3>Sukabumi Robotic Competetion</h3>
      <p>Sukabumi, 25 Agustus 2024<span></span> <br> University Nusa Putra</p>
      <div class="d-flex align-items-center gap-16">
        <a href="https://wa.link/9skeuw" 
           class="msg-btn flex-grow d-inline-block radius-12" 
           target="_blank" 
           rel="noopener noreferrer">
          Send Message
        </a>
      </div>      
    </section>
    <br>
    <!-- profile-info end -->

    <!-- summary start -->
    {{-- <section class="summary d-flex align-items-center justify-content-between px-24 py-24">
      <div class="text-center">
        <p>Guide</p>
        <h5>700+</h5>
      </div>
      <div class="divider"></div>
      <div class="text-center">
        <p>Experience</p>
        <h5>3 Years</h5>
      </div>
      <div class="divider"></div>
      <div class="text-center">
        <p>Rate</p>
        <h5>4.0<span>/5</span></h5>
      </div>
    </section> --}}
    <!-- summary end -->

    <!-- profile-about start -->
    <section class="profile-about px-24 pb-24">
      <div class="title mb-8">
        <h4>About Us</h4>
      </div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tortor ac leo lorem nisl. Viverra vulputate sodales quis et dui, lacus. Iaculis eu egestas leo egestas vel. Ultrices ut magna nulla facilisi commodo enim, orci feugiat pharetra. Id sagittis, ullamcorper turpis ultrices platea pharetra.</p>
    </section>
    <!-- profile-about end -->

    <!-- profile-location start -->
    <section class="profile-location px-24 pb-24">
      <div class="title mb-8">
        <h4>Location</h4>
      </div>

      <!-- map -->
      <div class="overflow-hidden radius-8 map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d846588.5514550178!2d-118.35899906676545!3d34.01855672774309!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1701149305360!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </section>
    <!-- profile-location end -->
  </main>

</body>
</html>
@endsection