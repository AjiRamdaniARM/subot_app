@extends('trainer.layouts.main')
@section('children')

<body class="scrollbar-hidden">

  <main class="ticket-detail">
    <!-- page-title -->
    <div class="page-title">
      <button type="button" onclick="window.location.href='{{ url('/pembayaran') }}' "class="back-btn back-page-btn d-flex align-items-center justify-content-center rounded-full">
        <img src="{{ asset('assets/trainerSvg/svg/arrow-left-black.svg') }}" alt="arrow">
      </button>
      <h3 class="main-title">Invoice</h3>
    </div>

    <div class="details-body">
      <!-- invoice number -->
      <div class="invoice-number d-flex align-items-center justify-content-between pb-20">
        <p>INV1273436347</p>
        <span>Lunasi !</span>
      </div>

      <!-- order-card start -->
      <section class="order-card py-12">  
        <!-- order item -->
        <div class="item d-flex align-items-center gap-16 w-100">
          <div class="image shrink-0 overflow-hidden radius-8">
            <img src="{{ asset('assets/img/payment.gif') }}" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
          </div>
  
          <div class="content flex-grow">
            <h4>Eskul Sdit Adzkia 2</h4>
            <p class="d-flex align-items-center gap-04 location mt-04">
              <img src="{{ asset('assets/trainerSvg/svg/map-marker.svg') }}" alt="icon">
              Sukabumi 
            </p>
          </div>
        </div>
      </section>
      <!-- order-info end -->

      <!-- customer-info start -->
      <section class="customer-info py-12">
        <div class="title mb-16">
          <h4>Customer Info</h4>
        </div>
  
        <ul>
          <li class="d-flex align-items-center justify-content-between">
            <p>Name</p>
            <p>Sd It Adzkia 2</p>
          </li>
          <li class="d-flex align-items-center justify-content-between">
            <p>Email</p>
            <p>Sdadzkia2@gmail.com</p>
          </li>
          <li class="d-flex align-items-center justify-content-between">
            <p>Payment</p>
            <p>Bank Bsi</p>
          </li>
          <li class="d-flex align-items-center justify-content-between">
            <p>Status</p>
            <p class="success">Success</p>
          </li>
        </ul>
      </section>
      <!-- customer-info end -->

      <!-- order-info start -->
      <section class="customer-info pt-12 pb-24">
        <div class="title mb-16">
          <h4>Order Info</h4>
        </div>
  
        <ul>
          <li class="d-flex align-items-center justify-content-between">
            <p>length of stay</p>
            <p>3 days 2 nights</p>
          </li>
          <li class="d-flex align-items-center justify-content-between">
            <p>Check In</p>
            <p>June 12, 2022</p>
          </li>
          <li class="d-flex align-items-center justify-content-between">
            <p>Check Out</p>
            <p>June 14, 2022</p>
          </li>
        </ul>
      </section>
      <!-- order-info end -->

      <!-- total-price -->
      <div class="price border-t d-flex align-items-center justify-content-between pt-24 pb-12">
        <p>Total</p>
        <p><span>Rp. 200.000</span></p>
      </div>

      <!-- promo-code -->
      {{-- <div class="price d-flex align-items-center justify-content-between py-12">
        <p>Code Promo</p>
        <p><span>HEZORKS</span></p>
      </div> --}}

      <!-- promo-price -->
      {{-- <div class="price promo-price border-b pb-24 promo-price d-flex align-items-center justify-content-between pt-12 pb-24">
        <p>Promo</p>
        <p><span>-$20</span></p>
      </div> --}}

      <!-- total-price -->
      <div class="price d-flex align-items-center justify-content-between pt-24">
        <p>Total Pay</p>
        <p><span>Rp. 300.00</span></p>
      </div>
  
      <!-- download-btn start -->
      <div class="download-btn mt-64">
        <button type="button" class="btn-primary">Download PDF</button>
      </div>
    </div>
  </main>
</body>
@endsection
