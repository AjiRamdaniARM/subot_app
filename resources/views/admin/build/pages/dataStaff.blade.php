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

    </body>
</x-app-layout>
