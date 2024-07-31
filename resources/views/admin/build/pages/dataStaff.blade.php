<x-app-layout>

    <body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
        @include('admin.build.components.sidenav')
        <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
            <!-- Navbar -->
            @include('admin.build.components.navbar')

            <div class="w-full px-6 py-6 mx-auto">

                {{-- alert validasi data anak input  --}}
                @if (session('success'))
                    <div class="alert alert-success text-center text-black font-bold" role="alert"
                        style="background-color: rgb(166, 255, 166); padding:3px">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-success text-center text-white font-bold" role="alert"
                        style="background-color: rgb(255, 45, 22); padding:3px">
                        {{ session('error') }}
                    </div>
                @endif
                <img src="{{ asset('assets/img/bannerstaff.jpeg') }}" class="w-full rounded-lg" alt="">
                <!-- content -->
                <div class="flex flex-wrap -mx-3">
                    <div class="max-w-full px-3 lg:w-full lg:flex-none">
                        <div class="flex flex-wrap -mx-3">
                            <div class="max-w-full px-3 mb-4 lg:mb-0 lg:w-full lg:flex-none">
                                <div
                                    class="relative flex flex-col min-w-0 mt-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                                    <form action="{{ route('admin.kids') }}" method="POST" class="text-black"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div
                                            class="p-4 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                                            <div class="flex flex-wrap -mx-3">
                                                <div class="flex items-center flex-none max-w-full px-3">
                                                    <h6 class="mb-0">Add New Staff</h6>
                                                </div>
                                                <div class="max-w-full px-3 text-right"
                                                    style="display:flex; flex-wrap:wrap; gap:1px">
                                                    <button type="submit"
                                                        class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25">
                                                        <i class="fas fa-plus"></i>&nbsp;&nbsp;Create Data
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col p-4" style="gap:10px">
                                            <div class="flex flex-wrap -mx-3">
                                                <div class="max-w-full px-3 mb-6 md:mb-0 md:w-1/2 md:flex-none">
                                                    <label for="nama_lengkap"
                                                        class="block text-sm font-medium text-gray-700">Full
                                                        Name</label>
                                                    <input id="nama_lengkap"
                                                        class="relative flex flex-row items-center flex-auto min-w-0 p-6 break-words bg-yellow-800 border border-solid shadow-none rounded-xl w-full border-black bg-clip-border py-4"
                                                        name="nama_lengkap" value="{{ old('nama_lengkap') }}"
                                                        type="text" required />
                                                    @error('nama_lengkap')
                                                        <div class="alert alert-danger" style="padding: 10px; color:red"
                                                            role="alert">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="max-w-full px-3 mb-6 md:mb-0 md:w-1/2 md:flex-none">
                                                    <label for="tl"
                                                        class="block text-sm font-medium text-gray-700">Full Address
                                                        Staff</label>
                                                    <input id="tl"
                                                        class="relative flex flex-row items-center flex-auto min-w-0 p-6 break-words bg-transparent border border-solid shadow-none rounded-xl w-full py-4 border-slate-100 bg-clip-border"
                                                        name="tl" value="{{ old('tl') }}" required
                                                        type="text" />
                                                    @error('tl')
                                                        <div class="alert alert-danger" style="padding: 10px; color:red"
                                                            role="alert">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="flex flex-wrap -mx-3">
                                                <div class="max-w-full px-3 mb-6 md:mb-0 md:w-1/2 md:flex-none">
                                                    <label for="kelas"
                                                        class="block text-sm font-medium text-gray-700">Graduates
                                                        Staff</label>
                                                    <input id="kelas"
                                                        class="relative flex flex-row items-center flex-auto min-w-0 p-6 break-words bg-transparent border border-solid shadow-none rounded-xl py-4 w-full border-slate-100 bg-clip-border"
                                                        name="kelas" value="{{ old('kelas') }}" type="text"
                                                        required />
                                                    @error('kelas')
                                                        <div class="alert alert-danger" style="padding: 10px; color:red"
                                                            role="alert">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="max-w-full px-3 mb-6 md:mb-0 md:w-1/2 md:flex-none">
                                                    <label for="nama_ortu"
                                                        class="block text-sm font-medium text-gray-700">No Telp
                                                        Staff</label>
                                                    <input id="nama_ortu"
                                                        class="relative flex flex-row items-center flex-auto min-w-0 p-6 break-words bg-transparent border border-solid shadow-none rounded-xl w-full py-4 border-slate-100 bg-clip-border"
                                                        name="nama_ortu" value="{{ old('nama_ortu') }}" type="text"
                                                        required />
                                                    @error('nama_ortu')
                                                        <div class="alert alert-danger" style="padding: 10px; color:red"
                                                            role="alert">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="flex flex-wrap -mx-3">
                                                <div class="max-w-full px-3 mb-6 md:mb-0 md:w-1/2 md:flex-none">
                                                    <label for="alamat"
                                                        class="block text-sm font-medium text-gray-700">Place of
                                                        Birth</label>
                                                    <input id="alamat"
                                                        class="relative flex flex-row items-center flex-auto min-w-0 p-6 break-words bg-transparent border border-solid shadow-none rounded-xl w-full py-4 border-slate-100 bg-clip-border"
                                                        name="alamat" value="{{ old('alamat') }}" type="text"
                                                        required />
                                                    @error('alamat')
                                                        <div class="alert alert-danger" style="padding: 10px; color:red"
                                                            role="alert">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <!--input file-->
                                                <div class="max-w-full px-3 mb-6 md:mb-0 md:w-1/2 md:flex-none">
                                                    <label for="file_ktp"
                                                        class="block text-sm font-medium text-gray-700">KTP
                                                        Photo</label>
                                                    <input id="file_ktp"
                                                        class="relative flex flex-row items-center flex-auto min-w-0 p-6 break-words bg-transparent border border-solid shadow-none rounded-xl w-full  py-4 border-slate-100  bg-clip-border"
                                                        name="file_ktp" type="file" required />
                                                </div>
                                                <div class="max-w-full px-3 mb-6 md:mb-0 md:w-1/2 md:flex-none">
                                                    <label for="file_profile"
                                                        class="block text-sm font-medium text-gray-700">Profile
                                                        Photo</label>
                                                    <input id="file_profile"
                                                        class="relative flex flex-row items-center flex-auto min-w-0 p-6 break-words bg-transparent border border-solid shadow-none rounded-xl w-full  py-4 border-slate-100  bg-clip-border"
                                                        name="file_profile" type="file" required />
                                                </div>
                                                <div class="max-w-full px-3 mb-6 md:mb-0 md:w-1/2 md:flex-none">
                                                    <label for="file_signature"
                                                        class="block text-sm font-medium text-gray-700">Signature
                                                        Photo</label>
                                                    <input id="file_signature"
                                                        class="relative flex flex-row items-center flex-auto min-w-0 p-6 break-words bg-transparent border border-solid shadow-none rounded-xl w-full  py-4 border-slate-100  bg-clip-border"
                                                        name="file_signature" type="file" required />
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="flex flex-wrap -mx-3">
                    <div class="flex-none w-full max-w-full px-3">
                        <div
                            class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                            <div
                                class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent flex-items">
                                <h6>Staff Table</h6>
                                &nbsp; &nbsp; &nbsp;
                            </div>
                            <div class="flex-auto px-0 pt-0 pb-2">
                                <div class="p-0 overflow-x-auto">
                                    <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                                        <thead class="align-bottom">

                                            <tr>
                                                <th
                                                    class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                    Staff</th>
                                                <th
                                                    class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                    Status</th>
                                                <th
                                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                    confidential data</th>
                                                <th
                                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                    Aksi</th>
                                                <th
                                                    class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @foreach ($getTrainerData as $trainerGet) --}}
                                            <tr>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                    <div class="flex px-2 py-1">
                                                        <div>
                                                            <img src="{{ asset('assets/trainer_data/profile/Profile_Asep Saeban.jpg') }}"
                                                                class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl"
                                                                alt="user1" />
                                                        </div>
                                                        <div class="flex flex-col justify-center">
                                                            <h6 class="mb-0 text-sm leading-normal">
                                                                Aziz Ramadhan
                                                                <p class="mb-0 text-xs leading-tight text-slate-400">
                                                                    University Nusa Putra
                                                        </div>
                                                    </div>
                                                </td>
                                                <td --}} <p class="mb-0 text-xs font-semibold leading-tight">Aktif</p>
                                                </td>
                                                <td
                                                    class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">

                                                    {{-- <button onclick="window.dialog.showModal();"> --}}
                                                    <a href="{{ url('') }}">
                                                        <span
                                                            class="animasi-button bg-gradient-to-tl from-red-600 to-rose-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white ">Private
                                                            Data</span>
                                                    </a>

                                                </td>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent text-right">
                                                    <style>
                                                        .action-link {
                                                            margin-left: 10px;
                                                            /* Mengganti margin-right dengan margin-left untuk alignment di kanan */
                                                        }
                                                    </style>

                                                    <a href="#" class="action-link">Edit</a>
                                                    <a href="#" class="action-link">Delete</a>
                                                    <a href="#" class="action-link">CP</a>

                                                    <!-- Link untuk popup jika diperlukan -->
                                                    <a href="#popupdelete"></a>
                                                </td>
                                            </tr>
                                            {{-- @endforeach --}}
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
                            class="inline-block p-0 mb-4 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer hover:scale-102 leading-pro text-xs ease-soft-in tracking-tight-soft bg-150 bg-x-25 active:opacity-85 text-slate-700">
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
                        <p class="leading-normal text-sm">Choose between 2 different sidenav types.</p>
                    </div>
                    <div class="flex">
                        <button transparent-style-btn
                            class="inline-block w-full px-4 py-3 mb-2 font-bold text-center text-white uppercase align-middle transition-all border border-transparent border-solid rounded-lg cursor-pointer xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-purple-700 xl-max:to-pink-500 xl-max:text-white xl-max:border-0 hover:scale-102 hover:shadow-soft-xs active:opacity-85 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-purple-700 to-pink-500 bg-fuchsia-500 hover:border-fuchsia-500"
                            data-class="bg-transparent" active-style>Transparent</button>
                        <button white-style-btn
                            class="inline-block w-full px-4 py-3 mb-2 ml-2 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg cursor-pointer xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-purple-700 xl-max:to-pink-500 xl-max:text-white xl-max:border-0 hover:scale-102 hover:shadow-soft-xs active:opacity-85 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 border-fuchsia-500 bg-none text-fuchsia-500 hover:border-fuchsia-500"
                            data-class="bg-white">White</button>
                    </div>
                    <p class="block mt-2 leading-normal text-sm xl:hidden">You can change the sidenav type just on
                        desktop
                        view.</p>
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
                    <a class="inline-block w-full px-6 py-3 mb-4 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer leading-pro text-xs ease-soft-in hover:shadow-soft-xs hover:scale-102 active:opacity-85 tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800"
                        href="https://www.creative-tim.com/product/soft-ui-dashboard-tailwind" target="_blank">Free
                        Download</a>
                    <a class="inline-block w-full px-6 py-3 mb-4 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer active:shadow-soft-xs hover:scale-102 active:opacity-85 leading-pro text-xs ease-soft-in tracking-tight-soft bg-150 bg-x-25 border-slate-700 text-slate-700 hover:bg-transparent hover:text-slate-700 hover:shadow-none active:bg-slate-700 active:text-white active:hover:bg-transparent active:hover:text-slate-700 active:hover:shadow-none"
                        href="https://www.creative-tim.com/learning-lab/tailwind/html/quick-start/soft-ui-dashboard/"
                        target="_blank">View documentation</a>
                    <div class="w-full text-center">
                        <a class="github-button"
                            href="https://github.com/creativetimofficial/soft-ui-dashboard-tailwind"
                            data-icon="octicon-star" data-size="large" data-show-count="true"
                            aria-label="Star creativetimofficial/soft-ui-dashboard on GitHub">Star</a>
                        <h6 class="mt-4">Thank you for sharing!</h6>
                        <a href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Dashboard%20Tailwind%20made%20by%20%40CreativeTim%20&hashtags=webdesign,dashboard,tailwindcss&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard-tailwind"
                            class="inline-block px-6 py-3 mb-0 mr-2 font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer hover:shadow-soft-xs hover:scale-102 active:opacity-85 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 me-2 border-slate-700 bg-slate-700"
                            target="_blank"> <i class="mr-1 fab fa-twitter" aria-hidden="true"></i> Tweet </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard-tailwind"
                            class="inline-block px-6 py-3 mb-0 mr-2 font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer hover:shadow-soft-xs hover:scale-102 active:opacity-85 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 me-2 border-slate-700 bg-slate-700"
                            target="_blank"> <i class="mr-1 fab fa-facebook-square" aria-hidden="true"></i> Share
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</x-app-layout>
