@extends('trainer.layouts.main')
@section('children')

<body class="scrollbar-hidden">

  <main class="user-profile">
    <!-- profile-heading start -->
    <section class="user-profile-heading d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center gap-12">
        <div class="image rounded-full overflow-hidden shrink-0">
          <img src="{{ asset('assets/img/robot.png') }}" alt="avatar" class="img-fluid w-100 h-100 object-fit-cover">
        </div>
        <div>
          <h3>Aziz Ramadhan</h3>
          <p class="d-flex align-items-center gap-04 location mt-04">
            <img src="{{ asset('assets/trainerSvg/svg/map-marker.svg') }}" alt="icon">
            Sukabumi
          </p>
        </div>
      </div>

      <a href="{{ url('/useredit') }}" class="edit-info">
        <img src="{{ asset('assets/trainerSvg/svg/edit.svg') }}" alt="icon">
      </a>
    </section>
    <br>
    <style>
      .py-32 {
        margin-bottom: 5px; /* Sesuaikan nilai margin sesuai kebutuhan */
      }
    </style>
    
<!-- Alamat-heading end -->
<div class="py-16">
  <button type="button" class="btn-primary-outline btn-with-hover" data-bs-toggle="modal" data-bs-target="#alamat">Alamat</button>
</div>
<!-- Alamat-heading end -->

<style>
  .btn-with-hover {
    transition: transform 0.2s ease-in-out;
  }
  
  .btn-with-hover:hover {
    transform: scale(1.1);
  }
</style>

    
<!-- Lulusan-heading end -->
<div class="py-16">
  <button type="button" class="btn-primary-outline btn-with-hover" data-bs-toggle="modal" data-bs-target="#Lulusan">Lulusan</button>
</div>
<!-- Lulusan-heading end -->

<style>
  .btn-with-hover {
    transition: transform 0.2s ease-in-out;
  }
  
  .btn-with-hover:hover {
    transform: scale(1.1);
  }
</style>


<!-- Telephone-heading end -->
<div class="py-16">
  <button type="button" class="btn-primary-outline btn-with-hover" data-bs-toggle="modal" data-bs-target="#Telephone">Telephone</button>
</div>
<!-- Telephone-heading end -->

<style>
  .btn-with-hover {
    transition: transform 0.2s ease-in-out;
  }
  
  .btn-with-hover:hover {
    transform: scale(1.1);
  }
