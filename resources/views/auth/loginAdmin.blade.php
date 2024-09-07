@extends('layout.main')
@section('children')
    <div class="min-h-screen bg-gray-100 text-gray-900 flex justify-center">
        <div class="max-w-screen-xl m-0 sm:m-10 bg-white shadow sm:rounded-lg flex justify-center flex-1">
            <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12">
                <div>
                    <img src="{{ asset('assets/img/logo.png') }}" class="w-32 mx-auto" />
                </div>
                <div class="mt-12 flex flex-col items-center">
                    <h1 class="text-2xl xl:text-3xl font-extrabold">
                        Login Admin
                    </h1>
                    <div class="w-full flex-1 mt-8">
                        <div class="my-12 border-b text-center">
                            <div
                                class="leading-none px-2 inline-block text-sm text-gray-600 tracking-wide font-medium bg-white transform translate-y-1/2">
                                Or Login with e-mail
                            </div>
                        </div>
                        <form action="{{ route('loginAdmin') }}" method="POST" id="formLogin">
                            @csrf
                            <div class="mx-auto max-w-xs">
                                <input
                                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                    type="email" placeholder="Email" name="email" required />
                                <div class="relative w-full mt-5">
                                    <input id="password"
                                        class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                        type="password" placeholder="Password" name="password" required />
                                    <span id="togglePassword"
                                        class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer">
                                        <i class="fas fa-eye text-gray-600"></i>
                                    </span>
                                </div>

                                <button type="submit" id="submitLogin"
                                    class="mt-5 tracking-wide font-semibold bg-[#058EB5] text-gray-100 w-full py-4 rounded-lg hover:bg-[#777777]  transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                                    <svg class="w-6 h-6 -ml-2" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                                        <circle cx="8.5" cy="7" r="4" />
                                        <path d="M20 8v6M23 11h-6" />
                                    </svg>
                                    <span class="ml-3">
                                        Login
                                    </span>
                                </button>
                                <script>
                                    document.getElementById('formLogin').addEventListener('submit', function(event) {
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
                                    const password = document.querySelector('#password');

                                    togglePassword.addEventListener('click', function() {
                                        // Toggle the type attribute
                                        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                                        password.setAttribute('type', type);

                                        // Toggle the icon
                                        this.querySelector('i').classList.toggle('fa-eye');
                                        this.querySelector('i').classList.toggle('fa-eye-slash');
                                    });
                                </script>
                                <p class="mt-6 text-xs text-gray-600 text-center">
                                    I agree to abide by templatana's
                                    <a href="#" class="border-b border-gray-500 border-dotted">
                                        Terms of Service
                                    </a>
                                    and its
                                    <a href="#" class="border-b border-gray-500 border-dotted">
                                        Privacy Policy
                                    </a>
                                </p>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="flex-1 bg-[#0190B7] text-center hidden lg:flex">
                <div class="m-12 xl:m-16 w-full bg-contain bg-center bg-no-repeat"> <img
                        src="{{ asset('assets/img/animasiLogin.gif') }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
