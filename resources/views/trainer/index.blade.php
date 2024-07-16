

 <div class="container mx-auto p-4 border-2 w-[430px] h-[645px]">
    
     <!-- component -->
<!-- This is an example component -->
<div class="max-w-2xl mx-auto">

        <div class="container mx-auto flex flex-wrap items-center justify-between">
            <a href="/" class="w-11 flex">
                <img src="{{ asset('assets/image/rbt.png') }}" alt="">&nbsp;
                <span class="self-center text-lg font-semibold whitespace-nowrap">Aziz Ramadhan</span>
            </a>
            <div class="flex md:order-2">
                <div class="relative mr-3 md:mr-0 hidden md:block">
                    <!-- Tombol Logout -->
                    <form action="/login" method="POST">
                        @csrf
                        <a href="/login" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded">
                            Logout
                        </a>                                                
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <br>
    
    <hr>
    <div class="flex gap-24 ml-3">
        <div class="font-bold col-lg-3 col-6 text-center">
            &nbsp;
            <span class="text-black">Hallo,</span>
            <span class="text-blue-500"> Aziz Ramadhan</span>
        </div>        
    </div>
    <hr>
    <br>
    <div class="container px-1 mx-auto sm:px-1 dark:text-gray-800">
        <h2 class="mb-1 text-1xl font-semibold leading-tight">JADWAL HARI INI :</h2>
        <div class="overflow-auto">
            <table class="overflow-auto w-96 text-xs">
                <thead class="dark:bg-blue-600">
                    <tr class="text-left">
                        <th class="text-white p-1">SEKOLAH</th>
                        <th class="text-white p-1">HARI</th>
                        <th class="text-white p-1">JAM</th>
                        <th class="text-white p-1">LEVEL</th>
                        <th class="text-white p-1">ABSEN</th>
                    </tr>
                </thead>
                <body>
                    <tr class="border-b border-opacity-20 dark:border-gray-300 dark:bg-gray-50">
                        <td class="p-1">
                            <p>SDIT Adzkia 1</p>
                        </td>
                        <td class="p-1">
                            <p>Rabu</p>
                        </td>
                        <td class="P-1">
                            <p>14.00 - 16.30</p>
                        </td>
                        <td class="p-1">
                            <p>Basic 1</p>
                        </td>
                        <th class="hover:scale-105 bg-blue-400 text-white rounded-md px-1 py-1 h-4 gap-1 float-center">
                            <a href="{{ url('/absen') }}">
                                <button>SELESAI</button>
                        
                    </tr>
                    <tr class="border-b border-opacity-20 dark:border-gray-300 dark:bg-gray-50">
                        <td class="p-1">
                            <p>SDIT Adzkia 1</p>
                        </td>
                        <td class="p-1">
                            <p>Rabu</p>
                        </td>
                        <td class="P-1">
                            <p>14.00 - 16.30</p>
                        </td>
                        <td class="p-1">
                            <p>Basic 1</p>
                        </td>
                        <th class="hover:scale-105 bg-red-500 text-white rounded-md px-1 py-1 gap-1 float-center">
                            <a href="{{ url('/absen') }}">
                                <button>ABSEN</button>
                        
                    </tr>
                    <tr class="border-b border-opacity-20 dark:border-gray-300 dark:bg-gray-50">
                        <td class="p-1">
                            <p>SDIT Adzkia 1</p>
                        </td>
                        <td class="p-1">
                            <p>Rabu</p>
                        </td>
                        <td class="P-1">
                            <p>14.00 - 16.30</p>
                        </td>
                        <td class="p-1">
                            <p>Basic 1</p>
                        </td>
                        <th class="hover:scale-105 bg-blue-400 text-white rounded-md px-1 py-1 gap-1 float-center">
                            <a href="{{ url('/absen') }}">
                                <button>SELESAI</button>
                        
                    </tr>
                    <tr class="border-b border-opacity-20 dark:border-gray-300 dark:bg-gray-50">
                        <td class="p-1">
                            <p>SDIT Adzkia 1</p>
                        </td>
                        <td class="p-1">
                            <p>Rabu</p>
                        </td>
                        <td class="P-1">
                            <p>14.00 - 16.30</p>
                        </td>
                        <td class="p-1">
                            <p>Basic 1</p>
                        </td>
                        <th class="hover:scale-105 bg-red-500 text-white rounded-md px-1 py-1 gap-1 float-center">
                            <a href="{{ url('/absen') }}">
                                <button>ABSEN</button>
                        
                    </tr>
                    <tr class="border-b border-opacity-20 dark:border-gray-300 dark:bg-gray-50">
                        <td class="p-1">
                            <p>SDIT Adzkia 1</p>
                        </td>
                        <td class="p-1">
                            <p>Rabu</p>
                        </td>
                        <td class="P-1">
                            <p>14.00 - 16.30</p>
                        </td>
                        <td class="p-1">
                            <p>Basic 1</p>
                        </td>
                        <th class="hover:scale-105 bg-blue-400 text-white rounded-md px-1 py-1 gap-1 float-center">
                            <a class="py-1" href="{{ url('/absen') }}">
                                <button>SELESAI</button>
                        
                    </tr>

                </body>
            </table>
        </div>
    </div>
    </div>
    <br>
    <br>
    <article class="rounded-xl border border-gray-800 bg-blue-800 p-4">
        <div class="flex items-center gap-4">
          <img
            alt=""
            src="{{ asset('assets/image/logobtik.png') }}"
            class="w-20 object-cover"
          />
      
          <div>
            <h3 class="text-lg font-medium text-white">MENU</h3>
      
            <div class="flow-root">
    
            </div>
          </div>
        </div>

        <ul class="mt-4 space-y-2">
          <li>
            <a href="/jadwal" class="justify-between flex h-15 rounded-lg border border-white-800 p-4 hover:scale-105">
              <strong class="font-medium text-white">JADWAL</strong> <img src="{{('assets/image/calendar.png')}}" class="w-7">
            </a>
          </li>
      
          <li>
            <a href="/instruktur" class="justify-between flex h-15 rounded-lg border border-white-800 p-4 hover:scale-105">
              <strong class="font-medium text-white">INSTRUKTUR</strong> <img src="{{('assets/image/journalteam.png')}}" class="w-7">
            </a>
          </li>
          <li>
            <a href="/gallery" class="justify-between flex h-15 rounded-lg border border-white-800 p-4 hover:scale-105">
              <strong class="font-medium text-white">GALLERY</strong> <img src="{{('assets/image/gallery.png')}}" class="w-7">
            </a>
          </li>
        </ul>
      </article>
    <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
    </div>
    

