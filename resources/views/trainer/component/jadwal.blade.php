@extends("layouts.main")
@section('content')

<div class="container mx-auto p-4 w-[430px] h-[645px]">
    <nav class="border-gray-200 px-3 mb-10">
        <div class="container mx-auto flex flex-wrap items-center justify-between">
        <a href="/" class="w-11 flex">
         <img src="{{ asset('assets/image/rbt.png') }}" alt="">&nbsp;
            <span class="self-center text-lg font-semibold whitespace-nowrap">Aziz Ramadhan</span>
        </a>
        <div class="flex md:order-2">
            <div class="relative mr-3 md:mr-0 hidden md:block">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
              </div>
        </div>
        </div>
      </nav>
      <h3 class="mb-1 text-2xl font-semibold leading-tight text-center text-blue-500">JADWAL :</h3>
      <hr>
     