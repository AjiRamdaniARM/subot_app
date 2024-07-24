<x-app-layout>
    @include('modalSekolah')

    <body class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-50 text-slate-500">
        {{-- sidenav --}}
        @include('admin.build.components.sidenav')
        {{-- sidenav --}}
        <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
            <!-- Navbar -->
            @include('admin.build.components.navbar')
            <!-- end Navbar -->

            <!-- cards -->
            <div class="w-full px-6 py-6 mx-auto">
                <!-- row 1 -->
                @include('admin.build.components.cardBigData')

                <div class="flex flex-wrap my-6 -mx-3">
                    <!-- card 1 -->


                    {{-- data sekolah --}}
                    <div class="w-full max-w-full px-3 md:w-1/2 md:flex-none lg:w-1/3 lg:flex-none">
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
                                                <h6 class="mb-0 text-sm font-semibold leading-normal text-slate-700">
                                                    {{ $sekolah->sekolah }}</h6>

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

                    {{-- data materi --}}
                    <div class="w-full max-w-full px-3 md:w-1/2 md:flex-none lg:w-1/3 lg:flex-none">
                        <div
                            class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                            <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                                <h6>All Program data</h6>
                                <p class="text-sm leading-normal">
                                    <i class="fa fa-arrow-up text-lime-500"></i>
                                    <span class="font-semibold">24%</span> this month
                                </p>
                            </div>
                            <div class="flex-auto p-4">
                                <div
                                    class="before:border-r-solid relative before:absolute before:top-0 before:left-4 before:h-full before:border-r-2 before:border-r-slate-100 before:content-[''] before:lg:-ml-px">
                                    <div class="relative mb-4 mt-0 after:clear-both after:table after:content-['']">
                                        <span
                                            class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                            <i
                                                class="relative z-10 leading-none text-transparent ni ni-bell-55 leading-pro bg-gradient-to-tl from-green-600 to-lime-400 bg-clip-text fill-transparent"></i>
                                        </span>
                                        <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                            <h6 class="mb-0 text-sm font-semibold leading-normal text-slate-700">$2400,
                                                Design changes</h6>
                                            <p class="mt-1 mb-0 text-xs font-semibold leading-tight text-slate-400">22
                                                DEC 7:20 PM</p>
                                        </div>
                                    </div>
                                    <div class="relative mb-4 after:clear-both after:table after:content-['']">
                                        <span
                                            class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                            <i
                                                class="relative z-10 leading-none text-transparent ni ni-html5 leading-pro bg-gradient-to-tl from-red-600 to-rose-400 bg-clip-text fill-transparent"></i>
                                        </span>
                                        <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                            <h6 class="mb-0 text-sm font-semibold leading-normal text-slate-700">New
                                                order #1832412</h6>
                                            <p class="mt-1 mb-0 text-xs font-semibold leading-tight text-slate-400">21
                                                DEC 11 PM</p>
                                        </div>
                                    </div>
                                    <div class="relative mb-4 after:clear-both after:table after:content-['']">
                                        <span
                                            class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                            <i
                                                class="relative z-10 leading-none text-transparent ni ni-cart leading-pro bg-gradient-to-tl from-blue-600 to-cyan-400 bg-clip-text fill-transparent"></i>
                                        </span>
                                        <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                            <h6 class="mb-0 text-sm font-semibold leading-normal text-slate-700">Server
                                                payments for April</h6>
                                            <p class="mt-1 mb-0 text-xs font-semibold leading-tight text-slate-400">21
                                                DEC 9:34 PM</p>
                                        </div>
                                    </div>
                                    <div class="relative mb-4 after:clear-both after:table after:content-['']">
                                        <span
                                            class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                            <i
                                                class="relative z-10 leading-none text-transparent ni ni-credit-card leading-pro bg-gradient-to-tl from-red-500 to-yellow-400 bg-clip-text fill-transparent"></i>
                                        </span>
                                        <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                            <h6 class="mb-0 text-sm font-semibold leading-normal text-slate-700">New
                                                card added for order #4395133</h6>
                                            <p class="mt-1 mb-0 text-xs font-semibold leading-tight text-slate-400">20
                                                DEC 2:20 AM</p>
                                        </div>
                                    </div>
                                    <div class="relative mb-4 after:clear-both after:table after:content-['']">
                                        <span
                                            class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                            <i
                                                class="relative z-10 leading-none text-transparent ni ni-key-25 leading-pro bg-gradient-to-tl from-purple-700 to-pink-500 bg-clip-text fill-transparent"></i>
                                        </span>
                                        <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                            <h6 class="mb-0 text-sm font-semibold leading-normal text-slate-700">Unlock
                                                packages for development</h6>
                                            <p class="mt-1 mb-0 text-xs font-semibold leading-tight text-slate-400">18
                                                DEC 4:54 AM</p>
                                        </div>
                                    </div>
                                    <div class="relative mb-0 after:clear-both after:table after:content-['']">
                                        <span
                                            class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                            <i
                                                class="relative z-10 leading-none text-transparent ni ni-money-coins leading-pro bg-gradient-to-tl from-gray-900 to-slate-800 bg-clip-text fill-transparent"></i>
                                        </span>
                                        <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                            <h6 class="mb-0 text-sm font-semibold leading-normal text-slate-700">New
                                                order #9583120</h6>
                                            <p class="mt-1 mb-0 text-xs font-semibold leading-tight text-slate-400">17
                                                DEC</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- akhir data materi --}}

                    {{-- data level --}}
                    <div class="w-full max-w-full px-3 md:w-1/2 md:flex-none lg:w-1/3 lg:flex-none">
                        <div
                            class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                            <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                                <h6>Orders overview</h6>
                                <p class="text-sm leading-normal">
                                    <i class="fa fa-arrow-up text-lime-500"></i>
                                    <span class="font-semibold">24%</span> this month
                                </p>
                            </div>
                            <div class="flex-auto p-4">
                                <div
                                    class="before:border-r-solid relative before:absolute before:top-0 before:left-4 before:h-full before:border-r-2 before:border-r-slate-100 before:content-[''] before:lg:-ml-px">
                                    <div class="relative mb-4 mt-0 after:clear-both after:table after:content-['']">
                                        <span
                                            class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                            <i
                                                class="relative z-10 leading-none text-transparent ni ni-bell-55 leading-pro bg-gradient-to-tl from-green-600 to-lime-400 bg-clip-text fill-transparent"></i>
                                        </span>
                                        <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                            <h6 class="mb-0 text-sm font-semibold leading-normal text-slate-700">$2400,
                                                Design changes</h6>
                                            <p class="mt-1 mb-0 text-xs font-semibold leading-tight text-slate-400">22
                                                DEC 7:20 PM</p>
                                        </div>
                                    </div>
                                    <div class="relative mb-4 after:clear-both after:table after:content-['']">
                                        <span
                                            class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                            <i
                                                class="relative z-10 leading-none text-transparent ni ni-html5 leading-pro bg-gradient-to-tl from-red-600 to-rose-400 bg-clip-text fill-transparent"></i>
                                        </span>
                                        <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                            <h6 class="mb-0 text-sm font-semibold leading-normal text-slate-700">New
                                                order #1832412</h6>
                                            <p class="mt-1 mb-0 text-xs font-semibold leading-tight text-slate-400">21
                                                DEC 11 PM</p>
                                        </div>
                                    </div>
                                    <div class="relative mb-4 after:clear-both after:table after:content-['']">
                                        <span
                                            class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                            <i
                                                class="relative z-10 leading-none text-transparent ni ni-cart leading-pro bg-gradient-to-tl from-blue-600 to-cyan-400 bg-clip-text fill-transparent"></i>
                                        </span>
                                        <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                            <h6 class="mb-0 text-sm font-semibold leading-normal text-slate-700">Server
                                                payments for April</h6>
                                            <p class="mt-1 mb-0 text-xs font-semibold leading-tight text-slate-400">21
                                                DEC 9:34 PM</p>
                                        </div>
                                    </div>
                                    <div class="relative mb-4 after:clear-both after:table after:content-['']">
                                        <span
                                            class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                            <i
                                                class="relative z-10 leading-none text-transparent ni ni-credit-card leading-pro bg-gradient-to-tl from-red-500 to-yellow-400 bg-clip-text fill-transparent"></i>
                                        </span>
                                        <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                            <h6 class="mb-0 text-sm font-semibold leading-normal text-slate-700">New
                                                card added for order #4395133</h6>
                                            <p class="mt-1 mb-0 text-xs font-semibold leading-tight text-slate-400">20
                                                DEC 2:20 AM</p>
                                        </div>
                                    </div>
                                    <div class="relative mb-4 after:clear-both after:table after:content-['']">
                                        <span
                                            class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                            <i
                                                class="relative z-10 leading-none text-transparent ni ni-key-25 leading-pro bg-gradient-to-tl from-purple-700 to-pink-500 bg-clip-text fill-transparent"></i>
                                        </span>
                                        <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                            <h6 class="mb-0 text-sm font-semibold leading-normal text-slate-700">Unlock
                                                packages for development</h6>
                                            <p class="mt-1 mb-0 text-xs font-semibold leading-tight text-slate-400">18
                                                DEC 4:54 AM</p>
                                        </div>
                                    </div>
                                    <div class="relative mb-0 after:clear-both after:table after:content-['']">
                                        <span
                                            class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                            <i
                                                class="relative z-10 leading-none text-transparent ni ni-money-coins leading-pro bg-gradient-to-tl from-gray-900 to-slate-800 bg-clip-text fill-transparent"></i>
                                        </span>
                                        <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                            <h6 class="mb-0 text-sm font-semibold leading-normal text-slate-700">New
                                                order #9583120</h6>
                                            <p class="mt-1 mb-0 text-xs font-semibold leading-tight text-slate-400">17
                                                DEC</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- akhir data level --}}



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
