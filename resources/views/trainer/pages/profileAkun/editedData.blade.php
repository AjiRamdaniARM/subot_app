@extends('trainer.layouts.main')
@section('children')
<section class="edited-akun">
    <div class="sidenav lg:px-0 px-4 md:px-0 flex justify-between items-center poppins-regular lg:text-2xl">
        <span class="text-[#0E2C75] poppins-semibold">
            Edited Akun 
        </span>
        <span class="text-[#516AA9] fw-[500]">
            @php
            use Carbon\Carbon;
            \Carbon\Carbon::setLocale('id');
            $tanggalSekarang = Carbon::now()->translatedFormat('l, d F Y');
        @endphp
        <p>{{ $tanggalSekarang }}</p>
        </span>
    </div>
    <div  class="content-profile-edit py-10">
        <div class="container w-full p-6">
            <h1 class="text-xl font-semibold mb-4">Avatar</h1>
            <div data-aos="fade-right" class="flex flex-wrap justify-start  items-center gap-5">
                <div class="profile">
                    <img class="w-28 h-28 object-cover rounded-full" src="{{ asset('assets/trainer_data/ktp/ktp_Aji Ramdani.jpeg') }}" alt="Profile Picture" id="profile">
                </div>
                <div class="p_right">
                    <button class="border border-gray-500 rounded-lg px-5 py-3 bg-gray-100 hover:bg-gray-200 transition duration-200">Unggah Gambar Baru</button>
                    <p class="text-sm text-gray-600 mt-2">Rekomendasi ukuran gambar 1080 x 1080. Format file JPG, PNG, atau GIF.</p>
                </div>
            </div>
        </div>
    </div>
    <div data-aos="fade-down" class="content-form">
        <form action="#" method="POST" class=" mx-auto p-6 rounded-lg ">
            <fieldset class="mb-6">
                <legend class="text-lg font-semibold mb-4">Perbarui Informasi Akun</legend>
                
                <!-- Input Nama Lengkap -->
                <div class="mb-4">
                    <label for="username" class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                    <input type="text" id="username" name="username" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Nama Lengkap" required>
                </div>
        
                <!-- Input Password -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label for="password1" class="block text-sm font-medium text-gray-700 mb-2">Email Akun</label>
                        <input type="password" id="password1" name="password1" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Email Akun" required>
                    </div>
                    <div>
                        <label for="password2" class="block text-sm font-medium text-gray-700 mb-2">Password Akun</label>
                        <input type="password" id="password2" name="password2" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Password Akun" required>
                    </div>
                    <div>
                        <label for="password3" class="block text-sm font-medium text-gray-700 mb-2">Alamat</label>
                        <input type="password" id="password3" name="password3" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Alamat" required>
                    </div>
                    <div>
                        <label for="password4" class="block text-sm font-medium text-gray-700 mb-2">Lulusan</label>
                        <input type="password" id="password4" name="password4" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Lulusan" required>
                    </div>
                    <div>
                        <label for="password5" class="block text-sm font-medium text-gray-700 mb-2">Telepone</label>
                        <input type="password" id="password5" name="password5" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Telepone" required>
                    </div>
                    
                </div>
        
                <!-- Submit Button -->
                <button type="submit" class="w-full py-2 px-4 bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Submit</button>
            </fieldset>
        </form>
        
    </div>
    
    </div>
</section>
@endsection
