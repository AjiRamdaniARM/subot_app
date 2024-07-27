@extends('trainer.layouts.main')
@section('children')

<body class="scrollbar-hidden">
  
  <main class="tour-guide">
    <!-- page-title -->
    <div class="page-title">
      <button type="button" onclick="window.location.href='{{ url('/home') }}' "class="back-btn back-page-btn d-flex align-items-center justify-content-center rounded-full">
        <img src="{{ asset('assets/trainerSvg/svg/arrow-left-black.svg') }}" alt="arrow">
      </button>
      <h3 class="main-title">JADWAL HARI INI :  </h3>
    </div>

    <section class="budget px-24 pb-24">
      <ul>
        <!-- item 1 -->
        <li>
          <a href="{{ url('/home/absen') }}" class="d-flex align-items-center gap-12">
            <div class="image shrink-0 overflow-hidden radius-8">
              <img src="{{ asset('assets/img/absen.gif') }}" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
            </div>

            <div class="content shrink-0 d-flex align-items-center gap-12 justify-content-between flex-grow">
              <div>
                <h4>SD ADZKIA 1</h4>
                <h5>08.00 - 10.00</h5>
                <p class="d-flex align-items-center gap-8 location">
                  20 Agustus 2024 
                </p>
              </div>
              <p class="price"><span>Basic 1 | Box 1</span></p>
            </div>
          </a>
        </li>

        <!-- item 2 -->
        <li>
          <a href="{{ url('/home/absen') }}" class="d-flex align-items-center gap-12">
            <div class="image shrink-0 overflow-hidden radius-8">
              <img src="{{ asset('assets/img/absen.gif') }}" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
            </div>
  
            <div class="content shrink-0 d-flex align-items-center gap-12 justify-content-between flex-grow">
              <div>
                <h4>SD AISYIYAH</h4>
                <h5>16.00-17.30</h5>
                <p class="d-flex align-items-center gap-8 location">
                  21 Agustus 2024
                </p>
              </div>
              <p class="price"><span>Basic 2 | Box 2</span></p>
            </div>
          </a>
        </li>

        <!-- item 3 -->
        <li>
          <a href="{{ url('/home/absen') }}" class="d-flex align-items-center gap-12">
            <div class="image shrink-0 overflow-hidden radius-8">
              <img src="{{ asset('assets/img/absen.gif') }}" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
            </div>
  
            <div class="content shrink-0 d-flex align-items-center gap-12 justify-content-between flex-grow">
              <div>
                <h4>PRIVAT CICI</h4>
                <h5>08.00-10.00</h5>
                <p class="d-flex align-items-center gap-8 location">
                  22 Agustus 2024
                </p>
              </div>
              <p class="price"><span>Basic 2 | Box 4</span></p>
            </div>
          </a>
        </li>

        <!-- item 4 -->
        <li>
          <a href="{{ url('/home/absen') }}" class="d-flex align-items-center gap-12">
            <div class="image shrink-0 overflow-hidden radius-8">
              <img src="{{ asset('assets/img/absen.gif') }}" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
            </div>
  
            <div class="content shrink-0 d-flex align-items-center gap-12 justify-content-between flex-grow">
              <div>
                <h4>SD BPK PENABUR</h4>
                <h5>13.00 14.30</h5>
                <p class="d-flex align-items-center gap-8 location">
                  23 Agustus 2024
                </p>
              </div>
              <p class="price"><span>Basic 1 | Box 2</span></p>
            </div>
          </a>
        </li>

        <!-- item 5 -->
        <li>
          <a href="{{ url('/home/absen') }}" class="d-flex align-items-center gap-12">
            <div class="image shrink-0 overflow-hidden radius-8">
              <img src="{{ asset('assets/img/absen.gif') }}" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
            </div>
  
            <div class="content shrink-0 d-flex align-items-center gap-12 justify-content-between flex-grow">
              <div>
                <h4>TKK PENABUR </h4>
                <h5>10.00-11.30</h5>
                <p class="d-flex align-items-center gap-8 location">
                  24 Agustus 2024 
                </p>
              </div>
              <p class="price"><span>Basic 2 | Box 1</span></p>
            </div>
          </a>
        </li>

        <!-- item 6 -->
        <li>
          <a href="{{ url('/home/absen') }}" class="d-flex align-items-center gap-12">
            <div class="image shrink-0 overflow-hidden radius-8">
              <img src="{{ asset('assets/img/absen.gif') }}" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
            </div>
  
            <div class="content shrink-0 d-flex align-items-center gap-12 justify-content-between flex-grow">
              <div>
                <h4>SD MARDI WALUYA</h4>
                <h5>14.00-15.30</h5>
                <p class="d-flex align-items-center gap-8 location">
                  25 Agustus 2024
                </p>
              </div>
              <p class="price"><span>Basic 1 | Box 2</span></p>
            </div>
          </a>
        </li>
      </ul>
    </section>
  </main>

  </body>
@endsection