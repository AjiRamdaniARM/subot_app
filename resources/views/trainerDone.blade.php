@extends('layout.main')
@section('children')
    <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
                <div class="max-w-md mx-auto">
                    <div class="flex flex-col md:flex-row items-center space-x-5">
                        <img src="{{ asset('assets/img/logo.png') }}" width="100" alt="logo">
                        <br>
                        <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                            <h2 class="leading-relaxed">Terima Kasih Sudah Mengisi data nya🙏</h2>
                            <p class="text-sm text-gray-500 font-normal leading-relaxed">your data is safe on our servers
                            </p>
                        </div>
                    </div>
                    <img src="{{ asset('assets/img/doneRoboto.gif') }}" alt="">
                    <br>
                    <div class="lg:ml-6 lg:col-start-2 pl-5 lg:max-w-2xl">
                        <p class="text-base font-semibold leading-6 text-blue-500 uppercase">
                            DAFTAR TRAINER
                        </p>
                        <h4 class="mt-2 text-2xl font-extrabold leading-8 text-gray-900 sm:text-3xl sm:leading-9">
                            Yang Sudah Mengisi Formulir
                        </h4>

                        <ul class="mt-8 space-y-3 font-medium">
                            @foreach ($getTrainer as $getTrainers)
                                <li class="flex items-start lg:col-span-1">
                                    <div class="flex-shrink-0">
                                        <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <p class="ml-3 leading-5 text-gray-600">
                                        {{ $getTrainers->nama }}
                                    </p>
                                </li>
                            @endforeach


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
