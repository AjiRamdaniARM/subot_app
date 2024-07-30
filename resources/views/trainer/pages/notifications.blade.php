@extends('trainer.layouts.main')
@section('children')

<body class="scrollbar-hidden">

  <main>
    <!-- page-title -->
    <div class="page-title">
      <button type="button" onclick="window.location.href='{{ url('/home') }}'" class="back-btn back-page-btn d-flex align-items-center justify-content-center rounded-full">
        <img src="{{ asset('assets/trainerSvg/svg/arrow-left-black.svg') }}" alt="arrow">
      </button>
      <h3 class="main-title">Notification</h3>
    </div>

    <!-- notification start -->
    <section class="notification">
      <!-- today -->
      <div>
        <h3 class="mb-32">Today</h3>
        <ul>
          <li class="d-flex gap-12">
            <div class="image d-flex align-items-center justify-content-center rounded-full overflow-hidden shrink-0">
              <img src="{{ asset('assets/img/notif.gif') }}" alt="person" class="img-fluid h-100 w-100 object-fit-cover">
            </div>
            <div>
              <p class="pb-8">Jadwal Hari Ini Di Adzkia 1</p>
              <small class="d-block">1 Jam Yang Lalu</small>
            </div>
          </li>
        </ul>
      </div>
      <div class="mt-24">
        <h3 class="mb-32">Yesterday</h3>

        <ul>
          <li class="d-flex gap-12">
            <div class="image d-flex align-items-center justify-content-center rounded-full overflow-hidden shrink-0">
              <img src="{{ asset('assets/img/notif.gif') }}" alt="icon">
            </div>
            <div>
              <p class="pb-8">Jadwal Hari Ini Di Sd Aisyiyah</p>
              <small class="d-block">1 day Ago</small>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <!-- notification end -->
  </main>

  </body>
  @endsection