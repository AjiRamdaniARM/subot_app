@extends('trainer.layouts.main')
@section('children')

<body class="scrollbar-hidden">

  <main>
    <!-- page-title -->
    <div class="page-title">
      <button type="button" onclick="window.location.href='{{ url('/home') }}'" class="back-btn back-page-btn d-flex align-items-center justify-content-center rounded-full">
        <img src="{{ asset('assets/trainerSvg/svg/arrow-left-black.svg') }}" alt="arrow">
      </button>
      <h3 class="main-title">History</h3>
    </div>

    <!-- notification start -->
    <section class="notification">
      <!-- today -->
      <div class="mt-24">
        <ul>
          <li class="d-flex gap-12">
            <div class="image d-flex align-items-center justify-content-center rounded-full overflow-hidden shrink-0">
              <img src="{{ asset('assets/img/history.gif') }}" alt="icon">
            </div>
            <div>
              <p class="pb-8">Jadwal Adzkia 1 telah successful</p>
              <small class="d-block">27 Oktober 2005</small>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <!-- notification end -->
  </main>

  </body>
  @endsection