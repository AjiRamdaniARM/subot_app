@extends('trainer.layouts.main')
@section('children')


<body class="scrollbar-hidden">

  <main class="details hotel-details">
    <!-- banner start -->
    <section class="banner position-relative">
      <img src="{{ asset('assets/img/Ochobot aesthetic.jpeg') }}" alt="Banner" class="w-100 img-fluid">
      
      <!-- title -->
      <div class="page-title">
        <button type="button" onclick="window.location.href='{{ url('/home') }}'" class="back-btn back-page-btn d-flex align-items-center justify-content-center rounded-full">
          <img src="{{ asset('assets/trainerSvg/svg/arrow-left-black.svg') }}" alt="arrow">
        </button>
        <h3 class="main-title">SD IT ADZKIA 2</h3>
      </div>
    </section>
    <!-- banner end -->

    <!-- details-body start -->
    <section class="details-body">
      <!-- details-title -->
      <section class="d-flex align-items-center gap-8 details-title">
        <div class="flex-grow">
          <h3>SD IT ADZKIA 2</h3>
          <ul class="d-flex align-items-center gap-8">
            <li class="d-flex align-items-center gap-04">
              <img src="{{ asset('assets/trainerSvg/svg/map-marker.svg') }}" alt="icon">
              <p>08.00 - 10.00</p>
            </li>
            <li class="d-flex align-items-center gap-04">
              <p><span></span>BASIC 2</p></span>
            </li>
          </ul>
        </div>
      </section>

      <section class="guide py-12">
     
        <div class="title d-flex align-items-center justify-content-between">
          <h2 class="shrink-0">Siswa</h2>
          <a href="{{ url('/absensiswa') }}" class="shrink-0 d-inline-block">See All</a>
        </div>
  
       
        <div class="d-flex gap-24 all-cards scrollbar-hidden">
       
          <a href="profile/guide-profile.html" class="d-flex gap-16 item w-fit shrink-0">
            <div class="image position-relative shrink-0">
              <img src="https://i.pinimg.com/564x/7f/14/52/7f1452c4919187361a89b61c4fd7011c.jpg" alt="guide" class="guide-img object-fit-cover img-fluid radius-12">
            </div>
  
            <div class="content">
              <h4>Aji Ramdani</h4>
              <h5>Kelas 3A</h5>
              <p class="d-flex align-items-center gap-8 location">
                Basic 1
              </p>
            </div>
          </a>
  
       
          <a href="profile/guide-profile.html" class="d-flex gap-16 item w-fit shrink-0">
            <div class="image position-relative shrink-0">
              <img src="https://i.pinimg.com/564x/7f/14/52/7f1452c4919187361a89b61c4fd7011c.jpg" alt="guide" class="guide-img object-fit-cover img-fluid radius-12">
            </div>
  
            <div class="content">
              <h4>Aziz Ramadhan</h4>
              <h5>Kelas 3A</h5>
              <p class="d-flex align-items-center gap-8 location">
                Basic 1
              </p>
            </div>
          </a>
  
        </div>
      </section>

      <!-- reviews start -->
      <section class="reviews py-16">
        <!-- title -->
        <div class="title d-flex align-items-center justify-content-between">
          <h4 class="shrink-0">DOCUMENTASI</h4>
        </div>

        <div class="container mt-5">
          <div class="card">
            <div class="card-body">
              <div id="drop-area" class="border rounded d-flex justify-content-center align-items-center"
                  style="height: 200px; cursor: pointer;">
                <div class="text-center">
                  <i class="bi bi-cloud-arrow-up-fill text-primary" style="font-size: 48px;"></i>
                  <p class="mt-3" id="drop-text">Drag and drop your image here or click to select a file.</p>
                  <p id="file-info" class="file-info"></p> <!-- Container untuk menampilkan keterangan file -->
                </div>
              </div>
              <input type="file" id="fileElem" multiple accept="image/*" class="d-none">
            </div>
          </div>
        </div>
        
        <style>
          .highlight {
            border-color: #007bff !important; /* Warna border saat highlight */
          }
        
          .file-info {
            color: #28a745; /* Warna teks untuk keterangan file */
            font-weight: bold;
            margin-top: 10px;
          }
        </style>
        
        <script>
          let dropArea = document.getElementById("drop-area");
          let dropText = document.getElementById("drop-text");
          let fileInfo = document.getElementById("file-info");
        
          ["dragenter", "dragover", "dragleave", "drop"].forEach((eventName) => {
            dropArea.addEventListener(eventName, preventDefaults, false);
            document.body.addEventListener(eventName, preventDefaults, false);
          });
        
          ["dragenter", "dragover"].forEach((eventName) => {
            dropArea.addEventListener(eventName, highlight, false);
          });
        
          ["dragleave", "drop"].forEach((eventName) => {
            dropArea.addEventListener(eventName, unhighlight, false);
          });
        
          dropArea.addEventListener("drop", handleDrop, false);
        
          function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
          }
        
          function highlight(e) {
            dropArea.classList.add("highlight");
          }
        
          function unhighlight(e) {
            dropArea.classList.remove("highlight");
          }
        
          function handleDrop(e) {
            let dt = e.dataTransfer;
            let files = dt.files;
            handleFiles(files);
          }
        
          function handleFiles(files) {
            [...files].forEach(uploadFile);
          }
        
          function uploadFile(file) {
            console.log("Uploading", file.name);
            
            // Tampilkan nama file di area file-info
            fileInfo.textContent = `File selected: ${file.name}`;
            dropText.style.display = 'none'; // Sembunyikan teks drag and drop setelah file dipilih
          }
        
          dropArea.addEventListener("click", () => {
            fileElem.click();
          });
        
          let fileElem = document.getElementById("fileElem");
          fileElem.addEventListener("change", function (e) {
            handleFiles(this.files);
          });
        </script>
        

      <!-- location start -->
      <section class="details-location pt-16">
        <!-- title -->
        <div class="title">
          <h4>Location</h4>
        </div>

        <!-- map -->
        <div class="overflow-hidden radius-16 map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d846588.5514550178!2d-118.35899906676545!3d34.01855672774309!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1701149305360!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </section>
      <!-- location end -->
    </section>
    <!-- details-body end -->

    <!-- details-footer start -->
    <section class="details-footer d-flex align-items-center justify-content-between gap-8 w-100">
      <p><span>24 Jam !</span></p>
      <a href="{{ url('/laporantrainer') }}">Continue</a>
    </section>
    <!-- details-footer end -->
  </main>

  <!-- service modal start -->
  <div class="modal fade serviceModal bottomModal modalBg" id="serviceModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="modal-close rounded-full" data-bs-dismiss="modal" aria-label="Close">
            <img src="../assets/svg/close-black.svg" alt="Close">
          </button>
          <h1 class="modal-title">All Facilities</h1>
        </div>
        <div class="modal-body">
          <div class="facilities">
            <div class="grid gap-24">
              <!-- item 1 -->
              <div class="item text-center">
                <div class="icon d-flex align-items-center justify-content-center rounded-full">
                  <img src="../assets/svg/wind.svg" alt="icon">
                </div>
                <p>Ac</p>
              </div>

              <!-- item 2 -->
              <div class="item text-center">
                <div class="icon d-flex align-items-center justify-content-center rounded-full">
                  <img src="../assets/svg/building.svg" alt="icon">
                </div>
                <p>Restaurant</p>
              </div>

              <!-- item 3 -->
              <div class="item text-center">
                <div class="icon d-flex align-items-center justify-content-center rounded-full">
                  <img src="../assets/svg/water.svg" alt="icon">
                </div>
                <p>Swimming Pool</p>
              </div>

              <!-- item 4 -->
              <div class="item text-center">
                <div class="icon d-flex align-items-center justify-content-center rounded-full">
                  <img src="../assets/svg/24-support.svg" alt="icon">
                </div>
                <p>24-Hours Front Desk</p>
              </div>

              <!-- item 4 -->
              <div class="item text-center">
                <div class="icon d-flex align-items-center justify-content-center rounded-full">
                  <img src="../assets/svg/building.svg" alt="icon">
                </div>
                <p>Modern Room</p>
              </div>

              <!-- item 2 -->
              <div class="item text-center">
                <div class="icon d-flex align-items-center justify-content-center rounded-full">
                  <img src="../assets/svg/24-support.svg" alt="icon">
                </div>
                <p>24-Hours Security</p>
              </div>

              <!-- item 3 -->
              <div class="item text-center">
                <div class="icon d-flex align-items-center justify-content-center rounded-full">
                  <img src="../assets/svg/water.svg" alt="icon">
                </div>
                <p>Beautiful View</p>
              </div>

              <!-- item 4 -->
              <div class="item text-center">
                <div class="icon d-flex align-items-center justify-content-center rounded-full">
                  <img src="../assets/svg/wind.svg" alt="icon">
                </div>
                <p>Open Space</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

</body>

@endsection