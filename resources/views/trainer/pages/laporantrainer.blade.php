@extends('trainer.layouts.main')
@section('children')

<body class="scrollbar-hidden">

  <main class="booking-main book-hotel">
    <!-- page-title -->
    <div class="page-title">
      <button type="button" onclick="window.location.href='{{ url('/home/absen') }}'" class="back-btn back-page-btn d-flex align-items-center justify-content-center rounded-full">
        <img src="{{ asset('assets/trainerSvg/svg/arrow-left-black.svg') }}" alt="arrow">
      </button>
      <h3 class="main-title">LAPORAN TRAINER</h3>
    </div>

    <div class="details-body">
      <!-- customer-info start -->
      <section class="customer-info pb-12">
        <div class="title mb-16">
          <h4>Trainer</h4>
        </div>
  
        <ul>
          <li class="d-flex align-items-center justify-content-between">
            <p>Name</p>
            <p>Aziz Ramadhan</p>
          </li>
          <li class="d-flex align-items-center justify-content-between">
            <p>Email</p>
            <p>Azizramadhan5000@gmail.com</p>
          </li>
        </ul>
      </section>
      <!-- customer-info end -->
  
      <!-- order-info start -->
      {{-- <section class="order-info py-12">
        <div class="title mb-16">
          <h4>Order Info</h4>
        </div>
  
   
        <div class="item d-flex align-items-center gap-16 w-100">
          <div class="image shrink-0 overflow-hidden radius-8">
            <img src="{{ asset('assets/trainerImages/images/service-loc/loc-1.png') }} alt="Place class="img-fluid w-100 h-100 object-fit-cover">
          </div>
  
          <div class="content flex-grow">
            <h4>The Lalit New Delhi</h4>
            <p class="d-flex align-items-center gap-04 location mt-04">
              <img src="{{ asset('assets/trainerSvg/svg/map-marker.svg') }}" alt="icon">
              Uttar Pradesh, India 
            </p>
            <p class="rating d-flex align-items-center gap-04 mt-16">
              <img src="{{ asset('assets/trainerSvg/svg/star-yellow.svg') }}" alt="icon">
              4.4 <span>(41)</span>
            </p>
          </div>
        </div>


        <div class="room-type mt-16 d-flex align-items-center justify-content-between">
          <p>Type Room</p>
          <p>Presidential Suite</p>
        </div>
      </section> --}}
      <!-- order-info end -->
  
      <!-- facilities start -->
      {{-- <section class="facilities py-12">
      
        <div class="title d-flex align-items-center justify-content-between">
          <h4 class="shrink-0">Common Facilities</h4>
          <button type="button" class="shrink-0 d-inline-block" data-bs-toggle="modal" data-bs-target="#serviceModal">See All</button>
        </div>
  
        <div class="grid gap-24">
       
          <div class="item text-center">
            <div class="icon d-flex align-items-center justify-content-center rounded-full">
              <img src="{{ asset('assets/trainerSvg/svg/wind.svg') }}" alt="icon">
            </div>
            <p>Ac</p>
          </div>
  
       
          <div class="item text-center">
            <div class="icon d-flex align-items-center justify-content-center rounded-full">
              <img src="{{ asset('assets/trainerSvg/svg/building.svg') }}" alt="icon">
            </div>
            <p>Restaurant</p>
          </div>
  
        
          <div class="item text-center">
            <div class="icon d-flex align-items-center justify-content-center rounded-full">
              <img src="{{ asset('assets/trainerSvg/svg/water.svg') }}" alt="icon">
            </div>
            <p>Swimming Pool</p>
          </div>
  
        
          <div class="item text-center">
            <div class="icon d-flex align-items-center justify-content-center rounded-full">
              <img src="{{ asset('assets/trainerSvg/svg/24-support.svg') }}" alt="icon">
            </div>
            <p>24-Hours Front Desk</p>
          </div>
  
        </div>
      </section> --}}
      <!-- facilities end -->
  
      <!-- search start -->
      <section class="search pt-12">
        <!-- title -->
        <div class="title d-flex align-items-center justify-content-between">
          <h4 class="shrink-0">Laporan</h4>
        </div>
  
        <form action="#">
          <div class="grid">
  
            <!-- Tanggal -->
            <div>
              <p class="pb-8">Tanggal</p>
              <label for="hcindate" class="w-100 d-flex align-items-center gap-8 radius-24" data-bs-toggle="modal" data-bs-target="#checkInModal">
                <input type="text" id="hcindate" placeholder="Date" class="input-field">
                <span class="icon shrink-0">
                </span>
              </label>
            </div>
  
            <!-- Jam -->
            <div>
              <p class="pb-8">Jam</p>
              <label for="hcoutdate" class="w-100 d-flex align-items-center gap-8 radius-24" data-bs-toggle="modal" data-bs-target="#checkOutModal">
                <input type="text" id="hcoutdate" placeholder="Jam" class="input-field">
                <span class="icon shrink-0">
                </span>
              </label>
            </div>
            <!--respon anak-->
            <div>
              <p class="pb-8">Respon Anak</p>
              <label for="hcoutdate" class="w-100 d-flex align-items-center gap-8 radius-24" data-bs-toggle="modal" data-bs-target="">
                <input type="text" id="hcoutdate" placeholder="Respon Anak" class="input-field">
                <span class="icon shrink-0">
                </span>
              </label>
            </div>
            <!--Materi-->
            <div>
              <p class="pb-8">Materi</p>
              <label for="hcoutdate" class="w-100 d-flex align-items-center gap-8 radius-24" data-bs-toggle="modal" data-bs-target="">
                <input type="text" id="hcoutdate" placeholder="Materi" class="input-field">
                <span class="icon shrink-0">
                </span>
              </label>
            </div>
            <!--TTD-->
            <div>
              <p class="pb-8">Tanda Tangan</p>
              <div class="w-100 d-flex align-items-center gap-8 radius-24">
                <select id="hcoutdate" class="input-field">
                  <option value="">Pilih Tanda Tangan</option>
                  <option value="tanda1">Tanda Tangan 1</option>
                  <option value="tanda2">Tanda Tangan 2</option>
                  <!-- Tambahkan opsi dropdown sesuai kebutuhan -->
                </select>
                <span class="icon shrink-0">
                  <!-- Tambahkan ikon atau elemen visual lainnya di sini jika diperlukan -->
                </span>
              </div>
            </div>            
          </div>
        </form>
      </section>
      <!-- search end -->
  
      <!-- pay-btn start -->
      <div class="pay-btn mt-64">
        <a href="/home" class="btn-primary">Continue</a>
      </div>
    </div>
  </main>

  <!-- checkin date-modal start -->
  <div class="modal fade checkInModal dateModal modalBg" id="checkInModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header justify-content-center">
          <h1 class="modal-title" id="checkInModalLabel">Date Check In</h1>
        </div>
        <div class="modal-body">
          <input type="text" id="checkInDateInput"/>

          <div class="btns d-flex align-items-center gap-16">
            <button type="button" class="radius-20 w-50 cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
            <button type="button" class="radius-20 w-50 apply-btn" data-bs-dismiss="modal" aria-label="Close">Apply</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- checkin date-modal end -->

  <!-- checkout date-modal start -->
  <div class="modal fade checkOutModal dateModal modalBg" id="checkOutModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header justify-content-center">
          <h1 class="modal-title" id="checkOutModalLabel">Date Check Out</h1>
        </div>
        <div class="modal-body">
          <input type="text" id="checkOutDateInput"/>

          <div class="btns d-flex align-items-center gap-16">
            <button type="button" class="radius-20 w-50 cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
            <button type="button" class="radius-20 w-50 apply-btn" data-bs-dismiss="modal" aria-label="Close">Apply</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- checkout date-modal end -->

  <!-- service modal start -->
  <div class="modal fade serviceModal bottomModal modalBg" id="serviceModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="modal-close rounded-full" data-bs-dismiss="modal" aria-label="Close">
            <img src="../assets/svg/close-black.svg" alt="Close">
          </button>
          <h1 class="modal-title">All Facilities</h1>
        </div>
        <div class="modal-body">
          <div class="facilities">
            <div class="grid gap-24">
              <!-- item 1 -->
              <div class="item text-center">
                <div class="icon d-flex align-items-center justify-content-center rounded-full">
                  <img src="../assets/svg/wind.svg" alt="icon">
                </div>
                <p>Ac</p>
              </div>

              <!-- item 2 -->
              <div class="item text-center">
                <div class="icon d-flex align-items-center justify-content-center rounded-full">
                  <img src="../assets/svg/building.svg" alt="icon">
                </div>
                <p>Restaurant</p>
              </div>

              <!-- item 3 -->
              <div class="item text-center">
                <div class="icon d-flex align-items-center justify-content-center rounded-full">
                  <img src="../assets/svg/water.svg" alt="icon">
                </div>
                <p>Swimming Pool</p>
              </div>

              <!-- item 4 -->
              <div class="item text-center">
                <div class="icon d-flex align-items-center justify-content-center rounded-full">
                  <img src="../assets/svg/24-support.svg" alt="icon">
                </div>
                <p>24-Hours Front Desk</p>
              </div>

              <!-- item 4 -->
              <div class="item text-center">
                <div class="icon d-flex align-items-center justify-content-center rounded-full">
                  <img src="../assets/svg/building.svg" alt="icon">
                </div>
                <p>Modern Room</p>
              </div>

              <!-- item 2 -->
              <div class="item text-center">
                <div class="icon d-flex align-items-center justify-content-center rounded-full">
                  <img src="../assets/svg/24-support.svg" alt="icon">
                </div>
                <p>24-Hours Security</p>
              </div>

              <!-- item 3 -->
              <div class="item text-center">
                <div class="icon d-flex align-items-center justify-content-center rounded-full">
                  <img src="../assets/svg/water.svg" alt="icon">
                </div>
                <p>Beautiful View</p>
              </div>

              <!-- item 4 -->
              <div class="item text-center">
                <div class="icon d-flex align-items-center justify-content-center rounded-full">
                  <img src="../assets/svg/wind.svg" alt="icon">
                </div>
                <p>Open Space</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  </body>
@endsection