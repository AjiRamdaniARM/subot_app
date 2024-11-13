@extends('trainer.layouts.main')
@section('children')
<section class="ab_siswa">
    <div class="sidenav lg:px-0 px-4 md:px-0 flex justify-between items-center poppins-regular lg:text-2xl">
        <span class="text-[#0E2C75] poppins-semibold">
            Akun Anda
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
    <div class="content-profile py-10">
        <div class="relative">
            <img src="{{asset('assets/img/bg_profile.png')}}" alt="bannerProfile" class="w-full h-64 object-cover rounded-2xl">
            <div class="absolute inset-0 flex items-end justify-center">
                <div class="circle_profile rounded-full overflow-hidden border-4 border-white w-32 h-32 -mb-16">
                    <img src="{{asset('assets/trainer_data/profile/'. auth()->guard('trainer')->user()->profile )}}" alt="potoprofile" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
        
        <div class="d_pribadi w-full relative py-20">
            <div class="content poppins text-center">
                <h1 class="text-[#0B235E] text-[20px] font-[500]">{{ auth()->guard('trainer')->user()->nama }}</h1>
                <div class="text-[#798AA3] text-[16px] font-regular">{{ auth()->guard('trainer')->user()->email }}</div>
                <h3 class="font-[400] text-[18px] text-[#0B235E]">Trainer</h3>
            </div>
        </div>

        <div data-aos="fade-down" data-aos-delay="50" data-aos-duration="200" data-aos-easing="ease-in-out" class="sub_content_head px-10 flex  justify-center items-center -mt-10 gap-10 lg:gap-44">
            <div class="sub-one text-center poppins">
                <h1 class="text-[#0B235E] lg:text-[24px] font-[500]">3 Tahun</h1>
                <h2 class="text-[#798AA3]">Tahun Berjalan</h2>
            </div>
            <div class="sub-two text-center">
                <h1 class=" text-[#0B235E] font-[500] lg:text-[24px]">{{ auth()->guard('trainer')->user()->password }}</h1>
                <h2 class="text-[#798AA3]">Password Akun</h2>
            </div>
        </div>
    </div>

    <div class="body-content-profile w-full  w-full">
        <div class="grid grid-rows-1 grid-cols-1 bg-white border-l-8 border-[#0B235E]" data-aos="fade-down" data-aos-delay="50" data-aos-duration="500">
            <div class="p-card-on text-white text-start thead px-10 py-5 bg-[#E9F0F4] border-b-2 border-gray-500 flex justify-between items-center">
            <h2 class="text-2xl text-[#0B235E] poppins">Informasi Pribadi</h2>
                <div class="icon-edited">
                    <a href="{{route('akun.edited')}}" class="text-gray-500 hover:scale-105 transition-all hover:text-blue-500">
                        <svg class="h-8 w-8"  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />  <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />  <line x1="16" y1="5" x2="19" y2="8" /></svg>
                    </a>
                </div>
            </div>
            <div class="by px-10 py-5 grid lg:grid-cols-2 md:grid-cols-2  grid-row-2 gap-5">
                <div class="h_list grid">
                    <h1 class="text-[#798AA3] poppins font-[18px]">Alamat</h1>
                    <p   class="text-[#0B235E] lg:text-[22px] font-[500] ">{{ auth()->guard('trainer')->user()->alamat }}</p>
                </div>
                <div class="h_list ">
                    <h1 class="text-[#798AA3] poppins font-[18px]">Lulusan</h1>
                    <p  class="text-[#0B235E] lg:text-[22px] font-[500]">{{ auth()->guard('trainer')->user()->lulusan }}</p>
                </div>
                <div class="h_list ">
                    <h1 class="text-[#798AA3] poppins font-[18px]">Telepone</h1>
                    <p   class="text-[#0B235E] lg:text-[22px] font-[500]">{{ auth()->guard('trainer')->user()->telephone }}</p>
                </div>
            </div>
        </div>
        <div class="d_p_tr mx-auto" data-aos="fade-down">
            <div class="flex justify-center py-28 gap-20 flex-wrap items-center space-x-4">
                <div class="k_file hover:scale-105 transition-all">
                    <a href="{{asset('assets/trainer_data/ktp/'. auth()->guard('trainer')->user()->ktp_file )}}">
                        <img src="{{asset('assets/trainer_data/ktp/'. auth()->guard('trainer')->user()->ktp_file )}}" alt="" class="w-96 rounded-lg h-96 rounded-lg object-cover">
                    </a>
                </div>
                <div class="ttd hover:scale-105 transition-all">
                    <a href="{{asset('assets/trainer_data/ttd/'. auth()->guard('trainer')->user()->ttd )}}">
                        <img src="{{asset('assets/trainer_data/ttd/'. auth()->guard('trainer')->user()->ttd )}}" alt="" class="w-96 rounded-lg h-96 rounded-lg object-cover">
                    </a>
                </div>
            </div>
         
        </div>
    </div>

</section>
@endsection
