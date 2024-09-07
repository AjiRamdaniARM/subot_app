<script>
    document.getElementById('filter-form').addEventListener('submit', function(e) {
        const button = document.getElementById('filter-button');

        // Ubah teks tombol dan tambahkan kelas loading
        button.innerHTML = '<i class="fas fa-spinner fa-spin"></i>&nbsp;&nbsp;Loading...';
        button.classList.add('loading');

        // Nonaktifkan tombol agar tidak bisa diklik lagi
        button.disabled = true;

        // Simulasi pengiriman form untuk keperluan demo (hapus atau sesuaikan sesuai kebutuhan)
        setTimeout(function() {
            button.textContent = 'Filter';
            button.classList.remove('loading');
            button.disabled = false; // Mengaktifkan kembali tombol setelah selesai
        }, 3000); // Hapus ini saat menggunakan proses submit asli
    });
</script>
<script>
    document.getElementById('custom-laporan-btn').addEventListener('click', function(event) {
        // Mencegah default action sementara
        event.preventDefault();

        // Ganti teks tombol menjadi "Loading..." dan tambahkan ikon animasi
        this.innerHTML = '<i class="fas fa-spinner fa-spin"></i>&nbsp;&nbsp;Loading...';

        // Opsional: Menonaktifkan tombol selama proses loading
        this.style.pointerEvents = 'none';

        // Redirect ke route setelah sedikit delay untuk demo (opsional)
        setTimeout(() => {
            window.location.href = this.href;
        }, 500);
    });
</script>

<script>
    document.getElementById('uploadForm').addEventListener('submit', function(event) {
</script>
