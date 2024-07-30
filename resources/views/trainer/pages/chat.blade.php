@extends('trainer.layouts.main')
@section('children')

  <main class="chat">
    <!-- page-title -->
    <div class="page-title">
      <button type="button" onclick="window.location.href='{{ url('/pesan') }}'" class="back-btn back-page-btn d-flex align-items-center justify-content-center rounded-full">
        <img src="{{ asset('assets/trainerSvg/svg/arrow-left-black.svg') }}" alt="arrow">
      </button>
      <h3 class="main-title">Richar Kandowen</h3>
      {{-- <div class="dropdown">
        <button type="button" class="more-btn d-flex align-items-center justify-content-center rounded-full" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="{{ asset('assets/trainerSvg/svg/more.svg') }}" alt="arrow">
        </button>
        <ul class="dropdown-menu">
          <li>
            <a class="dropdown-item" href="audio-call.html">
              <img src="{{ asset('assets/trainerSvg/svg/voice-call.svg') }}" alt="call">
              Voice Call
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="video-call.html">
              <img src="{{ asset('assets/trainerSvg/svg/video-call.svg') }}" alt="video">
              Video Call
            </a>
          </li>
        </ul>
      </div> --}}
    </div>

    <!-- inbox start -->
    <section class="inbox px-24">
      <ul>
        <li class="left d-flex gap-12">
          <div class="avatar position-relative">
            <img src="../../assets/images/chat/img-1.png" alt="Avatar" class="w-100 img-fluid h-100 object-fit-cover rounded-full">
            <span class="active-dot rounded-full d-inline-block"></span>
          </div>

          <div class="text">
            <p class="msg">Lorem ipsum dolor sit et, consectetur adipiscing.</p>
            <p class="time pt-04">15:42 PM</p>
          </div>
        </li>

        <li class="right d-flex flex-row-reverse gap-12">
          <div class="avatar position-relative">
            <img src="../../assets/images/chat/img-1.png" alt="Avatar" class="w-100 img-fluid h-100 object-fit-cover rounded-full">
            <span class="active-dot rounded-full d-inline-block"></span>
          </div>

          <div class="text">
            <p class="msg">Lorem ipsum dolor sit et, consectetur adipiscing.</p>
            <p class="time pt-04">15:42 PM</p>
          </div>
        </li>

        <li class="left d-flex gap-12">
          <div class="avatar position-relative">
            <img src="../../assets/images/chat/img-1.png" alt="Avatar" class="w-100 img-fluid h-100 object-fit-cover rounded-full">
            <span class="active-dot rounded-full d-inline-block"></span>
          </div>

          <div class="text">
            <p class="msg">Lorem ipsum dolor sit et, consectetur adipiscing.</p>
            <p class="time pt-04">15:42 PM</p>
          </div>
        </li>

        <li class="left d-flex gap-12">
          <div class="avatar position-relative">
            <img src="../../assets/images/chat/img-1.png" alt="Avatar" class="w-100 img-fluid h-100 object-fit-cover rounded-full">
            <span class="active-dot rounded-full d-inline-block"></span>
          </div>

          <div class="text">
            <p class="msg">Lorem ipsum dolor sit et, consectetur adipiscing.</p>
            <p class="time pt-04">15:42 PM</p>
          </div>
        </li>

        <li class="right d-flex flex-row-reverse gap-12">
          <div class="avatar position-relative">
            <img src="../../assets/images/chat/img-1.png" alt="Avatar" class="w-100 img-fluid h-100 object-fit-cover rounded-full">
            <span class="active-dot rounded-full d-inline-block"></span>
          </div>

          <div class="text">
            <p class="msg">Lorem ipsum dolor sit et, consectetur adipiscing.</p>
            <p class="time pt-04">15:42 PM</p>
          </div>
        </li>
        <li class="left d-flex gap-12">
          <div class="avatar position-relative">
            <img src="../../assets/images/chat/img-1.png" alt="Avatar" class="w-100 img-fluid h-100 object-fit-cover rounded-full">
            <span class="active-dot rounded-full d-inline-block"></span>
          </div>

          <div class="text">
            <p class="msg">Lorem ipsum dolor sit et, consectetur adipiscing.</p>
            <p class="time pt-04">15:42 PM</p>
          </div>
        </li>

        <li class="right d-flex flex-row-reverse gap-12">
          <div class="avatar position-relative">
            <img src="../../assets/images/chat/img-1.png" alt="Avatar" class="w-100 img-fluid h-100 object-fit-cover rounded-full">
            <span class="active-dot rounded-full d-inline-block"></span>
          </div>

          <div class="text">
            <p class="msg">Lorem ipsum dolor sit et, consectetur adipiscing.</p>
            <p class="time pt-04">15:42 PM</p>
          </div>
        </li>
      </ul>
    </section>
    <!-- inbox end -->

    <!-- type-msg start -->
    <section class="type-msg">
      <form action="#">
        <div class="d-flex align-items-center gap-8 type-main">
          <label for="input-file" class="input-file-label shrink-0">
            <input type="file" id="input-file">
            <span class="d-flex align-items-center justify-content-center rounded-full">
              <img src="{{ asset('assets/trainerSvg/svg/paperclip.svg') }}" alt="icon">
            </span>
          </label>

          <input type="text" placeholder="Message" class="flex-grow input-msg">

          <button type="button" class="d-flex align-items-center justify-content-center rounded-full shrink-0">
            <img src="{{ asset('assets/trainerSvg/svg/send.svg') }}" alt="icon">
          </button>
        </div>
      </form>
    </section>
    <!-- type-msg end -->

  </main>
</body>
@endsection