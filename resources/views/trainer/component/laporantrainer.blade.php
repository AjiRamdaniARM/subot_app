@extends("layouts.main")
@section('content')

<div class="container mx-auto border-2 p-4 w-[430px] h-[645px]">
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
      <form class="max-w-sm mx-auto">
        <label for="email-address-icon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">DATE / TIME</label>
        <div class="relative">
          <input type="text" id="email-address-icon" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" ">
        </div>
    </form>
    <form class="max-w-sm mx-auto">
        <label for="email-address-icon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">DESKRIPSI MATERI</label>
        <div class="relative">
          <input type="text" id="email-address-icon" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" ">
        </div>
    </form>
    <form class="max-w-sm mx-auto">
        <label for="email-address-icon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">RESPON ANAK</label>
        
    <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
            <div class="flex items-center ps-3">
                <input id="vue-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <label for="vue-checkbox-list" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Baik</label>
            </div>
        </li>
        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
            <div class="flex items-center ps-3">
                <input id="react-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <label for="react-checkbox-list" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sangat Baik</label>
            </div>
        </li>
        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
            <div class="flex items-center ps-3">
                <input id="angular-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <label for="angular-checkbox-list" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Kurang Baik</label>
            </div>
        </li>
    </ul>
    
    </form>
    <form class="max-w-sm mx-auto">
        <label for="email-address-icon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">KENDALA YANG DI HADAPI</label>
        <div class="relative">
          <input type="text" id="email-address-icon" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" ">
        </div>
    </form>
    <style>
        /* Style sesuai keinginan Anda */
        .file-input {
            margin-bottom: 10px;
        }
    </style>
    </head>
    <body>
        <div id="fileInputsContainer">
            <!-- Kontainer untuk input file akan ditambahkan di sini -->
        </div>
        <button onclick="addFileInput()">DOKUMENTASI</button>
    
        <script>
            // Fungsi untuk menambahkan input file
            function addFileInput() {
                // Menghitung jumlah input file yang sudah ada
                var existingInputs = document.querySelectorAll('.file-input').length;
    
                // Maksimum 5 input file
                if (existingInputs >= 5) {
                    alert("Maksimal 5 input file sudah tercapai.");
                    return;
                }
    
                // Membuat elemen input file baru
                var newInput = document.createElement('div');
                newInput.innerHTML = `
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-black" for="file_input${existingInputs + 1}">UPLOAD FILE ${existingInputs + 1}</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 file-input" id="file_input${existingInputs + 1}" type="file">
                `;
                
                // Menambahkan elemen baru ke dalam kontainer
                document.getElementById('fileInputsContainer').appendChild(newInput);
            }
        </script>
    <a href="/" class="px-3 py-1 bg-blue-500 hover:bg-blue-600 text-gray-50 rounded-md flex items-center gap-1" style="inset-y-0 right-0 text-decoration: none; display: inline-flex; align-items: center;">
        <!-- Heroicons - Login Solid -->
            <path fill-rule="evenodd" d="M3 3a1 1 0 011 1v12a1 1 0 11-2 0V4a1 1 0 011-1zm7.707 3.293a1 1 0 010 1.414L9.414 9H17a1 1 0 110 2H9.414l1.293 1.293a1 1 0 01-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0z" clip-rule="evenodd" />
        </svg>
        <span class="text-sm">LAPORAN</span>
    </a>

