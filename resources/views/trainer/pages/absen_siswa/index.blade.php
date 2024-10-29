@extends('trainer.layouts.main')
@section('children')
<section class="ab_siswa">
    <div data-aos="fade-down" class="bg-white px-4 lg:px-0 py-4">
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
        <form action="{{ '/absensiswa/prossess/' . $getDataSchedules->id }}" method="POST">
            @csrf
            <div class="list_siswa relative py-10">
                @foreach ($getDataStudent as $siswa)
                    <div class="p-3 flex items-center justify-between border-t cursor-pointer hover:bg-gray-200">
                        <div class="flex items-center">
                            <img class="rounded-full object-cover h-10 w-10" src="{{ asset('assets/data/dataAnak/img/' . $siswa->file) }}">
                            <div class="ml-2 flex flex-col">
                                <div class="leading-snug text-sm text-gray-900 font-bold">{{$siswa->nama_lengkap}}</div>
                                <div class="leading-snug text-xs text-gray-600">{{$siswa->kelas}}</div>
                            </div>
                        </div>
                        <div class="button-gp">
                            <button id="btn-hadir{{ $siswa->nama_lengkap }}" name="attendance[{{ $siswa->id }}]"
                                class="h-8 px-3 text-md font-bold text-blue-400 border border-blue-400 rounded-full hover:bg-blue-100">
                                Hadir
                            </button>
                            <button id="btn-tidak-hadir{{ $siswa->nama_lengkap }}" name="attendance[{{ $siswa->id }}]"
                                class="h-8 px-3 text-md font-bold text-red-400 border border-red-400 rounded-full hover:bg-red-100">
                                Tidak Hadir
                            </button>
                        </div>                    
                        
                    </div>
                    {{-- === sistem button js kehadiran === --}}
                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                const siswaId = "{{ $siswa->nama_lengkap }}";
                                console.log(siswaId);
                                const btnHadir = document.getElementById(`btn-hadir${siswaId}`);
                                const btnTidakHadir = document.getElementById(`btn-tidak-hadir${siswaId}`);
                                const selesaiAbsenBtn = document.getElementById('selesai-absen-btn');
                        
                                // Function to create and animate SVG icon using Tailwind classes
                                function createIcon() {
                                    const icon = document.createElement('div');
                                    icon.innerHTML = `
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>`;
                                    icon.classList.add('opacity-0', 'scale-50', 'transition', 'duration-300', 'ease-in-out');
                                    return icon;
                                }
                        
                                // Event listener for "Hadir" button
                                if (btnHadir) {
                                    btnHadir.addEventListener('click', function() {
                                        const icon = createIcon();
                                        btnHadir.innerHTML = '';
                                        btnHadir.appendChild(icon);
                                        
                                        setTimeout(() => {
                                            icon.classList.remove('opacity-0', 'scale-50');
                                            icon.classList.add('opacity-100', 'scale-100');
                                        }, 10); // Short delay to trigger animation
                                        
                                        btnTidakHadir.style.display = 'none';
                                    });
                                }
                        
                                // Event listener for "Tidak Hadir" button
                                if (btnTidakHadir) {
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
                                }
                        
                                // Event listener for "Selesai Absen" button
                                if (selesaiAbsenBtn) {
                                    selesaiAbsenBtn.addEventListener('click', function() {
                                        alert('Absensi selesai!');
                                        // Add additional logic here if needed
                                    });
                                }
                            });
                        </script>
                        {{-- === sistem button js kehadiran === --}}
                @endforeach
            </div>
        </form>
    </div>
</section>

    

 
@endsection
