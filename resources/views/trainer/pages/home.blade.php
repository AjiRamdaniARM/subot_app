@extends('trainer.layouts.main')
@section('children')
    <main class="home">
        <!-- menu, side-menu start -->
        <section class="wrapper dz-mode">
            <!-- menu -->
            <div class="menu">
                <button class="toggle-btn">
                    <img src="../assets/svg/menu/burger-white.svg" alt="" class="icon">
                </button>
                <div class="btn-grp d-flex align-items-center gap-16">
                    <a href="{{ url('/user') }}">
                        <img src="{{ asset('assets/trainerSvg/svg/menu/profile-white.svg') }}" alt="icon">
                    </a>
                </div>
            </div>
            <div class="m-menu__overlay"></div>
            <!-- main menu -->
            <div class="m-menu">
                <div class="m-menu__header">
                    <button class="m-menu__close">
                        <img src="../assets/svg/menu/close-white.svg" alt="icon">
                    </button>
                    <div class="menu-user">
                        <img src="../assets/images/profile/avatar.png" alt="avatar">
                        <div>
                            <a href="#!">angela mayer</a>
                            <h3>
                                Verified user · Membership
                            </h3>
                        </div>
                    </div>
                </div>
                <ul>
                    <li>
                        <h2 class="menu-title">menu</h2>
                    </li>

                    <li>
                        <a href="home.html">
                            <div class="d-flex align-items-center gap-16">
                                <span class="icon">
                                    <img src="../assets/svg/menu/pie-white.svg" alt="">
                                </span>
                                overview
                            </div>
                            <img src="../assets/svg/menu/chevron-right-black.svg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="../page.html">
                            <div class="d-flex align-items-center gap-16">
                                <span class="icon">
                                    <img src="../assets/svg/menu/page-white.svg" alt="">
                                </span>
                                pages
                            </div>
                            <img src="../assets/svg/menu/chevron-right-black.svg" alt="">
                        </a>
                    </li>
                    <li>
                        <h2 class="menu-title">others</h2>
                    </li>

                    <li>
                        <label class="a-label__chevron" for="item-4">
                            <span class="d-flex align-items-center gap-16">
                                <span class="icon">
                                    <img src="../assets/svg/menu/grid-white.svg" alt="">
                                </span>
                                components
                            </span>
                            <img src="../assets/svg/menu/chevron-right-black.svg" alt="">
                        </label>
                        <input type="checkbox" id="item-4" name="item-4" class="m-menu__checkbox">
                        <div class="m-menu">
                            <div class="m-menu__header">
                                <label class="m-menu__toggle" for="item-4">
                                    <img src="../assets/svg/menu/back-white.svg" alt="">
                                </label>
                                <span class="m-menu__header-title">components</span>
                            </div>
                            <ul>
                                <li>
                                    <a href="../components/splash-screen.html">
                                        <div class="d-flex align-items-center gap-16">
                                            <span class="icon">
                                                <img src="{{ asset('assets/trainerSvg/svg/menu/box-white.svg') }}"
                                                    alt="icon">
                                            </span>
                                            splash screen
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <label class="a-label__chevron" for="item-5">
                            <span class="d-flex align-items-center gap-16">
                                <span class="icon">
                                    <img src="{{ asset('assets/trainerSvg/svg/menu/gear-white.svg') }}" alt="">
                                </span>
                                settings
                            </span>
                            <img src="../assets/svg/menu/chevron-right-black.svg" alt="">
                        </label>
                        <input type="checkbox" id="item-5" name="item-5" class="m-menu__checkbox">
                        <div class="m-menu">
                            <div class="m-menu__header">
                                <label class="m-menu__toggle" for="item-5">
                                    <img src="{{ asset('assets/trainerSvg/svg/menu/back-white.svg') }}" alt="">
                                </label>
                                <span class="m-menu__header-title">settings</span>
                            </div>
                            <ul>
                                <li>
                                    <a href="./profile/user-address.html">
                                        <div class="d-flex align-items-center gap-16">
                                            <span class="icon">
                                                <img src="{{ asset('assets/trainerSvg/svg/menu/box-white.svg') }}"
                                                    alt="icon">
                                            </span>
                                            My Address
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="./profile/user-payment.html">
                                        <div class="d-flex align-items-center gap-16">
                                            <span class="icon">
                                                <img src="{{ asset('assets/trainerSvg/svg/menu/box-white.svg') }}"
                                                    alt="icon">
                                            </span>
                                            Payment Method
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="./profile/change-password.html">
                                        <div class="d-flex align-items-center gap-16">
                                            <span class="icon">
                                                <img src="../assets/svg/menu/box-white.svg" alt="icon">
                                            </span>
                                            Change Password
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="./profile/forgot-password.html">
                                        <div class="d-flex align-items-center gap-16">
                                            <span class="icon">
                                                <img src="../assets/svg/menu/box-white.svg" alt="icon">
                                            </span>
                                            Forgot Password
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="./profile/security.html">
                                        <div class="d-flex align-items-center gap-16">
                                            <span class="icon">
                                                <img src="../assets/svg/menu/box-white.svg" alt="icon">
                                            </span>
                                            Security
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="./profile/user-language.html">
                                        <div class="d-flex align-items-center gap-16">
                                            <span class="icon">
                                                <img src="{{ asset('assets/trainerSvg/svg/menu/box-white.svg') }}"
                                                    alt="icon">
                                            </span>
                                            Language
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ asset('/notifications') }}">
                                        <div class="d-flex align-items-center gap-16">
                                            <span class="icon">
                                                <img src="{{ asset('assets/trainerSvg/svg/menu/box-white.svg') }}"
                                                    alt="icon">
                                            </span>
                                            Notifications
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="dz-switch">
                        <div class="a-label__chevron">
                            <div class="d-flex align-items-center gap-16">
                                <span class="icon">
                                    <img src="{{ asset('assets/trainerSvg/svg/menu/moon-white.svg') }}" alt="">
                                </span>
                                switch to dark mode
                            </div>
                            <label class="toggle-switch" for="enableMode">
                                <input type="checkbox" id="enableMode" class="mode-switch">
                                <span class="slider"></span>
                            </label>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- end main menu -->
        </section>
        <!-- menu, side-menu end -->

        <!-- info start -->
        <section class="info d-flex align-items-start justify-content-between pb-12">
            <div class="d-flex align-items-center justify-content-between gap-14">
                <div class="image shrink-0 rounded-full overflow-hidden">
                    <img src="{{ asset('assets/img/robot.png') }}" alt="avatar" class="w-100 h-100 object-fit-cover">
                </div>
                <div>
                    <h3> {{ auth()->guard('trainer')->user()->nama }}</h3>
                    <p class="d-flex align-items-center gap-04">
                        <img src="{{ asset('assets/trainerSvg/svg/map-marker.svg') }}" alt="icon">
                        Sukabumi
                    </p>
                </div>
            </div>

            <ul class="d-flex align-items-center gap-16">
                <li>
                    <a href="{{ asset('/notifications') }}"
                        class="d-flex align-items-center justify-content-center rounded-full position-relative">
                        <img src="{{ asset('assets/trainerSvg/svg/bell-black.svg') }}" alt="icon">
                        <span class="dot"></span>
                    </a>
                </li>
                <ul>
                    <li>
                        <a href="#" onclick="showAlert(); return false;"
                            class="d-flex align-items-center justify-content-center rounded-full position-relative">
                            <img src="{{ asset('assets/trainerSvg/svg/message-square-dots.svg') }}" alt="icon">
                            <span class="dot"></span>
                        </a>
                    </li>
                </ul>

                <script>
                    function showAlert() {
                        alert('Message icon clicked!');
                    }
                </script>
            </ul>
        </section>
        <!-- info end -->

        <!-- search start -->
        <section class="search py-12">
            <form action="#">
                <div class="form-inner w-100 d-flex align-items-center gap-8 radius-24">
                    <img src="{{ asset('assets/trainerSvg/svg/search.svg') }}" alt="search" class="shrink-0">
                    <input type="search" class="input-search input-field" placeholder="Search...">
                </div>
            </form>
        </section>
        <!-- search end -->

        <main>

            <!-- budget start -->
            <section class="budget pt-8 pb-12">
                <!-- title -->
                <div class="title d-flex align-items-center justify-content-between">
                    <h2 class="shrink-0">JADWAL HARI INI :</h2>
                    <a href="{{ url('jadwalhari') }}" class="shrink-0 d-inline-block">See All</a>
                </div>

                <ul id="schedule-list">
                    @foreach ($getScheduleTrainer as $jadwal)
                        <li>
                            <a class="d-flex align-items-center gap-12 {{ $jadwal->ket == 'Tidak Aktif' ? '' : 'active' }}"
                                @if ($jadwal->ab_trainer != 'Hadir' && $jadwal->ket != 'Tidak Aktif') href="{{ url('/home/absen/' . $jadwal->id_schedules) }}" @endif>
                                <div class="image shrink-0 overflow-hidden radius-8">
                                    @if ($jadwal->ket == 'Tidak Aktif')
                                        <img src="{{ asset('assets/img/erroe.png') }}" alt="Place"
                                            class="img-fluid w-100 h-100 object-fit-cover">
                                    @elseif ($jadwal->ab_trainer == 'Hadir')
                                        <img src="{{ asset('assets/img/doneAbsen.png') }}" alt="Place"
                                            class="img-fluid w-100 h-100 object-fit-cover">
                                    @else
                                        <img src="{{ asset('assets/img/absen.gif') }}" alt="Place"
                                            class="img-fluid w-100 h-100 object-fit-cover">
                                    @endif
                                </div>
                                <div
                                    class="content shrink-0 d-flex align-items-center gap-12 justify-content-between flex-grow">
                                    <div>
                                        @if ($jadwal->kelas_name == 'Club')
                                            <h4 @if ($jadwal->ket == 'Tidak Aktif') style="color: red" @endif>
                                                {{ $jadwal->sekolah }}</h4>
                                        @else
                                            <h4 style="text-transform: uppercase">{{ $jadwal->kelas_name }}</h4>
                                        @endif

                                        @if ($jadwal->ket == 'Tidak Aktif')
                                            <h5 style="color: red">Jadwal Tidak Aktif</h5>
                                        @elseif ($jadwal->ab_trainer == 'Hadir')
                                            <h5 style="color: red">Anda Sudah mengabsen</h5>
                                        @else
                                            <h5>{{ date('H:i', strtotime($jadwal->jm_awal)) }} -
                                                {{ date('H:i', strtotime($jadwal->jm_akhir)) }}</h5>
                                        @endif

                                        <p class="d-flex align-items-center gap-8 location">
                                            {{ \Carbon\Carbon::parse($jadwal->tanggal_jd)->translatedFormat('d F Y') }} -
                                            ({{ $jadwal->hari }})
                                        </p>
                                    </div>
                                    <p class="price">
                                        <span>{{ $jadwal->levels }} | {{ $jadwal->nama_alat }}</span>
                                    </p>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>


                <script>
                    window.Echo.channel('schedules')
                        .listen('ScheduleUpdated', (e) => {
                            const newSchedule = e.schedule;
                            const scheduleList = document.getElementById('schedule-list');
                            const newListItem = `
                                <li>
                                    <a href="/home/absen/${newSchedule.id_schedules}" class="d-flex align-items-center gap-12">
                                        <div class="image shrink-0 overflow-hidden radius-8">
                                            <img src="/assets/img/absen.gif" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
                                        </div>
                                        <div class="content shrink-0 d-flex align-items-center gap-12 justify-content-between flex-grow">
                                            <div>
                                                <h4>${newSchedule.kelas_name == 'Club' ? newSchedule.sekolah : newSchedule.kelas_name}</h4>
                                                <h5>${new Date(newSchedule.jm_awal).toLocaleTimeString()} - ${new Date(newSchedule.jm_akhir).toLocaleTimeString()}</h5>
                                                <p class="d-flex align-items-center gap-8 location">
                                                    ${new Date(newSchedule.tanggal_jd).toLocaleDateString()} - (${newSchedule.hari})
                                                </p>
                                            </div>
                                            <p class="price"><span>${newSchedule.levels} | ${newSchedule.nama_alat}</span></p>
                                        </div>
                                    </a>
                                </li>
                            `;
                            scheduleList.innerHTML += newListItem;
                        });
                </script>

                <script>
                    window.Echo.channel('schedules')
                        .listen('ScheduleUpdated', (e) => {
                            const newSchedule = e.schedule;
                            const scheduleList = document.getElementById('schedule-list');
                            const newListItem = `
                    <li>
                        <a href="/home/absen/${newSchedule.id_schedules}" class="d-flex align-items-center gap-12">
                            <div class="image shrink-0 overflow-hidden radius-8">
                                <img src="/assets/img/absen.gif" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
                            </div>
                            <div class="content shrink-0 d-flex align-items-center gap-12 justify-content-between flex-grow">
                                <div>
                                    <h4>${newSchedule.kelas_name == 'Club' ? newSchedule.sekolah : newSchedule.kelas_name}</h4>
                                    <h5>${new Date(newSchedule.jm_awal).toLocaleTimeString()} - ${new Date(newSchedule.jm_akhir).toLocaleTimeString()}</h5>
                                    <p class="d-flex align-items-center gap-8 location">
                                        ${new Date(newSchedule.tanggal_jd).toLocaleDateString()} - (${newSchedule.hari})
                                    </p>
                                </div>
                                <p class="price"><span>${newSchedule.levels} | ${newSchedule.nama_alat}</span></p>
                            </div>
                        </a>
                    </li>
                `;
                            scheduleList.innerHTML += newListItem;
                        });
                </script>
            </section>
            <!-- budget end -->

            <!-- Menu -->
            <section class="service py-12">
                <div class="container">
                    <div class="title d-flex align-items-center justify-content-between">
                        <h2 class="shrink-0">MENU</h2>
                    </div>

                    <!-- Menu items -->
                    <div class="d-flex justify-content-center">
                        <!-- item 1 -->
                        <a href="#" onclick="showAlert('MAINTANCE'); return false;"
                            class="text-decoration-none mx-3">
                            <figure class="item text-center">
                                <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                                    <img src="{{ asset('assets/img/kalender.png') }}" alt="calendar"
                                        class="img-fluid backface-hidden">
                                </div>
                                <figcaption>Jadwal</figcaption>
                            </figure>
                        </a>

                        <!-- item 2 -->
                        <a href="#" onclick="showAlert('MAINTANCE'); return false;"
                            class="text-decoration-none mx-3">
                            <figure class="item text-center">
                                <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                                    <img src="{{ asset('assets/img/group.png') }}" alt="group"
                                        class="img-fluid backface-hidden">
                                </div>
                                <figcaption>Instruktur</figcaption>
                            </figure>
                        </a>

                        <!-- item 3 -->
                        <a href="#" onclick="showAlert('MAINTANCE'); return false;"
                            class="text-decoration-none mx-3">
                            <figure class="item text-center">
                                <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                                    <img src="{{ asset('assets/img/menuabsen.gif') }}" alt="history"
                                        class="img-fluid backface-hidden">
                                </div>
                                <figcaption>History</figcaption>
                            </figure>
                        </a>
                    </div>

                    <script>
                        function showAlert(message) {
                            alert(message);
                        }
                    </script>
                </div>
            </section>

            <style>
                .service {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    flex-wrap: wrap;
                    /* Jika ingin item-item ini wrap ketika ukuran layar kecil */
                }

                .text-decoration-none {
                    text-decoration: none;
                    /* Menghilangkan garis bawah pada link */
                }

                .mx-3 {
                    margin-right: 1rem;
                    margin-left: 1rem;
                }

                .pt-8 {
                    padding-top: 0.5rem;
                    /* Adjust top padding for budget section */
                }
            </style>
            <!-- Menu end -->



            <!-- visited start -->
            <section class="visited py-12 px-4">
                <div class="title d-flex align-items-center justify-content-between">
                    <h2 class="shrink-0">EVENT</h2>
                </div>

                <div class="swiper visited-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide place-card">
                            <a href="#" onclick="showAlert(); return false;" class="text-decoration-none">
                                <div class="image position-relative">
                                    <img src="{{ asset('assets/img/cover.jpg') }}" alt="desert" class="rounded"
                                        style="max-width: 100%; height: auto;">
                                </div>
                                <div class="content mt-2">
                                    <h4>Src Competition</h4>
                                    <p class="location d-flex align-items-center gap-2">
                                        <img src="{{ asset('assets/trainerSvg/svg/map-marker.svg') }}" alt="icon"
                                            class="me-1">
                                        Sukabumi, Nusa Putra
                                    </p>
                                </div>
                            </a>
                        </div>
                        <!-- Add more slides as needed -->
                    </div>
                </div>

                <!-- Swiper JS -->
                <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
                <script>
                    // Initialize Swiper
                    var swiper = new Swiper('.swiper', {
                        // Swiper options if needed
                    });

                    function showAlert() {
                        alert('Slide clicked!');
                    }
                </script>

                <!-- visited end -->



                {{-- <div class="swiper-slide place-card">
            <a href="vacation-details.html">
              <div class="image position-relative">
                <img src="../assets/images/home/item-2.png" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
                <span class="d-flex align-items-center justify-content-center rounded-full">
                  <img src="../assets/svg/heart-black.svg" alt="icon">
                </span>
              </div>
              <div class="content">
                <h4>Maintance</h4>
                <p class="d-flex align-items-center gap-04 location">
                  <img src="../assets/svg/map-marker.svg" alt="icon">
                  South America
                </p>

              </div>
            </a>
          </div> --}}

                {{-- <div class="swiper-slide place-card">
            <a href="vacation-details.html">
              <div class="image position-relative">
                <img src="../assets/images/home/item-1.png" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
                <span class="d-flex align-items-center justify-content-center rounded-full">
                  <img src="../assets/svg/heart-red.svg" alt="icon">
                </span>
              </div>
              <div class="content">
                <h4>Maintance</h4>
                <p class="d-flex align-items-center gap-04 location">
                  <img src="../assets/svg/map-marker.svg" alt="icon">
                  Polynesia, French
                </p>

              </div>
            </a>
          </div> --}}

                {{-- <div class="swiper-slide place-card">
            <a href="vacation-details.html">
              <div class="image position-relative">
                <img src="../assets/images/home/item-2.png" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
                <span class="d-flex align-items-center justify-content-center rounded-full">
                  <img src="../assets/svg/heart-black.svg" alt="icon">
                </span>
              </div>
              <div class="content">
                <h4>Maintance</h4>
                <p class="d-flex align-items-center gap-04 location">
                  <img src="../assets/svg/map-marker.svg" alt="icon">
                  South America
                </p>

              </div>
            </a>
          </div> --}}

                </div>
                </div>
            </section>
            <!-- visited end -->

            <!-- guide start -->
            <!-- <section class="guide py-12">

                                                                                                                                                                                                                                                                                                          <div class="title d-flex align-items-center justify-content-between">
                                                                                                                                                                                                                                                                                                            <h2 class="shrink-0">Tour Guide</h2>
                                                                                                                                                                                                                                                                                                            <a href="tour-guide.html" class="shrink-0 d-inline-block">See All</a>
                                                                                                                                                                                                                                                                                                          </div>


                                                                                                                                                                                                                                                                                                          <div class="d-flex gap-24 all-cards scrollbar-hidden">

                                                                                                                                                                                                                                                                                                            <a href="profile/guide-profile.html" class="d-flex gap-16 item w-fit shrink-0">
                                                                                                                                                                                                                                                                                                              <div class="image position-relative shrink-0">
                                                                                                                                                                                                                                                                                                                <img src="../assets/images/home/guide-1.png" alt="guide" class="guide-img object-fit-cover img-fluid radius-12">
                                                                                                                                                                                                                                                                                                                <div class="rating d-flex align-items-center gap-04 w-fit">
                                                                                                                                                                                                                                                                                                                  <img src="../assets/svg/star-yellow.svg" alt="Star">
                                                                                                                                                                                                                                                                                                                  <span class="d-inline-block">4.0</span>
                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                              </div>

                                                                                                                                                                                                                                                                                                              <div class="content">
                                                                                                                                                                                                                                                                                                                <h4>Emilia Ricardo</h4>
                                                                                                                                                                                                                                                                                                                <h5>$25 (1 Day)</h5>
                                                                                                                                                                                                                                                                                                                <p class="d-flex align-items-center gap-8 location">
                                                                                                                                                                                                                                                                                                                  <img src="../assets/svg/map-black.svg" alt="icon">
                                                                                                                                                                                                                                                                                                                  Polynesia, French
                                                                                                                                                                                                                                                                                                                </p>
                                                                                                                                                                                                                                                                                                              </div>
                                                                                                                                                                                                                                                                                                            </a>


                                                                                                                                                                                                                                                                                                            <a href="profile/guide-profile.html" class="d-flex gap-16 item w-fit shrink-0">
                                                                                                                                                                                                                                                                                                              <div class="image position-relative shrink-0">
                                                                                                                                                                                                                                                                                                                <img src="../assets/images/home/guide-2.png" alt="guide" class="guide-img object-fit-cover img-fluid radius-12">
                                                                                                                                                                                                                                                                                                                <div class="rating d-flex align-items-center gap-04 w-fit">
                                                                                                                                                                                                                                                                                                                  <img src="../assets/svg/star-yellow.svg" alt="Star">
                                                                                                                                                                                                                                                                                                                  <span class="d-inline-block">4.0</span>
                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                              </div>

                                                                                                                                                                                                                                                                                                              <div class="content">
                                                                                                                                                                                                                                                                                                                <h4>Jonsky Alexia</h4>
                                                                                                                                                                                                                                                                                                                <h5>$30 (1 Day)</h5>
                                                                                                                                                                                                                                                                                                                <p class="d-flex align-items-center gap-8 location">
                                                                                                                                                                                                                                                                                                                  <img src="../assets/svg/map-black.svg" alt="icon">
                                                                                                                                                                                                                                                                                                                  South America
                                                                                                                                                                                                                                                                                                                </p>
                                                                                                                                                                                                                                                                                                              </div>
                                                                                                                                                                                                                                                                                                            </a>

                                                                                                                                                                                                                                                                                                          </div>
                                                                                                                                                                                                                                                                                                        </section> -->
            <!-- guide end -->

            <!-- budget start -->
            <!-- <section class="budget pt-12">

                                                                                                                                                                                                                                                                                                          <div class="title d-flex align-items-center justify-content-between">
                                                                                                                                                                                                                                                                                                            <h2 class="shrink-0">On Budget Tour</h2>
                                                                                                                                                                                                                                                                                                            <a href="hotels.html" class="shrink-0 d-inline-block">See All</a>
                                                                                                                                                                                                                                                                                                          </div>

                                                                                                                                                                                                                                                                                                          <ul>

                                                                                                                                                                                                                                                                                                            <li>
                                                                                                                                                                                                                                                                                                              <a href="hotel-details.html" class="d-flex align-items-center gap-12">
                                                                                                                                                                                                                                                                                                                <div class="image shrink-0 overflow-hidden radius-8">
                                                                                                                                                                                                                                                                                                                  <img src="../assets/images/home/budget-1.png" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
                                                                                                                                                                                                                                                                                                                </div>

                                                                                                                                                                                                                                                                                                                <div class="content shrink-0 d-flex align-items-center gap-12 justify-content-between flex-grow">
                                                                                                                                                                                                                                                                                                                  <div>
                                                                                                                                                                                                                                                                                                                    <h4>Ledadu Beach</h4>
                                                                                                                                                                                                                                                                                                                    <h5>3 days 2 nights</h5>
                                                                                                                                                                                                                                                                                                                    <p class="d-flex align-items-center gap-8 location">
                                                                                                                                                                                                                                                                                                                      <img src="../assets/svg/map-marker.svg" alt="icon">
                                                                                                                                                                                                                                                                                                                      Australia
                                                                                                                                                                                                                                                                                                                    </p>
                                                                                                                                                                                                                                                                                                                  </div>
                                                                                                                                                                                                                                                                                                                  <p class="price"><span>$20</span>/Person</p>
                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                              </a>
                                                                                                                                                                                                                                                                                                            </li>


                                                                                                                                                                                                                                                                                                            <li>
                                                                                                                                                                                                                                                                                                              <a href="hotel-details.html" class="d-flex align-items-center gap-12">
                                                                                                                                                                                                                                                                                                                <div class="image shrink-0 overflow-hidden radius-8">
                                                                                                                                                                                                                                                                                                                  <img src="../assets/images/home/budget-2.png" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
                                                                                                                                                                                                                                                                                                                </div>

                                                                                                                                                                                                                                                                                                                <div class="content shrink-0 d-flex align-items-center gap-12 justify-content-between flex-grow">
                                                                                                                                                                                                                                                                                                                  <div>
                                                                                                                                                                                                                                                                                                                    <h4>Endigada Beach</h4>
                                                                                                                                                                                                                                                                                                                    <h5>5 days 4 nights</h5>
                                                                                                                                                                                                                                                                                                                    <p class="d-flex align-items-center gap-8 location">
                                                                                                                                                                                                                                                                                                                      <img src="../assets/svg/map-marker.svg" alt="icon">
                                                                                                                                                                                                                                                                                                                      Australia
                                                                                                                                                                                                                                                                                                                    </p>
                                                                                                                                                                                                                                                                                                                  </div>
                                                                                                                                                                                                                                                                                                                  <p class="price"><span>$25</span>/Person</p>
                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                              </a>
                                                                                                                                                                                                                                                                                                            </li>
                                                                                                                                                                                                                                                                                                          </ul>
                                                                                                                                                                                                                                                                                                        </section> -->
            <!-- budget end -->
        </main>

        <!-- bottom navigation start -->
        <footer class="bottom-nav">
            <ul class="d-flex align-items-center justify-content-around w-100 h-100">
                <li>
                    <a href="home.html">
                        <img src="{{ asset('assets/trainerSvg/svg/bottom-nav/home-active.svg') }}" alt="home">
                    </a>
                </li>
                <li>
                    <a href="#" onclick="showAlert('Explore clicked'); return false;">
                        <img src="{{ asset('assets/trainerSvg/svg/bottom-nav/category.svg') }}" alt="category">
                    </a>
                </li>
                <li>
                    <a href="#" onclick="showAlert('Payment clicked'); return false;">
                        <img src="{{ asset('assets/trainerSvg/svg/bottom-nav/ticket.svg') }}" alt="ticket">
                    </a>
                </li>
                <li>
                    <a href="#" onclick="showAlert('Module clicked'); return false;">
                        <img src="{{ asset('assets/trainerSvg/svg/bottom-nav/heart.svg') }}" alt="heart">
                    </a>
                </li>
                <li>
                    <a href="{{ url('/user') }}">
                        <img src="{{ asset('assets/trainerSvg/svg/bottom-nav/profile.svg') }}" alt="profile">
                    </a>
                </li>
            </ul>

            <script>
                function showAlert(message) {
                    alert(message);
                }
            </script>
            <li>
                <a href="{{ url('/user') }}">
                    <img src="{{ asset('assets/trainerSvg/svg/bottom-nav/profile.svg') }}" alt="profile">
                </a>
            </li>
            </ul>
        </footer>
        <!-- bottom navigation end -->

        <!-- service modal start -->
        <div class="modal fade serviceModal bottomModal modalBg" id="serviceModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="modal-close rounded-full" data-bs-dismiss="modal"
                            aria-label="Close">
                            <img src="../assets/svg/close-black.svg" alt="Close">
                        </button>
                        <h1 class="modal-title">All Services</h1>
                    </div>
                    <div class="modal-body">
                        <!-- item 1 -->
                        <a href="service-location.html">
                            <figure class="item text-center">
                                <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                                    <img src="../assets/images/home/airport.png" alt="airport"
                                        class="img-fluid backface-hidden">
                                </div>
                                <figcaption>Airport</figcaption>
                            </figure>
                        </a>

                        <!-- item 2 -->
                        <a href="service-location.html">
                            <figure class="item text-center">
                                <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                                    <img src="../assets/images/home/car.png" alt="car"
                                        class="img-fluid backface-hidden">
                                </div>
                                <figcaption>Taxi</figcaption>
                            </figure>
                        </a>

                        <!-- item 3 -->
                        <a href="service-location.html">
                            <figure class="item text-center">
                                <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                                    <img src="../assets/images/home/hotel.png" alt="hotel"
                                        class="img-fluid backface-hidden">
                                </div>
                                <figcaption>Hotel</figcaption>
                            </figure>
                        </a>

                        <!-- item 4 -->
                        <a href="service-location.html">
                            <figure class="item text-center">
                                <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                                    <img src="../assets/images/home/villa.png" alt="airport"
                                        class="img-fluid backface-hidden">
                                </div>
                                <figcaption>Villa</figcaption>
                            </figure>
                        </a>

                        <!-- item 5 -->
                        <a href="service-location.html">
                            <figure class="item text-center">
                                <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                                    <img src="../assets/images/home/cafe.png" alt="car"
                                        class="img-fluid backface-hidden">
                                </div>
                                <figcaption>Cafe</figcaption>
                            </figure>
                        </a>

                        <!-- item 6 -->
                        <a href="service-location.html">
                            <figure class="item text-center">
                                <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                                    <img src="../assets/images/home/luggage.png" alt="hotel"
                                        class="img-fluid backface-hidden">
                                </div>
                                <figcaption>Luggage</figcaption>
                            </figure>
                        </a>

                        <!-- item 7 -->
                        <a href="service-location.html">
                            <figure class="item text-center">
                                <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                                    <img src="../assets/images/home/boat.png" alt="car"
                                        class="img-fluid backface-hidden">
                                </div>
                                <figcaption>Ship</figcaption>
                            </figure>
                        </a>

                        <!-- item 8 -->
                        <a href="service-location.html">
                            <figure class="item text-center">
                                <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                                    <img src="../assets/images/home/camera.png" alt="hotel"
                                        class="img-fluid backface-hidden">
                                </div>
                                <figcaption>Camera </figcaption>
                            </figure>
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <!-- service modal end -->

        <!-- filter modal start -->
        <div class="modal fade filterModal bottomModal" id="filterModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="modal-close rounded-full" data-bs-dismiss="modal"
                            aria-label="Close">
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
                                        <input type="checkbox" id="hotel">
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
                                        <input type="radio" name="star" id="star1">
                                        <img src="../assets/svg/star-yellow.svg" alt="star">
                                    </label>
                                </li>
                                <li>
                                    <label for="star2" class="filter-label">
                                        <input type="radio" name="star" id="star2">
                                        <img src="../assets/svg/star-yellow.svg" alt="star">
                                        <img src="../assets/svg/star-yellow.svg" alt="star">
                                    </label>
                                </li>
                                <li>
                                    <label for="star3" class="filter-label">
                                        <input type="radio" name="star" id="star3">
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
                                        <input type="radio" name="star" id="star5">
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
                            <button type="button" class="clear-all-btn" data-bs-dismiss="modal"
                                aria-label="Close">Clear All</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- jquery -->
        <script src="{{ asset('assets/trainerCss/css/jquery-ui.min.css') }}"></script>

        <!-- bootstrap -->
        <script src="{{ asset('assets/trainerCss') }}"></script>

        <!-- jquery ui -->
        <script src="{{ asset('assets/trainerCss/css/jquery-ui.min.css') }}"></script>

        <!-- mixitup -->
        <script src="{{ asset('assets/trainerJs/js/mixitup.min.js') }}"></script>


        <!-- gasp -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/gsap.min.js"></script>

        <!-- draggable -->
        <script src="Draggable.min.js"></script>

        <!-- swiper -->
        <script src="{{ asset('assets/trainerJs/js/swiper-bundle.min.js') }}"></script>

        <!-- datepicker -->
        <script src="{{ asset('assets/trainerJs/js/jquery.datetimepicker.full.js') }}"></script>

        <!-- google-map api -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCodvr4TmsTJdYPjs_5PWLPTNLA9uA4iq8&callback=initMap"
            type="text/javascript"></script>


        <!-- script -->
        <script src="{{ asset('assets/trainerJs/js/script.js') }}"></script>
        <script src="{{ asset('assets/trainerJs/js/bootstrap.bundle.min.js') }}"></script>

        </body>

        </html>
    @endsection
