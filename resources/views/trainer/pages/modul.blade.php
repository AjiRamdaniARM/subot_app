@extends('trainer.layouts.main')
@section('children')

</head>
<body class="scrollbar-hidden">

  <main class="ticket">
    <!-- page-title -->
    <div class="page-title">
      <h3 class="main-title">Modul Pembelajaran</h3>
    </div>

    <!-- tab -->
    <section class="ticket-tab">
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="booked-tab-pane" role="tabpanel" aria-labelledby="booked-tab" tabindex="0">
          <!-- item 1 -->
          <div class="ticket-card radius-8">
            <!-- card-title -->
            <div class="card-title d-flex align-items-center justify-content-between">
            </div>

            <!-- card-item -->
            <div class="card-item d-flex align-items-center gap-16 w-100">
              <div class="image shrink-0 overflow-hidden radius-8">
                <img src="{{ asset('assets/img/modul.jpg') }}" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
              </div>
      
              <div class="content flex-grow">
                <h4>Beginner 2</h4>
                <p class="d-flex align-items-center gap-04 location mt-04">
                  Sukarobot Accademy
                </p>
              </div>
            </div>

            <!-- card-footer -->
            <div class="card-footer d-flex align-items-center justify-content-between">
              <div>
              </div>

              <a href="{{ url('/invoice') }}">Open</a>
            </div>

          </div>

          <!-- item 2 -->
          <div class="ticket-card radius-8">
            <!-- card-title -->
            <div class="card-title d-flex align-items-center justify-content-between">
            </div>

            <!-- card-item -->
            <div class="card-item d-flex align-items-center gap-16 w-100">
              <div class="image shrink-0 overflow-hidden radius-8">
                <img src="{{ asset('assets/img/modul.jpg') }}" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
              </div>
      
              <div class="content flex-grow">
                <h4>Basic 1</h4>
                <p class="d-flex align-items-center gap-04 location mt-04">
                  <img src="{{ asset('assets/trainerSvg/svg/map-marker.svg') }}" alt="icon">
                  Sukarobot Accademy
                </p>
              </div>
            </div>

            <!-- card-footer -->
            <div class="card-footer d-flex align-items-center justify-content-between">
              <div>
              </div>

              <a href="{{ url('/invoice') }}">Open</a>
            </div>

          </div>

          <!-- item 3 -->
          <div class="ticket-card radius-8">
            <!-- card-title -->
            <div class="card-title d-flex align-items-center justify-content-between">
            </div>

            <!-- card-item -->
            <div class="card-item d-flex align-items-center gap-16 w-100">
              <div class="image shrink-0 overflow-hidden radius-8">
                <img src="{{ asset('assets/img/modul.jpg') }}" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
              </div>
      
              <div class="content flex-grow">
                <h4>Basic 2</h4>
                <p class="d-flex align-items-center gap-04 location mt-04">
                  <img src="{{ asset('assets/trainerSvg/svg/map-marker.svg') }}" alt="icon">
                  Sukarobot Accademy
                </p>
              </div>
            </div>

            <!-- card-footer -->
            <div class="card-footer d-flex align-items-center justify-content-between">
              <div>
              </div>

              <a href="{{ url('/invoice') }}">Open</a>
            </div>

          </div>

          <!-- item 4 -->
          <div class="ticket-card radius-8">
            <!-- card-title -->
            <div class="card-title d-flex align-items-center justify-content-between">
            </div>

            <!-- card-item -->
            <div class="card-item d-flex align-items-center gap-16 w-100">
              <div class="image shrink-0 overflow-hidden radius-8">
                <img src="{{ asset('assets/img/modul.jpg') }}" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
              </div>
      
              <div class="content flex-grow">
                <h4>Basic 3</h4>
                <p class="d-flex align-items-center gap-04 location mt-04">
                  <img src="{{ asset('assets/trainerSvg/svg/map-marker.svg') }}" alt="icon">
                  Sukarobot Accademy
                </p>
              </div>
            </div>

            <!-- card-footer -->
            <div class="card-footer d-flex align-items-center justify-content-between">
              <div>
              </div>

              <a href="{{ url('/invoice') }}">Open</a>
            </div>

          </div>

          <!-- item 5 -->
          <div class="ticket-card radius-8">
            <!-- card-title -->
            <div class="card-title d-flex align-items-center justify-content-between">
            </div>

            <!-- card-item -->
            <div class="card-item d-flex align-items-center gap-16 w-100">
              <div class="image shrink-0 overflow-hidden radius-8">
                <img src="{{ asset('assets/img/modul.jpg') }}" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
              </div>
      
              <div class="content flex-grow">
                <h4>Intermediat</h4>
                <p class="d-flex align-items-center gap-04 location mt-04">
                  <img src="{{ asset('assets/trainerSvg/svg/map-marker.svg') }}" alt="icon">
                  Sukarobot Accademy
                </p>
              </div>
            </div>

            <!-- card-footer -->
            <div class="card-footer d-flex align-items-center justify-content-between">
              <div>
              </div>

              <a href="{{ url('/invoice') }}">Open</a>
            </div>

          </div>

          <!-- item 6 -->
          <div class="ticket-card radius-8">
            <!-- card-title -->
            <div class="card-title d-flex align-items-center justify-content-between">
            </div>

            <!-- card-item -->
            <div class="card-item d-flex align-items-center gap-16 w-100">
              <div class="image shrink-0 overflow-hidden radius-8">
                <img src="{{ asset('assets/img/modul.jpg') }}" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
              </div>
      
              <div class="content flex-grow">
                <h4>Coding For Kids</h4>
                <p class="d-flex align-items-center gap-04 location mt-04">
                  <img src="{{ asset('assets/trainerSvg/svg/map-marker.svg') }}" alt="icon">
                  Sukarobot Accademy
                </p>
              </div>
            </div>

            <!-- card-footer -->
            <div class="card-footer d-flex align-items-center justify-content-between">
              <div>
              </div>

              <a href="{{ url('/invoice') }}">Open</a>
            </div>

          </div>

          <!-- item 7 -->
          <div class="ticket-card radius-8">
            <!-- card-title -->
            <div class="card-title d-flex align-items-center justify-content-between">
            </div>

            <!-- card-item -->
            <div class="card-item d-flex align-items-center gap-16 w-100">
              <div class="image shrink-0 overflow-hidden radius-8">
                <img src="{{ asset('assets/img/modul.jpg') }}" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
              </div>
      
              <div class="content flex-grow">
                <h4>Coding Web</h4>
                <p class="d-flex align-items-center gap-04 location mt-04">
                  <img src="{{ asset('assets/trainerSvg/svg/map-marker.svg') }}" alt="icon">
                  Sukarobot Accademy
                </p>
              </div>
            </div>

            <!-- card-footer -->
            <div class="card-footer d-flex align-items-center justify-content-between">
              <div>
              </div>

              <a href="{{ url('/invoice') }}">Open</a>
            </div>

          </div>

          <!-- item 8 -->
          <div class="ticket-card radius-8">
            <!-- card-title -->
            <div class="card-title d-flex align-items-center justify-content-between">
            </div>

            <!-- card-item -->
            <div class="card-item d-flex align-items-center gap-16 w-100">
              <div class="image shrink-0 overflow-hidden radius-8">
                <img src="{{ asset('assets/img/modul.jpg') }}" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
              </div>
      
              <div class="content flex-grow">
                <h4>Desaign Grafis</h4>
                <p class="d-flex align-items-center gap-04 location mt-04">
                  <img src="{{ asset('assets/trainerSvg/svg/map-marker.svg') }}" alt="icon">
                  Sukarobot Accademy
                </p>
              </div>
            </div>

            <!-- card-footer -->
            <div class="card-footer d-flex align-items-center justify-content-between">
              <div>
              </div>

              <a href="{{ url('/invoice') }}">Open</a>
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