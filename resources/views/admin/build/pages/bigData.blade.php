<x-app-layout>

    @include('admin.build.components.bigData.modalNotif')
    @include('modalSekolah')
    @include('admin.build.components.bigData.modalCreate')


    <body class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-50 text-slate-500">
        {{-- sidenav --}}
        @include('admin.build.components.sidenav')
        {{-- sidenav --}}
        <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
            <!-- Navbar -->
            @include('admin.build.components.navbar')
            <!-- end Navbar -->

            <!-- cards -->
            <div class="w-full  px-6 py-6 mx-auto ">

                <!-- row 1 -->
                @include('admin.build.components.cardBigData')
                <br>
                @if (session()->has('message'))
                    <div id="toast-default "
                        class="flex items-center w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
                        role="alert">
                        <div
                            class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-blue-500 bg-blue-100 rounded-lg dark:bg-blue-800 dark:text-blue-200">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="ml-3 text-sm font-normal">{{ session('message') }}</div>
                        <button type="button" onclick="document.getElementById('toast-default').style.display='none'"
                            class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                            data-collapse-toggle="toast-default" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                @endif
                <div class="flex flex-wrap my-6 -mx-3 ">
                    {{-- data sekolah --}}
                    <div class="w-full max-w-full px-3  mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                        <div
                            class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">

                            <div class="flex justify-between-items-center">
                                <div
                                    class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                                    <h6>All School Data</h6>
                                    <p class="text-sm leading-normal">
                                        <i class="fa fa-arrow-up text-lime-500"></i>
                                        <span class="font-semibold">{{ $activePercentage }}%</span> this month
                                    </p>
                                </div>

                                <button type="button" onclick="window.dialogAdmin.showModal()"
                                    class="inline-block px-6 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 relative"
                                    style="height: 30px; top:15px; right:10px">
                                    Create
                                </button>
                            </div>
                            <div class="flex-auto p-4">
                                <div
                                    class="before:border-r-solid relative before:absolute before:top-0 before:left-4 before:h-full before:border-r-2 before:border-r-slate-100 before:content-[''] before:lg:-ml-px">
                                    @foreach ($getSekolah as $sekolah)
                                        @include('admin.build.components.bigData.modalEdit')
                                        <div class="relative mb-4 mt-0 after:clear-both after:table after:content-['']">
                                            <span
                                                class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                                @if ($sekolah->status == 'nonactive')
                                                    <i data-popover-target="popover-default"
                                                        class="relative z-10 leading-none text-transparent ni ni-bell-55 leading-pro bg-gradient-to-tl from-red-500 to-red-400 bg-clip-text fill-transparent"></i>
                                                @else
                                                    <i
                                                        class="relative z-10 leading-none text-transparent ni ni-bell-55 leading-pro bg-gradient-to-tl from-green-600 to-lime-400 bg-clip-text fill-transparent"></i>
                                                @endif

                                            </span>
                                            <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                                <a onclick="window.dialogEditSekolah{{ $sekolah->id }}.showModal()">
                                                    <h6
                                                        class="mb-0 text-sm font-semibold leading-normal text-slate-700">
                                                        {{ $sekolah->sekolah }}</h6>

                                                </a>
                                                @if ($sekolah->alamat == null)
                                                    <p
                                                        class="mt-1 mb-0 text-xs font-semibold leading-tight text-slate-400">
                                                        Address Data Not Available
                                                    </p>
                                                @else
                                                    <p
                                                        class="mt-1 mb-0 text-xs font-semibold leading-tight text-slate-400">
                                                        {{ $sekolah->alamat }}
                                                    </p>
                                                @endif

                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="mt-4">
                                        {{ $getSekolah->links() }}
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- akhir data sekolah --}}

                    {{-- data program --}}
                    <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                        <div
                            class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                            <div class="flex justify-between-items-center">
                                <div
                                    class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                                    <h6>All Programs Data</h6>
                                    <p class="text-sm leading-normal">
                                        <i class="fa fa-arrow-up text-lime-500"></i>
                                        <span class="font-semibold">100%</span> this month
                                    </p>
                                </div>
                                <button type="button" onclick="window.dialogProgram.showModal()"
                                    class="inline-block px-6 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 relative"
                                    style="height: 30px; top:15px; right:10px">
                                    Create
                                </button>
                            </div>
                            <div class="flex-auto p-4">
                                <div
                                    class="before:border-r-solid relative before:absolute before:top-0 before:left-4 before:h-full before:border-r-2 before:border-r-slate-100 before:content-[''] before:lg:-ml-px">
                                    @foreach ($getDataPrograms as $program)
                                        @include('admin.build.components.bigData.modalProgram')
                                        <div class="relative mb-4 after:clear-both after:table after:content-['']">
                                            <span
                                                class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                                <i
                                                    class="relative z-10 leading-none text-transparent ni ni-credit-card leading-pro bg-gradient-to-tl from-red-500 to-yellow-400 bg-clip-text fill-transparent"></i>
                                            </span>
                                            <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                                <a onclick="window.dialogEditProgram{{ $program->id }}.showModal()">
                                                    <h6
                                                        class="mb-0 text-sm font-semibold leading-normal text-slate-700">
                                                        {{ $program->program }}</h6>
                                                </a>
                                                <p class="mt-1 mb-0 text-xs font-semibold leading-tight text-slate-400">
                                                    {{ $program->created_at }}</p>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- akhir data materi --}}

                    {{-- data level --}}
                    <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                        <div
                            class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                            <div class="flex justify-between-items-center">
                                <div
                                    class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                                    <h6>All Levels Data</h6>
                                    <p class="text-sm leading-normal">
                                        <i class="fa fa-arrow-up text-lime-500"></i>
                                        <span class="font-semibold">100%</span> this month
                                    </p>
                                </div>
                                <button type="button" onclick="window.dialogLevel.showModal()"
                                    class="inline-block px-6 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 relative"
                                    style="height: 30px; top:15px; right:10px">
                                    Create
                                </button>
                            </div>
                            <div class="flex-auto p-4">
                                <div
                                    class="before:border-r-solid relative before:absolute before:top-0 before:left-4 before:h-full before:border-r-2 before:border-r-slate-100 before:content-[''] before:lg:-ml-px">
                                    @foreach ($getDataLevels as $level)
                                        <div class="relative mb-4 after:clear-both after:table after:content-['']">
                                            <span
                                                class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                                <i
                                                    class="relative z-10 leading-none text-transparent ni ni-key-25 leading-pro bg-gradient-to-tl from-purple-700 to-pink-500 bg-clip-text fill-transparent"></i>
                                            </span>
                                            <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                                <h6 class="mb-0 text-sm font-semibold leading-normal text-slate-700">
                                                    {{ $level->levels }}</h6>
                                                <p class="mt-1 mb-0 text-xs font-semibold leading-tight text-slate-400">
                                                    {{ $level->created_at }}</p>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- akhir data level --}}

                    {{-- data class --}}
                    <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                        <div
                            class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                            <div class="flex justify-between-items-center">
                                <div
                                    class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                                    <h6>All Class Data</h6>
                                    <p class="text-sm leading-normal">
                                        <i class="fa fa-arrow-up text-lime-500"></i>
                                        <span class="font-semibold">100%</span> this month
                                    </p>
                                </div>
                                <button type="button" onclick="window.dialogClass.showModal()"
                                    class="inline-block px-6 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 relative"
                                    style="height: 30px; top:15px; right:10px">
                                    Create
                                </button>
                            </div>
                            <div class="flex-auto p-4">
                                <div
                                    class="before:border-r-solid relative before:absolute before:top-0 before:left-4 before:h-full before:border-r-2 before:border-r-slate-100 before:content-[''] before:lg:-ml-px">
                                    @foreach ($getDataClass as $class)
                                        <div class="relative mb-4 after:clear-both after:table after:content-['']">
                                            <span
                                                class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                                <i
                                                    class="relative z-10 leading-none text-transparent ni ni-istanbul leading-pro bg-gradient-to-tl from-purple-700 to-pink-500 bg-clip-text fill-transparent"></i>
                                            </span>
                                            <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                                <h6 class="mb-0 text-sm font-semibold leading-normal text-slate-700">
                                                    {{ $class->kelas }}</h6>
                                                <p
                                                    class="mt-1 mb-0 text-xs font-semibold leading-tight text-slate-400">
                                                    {{ $class->created_at }}</p>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- akhir data class --}}

                    {{-- data tools --}}
                    <div class="w-full max-w-full px-3 py-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                        <div
                            class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                            <div class="flex justify-between-items-center">
                                <div
                                    class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                                    <h6>All Tools Data</h6>
                                    <p class="text-sm leading-normal">
                                        <i class="fa fa-arrow-up text-lime-500"></i>
                                        <span class="font-semibold">100%</span> this month
                                    </p>
                                </div>
                                <button type="button" onclick="window.dialogTools.showModal()"
                                    class="inline-block px-6 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 relative"
                                    style="height: 30px; top:15px; right:10px">
                                    Create
                                </button>
                            </div>
                            <div class="flex-auto p-4">
                                <div
                                    class="before:border-r-solid relative before:absolute before:top-0 before:left-4 before:h-full before:border-r-2 before:border-r-slate-100 before:content-[''] before:lg:-ml-px">
                                    @foreach ($getDataTools as $tools)
                                        <div class="relative mb-4 after:clear-both after:table after:content-['']">
                                            <span
                                                class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                                <i
                                                    class="relative z-10 leading-none text-transparent ni ni-laptop leading-pro bg-gradient-to-tl from-purple-700 to-pink-500 bg-clip-text fill-transparent"></i>
                                            </span>
                                            <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                                <h6 class="mb-0 text-sm font-semibold leading-normal text-slate-700">
                                                    {{ $tools->alat }}</h6>
                                                <p
                                                    class="mt-1 mb-0 text-xs font-semibold leading-tight text-slate-400">
                                                    {{ $tools->created_at }}</p>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- akhir alat class --}}



                </div>

                <footer class="pt-4">
                    <div class="w-full px-6 mx-auto">
                        <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
                            <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
                                <div class="text-sm leading-normal text-center text-slate-500 lg:text-left">
                                    ©
                                    <script>
                                        document.write(new Date().getFullYear() + ",");
                                    </script>
                                    made with <i class="fa fa-heart"></i> by
                                    <a href="https://www.creative-tim.com" class="font-semibold text-slate-700"
                                        target="_blank">Creative Tim</a>
                                    for a better web.
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 mt-0 shrink-0 lg:w-1/2 lg:flex-none">
                                <ul class="flex flex-wrap justify-center pl-0 mb-0 list-none lg:justify-end">
                                    <li class="nav-item">
                                        <a href="https://www.creative-tim.com"
                                            class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500"
                                            target="_blank">Creative Tim</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://www.creative-tim.com/presentation"
                                            class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500"
                                            target="_blank">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://creative-tim.com/blog"
                                            class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500"
                                            target="_blank">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://www.creative-tim.com/license"
                                            class="block px-4 pt-0 pb-1 pr-0 text-sm font-normal transition-colors ease-soft-in-out text-slate-500"
                                            target="_blank">License</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end cards -->
        </main>
        @include('admin.build.components.plugins')
    </body>
</x-app-layout>
