@extends('trainer.layouts.main')
@section('children')

<section class="jadwal">
    <div class="c_body">
        <div class="container py-4 px-7 ">
            <h1 class="text-[#0E2C75] text-start text-2xl poppins font-semibold">Tanggal Jadwal</h1>
        </div>
        <div class="content-date">
            @include('trainer.pages.laporanTrainer.partials.dateFilter')
        </div>
        <div data-aos="fade-down" class=" flex  items-center justify-center gap-5 py-4 ">
            <div class="container date">
                <div class="content-body">
                    <div id="card-container" class="grid grid-cols-2 lg:grid-cols-4 grid-rows-1 overflow-auto">
                    </div>
                </div>
            </div>
        </div>
        <div data-aos="fade-down" class="container">
          @include('trainer.pages.laporanTrainer.partials.dataTable')
        </div>
</section>
@endsection