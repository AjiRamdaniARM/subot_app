 {{-- === card belum absen === --}}
 <div class="text-[#798AA3] flex justify-between w-full"> <span>Jadwal Baru</span> <a href="{{ route('jadwal.menu') }}" class="text-blue-500">Lihat Lainnya</a> </div>
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