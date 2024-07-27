@extends('trainer.layouts.main')
@section('children')
<body>
<main class="auth-main">
    <!-- menu, side-menu start -->
    <section class="wrapper dz-mode">
      <!-- menu -->
      <div class="menu">
        <button class="toggle-btn">
          <img src="../../assets/svg/menu/burger-white.svg" alt="" class="icon">
        </button>
        <div class="btn-grp d-flex align-items-center gap-16">
          <label for="mode-change" class="mode-change d-flex align-items-center justify-content-center">
            <input type="checkbox" id="mode-change">
            <img src="{{ asset('assets/trainerSvg/svg/menu/sun-white.svg') }}" alt="icon" class="sun">
            <img src="{{ asset('assets/trainerSvg/svg/menu/moon-white.svg') }}" alt="icon" class="moon">
          </label>
          <a href="../profile/user-profile.html">
            <img src="{{ asset('assets/trainerSvg/svg/menu/profile-white.svg') }}" alt="icon">
          </a>
        </div>
      </div>
      <div class="m-menu__overlay"></div>
      <!-- main menu -->
      <div class="m-menu">
        <div class="m-menu__header">
          <button class="m-menu__close">
            <img src="../../assets/svg/menu/close-white.svg" alt="icon">
          </button>
          <div class="menu-user">
            <img src="{{ asset('assets/trainerImages/images/home/avatar.png') }}" alt="avatar">
            <div >
              <a href="#!">angela mayer</a>
              <h3>
                Verified user · Membership
              </h3>
            </div>
          </div>
        </div>
        <ul>
          <li>
            <h2 class="menu-title">menu</h2>
          </li>

          <li>
              <a href="../home.html">
                <div class="d-flex align-items-center gap-16">
                  <span class="icon">
                    <img src="../../assets/svg/menu/pie-white.svg" alt="">
                  </span>
                  overview
                </div>
                <img src="../../assets/svg/menu/chevron-right-black.svg" alt="">
              </a>
          </li>
          <li>
              <a href="../../page.html">
                <div class="d-flex align-items-center gap-16">
                  <span class="icon">
                    <img src="../../assets/svg/menu/page-white.svg" alt="">
                  </span>
                  pages
                </div>
                <img src="../../assets/svg/menu/chevron-right-black.svg" alt="">
              </a>
          </li>
          <li>
            <h2 class="menu-title">others</h2>
          </li>

          <li>
            <label class="a-label__chevron" for="item-4">
              <span class="d-flex align-items-center gap-16">
                <span class="icon">
                  <img src="../../assets/svg/menu/grid-white.svg" alt="">
                </span>
                components
              </span>
              <img src="../../assets/svg/menu/chevron-right-black.svg" alt="">
            </label>
            <input type="checkbox" id="item-4" name="item-4" class="m-menu__checkbox">
            <div class="m-menu">
              <div class="m-menu__header">
                <label class="m-menu__toggle" for="item-4">
                  <img src="../../assets/svg/menu/back-white.svg" alt="">
                </label>
                <span class="m-menu__header-title">components</span>
              </div>
              <ul>
                <li>
                  <a href="../../components/splash-screen.html">
                    <div class="d-flex align-items-center gap-16">
                      <span class="icon">
                        <img src="../../assets/svg/menu/box-white.svg" alt="icon">
                      </span>
                      splash screen
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <label class="a-label__chevron" for="item-5">
              <span class="d-flex align-items-center gap-16">
                <span class="icon">
                  <img src="../../assets/svg/menu/gear-white.svg" alt="">
                </span>
                settings
              </span>
              <img src="../../assets/svg/menu/chevron-right-black.svg" alt="">
            </label>
            <input type="checkbox" id="item-5" name="item-5" class="m-menu__checkbox">
            <div class="m-menu">
              <div class="m-menu__header">
                <label class="m-menu__toggle" for="item-5">
                  <img src="../../assets/svg/menu/back-white.svg" alt="">
                </label>
                <span class="m-menu__header-title">settings</span>
              </div>
              <ul>
                <li>
                  <a href="../profile/user-address.html">
                    <div class="d-flex align-items-center gap-16">
                      <span class="icon">
                        <img src="../../assets/svg/menu/box-white.svg" alt="icon">
                      </span>
                      My Address
                    </div>
                  </a>
                </li>
                <li>
                  <a href="../profile/user-payment.html">
                    <div class="d-flex align-items-center gap-16">
                      <span class="icon">
                        <img src="../../assets/svg/menu/box-white.svg" alt="icon">
                      </span>
                      Payment Method
                    </div>
                  </a>
                </li>
                <li>
                  <a href="../profile/change-password.html">
                    <div class="d-flex align-items-center gap-16">
                      <span class="icon">
                        <img src="../../assets/svg/menu/box-white.svg" alt="icon">
                      </span>
                      Change Password
                    </div>
                  </a>
                </li>
                <li>
                  <a href="../profile/forgot-password.html">
                    <div class="d-flex align-items-center gap-16">
                      <span class="icon">
                        <img src="../../assets/svg/menu/box-white.svg" alt="icon">
                      </span>
                      Forgot Password
                    </div>
                  </a>
                </li>
                <li>
                  <a href="../profile/security.html">
                    <div class="d-flex align-items-center gap-16">
                      <span class="icon">
                        <img src="../../assets/svg/menu/box-white.svg" alt="icon">
                      </span>
                      Security
                    </div>
                  </a>
                </li>
                <li>
                  <a href="../profile/user-language.html">
                    <div class="d-flex align-items-center gap-16">
                      <span class="icon">
                        <img src="../../assets/svg/menu/box-white.svg" alt="icon">
                      </span>
                      Language
                    </div>
                  </a>
                </li>
                <li>
                  <a href="../profile/notifications.html">
                    <div class="d-flex align-items-center gap-16">
                      <span class="icon">
                        <img src="../../assets/svg/menu/box-white.svg" alt="icon">
                      </span>
                      Notifications
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="dz-switch">
            <div class="a-label__chevron">
              <div class="d-flex align-items-center gap-16">
                <span class="icon">
                  <img src="../../assets/svg/menu/moon-white.svg" alt="">
                </span>
                switch to dark mode
              </div>
              <label class="toggle-switch" for="enableMode">
                <input type="checkbox" id="enableMode" class="mode-switch">
                <span class="slider"></span>
              </label>
            </div>
          </li>
        </ul>
      </div>
      <!-- end main menu -->
    </section>
    <!-- menu, side-menu end -->

    <!-- signin start -->
    <section class="auth signin">
      <div class="heading">
        <h2>Hi, Welcome Back!</h2>
        <p>SUKAROBOT ACCADEMY</p>
      </div>
  
      <div class="form-area auth-form">
        <form action="#">
          <div>
            <label for="lemail1">Email</label>
            <input type="email" id="lemail1" placeholder="Enter your email address" class="input-field">
          </div>
        </form>
        <br>
        <form action="#">
          <div>
            <label for="lemail1">Id Card</label>
            <input type="email" id="lemail1" placeholder="Enter your Id Card" class="input-field">
          </div>
          <a href="{{ url('/home') }}" class="btn-primary" style="background-color: #2196F3">Continue</a>
        </form>
  
</main>
</body>

@endsection
