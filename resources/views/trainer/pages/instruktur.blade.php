@extends('trainer.layouts.main')
@section('children')

<body class="scrollbar-hidden">

  <main class="explore">
    <div class="page-title">
      <button type="button" onclick="window.location.href='{{ url('/home') }}'" class="back-btn">
        <img src="{{ asset('assets/trainerSvg/svg/arrow-left-black.svg') }}" alt="arrow" class="arrow-icon">
      </button>
      <h3 class="main-title">Team</h3>
    </div>
    

      <!-- places -->
      <div id="place-cards" class="grid">
        <!-- item-1 -->
        <div class="place-card mix popular frequent">
          <a href="vacation-details.html">
            <div class="image position-relative">
              <img src="https://www.sukarobot.com/Instruktur/1704812494.png" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
              </span>
            </div>
            <div class="content">
              <h4>Asep Saeban</h4>
              <p class="d-flex align-items-center gap-04 location">
                Robotik
              </p>
              </div>
            </div>
          </a>
        </div>
<br>
        <!-- item-2 -->
        <div class="place-card mix recommendation popular">
          <a href="vacation-details.html">
            <div class="image position-relative">
              <img src="https://www.sukarobot.com/Instruktur/1704812521.jpg" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
              </span>
            </div>
            <div class="content">
              <h4>Ilyas Abdul Aziz</h4>
              <p class="d-flex align-items-center gap-04 location">
                Robotik
              </p>
            </div>
          </a>
        </div>
<br>
        <!-- item-3 -->
        <div class="place-card mix frequent recommendation">
          <a href="vacation-details.html">
            <div class="image position-relative">
              <img src="https://www.sukarobot.com/Instruktur/1706276970.jpg" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
              </span>
            </div>
            <div class="content">
              <h4>Adi Palwo</h4>
              <p class="d-flex align-items-center gap-04 location">
                Robotik
              </p>
            </div>
          </a>
        </div>
<br>
        <!-- item-4 -->
        <div class="place-card mix recommendation frequent">
          <a href="vacation-details.html">
            <div class="image position-relative">
              <img src="https://www.sukarobot.com/Instruktur/1706277082.jpg" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
              </span>
            </div>
            <div class="content">
              <h4>Siti Olis</h4>
              <p class="d-flex align-items-center gap-04 location">
                Robotik
              </p>
            </div>
          </a>
        </div>
<br>
        <!-- item-5 -->
        <div class="place-card mix recommendation popular">
          <a href="vacation-details.html">
            <div class="image position-relative">
              <img src="https://www.sukarobot.com/Instruktur/1706277136.jpg" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
              </span>
            </div>
            <div class="content">
              <h4>Wanda</h4>
              <p class="d-flex align-items-center gap-04 location">
                Coding For Kids
              </p>
            </div>
          </a>
        </div>
<br>
        <!-- item-6 -->
        <div class="place-card mix frequent popular">
          <a href="vacation-details.html">
            <div class="image position-relative">
              <img src="https://www.sukarobot.com/Instruktur/1706277171.jpg" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
              </span>
            </div>
            <div class="content">
              <h4>Siti Syarah Jamilah</h4>
              <p class="d-flex align-items-center gap-04 location">
                Digital Marketing
              </p>
            </div>
          </a>
        </div>
<br>        
        <!-- item-7 -->
        <div class="place-card mix frequent popular">
          <a href="vacation-details.html">
            <div class="image position-relative">
              <img src="https://www.sukarobot.com/Instruktur/1706277242.jpg" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
              </span>
            </div>
            <div class="content">
              <h4>M Rayhan</h4>
              <p class="d-flex align-items-center gap-04 location">
                Robotik
              </p>
            </div>
          </a>
        </div>
<br>       
        <!-- item-8 -->
        <div class="place-card mix frequent popular">
          <a href="vacation-details.html">
            <div class="image position-relative">
              <img src="https://www.sukarobot.com/Instruktur/1706277260.jpg" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
              </span>
            </div>
            <div class="content">
              <h4>Raga</h4>
              <p class="d-flex align-items-center gap-04 location">
                Robotik
              </p>
            </div>
          </a>
        </div>
<br>       
        <!-- item-8 -->
        <div class="place-card mix frequent popular">
          <a href="vacation-details.html">
            <div class="image position-relative">
              <img src="https://www.sukarobot.com/Instruktur/1706277301.jpg" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
              </span>
            </div>
            <div class="content">
              <h4>Dian Puspita</h4>
              <p class="d-flex align-items-center gap-04 location">
                Digital Marketing
              </p>
            </div>
          </a>
        </div>
<br>        
        <!-- item-8 -->
        <div class="place-card mix frequent popular">
          <a href="vacation-details.html">
            <div class="image position-relative">
              <img src="https://www.sukarobot.com/Instruktur/1706277320.png" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
              </span>
            </div>
            <div class="content">
              <h4>Hasan</h4>
              <p class="d-flex align-items-center gap-04 location">
                Digital Marketing
              </p>
            </div>
          </a>
        </div>
<br>       
        <!-- item-8 -->
        <div class="place-card mix frequent popular">
          <a href="vacation-details.html">
            <div class="image position-relative">
              <img src="https://www.sukarobot.com/Instruktur/1708137019.png" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
              </span>
            </div>
            <div class="content">
              <h4>Aryo De Wibowo MS, S.T., M.T</h4>
              <p class="d-flex align-items-center gap-04 location">
                Instruktur
              </p>
            </div>
          </a>
        </div>
