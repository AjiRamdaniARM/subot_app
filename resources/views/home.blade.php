@extends('layout.main')
@section('children')

<div class="w-screen min-h-screen flex items-center justify-center bg-gray-50 dark:bg-gray-800 px-4 sm:px-6 lg:px-8">
    <div class="relative py-3 sm:max-w-xs sm:mx-auto">
        <div class="min-h-96 px-8 py-6 mt-4 text-left bg-white dark:bg-gray-900  rounded-xl shadow-lg">
            <div class="flex flex-col justify-center items-center h-full select-none">
                <div class="flex flex-col items-center justify-center gap-2 mb-8">
                    <a href="https://amethgalarcio.web.app/" target="_blank">
                        <img src="{{asset('assets/img/logo.png')}}" class="w-36" />
                    </a>
                    <p class="m-0 text-[16px] font-semibold dark:text-white">Select Role to your Account</p>
                    <span class="m-0 text-xs max-w-[90%] text-center text-[#8B8E98]">please choose your position on this website.
                    </span>
                </div>
                <div class="w-full flex flex-col gap-2">
                    <label class="font-semibold text-xs text-gray-400 ">Role Admin</label>
                    <button onclick="window.location.href='{{route('loginAdmin')}}'" class="border rounded-lg px-3 py-2 mb-5 text-sm w-full outline-none border-gray-500 bg-gray-900 text-white hover:scale-105 hover:bg-blue-600 focus:scale-105 hover:font-bold transition-all" >Login With Admin</button>

                </div>
            </div>
            <div class="w-full flex flex-col gap-2">
                <label class="font-semibold text-xs text-gray-400 ">Role Trainer</label>
                <button onclick="window.location.href='{{route('loginTrainer')}}'" class="border rounded-lg px-3 py-2 mb-5 text-sm w-full outline-none border-gray-500 bg-gray-900 text-white hover:scale-105 hover:bg-blue-600 focus:scale-105 hover:font-bold transition-all" >Login With Trainer</button>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