</style>

    
    <!-- Foto Ktp-heading end -->
    <div class="py-16">
  <button type="button" class="btn-primary-outline" data-bs-toggle="modal" data-bs-target="#fotoktp">Foto Ktp</button>
    </div>
    <!-- Foto Ktp-heading end -->

    <style>
      .btn-primary-outline {
        background-color: transparent;
        color: rgb(21, 83, 255);
        border: 2px solid rgb(117, 117, 117);
        padding: 10px 20px;
        transition: transform 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
      }
    
      .btn-primary-outline:hover {
        transform: scale(1.1);
        color: white;
        background-color: rgb(0, 89, 255);
        border-color: rgb(255, 255, 255);
      }
    </style>

    <!-- Foto Ttd-heading end -->
    <div class="py-16">
      <button type="button" class="btn-primary-outline" data-bs-toggle="modal" data-bs-target="#ttd">Tanda Tangan</button>
    </div>
    <!--Foto Ttd-heading end-->
    
    <!-- logout button start -->
    <div class="py-16">
    <button type="button" class="btn-primary-outline" style="background-color: rgb(190, 0, 0); color: white; font-weight: 600;" data-bs-toggle="modal" data-bs-target="#logOutModal">Log Out</button>
    </div>
    <!-- logout button end -->


    
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
          <img src="{{ asset('assets/trainerSvg/svg/bottom-nav/profile-active.svg') }}" alt="profile">
        </a>
      </li>
    </ul>
  </footer>
  <!-- bottom navigation end -->

  <!-- edit-Alamat modal start -->
  <div class="modal fade logOutModal modalBg" id="alamat" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header justify-content-end">
          <button type="button" class="close-btn d-flex align-items-center justify-content-center rounded-full" data-bs-dismiss="modal" aria-label="Close">
            <img src="{{ asset('assets/trainerSvg/svg/close-black.svg') }}" alt="icon">
          </button>
        </div>
        <div class="modal-body text-center">
          <h4 class="mb-32">Apakah Anda Ingin Edit Alamat ?</h4>
          <ul>
            <li class="mb-4">
              <input type="text" id="cancelInput" class="form-control" placeholder="Jl.Pabuaran Rt.04/01 Kota Sukabumi">
            </li>
            
            <li>
              <button type="button" class="log-out" data-bs-dismiss="modal" aria-label="Close" style="background-color: rgb(41, 116, 255); color: white;">Confirm</button>
            </li>            
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- edit-Alamat modal start -->

  <!-- edit-Profile modal start -->
  <div class="modal fade logOutModal modalBg" id="Lulusan" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header justify-content-end">
          <button type="button" class="close-btn d-flex align-items-center justify-content-center rounded-full" data-bs-dismiss="modal" aria-label="Close">
            <img src="{{ asset('assets/trainerSvg/svg/close-black.svg') }}" alt="icon">
          </button>
        </div>
        <div class="modal-body text-center">
          <h4 class="mb-32">Apakah Anda Ingin Edit Lulusan ?</h4>
          <ul>
            <li class="mb-4">
              <input type="text" id="cancelInput" class="form-control" placeholder="Universitas Gadjah Mada">
            </li>
            
            <li>
              <button type="button" class="log-out" data-bs-dismiss="modal" aria-label="Close" style="background-color: rgb(41, 116, 255); color: white;">Confirm</button>
            </li>            
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- edit-Profile modal start -->

  <!-- edit-Telephone modal start -->
  <div class="modal fade logOutModal modalBg" id="Telephone" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header justify-content-end">
          <button type="button" class="close-btn d-flex align-items-center justify-content-center rounded-full" data-bs-dismiss="modal" aria-label="Close">
            <img src="{{ asset('assets/trainerSvg/svg/close-black.svg') }}" alt="icon">
          </button>
        </div>
        <div class="modal-body text-center">
          <h4 class="mb-32">Apakah Anda Ingin Edit Telephone ?</h4>
          <ul>
            <li class="mb-4">
              <input type="text" id="cancelInput" class="form-control" placeholder="0878 4053 7401">
            </li>
            
            <li>
              <button type="button" class="log-out" data-bs-dismiss="modal" aria-label="Close" style="background-color: rgb(41, 116, 255); color: white;">Confirm</button>
            </li>            
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- edit-Telephone modal start -->

  <!-- edit-Fotoktp modal start -->
  <div class="modal fade logOutModal modalBg" id="fotoktp" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header justify-content-end">
          <button type="button" class="close-btn d-flex align-items-center justify-content-center rounded-full" data-bs-dismiss="modal" aria-label="Close">
            <img src="{{ asset('assets/trainerSvg/svg/close-black.svg') }}" alt="icon">
          </button>
        </div>
        <div class="modal-body text-center">
          <h4 class="mb-32">Apakah Anda Ingin Edit Foto Ktp ?</h4>
          <ul>
            <li class="mb-4">
              <img src="{{ asset('assets/img/Ochobot aesthetic.jpeg') }}" alt="Small Image" class="rounded-circle" style="width: 100px; height: 100px;">
            </li>
            
            <li>
              <button type="button" class="log-out" data-bs-dismiss="modal" aria-label="Close" style="background-color: rgb(41, 116, 255); color: white;">Confirm</button>
            </li>            
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- edit-Fotoktp modal start -->

<!-- edit-ttd modal start -->
  <div class="modal fade logOutModal modalBg" id="ttd" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header justify-content-end">
        <button type="button" class="close-btn d-flex align-items-center justify-content-center rounded-full" data-bs-dismiss="modal" aria-label="Close">
          <img src="{{ asset('assets/trainerSvg/svg/close-black.svg') }}" alt="icon">
        </button>
      </div>
      <div class="modal-body text-center">
        <h4 class="mb-32">Apakah Anda Ingin Edit Foto Ttd ?</h4>
        <ul>
          <li class="mb-4">
            <img src="{{ asset('assets/img/Ochobot aesthetic.jpeg') }}" alt="Small Image" class="rounded-circle" style="width: 100px; height: 100px;">
          </li>
          
          <li>
            <button type="button" class="log-out" data-bs-dismiss="modal" aria-label="Close" style="background-color: rgb(41, 116, 255); color: white;">Confirm</button>
          </li>            
        </ul>
      </div>
    </div>
  </div>
  </div>
<!-- edit-ttd modal end -->

  <!-- edit-LogOut modal start -->
  <div class="modal fade logOutModal modalBg" id="logOutModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header justify-content-end">
          <button type="button" class="close-btn d-flex align-items-center justify-content-center rounded-full" data-bs-dismiss="modal" aria-label="Close">
            <img src="{{ asset('assets/trainerSvg/svg/close-black.svg') }}" alt="icon">
          </button>
        </div>
        <div class="modal-body text-center">
          <h4 class="mb-32">Are you sure you want to logout?</h4>
          <ul>
            <li class="mb-04">
              <button type="button" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
            </li>
            <li>
              <button type="button" class="log-out" data-bs-dismiss="modal" aria-label="Close">Log Out</button>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- edit-LogOut modal start -->
</body>
@endsection