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
            {{-- === card 1 === --}}
            <div class="p-6 rounded-[24px] bg-[#FBDC5C] border-2 border-[#CE7100] text-center">
                <div class="t_one text-lg font-semibold text-[#455068] text-[18px]">
                    Total Penghasilan
                </div>
                <div class="t_two  font-bold mt-2 text-[#602400] text-[30px]">
                   Rp.{{ number_format($penghasilan, 0, ',', '.') }}
                </div>
                <div class="t_two text-sm mt-5  text-[18px] text-[#AB5200]">
                    Bulan  {{Carbon::now()->format('F');}}  Masih tahap pengembangan  
                </div>
            </div>
            {{-- === card 2 === --}}
            <div class="p-6 rounded-[24px] bg-[#FED2D9] border-2 border-[#F64669]  text-center">
                <div class="t_one text-lg font-semibold text-[#455068]">
                    Total Jadwal
                </div>
                <div class="t_two text-2xl font-bold mt-2  text-[#A3072B] text-[45px]">
                   {{$dataCountData}}
                </div>
                <div class="t_two text-sm mt-1 mt-5  text-[18px] text-[#AB5200]">
                    Bulan  {{Carbon::now()->format('F');}}  
                </div>
            </div>
            {{-- === card 3 === --}}
            <div class="p-6 rounded-[24px] border-2 border-[#798AA3] bg-[#D3DFE7] text-center">
                <div class="t_one text-lg font-semibold text-[#455068] text-[18px]">
                    Total Laporan
                </div>
                <div class="t_two text-2xl font-bold mt-2  text-[#2E3748] text-[45px]">
                  {{$dataCount}}
                </div>
                <div class="t_two text-sm mt-1 mt-5  text-[18px] text-[#516AA9]">
                  Bulan  {{Carbon::now()->format('F');}}   
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
                        @include('trainer.pages.component_home.newAbsensi_card')
                        {{-- === card belum absen === --}}

                        {{-- === card sudah absen === --}}
                        <div data-aos="fade-down"  class="text-[#798AA3] flex justify-between"><span>Sudah Absen</span> <a href="{{ route('laporan.menu') }}" class="text-blue-500">Lihat Lainnya</a> </div>
                        @include('trainer.pages.component_home.alreadyAbsensi_card')
                        {{-- === card sudah absen === --}}

                        {{-- === card tidak ada absen === --}}
                        <div data-aos="fade-down" class="text-[#798AA3]"> Jadwal tidak aktif</div>
                            @include('trainer.pages.component_home.inactiveAbsensi_card')
                    </div>
                </div>
            </div>
        </div>
    </div>
    
  
    
</section>

@endsection