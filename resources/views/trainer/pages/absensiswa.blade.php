@extends('trainer.layouts.main')
@section('children')

<main class="tour-guide">
  <!-- page-title -->
  <div class="page-title">
    <button type="button" onclick="window.location.href='{{ url('/home') }}'" class="back-btn back-page-btn d-flex align-items-center justify-content-center rounded-full">
      <img src="{{ asset('assets/trainerSvg/svg/arrow-left-black.svg') }}" alt="arrow">
    </button>
    <h3 class="main-title">Daftar Siswa</h3>
  </div>

  <section class="guide px-24 pb-24">
    <ul>
      <!-- guide card 1 -->
      <li>
        <div class="d-flex gap-16 item w-fit shrink-0">
          <div class="image position-relative shrink-0">
            <img src="{{ asset('assets/img/Ochobot aesthetic.jpeg') }}" alt="guide" class="guide-img object-fit-cover img-fluid radius-12">
            <div class="rating d-flex align-items-center gap-04 w-fit">
            </div>
          </div>

          <style>
            /* Gaya untuk checkbox */
            .custom-radio {
              display: inline-block;
              cursor: pointer;
            }
            .custom-radio input {
              display: none; /* Sembunyikan input asli */
            }
            .custom-radio .radio-dot {
              position: relative;
              display: inline-block;
              width: 18px;
              height: 18px;
              border-radius: 50%;
              border: 2px solid #007bff;
              margin-right: 8px;
            }
            .custom-radio input:checked + .radio-dot::after {
              content: "";
              position: absolute;
              top: 4px;
              left: 4px;
              width: 10px;
              height: 10px;
              border-radius: 50%;
              background-color: #007bff;
            }
          </style>

          <div class="content">
            <h4>Aziz Ramadhan</h4>
            <h5>Kelas (3A)</h5>
            <div class="d-flex justify-content-end align-items-center gap-16">
              <label class="custom-radio">
                <input type="radio" name="attendance" onchange="setAttendance('hadir')">
                <span class="radio-dot"></span> Hadir
              </label>
              <label class="custom-radio">
                <input type="radio" name="attendance" onchange="setAttendance('tidak hadir')">
                <span class="radio-dot"></span> Tidak
              </label>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </section>
  <nav class="navbar fixed-bottom navbar-light">
    <div class="container-fluid justify-content-center">
      <a href="{{ url('/home/absen') }}" class="btn btn-primary btn-lg">Selesai</a>
    </div>
  </nav>  
  
</main>
@endsection
