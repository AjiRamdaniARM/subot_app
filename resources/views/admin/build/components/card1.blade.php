<div class="flex flex-wrap -mx-3 overflow">
    <!-- === card trainer count ===  -->
    <div class="w-full animasi-hover-focus max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                    <div class="flex-none w-2/3 max-w-full px-3">
                        <div>
                            <p class="mb-0 font-sans text-sm font-semibold leading-normal animasi-hover-focus ">All
                                Trainers</p>
                            <h5 class="mb-0 font-bold">
                                +{{ $getDataTrainerCount }}
                                <span
                                    class="text-sm leading-normal font-weight-bolder text-red-500">-{{ $getDataTrainerCountNonActive }}</span>
                            </h5>
                        </div>
                    </div>
                    <div class="px-3 text-right basis-1/3">
                        <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500"
                            style="padding: 10px">
                            <x-icons.users />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- === card all schools === -->
    <div class="w-full animasi-hover-focus item max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                    <div class="flex-none w-2/3 max-w-full px-3">
                        <div>
                            <p class="mb-0 font-sans text-sm font-semibold leading-normal">All Schools</p>
                            <h5 class="mb-0 font-bold">
                                +{{ $getDataSekolahActive }}
                                <span
                                    class="text-sm leading-normal font-weight-bolder text-red-500">-{{ $getDataSekolahNonActive }}</span>
                            </h5>
                        </div>
                    </div>
                    <div class="px-3 text-right basis-1/3">
                        <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500"
                            style="padding: 10px">
                            <x-icons.academic-cap />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- card3 -->
    <div class="w-full animasi-hover-focus item max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                    <div class="flex-none w-2/3 max-w-full px-3">
                        <div>
                            <p class="mb-0 font-sans text-sm font-semibold leading-normal">All Students</p>
                            <h5 class="mb-0 font-bold">
                                +{{ $getDataSiswasActive }}
                                <span
                                    class="text-sm leading-normal text-red-600 font-weight-bolder">-{{ $getDataSiswasNonActive }}</span>
                            </h5>
                        </div>
                    </div>
                    <div class="px-3 text-right basis-1/3">
                        <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500"
                            style="padding: 10px">
                            <x-icons.emoji-happy />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- card4 -->
    <div class="w-full animasi-hover-focus item max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:w-1/4">
        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                    <div class="flex-none w-2/3 max-w-full px-3">
                        <div>
                            <p class="mb-0 font-sans text-sm font-semibold leading-normal">All Reports</p>
                            <h5 class="mb-0 font-bold">
                                +{{ $getDataLaporan }}
                            </h5>
                        </div>
                    </div>
                    <div class="px-3 text-right basis-1/3">
                        <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500"
                            style="padding: 10px">
                            <x-icons.save />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- card5 -->
    <div class="w-full animasi-hover-focus item max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:w-1/4">
        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                    <div class="flex-none w-2/3 max-w-full px-3">
                        <div>
                            <p class="mb-0 font-sans text-sm font-semibold leading-normal">All Programs</p>
                            <h5 class="mb-0 font-bold">
                                +{{ $getDataProgram }}
                            </h5>
                        </div>
                    </div>
                    <div class="px-3 text-right basis-1/3">
                        <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500"
                            style="padding: 10px">
                            <x-icons.presentation-chart-bar />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- card6 -->
    <div class="w-full animasi-hover-focus item max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:w-1/4">
        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                    <div class="flex-none w-2/3 max-w-full px-3">
                        <div>
                            <p class="mb-0 font-sans text-sm font-semibold leading-normal">All Levels</p>
                            <h5 class="mb-0 font-bold">
                                +{{ $getDataLevels }}
                            </h5>
                        </div>
                    </div>
                    <div class="px-3 text-right basis-1/3">
                        <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500"
                            style="padding: 10px">
                            <x-icons.trending-up />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- card7 -->
    <div class="w-full animasi-hover-focus item max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:w-1/4">
        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                    <div class="flex-none w-2/3 max-w-full px-3">
                        <div>
                            <p class="mb-0 font-sans text-sm font-semibold leading-normal">All Class</p>
                            <h5 class="mb-0 font-bold">
                                +{{ $getDataKelas }}
                            </h5>
                        </div>
                    </div>
                    <div class="px-3 text-right basis-1/3">
                        <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500"
                            style="padding: 10px">
                            <x-icons.view-grid />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- card8 -->
    <div class="w-full animasi-hover-focus item max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:w-1/4">
        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                    <div class="flex-none w-2/3 max-w-full px-3">
                        <div>
                            <p class="mb-0 font-sans text-sm font-semibold leading-normal">All Tools</p>
                            <h5 class="mb-0 font-bold">
                                +{{ $getDataAlats }}
                            </h5>
                        </div>
                    </div>
                    <div class="px-3 text-right basis-1/3">
                        <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500 "
                            style="padding: 10px">
                            <x-icons.lock-closed />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- card9 -->
    <div class="w-full animasi-hover-focus item max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:w-1/4">
        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                    <div class="flex-none w-2/3 max-w-full px-3">
                        <div>
                            <p class="mb-0 font-sans text-sm font-semibold leading-normal">All Schedules</p>
                            <h5 class="mb-0 font-bold">
                                +{{ $getDataSchedules }}
                            </h5>
                        </div>
                    </div>
                    <div class="px-3 text-right basis-1/3">
                        <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500"
                            style="padding: 10px">
                            <x-icons.fire />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content-show-button flex items-center justify-center mt-4">
    <button id="showHide" onclick="showHide();" class="button-showhide poppins-medium">Show All</button>
</div>