<br>        
        <!-- item-9 -->
        <div class="place-card mix frequent popular">
          <a href="vacation-details.html">
            <div class="image position-relative">
              <img src="https://www.sukarobot.com/Instruktur/1716552421.png" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
              </span>
            </div>
            <div class="content">
              <h4>Hari Utomo</h4>
              <p class="d-flex align-items-center gap-04 location">
                Staf Administrasi
              </p>
            </div>
          </a>
        </div>
<br>        
        <!-- item-10 -->
        <div class="place-card mix frequent popular">
          <a href="vacation-details.html">
            <div class="image position-relative">
              <img src="https://www.sukarobot.com/Instruktur/1716550005.jpg" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
              </span>
            </div>
            <div class="content">
              <h4>Ahmad Salim</h4>
              <p class="d-flex align-items-center gap-04 location">
                Desaign Grafis
              </p>
            </div>
          </a>
        </div>
<br>
        <!-- item-11 -->
        <div class="place-card mix frequent popular">
          <a href="vacation-details.html">
            <div class="image position-relative">
              <img src="{{ asset('assets/img/aziz.jpeg') }}" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
              </span>
            </div>
            <div class="content">
              <h4>Aziz Ramadhan</h4>
              <p class="d-flex align-items-center gap-04 location">
                Robotik
              </p>
            </div>
          </a>
        </div>
<br>
        <!-- item-12 -->
        <div class="place-card mix frequent popular">
          <a href="vacation-details.html">
            <div class="image position-relative">
              <img src="{{ asset('assets/img/aji.jpg') }}" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
              </span>
            </div>
            <div class="content">
              <h4>Aji Ramdani</h4>
              <p class="d-flex align-items-center gap-04 location">
                Web Development
              </p>
            </div>
          </a>
        </div>

      </div>
    </section>
    <!-- all-place end -->
  </main>

  <!-- bottom navigation start -->
  <footer class="bottom-nav">
    <ul class="d-flex align-items-center justify-content-around w-100 h-100">
      <li>
        <a href="{{ url('/home') }}">
          <img src="{{ asset('assets/trainerSvg/svg/bottom-nav/home-active.svg') }}" alt="home">
        </a>
      </li>
      <li>
        <a href="{{ url('/explore') }}">
          <img src="{{ asset('assets/trainerSvg/svg/bottom-nav/category.svg') }}" alt="category">
        </a>
      </li>
      <li>
        <a href="ticket-booked.html">
          <img src="{{ asset('assets/trainerSvg/svg/bottom-nav/ticket.svg') }}" alt="ticket">
        </a>
      </li>
      <li>
        <a href="wishlist.html">
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

  <!-- filter modal start -->
  <div class="modal fade filterModal bottomModal" id="filterModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="modal-close rounded-full" data-bs-dismiss="modal" aria-label="Close">
            <img src="../assets/svg/close-black.svg" alt="Close">
          </button>
          <h1 class="modal-title">Filter</h1>
        </div>
        <div class="modal-body">
          <!-- price range -->
          <div class="pb-12">
            <h4 class="content-title">Price Range</h4>
            <div class="filter-range">
              <div id="price-slider-range"></div>
              <div class="price-range w-100 d-flex align-items-center justify-content-between">
                <input type="text" id="amount1">
                <input type="text" id="amount2">
              </div>
            </div>
          </div>

          <!-- popular filters -->
          <div class="py-12">
            <h4 class="content-title">Popular Filters</h4>
            <ul class="popular-filters">
              <li>
                <label for="hotel" class="filter-label">
                  <input type="checkbox" id="hotel" >
                  Hotels (340)
                </label>
              </li>
              <li>
                <label for="pool" class="filter-label">
                  <input type="checkbox" id="pool" checked>
                  Swimming Pool (340)
                </label>
              </li>
              <li>
                <label for="stars" class="filter-label">
                  <input type="checkbox" id="stars">
                  5 stars (100)
                </label>
              </li>
              <li>
                <label for="bathroom" class="filter-label">
                  <input type="checkbox" id="bathroom">
                  Private Bathroom (200)
                </label>
              </li>
              <li>
                <label for="breakfast" class="filter-label">
                  <input type="checkbox" id="breakfast">
                  Breakfast Included (115)
                </label>
              </li>
              <li>
                <label for="kitchen" class="filter-label">
                  <input type="checkbox" id="kitchen">
                  Kitchen (10)
                </label>
              </li>
            </ul>
          </div>

          <!-- star rating -->
          <div class="py-12">
            <h4 class="content-title">Star Rating</h4>
            <ul class="star-rating">
              <li>
                <label for="star1" class="filter-label">
                  <input type="radio" name="star" id="star1" >
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                </label>
              </li>
              <li>
                <label for="star2" class="filter-label">
                  <input type="radio" name="star" id="star2" >
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                </label>
              </li>
              <li>
                <label for="star3" class="filter-label">
                  <input type="radio" name="star" id="star3" >
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                </label>
              </li>
              <li>
                <label for="star4" class="filter-label">
                  <input type="radio" name="star" id="star4" checked>
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                </label>
              </li>
              <li>
                <label for="star5" class="filter-label">
                  <input type="radio" name="star" id="star5" >
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                  <img src="../assets/svg/star-yellow.svg" alt="star">
                </label>
              </li>
            </ul>
          </div>

          <!-- apply-filter -->
          <div class="py-12">
            <a href="search-result.html" class="btn-primary apply-filter-btn">Apply Filter</a>
          </div>

          <!-- clear-all -->
          <div class="pt-12">
            <button type="button" class="clear-all-btn" data-bs-dismiss="modal" aria-label="Close">Clear All</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
@endsection