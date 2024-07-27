@extends('trainer.layouts.main')
@section('children')

  <main>
    <!-- page-title -->
    <div class="page-title">
      <button type="button" onclick="window.location.href='{{ url('/home') }}'" class="back-btn back-page-btn d-flex align-items-center justify-content-center rounded-full">
        <img src="{{ asset('assets/trainerSvg/svg/arrow-left-black.svg') }}" alt="arrow">
      </button>
      <h3 class="main-title">Message</h3>
    </div>

    <!-- search start -->
    <section class="message-main search px-24">
      <form action="#">
        <div class="message-search w-100 d-flex align-items-center gap-8 radius-24">
          <img src="{{ asset('assets/trainerSvg/svg/search.svg') }}" alt="search" class="shrink-0">
          <input type="search" class="input-search input-field" placeholder="Search...">
          <div class="filter shrink-0">
            <button type="button" class="d-flex align-items-center">
              <img src="{{ asset('assets/trainerSvg/svg/filter-black.svg') }}" alt="filter">
            </button>
          </div>
        </div>
      </form>
    </section>
    <!-- search end -->

    <section class="message mt-24">
      <!-- item 1 -->
      <div class="single-chat position-relative">
        <a href="{{ url('/chat') }}" class="single-main d-flex align-items-center justify-content-between gap-04 radius-12">
          <div class="shrink-0 d-flex align-items-center gap-12">
            <div class="image shrink-0 position-relative">
              <img src="{{ asset('assets/trainerImages/images/chat/img-1.png') }}" alt="Avatar" class="img-fluid w-100 h-100 object-fit-cover rounded-full">
              <small class="active-dot"></small>
            </div>
  
            <div>
              <h4>Bunda Kennet</h4>
              <p>Hallo Kak, Apakah Les Sudah Selesai?...</p>
            </div>
          </div>
  
          <div class="text-end">
            <h5 class="pb-8">10:20</h5>
            <span class="d-inline-block rounded-full text-center">2</span>
          </div>
        </a>

        <!-- trash -->
        <button type="button" class="trash">
          <img src="{{ asset('assets/trainerSvg/svg/trash-red.svg') }}" alt="trash">
        </button>
      </div>
    </section>

    <!-- add button -->
    <button type="button" class="add-chat d-flex align-items-center justify-content-center rounded-full">
      <img src="{{ asset('assets/trainerSvg/svg/plus-white.svg') }}" alt="plus">
    </button>
  </main>
</body>
@endsection