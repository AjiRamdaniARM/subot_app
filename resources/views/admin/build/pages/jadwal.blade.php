<x-app-layout>

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <body class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-50 text-slate-500">
        @include('admin.build.components.popUpTrainer')
        {{-- sidenav --}}
        @include('admin.build.components.sidenav')
        {{-- sidenav --}}
        <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
            <!-- Navbar -->
            @include('admin.build.components.navbar')
            <!-- end Navbar -->
            <div class="w-full px-6 py-6 mx-auto">

                <div class="flex flex-wrap my-6 -mx-3">
                    <!-- card 1 -->

                    <div class="w-full max-w-full px-3 mt-0 mb-6 md:mb-0 md:w-1/2 md:flex-none lg:w-2/3 lg:flex-none">
                        <img src="{{ asset('assets/img/bannerJadwal.png') }}" class="w-full rounded-lg" alt="">
                    </div>

                    <!-- card 2 -->

                    <div class="w-full max-w-full px-3 md:w-1/2 md:flex-none lg:w-1/3 lg:flex-none">
                        <div
                            class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                            <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                                <h6>Timer Schedule</h6>
                            </div>
                            <div class="flex-auto p-4">
                                @foreach ($getDataSchedule as $jadwal)
                                    <div
                                        class="before:border-r-solid relative before:absolute before:top-0 before:left-4 before:h-full before:border-r-2 before:border-r-slate-100 before:content-[''] before:lg:-ml-px">
                                        <div class="relative mb-4 mt-0 after:clear-both after:table after:content-['']">
                                            <span
                                                class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                                <i
                                                    class="relative z-10 text-transparent ni leading-none ni-bell-55 leading-pro bg-gradient-to-tl from-green-600 to-lime-400 bg-clip-text fill-transparent"></i>
                                            </span>
                                            <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                                <h6 class="mb-0 font-semibold leading-normal text-sm text-slate-700">
                                                    {{ $jadwal->nama }}</h6>
                                                <p class="mt-1 mb-0 font-semibold leading-tight text-xs text-slate-400"
                                                    id="timer-{{ $jadwal->id_schedules }}">
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        document.addEventListener('DOMContentLoaded', function() {
                                            @foreach ($getDataSchedule as $schedule)
                                                var countdownTime{{ $schedule->id_schedules }} = {{ $schedule->timer_duration }};
                                                var display{{ $schedule->id_schedules }} = document.getElementById(
                                                    'timer-{{ $schedule->id_schedules }}');

                                                function startTimer{{ $schedule->id_schedules }}(duration, display) {
                                                    var timer = duration,
                                                        hours, minutes, seconds;
                                                    var interval = setInterval(function() {
                                                        hours = parseInt(timer / 3600, 10);
                                                        minutes = parseInt((timer % 3600) / 60, 10);
                                                        seconds = parseInt(timer % 60, 10);

                                                        hours = hours < 10 ? "0" + hours : hours;
                                                        minutes = minutes < 10 ? "0" + minutes : minutes;
                                                        seconds = seconds < 10 ? "0" + seconds : seconds;

                                                        display.textContent = hours + ":" + minutes + ":" + seconds;

                                                        if (--timer < 0) {
                                                            clearInterval(interval);
                                                            display.textContent = "Waktu Habis";
                                                            updateStatus({{ $schedule->id_schedules }}); // Kirim ID jadwal ke updateStatus
                                                        }
                                                    }, 1000);
                                                }

                                                function updateStatus(id_schedule) {
                                                    var xhr = new XMLHttpRequest();
                                                    xhr.open("POST", "/update-status/" + id_schedule, true);
                                                    xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
                                                    xhr.setRequestHeader("X-CSRF-TOKEN", document.querySelector('meta[name="csrf-token"]')
                                                        .getAttribute('content'));
                                                    xhr.onreadystatechange = function() {
                                                        if (xhr.readyState == 4) {
                                                            if (xhr.status == 200) {

                                                            } else {
                                                                alert("Failed to update status: " + xhr.responseText);
                                                            }
                                                        }
                                                    };
                                                    xhr.send(); // Tidak perlu mengirim data dalam body jika hanya mengupdate status
                                                }

                                                startTimer{{ $schedule->id_schedules }}(countdownTime{{ $schedule->id_schedules }},
                                                    display{{ $schedule->id_schedules }});
                                            @endforeach
                                        });
                                    </script>
                                @endforeach


                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3">
                    <div class="flex-none w-full max-w-full px-3">
                        <div
                            class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                            <div
                                class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                                <div class="flex items-center justify-start">
                                    <h6>Schedule List</h6>
                                    &nbsp;&nbsp;
                                    <button onclick="window.location.href='{{ route('schedule.create') }}'"
                                        class="bg-gradient-to-tl from-blue-600 to-cyan-400 font-bold text-white p-1 rounded hover:scale-102"
                                        style="transition:all;">
                                        Create Schedule
                                    </button>
                                </div>
                                <div class="mt-4 px-1">
                                    {{ $getDataSchedule->links() }}
                                </div>
                            </div>
                            <div class="flex-auto px-0 pt-0 pb-2">
                                <div class="p-0 overflow-x-auto">
                                    <table
                                        class="items-center justify-center w-full mb-0 align-top border-gray-200 text-slate-500">
                                        <thead class="align-bottom">
                                            <tr>
                                                <th
                                                    class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                    Trainer</th>
                                                <th
                                                    class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                    Teacher time</th>
                                                <th
                                                    class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                    School</th>
                                                <th
                                                    class="px-6 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                    Class Academy </th>
                                                <th
                                                    class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap">
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($getDataSchedule as $schedule)
                                                @include('admin.build.components.modalSchedule.modalViewAll')
                                                @if ($schedule->ab_trainer == 'Hadir')
                                                    <tr>
                                                        <td
                                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                            <div class="flex px-2">
                                                                <div>
                                                                    <img src="{{ asset('assets/img/checklist.png') }}"
                                                                        class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 rounded-full ease-soft-in-out h-9 w-9"
                                                                        alt="spotify" />
                                                                </div>
                                                                <div class="my-auto">

                                                                    @if ($schedule->ket == 'Tidak Aktif')
                                                                        <h6 class="mb-0 text-sm leading-normal"
                                                                            style="color: red">
                                                                            {{ $schedule->nama }}</h6>
                                                                    @else
                                                                        <h6 style="color: rgb(6, 223, 6)"
                                                                            class="mb-0 text-sm leading-normal">
                                                                            {{ $schedule->nama }}</h6>
                                                                    @endif

                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td
                                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                            <p class="mb-0 text-sm font-semibold leading-normal">
                                                                {{ date('H:i', strtotime($schedule->jm_awal)) }} -
                                                                {{ date('H:i', strtotime($schedule->jm_akhir)) }}
                                                            </p>
                                                        </td>
                                                        <td
                                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">

                                                            <span
                                                                class="text-xs font-semibold leading-tight">{{ \Carbon\Carbon::parse($schedule->tanggal_jd)->translatedFormat('d F Y') }}</span>
                                                        </td>
                                                        <td
                                                            class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                            <div class="flex items-center justify-center">
                                                                <span
                                                                    class="mr-2 text-xs font-semibold leading-tight">{{ $schedule->kelas }}</span>

                                                            </div>
                                                        </td>
                                                        <td
                                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">

                                                        </td>

                                                    </tr>
                                                @else
                                                    <tr>
                                                        <td
                                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                            <div class="flex px-2">
                                                                <div>
                                                                    <img src="{{ asset('assets/img/alarm.png') }}"
                                                                        class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 rounded-full ease-soft-in-out h-9 w-9"
                                                                        alt="spotify" />
                                                                </div>
                                                                <div class="my-auto">

                                                                    @if ($schedule->ket == 'Tidak Aktif')
                                                                        <h6 class="mb-0 text-sm leading-normal"
                                                                            style="color: red">
                                                                            {{ $schedule->nama }}</h6>
                                                                    @else
                                                                        <h6 class="mb-0 text-sm leading-normal">
                                                                            {{ $schedule->nama }}</h6>
                                                                    @endif

                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td
                                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                            <p class="mb-0 text-sm font-semibold leading-normal">
                                                                {{ date('H:i', strtotime($schedule->jm_awal)) }} -
                                                                {{ date('H:i', strtotime($schedule->jm_akhir)) }}
                                                            </p>
                                                        </td>
                                                        <td
                                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">

                                                            <span
                                                                class="text-xs font-semibold leading-tight">{{ \Carbon\Carbon::parse($schedule->tanggal_jd)->translatedFormat('d F Y') }}</span>
                                                        </td>
                                                        <td
                                                            class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                            <div class="flex items-center justify-center">
                                                                <span
                                                                    class="mr-2 text-xs font-semibold leading-tight">{{ $schedule->kelas }}</span>

                                                            </div>
                                                        </td>
                                                        <td
                                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">

                                                            <button
                                                                onclick="window.modalAll{{ $schedule->id_schedules }}.showModal()"
                                                                class="inline-block px-6 py-3 mb-0 text-xs font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-pro ease-soft-in bg-150 tracking-tight-soft bg-x-25 text-slate-400">

                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24"
                                                                    style="fill: rgb(99, 99, 99);transform: ;msFilter:;">
                                                                    <path
                                                                        d="M7 11h7v2H7zm0-4h10.97v2H7zm0 8h13v2H7zM4 4h2v16H4z">
                                                                    </path>
                                                                </svg>
                                                            </button>
                                                        </td>

                                                    </tr>
                                                @endif
                                            @endforeach

                                        </tbody>

                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
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
        </main>

    </body>

</x-app-layout>
