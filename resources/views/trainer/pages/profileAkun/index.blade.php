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
                    <img src="{{asset('assets/data/dataAnak/img/pasFoto_Aji Ramdani.png')}}" alt="potoprofile" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
        <div class="d_pribadi w-full relative py-20">
            <div class="content poppins text-center">
                <h1 class="text-[#0B235E] text-[20px] font-[500]">Aji Ramdani</h1>
                <div class="text-[#798AA3] text-[16px] font-regular">@ajiramdani_04</div>
                <h3 class="font-[400] text-[18px] text-[#0B235E]">Trainer</h3>
            </div>
           
        </div>
        <div data-aos="fade-down" data-aos-delay="50" data-aos-duration="200" class="sub_content_head px-10 flex justify-center items-center -mt-10 gap-44">
            <div class="sub-one text-center poppins">
                <h1 class="text-[#0B235E] text-[24px] font-[500]">3 Tahun</h1>
                <h2 class="text-[#798AA3]">Tahun Berjalan</h2>
            </div>
            <div class="sub-two text-center">
                <h1 class=" text-[#0B235E] font-[500] text-[24px]">AJI RAMDANI</h1>
                <h2 class="text-[#798AA3]">Password Akun</h2>
            </div>
        </div>
    </div>

    <div class="body-content-profile w-full p-10 w-full">
        <div class="grid grid-rows-1 grid-cols-1 bg-white border-l-8 border-[#0B235E]">
            <div class="p-card-on text-white text-start thead px-10 py-5 bg-[#E9F0F4] border-b-2 border-gray-500">
            <h2 class="text-2xl text-[#0B235E] poppins">Informasi Pribadi</h2>
            </div>
            <div class="by px-10 py-5 grid lg:grid-cols-2 md:grid-cols-2  grid-row-2 gap-5">
                <div class="h_list grid">
                    <h1 class="text-[#798AA3] poppins font-[18px]">Alamat</h1>
                    <p class="text-[#0B235E] lg:text-[22px] font-[500] ">Jl. A. Yani No.283, Kebonjati, Kec. Cikole, Kota Sukabumi, Jawa Barat 43111</p>  
                </div> 
                <div class="h_list ">
                    <h1 class="text-[#798AA3] poppins font-[18px]">Lulusan</h1>
                    <p class="text-[#0B235E] lg:text-[22px] font-[500]">SMK Terpadu Ibadurrahmah</p>  
                </div> 
                <div class="h_list ">
                    <h1 class="text-[#798AA3] poppins font-[18px]">Telepone</h1>
                    <p class="text-[#0B235E] lg:text-[22px] font-[500]">+6289508742700</p>  
                </div> 
            </div>
        </div>
    </div>
    
</section>
@endsection
