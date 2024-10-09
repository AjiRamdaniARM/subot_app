@extends('trainer.auth.main')
@section('content-auth')
    <section class="main-auth">
        <div class="">
           <div class="content-auth flex flex-wrap-reverse justify-center items-center gap-10">
            <div class="a_right flex flex-col justify-start items-start">
                <img class="w-44 md:hidden lg:block hidden flex justify-center items-center" src="{{asset('assets/img/logo.png')}}" alt="logo">
                <br>
                <h1 class="text-2xl font-bold">Hallo!</h1>
                <p>Opsi Masuk</p>
                <br>
                <div class="content-button">
                    <div class="container-button-siswa flex flex-col gap-5">
                        <button onclick="alert('belum bisa di akses')" class="text-start border-[1px] border-[#D3DFE7] font-semibold px-10 py-2 bg-[#00809E] hover:bg-[#0DA2C3FF] transition-all rounded-[8px] text-[20px] text-white rounded-[8px] text-[20px] text-black flex justify-between gap-10 items-center w-ful
                        "> <div>
                            Siswa  
                            <div class="font-normal text-[12px]">
                                Akses Masuk Siswa 
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg></button>
                      <!-- Button HTML -->
                        <button class="button text-start  font-semibold px-10 py-2 bg-[#DD7325] hover:bg-[#FF7D20FF] transition-all rounded-[8px] text-[20px] text-white flex justify-between gap-10 items-center w-full" onclick="navigateWithLoading()">
                            <div id="buttonContent">
                                Trainer  
                                <div class="font-normal text-[12px]">
                                    Akses Masuk Trainer
                                </div>
                            </div>
                            <!-- SVG Arrow Icon -->
                            <svg id="button" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                            
                            <!-- Loading Spinner (Hidden by Default) -->
                            <div id="loadingSpinner" class="hidden animate-spin border-t-2 border-white rounded-full w-5 h-5"></div>
                        </button>
                        <button class="buttonadmin text-start border-[1px] border-[#D3DFE7] font-semibold px-10 py-2 bg-[#F5F8FA] hover:bg-[#C1C4C5FF] transition-all rounded-[8px] text-[20px] text-black flex justify-between gap-10 items-center w-full" onclick="navigateWithLoadingadmin()">
                            <div id="buttonContentadmin">
                               Admin
                                <div class="font-normal text-[12px]">
                                    Akses Masuk Super admin
                                </div>
                            </div>
                            <!-- SVG Arrow Icon -->
                            <svg id="buttonadmin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 text-black">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                            
                            <!-- Loading Spinner (Hidden by Default) -->
                            <div id="loadingSpinneradmin" class="hidden animate-spin border-t-2 border-black rounded-full w-5 h-5"></div>
                        </button>

                <!-- JavaScript Logic -->
                <script>
                    function navigateWithLoading() {
                        // Tampilkan spinner loading dan sembunyikan konten
                        document.getElementById('button').classList.add('hidden'); // Sembunyikan teks dan deskripsi
                        document.getElementById('button').classList.add('hidden'); // Sembunyikan ikon panah
                        document.getElementById('loadingSpinner').classList.remove('hidden'); // Tampilkan loading spinner

                        // Simulasi delay sebelum berpindah halaman (1 detik)
                        setTimeout(function() {
                            window.location.href = '{{ route("login.trainer") }}'; // Pindah ke halaman
                        }, 1000); // Delay 1 detik
                    }

                      function navigateWithLoadingadmin() {
                        // Tampilkan spinner loading dan sembunyikan konten
                        document.getElementById('buttonadmin').classList.add('hidden'); // Sembunyikan teks dan deskripsi
                        document.getElementById('buttonadmin').classList.add('hidden'); // Sembunyikan ikon panah
                        document.getElementById('loadingSpinneradmin').classList.remove('hidden'); // Tampilkan loading spinner

                        // Simulasi delay sebelum berpindah halaman (1 detik)
                        setTimeout(function() {
                            window.location.href = '{{ route("loginAdmin") }}'; // Pindah ke halaman
                        }, 1000); // Delay 1 detik
                    }
                    // Fungsi untuk reset button jika kembali ke halaman sebelumnya
                    window.addEventListener('pageshow', function(event) {
                        if (event.persisted || performance.navigation.type == 2) {
                            // Halaman dibuka kembali dari cache atau lewat tombol 'Back'
                            document.getElementById('buttonContent').classList.remove('hidden'); // Tampilkan kembali teks dan deskripsi
                            document.getElementById('button').classList.remove('hidden'); // Tampilkan kembali ikon panah
                            document.getElementById('loadingSpinner').classList.add('hidden'); // Sembunyikan loading spinner
                        }
                    });
                       // Fungsi untuk reset button jika kembali ke halaman sebelumnya
                       window.addEventListener('pageshow', function(event) {
                        if (event.persisted || performance.navigation.type == 2) {
                            // Halaman dibuka kembali dari cache atau lewat tombol 'Back'
                            document.getElementById('buttonContentadmin').classList.remove('hidden'); // Tampilkan kembali teks dan deskripsi
                            document.getElementById('buttonadmin').classList.remove('hidden'); // Tampilkan kembali ikon panah
                            document.getElementById('loadingSpinneradmin').classList.add('hidden'); // Sembunyikan loading spinner
                        }
                    });
                </script>

            <!-- Tailwind CSS Spinner (Optional) -->
            <style>
                @keyframes spin {
                    to { transform: rotate(360deg); }
                }

                .animate-spin {
                    animation: spin 1s linear infinite;
                }
            </style>
                      
                    </div>
                </div>
            </div>
            <div class="a_left p-3">
                <img class="w-96 rounded-lg" src="{{asset('assets/trainerImages/img-auth/image_auth.jpg')}}" alt="">
            </div>
           </div>
        </div>
    </section>
@endsection