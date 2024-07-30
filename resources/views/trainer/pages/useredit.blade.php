@extends('trainer.layouts.main')
@section('children')

<body class="scrollbar-hidden">

  <main>
    <!-- page-title -->
    <div class="page-title">
      <button type="button" onclick="window.location.href='{{ url('user') }}'" class="back-btn back-page-btn d-flex align-items-center justify-content-center rounded-full">
        <img src="{{ asset('assets/trainerSvg/svg/arrow-left-black.svg') }}" alt="arrow">
      </button>
      <h3 class="main-title">Profile</h3>
    </div>

    <!-- profile-image start -->
    <section class="profile-image py-16">
      <div class="image">
        <img src="{{ asset('assets/img/robot.png') }}" alt="avatar" class="w-100 h-100 object-fit-cover img-fluid rounded-full">
        <button type="button" class="d-flex align-items-center justify-content-center rounded-full" data-bs-toggle="modal" data-bs-target="#editImageModal">
          <img src="{{ asset('assets/trainerSvg/svg/edit-white.svg') }}" alt="icon">
        </button>
      </div>
    </section>
    <!-- profile-image end -->

    <!-- profile-info start -->
    <section class="user-info px-24">
      <div class="mb-16">
        <label class="input-label">First Name</label>
        <input type="text" placeholder="First Name" value="Aziz" class="input">
      </div>
      <div class="mb-16">
        <label class="input-label">Last Name</label>
        <input type="text" placeholder="Last Name" value="Ramadhan" class="input">
      </div>
      <div class="mb-16">
        <label class="input-label">E-mail</label>
        <input type="email" placeholder="E-mail" value="azizramadhan5000@gmail.com" class="input">
      </div>
      <div class="mb-16">
        <label class="input-label">Date of Birth</label>
        <div class="dob position-relative d-flex align-items-center">
          <input type="text" placeholder="Date of Birth" class="input" id="dobdate" value="2000/11/11">
          <button type="button" data-bs-toggle="modal" data-bs-target="#dateOfBirthModal">
            <img src="{{ asset('assets/trainerSvg/svg/calendar-blue.svg') }}" alt="icon">
          </button>
        </div>
      </div>

      <div class="mb-16">
        <label class="input-label">Gender</label>
        <div class="grid">
          <label for="male" class="custom-check-container gender-container">
            <input type="radio" name="gender" id="male" checked>
            Male
            <span class="checkmark"></span>
          </label>
          <label for="female" class="custom-check-container gender-container">
            <input type="radio" name="gender" id="female">
            Female
            <span class="checkmark"></span>
          </label>
        </div>
      </div>

      <div>
        <label class="input-label">Location</label>
        <textarea id="myTextarea" placeholder="Location" class="input"></textarea>
      </div>
    </section>
    <!-- profile-info end -->

    <!-- save-btn start -->
    <div class="save-btn mt-64 px-24 mb-32">
      <a href="{{ url('/user') }}" class="btn-primary">Save Changes</a>
    </div>
  </main>

  <!-- date of birth modal start -->
  <div class="modal fade dateOfBirthModal dateModal modalBg" id="dateOfBirthModal" tabindex="-1" aria-labelledby="dateOfBirthModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header justify-content-center">
          <h1 class="modal-title" id="dateOfBirthModalLabel">Date Of Birth</h1>
        </div>
        <div class="modal-body">
          <input type="text" id="dateOfBirthDateInput"/>

          <div class="btns d-flex align-items-center gap-16">
            <button type="button" class="radius-20 w-50 cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
            <button type="button" class="radius-20 w-50 apply-btn" data-bs-dismiss="modal" aria-label="Close">Apply</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- date of birth modal end -->

  <!-- edit-profile modal start -->
  <div class="modal fade editImageModal modalBg" id="editImageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header justify-content-center">
          <h1>Change your picture</h1>
        </div>
        <div class="modal-body">
          <ul>
            <li>
              <label for="choose-file" class="d-block w-100">
                <input type="file" id="choose-file">
                <span class="d-flex align-items-center gap-16 radius-8 action-btn">
                  <img src="{{ asset('assets/trainerSvg/svg/file-fill-black.svg') }}" alt="icon" class="shrink-0">
                  Choose from your file
                </span>
              </label>
            </li>
            <li>
              <button type="button" class="d-flex align-items-center gap-16 radius-8 action-btn delete">
                <img src="{{ asset('assets/trainerSvg/svg/trash-fill-red.svg') }}" alt="icon" class="shrink-0">
                Delete Photo
              </button>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- edit-profile modal end -->
</body>
@endsection