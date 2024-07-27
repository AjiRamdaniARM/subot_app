@extends('trainer.layouts.main')
@section('children')

<body class="scrollbar-hidden">


  <main class="explore wishlist">
    <!-- page-title -->
    <div class="page-title">
      <h3 class="main-title">Jadwal Bulan Juli</h3>
    </div>
  </main>

  <!-- bottom navigation start -->
  <footer class="bottom-nav">
    <ul class="d-flex align-items-center justify-content-around w-100 h-100">
      <li>
        <a href="{{ url('/home') }}">
          <img src="{{ asset('assets/trainerSvg/svg/bottom-nav/home.svg') }}" alt="home">
        </a>
      </li>
      <li>
        <a href="{{ url('/explore') }}">
          <img src="{{ asset('assets/trainerSvg/svg/bottom-nav/category.svg') }}" alt="category">
        </a>
      </li>
      <li>
        <a href="ticket-booked.html">
          <img src="{{ asset('assets/trainerSvg/svg/bottom-nav/ticket.svg') }}" alt="ticket">
        </a>
      </li>
      <li>
        <a href="wishlist.html">
          <img src="{{ asset('assets/trainerSvg/svg/bottom-nav/heart-active.svg') }}" alt="heart">
        </a>
      </li>
      <li>
        <a href="profile/user-profile.html">
          <img src="{{ asset('assets/trainerSvg/svg/bottom-nav/profile.svg') }}" alt="profile">
        </a>
      </li>
    </ul>
  </footer>
</body>
@endsection