<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library System - Dashbaord</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="assets/img/logo-icon.png">
    <!-- remix icon font css  -->
    <link rel="stylesheet" href="assets/css/remixicon.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- BootStrap css -->
    <link rel="stylesheet" href="assets/css/lib/bootstrap.min.css">
    <!-- Apex Chart css -->
    <link rel="stylesheet" href="assets/css/lib/apexcharts.css">
    <!-- Data Table css -->
    <link rel="stylesheet" href="assets/css/lib/dataTables.min.css">
    <!-- Text Editor css -->
    <link rel="stylesheet" href="assets/css/lib/editor-katex.min.css">
    <link rel="stylesheet" href="assets/css/lib/editor.atom-one-dark.min.css">
    <link rel="stylesheet" href="assets/css/lib/editor.quill.snow.css">
    <!-- Date picker css -->
    <link rel="stylesheet" href="assets/css/lib/flatpickr.min.css">
    <!-- Calendar css -->
    <link rel="stylesheet" href="assets/css/lib/full-calendar.css">
    <!-- Vector Map css -->
    <link rel="stylesheet" href="assets/css/lib/jquery-jvectormap-2.0.5.css">
    <!-- Popup css -->
    <link rel="stylesheet" href="assets/css/lib/magnific-popup.css">
    <!-- Slick Slider css -->
    <link rel="stylesheet" href="assets/css/lib/slick.css">
    <!-- main css -->
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
    <body>
  <aside class="sidebar">
    <button type="button" class="sidebar-close-btn">
      <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
    </button>
    <div>
      <a href="index.php" class="sidebar-logo">
        <img src="assets/images/logo.png" alt="site logo" class="light-logo">
        <img src="assets/images/logo-light.png" alt="site logo" class="dark-logo">
        <img src="assets/images/logo-icon.png" alt="site logo" class="logo-icon">
      </a>
    </div>
    <div class="sidebar-menu-area">
      <ul class="sidebar-menu" id="sidebar-menu">
        <li class="sidebar-menu-group-title">Functions</li>

        <li class="dropdown">
          <a href="javascript:void(0)">
            <iconify-icon icon="hugeicons:invoice-03" class="menu-icon"></iconify-icon>
            <span>Books</span>
          </a>
          <ul class="sidebar-submenu">
            <li>
              <a href="add_books.php"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Add books</a>
            </li>
            <li>
              <a href="show_books.php"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Show books</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </aside>

  <main class="dashboard-main">
    <div class="navbar-header">
    <div class="row align-items-center justify-content-between">
      <div class="col-auto">
        <div class="d-flex flex-wrap align-items-center gap-4">
          <button type="button" class="sidebar-toggle">
            <iconify-icon icon="heroicons:bars-3-solid" class="icon text-2xl non-active"></iconify-icon>
            <iconify-icon icon="iconoir:arrow-right" class="icon text-2xl active"></iconify-icon>
          </button>
          <button type="button" class="sidebar-mobile-toggle">
            <iconify-icon icon="heroicons:bars-3-solid" class="icon"></iconify-icon>
          </button>
          <form class="navbar-search">
            <input type="text" name="search" placeholder="Search">
            <iconify-icon icon="ion:search-outline" class="icon"></iconify-icon>
          </form>
        </div>
      </div>
      <div class="col-auto">
        <div class="d-flex flex-wrap align-items-center gap-3">
          <button type="button" data-theme-toggle class="w-40-px h-40-px bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center"></button>
          <div class="dropdown d-none d-sm-inline-block">
            <button class="has-indicator w-40-px h-40-px bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center" type="button" data-bs-toggle="dropdown">
              <img src="assets/images/lang-flag.png" alt="image" class="w-24 h-24 object-fit-cover rounded-circle">
            </button>
            <div class="dropdown-menu to-top dropdown-menu-sm">
              <div class="py-12 px-16 radius-8 bg-primary-50 mb-16 d-flex align-items-center justify-content-between gap-2">
                <div>
                  <h6 class="text-lg text-primary-light fw-semibold mb-0">Choose Your Language</h6>
                </div>
              </div>

              <div class="max-h-400-px overflow-y-auto scroll-sm pe-8">
                <div class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                  <label class="form-check-label line-height-1 fw-medium text-secondary-light" for="english">
                    <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                      <img src="assets/images/flags/flag1.png" alt="" class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                      <span class="text-md fw-semibold mb-0">English</span>
                    </span>
                  </label>
                  <input class="form-check-input" type="radio" name="crypto" id="english">
                </div>

                <div class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                  <label class="form-check-label line-height-1 fw-medium text-secondary-light" for="japan">
                    <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                      <img src="assets/images/flags/flag2.png" alt="" class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                      <span class="text-md fw-semibold mb-0">Japan</span>
                    </span>
                  </label>
                  <input class="form-check-input" type="radio" name="crypto" id="japan">
                </div>

                <div class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                  <label class="form-check-label line-height-1 fw-medium text-secondary-light" for="france">
                    <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                      <img src="assets/images/flags/flag3.png" alt="" class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                      <span class="text-md fw-semibold mb-0">France</span>
                    </span>
                  </label>
                  <input class="form-check-input" type="radio" name="crypto" id="france">
                </div>

                <div class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                  <label class="form-check-label line-height-1 fw-medium text-secondary-light" for="germany">
                    <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                      <img src="assets/images/flags/flag4.png" alt="" class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                      <span class="text-md fw-semibold mb-0">Germany</span>
                    </span>
                  </label>
                  <input class="form-check-input" type="radio" name="crypto" id="germany">
                </div>

                <div class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                  <label class="form-check-label line-height-1 fw-medium text-secondary-light" for="korea">
                    <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                      <img src="assets/images/flags/flag5.png" alt="" class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                      <span class="text-md fw-semibold mb-0">South Korea</span>
                    </span>
                  </label>
                  <input class="form-check-input" type="radio" name="crypto" id="korea">
                </div>

                <div class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                  <label class="form-check-label line-height-1 fw-medium text-secondary-light" for="bangladesh">
                    <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                      <img src="assets/images/flags/flag6.png" alt="" class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                      <span class="text-md fw-semibold mb-0">Bangladesh</span>
                    </span>
                  </label>
                  <input class="form-check-input" type="radio" name="crypto" id="bangladesh">
                </div>

                <div class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                  <label class="form-check-label line-height-1 fw-medium text-secondary-light" for="india">
                    <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                      <img src="assets/images/flags/flag7.png" alt="" class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                      <span class="text-md fw-semibold mb-0">India</span>
                    </span>
                  </label>
                  <input class="form-check-input" type="radio" name="crypto" id="india">
                </div>
                <div class="form-check style-check d-flex align-items-center justify-content-between">
                  <label class="form-check-label line-height-1 fw-medium text-secondary-light" for="canada">
                    <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                      <img src="assets/images/flags/flag8.png" alt="" class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                      <span class="text-md fw-semibold mb-0">Canada</span>
                    </span>
                  </label>
                  <input class="form-check-input" type="radio" name="crypto" id="canada">
                </div>
              </div>
            </div>
          </div><!-- Language dropdown end -->

          <div class="dropdown">
            <button class="has-indicator w-40-px h-40-px bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center" type="button" data-bs-toggle="dropdown">
              <iconify-icon icon="mage:email" class="text-primary-light text-xl"></iconify-icon>
            </button>
            <div class="dropdown-menu to-top dropdown-menu-lg p-0">
              <div class="m-16 py-12 px-16 radius-8 bg-primary-50 mb-16 d-flex align-items-center justify-content-between gap-2">
                <div>
                  <h6 class="text-lg text-primary-light fw-semibold mb-0">Message</h6>
                </div>
                <span class="text-primary-600 fw-semibold text-lg w-40-px h-40-px rounded-circle bg-base d-flex justify-content-center align-items-center">05</span>
              </div>

             <div class="max-h-400-px overflow-y-auto scroll-sm pe-4">

              <a href="javascript:void(0)" class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between">
                <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                  <span class="w-40-px h-40-px rounded-circle flex-shrink-0 position-relative">
                    <img src="assets/images/notification/profile-3.png" alt="">
                    <span class="w-8-px h-8-px bg-success-main rounded-circle position-absolute end-0 bottom-0"></span>
                  </span>
                  <div>
                    <h6 class="text-md fw-semibold mb-4">Kathryn Murphy</h6>
                    <p class="mb-0 text-sm text-secondary-light text-w-100-px">hey! there i’m...</p>
                  </div>
                </div>
                <div class="d-flex flex-column align-items-end">
                  <span class="text-sm text-secondary-light flex-shrink-0">12:30 PM</span>
                  <span class="mt-4 text-xs text-base w-16-px h-16-px d-flex justify-content-center align-items-center bg-warning-main rounded-circle">8</span>
                </div>
              </a>

              <a href="javascript:void(0)" class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between">
                <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                  <span class="w-40-px h-40-px rounded-circle flex-shrink-0 position-relative">
                    <img src="assets/images/notification/profile-4.png" alt="">
                    <span class="w-8-px h-8-px  bg-neutral-300 rounded-circle position-absolute end-0 bottom-0"></span>
                  </span>
                  <div>
                    <h6 class="text-md fw-semibold mb-4">Kathryn Murphy</h6>
                    <p class="mb-0 text-sm text-secondary-light text-w-100-px">hey! there i’m...</p>
                  </div>
                </div>
                <div class="d-flex flex-column align-items-end">
                  <span class="text-sm text-secondary-light flex-shrink-0">12:30 PM</span>
                  <span class="mt-4 text-xs text-base w-16-px h-16-px d-flex justify-content-center align-items-center bg-warning-main rounded-circle">2</span>
                </div>
              </a>

              <a href="javascript:void(0)" class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between bg-neutral-50">
                <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                  <span class="w-40-px h-40-px rounded-circle flex-shrink-0 position-relative">
                    <img src="assets/images/notification/profile-5.png" alt="">
                    <span class="w-8-px h-8-px bg-success-main rounded-circle position-absolute end-0 bottom-0"></span>
                  </span>
                  <div>
                    <h6 class="text-md fw-semibold mb-4">Kathryn Murphy</h6>
                    <p class="mb-0 text-sm text-secondary-light text-w-100-px">hey! there i’m...</p>
                  </div>
                </div>
                <div class="d-flex flex-column align-items-end">
                  <span class="text-sm text-secondary-light flex-shrink-0">12:30 PM</span>
                  <span class="mt-4 text-xs text-base w-16-px h-16-px d-flex justify-content-center align-items-center bg-neutral-400 rounded-circle">0</span>
                </div>
              </a>

              <a href="javascript:void(0)" class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between bg-neutral-50">
                <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                  <span class="w-40-px h-40-px rounded-circle flex-shrink-0 position-relative">
                    <img src="assets/images/notification/profile-6.png" alt="">
                    <span class="w-8-px h-8-px bg-neutral-300 rounded-circle position-absolute end-0 bottom-0"></span>
                  </span>
                  <div>
                    <h6 class="text-md fw-semibold mb-4">Kathryn Murphy</h6>
                    <p class="mb-0 text-sm text-secondary-light text-w-100-px">hey! there i’m...</p>
                  </div>
                </div>
                <div class="d-flex flex-column align-items-end">
                  <span class="text-sm text-secondary-light flex-shrink-0">12:30 PM</span>
                  <span class="mt-4 text-xs text-base w-16-px h-16-px d-flex justify-content-center align-items-center bg-neutral-400 rounded-circle">0</span>
                </div>
              </a>

              <a href="javascript:void(0)" class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between">
                <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                  <span class="w-40-px h-40-px rounded-circle flex-shrink-0 position-relative">
                    <img src="assets/images/notification/profile-7.png" alt="">
                    <span class="w-8-px h-8-px bg-success-main rounded-circle position-absolute end-0 bottom-0"></span>
                  </span>
                  <div>
                    <h6 class="text-md fw-semibold mb-4">Kathryn Murphy</h6>
                    <p class="mb-0 text-sm text-secondary-light text-w-100-px">hey! there i’m...</p>
                  </div>
                </div>
                <div class="d-flex flex-column align-items-end">
                  <span class="text-sm text-secondary-light flex-shrink-0">12:30 PM</span>
                  <span class="mt-4 text-xs text-base w-16-px h-16-px d-flex justify-content-center align-items-center bg-warning-main rounded-circle">8</span>
                </div>
              </a>

             </div>
              <div class="text-center py-12 px-16">
                  <a href="javascript:void(0)" class="text-primary-600 fw-semibold text-md">See All Message</a>
              </div>
            </div>
          </div><!-- Message dropdown end -->

          <div class="dropdown">
            <button class="has-indicator w-40-px h-40-px bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center" type="button" data-bs-toggle="dropdown">
              <iconify-icon icon="iconoir:bell" class="text-primary-light text-xl"></iconify-icon>
            </button>
            <div class="dropdown-menu to-top dropdown-menu-lg p-0">
              <div class="m-16 py-12 px-16 radius-8 bg-primary-50 mb-16 d-flex align-items-center justify-content-between gap-2">
                <div>
                  <h6 class="text-lg text-primary-light fw-semibold mb-0">Notifications</h6>
                </div>
                <span class="text-primary-600 fw-semibold text-lg w-40-px h-40-px rounded-circle bg-base d-flex justify-content-center align-items-center">05</span>
              </div>

             <div class="max-h-400-px overflow-y-auto scroll-sm pe-4">
              <a href="javascript:void(0)" class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between">
                <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                  <span class="w-44-px h-44-px bg-success-subtle text-success-main rounded-circle d-flex justify-content-center align-items-center flex-shrink-0">
                    <iconify-icon icon="bitcoin-icons:verify-outline" class="icon text-xxl"></iconify-icon>
                  </span>
                  <div>
                    <h6 class="text-md fw-semibold mb-4">Congratulations</h6>
                    <p class="mb-0 text-sm text-secondary-light text-w-200-px">Your profile has been Verified. Your profile has been Verified</p>
                  </div>
                </div>
                <span class="text-sm text-secondary-light flex-shrink-0">23 Mins ago</span>
              </a>

              <a href="javascript:void(0)" class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between bg-neutral-50">
                <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                  <span class="w-44-px h-44-px bg-success-subtle text-success-main rounded-circle d-flex justify-content-center align-items-center flex-shrink-0">
                    <img src="assets/images/notification/profile-1.png" alt="">
                  </span>
                  <div>
                    <h6 class="text-md fw-semibold mb-4">Ronald Richards</h6>
                    <p class="mb-0 text-sm text-secondary-light text-w-200-px">You can stitch between artboards</p>
                  </div>
                </div>
                <span class="text-sm text-secondary-light flex-shrink-0">23 Mins ago</span>
              </a>

              <a href="javascript:void(0)" class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between">
                <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                  <span class="w-44-px h-44-px bg-info-subtle text-info-main rounded-circle d-flex justify-content-center align-items-center flex-shrink-0">
                    AM
                  </span>
                  <div>
                    <h6 class="text-md fw-semibold mb-4">Arlene McCoy</h6>
                    <p class="mb-0 text-sm text-secondary-light text-w-200-px">Invite you to prototyping</p>
                  </div>
                </div>
                <span class="text-sm text-secondary-light flex-shrink-0">23 Mins ago</span>
              </a>

              <a href="javascript:void(0)" class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between bg-neutral-50">
                <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                  <span class="w-44-px h-44-px bg-success-subtle text-success-main rounded-circle d-flex justify-content-center align-items-center flex-shrink-0">
                    <img src="assets/images/notification/profile-2.png" alt="">
                  </span>
                  <div>
                    <h6 class="text-md fw-semibold mb-4">Annette Black</h6>
                    <p class="mb-0 text-sm text-secondary-light text-w-200-px">Invite you to prototyping</p>
                  </div>
                </div>
                <span class="text-sm text-secondary-light flex-shrink-0">23 Mins ago</span>
              </a>

              <a href="javascript:void(0)" class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between">
                <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                  <span class="w-44-px h-44-px bg-info-subtle text-info-main rounded-circle d-flex justify-content-center align-items-center flex-shrink-0">
                    DR
                  </span>
                  <div>
                    <h6 class="text-md fw-semibold mb-4">Darlene Robertson</h6>
                    <p class="mb-0 text-sm text-secondary-light text-w-200-px">Invite you to prototyping</p>
                  </div>
                </div>
                <span class="text-sm text-secondary-light flex-shrink-0">23 Mins ago</span>
              </a>
             </div>

              <div class="text-center py-12 px-16">
                  <a href="javascript:void(0)" class="text-primary-600 fw-semibold text-md">See All Notification</a>
              </div>

            </div>
          </div><!-- Notification dropdown end -->

          <div class="dropdown">
            <button class="d-flex justify-content-center align-items-center rounded-circle" type="button" data-bs-toggle="dropdown">
              <img src="assets/images/user.png" alt="image" class="w-40-px h-40-px object-fit-cover rounded-circle">
            </button>
            <div class="dropdown-menu to-top dropdown-menu-sm">
              <div class="py-12 px-16 radius-8 bg-primary-50 mb-16 d-flex align-items-center justify-content-between gap-2">
                <div>
                  <span class="text-secondary-light fw-medium text-sm">Admin</span>
                </div>
                <button type="button" class="hover-text-danger">
                  <iconify-icon icon="radix-icons:cross-1" class="icon text-xl"></iconify-icon>
                </button>
              </div>
              <ul class="to-top-list">
                <li>
                    <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-danger d-flex align-items-center gap-3"  href="{{ route('logout')}}"  onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" class="btn btn-danger">

                    <form id="logout-form" action="login/logout.php" method="POST" class="d-none">
                        @csrf
                    </form>
                    <iconify-icon icon="lucide:power" class="icon text-xl"></iconify-icon>  Log Out
                    </a>
                </li>
              </ul>
            </div>
          </div><!-- Profile dropdown end -->

        </div>
      </div>
    </div>
  </div>


