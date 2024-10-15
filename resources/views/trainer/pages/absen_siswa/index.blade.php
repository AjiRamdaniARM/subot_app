@extends('trainer.layouts.main')
@section('children')
<section class="ab_siswa">
    <div data-aos="fade-down" class="bg-white py-4">
        <div class="banner-page_kids bg-[#CEEEF0] border-2 border-[#90C0FFFF] rounded-lg px-[40px] lg:px-[50px] py-5">
            <div class="content-banner flex justify-between items-center">
                <div class="font">
                    <h1 class="poppins-regular">Absensi Siswa</h1>
                    <h6 class="lg:text-3xl text-[18px] poppins-bold lg:w-80">Sukarobot Academy</h6>
                    <button id="button-done" onclick="button_done();" class="bg-[#5CADFFFF] hover:scale-105 rounded-[15px] relative mt-3 px-5 py-3 text-white font-bold">Selesai Absensi</button>
                </div>
                <div class="img">
                    <img class="w-80 lg:block md:hidden hidden" src="{{asset('assets/img/undraw_children_re_c37f.svg')}}" alt="illustrasi">
                </div>
            </div>
        </div>
        <div class="list_siswa relative py-10">
            <div class="p-3 flex items-center justify-between border-t cursor-pointer hover:bg-gray-200">
                <div class="flex items-center">
                    <img class="rounded-full h-10 w-10" src="https://loremflickr.com/g/600/600/paris">
                    <div class="ml-2 flex flex-col">
                        <div class="leading-snug text-sm text-gray-900 font-bold">Paris</div>
                        <div class="leading-snug text-xs text-gray-600">@paris</div>
                    </div>
                </div>
                <div class="button-gp">
                    <button id="btn-hadir" class="h-8 px-3 text-md font-bold text-blue-400 border border-blue-400 rounded-full hover:bg-blue-100">
                        Hadir
                    </button>
                    <button id="btn-tidak-hadir" class="h-8 px-3 text-md font-bold text-red-400 border border-red-400 rounded-full hover:bg-red-100">
                        Tidak Hadir
                    </button>
                </div>
                
            </div>
        </div>
    </div>
</section>

    

    {{-- === sistem button js kehadiran === --}}
    <script>
        const btnHadir = document.getElementById('btn-hadir');
        const btnTidakHadir = document.getElementById('btn-tidak-hadir');

        // Function to create and animate SVG icon using Tailwind classes
        function createIcon() {
            const icon = document.createElement('div');
            icon.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" /></svg>';
            icon.classList.add('opacity-0', 'scale-50', 'transition', 'duration-300', 'ease-in-out');
            return icon;
        }

        // Event listener untuk tombol Hadir
        btnHadir.addEventListener('click', function() {
            const icon = createIcon();
            btnHadir.innerHTML = '';
            btnHadir.appendChild(icon);
            setTimeout(() => {
                icon.classList.remove('opacity-0', 'scale-50');
                icon.classList.add('opacity-100', 'scale-100');
            }, 10); // Delay singkat agar animasi berjalan
            btnTidakHadir.style.display = 'none';
        });

        // Event listener untuk tombol Tidak Hadir
        btnTidakHadir.addEventListener('click', function() {
            const icon = createIcon();
            btnTidakHadir.innerHTML = '';
            btnTidakHadir.appendChild(icon);
            setTimeout(() => {
                icon.classList.remove('opacity-0', 'scale-50');
                icon.classList.add('opacity-100', 'scale-100');
            }, 10);
            btnHadir.style.display = 'none';
        });

        // Event listener untuk tombol "Selesai Absen"
        const selesaiAbsenBtn = document.getElementById('selesai-absen-btn');
        selesaiAbsenBtn.addEventListener('click', function() {
            alert('Absensi selesai!');
            // Tambahkan logika lain di sini
        });

    </script>
    {{-- === sistem button js kehadiran === --}}
@endsection
