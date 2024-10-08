@extends('layout.main')
@section('children')
    <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
                <div class="max-w-md mx-auto">
                    <div class="flex flex-col md:flex-row items-center space-x-5">
                        <img src="{{ asset('assets/img/logo.png') }}" width="100" alt="">
                        <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                            <h2 class="leading-relaxed">Terima Kasih Sudah Daftar</h2>
                            <p class="text-sm text-gray-500 font-normal leading-relaxed">Terima kasih sudah mendaftarkan
                                anak
                                Anda di Sukarobot Academy!</p>
                        </div>
                    </div>
                    <img src="{{ asset('assets/img/doneRoboto.gif') }}" alt="">
                </div>
                <button onclick="window.location.href='{{ url('/daftar') }}'"
                    class="button bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none hover:scale-105 transition-all focus:scale-105"
                    type="submit">Daftar Lagi
                    <div class="arrow-wrapper">
                        <div class="arrow"></div>

                    </div>
                </button>
            </div>
        </div>
    </div>
@endsection
