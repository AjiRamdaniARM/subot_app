@extends('layout.main')
@section('children')
    @include('modalSekolah')
    @include('components.scriptCompoments')
    <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
                <div class="max-w-md mx-auto">
                    <div class="flex flex-col md:flex-row items-center space-x-5">
                        <img src="{{ asset('assets/img/logo.png') }}" width="100" alt="">
                        <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                            @if (session('error'))
                                <h2 class=" text-red-500">{{ session('error') }}</h2>
                                <p class="text-sm text-gray-500 font-normal leading-relaxed">Yuk, daftarkan anak Anda di
                                    Sukarobot Academy!</p>
                            @else
                                <h2 class="leading-relaxed">Formulir Pendaftaran</h2>
                                <p class="text-sm text-gray-500 font-normal leading-relaxed">Yuk, daftarkan anak Anda di
                                    Sukarobot Academy!</p>
                            @endif

                        </div>
                    </div>
                    @include('components.loadingElement')
                    <form action="{{ route('input.kids') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="divide-y divide-gray-200">
                            <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                <div class="flex flex-col">
                                    <label class="leading-loose">Nama Lengkap</label>
                                    <input type="text"
                                        class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                        placeholder="Cth: Aziz Ramadhan" name="nama_lengkap"
                                        value="{{ old('nama_lengkap') }}" required>
                                    @error('nama_lengkap')
                                        <div class="bg-red-100 relative mt-2 border border-red-400 text-red-700 px-4 py-3 text-[15px] rounded relative"
                                            role="alert">
                                            <strong class="font-bold">Kesalahan !! </strong>
                                            <span class="block sm:inline">{{ $message }}</span>

                                        </div>
                                    @enderror
                                </div>
                                <div class="flex flex-col">
                                    <label class="leading-loose">Tempat Lahir</label>
                                    <input type="text"
                                        class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                        placeholder="Cth: Sukabumi " name="tl" value="{{ old('tl') }}" required>
                                </div>
                                @error('tl')
                                    <div class="bg-red-100 relative mt-2 border border-red-400 text-red-700 px-4 py-3 text-[15px] rounded relative"
                                        role="alert">
                                        <strong class="font-bold">Kesalahan !! </strong>
                                        <span class="block sm:inline">{{ $message }}</span>

                                    </div>
                                @enderror

                                <div class="flex flex-col">
                                    <label class="leading-loose">Tanggal Lahir</label>
                                    <input type="date"
                                        class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                        name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required>
                                </div>
                                @error('tanggal_lahir')
                                    <div class="bg-red-100 relative mt-2 border border-red-400 text-red-700 px-4 py-3 text-[15px] rounded relative"
                                        role="alert">
                                        <strong class="font-bold">Kesalahan !! </strong>
                                        <span class="block sm:inline">{{ $message }}</span>

                                    </div>
                                @enderror

                                <div class="flex flex-col">
                                    <div class="flex flex-col">
                                        <label class="leading-loose">Pilih Kelas</label>
                                        <select
                                            class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full  sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                            name="id_kelas" id="" required>
                                            <option value="">Silahkan Pilih Kelas</option>
                                            @foreach ($getDataKelas as $kelas)
                                                <option value="{{ $kelas->id }}">{{ $kelas->kelas }}
                                                </option>
                                            @endforeach
                                        </select>

                                    </div>


                                </div>

                                <div class="flex flex-col">
                                    <div class="flex flex-col">
                                        <label class="leading-loose">Sekolah</label>
                                        <select
                                            class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full  sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                            name="sekolah" id="" required>
                                            <option value="">Silahkan Pilih Sekolah Anda</option>
                                            @foreach ($getData as $sekolah)
                                                <option value="{{ $sekolah->id_sekolah }}">{{ $sekolah->sekolah }}
                                                </option>
                                            @endforeach
                                        </select>
                                        {{-- <label class="leading-loose">Sekolah</label>
                                        <input type="text"
                                            class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                            placeholder="Cth: Sukarobot Academy" name="sekolah" value="{{ old('sekolah') }}"
                                            required> --}}
                                    </div>
                                    @if (session('success'))
                                        <button
                                            class="bg-green-500 relative -top-5 md:mt-10 w-full rounded-lg text-center p-2 text-white font-bold "
                                            type="button"
                                            onclick="window.dialog.showModal();">{{ session('success') }}</button>
                                    @else
                                        <button
                                            class="bg-blue-500 relative -top-5 md:mt-10 w-full rounded-lg text-center p-2 text-white font-bold "
                                            type="button" onclick="window.dialog.showModal();">Daftarkan
                                            Sekolah</button>
                                    @endif


                                </div>



                                @error('sekolah')
                                    <div class="bg-red-100 relative mt-2 border border-red-400 text-red-700 px-4 py-3 text-[15px] rounded relative"
                                        role="alert">
                                        <strong class="font-bold">Kesalahan !! </strong>
                                        <span class="block sm:inline">{{ $message }}</span>

                                    </div>
                                @enderror

                                <div class="flex flex-col">
                                    <label class="leading-loose">Kelas</label>
                                    <input type="text"
                                        class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                        placeholder="Cth: 3 SD" name="kelas" value="{{ old('kelas') }}" required>
                                </div>
                                @error('kelas')
                                    <div class="bg-red-100 relative mt-2 border border-red-400 text-red-700 px-4 py-3 text-[15px] rounded relative"
                                        role="alert">
                                        <strong class="font-bold">Kesalahan !! </strong>
                                        <span class="block sm:inline">{{ $message }}</span>

                                    </div>
                                @enderror
                                <div class="flex flex-col">
                                    <label class="leading-loose">Nama Orangtua </label>
                                    <input type="text"
                                        class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                        placeholder="Cth: Asep Saeban (Lk/Pr)" value="{{ old('nama_ortu') }}"
                                        name="nama_ortu" required>
                                </div>
                                @error('nama_ortu')
                                    <div class="bg-red-100 relative mt-2 border border-red-400 text-red-700 px-4 py-3 text-[15px] rounded relative"
                                        role="alert">
                                        <strong class="font-bold">Kesalahan !! </strong>
                                        <span class="block sm:inline">{{ $message }}</span>

                                    </div>
                                @enderror
                                <div class="flex flex-col">
                                    <label class="leading-loose">Nomor Handphone </label>
                                    <input type="text"
                                        class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                        placeholder="Cth: 08*****" name="telephone" value="{{ old('telephone') }}"
                                        required>
                                </div>
                                @error('telephone')
                                    <div class="bg-red-100 relative mt-2 border border-red-400 text-red-700 px-4 py-3 text-[15px] rounded relative"
                                        role="alert">
                                        <strong class="font-bold">Kesalahan !! </strong>
                                        <span class="block sm:inline">{{ $message }}</span>

                                    </div>
                                @enderror
                                <div class="flex flex-col">
                                    <label class="leading-loose">Pekerjaan Orang Tua </label>
                                    <input type="text"
                                        class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                        placeholder="Cth: Pegawai Negri" name="work_ortu" value="{{ old('work_ortu') }}"
                                        required>
                                </div>
                                @error('work_ortu')
                                    <div class="bg-red-100 relative mt-2 border border-red-400 text-red-700 px-4 py-3 text-[15px] rounded relative"
                                        role="alert">
                                        <strong class="font-bold">Kesalahan !! </strong>
                                        <span class="block sm:inline">{{ $message }}</span>

                                    </div>
                                @enderror
                                <div class="flex flex-col">
                                    <label class="leading-loose">Alamat</label>
                                    <input type="text"
                                        class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                        placeholder="Cth: Jl. A. Yani No.283, Kebonjati, Kec. Cikole, Kota Sukabumi, Jawa Barat 43111"
                                        name="alamat" value="{{ old('alamat') }}" required>
                                </div>
                                @error('alamat')
                                    <div class="bg-red-100 relative mt-2 border border-red-400 text-red-700 px-4 py-3 text-[15px] rounded relative"
                                        role="alert">
                                        <strong class="font-bold">Kesalahan !! </strong>
                                        <span class="block sm:inline">{{ $message }}</span>

                                    </div>
                                @enderror
                                <div class="flex flex-col">
                                    <label class="leading-loose">Pas Foto</label>
                                    <input type="file"
                                        class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                        placeholder="file" name="file" id="fotoInput" required>
                                </div>
                                @error('file')
                                    <div class="bg-red-100 relative mt-2 border border-red-400 text-red-700 px-4 py-3 text-[15px] rounded relative"
                                        role="alert">
                                        <strong class="font-bold">Kesalahan !! </strong>
                                        <span class="block sm:inline">{{ $message }}</span>

                                    </div>
                                @enderror
                                <div class="flex flex-col">
                                    <div id="preview">
                                        <img id="previewImage" class="preview-image">
                                    </div>
                                </div>
                                <script>
                                    // Ambil referensi elemen input file
                                    const fotoInput = document.getElementById('fotoInput');
                                    // Ambil referensi elemen img untuk preview
                                    const previewImage = document.getElementById('previewImage');

                                    // Tambahkan event listener untuk mendengarkan perubahan pada input file
                                    fotoInput.addEventListener('change', function() {
                                        const file = this.files[0];

                                        if (file) {
                                            // Buat objek URL untuk file yang dipilih
                                            const url = URL.createObjectURL(file);

                                            // Set src elemen img untuk menampilkan preview gambar
                                            previewImage.src = url;
                                        }
                                    });
                                </script>
                            </div>
                            <div class="pt-4 flex items-center space-x-4">

                                <button
                                    class="button relative z-0 bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none hover:scale-105 transition-all focus:scale-105"
                                    type="submit" id="submit">Daftar
                                    <div class="arrow-wrapper">
                                        <div class="arrow"></div>

                                    </div>
                                </button>


                            </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
