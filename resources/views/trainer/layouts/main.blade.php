<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('trainer.layouts.header')
</head>
<body>
<!-- Layout -->
<div class="flex">
    <aside class="fixed top-0 left-0 w-64 bg-[#F2F4FA] text-[#798AA3] transform -translate-x-full md:translate-x-0  transition-transform duration-300 lg:translate-x-0 z-50  h-full 
     md:block lg:block" id="sidebar" style="border-right: 1px solid #798AA3">
     <button id="closeSideBar" class="md:hidden hover:105 transition-all lg:hidden block w-full text-end p-5 absolute poppins-regular">Keluar</button>
        <div class="p-10">
            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
            <dotlottie-player src="https://lottie.host/d8abf267-a91a-4b08-8dc2-81bec33daa2e/TZuZ9k6tBP.json" background="transparent" speed="1" style="width: 150px; height: 150px;" loop autoplay></dotlottie-player>
            <h2 class="text-2xl  poppins-semibold">Subot App</h2>
            <ul class="mt-10 flex flex-col gap-3" >
                {{-- === menu beranda === --}}
                <li><a href="{{route('home')}}" id="menu-home" class="block hover:bg-gray-200 hover:scale-105 hover:rounded-lg py-2 px-4 {{ request()->routeIs('home') ? 'text-[#0B235E] fw-[500]' : 'text-[#798AA3] fw-[400]' }} flex items-center gap-3">
                    <span>                    
                        <svg id="icon" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.3333 12V4H28V12H17.3333ZM4 17.3333V4H14.6667V17.3333H4ZM17.3333 28V14.6667H28V28H17.3333ZM4 28V20H14.6667V28H4ZM6.66667 14.6667H12V6.66667H6.66667V14.6667ZM20 25.3333H25.3333V17.3333H20V25.3333ZM20 9.33333H25.3333V6.66667H20V9.33333ZM6.66667 25.3333H12V22.6667H6.66667V25.3333Z" fill="{{ request()->routeIs('home') ? '#0B235E' : '#798AA3' }}"
                            />
                        </svg>
                    </span>
                    Beranda</a>
                </li>
                 {{-- === menu akun === --}}
                <li><a href="{{route('akun')}}" id="menu-akun" class="block py-2 px-4 hover:bg-gray-200 hover:scale-105 hover:rounded-lg  {{ request()->routeIs('akun') ? 'text-[#0B235E] fw-[500]' : 'text-[#798AA3] fw-[400]' }} flex items-center gap-3">
                        <span>                    
                            
                        <svg width="32" id="icon" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 2.66666C14.249 2.66666 12.5152 3.01153 10.8975 3.6816C9.27984 4.35166 7.80998 5.33379 6.57187 6.5719C4.07138 9.07238 2.66663 12.4638 2.66663 16C2.66663 19.5362 4.07138 22.9276 6.57187 25.4281C7.80998 26.6662 9.27984 27.6483 10.8975 28.3184C12.5152 28.9884 14.249 29.3333 16 29.3333C19.5362 29.3333 22.9276 27.9286 25.4281 25.4281C27.9285 22.9276 29.3333 19.5362 29.3333 16C29.3333 14.249 28.9884 12.5152 28.3184 10.8975C27.6483 9.27987 26.6662 7.81001 25.4281 6.5719C24.1899 5.33379 22.7201 4.35166 21.1024 3.6816C19.4847 3.01153 17.7509 2.66666 16 2.66666ZM9.42663 24.3733C9.99996 23.1733 13.4933 22 16 22C18.5066 22 22 23.1733 22.5733 24.3733C20.7054 25.8607 18.3877 26.6693 16 26.6667C13.52 26.6667 11.24 25.8133 9.42663 24.3733ZM24.48 22.44C22.5733 20.12 17.9466 19.3333 16 19.3333C14.0533 19.3333 9.42663 20.12 7.51996 22.44C6.10172 20.5927 5.33305 18.3289 5.33329 16C5.33329 10.12 10.12 5.33332 16 5.33332C21.88 5.33332 26.6666 10.12 26.6666 16C26.6666 18.4267 25.84 20.6667 24.48 22.44ZM16 7.99999C13.4133 7.99999 11.3333 10.08 11.3333 12.6667C11.3333 15.2533 13.4133 17.3333 16 17.3333C18.5866 17.3333 20.6666 15.2533 20.6666 12.6667C20.6666 10.08 18.5866 7.99999 16 7.99999ZM16 14.6667C15.4695 14.6667 14.9608 14.4559 14.5857 14.0809C14.2107 13.7058 14 13.1971 14 12.6667C14 12.1362 14.2107 11.6275 14.5857 11.2524C14.9608 10.8774 15.4695 10.6667 16 10.6667C16.5304 10.6667 17.0391 10.8774 17.4142 11.2524C17.7892 11.6275 18 12.1362 18 12.6667C18 13.1971 17.7892 13.7058 17.4142 14.0809C17.0391 14.4559 16.5304 14.6667 16 14.6667Z" fill="{{ request()->routeIs('akun') ? '#0B235E' : '#798AA3' }}"/>
                        </svg>
    
                        </span>
                        Akun Anda</a>
                </li>
                 {{-- === menu jadwal anda === --}}
                <li><a href="{{ url('/jadwalTrainer')}}"  class="block py-2 px-4 hover:bg-gray-200 hover:scale-105 hover:rounded-lg  {{ request()->routeIs('jadwal.menu') ? 'text-[#0B235E] fw-[500]' : 'text-[#798AA3] fw-[400]' }} flex items-center gap-3">
                    <span>                    
                        
                    
                        <svg id="icon" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.6666 16H20.6666V19.76L23.92 21.64L22.92 23.3733L18.6666 20.92V16ZM5.33329 2.66667H24C24.7072 2.66667 25.3855 2.94762 25.8856 3.44772C26.3857 3.94782 26.6666 4.62609 26.6666 5.33334V13.4667C28.32 15.1467 29.3333 17.4533 29.3333 20C29.3333 22.4754 28.35 24.8493 26.5996 26.5997C24.8493 28.35 22.4753 29.3333 20 29.3333C17.4533 29.3333 15.1466 28.32 13.4666 26.6667H5.33329C4.62605 26.6667 3.94777 26.3857 3.44767 25.8856C2.94758 25.3855 2.66663 24.7073 2.66663 24V5.33334C2.66663 4.62609 2.94758 3.94782 3.44767 3.44772C3.94777 2.94762 4.62605 2.66667 5.33329 2.66667ZM5.33329 20V24H11.56C10.9866 22.7867 10.6666 21.4267 10.6666 20H5.33329ZM5.33329 10.6667H13.3333V6.66667H5.33329V10.6667ZM24 10.6667V6.66667H16V10.6667H24ZM5.33329 17.3333H11.0533C11.5066 15.8 12.3466 14.4267 13.4666 13.3333H5.33329V17.3333ZM20 13.5333C18.2849 13.5333 16.6401 14.2146 15.4273 15.4274C14.2146 16.6401 13.5333 18.2849 13.5333 20C13.5333 23.5733 16.4266 26.4667 20 26.4667C20.8492 26.4667 21.6901 26.2994 22.4746 25.9744C23.2592 25.6494 23.9721 25.1731 24.5726 24.5726C25.1731 23.9721 25.6494 23.2593 25.9744 22.4747C26.2994 21.6901 26.4666 20.8492 26.4666 20C26.4666 16.4267 23.5733 13.5333 20 13.5333Z" fill="{{ request()->routeIs('jadwal.menu') ? '#0B235E' : '#798AA3' }}"/>
                        </svg>
    

                    </span>
                    Jadwal Anda</a>
                </li>
                {{-- === menu jadwal anda === --}}
                <li><a href="{{ route('laporan.menu')}}" id="laporan" class="block py-2 px-4 hover:bg-gray-200 hover:scale-105 hover:rounded-lg  {{ request()->routeIs('laporan.menu') ? 'text-[#0B235E] fw-[500]' : 'text-[#798AA3] fw-[400]' }} flex items-center gap-3">
                    <span>                    
                        <svg width="32" height="32" id="icon" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M28.1333 16.6663L30 18.5463L21.2933 27.333L16.6667 22.6663L18.5333 20.7863L21.2933 23.5597L28.1333 16.6663ZM14.6667 5.33301C16.0812 5.33301 17.4377 5.89491 18.4379 6.8951C19.4381 7.8953 20 9.25185 20 10.6663C20 12.0808 19.4381 13.4374 18.4379 14.4376C17.4377 15.4378 16.0812 15.9997 14.6667 15.9997C13.2522 15.9997 11.8956 15.4378 10.8954 14.4376C9.89524 13.4374 9.33333 12.0808 9.33333 10.6663C9.33333 9.25185 9.89524 7.8953 10.8954 6.8951C11.8956 5.89491 13.2522 5.33301 14.6667 5.33301ZM14.6667 7.99967C13.9594 7.99967 13.2811 8.28063 12.781 8.78072C12.281 9.28082 12 9.9591 12 10.6663C12 11.3736 12.281 12.0519 12.781 12.552C13.2811 13.0521 13.9594 13.333 14.6667 13.333C15.3739 13.333 16.0522 13.0521 16.5523 12.552C17.0524 12.0519 17.3333 11.3736 17.3333 10.6663C17.3333 9.9591 17.0524 9.28082 16.5523 8.78072C16.0522 8.28063 15.3739 7.99967 14.6667 7.99967ZM14.6667 17.333C15.5733 17.333 16.6667 17.453 17.88 17.6797L15.6533 19.9063L14.6667 19.8663C10.7067 19.8663 6.53333 21.813 6.53333 22.6663V24.133H14.8L17.3333 26.6663H4V22.6663C4 19.1197 11.1067 17.333 14.6667 17.333Z" fill="{{ request()->routeIs('laporan.menu') ? '#0B235E' : '#798AA3' }}"/>
                            </svg>
                    </span>
                    Laporan Anda</a>
                </li>
            </ul>
        </div>
    </aside>
    <aside class="fixed inset-y-0 left-0 w-64 bg-gray-800 text-[#798AA3] z-50 transform -translate-x-full transition-transform duration-300 md:hidden" id="mobile-sidebar">
        <div class="p-4">
            <h2 class="text-2xl font-semibold">Sidebar</h2>
            <ul class="mt-4">
                <li><a href="#" class="block py-2 px-4 ">Dashboard</a></li>
                <li><a href="#" class="block py-2 px-4 ">Profile</a></li>
                <li><a href="#" class="block py-2 px-4 ">Settings</a></li>
            </ul>
        </div>
    </aside>
    <div class="flex-1 md:ml-64 lg:ml-64 ml-0 p-4 ">
        <header class="flex justify-between  items-center p-4 text-white" style="border-bottom: 1px solid #798AA3">
            <!-- Hamburger Button -->
            <button id="openSidebar" class="text-black relative hover:scale-105 transition-all z-40 ">
                <svg width="50px" height="50px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.46447 20.5355C4.92893 22 7.28595 22 12 22C16.714 22 19.0711 22 20.5355 20.5355C22 19.0711 22 16.714 22 12C22 7.28595 22 4.92893 20.5355 3.46447C19.0711 2 16.714 2 12 2C7.28595 2 4.92893 2 3.46447 3.46447C2 4.92893 2 7.28595 2 12C2 16.714 2 19.0711 3.46447 20.5355ZM18.75 16C18.75 16.4142 18.4142 16.75 18 16.75H6C5.58579 16.75 5.25 16.4142 5.25 16C5.25 15.5858 5.58579 15.25 6 15.25H18C18.4142 15.25 18.75 15.5858 18.75 16ZM18 12.75C18.4142 12.75 18.75 12.4142 18.75 12C18.75 11.5858 18.4142 11.25 18 11.25H6C5.58579 11.25 5.25 11.5858 5.25 12C5.25 12.4142 5.58579 12.75 6 12.75H18ZM18.75 8C18.75 8.41421 18.4142 8.75 18 8.75H6C5.58579 8.75 5.25 8.41421 5.25 8C5.25 7.58579 5.58579 7.25 6 7.25H18C18.4142 7.25 18.75 7.58579 18.75 8Z" fill="#1C274C"/>
                </svg>
            </button>
            <script>
                const sidebar = document.getElementById('sidebar');
                const openSidebarBtn = document.getElementById('openSidebar');
                const closeSidebarBtn = document.getElementById('closeSideBar');
              
                // Fungsi untuk toggle sidebar
                closeSidebarBtn.addEventListener('click', () => {
                sidebar.classList.add('-translate-x-full');
                });
                openSidebarBtn.addEventListener('click', () => {
                
                    sidebar.classList.toggle('-translate-x-full');
                });
              </script>
            <div class="text-sapa">
                <h6 class="text-gray-800 lg:block md:block hidden poppins-bold">Assalamualaikum {{ explode(' ', auth()->guard('trainer')->user()->nama)[0] }}</h6>
            </div>
            <div class=" flex items-center  gap-4">
                <svg class="h-8 w-8 text-gray-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                  </svg>
                <button id="profile-btn" class="flex items-center gap-4 focus:outline-none">
                    <img class="w-10 h-10 rounded-full border-4 border-blue-400" src="{{asset('assets/trainer_data/profile/'.auth()->guard('trainer')->user()->profile )}}" alt="Profile Picture">
                    <div class="profile-name">
                        <div class="text-black poppins-bold">{{ auth()->guard('trainer')->user()->nama }}</div>
                        <div class="text-gray-500 text-start -mt-1">Trainer</div>
                    </div>
                </button>
                <!-- Dropdown Menu -->
                <div id="profile-dropdown" class="absolute right-0 mt-2 w-48  bg-white rounded-md shadow-lg hidden">
                    <ul class="py-1 text-gray-700">
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Profile</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Settings</a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="w-full text-left block px-4 py-2 hover:bg-gray-100">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            <script>
                const profileBtn = document.getElementById('profile-btn');
                const profileDropdown = document.getElementById('profile-dropdown');
                profileBtn.addEventListener('click', () => {
                    profileDropdown.classList.toggle('hidden');
                });
                // Optional: close dropdown when clicking outside
                window.addEventListener('click', function (e) {
                    if (!profileBtn.contains(e.target) && !profileDropdown.contains(e.target)) {
                        profileDropdown.classList.add('hidden');
                    }
                });
            </script>
        </header>
        <main id="content-area" class=" md:px-5 px-1 lg:px-5 py-10">
            @yield('children')
        </main>
    </div> 
</div>
</body>
@include('trainer.layouts.footer')
</html>
