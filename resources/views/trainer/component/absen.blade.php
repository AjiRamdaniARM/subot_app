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
        </div>
    </nav>    
    
      <!-- component -->
<div class='max-w-md mx-auto'>
    <div class="relative flex items-center w-full h-12 rounded-lg focus-within:shadow-lg bg-white overflow-hidden">
        <div class="grid place-items-center h-full w-12 text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </div>

        <input
        class="peer h-full w-full outline-none text-sm text-gray-700 pr-2"
        type="text"
        id="search"
        placeholder="Cari Nama...." /> 
    </div>
</div>
<hr>
<br>
<div class="font-bold col-lg-3 col-6 text-center">
    &nbsp;
    <span class="text-blue-500">ABSENSI ANAK</span>
</div>
<br>
<table class="w-full text-xs">
    <thead class="dark:bg-blue-600">
        <tr class="text-left">
            <th class="text-white p-1">Nama</th>
            <th class="text-white p-1">Kelas</th>
            <th class="text-white p-1">Jam</th>
            <th class="text-white p-1">Level</th>
            <th class="text-white p-1">Kehadiran</th>
        </tr>
    </thead>
    <body>
        <tr class="border-b border-opacity-20 dark:border-gray-300 dark:bg-gray-50">
            <td class="p-1">
                <p>Aziz Ramadhan</p>
            </td>
            <td class="p-1">
                <p>9b</p>
            </td>
            <td class="P-1">
                <p>16.35</p>
            </td>
            <td class="p-1">
                <p>Basic 1</p>
            </td>
            <th class="bg-white">
                <div class="relative">
                    <button class="hover:scale-105 bg-green-500 text-white rounded-md px-1 py-1 gap-1 float-center">Hadir</button>
                    <button class="hover:scale-105 bg-red-500 text-white rounded-md px-1 py-1 gap-1 float-center">Tidak Hadir</button>
                </div>
    </body>
    <body>
        <tr class="border-b border-opacity-20 dark:border-gray-300 dark:bg-gray-50">
            <td class="p-1">
                <p>Asep saeban</p>
            </td>
            <td class="p-1">
                <p>9b</p>
            </td>
            <td class="P-1">
                <p>16.35</p>
            </td>
            <td class="p-1">
                <p>Basic 1</p>
            </td>
            <th class="bg-white">
                <div class="relative">
                    <button class="hover:scale-105 bg-green-500 text-white rounded-md px-1 py-1 gap-1 float-center">Hadir</button>
                    <button class="hover:scale-105 bg-red-500 text-white rounded-md px-1 py-1 gap-1 float-center">Tidak Hadir</button>
                </div>
    </body>
    <body>
        <tr class="border-b border-opacity-20 dark:border-gray-300 dark:bg-gray-50">
            <td class="p-1">
                <p>Aji ramdani</p>
            </td>
            <td class="p-1">
                <p>9b</p>
            </td>
            <td class="P-1">
                <p>16.35</p>
            </td>
            <td class="p-1">
                <p>Basic 1</p>
            </td>
            <th class="bg-white">
                <div class="relative">
                    <button class="hover:scale-105 bg-green-500 text-white rounded-md px-1 py-1 gap-1 float-center">Hadir</button>
                    <button class="hover:scale-105 bg-red-500 text-white rounded-md px-1 py-1 gap-1 float-center">Tidak Hadir</button>
                </div>
    </body>
</table>
<br>
<a href="/laporantrainer" class="px-3 py-1 bg-blue-500 hover:bg-blue-600 text-gray-50 rounded-md flex items-center gap-1" style="text-decoration: none; display: inline-flex; align-items: center;">
    <!-- Heroicons - Login Solid -->
        <path fill-rule="evenodd" d="M3 3a1 1 0 011 1v12a1 1 0 11-2 0V4a1 1 0 011-1zm7.707 3.293a1 1 0 010 1.414L9.414 9H17a1 1 0 110 2H9.414l1.293 1.293a1 1 0 01-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0z" clip-rule="evenodd" />
    </svg>
    <span class="text-sm">LAPORAN</span>
</a>

