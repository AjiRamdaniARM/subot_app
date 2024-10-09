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


<!-- script -->
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