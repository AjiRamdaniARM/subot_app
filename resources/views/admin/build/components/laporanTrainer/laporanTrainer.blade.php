<x-app-layout>

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
                <img src="{{ asset('assets/img/bannerSchdeulw.png') }}" class="w-full rounded-lg" alt="">
                <div class="form" style="padding-top:20px">

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-first-name">
                                Laporan ( Note )
                            </label>
                            <textarea type="text" name="jm_akhir" readonly
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">{{ $schedules->catatan }}</textarea>
                            {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                        </div>

                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-first-name">
                                Tanggal Absen
                            </label>
                            <input type="text" name="jm_akhir"
                                value="  {{ \Carbon\Carbon::parse($schedules->tanggal_lp)->translatedFormat('d F Y') }}"
                                readonly
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-last-name">
                                Waktu Absen
                            </label>
                            <input type="text" name="jm_akhir"
                                value="{{ \Carbon\Carbon::parse($schedules->jam_lp)->format('H:i') }}" readonly
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-first-name">
                                Materi
                            </label>
                            <input type="text" name="jm_akhir" value=" {{ $getMateri->materi }}" readonly
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-last-name">
                                Tanda Tangan
                            </label>
                            <a href="{{ asset('assets/trainer_data/ttd/' . $schedules->ttd) }}" type="text"
                                name="jm_akhir"
                                class="appearance-none block w-full bg-blue-500  text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight "
                                style="color: white">View
                                Tanda Tangan</a>
                        </div>
                    </div>
                    <div style="= width:100%; padding-bottom:3px; background-color:orange; border-radius:10px">
                    </div>
                    <br>
                    <table class="w-full leading-normal">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Registered students</th>
                                <th class="px-4 py-2">Date of Birth</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($getDataStudent as $siswa)
                                <input type="text" name="id_siswa[]" hidden value="{{ $siswa->id }}">
                                <tr>
                                    <td class="border px-4 py-2">{{ $siswa->nama_lengkap }}</td>
                                    <td class="border px-4 py-2 text-center">
                                        {{ $siswa->absensi_anak }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                    <div style="= width:100%; padding-bottom:3px; background-color:orange; border-radius:10px">
                    </div>
                    <br>
                    <form class="w-full max-w-lg">

                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-first-name">
                                    Days
                                </label>
                                <input type="text" name="jm_akhir" value="{{ $schedules->hari }}" readonly
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    Trainers
                                </label>
                                <input type="text" name="jm_akhir" value="{{ $schedules->trainer_name }}" readonly
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">

                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    Class Academy
                                </label>
                                <input type="text" name="jm_akhir" value="{{ $schedules->kelas_name }}" readonly
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    TOOLS
                                </label>
                                <input type="text" name="jm_akhir" value="{{ $schedules->nama_alat }}" readonly
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            </div>

                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    first hour teaching
                                </label>
                                <input type="text" name="jm_akhir" value="{{ $schedules->jm_awal }}" readonly
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    final hour of teaching
                                </label>
                                <input type="text" name="jm_akhir" value="{{ $schedules->jm_akhir }}" readonly
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    Pj Club
                                </label>
                                <input type="text" name="jm_akhir" value="{{ $schedules->pj_eskul }}" readonly
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            </div>

                            {{-- fitur disabled --}}
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 "
                                    for="grid-last-name" style="color: red">
                                    early attendance deadline ( fitur disabled)
                                </label>
                                <input type="timestamp"
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    disabled>
                            </div>
                            {{-- fitur disabled --}}

                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3">

                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    final attendance deadline
                                </label>
                                <input type="text" name="jm_akhir" value="{{ $schedules->dj_akhir }}" readonly
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    teaching schedule date
                                </label>
                                <input type="text" name="jm_akhir" value="{{ $schedules->tanggal_jd }}" readonly
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            </div>


                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    Status Schedule
                                </label>
                                <input type="text" name="jm_akhir" value="{{ $schedules->ket }}" readonly
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            </div>

                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name" style="color: rgb(192, 109, 2)">
                                    api google maps ( optional)
                                </label>
                                <input type="text" name="jm_akhir" value="{{ $schedules->api_maps }}" readonly
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            </div>


                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    Program academy
                                </label>
                                <input type="text" name="jm_akhir" value="{{ $schedules->program }}" readonly
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    Level academy
                                </label>
                                <input type="text" name="jm_akhir" value="{{ $schedules->levels }}" readonly
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full  px-3" style="display: none;">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    school
                                </label>

                            </div>
                        </div>



                </div>

                <br>

                </form>
            </div>
            </div>
        </main>

    </body>

</x-app-layout>
