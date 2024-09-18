@extends('layout.main')
@section('children')
    @include('modalSekolah')
    @include('components.scriptCompoments')
    <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
                <div class="max-w-md mx-auto">
                    <div class="flex flex-col items-center  gap-5">
                        <img src="{{ asset('assets/img/logo.png') }}" width="100" alt="">
                        <div class="block  font-semibold text-xl self-start text-gray-700">
                            @if (session('error'))
                                <h2 class=" text-red-500">{{ session('error') }}</h2>
                                <p class="text-sm text-gray-500 poppins-bold leading-relaxed">Kelengkapan data Trainer
                                    Sukarobot Academy!</p>
                            @else
                                <h2 class="leading-relaxed  poppins-bold ">Form Kelengkapan data</h2>
                                <p class="text-sm text-gray-500  poppins-regular leading-relaxed">Kelengkapan data
                                    Trainer
                                    Sukarobot Academy!</p>
                            @endif
                        </div>
                    </div>
                    @include('components.loadingElement')
                    <form method="POST" id="jsonForm" enctype="multipart/form-data">
                        @csrf
                        <div class="divide-y divide-gray-200">
                            <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                <div class="flex flex-col gap-3">
                                    <label class="leading-loose poppins-regular text-[15px]">Nama Lengkap <span
                                            class="text-red-500">*</span></label>
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
                                <div class="flex flex-col gap-3">
                                    <label class="leading-loose text-[15px] poppins-regular">Email Aktif <span
                                            class="text-red-500">*</span></label>
                                    <input type="text"
                                        class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                        placeholder="Cth: sukarobotacademy@gmail.com " name="tl"
                                        value="{{ old('tl') }}" required>
                                </div>
                                @error('tl')
                                    <div class="bg-red-100 relative mt-2 border border-red-400 text-red-700 px-4 py-3 text-[15px] rounded relative"
                                        role="alert">
                                        <strong class="font-bold">Kesalahan !! </strong>
                                        <span class="block sm:inline">{{ $message }}</span>

                                    </div>
                                @enderror

                                <div class="flex flex-col gap-3">
                                    <label class="leading-loose text-[15px] poppins-regular">Poto Ktp ( Jernih ) <span
                                            class="text-red-500">*</span></label>
                                    <input type="file" id="ktpFileInput"
                                        class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                        name="ktpFileInput" required>
                                    <br>
                                    <div id="preview">
                                        <div class="lottie-componentn" id="lottieView">
                                            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

                                            <dotlottie-player
                                                src="https://lottie.host/58165dc2-e662-4bda-8d1d-9ce53375a05a/766NCCvEm9.json"
                                                background="transparent" speed="1" style="width: 300px; height: 300px;"
                                                loop autoplay></dotlottie-player>
                                        </div>
                                        <img id="previewKtpPoto" class="preview-image rounded"
                                            style="max-width: 100%; height: auto;">

                                        {{-- == script input poto ktp == --}}
                                        <script>
                                            const fotoInput = document.getElementById('ktpFileInput');
                                            const previewImage = document.getElementById('previewKtpPoto');
                                            const lottieView = document.getElementById('lottieView');
                                            fotoInput.addEventListener('change', function() {
                                                const file = this.files[0];
                                                if (file) {
                                                    const url = URL.createObjectURL(file);
                                                    lottieView.style.display = 'none';
                                                    previewImage.src = url;
                                                    previewImage.style.display = 'block';
                                                }
                                            });
                                        </script>

                                    </div>
                                    <br>
                                </div>
                                <div class="flex flex-col gap-3">
                                    <label class="leading-loose poppins-regular text-[15px]">Alamat <span
                                            class="text-red-500">*</span></label>
                                    <input type="text"
                                        class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                        placeholder="Cth: Jl. A. Yani No.283, Kebonjati, Kec. Cikole, Kota Sukabumi, Jawa Barat 43111"
                                        name="kelas" value="{{ old('kelas') }}" required>
                                </div>
                                <div class="flex flex-col gap-3">
                                    <label class="leading-loose poppins-regular text-[15px]">Nomor Handphone ( Aktif
                                        WhatsApp )
                                        <span class="text-red-500">*</span> </label>
                                    <input type="text"
                                        class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                        placeholder="Cth: 08*****" name="telephone" value="{{ old('telephone') }}" required>
                                </div>
                                @error('telephone')
                                    <div class="bg-red-100 relative mt-2 border border-red-400 text-red-700 px-4 py-3 text-[15px] rounded relative"
                                        role="alert">
                                        <strong class="font-bold">Kesalahan !! </strong>
                                        <span class="block sm:inline">{{ $message }}</span>

                                    </div>
                                @enderror
                                <div class="flex flex-col gap-3">
                                    <!-- Input dan preview kedua -->
                                    <label class="leading-loose text-[15px] poppins-regular">Pas Poto ( Jernih ) <span
                                            class="text-red-500">*</span></label>
                                    <input type="file" id="pasPotoInput2"
                                        class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                        name="pasPotoInput2" required>

                                    <div id="preview2">
                                        <div class="lottie-componentn" id="lottieView2">
                                            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

                                            <dotlottie-player
                                                src="https://lottie.host/58165dc2-e662-4bda-8d1d-9ce53375a05a/766NCCvEm9.json"
                                                background="transparent" speed="1" style="width: 300px; height: 300px;"
                                                loop autoplay>
                                            </dotlottie-player>
                                        </div>

                                        <img id="previewPoto2" class="preview-image rounded"
                                            style="max-width: 100%; height: auto; display: none;">
                                    </div>
                                    <br>
                                    <script>
                                        // Untuk preview Pas Poto 2
                                        const fotoInput2 = document.getElementById('pasPotoInput2');
                                        const previewImage2 = document.getElementById('previewPoto2');
                                        const lottieView2 = document.getElementById('lottieView2');

                                        fotoInput2.addEventListener('change', function() {
                                            const file2 = this.files[0];
                                            if (file2) {
                                                const url2 = URL.createObjectURL(file2);
                                                lottieView2.style.display = 'none'; // Sembunyikan Lottie kedua
                                                previewImage2.src = url2; // Set src untuk gambar preview kedua
                                                previewImage2.style.display = 'block'; // Tampilkan gambar preview kedua
                                            }
                                        });
                                    </script>
                                </div>


                                <div class="flex flex-col gap-3">
                                    <label class="leading-loose text-[15px] poppins-regular">Poto Tandan Tangan ( Jernih )
                                        <span class="text-red-500">*</span></label>
                                    <input type="file" id="pasPotoInput3"
                                        class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                        name="pasPotoInput3" required>

                                    <div id="preview1">
                                        <div class="lottie-componentn" id="lottieView1">
                                            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

                                            <dotlottie-player
                                                src="https://lottie.host/58165dc2-e662-4bda-8d1d-9ce53375a05a/766NCCvEm9.json"
                                                background="transparent" speed="1"
                                                style="width: 300px; height: 300px;" loop autoplay>
                                            </dotlottie-player>
                                        </div>

                                        <img id="previewPoto3" class="preview-image rounded"
                                            style="max-width: 100%; height: auto; display: none;">

                                        <script>
                                            // Untuk preview Pas Poto 1
                                            const fotoInput3 = document.getElementById('pasPotoInput3');
                                            const previewImage3 = document.getElementById('previewPoto3');
                                            const lottieView1 = document.getElementById('lottieView1');

                                            fotoInput3.addEventListener('change', function() {
                                                const file3 = this.files[0];
                                                if (file3) {
                                                    const url1 = URL.createObjectURL(file3);
                                                    lottieView1.style.display = 'none'; // Sembunyikan Lottie pertama
                                                    previewImage3.src = url1; // Set src untuk gambar preview pertama
                                                    previewImage3.style.display = 'block'; // Tampilkan gambar preview pertama
                                                }
                                            });
                                        </script>

                                    </div>
                                </div>

                                <div class="flex flex-col gap-3">
                                    <label class="leading-loose poppins-regular text-[15px]">Password untuk login /
                                        Code ID Card
                                        <span class="text-red-500">*</span></label>
                                    <input type="text"
                                        class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                        placeholder="Cth: aziz1010" name="file" id="fotoInput" required>
                                </div>
                                @error('file')
                                    <div class="bg-red-100 relative mt-2 border border-red-400 text-red-700 px-4 py-3 text-[15px] rounded relative"
                                        role="alert">
                                        <strong class="font-bold">Kesalahan !! </strong>
                                        <span class="block sm:inline">{{ $message }}</span>
                                    </div>
                                @enderror
                                <div class="flex flex-col gap-3">
                                    <div id="preview">
                                        <img id="previewImage" class="preview-image">
                                    </div>
                                </div>
                            </div>
                            <div class="pt-4 flex items-center space-x-4">
                                <button
                                    class="button relative poppins-regular z-0 bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none hover:scale-105 transition-all focus:scale-105"
                                    type="submit">Kirim
                                    <div class="arrow-wrapper">
                                        <div class="arrow"></div>

                                    </div>
                                </button>
                            </div>
                    </form>
                    <script>
                        document.getElementById('jsonForm').addEventListener('submit', function(e) {
                            e.preventDefault();
                            const formElement = document.getElementById('jsonForm');
                            const formData = new FormData(formElement);
                            const formDataObj = Object.fromEntries(formData.entries());
                            console.log(formDataObj);
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
@endsection
