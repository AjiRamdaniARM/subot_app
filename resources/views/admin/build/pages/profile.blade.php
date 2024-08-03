<!--
=========================================================
* Soft UI Dashboard Tailwind - v1.0.5
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard-tailwind
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<x-app-layout>

    <body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
        @include('admin.build.components.sidenav')


        <div class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen bg-gray-50 transition-all duration-200">

            <div class="w-full px-6 mx-auto">
                <div class="relative flex items-center p-0 mt-6 overflow-hidden bg-center bg-cover min-h-75 rounded-2xl"
                    style="background-image: url('{{ asset('assets/img/bannerprofile.jpeg') }}'); background-position-y: 50%">
                    <span class="absolute inset-y-0 w-full h-full bg-center bg- bg- to-pink-500 opacity-60"></span>
                </div>
                <div
                    class="relative flex flex-col flex-auto min-w-0 p-4 mx-6 -mt-16 overflow-hidden break-words border-0 shadow-blur rounded-2xl bg-white/80 bg-clip-border backdrop-blur-2xl backdrop-saturate-200">
                    <div class="flex flex-wrap -mx-3">
                        <div class="flex-none w-auto max-w-full px-3">
                            <div
                                class="text-base ease-soft-in-out h-18.5 w-18.5 relative inline-flex items-center justify-center rounded-xl text-white transition-all duration-200">
                                <img src="../assets/img/bruce-mars.jpg" alt="profile_image"
                                    class="w-full shadow-soft-sm rounded-xl" />
                            </div>
                        </div>
                        <div class="flex-none w-auto max-w-full px-3 my-auto">
                            <div class="h-full">
                                <h5 class="mb-1">SUKAROBOT ACCADEMY</h5>
                                <p class="mb-0 font-semibold leading-normal text-sm">Super Admin</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="w-full p-6 mx-auto">
                <div class="flex flex-wrap -mx-3">
                    <div class="w-full px-3 lg-max:mt-6 xl:w-6/12 mx-auto mb-6">
                        <div
                            class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border max-w-xl mx-auto">
                            <div class="p-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
                                <div class="flex flex-wrap -mx-3">
                                    <div
                                        class="flex items-center w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-none">
                                        <h6 class="mb-0">Profile Information</h6>
                                    </div>
                                    <div class="w-full max-w-full px-3 text-right shrink-0 md:w-4/12 md:flex-none">
                                        <a href="javascript:;" data-target="tooltip_trigger" data-placement="top">
                                            <i class="leading-normal fas fa-user-edit text-sm text-slate-400"></i>
                                        </a>
                                        <div data-target="tooltip"
                                            class="hidden px-2 py-1 text-center text-white bg-black rounded-lg text-sm"
                                            role="tooltip">
                                            Edit Profile
                                            <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                data-popper-arrow></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-auto p-4">
                                <p class="leading-normal text-sm">Pendidikan dan Pelatihan Teknologi,
                                    Menggali potensi masa depan anda
                                    Selamat datang di Website resmi Sukarobot Academy..</p>
                                <hr
                                    class="h-px my-6 bg-transparent bg-gradient-to-r from-transparent via-white to-transparent" />
                                <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                                    <li
                                        class="relative block px-4 py-2 pt-0 pl-0 leading-normal bg-white border-0 rounded-t-lg text-sm text-inherit">
                                        <strong class="text-slate-700">Full Name:</strong> &nbsp; Sukarobot Accademy
                                    </li>
                                    <li
                                        class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit">
                                        <strong class="text-slate-700">Mobile:</strong> &nbsp; +62 857-9589-9901
                                    </li>
                                    <li
                                        class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit">
                                        <strong class="text-slate-600">Email:</strong> &nbsp; sukarobotacademy@gmail.com
                                    </li>
                                    <li
                                        class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit">
                                        <strong class="text-slate-700">Role:</strong> &nbsp; Super Admin
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="w-full px-3 lg-max:mt-6 xl:w-6/12 mx-auto">
                        <div
                            class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border max-w-xl mx-auto">
                            <div class="p-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
                                <h6 class="mb-0">Conversations</h6>
                            </div>
                            <div class="flex-auto p-4">
                                <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                                    <li
                                        class="relative flex items-center px-0 py-2 mb-2 bg-white border-0 rounded-t-lg text-inherit">
                                        <div
                                            class="inline-flex items-center justify-center w-12 h-12 mr-4 text-white transition-all duration-200 text-base ease-soft-in-out rounded-xl">
                                            <img src="../assets/img/kal-visuals-square.jpg" alt="kal"
                                                class="w-full shadow-soft-2xl rounded-xl" />
                                        </div>
                                        <div class="flex flex-col items-start justify-center">
                                            <h6 class="mb-0 leading-normal text-sm">Sophie B.</h6>
                                            <p class="mb-0 leading-tight text-xs">Hi! I need more information..</p>
                                        </div>
                                        <a class="inline-block py-3 pl-0 pr-4 mb-0 ml-auto font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in hover:scale-102 hover:active:scale-102 active:opacity-85 text-fuchsia-500 hover:text-fuchsia-800 hover:shadow-none active:scale-100"
                                            href="javascript:;">Chat</a>
                                    </li>
                                    <li
                                        class="relative flex items-center px-0 py-2 mb-2 bg-white border-0 border-t-0 text-inherit">
                                        <div
                                            class="inline-flex items-center justify-center w-12 h-12 mr-4 text-white transition-all duration-200 text-base ease-soft-in-out rounded-xl">
                                            <img src="../assets/img/marie.jpg" alt="kal"
                                                class="w-full shadow-soft-2xl rounded-xl" />
                                        </div>
                                        <div class="flex flex-col items-start justify-center">
                                            <h6 class="mb-0 leading-normal text-sm">Anne Marie</h6>
                                            <p class="mb-0 leading-tight text-xs">Awesome work, can you..</p>
                                        </div>
                                        <a class="inline-block py-3 pl-0 pr-4 mb-0 ml-auto font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in hover:scale-102 hover:active:scale-102 active:opacity-85 text-fuchsia-500 hover:text-fuchsia-800 hover:shadow-none active:scale-100"
                                            href="javascript:;">Chat</a>
                                    </li>
                                    <li
                                        class="relative flex items-center px-0 py-2 mb-2 bg-white border-0 border-t-0 text-inherit">
                                        <div
                                            class="inline-flex items-center justify-center w-12 h-12 mr-4 text-white transition-all duration-200 text-base ease-soft-in-out rounded-xl">
                                            <img src="../assets/img/ivana-square.jpg" alt="kal"
                                                class="w-full shadow-soft-2xl rounded-xl" />
                                        </div>
                                        <div class="flex flex-col items-start justify-center">
                                            <h6 class="mb-0 leading-normal text-sm">Ivanna</h6>
                                            <p class="mb-0 leading-tight text-xs">About files I can..</p>
                                        </div>
                                        <a class="inline-block py-3 pl-0 pr-4 mb-0 ml-auto font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in hover:scale-102 hover:active:scale-102 active:opacity-85 text-fuchsia-500 hover:text-fuchsia-800 hover:shadow-none active:scale-100"
                                            href="javascript:;">Chat</a>
                                    </li>
                                    <li
                                        class="relative flex items-center px-0 py-2 mb-2 bg-white border-0 border-t-0 text-inherit">
                                        <div
                                            class="inline-flex items-center justify-center w-12 h-12 mr-4 text-white transition-all duration-200 text-base ease-soft-in-out rounded-xl">
                                            <img src="../assets/img/team-4.jpg" alt="kal"
                                                class="w-full shadow-soft-2xl rounded-xl" />
                                        </div>
                                        <div class="flex flex-col items-start justify-center">
                                            <h6 class="mb-0 leading-normal text-sm">Peterson</h6>
                                            <p class="mb-0 leading-tight text-xs">Have a great afternoon..</p>
                                        </div>
                                        <a class="inline-block py-3 pl-0 pr-4 mb-0 ml-auto font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in hover:scale-102 hover:active:scale-102 active:opacity-85 text-fuchsia-500 hover:text-fuchsia-800 hover:shadow-none active:scale-100"
                                            href="javascript:;">Chat</a>
                                    </li>
                                    <li
                                        class="relative flex items-center px-0 py-2 bg-white border-0 border-t-0 rounded-b-lg text-inherit">
                                        <div
                                            class="inline-flex items-center justify-center w-12 h-12 mr-4 text-white transition-all duration-200 text-base ease-soft-in-out rounded-xl">
                                            <img src="../assets/img/team-3.jpg" alt="kal"
                                                class="w-full shadow-soft-2xl rounded-xl" />
                                        </div>
                                        <div class="flex flex-col items-start justify-center">
                                            <h6 class="mb-0 leading-normal text-sm">Nick Daniel</h6>
                                            <p class="mb-0 leading-tight text-xs">Hi! I need more information..</p>
                                        </div>
                                        <a class="inline-block py-3 pl-0 pr-4 mb-0 ml-auto font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in hover:scale-102 hover:active:scale-102 active:opacity-85 text-fuchsia-500 hover:text-fuchsia-800 hover:shadow-none active:scale-100"
                                            href="javascript:;">Chat</a>
                                    </li>
                                </ul>
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
                                    <a href="https://www.sukarobot.com/" class="font-semibold text-slate-700"
                                        target="_blank">SUKAROBOT ACCADEMY</a>
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
        </div>

    </body>
</x-app-layout>
