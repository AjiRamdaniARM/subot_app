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
    <livewire:update-account :idAccount="auth()->guard('trainer')->user()->id" />


    
    </div>
</section>
@endsection
