@extends('trainer.layouts.main')
@section('children')

    <body class="scrollbar-hidden">

        <main class="details hotel-details">
            <!-- banner start -->
            <section class="banner position-relative">
                <img src="{{ asset('assets/img/profilesekola.png') }}" alt="Banner" class="w-100 img-fluid">

                <!-- title -->
                <div class="page-title">
                    <button type="button" onclick="window.location.href='{{ url('/home') }}'"
                        class="back-btn back-page-btn d-flex align-items-center justify-content-center rounded-full">
                        <img src="{{ asset('assets/trainerSvg/svg/arrow-left-black.svg') }}" alt="arrow">
                    </button>
                    @if ($getScheduleTrainer->kelas_name == 'Club')
                        <h3 class="main-title">{{ $getScheduleTrainer->sekolah }}</h3>
                    @else
                        <h3 class="main-title">{{ $getScheduleTrainer->kelas_name }}</h3>
                    @endif

                </div>
            </section>
            <!-- banner end -->

            <!-- details-body start -->
            <section class="details-body">
                <!-- details-title -->
                <section class="d-flex align-items-center gap-8 details-title">
                    <div class="flex-grow">
                        @if ($getScheduleTrainer->kelas_name == 'Club')
                            <h3>{{ $getScheduleTrainer->sekolah }}</h3>
                        @else
                            <h3>{{ $getScheduleTrainer->kelas_name }}</h3>
                        @endif
                        <ul class="d-flex align-items-center gap-8">
                            <li class="d-flex align-items-center gap-04">
                                <img src="{{ asset('assets/trainerSvg/svg/map-marker.svg') }}" alt="icon">
                                <p>{{ date('H:i', strtotime($getScheduleTrainer->jm_awal)) }} -
                                    {{ date('H:i', strtotime($getScheduleTrainer->jm_akhir)) }}</p>
                            </li>
                            <li class="d-flex align-items-center gap-04">
                                <p><span></span>{{ $getScheduleTrainer->kelas_name }}</p></span>
                            </li>
                        </ul>
                    </div>
                </section>
                <section class="guide py-12">
                    <div class="title d-flex align-items-center justify-content-between">
                        <h2 class="shrink-0">Siswa</h2>
                        @if ($getScheduleTrainer->absensi_anak == 'tutup')
                            <a class="shrink-0 d-inline-block">Anda Sudah Absen </a>
                        @else
                            <a href="{{ url('/absensiswa/' . $getScheduleTrainer->id_schedules) }}"
                                class="shrink-0 d-inline-block">See
                                All</a>
                        @endif

                    </div>
                    <div class="d-flex gap-24 all-cards scrollbar-hidden">
                        @foreach ($getDataStudent as $student)
                            <a class="d-flex gap-16 item w-fit shrink-0">
                                <div class="image position-relative shrink-0">
                                    <img src="{{ asset('assets/data/dataAnak/img/' . $student->file) }}" alt="guide"
                                        class="guide-img object-fit-cover img-fluid radius-12">
                                </div>

                                <div class="content">
                                    <h4>{{ $student->nama_lengkap }}</h4>
                                    <h5>Kelas 3A</h5>
                                    <p class="d-flex align-items-center gap-8 location">
                                        Basic 1
                                    </p>
                                </div>
                            </a>
                        @endforeach




                    </div>
                </section>

                <!-- reviews start -->
                <form action="{{ url('/laporantrainer/porsses/' . $getScheduleTrainer->id_schedules) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <section class="reviews py-16">
                        <!-- title -->
                        <div class="title d-flex align-items-center justify-content-between">
                            <h4 class="shrink-0">Dokumentasi</h4>
                        </div>

                        <div class="container mt-5">
                            <div class="card">
                                <div class="card-body">
                                    <div id="drop-area"
                                        class="border rounded d-flex justify-content-center align-items-center"
                                        style="height: 200px; cursor: pointer;">
                                        <div class="text-center">
                                            <i class="bi bi-cloud-arrow-up-fill text-primary" style="font-size: 48px;"></i>
                                            <p class="mt-3" id="drop-text">Drag and drop your image here or click to
                                                select a
                                                file.</p>
                                            <p id="file-info" class="file-info"></p>
                                            <!-- Container untuk menampilkan keterangan file -->
                                        </div>
                                    </div>
                                    <input type="file" name="file" id="fileElem" multiple accept="image/*"
                                        class="d-none">
                                </div>
                            </div>
                        </div>

                        <style>
                            .highlight {
                                border-color: #007bff !important;
                                /* Warna border saat highlight */
                            }

                            .file-info {
                                color: #28a745;
                                /* Warna teks untuk keterangan file */
                                font-weight: bold;
                                margin-top: 10px;
                            }
                        </style>

                        <script>
                            let dropArea = document.getElementById("drop-area");
                            let dropText = document.getElementById("drop-text");
                            let fileInfo = document.getElementById("file-info");

                            ["dragenter", "dragover", "dragleave", "drop"].forEach((eventName) => {
                                dropArea.addEventListener(eventName, preventDefaults, false);
                                document.body.addEventListener(eventName, preventDefaults, false);
                            });

                            ["dragenter", "dragover"].forEach((eventName) => {
                                dropArea.addEventListener(eventName, highlight, false);
                            });

                            ["dragleave", "drop"].forEach((eventName) => {
                                dropArea.addEventListener(eventName, unhighlight, false);
                            });

                            dropArea.addEventListener("drop", handleDrop, false);

                            function preventDefaults(e) {
                                e.preventDefault();
                                e.stopPropagation();
                            }

                            function highlight(e) {
                                dropArea.classList.add("highlight");
                            }

                            function unhighlight(e) {
                                dropArea.classList.remove("highlight");
                            }

                            function handleDrop(e) {
                                let dt = e.dataTransfer;
                                let files = dt.files;
                                handleFiles(files);
                            }

                            function handleFiles(files) {
                                [...files].forEach(uploadFile);
                            }

                            function uploadFile(file) {
                                console.log("Uploading", file.name);

                                // Tampilkan nama file di area file-info
                                fileInfo.textContent = `File selected: ${file.name}`;
                                dropText.style.display = 'none'; // Sembunyikan teks drag and drop setelah file dipilih
                            }

                            dropArea.addEventListener("click", () => {
                                fileElem.click();
                            });

                            let fileElem = document.getElementById("fileElem");
                            fileElem.addEventListener("change", function(e) {
                                handleFiles(this.files);
                            });
                        </script>


                        <!-- location start -->
                        <section class="details-location pt-16">
                            <!-- title -->
                            <div class="title">
                                <h4>Location</h4>
                            </div>

                            <!-- map -->
                            <div class="overflow-hidden radius-16 map">
                                @if ($getScheduleTrainer->api_maps == null)
                                    <div style="background-color: white; padding:10px">
                                        <h6>Mohon maaf atas ketidaknyamanannya. Untuk pertanyaan mengenai alamat atau
                                            informasi
                                            lainnya, silakan hubungi administrator kami.</h6>
                                    </div>
                                @else
                                    <iframe src="{{ $getScheduleTrainer->api_maps }}" style="border:0;" allowfullscreen=""
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                @endif

                            </div>
                        </section>
                        <!-- location end -->
                    </section>
                    <!-- details-body end -->

                    <!-- details-footer start -->
                    <section class="details-footer d-flex align-items-center justify-content-between gap-8 w-100">
                        <p><span>{{ date('H:i', strtotime($getScheduleTrainer->dj_akhir)) }}</span></p>
                        {{-- <a href="{{ url('/laporantrainer/' . $getScheduleTrainer->id_schedules) }}">Continue</a> --}}
                        @if ($getScheduleTrainer->dokumentasi == 'Ya')
                            <a href="{{ url('/laporantrainer/' . $getScheduleTrainer->id_schedules) }}">Continue</a>
                        @else
                            <button type="submit">Continue</button>
                        @endif

                    </section>
                </form>
                <!-- details-footer end -->
        </main>

    </body>
@endsection
