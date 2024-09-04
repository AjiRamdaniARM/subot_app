<x-app-layout>

    <body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
        @include('admin.build.components.sidenav')
        @include('modalSekolah')
        <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
            <!-- Navbar -->
            @include('admin.build.components.navbar')

            <div class="w-full px-6 py-6 mx-auto">
                @include('admin.build.components.dataKids.cardAlldata')
                <br />

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



                <!-- content -->
                <div class="flex flex-wrap -mx-3">
                    <div class="max-w-full px-3 lg:w-full lg:flex-none">
                        <div class="flex flex-wrap -mx-3">
                            <div class="max-w-full px-3 mb-4 lg:mb-0 lg:w-full lg:flex-none">
                                <div
                                    class="relative flex flex-col min-w-0 mt-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                                    <form id="dataForm" action="{{ route('admin.kids') }}" method="POST"
                                        class="text-black" enctype="multipart/form-data">
                                        @csrf
                                        <div
                                            class="p-4 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                                            <div class="flex flex-wrap -mx-3">
                                                <div class="flex items-center flex-none max-w-full px-3">
                                                    <h6 class="mb-0">Add New Child Data</h6>
                                                </div>
                                                <div class="  max-w-full px-3 text-right"
                                                    style="display:flex; flex-wrap:wrap; gap:1px">
                                                    <button type="button" onclick="window.dialogAdmin.showModal()"
                                                        class="inline-block px-6  py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25">
                                                        Create Schools
                                                    </button>
                                                    &nbsp;
                                                    <button id="submit-button" type="submit"
                                                        class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25">
                                                        <i class="fas fa-plus">
                                                        </i>&nbsp;&nbsp;Create
                                                        Data</button>
                                                    &nbsp;
                                                    <a href="{{ url('/datakids/allExport') }}"
                                                        class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25">
                                                        <i class="fas fa-plus">
                                                        </i>&nbsp;&nbsp;Export
                                                        Data</a>
                                                    &nbsp;
                                                    <a href="{{ route('formulir.index') }}"
                                                        class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25">
                                                        <i class="fas fa-plus">
                                                        </i>&nbsp;&nbsp;Survei
                                                        Data</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col p-4" style="gap:10px">
                                            <div class="flex flex-wrap -mx-3 ">
                                                <div class="max-w-full px-3 mb-6 md:mb-0 md:w-1/2 md:flex-none">
                                                    <input
                                                        class="relative flex flex-row items-center flex-auto min-w-0 p-6 break-words bg-yellow-800 border border-solid shadow-none rounded-xl w-full border-black bg-clip-border py-4"
                                                        name="nama_lengkap" value="{{ old('nama_lengkap') }}"
                                                        type="text" required placeholder="Full Name" />
                                                    @error('nama_lengkap')
                                                        <div class="alert alert-danger" style="padding: 10px; color:red"
                                                            role="alert">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="max-w-full px-3 mb-6 md:mb-0 md:w-1/2 md:flex-none">
                                                    <input
                                                        class="relative flex flex-row items-center flex-auto min-w-0 p-6 break-words bg-transparent border border-solid shadow-none rounded-xl w-full  py-4 border-slate-100 bg-clip-border"
                                                        name="tl" value="{{ old('tl') }}" required
                                                        type="text" placeholder="Place Of Birth" />
                                                    @error('tl')
                                                        <div class="alert alert-danger" style="padding: 10px; color:red"
                                                            role="alert">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>


                                            </div>
                                            <div class="flex flex-wrap -mx-3 ">
                                                <div class="max-w-full px-3 mb-6 md:mb-0 md:w-1/2 md:flex-none ">
                                                    <input
                                                        class="relative flex flex-row items-center flex-auto min-w-0 p-6 break-words bg-transparent border border-solid shadow-none rounded-xl py-4 w-full border-slate-100 bg-clip-border"
                                                        name="tanggal_lahir" value="{{ old('tanggal_lahir') }}"
                                                        type="date" required placeholder="Date Of Birth" />
                                                </div>


                                                <div class="max-w-full px-3 mb-6 md:mb-0 md:w-1/2 md:flex-none">
                                                    <select
                                                        class="relative flex flex-row items-center flex-auto min-w-0 p-6 break-words bg-transparent border border-solid shadow-none rounded-xl w-full  py-4 border-slate-100 bg-clip-border"
                                                        name="sekolah" id="">
                                                        <option value="">Select Schools</option>
                                                        @foreach ($getSelect as $get)
                                                            <option value="{{ $get->id_sekolah }}">
                                                                {{ $get->sekolah }}</option>
                                                        @endforeach
                                                    </select>
                                                    {{-- <input
                                                        class="relative flex flex-row items-center flex-auto min-w-0 p-6 break-words bg-transparent border border-solid shadow-none rounded-xl w-full  py-4 border-slate-100 bg-clip-border"
                                                        name="sekolah" value="{{ old('sekolah') }}" type="text"
                                                        required placeholder="School" />
                                                    @error('sekolah')
                                                        <div class="alert alert-danger" style="padding: 10px; color:red"
                                                            role="alert">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror --}}
                                                </div>


                                            </div>
                                            <div class="flex flex-wrap -mx-3 ">
                                                <div class="max-w-full px-3 mb-6 md:mb-0 md:w-1/2 md:flex-none ">
                                                    <input
                                                        class="relative flex flex-row items-center flex-auto min-w-0 p-6 break-words bg-transparent border border-solid shadow-none rounded-xl py-4 w-full border-slate-100 bg-clip-border"
                                                        name="kelas" value="{{ old('kelas') }}" type="text"
                                                        required placeholder="Class" />
                                                    @error('kelas')
                                                        <div class="alert alert-danger" style="padding: 10px; color:red"
                                                            role="alert">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="max-w-full px-3 mb-6 md:mb-0 md:w-1/2 md:flex-none">
                                                    <input
                                                        class="relative flex flex-row items-center flex-auto min-w-0 p-6 break-words bg-transparent border border-solid shadow-none rounded-xl w-full  py-4 border-slate-100 bg-clip-border"
                                                        name="nama_ortu" value="{{ old('nama_ortu') }}" type="text"
                                                        required placeholder="Parent's Name" />
                                                    @error('nama_ortu')
                                                        <div class="alert alert-danger" style="padding: 10px; color:red"
                                                            role="alert">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>


                                            </div>
                                            <div class="flex flex-wrap -mx-3 ">
                                                <div class="max-w-full px-3 mb-6 md:mb-0 md:w-1/2 md:flex-none ">
                                                    <input
                                                        class="relative flex flex-row items-center flex-auto min-w-0 p-6 break-words bg-transparent border border-solid shadow-none rounded-xl py-4 w-full border-slate-100 bg-clip-border"
                                                        name="telephone" value="{{ old('telephone') }}" type="number"
                                                        required placeholder="Number Handphone" />
                                                    @error('telephone')
                                                        <div class="alert alert-danger" style="padding: 10px; color:red"
                                                            role="alert">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="max-w-full px-3 mb-6 md:mb-0 md:w-1/2 md:flex-none">
                                                    <input
                                                        class="relative flex flex-row items-center flex-auto min-w-0 p-6 break-words bg-transparent border border-solid shadow-none rounded-xl w-full  py-4 border-slate-100 bg-clip-border"
                                                        name="work_ortu" value="{{ old('work_ortu') }}"
                                                        type="text" required placeholder="Parent's Occupation" />
                                                    @error('work_ortu')
                                                        <div class="alert alert-danger" style="padding: 10px; color:red"
                                                            role="alert">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="flex flex-wrap -mx-3">
                                                <div class="max-w-full px-3 mb-6 md:mb-0 md:w-1/2 md:flex-none">
                                                    <select
                                                        class="relative flex flex-row items-center flex-auto min-w-0 p-6 break-words bg-transparent border border-solid shadow-none rounded-xl w-full  py-4 border-slate-100 bg-clip-border"
                                                        name="id_kelas" id="">
                                                        <option value="">Select Class</option>
                                                        @foreach ($getDataClass as $get)
                                                            <option value="{{ $get->id }}">
                                                                {{ $get->kelas }}</option>
                                                        @endforeach
                                                    </select>
                                                    {{-- <input
                                                        class="relative flex flex-row items-center flex-auto min-w-0 p-6 break-words bg-transparent border border-solid shadow-none rounded-xl w-full  py-4 border-slate-100 bg-clip-border"
                                                        name="sekolah" value="{{ old('sekolah') }}" type="text"
                                                        required placeholder="School" />
                                                    @error('sekolah')
                                                        <div class="alert alert-danger" style="padding: 10px; color:red"
                                                            role="alert">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror --}}
                                                </div>
                                                <div class="max-w-full px-3 mb-6 md:mb-0 md:w-1/2 md:flex-none">
                                                    <input
                                                        class="relative flex flex-row items-center flex-auto min-w-0 p-6 break-words bg-transparent border border-solid shadow-none rounded-xl w-full  py-4 border-slate-100  bg-clip-border"
                                                        name="alamat" value="{{ old('alamat') }}" type="text"
                                                        required placeholder="Address" />
                                                    @error('alamat')
                                                        <div class="alert alert-danger" style="padding: 10px; color:red"
                                                            role="alert">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                &nbsp;

                                            </div>
                                            <div class="max-w-full px-3 mb-6 md:mb-0  md:flex-none">
                                                <input
                                                    class="relative flex flex-row items-center flex-auto min-w-0 p-6 break-words bg-transparent border border-solid shadow-none rounded-xl w-full  py-4 border-slate-100  bg-clip-border"
                                                    name="file" type="file" required />
                                            </div>
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
                                <h6 class="mb-0">All Data Kids</h6>
                                {{-- <a href="{{ url('users/export/') }}"
                                    style="
                                background-color:green;
                                padding: 3px;
                                color:white;
                                ">Export
                                    Data</a> --}}
                            </div>
                            <div class="flex-auto p-4 pt-6">
                                @if (empty($getDataKids))
                                    <div class="text-black">no child data for now</div>
                                @else
                                    <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                                        @foreach ($getDataKids as $getDataKid)
                                            <li
                                                class="relative flex p-6 mb-2 border-0 rounded-t-inherit rounded-xl bg-gray-50">

                                                <div class="flex" style="gap:20px">
                                                    <img src="{{ asset('assets/data/dataAnak/img/' . $getDataKid->file) }}"
                                                        alt="child"
                                                        style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%; margin: 0 auto;">
                                                    <div class="flex flex-col">
                                                        <h6 class="mb-4 leading-normal text-sm">
                                                            {{ $getDataKid->nama_lengkap }}
                                                        </h6>
                                                        <span class="mb-2 leading-tight text-xs">School: <span
                                                                class="font-semibold text-slate-700 sm:ml-2">{{ $getDataKid->sekolah }}</span></span>
                                                    </div>
                                                </div>
                                                <div class="ml-auto text-right flex flex-wrap">
                                                    <form
                                                        action="{{ route('delete.kids', ['nama_lengkap' => $getDataKid->nama_lengkap]) }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="relative z-10 inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 bg-gradient-to-tl from-red-600 to-rose-400 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text">
                                                            <i
                                                                class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-rose-400 bg-x-25 bg-clip-text"></i>Delete
                                                        </button>
                                                    </form>


                                                    <a class="inline-block px-4 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 hover:scale-102 active:opacity-85 bg-x-25 text-slate-700"
                                                        href="#popup/{{ $getDataKid->nama_lengkap }}"><i
                                                            class="mr-2 fas fa-pencil-alt text-slate-700"
                                                            aria-hidden="true"></i>Edit</a>
                                                    @include('admin.build.components.dataKids.modalEdit')
                                                    <a href="{{ url('/datakids/privateData/' . $getDataKid->nama_lengkap) }}"
                                                        class="inline-block px-4 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 hover:scale-102 active:opacity-85 bg-x-25 text-slate-700"
                                                        href="javascript:;"><svg class="w-5 text-[#344767]"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                        </svg>
                                                        View</a>
                                                </div>
                                            </li>
                                        @endforeach

                                    </ul>
                                    <div class="mt-4">
                                        {{ $getDataKids->links() }}
                                    </div>
                                @endif

                            </div>
                        </div>
                    </div>

                    {{-- <div class="w-full max-w-full px-3 mt-6 md:w-5/12 md:flex-none">
                        <div
                            class="relative flex flex-col h-full min-w-0 mb-6 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                            <div class="p-6 px-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
                                <div class="flex flex-wrap -mx-3">
                                    <div class="max-w-full px-3 md:w-1/2 md:flex-none">
                                        <h6 class="mb-0">All School Data</h6>
                                    </div>

                                </div>
                            </div>
                            <div class="flex-auto p-4 pt-6">
                                <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                                    @foreach ($getDataSchool as $sekolah)
                                        <li
                                            class="relative flex justify-between px-4 py-2 pl-0 mb-2 bg-white border-0 rounded-t-inherit text-inherit rounded-xl">
                                            <div class="flex items-center">
                                                <button
                                                    class="leading-pro ease-soft-in text-xs bg-150 w-6.35 h-6.35 p-1.2 rounded-3.5xl tracking-tight-soft bg-x-25 mr-4 mb-0 flex cursor-pointer items-center justify-center border border-solid border-lime-500 border-transparent bg-transparent text-center align-middle font-bold uppercase text-lime-500 transition-all hover:opacity-75"><i
                                                        class="fas fa-arrow-up text-3xs"></i></button>
                                                <div class="flex flex-col">
                                                    <h6 class="mb-1 leading-normal text-sm text-slate-700">
                                                        {{ $sekolah->sekolah }}</h6>
                                                    @if ($sekolah->alamat == null)
                                                        <span class="leading-tight text-xs">Data alamat belum ada
                                                            !!</span>
                                                    @else
                                                        <span
                                                            class="leading-tight text-xs">{{ $sekolah->alamat }}</span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="flex flex-col items-center justify-center">
                                                <button
                                                    class="relative z-10 inline-block m-0 font-semibold leading-normal text-white rounded-lg text-sm animasi-scale-hover-105 transisi-all animasi-scale-focus-105"
                                                    style="background-color: #FFAA00; padding: 5px;">
                                                    Edit</button>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                                <div class="mt-4">
                                    {{ $getDataSchool->links() }}
                                </div>
                            </div>
                        </div>
                    </div> --}}

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
