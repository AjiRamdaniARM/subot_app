

{{-- === component table === --}}
<div class="container mx-auto p-4 lg:block hidden">
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow-md rounded-lg">
            <thead>
                <tr class="bg-[#0E2C75] text-white rounded-2xl">
                    <th class="py-4 px-6 text-left text-sm font-semibold uppercase">No</th>
                    <th class="py-4 px-6 text-left text-sm font-semibold uppercase">Private / Sekolah</th>
                    <th class="py-4 px-6 text-left text-sm font-semibold uppercase">Level</th>
                    <th class="py-4 px-6 text-left text-sm font-semibold uppercase">Hari</th>
                    <th class="py-4 px-6 text-left text-sm font-semibold uppercase">Tanggal Mengajar</th>
                    <th class="py-4 px-6 text-left text-sm font-semibold uppercase">Detail</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($query as $key)
                {{-- === component modal === --}}
                    @include('trainer.pages.laporanTrainer.partials.modalDetail')
                {{-- === end component modal === --}}
                    <tr class="hover:bg-gray-100 border-b">
                        <td class="py-4 px-6 text-gray-700">
                            {{ ($query->currentPage() - 1) * $query->perPage() + $loop->iteration }}
                        </td>
                        <td class="py-4 px-6 text-gray-700">
                            {{ $key->kelas_name ?? 'Tidak Ada Data' }}
                        </td>
                        <td class="py-4 px-6 text-gray-700">
                            {{ $key->level_name ?? 'Tidak Ada Data' }}
                        </td>
                        <td class="py-4 px-6 text-gray-700">
                            <span class="bg-yellow-400 py-2 px-5 rounded-lg">{{ $key->hari ?? '-' }}</span>
                        </td>
                        <td class="py-4 px-6 text-gray-700">
                            {{ $key->tanggal_jd ? \Carbon\Carbon::parse($key->tanggal_jd)->translatedFormat('d F Y') : '-' }}
                        </td>
                        <td class="py-4 px-6 text-gray-700">
                            <button onclick="document.getElementById('modal-laporan-detail-{{ $key->id_schedules }}').showModal();" class="bg-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="py-4 px-6 text-gray-700">
                            Tidak menemukan data pencarian
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        
        <div class="mt-4">
            {{ $query->links('vendor.pagination.tailwind-custom') }}
        </div>
    </div>
</div>
{{-- === end component table === --}}

{{-- === component card mobile === --}}
<div class="lg:hidden block flex flex-col gap-5">
    <div class="container c-card ">
        <div class="max-w-2xl mx-auto bg-[#074177FF] shadow-lg rounded-lg">
            <div class="px-6 py-5">
                <div class="flex items-start">
                   <img src="{{ asset('assets/trainerImages/images/3d-report.png')}}" width="30" height="30" alt="icon-3d" >
                   &nbsp;
                    <div class="flex-grow truncate">
                        <div class="w-full sm:flex justify-between items-center mb-3">
                            <h2 class="text-2xl leading-snug font-extrabold text-gray-50 truncate mb-1 sm:mb-0">TK BPK PENABUR</h2>
                        </div>
                        <div class="flex items-end justify-between whitespace-normal">
                            <div class="max-w-md text-indigo-100">
                                <p class="mb-2">Lorem ipsum dolor sit amet</p>
                            </div>
                            <a class="flex-shrink-0 flex items-center justify-center text-indigo-600 w-10 h-10 rounded-full bg-gradient-to-b from-indigo-50 to-indigo-100 hover:from-white hover:to-indigo-50 focus:outline-none focus-visible:from-white focus-visible:to-white transition duration-150 ml-2" href="#0">
                                <span class="block font-bold"><span class="sr-only">Read more</span> -></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container c-card">
        <div class="max-w-2xl mx-auto bg-[#074177FF] shadow-lg rounded-lg">
            <div class="px-6 py-5">
                <div class="flex items-start">
                   <img src="{{ asset('assets/trainerImages/images/3d-report.png')}}" width="30" height="30" alt="icon-3d" >
                   &nbsp;
                    <div class="flex-grow truncate">
                        <div class="w-full sm:flex justify-between items-center mb-3">
                            <h2 class="text-2xl leading-snug font-extrabold text-gray-50 truncate mb-1 sm:mb-0">PRIVATE CENTER</h2>
                        </div>
                        <div class="flex items-end justify-between whitespace-normal">
                            <div class="max-w-md text-indigo-100">
                                <p class="mb-2">Lorem ipsum dolor sit amet</p>
                            </div>
                            <a class="flex-shrink-0 flex items-center justify-center text-indigo-600 w-10 h-10 rounded-full bg-gradient-to-b from-indigo-50 to-indigo-100 hover:from-white hover:to-indigo-50 focus:outline-none focus-visible:from-white focus-visible:to-white transition duration-150 ml-2" href="#0">
                                <span class="block font-bold"><span class="sr-only">Read more</span> -></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

