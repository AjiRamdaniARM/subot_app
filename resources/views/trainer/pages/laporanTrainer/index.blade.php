@extends('trainer.layouts.main')
@section('children')
<section class="jadwal">
    <div class="c_body">
        <div class="container  relative ">
            <h1 class="text-[#0E2C75] text-start text-2xl poppins font-semibold">Tanggal Jadwal</h1>
        </div>
        <!-- component -->
    <div data-aos="fade-down" class=" flex  items-center justify-center gap-5 py-4 ">
        <div class="container date">
            <div class="content-body">
                <div id="card-container" class="grid grid-cols-2 lg:grid-cols-4 grid-rows-1 overflow-auto">
                </div>
            </div>
        </div>
    </div>
        <div data-aos="fade-down" class="container">
            <div class="container mx-auto">
                <div class="container mx-auto py-10">
                    <div class="box-card w-full rounded-[24px] border-2 text-start ">
                        <div class="body lg:px-10 md:px-10 px-5 py-10">
                            <div class="content">
                                <div class="card-1 flex flex-col gap-5">
                                    <h6 class="text-[#0E2C75] poppins-semibold text-[20px]">Jadwal Trainer</h6>
                                    {{-- === card belum absen === --}}
                                    <a href="javascript:void(0);" onclick="showLoading(this, '{{ route('absenTest')}}')">
                                        <div class="card-h hover:scale-105 transition-all p-6 rounded-[24px] bg-[#E9F0F4] border-2 border-[#0022CEFF] " onclick="showLoading(this)">
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
                                                <div class="k_left flex flex-col lg:gap-0 lg:gap-2">
                                                    <span class="text-[#0B235E] lg:text-[20px] md:text-[20px] text-[15px] poppins-semibold">
                                                        08.00 - 14.00
                                                    </span>
                                                    <span class="text-[#004971FF] bg-[#D6FC92] p-2 rounded-lg">
                                                        Laporan Trainer
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection