@extends('trainer.layouts.main')
@section('children')
<section class="ab_siswa">
    <form action="{{ '/absensiswa/prossess/' . $getDataSchedules->id }}" id="attendanceForm" method="POST">
    @csrf
        <div data-aos="fade-down" class="bg-white px-2 lg:px-0 py-4">
            <div class="banner-page_kids bg-[#CEEEF0] border-2 border-[#90C0FFFF] rounded-lg px-[40px] lg:px-[50px] py-5">
                <div class="content-banner flex justify-between items-center">
                    <div class="font">
                        <h1 class="poppins-regular">Absensi Siswa</h1>
                        <h6 class="lg:text-3xl text-[18px] poppins-bold lg:w-80">Sukarobot Academy</h6>
                        <button type="submit" id="submitButton" class="bg-[#5CADFFFF] hover:scale-105 rounded-[15px] relative mt-3 px-5 py-3 text-white font-bold">Selesai Absensi</button>
                    </div>
                    <div class="img">
                        <img class="w-80 lg:block md:hidden hidden" src="{{asset('assets/img/undraw_children_re_c37f.svg')}}" alt="illustrasi">
                    </div>
                </div>
            </div>
                <div class="list_siswa relative py-10">
                    @foreach ($getDataStudent as $siswa)
                        <div class="p-3 flex items-center justify-between border-t cursor-pointer hover:bg-gray-200">
                            <div class="flex items-center">
                                <img class="rounded-full object-cover h-10 w-10" src="{{ asset('assets/data/dataAnak/img/' . $siswa->file) }}">
                                <div class="ml-2 flex flex-col">
                                    <div class="leading-snug text-sm text-gray-900 font-bold">{{$siswa->nama_lengkap}}</div>
                                    <div class="leading-snug text-xs text-gray-600">{{$siswa->kelas}}</div>
                                </div>
                            </div>
                            <div class="button-gp">
                                <div class="grid w-[10rem] grid-cols-2 gap-2 p-2">
                                    <div>
                                        <input type="radio" name="attendance[{{ $siswa->id }}]" id="hadir-{{ $siswa->id }}" value="hadir" class="peer hidden" required />
                                        <label for="hadir-{{ $siswa->id }}" 
                                            class="block cursor-pointer select-none rounded-full p-2 text-center border border-gray-300 
                                                    peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white">
                                            Hadir
                                        </label>
                                    </div>
                                    <div>
                                        <input type="radio" name="attendance[{{ $siswa->id }}]" id="tidak-hadir-{{ $siswa->id }}" value="tidak hadir" class="peer hidden" required />
                                        <label for="tidak-hadir-{{ $siswa->id }}" 
                                            class="block cursor-pointer select-none rounded-full p-2 text-center border border-gray-300 
                                                    peer-checked:bg-red-500 peer-checked:font-bold peer-checked:text-white">
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                                {{-- <input type="radio" value="hadir" id='hadir{{ $siswa->id }}' name="attendance[{{ $siswa->id }}]" hidden>
                                <button id="btn-hadir{{ $siswa->nama_lengkap }}"
                                    class="h-8 px-3 text-md font-bold text-blue-400 border border-blue-400 rounded-full hover:bg-blue-100" type="button" onclick="setAttendance('{{ $siswa->id }}')" >
                                    Hadir
                                </button>
                                <button id="btn-tidak-hadir{{ $siswa->nama_lengkap }}" type="button" name="attendance[{{ $siswa->id }}]"
                                    class="h-8 px-3 text-md font-bold text-red-400 border border-red-400 rounded-full hover:bg-red-100">
                                    Tidak Hadir
                                </button> --}}
                            </div>                    
                        </div>
                    @endforeach
                </div>
        </div>
    </form>
</section>

    

 
@endsection
