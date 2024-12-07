<!-- jquery -->
<script src="{{ asset('assets/trainerCss/css/jquery-ui.min.css') }}"></script>

<!-- bootstrap -->
<script src="{{ asset('assets/trainerCss') }}"></script>

<!-- jquery ui -->
<script src="{{ asset('assets/trainerCss/css/jquery-ui.min.css') }}"></script>

<!-- mixitup -->
<script src="{{ asset('assets/trainerJs/js/mixitup.min.js') }}"></script>

<!-- gasp -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/gsap.min.js"></script>

<!-- draggable -->
<script src="Draggable.min.js"></script>

<!-- swiper -->
<script src="{{ asset('assets/trainerJs/js/swiper-bundle.min.js') }}"></script>

<!-- datepicker -->
<script src="{{ asset('assets/trainerJs/js/jquery.datetimepicker.full.js') }}"></script>

<!-- google-map api -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCodvr4TmsTJdYPjs_5PWLPTNLA9uA4iq8&callback=initMap"
    type="text/javascript"></script>

<script src="{{ asset('assets/trainerJs/js/script.js') }}"></script>
<script src="{{ asset('assets/trainerJs/js/bootstrap.bundle.min.js') }}"></script>
<script>
  const menuBtn = document.getElementById('menu-btn');
  const mobileSidebar = document.getElementById('mobile-sidebar');

  menuBtn.addEventListener('click', () => {
      mobileSidebar.classList.toggle('-translate-x-full');
  });
</script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<script src="{{asset('assets/js_front_trainer/SistemController.js')}}"></script>
{{-- === sistem button js button done === --}}
<script>
    function button_done() {
        const ButtonDone = document.getElementById('button-done'); 
        ButtonDone.innerHTML = '<i class="fas fa-spinner fa-spin"></i>&nbsp;&nbsp;Loading';
        ButtonDone.disabled = true;
        
        // Perbaikan setTimeout function
        setTimeout(function() {
            ButtonDone.disabled = false;
            ButtonDone.innerHTML = 'Selesai Absensi';
        }, 3000); // 3000 ms = 3 detik (ubah sesuai kebutuhan)
    }
</script>
<script>
    const jadwalRoute = "{{ route('filter.jadwal') }}"; 
    const csrfToken = '{{ csrf_token() }}'; 
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{asset('storage/Nav_js/routerNav.js')}}"></script>      
<script src="{{asset('storage/s_js/s_ab.js')}}"></script>      
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.3/dist/cdn.min.js"></script>