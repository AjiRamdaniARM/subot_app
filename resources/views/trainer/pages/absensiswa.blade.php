@extends('trainer.layouts.main')
@section('children')
    <style>
        /* Gaya untuk checkbox */
        .custom-radio {
            display: inline-flex;
            align-items: center;
            cursor: pointer;
        }

        .custom-radio input {
            display: none;
            /* Sembunyikan input asli */
        }

        .custom-radio .radio-dot {
            position: relative;
            display: inline-block;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            border: 2px solid #007bff;
            margin-right: 8px;
            transition: background-color 0.3s ease;
        }

        .custom-radio input:checked+.radio-dot::after {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #007bff;
        }
    </style>
    <main class="tour-guide">
        <!-- page-title -->
        <div class="page-title">
            <button type="button" onclick="window.location.href='{{ url('/home/absen/' . $getDataSchedules->id) }}'"
                class="back-btn back-page-btn d-flex align-items-center justify-content-center rounded-full">
                <img src="{{ asset('assets/trainerSvg/svg/arrow-left-black.svg') }}" alt="arrow">
            </button>
            <h3 class="main-title">Daftar Siswa</h3>
        </div>
        <form action="{{ '/absensiswa/prossess/' . $getDataSchedules->id }}" method="POST">
            @csrf
            <section class="guide px-24 pb-24">
                <ul>
                    <!-- guide card 1 -->
                    @foreach ($getDataStudent as $siswa)
                        <li>
                            <div class="d-flex gap-16 item w-fit shrink-0">
                                <div class="image position-relative shrink-0">
                                    <img src="{{ asset('assets/data/dataAnak/img/' . $siswa->file) }}" alt="guide"
                                        class="guide-img object-fit-cover img-fluid radius-12">
                                    <div class="rating d-flex align-items-center gap-04 w-fit"></div>
                                </div>
                                <div class="content">
                                    <h4>{{ $siswa->nama_lengkap }}</h4>
                                    <h5>{{ $siswa->kelas }}</h5>
                                    <div class="d-flex justify-content-end align-items-center gap-16">
                                        <label class="custom-radio">
                                            <input type="radio" name="attendance[{{ $siswa->id }}]" value="hadir">
                                            <span class="radio-dot"></span> Hadir
                                        </label>
                                        <label class="custom-radio">
                                            <input type="radio" name="attendance[{{ $siswa->id }}]"
                                                value="tidak hadir">
                                            <span class="radio-dot"></span> Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </section>

            <nav class="navbar fixed-bottom navbar-light">
                <div class="container-fluid justify-content-center">
                    <a id="finish-btn" class="btn btn-primary btn-lg">Selesai</a>
                </div>
            </nav>
            <!-- Pop-up Modal -->

            <div id="confirmation-modal" class="modal">
                <div class="modal-content">
                    <button type="submit">Konfirmasi</button>
                    <p>Apakah Anda yakin ingin menyelesaikan absen?</p>
                    <div class="modal-buttons">
                        <button id="confirm-btn" class="btn btn-primary">Ya</button>
                        <button id="cancel-btn" class="btn btn-secondary">Tidak</button>
                    </div>
                </div>
            </div>
        </form>






    </main>

    <style>
        /* Gaya untuk modal */
        .modal {
            display: none;
            /* Sembunyikan modal secara default */
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
            transition: opacity 0.3s ease;
        }

        .modal-content {
            background-color: #fff;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #ddd;
            width: 90%;
            max-width: 500px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        .btn-primary,
        .btn-secondary {
            padding: 12px 24px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: white;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }

        .modal-buttons {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            gap: 10px;
        }
    </style>

    <script>
        // JavaScript untuk mengatur modal
        document.getElementById('finish-btn').onclick = function() {
            document.getElementById('confirmation-modal').style.display = 'block';
            document.getElementById('confirmation-modal').style.opacity = '1';
            document.querySelector('.modal-content').style.transform = 'scale(1)';
        }

        document.getElementById('cancel-btn').onclick = function() {
            document.getElementById('confirmation-modal').style.display = 'none';
            document.getElementById('confirmation-modal').style.opacity = '0';
            document.querySelector('.modal-content').style.transform = 'scale(0.9)';
        }

        document.getElementById('confirm-btn').onclick = function() {
            document.getElementById('confirmation-modal').style.display = 'none';
            document.getElementById('confirmation-modal').style.opacity = '0';
            document.querySelector('.modal-content').style.transform = 'scale(0.9)';
            window.location.href = '{{ url('/home/absen') }}'; // Redirect ke halaman yang sesuai setelah konfirmasi
        }

        // Menutup modal jika pengguna mengklik di luar modal
        window.onclick = function(event) {
            if (event.target == document.getElementById('confirmation-modal')) {
                document.getElementById('confirmation-modal').style.display = 'none';
                document.getElementById('confirmation-modal').style.opacity = '0';
                document.querySelector('.modal-content').style.transform = 'scale(0.9)';
            }
        }
    </script>
@endsection
