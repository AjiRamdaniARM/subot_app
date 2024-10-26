@extends('layout.main')
@section('children')
    <div class="min-h-screen bg-gray-100 text-gray-900 flex justify-center">
        {{-- === notif === --}}
        <main x-data="app" class="min-w-screen grid min-h-screen place-items-center">
            <div class="max-w-screen-xl m-0 sm:m-10 bg-white shadow sm:rounded-lg flex justify-center items-center flex-1">
                <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12">
                    <div>
                        <img src="{{ asset('assets/img/logo.png') }}" class="w-32 mx-auto" />
                    </div>
                    <div class="mt-12 flex flex-col items-center">
                        <h1 class="text-2xl xl:text-3xl poppins-bold  font-extrabold">
                           Masuk
                        </h1>
                        @error('email')
                            <div class="p-5 mt-4 bg-red-800 items-center text-indigo-100 leading-none rounded-full flex lg:inline-flex"
                                role="alert">
                                <span
                                    class="flex rounded-full bg-red-300 text-black uppercase px-2 py-1 text-xs font-bold mr-3">Error</span>
                                <span class="font-semibold mr-2 text-white text-left flex-auto">{{ $message }}</span>
                                <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" />
                                </svg>
                            </div>
                        @enderror
                        <div class="w-full flex-1 ">
                            <div class="my-5 border-b text-center">
                                {{-- <div
                                    class="leading-none px-2 inline-block text-sm text-gray-600 tracking-wide poppins-medium bg-white transform translate-y-1/2">
                                    Or Login with e-mail
                                </div> --}}
                            </div>
                            <form action="{{ url('/login-trainer/prosses') }}" method="POST" id="filterDataLaporan">
                                @csrf
                                <div class="mx-auto max-w-xs">
                                    <select id="nama_lengkap" name="id" id="" class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white" required>
                                        <option value="">Pilih Nama Lengkap Kamu</option>
                                        @foreach ($getDataTrainer as $trainer)
                                            <option value="{{ $trainer->id }}">{{ $trainer->nama }}</option>
                                        @endforeach
                                    </select>
                    
                                    <div class="relative w-full mt-5">
                                        <input type="password" id="id_card" name="password" placeholder="Kata Sandi / Id Card"
                                        class="w-full px-8 py-4  rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white" required>
                                        <span id="togglePassword"
                                            class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer">
                                            <i class="fas fa-eye text-gray-600"></i>
                                        </span>
                                    </div>

                                    <button type="submit" id="submitLogin"
                                        class="mt-5 tracking-wide poppins-medium  bg-[#f66c2d] text-gray-100 w-full py-4 rounded-lg hover:bg-[#777777]  transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                                        <svg class="w-6 h-6 -ml-2" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                                            <circle cx="8.5" cy="7" r="4" />
                                            <path d="M20 8v6M23 11h-6" />
                                        </svg>
                                        <span class="ml-3">
                                            Masuk
                                        </span>
                                    </button>
                                    <script>
                                        document.getElementById('filterDataLaporan').addEventListener('submit', function(event) {
                                            var submitButton = document.getElementById('submitLogin');
                                            var formData = new FormData(this);
                                            submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i>&nbsp;&nbsp;Loading';
                                            submitButton.disabled = true;
                                            setTimeout(function() {
                                                submitButton.innerHTML = 'Login';
                                                submitButton.disabled = false;
                                            }, 3000);
                                        });
                                        const togglePassword = document.querySelector('#togglePassword');
                                        const password = document.querySelector('#id_card');    

                                        togglePassword.addEventListener('click', function() {
                                            // Toggle the type attribute
                                            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                                            password.setAttribute('type', type);

                                            // Toggle the icon
                                            this.querySelector('i').classList.toggle('fa-eye');
                                            this.querySelector('i').classList.toggle('fa-eye-slash');
                                        });
                                    </script>
                                    <p class="mt-6 text-xs text-gray-600 text-center poppins-regular">
                                        Saya setuju untuk mematuhi 
                                        <a href="#" class="border-b border-gray-500 border-dotted">
                                            Ketentuan Layanan subot app 
                                        </a>
                                       dan
                                        <a href="#" class="border-b border-gray-500 border-dotted">
                                            Kebijakan Privasi
                                        </a>
                                    </p>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="flex-1 bg-[#FFFFFF] text-center hidden lg:flex">
                    <div class="m-12 xl:m-16 w-full bg-contain bg-center bg-no-repeat"> <img
                            src="{{ asset('assets/img/animasiLogin.png') }}" class="rounded-lg" alt="">
                    </div>
                </div>
            </div>
            <div class="text-center hidden  lg:hidden">
                <div class="m-12 xl:m-16 "> <img src="{{ asset('assets/img/animasiLogin.png') }}" class="rounded-lg"
                        alt="">
                </div>
            </div>
        </main>
        {{-- === end notif === --}}

    </div>
@endsection
