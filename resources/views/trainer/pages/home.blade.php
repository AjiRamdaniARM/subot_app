@extends('trainer.layouts.main')
@section('children')
<section>
    <div class="sidenav lg:px-0 px-4 md:px-0 flex justify-between items-center poppins-regular lg:text-2xl">
        <span class="text-[#0E2C75] poppins-semibold">
            Beranda
        </span>
        <span class="text-[#516AA9] fw-[500]">
            @php
            use Carbon\Carbon;
            \Carbon\Carbon::setLocale('id');
            $tanggalSekarang = Carbon::now()->translatedFormat('l, d F Y');
        @endphp
        <p>{{ $tanggalSekarang }}</p>
        </span>
    </div>

    {{-- === card total === --}}
    <div class="container mx-auto py-10">
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Card 1 -->
            <div class="p-6 rounded-[24px] bg-[#FBDC5C] border-2 border-[#CE7100] text-center">
                <div class="t_one text-lg font-semibold text-[#455068] text-[18px]">
                    Total Penghasilan
                </div>
                <div class="t_two text-2xl font-bold mt-2 text-[#602400] text-[45px]">
                   Rp.0
                </div>
                <div class="t_two text-sm mt-5  text-[18px] text-[#AB5200]">
                    Pertemuan  
                </div>
            </div>
            <!-- Card 2 -->
            <div class="p-6 rounded-[24px] bg-[#FED2D9] border-2 border-[#F64669]  text-center">
                <div class="t_one text-lg font-semibold text-[#455068]">
                    Total Jadwal
                </div>
                <div class="t_two text-2xl font-bold mt-2  text-[#A3072B] text-[45px]">
                   255
                </div>
                <div class="t_two text-sm mt-1 mt-5  text-[18px] text-[#AB5200]">
                    25% Jadwal  
                </div>
            </div>
            <!-- Card 3 -->
            <div class="p-6 rounded-[24px] border-2 border-[#798AA3] bg-[#D3DFE7] text-center">
                <div class="t_one text-lg font-semibold text-[#455068] text-[18px]">
                    Total Laporan
                </div>
                <div class="t_two text-2xl font-bold mt-2  text-[#2E3748] text-[45px]">
                   100
                </div>
                <div class="t_two text-sm mt-1 mt-5  text-[18px] text-[#516AA9]">
                    20% Laporan    
                </div>
            </div>
        </div>
    </div>

    {{-- == card jadwal == --}}
    <div class="container mx-auto py-10">
        <div class="box-card w-full rounded-[24px] border-2 text-start ">
            <div class="body lg:px-10 md:px-10 px-5 py-10">
                <div class="content">
                    <div class="card-1 flex flex-col gap-5">
                        <h6 class="text-[#0E2C75] poppins-semibold text-[20px]">Jadwal Terbaru Trainer</h6>
                        {{-- === card belum absen === --}}
                        <div class="text-[#798AA3]">Jadwal Baru</div>
                        <a href="javascript:void(0);" onclick="showLoading(this, '{{ route('absenTest')}}')">
                            <div class="card-h hover:scale-105 transition-all p-6 rounded-[24px] bg-[#CEEEF0FF] border-2 border-[#0022CEFF] " onclick="showLoading(this)">
                                <div class="content flex flex-col lg:flex-row md:flex-row justify-between lg:gap-0 md:gap-0 gap-2">
                                    <div class="k_right flex flex-col">
                                        <span class="poppins-regular">
                                            Basic 1 | Huna MRT 2
                                        </span>
                                        <span class="text-[#0B235E] poppins-semibold">
                                            SDK BPK PENABUR
                                        </span>
                                        <span class="text-[#4A4A4AFF] poppins-regular">
                                            07 October 2024 
                                        </span>
                                    </div>
                                    <div class="k_left flex flex-col">
                                        <span class="text-[#0B235E] lg:text-[20px] md:text-[20px] text-[15px] poppins-semibold">
                                            08.00 - 14.00
                                        </span>
                                        <span class="text-[#004971FF]">
                                            Absensi Trainer
                                        </span>
                                    </div>
                                </div>
                                
                                <!-- Skeleton Loading (Hidden secara default) -->
                                <div class="loading hidden w-full">
                                    <div class="animate-pulse flex flex-col space-y-4 w-full">
                                        <div class="h-4 bg-gray-300 rounded w-3/4"></div>
                                        <div class="h-6 bg-gray-300 rounded w-full"></div>
                                        <div class="h-4 bg-gray-300 rounded w-1/2"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <script>
                           function showLoading(card, nextPageUrl) {
                            const content = card.querySelector('.content');
                            content.classList.add('hidden');
                            const loading = card.querySelector('.loading');
                            loading.classList.remove('hidden');

                            setTimeout(() => {
                                content.classList.remove('hidden');
                                loading.classList.add('hidden');
                                window.location.href = nextPageUrl; // Arahkan ke halaman selanjutnya
                            }, 2000); 
                        }
                        </script>
                        {{-- === card belum absen === --}}

                        {{-- === card sudah absen === --}}
                        <div class="text-[#798AA3]">Sudah Jadwal</div>
                        <div class="card-h p-6 hover:scale-105 transition-all rounded-[24px] bg-[#CEF0CEFF] border-2 border-[#0ACE00FF] flex flex-wrap justify-between lg:gap-0 md:gap-0 gap-2">
                            <div class="k_right flex flex-col">
                                <span>
                                    CS 162
                                </span>
                                <span class="text-[#0B235E] poppins-semibold">
                                    SDK BPK PENABUR
                                </span>
                                <span class="text-[#0B235E] poppins-semibold">
                                    SF 13
                                </span>
                            </div>
                            <div class="k_left flex flex-col">
                                <span class="text-[#0B235E] poppins-semibold lg:text-[20px] md:text-[20px] text-[15px]">
                                    08.00 - 14.00
                                </span>
                                <span class="text-[#004971FF]">
                                    Absensi Trainer
                                </span>
                            </div>
                        </div>
                        <div class="card-h p-6 rounded-[24px] hover:scale-105 transition-all bg-[#CEF0CEFF] border-2 border-[#0ACE00FF] flex flex-wrap justify-between lg:gap-0 md:gap-0 gap-2">
                            <div class="k_right flex flex-col">
                                <span>
                                    CS 162
                                </span>
                                <span class="text-[#0B235E] poppins-semibold">
                                    SDK BPK PENABUR
                                </span>
                                <span class="text-[#0B235E] poppins-semibold">
                                    SF 13
                                </span>
                            </div>
                            <div class="k_left flex flex-col">
                                <span class="text-[#0B235E] poppins-semibold lg:text-[20px] md:text-[20px] text-[15px]">
                                    08.00 - 14.00
                                </span>
                                <span class="text-[#004971FF]">
                                    Absensi Trainer
                                </span>
                            </div>
                        </div>
                        {{-- === card sudah absen === --}}

                        {{-- === card tidak ada absen === --}}
                        <div class="text-[#798AA3]"> Jadwal Belum Aktif</div>
                        <div class="card-h p-6 rounded-[24px] hover:scale-105 transition-all bg-[#E8CEF0] border-2 border-[#D9ADE6] flex flex-wrap justify-between lg:gap-0 md:gap-0 gap-2">
                            <div class="k_right flex flex-col">
                                <span>
                                    CS 162
                                </span>
                                <span class="text-[#0B235E] poppins-semibold">
                                    SDK BPK PENABUR
                                </span>
                                <span class="text-[#0B235E] poppins-semibold">
                                    SF 13
                                </span>
                            </div>
                            <div class="k_left flex flex-col">
                                <span class="text-[#0B235E] poppins-semibold lg:text-[20px] md:text-[20px] text-[15px]">
                                    08.00 - 14.00
                                </span>
                                <span class="text-[#004971FF]">
                                    Absensi Trainer
                                </span>
                            </div>
                        </div>
                        <div class="card-h p-6 rounded-[24px] hover:scale-105 transition-all bg-[#E8CEF0] border-2 border-[#D9ADE6] flex flex-wrap justify-between lg:gap-0 md:gap-0 gap-2">
                            <div class="k_right flex flex-col">
                                <span>
                                    CS 162
                                </span>
                                <span class="text-[#0B235E] poppins-semibold">
                                    SDK BPK PENABUR
                                </span>
                                <span class="text-[#0B235E] poppins-semibold">
                                    SF 13
                                </span>
                            </div>
                            <div class="k_left flex flex-col">
                                <span class="text-[#0B235E] poppins-semibold lg:text-[20px] md:text-[20px] text-[15px]">
                                    08.00 - 14.00
                                </span>
                                <span class="text-[#004971FF]">
                                    Absensi Trainer
                                </span>
                            </div>
                        </div>
                        {{-- === card tidak ada absen === --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
    
  
    
</section>

@endsection