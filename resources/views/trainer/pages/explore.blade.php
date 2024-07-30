@extends('trainer.layouts.main')
@section('children')

<body class="scrollbar-hidden">

  <main class="explore">
    <!-- search start -->
    <section class="search py-12">
      <form action="#">
        <div class="form-inner w-100 d-flex align-items-center gap-8 radius-24">
          <img src="{{ asset('assets/trainerSvg/svg/search.svg') }}" alt="search" class="shrink-0">
          <input type="search" class="input-search input-field" placeholder="Search...">
          <div class="filter shrink-0">
          </div>
        </div>
      </form>
    </section>
    <!-- search end -->

    <!-- all-place start -->
    <section class="all-place py-12">
      <!-- tab list -->

      <!-- places -->
      <div id="place-cards" class="grid">
        <!-- item-1 -->
        <div class="place-card mix popular frequent">
          <a href="{{ url('/event') }}">
            <div class="image position-relative">
              <img src="{{ asset('assets/img/cover.jpg') }}" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
            </div>
            <div class="content">
              <h4>Sukabumi robotik competetion</h4>
              <p class="d-flex align-items-center gap-04 location">
                <img src="{{ asset('assets/trainerSvg/svg/map-marker.svg') }}" alt="icon">
                Sukabumi
              </p>
            </div>
          </a>
        </div>

        <!-- item-2 -->
        <div class="place-card mix recommendation popular">
          <a href="vacation-details.html">
            <div class="image position-relative">
              <img src="{{ asset('assets/img/coming soon.gif') }}" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
              <span class="d-flex align-items-center justify-content-center rounded-full">
              </span>
            </div>
            <div class="content">
              <h4>Coming Soon</h4>
              <p class="d-flex align-items-center gap-04 location">
                <img src="{{ asset('assets/trainerSvg/svg/map-marker.svg') }}" alt="icon">
                Sukabumi
              </p>
              <div class="price d-flex align-items-center justify-content-between">
              </div>
            </div>
          </a>
        </div>

        <!-- item-3 -->
        <div class="place-card mix frequent recommendation">
          <a href="vacation-details.html">
            <div class="image position-relative">
              <img src="{{ asset('assets/img/coming soon.gif') }}" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
            </div>
            <div class="content">
              <h4>Coming Soon</h4>
              <p class="d-flex align-items-center gap-04 location">
                <img src="{{ asset('assets/trainerSvg/svg/map-marker.svg') }}" alt="icon">
                Sukabumi
              </p>
              <div class="price d-flex align-items-center justify-content-between">
              </div>
            </div>
          </a>
        </div>

        <!-- item-4 -->
        {{-- <div class="place-card mix recommendation frequent">
          <a href="vacation-details.html">
            <div class="image position-relative">
              <img src="../assets/images/home/item-4.png" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
              <span class="d-flex align-items-center justify-content-center rounded-full">
                <img src="../assets/svg/heart-red.svg" alt="icon">
              </span>
            </div>
            <div class="content">
              <h4>Hanalei Bay</h4>
              <p class="d-flex align-items-center gap-04 location">
                <img src="../assets/svg/map-marker.svg" alt="icon">
                Hawaii
              </p>
              <div class="price d-flex align-items-center justify-content-between">
                <h3>$235</h3>
                <p class="d-flex align-items-center gap-04">
                  <img src="../assets/svg/star-yellow.svg" alt="icon">
                  4.4 <span>(32)</span>
                </p>
              </div>
            </div>
          </a>
        </div> --}}

        <!-- item-5 -->
        {{-- <div class="place-card mix recommendation popular">
          <a href="vacation-details.html">
            <div class="image position-relative">
              <img src="../assets/images/home/item-5.png" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
              <span class="d-flex align-items-center justify-content-center rounded-full">
                <img src="../assets/svg/heart-black.svg" alt="icon">
              </span>
            </div>
            <div class="content">
              <h4>Tahiti Beach</h4>
              <p class="d-flex align-items-center gap-04 location">
                <img src="../assets/svg/map-marker.svg" alt="icon">
                Polynesia, French
              </p>
              <div class="price d-flex align-items-center justify-content-between">
                <h3>$235</h3>
                <p class="d-flex align-items-center gap-04">
                  <img src="../assets/svg/star-yellow.svg" alt="icon">
                  4.4 <span>(32)</span>
                </p>
              </div>
            </div>
          </a>
        </div> --}}

        <!-- item-6 -->
        {{-- <div class="place-card mix frequent popular">
          <a href="vacation-details.html">
            <div class="image position-relative">
              <img src="../assets/images/home/item-6.png" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
              <span class="d-flex align-items-center justify-content-center rounded-full">
                <img src="../assets/svg/heart-black.svg" alt="icon">
              </span>
            </div>
            <div class="content">
              <h4>St. Lucia Mountain</h4>
              <p class="d-flex align-items-center gap-04 location">
                <img src="../assets/svg/map-marker.svg" alt="icon">
                Polynesia, French
              </p>
              <div class="price d-flex align-items-center justify-content-between">
                <h3>$235</h3>
                <p class="d-flex align-items-center gap-04">
                  <img src="../assets/svg/star-yellow.svg" alt="icon">
                  4.4 <span>(32)</span>
                </p>
              </div>
            </div>
          </a>
        </div> --}}

      </div>
    </section>
    <!-- all-place end -->
  </main>

  <!-- bottom navigation start -->
  <footer class="bottom-nav">
    <ul class="d-flex align-items-center justify-content-around w-100 h-100">
      <li>
        <a href="{{ url('/home') }}">
          <img src="{{ asset('assets/trainerSvg/svg/bottom-nav/home-active.svg') }}" alt="home">
        </a>
      </li>
      <li>
        <a href="{{ url('/explore') }}">
          <img src="{{ asset('assets/trainerSvg/svg/bottom-nav/category.svg') }}" alt="category">
        </a>
      </li>
      <li>
        <a href="{{ url('/pembayaran') }}">
          <img src="{{ asset('assets/trainerSvg/svg/bottom-nav/ticket.svg') }}" alt="ticket">
        </a>
      </li>
      <li>
        <a href="{{ url('/modul') }}">
          <img src="{{ asset('assets/trainerSvg/svg/bottom-nav/heart.svg') }}" alt="heart">
        </a>
      </li>
      <li>
        <a href="{{ url('/user') }}">
          <img src="{{ asset('assets/trainerSvg/svg/bottom-nav/profile.svg') }}" alt="profile">
        </a>
      </li>
    </ul>
  </footer>
  <!-- bottom navigation end -->

</body>
@endsection