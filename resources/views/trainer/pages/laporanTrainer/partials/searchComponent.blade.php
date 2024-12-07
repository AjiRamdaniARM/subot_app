<div class="container w-full  grid lg:grid-cols-2 grid-cols-1  justify-between items-center">
    <div class="button-component">
        <button class="bg-[#FACC15] hover:bg-[#D8AF0AFF] lg:w-44 w-full py-3 lg:rounded-[24px] rounded-[16px] poppins-semibold">Export Laporan</button>
    </div>
    <div class="w-full mx-auto rounded-lg overflow-hidden ">
        <div class="md:flex">
            <div class="w-full py-4">
              <div class="relative">
                <i class="absolute fa fa-search text-gray-400 top-5 left-4"></i>
                <input type="text" id="searchInput" class="bg-white border border-2 h-14 w-full px-12 rounded-[24px] focus:outline-none hover:cursor-pointer" name="">
                <span class="absolute top-4 right-5 border-l pl-4"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                  </svg>
                  </span>
              </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#searchInput').on('keyup', function() {
            let query = $(this).val();
            $.ajax({
                url: "{{ route('laporan.menu') }}",
                method: 'GET',
                data: { search: query },
                success: function(response) {
                    $('#laporanTableContainer').html(response);
                },
                error: function() { 
                    alert('Terjadi kesalahan saat mengambil data.');
                }
            });
        });
    });
</script>
 