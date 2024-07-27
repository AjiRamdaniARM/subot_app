@extends('trainer.layouts.main')
@section('children')

</head>
<body class="scrollbar-hidden">

  <main class="ticket">
    <!-- page-title -->
    <div class="page-title">
      <h3 class="main-title">Invoice</h3>
    </div>

    <!-- tab -->
    <section class="ticket-tab">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="booked-tab" data-bs-toggle="tab" data-bs-target="#booked-tab-pane" type="button" role="tab" aria-controls="booked-tab-pane" aria-selected="true">Booked</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="history-tab" data-bs-toggle="tab" data-bs-target="#history-tab-pane" type="button" role="tab" aria-controls="history-tab-pane" aria-selected="false">History</button>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="booked-tab-pane" role="tabpanel" aria-labelledby="booked-tab" tabindex="0">
          <!-- item 1 -->
          <div class="ticket-card radius-8">
            <!-- card-title -->
            <div class="card-title d-flex align-items-center justify-content-between">
              <p>22 march 2022, Thu</p>
              <span>Segera Lunasi</span>
            </div>

            <!-- card-item -->
            <div class="card-item d-flex align-items-center gap-16 w-100">
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

            <!-- card-footer -->
            <div class="card-footer d-flex align-items-center justify-content-between">
              <div>
                <p>Total Price</p>
                <h3>Rp. 200.000</h3>
              </div>

              <a href="{{ url('/invoice') }}">Catatan</a>
            </div>

          </div>

          <!-- item 2 -->
          <div class="ticket-card radius-8">
            <!-- card-title -->
            <div class="card-title d-flex align-items-center justify-content-between">
              <p>22 march 2022, Thu</p>
              <span>Segera Lunasi !</span>
            </div>

            <!-- card-item -->
            <div class="card-item d-flex align-items-center gap-16 w-100">
              <div class="image shrink-0 overflow-hidden radius-8">
                <img src="{{ asset('assets/img/payment.gif') }}" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
              </div>
      
              <div class="content flex-grow">
                <h4>Privat Kennet</h4>
                <p class="d-flex align-items-center gap-04 location mt-04">
                  <img src="{{ asset('assets/trainerSvg/svg/map-marker.svg') }}" alt="icon">
                  Sukabumi 
                </p>
              </div>
            </div>

            <!-- card-footer -->
            <div class="card-footer d-flex align-items-center justify-content-between">
              <div>
                <p>Total Price</p>
                <h3>Rp. 300.000</h3>
              </div>

              <a href="{{ url('/invoice') }}">Catatan</a>
            </div>

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

  <!-- service modal start -->
  <div class="modal fade reviewModal bottomModal" id="reviewModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="modal-close rounded-full" data-bs-dismiss="modal" aria-label="Close">
            <img src="../assets/svg/close-black.svg" alt="Close">
          </button>
          <h1 class="modal-title">Give a Review</h1>
        </div>
        <div class="modal-body">
          <ul class="ratingW d-flex align-items-center justify-content-center">
            <li class="on">
              <a href="javascript:void(0);">
                <img src="../assets/svg/star-yellow-big.svg" class="star-yellow" alt="Star">
                <img src="../assets/svg/star-gray.svg" class="star-gray" alt="Star">
              </a>
            </li>
            <li class="on">
              <a href="javascript:void(0);">
                <img src="../assets/svg/star-yellow-big.svg" class="star-yellow" alt="Star">
                <img src="../assets/svg/star-gray.svg" class="star-gray" alt="Star">
              </a>
            </li>
            <li class="on">
              <a href="javascript:void(0);">
                <img src="../assets/svg/star-yellow-big.svg" class="star-yellow" alt="Star">
                <img src="../assets/svg/star-gray.svg" class="star-gray" alt="Star">
              </a>
            </li>
            <li>
              <a href="javascript:void(0);">
                <img src="../assets/svg/star-yellow-big.svg" class="star-yellow" alt="Star">
                <img src="../assets/svg/star-gray.svg" class="star-gray" alt="Star">
              </a>
            </li>
            <li>
              <a href="javascript:void(0);">
                <img src="../assets/svg/star-yellow-big.svg" class="star-yellow" alt="Star">
                <img src="../assets/svg/star-gray.svg" class="star-gray" alt="Star">
              </a>
            </li>
          </ul>

          <div class="msg">
            <h6>Detail Review</h6>
            <textarea placeholder="Give a Review"></textarea>
          </div>
          <button type="button" data-bs-dismiss="modal" aria-label="Close" class="btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>
</body>
@endsection