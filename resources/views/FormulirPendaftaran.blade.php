@extends('layout.main')
@section('children')
    @include('components.scriptCompoments')
    <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
                <div class="max-w-md mx-auto">
                    <div class="flex items-center space-x-5">
                        <div
                            class="h-14 w-14 bg-orange-500 rounded-full flex flex-shrink-0 justify-center items-center text-black text-2xl font-mono">
                            s</div>
                        <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                            <h2 class="leading-relaxed">Formulir Pendaftaran</h2>
                            <p class="text-sm text-gray-500 font-normal leading-relaxed">Yuk, daftarkan anak Anda di
                                Sukarobot Academy!</p>
                        </div>
                    </div>
                    @include('components.loadingElement')
                    <form action="{{ route('input.kids') }}" method="POST">
                        @csrf
                        <div class="divide-y divide-gray-200">
                            <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                <div class="flex flex-col">
                                    <label class="leading-loose">Nama Lengkap</label>
                                    <input type="text"
                                        class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                        placeholder="Nama Lengkap" name="nama_lengkap" required>
                                </div>
                                <div class="grup flex gap-5">
                                    <div class="flex flex-col">
                                        <label class="leading-loose">Tempat Lahir</label>
                                        <input type="text"
                                            class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                            placeholder="Tempat Lahir" name="tl" required>
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="leading-loose">Tanggal Lahir</label>
                                        <input type="date"
                                            class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                            name="tanggal_lahir" required>
                                    </div>

                                </div>

                                <div class="flex flex-col">
                                    <label class="leading-loose">Sekolah</label>
                                    <input type="text"
                                        class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                        placeholder="Sekolah" name="sekolah" required>
                                </div>

                                <div class="flex flex-col">
                                    <label class="leading-loose">Kelas</label>
                                    <input type="text"
                                        class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                        placeholder="Kelas" name="kelas" required>
                                </div>
                                <div class="flex flex-col">
                                    <label class="leading-loose">Nama Orangtua </label>
                                    <input type="text"
                                        class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                        placeholder="Nama Orangtua" name="nama_ortu" required>
                                </div>
                                <div class="flex flex-col">
                                    <label class="leading-loose">Nomor Handphone </label>
                                    <input type="text"
                                        class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                        placeholder="Nomor Handphone" name="telephone" required>
                                </div>
                                <div class="flex flex-col">
                                    <label class="leading-loose">Pekerjaan Orang Tua </label>
                                    <input type="text"
                                        class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                        placeholder="Pekerjaan Orang Tua" name="work_ortu" required>
                                </div>
                                <div class="flex flex-col">
                                    <label class="leading-loose">Alamat</label>
                                    <input type="text"
                                        class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                        placeholder="Alamat" name="alamat" required>
                                </div>
                            </div>
                            <div class="pt-4 flex items-center space-x-4">
                                {{-- <button
                                    class="flex justify-center items-center w-full text-gray-900 px-4 py-3 rounded-md focus:outline-none">
                                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12"></path>
                                    </svg> Cancel
                                </button> --}}
                                <button
                                    class="button bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none hover:scale-105 transition-all focus:scale-105"
                                    type="submit">Daftar
                                    <div class="arrow-wrapper">
                                        <div class="arrow"></div>

                                    </div>
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
