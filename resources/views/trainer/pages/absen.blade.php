@extends('trainer.layouts.main')
@section('children')
<section>
    <div class="container">
        @if (session('success'))
            <div data-aos="fade-in" class="bg-[#111934] p-2 rounded-[24px] text-center py-4 lg:px-4">
                <div class=" items-center text-white leading-none lg:rounded-full flex lg:inline-flex" role="alert">
                <span class="flex rounded-[16px] bg-[#2BEBCA] uppercase px-2 py-1 text-xs text-[#111934] font-bold mr-3">Notif</span>
                <span class="font-semibold mr-2 text-left flex-auto">{{ session('success') }}</span>
                <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
                </div>
            </div>
        @endif
     
          <br>
        <div class="banner">
            <img class="rounded-lg lg:h-80  object-cover w-full" src="{{asset('assets/img/Coming.gif')}}" alt="image-banner" />
        </div>
            <div data-aos="fade-up" class="card-one lg:py-10 md:py-10 py-6 grid grid-flow-dense lg:grid-cols-2 gap-4 lg:grid-rows-2 grid-cols-1 grid-rows-1">
                <div class="detail-inform w-full bg-[#FBDC5C] rounded-lg border-2 border-[#FBBB5CFF] p-5 relative">
                    <div class="mini-alert bg-[#EEAA17FF] text-[15px] p-1 text-[#5B4A07FF] poppins-regular absolute top-3 right-3 w-20 rounded-[24px] text-center">
                        {{$getScheduleTrainer->dj_akhir}} Jam
                    </div>
                    <h1 class="poppins-bold lg:text-2xl md:text-2xl text-[#5B4A07FF] text-[20px] lg:text-3xl">Informasi Jadwal</h1>
                    <p class="poppins-regular text-gray-800 text-[#836A07FF] text-[15px] md:text-[20px] lg:text-[20px]"> {{ \Carbon\Carbon::parse($getScheduleTrainer->tanggal_jd)->translatedFormat('d F Y') }},  {{ date('H:i', strtotime($getScheduleTrainer->jm_awal)) }} - {{ date('H:i', strtotime($getScheduleTrainer->jm_akhir)) }}</p>
                    <p class="poppins-semibold text-[15px] md:text-[20px] lg:text-[20px]  text-[#5B4A07FF]">
                        @if ($getScheduleTrainer->kelas_name == 'Club')
                        {{ $getScheduleTrainer->sekolah }}
                        @else
                        {{ $getScheduleTrainer->kelas_name }}
                        @endif
                    </p>
                    <p class="poppins-regular text-[15px] text-[15px] md:text-[20px] lg:text-[20px] text-[#836A07FF]">{{$getScheduleTrainer->levels}}, {{$getScheduleTrainer->program}} , {{$getScheduleTrainer->nama_alat}} </p>
                </div>
                {{-- === component siswa === --}}
                <div class="tab border rounded-lg border-gray-500">
                    <div class="text-head px-5 mt-3 flex justify-between items-center">
                        <h1 class="poppins-bold lg:text-2xl md:text-2xl ">Daftar Siswa</h1>
                        @if ($getScheduleTrainer->absensi_anak == 'tutup')
                            <button class="bg-[#FF0000FF] text-white rounded-[24px] px-3 py-1 hover:scale-105 transition-all bg-[#2E2E4BFF]">Sudah Absen</button>
                        @else
                            <button id="absensi" onclick="window.location.href='{{ url('/absensiswa/' . $getScheduleTrainer->id_schedules) }}   '" class="bg-[#1A1A34] text-white rounded-[24px] px-3 py-1 hover:scale-105 transition-all bg-[#2E2E4BFF]">Absensi Siswa</button>
                        @endif
                      
                        <script>
                            document.getElementById('absensi').addEventListener('click', function() {
                            var submitButtonAbsensi = document.getElementById('absensi'); // Mendapatkan tombol
                            submitButtonAbsensi.innerHTML = '<i class="fas fa-spinner fa-spin"></i>&nbsp;&nbsp;Loading'; 
                            submitButtonAbsensi.disabled = true; 
                                setTimeout(function() {
                                    submitButtonAbsensi.innerHTML = 'Absensi Siswa';
                                    submitButtonAbsensi.disabled = false;
                                }, 2000); 
                            });
                        </script>
                    </div>
                    <div style="height: 100px; overflow:auto">
                        <table class="table-auto  w-full border-collapse mt-6">
                            <thead class="text-xs font-semibold uppercase text-gray-600 bg-gray-50">
                                <tr>
                                    <th class="p-2 w-16 t   ext-center">No</th>
                                    <th class="p-2 w-24 text-center">Poto</th>
                                    <th class="p-2 w-1/2 text-left">Nama</th>
                                    <th class="p-2 w-1/4 text-center">Kelas</th>
                                    <th class="p-2 w-1/4 text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody class="text-sm divide-y divide-gray-100">
                                @php $no = 1; @endphp
                                @foreach ($getDataStudent as $student)
                                    <tr>
                                        <td class="p-2 text-center">{{ $no++ }}</td>
                                        <td class="p-2 text-center">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 mr-3">
                                                    <img class="rounded-full w-10 h-10 object-cover" src="{{ asset('assets/data/dataAnak/img/' . $student->file) }}" alt="Foto">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-2">
                                            <div class="font-medium text-gray-800">{{ $student->nama_lengkap }}
                                            </div>
                                        </td>
                                        <td class="p-2 text-center">{{ $student->kelas }}</td>
                                        <td class="p-2 text-center">{{ $student->absensi_anak}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                   
                </div>
                {{-- === end component siswa === --}}

                <div class="detail-inform w-full bg-[#FED2D9] rounded-lg border-2 border-[#FEAEAEFF] p-5 relative">
                    <h1 class="poppins-bold lg:text-2xl text-[#75081AFF]">Unggah Dokumentasi ke Google Drive auto atau manual</h1>
                    <button id="unggah" class="bg-[#FB9595FF] hover:scale-105 transtion-all hover:bg-[#F86B6BFF]  text-[#75081AFF] px-5 py-2 text-center mt-4 rounded-[24px]">Dokumentasi</button>
                    <script>
                        document.getElementById('unggah').addEventListener('click', function() {
                        var submitButtonUnggah = document.getElementById('unggah'); // Mendapatkan tombol
                        submitButtonUnggah.innerHTML = '<i class="fas fa-spinner fa-spin"></i>&nbsp;&nbsp;Loading'; 
                        submitButtonUnggah.disabled = true; 
                            setTimeout(function() {
                                submitButtonUnggah.innerHTML = 'Dokumentasi';
                                submitButtonUnggah.disabled = false;
                                window.location.href = "{{ route('drive',['id' => $getScheduleTrainer->id_schedules])}}"; 
                            }, 2000); 
                        });
                    </script>
                </div>
               
                <iframe class="w-full h-full rounded-lg"
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12080.73732861526!2d-74.0059418!3d40.7127847!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zM40zMDA2JzEwLjAiTiA3NMKwMjUnMzcuNyJX!5e0!3m2!1sen!2sus!4v1648482801994!5m2!1sen!2sus"
                frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                </iframe>
            </div>  

            {{-- === formulir laporan === --}}
            <form id="postLaporan" action="{{ '/laporantrainer/prossess/' . $getScheduleTrainer->id_schedules }}" method="POST" data-aos="fade-up">
                @csrf
                {{-- === laporan fitur === --}}
                <div class="content-form">
                    <div class="input-laporan lg:flex-row md:flex-row flex flex-col  justify-between items-center space-y-4 md:space-y-0 md:space-x-4">
                        <!-- Select 1 -->
                        <div class="select-1 w-full md:w-1/2">
                            <select name="materi" id="materi1" class="w-full p-2 border border-gray-300 rounded-md focus:ring focus:ring-indigo-300 focus:border-indigo-500" required>
                                <option value="">Pilih Materi Anda</option>
                                @foreach ($getDataMateri as $materi )
                                <option value="{{$materi->id}}">{{$materi->materi}}</option>
                                @endforeach
                            </select>
                        </div>
                    
                        <!-- Select 2 -->
                        <div class="select-2 w-full md:w-1/2">
                            <select name="id_ttd" id="materi2" class="w-full p-2 border border-gray-300 rounded-md focus:ring focus:ring-indigo-300 focus:border-indigo-500" required>
                                    <option value="">Pilih Tanda Tangan Anda</option>
                               @foreach ($getDataTrainer as $trainer )
                                    <option value="{{ $trainer->ttd }}">{{ $trainer->nama }}</option>
                               @endforeach
                                <!-- Add more options if needed -->
                            </select>
                        </div>
                    </div>

                    <div class="box-area py-5">
                        <textarea id="catatan" name="catatan" class="w-full  p-4 border border-gray-300 rounded-md " id="laporan" placeholder="Tulis laporan di sini... (Respone anak , Kendala yang dihadapi dan lainnya)" required></textarea>
                    </div>
                </div>
                {{-- === button absen === --}}
                <div class="content-button">
                    @if ($getScheduleTrainer->absensi_anak == 'tutup')
                        <button id="prossesSubmit" type="submit" class="bg-[#FBDC5C] text-[#5B4A07] w-full text-center py-4 rounded-2xl hover:scale-105 transition-all ">Selesai Absensi</button>
                    @else
                         <div disabled type="button" class="bg-[#FB5C5CFF] text-[#FFFFFFFF] w-full text-center py-4 rounded-2xl transition-all ">Belum Terbuka</div>
                    @endif
                </div>
                <script>

                    document.getElementById('postLaporan').addEventListener('submit', function() {
                        event.preventDefault();
                        const buttonSubmitL = document.getElementById('prossesSubmit');
                        buttonSubmitL.innerHTML = '<i class="fas fa-spinner fa-spin"></i>&nbsp;&nbsp;Loading'; 
                        buttonSubmitL.disabled = true; 
                        setTimeout(function() {
                                buttonSubmitL.innerHTML = 'Selesai Absensi';
                                buttonSubmitL.disabled = false;
                                document.getElementById('postLaporan').submit();
                            }, 2000); 
                    });


                    data.jadwals.forEach(jadwal => {
                    jadwalContainer.innerHTML += `
                        <div class="jadwal-item">
                            <p>${jadwal.nama}</p>
                            <p>${jadwal.waktu}</p>
                        </div>
                    `;
                    });
                </script>
            </form>
          
    </div>
  
</section>
@endsection
