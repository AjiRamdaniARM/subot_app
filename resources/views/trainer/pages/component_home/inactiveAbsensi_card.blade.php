@if ($getScheduleTrainer !== null && $getScheduleTrainer->isNotEmpty())
    @foreach ($getScheduleTrainer->take(3) as $jadwal)
        @if($jadwal->ket === 'Tidak Aktif')
            <div data-aos="fade-down" class="card-h  transition-all p-6 rounded-[24px] bg-[#FED2D9] border-2 border-[#A3072B]">
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