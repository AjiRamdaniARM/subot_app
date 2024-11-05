@extends('trainer.layouts.main')
@section('children')
<section>
    <div class="sidenav px-[16px]  flex justify-between items-center poppins-regular lg:text-2xl">
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
    <div data-aos="fade-down" class="container mx-auto py-10">
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
    <div class="container mx-auto py-5 lg:py-1">
        <div class="box-card w-full rounded-[24px] text-start ">
            <div class="body  py-10">
                <div class="content">
                    <div  class="card-1 flex flex-col gap-5">
                        <h6 class="text-[#0E2C75] poppins-semibold text-[20px]">Jadwal Terbaru Trainer</h6>

                        {{-- === card belum absen === --}}
                        <div class="text-[#798AA3]">Jadwal Baru</div>
                            @php
                            $jdHadir = DB::table('schedules')
                                ->where('ket', 'Aktif')
                                ->whereNull('ab_trainer')
                                ->exists();
                            @endphp
                            @if ($getScheduleTrainer !== null && !$getScheduleTrainer->isEmpty() && $jdHadir) 
                                @foreach ($getScheduleTrainer as $jadwal)
                                    @if ($jadwal->ket === 'Aktif' && $jadwal->ab_trainer === null) 
                                    <a data-aos="fade-down" href="javascript:void(0);" onclick="showLoading(this, '{{  url('/home/absen/' . $jadwal->id_schedules)}}')">
                                        <div  class="card-h hover:scale-105 transition-all p-6 rounded-[24px] bg-[#CEEEF0FF] border-2 border-[#0022CEFF] " onclick="showLoading(this)">
                                            <div class="content flex flex-col lg:flex-row md:flex-row justify-between lg:gap-0 md:gap-0 gap-2">
                                                <div class="k_right flex flex-col">
                                                    <span class="poppins-regular">
                                                        {{ $jadwal->levels }} | {{ $jadwal->nama_alat }}
                                                    </span>
                                                    @if ($jadwal->kelas_name == 'Club')
                                                        <span class="text-[#0B235E] poppins-semibold">
                                                        {{$jadwal->sekolah}}
                                                        </span>
                                                    @else
                                                        <span class="text-[#0B235E] poppins-semibold">
                                                            {{ $jadwal->kelas_name }}
                                                        </span>
                                                    @endif
                                                
                                                    <span class="text-[#4A4A4AFF] poppins-regular">
                                                        {{ \Carbon\Carbon::parse($jadwal->tanggal_jd)->translatedFormat('d F Y') }}
                                                    </span>
                                                </div>
                                                <div class="k_left flex flex-col">
                                                    <span class="text-[#0B235E] lg:text-[20px] md:text-[20px] text-[15px] poppins-semibold">
                                                        {{ date('H:i', strtotime($jadwal->jm_awal)) }} - {{ date('H:i', strtotime($jadwal->jm_akhir)) }}
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
                                    @endif
                                @endforeach
                            @else
                                <div data-aos="fade-down" class="card-h hover:scale-105 transition-all p-6 rounded-[24px] bg-[#83DCFFFF] border-2 border-[#10678DFF] ">
                                    <div class="content flex flex-col lg:flex-row md:flex-row justify-between lg:gap-0 md:gap-0 gap-2">
                                        <h1 class="text-[#313E5E] poppins">Belum Ada Jadwal Terbaru Nih 😵😵</h1>
                                    </div>
                                </div>
                            @endif
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
                        <div class="text-[#798AA3]">Sudah Absen</div>
                        @php
                        $jdSudahAbsen = DB::table('schedules')
                            ->where('ket', 'Aktif')
                                ->where('ab_trainer', '=', 'Hadir')
                            ->exists();
                        @endphp
                       @if ($getScheduleTrainer !== null && !$getScheduleTrainer->isEmpty() && $jdSudahAbsen) 
                            @foreach ($getScheduleTrainer as $jadwal)
                                @if($jadwal->ab_trainer === 'Hadir')
                                    <div data-aos="fade-down"  class="card-h hover:scale-105 transition-all p-6 rounded-[24px] bg-[#D0F8CBFF] border-2 border-[#00CE07FF]">
                                        <div class="content flex flex-col lg:flex-row md:flex-row justify-between lg:gap-0 md:gap-0 gap-2">
                                            <div class="k_right flex flex-col">
                                                <span class="poppins-regular">
                                                    {{ $jadwal->levels }} | {{ $jadwal->nama_alat }}
                                                </span>
                                                @if ($jadwal->kelas_name == 'Club')
                                                    <span class="text-[#0B235E] poppins-semibold">
                                                    {{$jadwal->sekolah}}
                                                    </span>
                                                @else
                                                    <span class="text-[#0B235E] poppins-semibold">
                                                        {{ $jadwal->kelas_name }}
                                                    </span>
                                                @endif
                                            
                                                <span class="text-[#4A4A4AFF] poppins-regular">
                                                    {{ \Carbon\Carbon::parse($jadwal->tanggal_jd)->translatedFormat('d F Y') }}
                                                </span>
                                            </div>
                                            <div class="k_left flex flex-col">
                                                <span class="text-[#0B235E] lg:text-[20px] md:text-[20px] text-[15px] poppins-semibold">
                                                    {{ date('H:i', strtotime($jadwal->jm_awal)) }} - {{ date('H:i', strtotime($jadwal->jm_akhir)) }}
                                                </span>
                                                <span class="text-[#004971FF]">
                                                    Sudah Absensi
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
                                @endif
                            @endforeach
                        @else
                            <div data-aos="fade-down" class="card-h hover:scale-105 transition-all p-6 rounded-[24px] bg-[#83FF98FF] border-2 border-[#1A8D10FF] ">
                                <div class="content flex flex-col lg:flex-row md:flex-row justify-between lg:gap-0 md:gap-0 gap-2">
                                    <h1 class="text-[#313E5E] poppins">Belum Ada Jadwal Yang Sudah Di Isi Nih 🙏🙏</h1>
                                </div>
                            </div>
                        @endif
                        {{-- === card sudah absen === --}}

                        {{-- === card tidak ada absen === --}}
                        <div class="text-[#798AA3]"> Jadwal tidak aktif</div>
                            @if ($getScheduleTrainer !== null && $getScheduleTrainer->isNotEmpty())
                                @foreach ($getScheduleTrainer as $jadwal)
                                    @if($jadwal->ket === 'Tidak Aktif')
                                        <div data-aos="fade-down"  class="card-h hover:scale-105 transition-all p-6 rounded-[24px] bg-[#FED2D9] border-2 border-[#A3072B]">
                                            <div class="content flex flex-col lg:flex-row md:flex-row justify-between lg:gap-0 md:gap-0 gap-2">
                                                <div class="k_right flex flex-col">
                                                    <span class="poppins-regular">
                                                        {{ $jadwal->levels }} | {{ $jadwal->nama_alat }}
                                                    </span>
                                                    @if ($jadwal->kelas_name == 'Club')
                                                        <span class="text-[#0B235E] poppins-semibold">
                                                        {{$jadwal->sekolah}}
                                                        </span>
                                                    @else
                                                        <span class="text-[#0B235E] poppins-semibold">
                                                            {{ $jadwal->kelas_name }}
                                                        </span>
                                                    @endif
                                                
                                                    <span class="text-[#4A4A4AFF] poppins-regular">
                                                        {{ \Carbon\Carbon::parse($jadwal->tanggal_jd)->translatedFormat('d F Y') }}
                                                    </span>
                                                </div>
                                                <div class="k_left flex flex-col">
                                                    <span class="text-[#0B235E] lg:text-[20px] md:text-[20px] text-[15px] poppins-semibold">
                                                        {{ date('H:i', strtotime($jadwal->jm_awal)) }} - {{ date('H:i', strtotime($jadwal->jm_akhir)) }}
                                                    </span>
                                                    <span class="text-[#004971FF]">
                                                        Belum Aktif / Tidak Aktif
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @else
                                <div data-aos="fade-down" class="card-h hover:scale-105 transition-all p-6 rounded-[24px] bg-[#FED2D9] border-2 border-[#A3072B] ">
                                    <div class="content flex flex-col lg:flex-row md:flex-row justify-between lg:gap-0 md:gap-0 gap-2">
                                        <h1 class="text-[#313E5E] poppins">Belum Ada Jadwal Yang Tidak Aktif / Belum Aktif 😎😎</h1>
                                    </div>
                                </div>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    
  
    
</section>

@endsection