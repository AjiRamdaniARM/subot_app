@extends('trainer.layouts.main')
@section('children')
<section class="jadwal">
    <div class="c_body">
        <div class="container  relative ">
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
            <div class=" mx-auto">
                <div class=" mx-auto py-10">
                    <div class="box-card w-full  text-start ">
                        <div class="body">
                            <div class="content">
                                <div class="card-1 flex flex-col gap-5">
                                    <h6 class="text-[#0E2C75] poppins-semibold text-[20px]">Jadwal Trainer</h6>
                                    {{-- === table data laporan trainer === --}}
                                    <table id="schedules-table" class="display">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Trainer</th>
                                                <th>Kelas</th>
                                                <th>Alat</th>
                                                <th>Program</th>
                                                <th>Level</th>
                                                <th>Sekolah</th>
                                                <th>Created At</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                    </table>
                                    <script>
                                        $(document).ready(function () {
                                            $('#schedules-table').DataTable({
                                                processing: true,
                                                serverSide: true, 
                                                ajax: '{{ route('get.laporanTrainer') }}',
                                                columns: [
                                                    { data: 'id_schedules', name: 'id_schedules' },
                                                    { data: 'trainer_name', name: 'trainer_name' },
                                                    { data: 'kelas_name', name: 'kelas_name' },
                                                    { data: 'nama_alat', name: 'nama_alat' },
                                                    { data: 'program_name', name: 'program_name' },
                                                    { data: 'level_name', name: 'level_name' },
                                                    { data: 'sekolah_name', name: 'sekolah_name' },
                                                    { data: 'created_at_jd', name: 'created_at_jd' },
                                                    { data: 'action', name: 'action', orderable: false, searchable: false }
                                                ]
                                            });
                                        });
                                    </script>
                                    {{-- === end data table laporan trainer === --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection