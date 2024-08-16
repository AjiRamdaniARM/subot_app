@extends('trainer.layouts.main')
@section('children')
    <main class="booking-main book-hotel">
        <!-- page-title -->
        <div class="page-title">
            <button type="button"
                class="back-btn back-page-btn d-flex align-items-center justify-content-center rounded-full">
                <img src="{{ asset('assets/trainerSvg/svg/arrow-left-black.svg') }}" alt="arrow">
            </button>
            <h3 class="main-title">Sd Aisyiyah</h3>
        </div>

        <div class="details-body">
            <!-- customer-info start -->
            <section class="customer-info pb-12">
                <div class="title mb-16">
                    <h4>Trainer Info</h4>
                </div>

            </section>
            <!-- customer-info end -->

            <!-- order-info start -->
            {{-- <section class="order-info py-12">
        <div class="title mb-16">
          <h4>Order Info</h4>
        </div>

        <!-- order item -->
        <div class="item d-flex align-items-center gap-16 w-100">
          <div class="image shrink-0 overflow-hidden radius-8">
            <img src="../assets/images/booking/loc-2.png" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
          </div>

          <div class="content flex-grow">
            <h4>The Lalit New Delhi</h4>
            <p class="d-flex align-items-center gap-04 location mt-04">
              <img src="../assets/svg/map-marker.svg" alt="icon">
              Uttar Pradesh, India
            </p>
            <p class="rating d-flex align-items-center gap-04 mt-16">
              <img src="../assets/svg/star-yellow.svg" alt="icon">
              4.4 <span>(41)</span>
            </p>
          </div>
        </div>

        <!-- room-type -->
        <div class="room-type mt-16 d-flex align-items-center justify-content-between">
          <p>Type Room</p>
          <p>Presidential Suite</p>
        </div>
      </section> --}}
            <!-- order-info end -->

            <!-- facilities start -->
            {{-- <section class="facilities py-12">
        <!-- title -->
        <div class="title d-flex align-items-center justify-content-between">
          <h4 class="shrink-0">Common Facilities</h4>
          <button type="button" class="shrink-0 d-inline-block" data-bs-toggle="modal" data-bs-target="#serviceModal">See All</button>
        </div>

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

                        <!--Days-->
                        <div>
                            <p class="pb-8">Days</p>
                            <input type="text" id="hcindate" placeholder="Selasa" class="input-field">
                            <span class="icon shrink-0">
                            </span>
                            </label>
                        </div>

                        <!-- Class Academy -->
                        <div>
                            <p class="pb-8">Class Academy</p>
                            <input type="text" id="hcoutdate" placeholder="Club" class="input-field">
                            <span class="icon shrink-0">
                            </span>
                            </label>
                        </div>

                        <!--Tools-->
                        <div>
                            <p class="pb-8">Tools</p>
                            <input type="text" id="hcindate" placeholder="Box 1" class="input-field">
                            <span class="icon shrink-0">
                            </span>
                            </label>
                        </div>

                        <!-- Pj Club -->
                        <div>
                            <p class="pb-8">Pj Club</p>
                            <input type="text" id="hcoutdate" placeholder="Aziz Ramadhan" class="input-field">
                            <span class="icon shrink-0">
                            </span>
                            </label>
                        </div>

                        <!--FIRST HOUR TEACHING-->
                        <div>
                            <p class="pb-8">First Hour Teaching</p>
                            <input type="text" id="hcindate" placeholder="16.00" class="input-field">
                            <span class="icon shrink-0">
                            </span>
                            </label>
                        </div>

                        <!-- FINAL HOUR OF TEACHING -->
                        <div>
                            <p class="pb-8">Final Of Teaching</p>
                            <input type="text" id="hcoutdate" placeholder="17.30" class="input-field">
                            <span class="icon shrink-0">
                            </span>
                            </label>
                        </div>

                        <!-- Tanggal Jadwal -->
                        <div>
                            <p class="pb-8">Schedule Date</p>
                            <input type="date" id="hcoutdate" placeholder="" class="input-field">
                            <span class="icon shrink-0">
                            </span>
                            </label>
                        </div>

                        <!-- Level Accademy -->
                        <div>
                            <p class="pb-8">Level Accademy</p>
                            <input type="text" id="hcoutdate" placeholder="Box 1" class="input-field">
                            <span class="icon shrink-0">
                            </span>
                            </label>
                        </div>

                        <!-- Program Accademy -->
                        <div>
                            <p class="pb-8">Program Accademy</p>
                            <input type="text" id="hcoutdate" placeholder="Robotik" class="input-field">
                            <span class="icon shrink-0">
                            </span>
                            </label>
                        </div>

                        <!-- Catatan -->
                        <div class="container">
                            <p class="pb-8">Absen</p>
                            <button class="btn" id="openModalBtn">Absen</button>
                        </div>

                        <!-- The Modal -->
                        <div id="myModal" class="modal">
                            <div class="overlay"></div>
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2>Daftar Hadir</h2>
                                    <span class="close" id="closeModalBtn">&times;</span>
                                </div>
                                <div class="modal-body flex flex-col">
                                    <input readonly type="text" id="hcoutdate1" value="Aji : T Hadir"
                                        class="input-field">
                                    <input readonly type="text" id="hcoutdate2" value="Budi : T Hadir"
                                        class="input-field">
                                </div>
                                <div class="modal-footer">
                                    <button class="btn" id="submitNoteBtn">Kembali</button>
                                </div>
                            </div>
                        </div>
                        <style>
                            .modal-content {
                                padding: 20px;
                                border-radius: 8px;
                                background: #fff;
                                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                            }

                            .modal-body {
                                display: flex;
                                flex-direction: column;
                            }

                            .input-field {
                                margin-bottom: 10px;
                                /* Menambahkan jarak di bawah setiap input */
                                padding: 8px;
                                border: 1px solid #ddd;
                                border-radius: 4px;
                            }

                            .btn {
                                background-color: #007bff;
                                color: white;
                                border: none;
                                border-radius: 4px;
                                padding: 10px 20px;
                                cursor: pointer;
                            }

                            .btn:hover {
                                background-color: #0056b3;
                            }

                            .close {
                                cursor: pointer;
                                font-size: 24px;
                                color: #333;
                            }

                            .close:hover {
                                color: #f00;
                            }
                        </style>

                        <!--script-->
                        <script>
                            // Get modal elements
                            const modal = document.getElementById('myModal');
                            const openModalBtn = document.getElementById('openModalBtn');
                            const closeModalBtn = document.getElementById('closeModalBtn');
                            const submitNoteBtn = document.getElementById('submitNoteBtn');
                            const outputField = document.getElementById('outputField');
                            const inputField = document.getElementById('hcoutdate');

                            // Function to open modal
                            openModalBtn.onclick = function() {
                                modal.style.display = 'block';
                            };

                            // Function to close modal
                            closeModalBtn.onclick = function() {
                                modal.style.display = 'none';
                            };

                            // Function to submit note and close modal
                            submitNoteBtn.onclick = function() {
                                const note = inputField.value.trim();
                                if (note) {
                                    // Display note in output field
                                    outputField.textContent = note;
                                    // Clear input field and close modal
                                    inputField.value = '';
                                    modal.style.display = 'none';
                                } else {
                                    alert('Silakan masukkan catatan.');
                                }
                            };

                            // Close modal if clicked outside
                            window.onclick = function(event) {
                                if (event.target === modal) {
                                    modal.style.display = 'none';
                                }
                            };
                        </script>
                        <style>
                            body {
                                font-family: Arial, sans-serif;
                                margin: 0;
                                background-color: #f0f2f5;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                height: 100vh;
                            }

                            .container {
                                text-align: center;
                                width: 80%;
                                max-width: 600px;
                            }

                            .btn {
                                padding: 12px 24px;
                                border: none;
                                border-radius: 5px;
                                background-color: #007bff;
                                color: #ffffff;
                                cursor: pointer;
                                font-size: 18px;
                                transition: background-color 0.3s ease, transform 0.3s ease;
                            }

                            .btn:hover {
                                background-color: #0056b3;
                                transform: scale(1.05);
                            }

                            .output-field {
                                margin-top: 20px;
                                padding: 15px;
                                border: 1px solid #ddd;
                                border-radius: 5px;
                                background-color: #ffffff;
                                font-size: 16px;
                                color: #333;
                                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                            }

                            /* Modal styles */
                            .modal {
                                display: none;
                                position: fixed;
                                z-index: 1;
                                left: 0;
                                top: 0;
                                width: 100%;
                                height: 100%;
                                overflow: auto;
                                background-color: rgba(0, 0, 0, 0.4);
                            }

                            .modal-content {
                                background-color: #ffffff;
                                margin: 15% auto;
                                margin-top: 40%;
                                /* Menambah jarak dari atas */
                                padding: 20px;
                                border-radius: 8px;
                                width: 90%;
                                max-width: 500px;
                                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                            }

                            .modal-header {
                                border-bottom: 1px solid #ddd;
                                padding-bottom: 10px;
                                margin-bottom: 10px;
                                display: flex;
                                justify-content: space-between;
                                align-items: center;
                            }

                            .modal-header h2 {
                                margin: 0;
                            }

                            .modal-body {
                                margin-bottom: 20px;
                            }

                            .modal-footer {
                                text-align: right;
                            }

                            .close {
                                color: #aaa;
                                font-size: 24px;
                                font-weight: bold;
                                cursor: pointer;
                            }

                            .close:hover {
                                color: #000;
                            }

                            .input-field {

                                border: 1px solid #ccc;
                                border-radius: 4px;
                                width: 100%;
                                box-sizing: border-box;
                            }
                        </style>
                    </div>
                </form>
            </section>
            <!-- search end -->

            <!-- pay-btn start -->
            <div class="pay-btn mt-64">
                <a href="{{ url('/home') }}" class="btn-primary">Kembali</a>
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
                    <input type="text" id="checkInDateInput" />

                    <div class="btns d-flex align-items-center gap-16">
                        <button type="button" class="radius-20 w-50 cancel-btn" data-bs-dismiss="modal"
                            aria-label="Close">Cancel</button>
                        <button type="button" class="radius-20 w-50 apply-btn" data-bs-dismiss="modal"
                            aria-label="Close">Apply</button>
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
                    <input type="text" id="checkOutDateInput" />

                    <div class="btns d-flex align-items-center gap-16">
                        <button type="button" class="radius-20 w-50 cancel-btn" data-bs-dismiss="modal"
                            aria-label="Close">Cancel</button>
                        <button type="button" class="radius-20 w-50 apply-btn" data-bs-dismiss="modal"
                            aria-label="Close">Apply</button>
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
