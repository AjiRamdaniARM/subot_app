<x-app-layout>
    @include('admin.build.components.trainer.modalPrivacy')

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
                    <form id="post" class="w-full max-w-lg"
                        action="{{ url('/schedule/prosess/' . $getDataSchedule->id_schedules) }}" method="POST">
                        @csrf
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-first-name">
                                    Days
                                </label>
                                <select name="hari" id="days" required
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                    <option value=" {{ $getDataSchedule->hari }}"
                                        style="background-color: red ; color:white">
                                        {{ $getDataSchedule->hari }} (
                                        Dipilih )</option>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jum'at">Jum'at</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Minggu">Minggu</option>
                                </select>
                                {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    Trainers
                                </label>
                                <select name="id_trainer" id="trainer" required
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                    <option value="{{ $getDataSchedule->id_trainer }}"
                                        style="background-color: red ; color:white">
                                        {{ $getDataSchedule->trainer_name }} (
                                        Dipilih )</option>
                                    @foreach ($getDataTrainer as $trainer)
                                        <option value="{{ $trainer->id }}">{{ $trainer->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">

                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    Class Academy
                                </label>
                                <select name="id_kelas" id="class" required
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                    <option value="{{ $getDataSchedule->id_kelas }}"
                                        style="background-color: red ; color:white">
                                        {{ $getDataSchedule->kelas_name }} (
                                        Dipilih )</option>
                                    @foreach ($getDataClass as $class)
                                        <option value="{{ $class->id }}">{{ $class->kelas }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    TOOLS
                                </label>
                                <select name="id_alat" id="alat" required
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                    <option value="{{ $getDataSchedule->id_alat }}"
                                        style="background-color: red ; color:white">
                                        {{ $getDataSchedule->nama_alat }} (
                                        Dipilih )</option>
                                    @foreach ($getDataTools as $tools)
                                        <option value="{{ $tools->id }}">{{ $tools->alat }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    first hour teaching
                                </label>
                                <input type="time" value="{{ $getDataSchedule->jm_awal }}" name="jm_awal" required
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    final hour of teaching
                                </label>
                                <input type="time" value="{{ $getDataSchedule->jm_akhir }}" name="jm_akhir" required
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    Pj Club
                                </label>
                                <select name="pj_eskul" id="trainer" required
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                    <option value=" {{ $getDataSchedule->pj_eskul }}"
                                        style="background-color: red ; color:white">
                                        {{ $getDataSchedule->pj_eskul }} (
                                        Dipilih )</option>
                                    @foreach ($getDataTrainer as $trainer)
                                        <option value="{{ $trainer->nama }}">{{ $trainer->nama }}</option>
                                    @endforeach
                                </select>
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
                                <input type="time" name="dj_akhir" value="{{ $getDataSchedule->dj_akhir }}" required
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    teaching schedule date
                                </label>
                                <input type="date" value="{{ $getDataSchedule->tanggal_jd }}" name="tanggal_jd"
                                    required
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            </div>


                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    Status Schedule
                                </label>
                                <select name="ket" id="status" required
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                    <option value=" {{ $getDataSchedule->ket }}"
                                        style="background-color: red ; color:white">
                                        {{ $getDataSchedule->ket }} (
                                        Dipilih )</option>
                                    <option value="Aktif">Aktif</option>
                                    <option value="Tidak Aktif">Tidak Aktif</option>
                                </select>
                            </div>

                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name" style="color: rgb(192, 109, 2)">
                                    api google maps ( optional)
                                </label>
                                <input type="text" name="api_maps" value="{{ $getDataSchedule->api_maps }}"
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    placeholder="link google maps">
                            </div>


                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    Program academy
                                </label>
                                <select name="id_program" id="program" required
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                    <option value="{{ $getDataSchedule->id_program }}"
                                        style="background-color: red ; color:white">
                                        {{ $getDataSchedule->program }} (
                                        Dipilih )</option>
                                    @foreach ($getDataProgram as $program)
                                        <option value="{{ $tools->id }}">{{ $program->program }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    Level academy
                                </label>
                                <select name="id_level" id="level" required
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                    <option value="{{ $getDataSchedule->id_level }}"
                                        style="background-color: red ; color:white">
                                        {{ $getDataSchedule->levels }} (
                                        Dipilih )</option>
                                    @foreach ($getDataLevel as $level)
                                        <option value="{{ $tools->id }}">{{ $level->levels }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full  px-3" style="display: none;">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    school
                                </label>
                                <select name="id_sekolah" id="school"
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                    <option value="">Select School</option>
                                    @foreach ($getDataSchool as $school)
                                        <option value="{{ $school->id_sekolah }}">{{ $school->sekolah }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        {{-- data siswa yang sudah terdaftar dalam jadwal --}}
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
                                            {{ $siswa->tanggal_lahir }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br>
                        <h6 class="text-center">If no student data is changed then ignore the student checkbox !! 👌🙏
                        </h6>
                        <div style="= width:100%; padding-bottom:3px; background-color:orange; border-radius:10px">
                        </div>
                        <br>
                        <table class="w-full leading-normal">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">Student Name</th>
                                    <th class="px-4 py-2">Select</th>
                                </tr>
                            </thead>


                            <tbody id="siswa-table-body">
                                {{-- data siswa yang belum terdaftar dalam jadwal --}}
                            </tbody>
                        </table>
                </div>

                <br>
                <button type="submit"
                    class="bg-gradient-to-tl text-center from-blue-600 to-cyan-400 font-bold text-white w-full  rounded hover:scale-102"
                    style="height: 50px;">Edited
                    Schedule</button>
                </form>
            </div>
            </div>
        </main>

    </body>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const schoolSelect = document.getElementById('school');
            const siswaTableBody = document.getElementById('siswa-table-body');
            const allSiswa = @json($getDataSiswa);

            schoolSelect.addEventListener('change', function() {
                const selectedSchoolId = this.value;
                siswaTableBody.innerHTML = '';

                const filteredSiswa = allSiswa.filter(siswa => siswa.id_sekolah == selectedSchoolId);

                filteredSiswa.forEach(siswa => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                <td class="border px-4 py-2">${siswa.nama_lengkap}</td>
                <td class="border px-4 py-2 text-center">
                    <input type="checkbox" name="id_siswa[]" value="${siswa.id}" class="form-checkbox h-5 w-5 text-blue-600" >
                </td>
            `;
                    siswaTableBody.appendChild(row);
                });
            });
        });
        document.addEventListener('DOMContentLoaded', function() {
            const classSelect = document.getElementById('class');
            const schoolSelect = document.getElementById('school');
            const siswaTableBody = document.getElementById('siswa-table-body');
            const allSiswa = @json($getDataSiswa);

            classSelect.addEventListener('change', function() {
                const selectedClass = classSelect.options[classSelect.selectedIndex].text;

                if (selectedClass.toLowerCase() === 'club') {
                    schoolSelect.parentElement.style.display = 'block';
                    schoolSelect.required = true;
                } else {
                    schoolSelect.parentElement.style.display = 'none';
                    schoolSelect.required = false;
                }

                const selectedSchoolId = this.value;
                siswaTableBody.innerHTML = '';

                const filteredSiswa = allSiswa.filter(siswa => siswa.id_kelas == selectedSchoolId);

                filteredSiswa.forEach(siswa => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                <td class="border px-4 py-2">${siswa.nama_lengkap}</td>
                <td class="border px-4 py-2 text-center">
                    <input type="checkbox" name="id_siswa[]" value="${siswa.id}" class="form-checkbox h-5 w-5 text-blue-600" >
                </td>
            `;
                    siswaTableBody.appendChild(row);
                });
            });

            // Trigger change event to set initial state on page load
            classSelect.dispatchEvent(new Event('change'));
        });
    </script>
</x-app-layout>
