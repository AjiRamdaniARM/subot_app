@extends('trainer.pages.forgot_password.main')
@section('index')
<main class="body">
    <div class="content-body flex">

        <!-- maskot -->
        <div class="container-1 lg:block hidden bg-[#045A71] w-full h-full-screen">
            <img class="block rounded 2x1" src="{{ asset('asset/maskot.png') }}"alt="Maskot">
        </div>
        <!-- logo -->

        <div class="container-2 bg-white w-full p-10 min-h-screen">
            <div class="container mx-auto flex flex-col justify-center lg:mt-0 mt-20">
                <img class="block mt-[-20px] mb-9 w-24 mx-auto" src="{{ asset('asset/logo.jpg') }}" alt="logo">
                <h1 class="text 3x1 pt-16 -mt-4 font-extrabold text-[#045A71]" style="font-size:28px;">Buat Password Baru</h1>
                <h2 class="text-sm flex-justify justify-betweenmt-1 text-gray-500" style="font-size:12px;">Silahkan buat password yang mudah di ingat</h2>
                <form action="">
                    <div class="mt-3">
                        <label class="block text-base mb-1 p-1 text-[#045A71] font-bold" style="font-size:14px;">Password Baru</label>
                        <input type="text" name="email" placeholder="Minimal 4 karakter"style="font-size:12px;" class="rounded-[24px] w-full p-30 py-2 border border-[#aab3c4] focus:outline-none focus:ring-1 focus:border-[#aab3c4] p-4">
                        <label class="block text-base mb-1 p-1 text-[#045A71] font-bold" style="font-size:14px;">Ulangi Password</label>
                        <input type="text" name="email" placeholder="Pastikan password sama" style="font-size:12px;"class="rounded-[24px] w-full p-30 py-2 border border-[#aab3c4] focus:outline-none focus:ring-1 focus:border-[#aab3c4] p-4">
                    </div>
                    <button class="rounded-[24px] py-2 w-full mt-3 shadow-lg bg-[#045A71] text-white hover:bg-[#0B5063] hover:text-[#F5F5F5]"style="font-size 14px; ">Kirim</button>
                </form>
            <section class="mt-3 flex justify-between">
            <div class="alert flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="icon  size-5" style="color:grey;" >
                    <path fill-rule="evenodd" d="M18 10a8 8 0 1 1-16 0 8 8 0 0 1 16 0Zm-8-5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-1.5 0v-4.5A.75.75 0 0 1 10 5Zm0 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z" clip-rule="evenodd" />
                </svg>
                <label class="font-family: 'Poppins', sans-serif; text-sm flex-justify justify-betweenmt-1 text-gray-500" style="font-size:12px;">Password tidak sesuai</label>
            </div>
        

            <div class="font-semibold text-sm text-[#045A71] hover:text-[#487b8a] "style="font-size:12px; ">
                <a href="page_email.html">Kembali</a>
            </div>
            </section>
        </div>
    </div>
</main>
@endsection