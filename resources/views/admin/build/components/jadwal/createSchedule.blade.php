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
                    <form id="post" class="w-full max-w-lg" action="{{ route('schedule.post') }}" method="POST">
                        @csrf
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-first-name">
                                    Days
                                </label>
                                <select name="hari" id="days" required
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                    <option value="">Select Days</option>
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
                                    <option value="">Select Trainers</option>
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
                                    <option value="">Select Class</option>
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
                                    <option value="">Select Tools</option>
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
                                <input type="time" name="jm_awal" required
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    final hour of teaching
                                </label>
                                <input type="time" name="jm_akhir" required
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
                                    <option value="">Select Pj Club</option>
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
                                <input type="time" name="dj_akhir" required
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    teaching schedule date
                                </label>
                                <input type="date" name="tanggal_jd" required
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
                                    <option value="">Select Status</option>
                                    <option value="Aktif">Aktif</option>
                                    <option value="Tidak Aktif">Tidak Aktif</option>
                                </select>
                            </div>

                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name" style="color: rgb(192, 109, 2)">
                                    api google maps ( optional)
                                </label>
                                <input type="text" name="api_maps"
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
                                    <option value="">Select Program</option>
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
                                    <option value="">Select Level</option>
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

                        <table class="w-full leading-normal">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">Nama Siswa</th>
                                    <th class="px-4 py-2">Pilih</th>
                                </tr>
                            </thead>
                            <tbody id="siswa-table-body">
                                <!-- Rows will be populated here based on selected school -->
                            </tbody>
                        </table>
                </div>

                <br>
                <button type="submit"
                    class="bg-gradient-to-tl text-center from-blue-600 to-cyan-400 font-bold text-white w-full  rounded hover:scale-102"
                    style="height: 50px;">Create
                    Schedule</button>
                </form>
            </div>
            </div>
        </main>
        <div fixed-plugin>
            <a fixed-plugin-button
                class="bottom-7.5 right-7.5 text-xl z-990 shadow-soft-lg rounded-circle fixed cursor-pointer bg-white px-4 py-2 text-slate-700">
                <i class="py-2 pointer-events-none fa fa-cog"> </i>
            </a>
            <!-- -right-90 in loc de 0-->
            <div fixed-plugin-card
                class="z-sticky shadow-soft-3xl w-90 ease-soft -right-90 fixed top-0 left-auto flex h-full min-w-0 flex-col break-words rounded-none border-0 bg-white bg-clip-border px-2.5 duration-200">
                <div class="px-6 pt-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
                    <div class="float-left">
                        <h5 class="mt-4 mb-0">Soft UI Configurator</h5>
                        <p>See our dashboard options.</p>
                    </div>
                    <div class="float-right mt-6">
                        <button fixed-plugin-close-button
                            class="inline-block p-0 mb-4 text-xs font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer hover:scale-102 leading-pro ease-soft-in tracking-tight-soft bg-150 bg-x-25 active:opacity-85 text-slate-700">
                            <i class="fa fa-close"></i>
                        </button>
                    </div>
                    <!-- End Toggle Button -->
                </div>
                <hr
                    class="h-px mx-0 my-1 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />
                <div class="flex-auto p-6 pt-0 sm:pt-4">
                    <!-- Sidebar Backgrounds -->
                    <div>
                        <h6 class="mb-0">Sidebar Colors</h6>
                    </div>
                    <a href="javascript:void(0)">
                        <div class="my-2 text-left" sidenav-colors>
                            <span
                                class="text-xs rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-to-tl from-purple-700 to-pink-500 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-slate-700 text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700"
                                active-color data-color-from="purple-700" data-color-to="pink-500"
                                onclick="sidebarColor(this)"></span>
                            <span
                                class="text-xs rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-to-tl from-gray-900 to-slate-800 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700"
                                data-color-from="gray-900" data-color-to="slate-800"
                                onclick="sidebarColor(this)"></span>
                            <span
                                class="text-xs rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-to-tl from-blue-600 to-cyan-400 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700"
                                data-color-from="blue-600" data-color-to="cyan-400"
                                onclick="sidebarColor(this)"></span>
                            <span
                                class="text-xs rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-to-tl from-green-600 to-lime-400 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700"
                                data-color-from="green-600" data-color-to="lime-400"
                                onclick="sidebarColor(this)"></span>
                            <span
                                class="text-xs rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-to-tl from-red-500 to-yellow-400 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700"
                                data-color-from="red-500" data-color-to="yellow-400"
                                onclick="sidebarColor(this)"></span>
                            <span
                                class="text-xs rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-to-tl from-red-600 to-rose-400 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700"
                                data-color-from="red-600" data-color-to="rose-400"
                                onclick="sidebarColor(this)"></span>
                        </div>
                    </a>
                    <!-- Sidenav Type -->
                    <div class="mt-4">
                        <h6 class="mb-0">Sidenav Type</h6>
                        <p class="text-sm leading-normal">Choose between 2 different sidenav types.</p>
                    </div>
                    <div class="flex">
                        <button transparent-style-btn
                            class="inline-block w-full px-4 py-3 mb-2 text-xs font-bold text-center text-white uppercase align-middle transition-all border border-transparent border-solid rounded-lg cursor-pointer xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-purple-700 xl-max:to-pink-500 xl-max:text-white xl-max:border-0 hover:scale-102 hover:shadow-soft-xs active:opacity-85 leading-pro ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-purple-700 to-pink-500 bg-fuchsia-500 hover:border-fuchsia-500"
                            data-class="bg-transparent" active-style>Transparent</button>
                        <button white-style-btn
                            class="inline-block w-full px-4 py-3 mb-2 ml-2 text-xs font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg cursor-pointer xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-purple-700 xl-max:to-pink-500 xl-max:text-white xl-max:border-0 hover:scale-102 hover:shadow-soft-xs active:opacity-85 leading-pro ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 border-fuchsia-500 bg-none text-fuchsia-500 hover:border-fuchsia-500"
                            data-class="bg-white">White</button>
                    </div>
                    <p class="block mt-2 text-sm leading-normal xl:hidden">You can change the sidenav type just on
                        desktop view.</p>
                    <!-- Navbar Fixed -->
                    <div class="mt-4">
                        <h6 class="mb-0">Navbar Fixed</h6>
                    </div>
                    <div class="min-h-6 mb-0.5 block pl-0">
                        <input
                            class="rounded-10 duration-250 ease-soft-in-out after:rounded-circle after:shadow-soft-2xl after:duration-250 checked:after:translate-x-5.25 h-5 relative float-left mt-1 ml-auto w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-slate-800/95 checked:bg-slate-800/95 checked:bg-none checked:bg-right"
                            type="checkbox" navbarFixed />
                    </div>
                    <hr
                        class="h-px bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent sm:my-6" />
                    <a class="inline-block w-full px-6 py-3 mb-4 text-xs font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer leading-pro ease-soft-in hover:shadow-soft-xs hover:scale-102 active:opacity-85 tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800"
                        href="https://www.creative-tim.com/product/soft-ui-dashboard-tailwind" target="_blank">Free
                        Download</a>
                    <a class="inline-block w-full px-6 py-3 mb-4 text-xs font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer active:shadow-soft-xs hover:scale-102 active:opacity-85 leading-pro ease-soft-in tracking-tight-soft bg-150 bg-x-25 border-slate-700 text-slate-700 hover:bg-transparent hover:text-slate-700 hover:shadow-none active:bg-slate-700 active:text-white active:hover:bg-transparent active:hover:text-slate-700 active:hover:shadow-none"
                        href="https://www.creative-tim.com/learning-lab/tailwind/html/quick-start/soft-ui-dashboard/"
                        target="_blank"">View documentation</a>
                    <div class="w-full text-center">
                        <a class="github-button"
                            href="https://github.com/creativetimofficial/soft-ui-dashboard-tailwind"
                            data-icon="octicon-star" data-size="large" data-show-count="true"
                            aria-label="Star creativetimofficial/soft-ui-dashboard on GitHub">Star</a>
                        <h6 class="mt-4">Thank you for sharing!</h6>
                        <a href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Dashboard%20Tailwind%20made%20by%20%40CreativeTim&hashtags=webdesign,dashboard,tailwindcss&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard-tailwind"
                            class="inline-block px-6 py-3 mb-0 mr-2 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer hover:shadow-soft-xs hover:scale-102 active:opacity-85 leading-pro ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 me-2 border-slate-700 bg-slate-700"
                            target="_blank"> <i class="mr-1 fab fa-twitter" aria-hidden="true"></i> Tweet </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard-tailwind"
                            class="inline-block px-6 py-3 mb-0 mr-2 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer hover:shadow-soft-xs hover:scale-102 active:opacity-85 leading-pro ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 me-2 border-slate-700 bg-slate-700"
                            target="_blank"> <i class="mr-1 fab fa-facebook-square" aria-hidden="true"></i> Share
                        </a>
                    </div>
                </div>
            </div>
        </div>
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

        document.getElementById('post').addEventListener('submit', function(event) {
            var checkboxes = document.querySelectorAll('input[name="id_siswa[]"]');
            var checkedOne = Array.prototype.slice.call(checkboxes).some(x => x.checked);

            if (!checkedOne) {
                alert('Harap pilih setidaknya satu siswa.');
                event.preventDefault();
            }
        });
    </script>
</x-app-layout>
