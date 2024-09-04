<x-app-layout>

    <body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
        @include('admin.build.components.sidenav')
        @include('modalSekolah')

        <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
            <!-- Navbar -->
            @include('admin.build.components.navbar')

            <div class="w-full px-6 py-6 mx-auto">
                <!-- content -->
                <div class="flex flex-wrap -mx-3">
                    <div class="max-w-full px-3 lg:w-full lg:flex-none">
                        <div class="flex flex-wrap -mx-3">
                            <div class="max-w-full px-3 mb-4 lg:mb-0 lg:w-full lg:flex-none">
                                <div class="relative flex flex-wrap  justify-between items-center mt-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border "
                                    style="padding: 20px">
                                    <h5>Report data filter feature</h5>

                                    {{-- === fitur filter data tanggal === --}}
                                    <form id="filter-form" class="mb-4">
                                        @include('admin.build.components.javascriptBlade.sistem')
                                        <div class="flex flex-wrap  items-center gap-4" style="gap:10px">
                                            <a href="{{ route('laporan.custom') }}" class="button-custom"
                                                id="custom-laporan-btn"> Custom
                                                Laporan</a>
                                            @include('admin.build.components.javascriptBlade.sistem')
                                            <input type="date" id="start-date" name="start_date"
                                                class="border rounded p-2" placeholder="Start Date" required>
                                            <input type="date" id="end-date" name="end_date"
                                                class="border rounded p-2" placeholder="End Date" required>
                                            <button type="submit" id="filter-button"
                                                class=" py-2 bg-blue-500 text-white rounded button-filter">Filter</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="flex flex-wrap -mx-3">
                    <div class="w-full max-w-full px-3 mt-6  md:flex-none">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                            <div class="p-6 px-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
                                <h6 class="mb-0">All report data</h6>
                            </div>
                            <div class="flex-auto p-4 pt-6">

                                <ul id="schedule-table" class="flex flex-col pl-0 mb-0 rounded-lg">
                                    @foreach ($schedules as $jadwal)
                                        <li
                                            class="relative flex p-6 mb-2 border-0 rounded-t-inherit rounded-xl bg-gray-50">
                                            <div class="flex" style="gap: 20px;">
                                                <img src="{{ asset('assets/trainer_data/profile/' . $jadwal->profile) }}"
                                                    alt="child"
                                                    style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%; margin: 0 auto;">
                                                <div class="flex flex-col">
                                                    <h6 class="mb-4 leading-normal text-sm">{{ $jadwal->nama_trainer }}
                                                        (Attendance :
                                                        {{ \Carbon\Carbon::parse($jadwal->tanggal_lp)->translatedFormat('d F Y') }}
                                                        - {{ \Carbon\Carbon::parse($jadwal->jam_lp)->format('H:i') }})
                                                    </h6>
                                                    <div class="foot">
                                                        <span class="mb-2 leading-tight text-xs">Class: <span
                                                                class="font-semibold text-slate-700 sm:ml-2">{{ $jadwal->kelas }}</span></span>
                                                        &nbsp;
                                                        <span class="mb-2 leading-tight text-xs">Schedule Date : <span
                                                                class="font-semibold text-slate-700 sm:ml-2">
                                                                {{ \Carbon\Carbon::parse($jadwal->tanggal_jd)->translatedFormat('d F Y') }}</span></span>
                                                        &nbsp;
                                                        <span class="mb-2 leading-tight text-xs">Program Academy : <span
                                                                class="font-semibold text-slate-700 sm:ml-2">
                                                                {{ $jadwal->program }}</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ml-auto text-right flex flex-wrap">
                                                <a class="inline-block px-4 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 hover:scale-102 active:opacity-85 bg-x-25 text-slate-700"
                                                    href="{{ url('/laporanTrainer/Excel/' . $jadwal->id_schedules) }}">
                                                    Excel
                                                </a>
                                                <a href="{{ url('/laporanTrainer/' . $jadwal->id_schedules) }}"
                                                    class="inline-block px-4 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 hover:scale-102 active:opacity-85 bg-x-25 text-slate-700"
                                                    href="javascript:;">
                                                    <svg class="w-5 text-[#344767]" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                    View
                                                </a>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>

                                <script>
                                    document.getElementById('filter-form').addEventListener('submit', function(event) {
                                        event.preventDefault();

                                        const startDate = document.getElementById('start-date').value;
                                        const endDate = document.getElementById('end-date').value;

                                        fetch(`/laporanTrainer?start_date=${startDate}&end_date=${endDate}`)
                                            .then(response => response.text())
                                            .then(html => {
                                                document.getElementById('schedule-table').innerHTML = new DOMParser()
                                                    .parseFromString(html, 'text/html')
                                                    .getElementById('schedule-table').innerHTML;
                                            })
                                            .catch(error => console.error('Error:', error));
                                    });
                                </script>


                            </div>
                        </div>
                    </div>


                </div>

                <footer class="pt-4">
                    <div class="w-full px-6 mx-auto">
                        <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
                            <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
                                <div class="leading-normal text-center text-sm text-slate-500 lg:text-left">
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
                                            class="block px-4 pt-0 pb-1 font-normal transition-colors ease-soft-in-out text-sm text-slate-500"
                                            target="_blank">Creative Tim</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://www.creative-tim.com/presentation"
                                            class="block px-4 pt-0 pb-1 font-normal transition-colors ease-soft-in-out text-sm text-slate-500"
                                            target="_blank">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://creative-tim.com/blog"
                                            class="block px-4 pt-0 pb-1 font-normal transition-colors ease-soft-in-out text-sm text-slate-500"
                                            target="_blank">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://www.creative-tim.com/license"
                                            class="block px-4 pt-0 pb-1 pr-0 font-normal transition-colors ease-soft-in-out text-sm text-slate-500"
                                            target="_blank">License</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>

        </main>

    </body>

</x-app-layout>
