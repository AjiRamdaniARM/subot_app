@extends('trainer.layouts.main')
@section('children')
<section>
    <div class="container">
        <div class="banner">
            <img class="rounded-lg lg:h-80  object-cover w-full" src="{{asset('assets/img/Coming.gif')}}" alt="image-banner" />
        </div>
            <div data-aos="fade-up" class="card-one py-10 grid grid-flow-dense lg:grid-cols-2 gap-4 lg:grid-rows-2 grid-cols-1 grid-rows-1">
                <div class="detail-inform w-full bg-[#FBDC5C] rounded-lg border-2 border-[#FBBB5CFF] p-5 relative">
                    <div class="mini-alert bg-[#EEAA17FF] text-[15px] p-1 text-white poppins-regular absolute top-3 right-3 w-20 rounded-[24px] text-center">
                        24 Jam
                    </div>
                    <h1 class="poppins-bold lg:text-2xl text-[20px]">Informasi Jadwal</h1>
                    <p class="poppins-regular text-gray-800 text-[15px]">Kamis, 20 Juni 2024, 15:30 - 17:00</p>
                    <p class="poppins-semibold text-black">SDK BPK PENABUR </p>
                    <p class="poppins-regular text-[15px] text-gray-800">Lego Wedo 2.0 , Robotik , Beginner 2 </p>
                </div>
                <div class="tab border rounded-lg border-gray-500">
                    <div class="text-head px-5 mt-3 flex justify-between items-center">
                        <h1 class="poppins-bold ">Daftar Siswa</h1>
                        <button id="absensi" onclick="window.location.href='{{route('ab_siswa')}}'" class="bg-[#1A1A34] text-white rounded-[24px] px-3 py-1 hover:scale-105 transition-all bg-[#2E2E4BFF]">Absensi Siswa</button>
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
                    <table class="table-auto  w-full border-collapse mt-6">
                        <thead class="text-xs font-semibold uppercase text-gray-600 bg-gray-50">
                            <tr>
                                <th class="p-2">No</th>
                                <th class="p-2">Nama</th>
                                <th class="p-2">Kelas</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm divide-y divide-gray-100" >
                            <tr>
                                <td class="p-2  text-center">1</td>
                                <td class="p-2 ">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 flex-shrink-0 mr-3">
                                            <img class="rounded-full" src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-05.jpg" width="40" height="40" alt="Alex Shatov">
                                        </div>
                                        <div class="font-medium text-gray-800">Alex Shatov</div>
                                    </div>
                                </td>
                                <td class="p-2  text-center">12 SMK</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="detail-inform w-full bg-[#FED2D9] rounded-lg border-2 border-[#FEAEAEFF] p-5 relative">
                    <h1 class="poppins-bold">Unggah Dokumentasi ke Google Drive auto atau manual</h1>
                    <button id="unggah" class="bg-[#FB9595FF] hover:scale-105 transtion-all hover:bg-[#F86B6BFF]  text-white px-5 py-2 text-center mt-4 rounded-[24px]">Dokumentasi</button>
                    <script>
                        document.getElementById('unggah').addEventListener('click', function() {
                        var submitButtonUnggah = document.getElementById('unggah'); // Mendapatkan tombol
                        submitButtonUnggah.innerHTML = '<i class="fas fa-spinner fa-spin"></i>&nbsp;&nbsp;Loading'; 
                        submitButtonUnggah.disabled = true; 
                            setTimeout(function() {
                                submitButtonUnggah.innerHTML = 'Dokumentasi';
                                submitButtonUnggah.disabled = false;
                                window.location.href = "{{route('drive')}}"; 
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
            <form id="postLaporan" data-aos="fade-up">
                {{-- === laporan fitur === --}}
                <div class="container">
                    <div class="input-laporan lg:flex-row md:flex-row flex flex-col  justify-between items-center space-y-4 md:space-y-0 md:space-x-4">
                        <!-- Select 1 -->
                        <div class="select-1 w-full md:w-1/2">
                            <select name="materi1" id="materi1" class="w-full p-2 border border-gray-300 rounded-md focus:ring focus:ring-indigo-300 focus:border-indigo-500">
                                <option value="">Pilih Materi Anda</option>
                                <!-- Add more options if needed -->
                            </select>
                        </div>
                    
                        <!-- Select 2 -->
                        <div class="select-2 w-full md:w-1/2">
                            <select name="materi2" id="materi2" class="w-full p-2 border border-gray-300 rounded-md focus:ring focus:ring-indigo-300 focus:border-indigo-500">
                                <option value="">Pilih Tanda Tangan Anda</option>
                                <option value="coding">Coding</option>
                                <!-- Add more options if needed -->
                            </select>
                        </div>
                    </div>

                    <div class="box-area py-5">
                        <textarea name="laporan" class="w-full  p-4 border border-gray-300 rounded-md " id="laporan" placeholder="Tulis laporan di sini..."></textarea>
                    </div>
                </div>
                {{-- === button absen === --}}
                <div class="container">
                    <button id="prosses" class="bg-blue-500 text-white w-full text-center py-4 rounded-2xl hover:scale-105 transition-all hover:bg-gray-800">Selesai Absensi</button>
                </div>
            </form>
          
    </div>
</section>
@endsection
