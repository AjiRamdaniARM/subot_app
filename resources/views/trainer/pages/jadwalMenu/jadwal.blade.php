@extends('trainer.layouts.main')
@section('children')
<section class="jadwal">
    <div class="c_body">
        <div class="container  relative ">
            <h1 class="text-[#0E2C75] text-start text-2xl poppins font-semibold">Tanggal Jadwal</h1>
        </div>
        <!-- component -->
    <div data-aos="fade-right" class=" flex  items-center justify-center gap-5 py-4 ">
        <div  class="container date">
            <div class="content-body">
                <div id="card-container" class="grid grid-cols-2 lg:grid-cols-4 grid-rows-1 overflow-auto">
                </div>
            </div>
        </div>
        <script src="{{asset('assets/js/dataArray/arrayData.js')}}"></script>
        <div  class="lg:w-7/12 md:w-9/12 sm:w-10/12 mx-auto lg:block hidden md:hidden 2xl:block lg:p-4 py-4">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="flex items-center justify-between px-6 py-3 bg-[#0B235E]">
                    <button id="prevMonth" class="text-white">Previous</button>
                    <h2 id="currentMonth" class="text-white"></h2>
                    <button id="nextMonth" class="text-white">Next</button>
                </div>
                <div class="grid grid-cols-7 gap-2 p-4 bg-[#0E2C75] text-white" id="calendar">
                    <!-- Calendar Days Go Here -->
                </div>
                <div id="myModal" class="modal hidden fixed inset-0 flex items-center justify-center z-50">
                <div class="modal-overlay absolute inset-0 bg-black opacity-50"></div>
                
                <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
                    <div class="modal-content py-4 text-left px-6">
                    <div class="flex justify-between items-center pb-3">
                        <p class="text-2xl font-bold">Selected Date</p>
                        <button id="closeModal" class="modal-close px-3 py-1 rounded-full bg-gray-200 hover:bg-gray-300 focus:outline-none focus:ring">✕</button>
                    </div>
                    <div id="modalDate" class="text-xl font-semibold"></div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('storage/s_js/date.js')}}"></script>
     
        <div class="container">
            <div class="container mx-auto">
                <div class="container mx-auto py-10">
                    <div class="box-card w-full rounded-[24px] border-2 text-start ">
                        <div class="body lg:px-10 md:px-10 px-5 py-10">
                            <div class="content">
                                <div class="card-1 flex flex-col gap-5">
                                    <h6 class="text-[#0E2C75] poppins-semibold text-[20px]">Jadwal Trainer</h6>
                                    {{-- === card belum absen === --}}
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