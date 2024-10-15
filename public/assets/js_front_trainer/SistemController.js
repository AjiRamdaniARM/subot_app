// === sistem loading === //
document.getElementById('prosses').addEventListener('click', function() {
    const submitbuttonprosses = document.getElementById('prosses');

    submitbuttonprosses.innerHTML ='<i class="fas fa-spinner fa-spin"></i>&nbsp;&nbsp;Loading';
    
    submitbuttonprosses.disabled = true;
    setTimeout(function() {
        submitbuttonprosses.innerHTML = 'Selesai Absensi';
        submitbuttonprosses.disabled = false;
    },500);
})
