@extends('layout.main')
@section('children')
    <div class="w-screen min-h-screen flex items-center justify-center px-4 sm:px-6 lg:px-8 bg-cover bg-center"
        style="background-image: url('{{ asset('assets/img/Neon Colorful City Desktop Wallpaper.png') }}')">
        <div class="relative py-3 sm:max-w-xs sm:mx-auto">
            <div
                class="min-h-96 px-8 py-6 mt-4 text-left bg-white/10 backdrop-blur-lg border border-white/90 rounded-xl shadow-lg">
                <div class="flex flex-col justify-center items-center h-full select-none">
                    <div class="flex flex-col items-center justify-center gap-2 mb-8">
                        <a href="https://sukarobot.com/" target="_blank">
                            <img src="{{ asset('assets/img/logo subot.png') }}" class="w-full" />
                        </a>
                        <p id="typingText" class="m-0 text-[16px] poppins-semibold text-[#1E1E1EFF]"></p>
                        <span class="m-0 text-xs max-w-[90%] poppins-regular text-center text-[#1E1E1EFF]">please choose
                            your position on
                            this
                            website.
                        </span>
                    </div>
                    <div class="w-full flex flex-col gap-2">
                        <label class="font-semibold poppins-regular text-xs text-[#1E1E1EFF] ">Role Admin</label>
                        @auth
                            <button id="submitBtn" onclick="showLoading(this); window.location.href='{{ route('dashboard') }}'"
                                class="border rounded-lg px-3 py-2 mb-5 text-sm w-full outline-none border-gray-500 bg-gray-900 text-white hover:scale-105 poppins-regular focus:scale-105 hover:font-bold transition-all">Login
                                With Admin</button>
                        @endauth
                        @guest
                            <button id="submitBtn" onclick="showLoading(this); window.location.href='{{ route('loginAdmin') }}'"
                                class="border rounded-lg px-3 py-2 mb-5 text-sm w-full outline-none border-gray-500 bg-gray-900 text-white hover:scale-105 poppins-regular focus:scale-105 hover:font-bold transition-all">Login
                                With Admin
                            </button>
                        @endguest
                    </div>
                </div>
                <div class="w-full flex flex-col gap-2">
                    <label class="font-semibold text-xs text-[#1E1E1EFF] poppins-regular ">Role Trainer</label>
                    <button onclick="showLoading(this); window.location.href='{{ route('auth.trainer') }}'"
                        class="border rounded-lg px-3 py-2 mb-5 text-sm w-full outline-none border-gray-500 bg-gray-900 text-white hover:scale-105  focus:scale-105 hover:font-bold poppins-regular transition-all">Login
                        With Trainer</button>
                </div>

            </div>
        </div>

    </div>
    </div>
@endsection
