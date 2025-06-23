<aside class="left-sidebar with-vertical">
    <div><!-- ---------------------------------- -->
      <!-- Start Vertical Layout Sidebar -->
      <!-- ---------------------------------- -->
      <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="./main/index.html" class="text-nowrap logo-img">
          <img src="./assets/backend/images/logos/dark-logo.svg" class="dark-logo" alt="Logo-Dark" />
          <img src="./assets/backend/images/logos/light-logo.svg" class="light-logo" alt="Logo-light" />
        </a>
        <a href="javascript:void(0)" class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none">
          <i class="ti ti-x"></i>
        </a>
      </div>

      <nav class="sidebar-nav scroll-sidebar" data-simplebar>
        <ul id="sidebarnav">
          <!-- ---------------------------------- -->
          <!-- Ho me -->
          <!-- ---------------------------------- -->
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Home</span>
          </li>
          <!-- ---------------------------------- -->
          <!-- Dashboard -->
          <!-- ---------------------------------- -->
          <li class="sidebar-item">
            <a class="sidebar-link" href="" id="get-url" aria-expanded="false">
              <span>
                <i class="ti ti-aperture"></i>
              </span>
              <span class="hide-menu">Category</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="./main/index2.html" aria-expanded="false">
              <span>
                <i class="ti ti-shopping-cart"></i>
              </span>
              <span class="hide-menu">Product</span>
            </a>
          </li>
          <!-- ---------------------------------- -->
          <!-- Frontend page -->
          <!-- ---------------------------------- -->

          <!-- ---------------------------------- -->
          <!-- Apps -->
          <!-- ---------------------------------- -->

          <!-- ---------------------------------- -->
          <!-- PAGES -->
          <!-- ---------------------------------- -->

          <!-- ---------------------------------- -->
          <!-- UI -->
          <!-- ---------------------------------- -->

          <!-- ---------------------------------- -->
          <!-- UI Elements -->
          <!-- ---------------------------------- -->

          <!-- ---------------------------------- -->
          <!-- Cards -->
          <!-- ---------------------------------- -->

          <!-- ---------------------------------- -->
          <!-- Component -->
          <!-- ---------------------------------- -->

          <!-- ---------------------------------- -->
          <!-- Forms -->
          <!-- ---------------------------------- -->

          <!-- ---------------------------------- -->
          <!-- Form Elements -->
          <!-- ---------------------------------- -->

          <!-- ---------------------------------- -->
          <!-- Form Addons -->
          <!-- ---------------------------------- -->

          <!-- ---------------------------------- -->
          <!-- Form Validation -->
          <!-- ---------------------------------- -->

          <!-- ---------------------------------- -->
          <!-- Form Pickers -->
          <!-- ---------------------------------- -->

          <!-- ---------------------------------- -->
          <!-- Form Editor -->
          <!-- ---------------------------------- -->

          <!-- ---------------------------------- -->
          <!-- Form Input -->
          <!-- ---------------------------------- -->

          <!-- ---------------------------------- -->
          <!-- Form Wizard -->
          <!-- ---------------------------------- -->

          <!-- ---------------------------------- -->
          <!-- Form Repeater -->
          <!-- ---------------------------------- -->

          <!-- ---------------------------------- -->
          <!-- Tables -->
          <!-- ---------------------------------- -->

          <!-- ---------------------------------- -->
          <!-- Bootstrap Table -->
          <!-- ---------------------------------- -->

          <!-- ---------------------------------- -->
          <!-- Datatable -->
          <!-- ---------------------------------- -->

          <!-- ---------------------------------- -->
          <!-- Table Jsgrid -->
          <!-- ---------------------------------- -->

          <!-- ---------------------------------- -->
          <!-- Charts -->
          <!-- ---------------------------------- -->

          <!-- ---------------------------------- -->
          <!-- Apex Chart -->
          <!-- ---------------------------------- -->

          <!-- ---------------------------------- -->
          <!-- Sample Pages -->
          <!-- ---------------------------------- -->

          <!-- ---------------------------------- -->
          <!-- Icons -->
          <!-- ---------------------------------- -->

          <!-- ---------------------------------- -->
          <!-- Tabler Icon -->
          <!-- ---------------------------------- -->

          <!-- ---------------------------------- -->
          <!-- Solar Icon -->
          <!-- ---------------------------------- -->

          <!-- ---------------------------------- -->
          <!-- AUTH -->
          <!-- ---------------------------------- -->

          <!-- ---------------------------------- -->
          <!-- DOCUMENTATION -->
          <!-- ---------------------------------- -->

          <!-- ---------------------------------- -->
          <!-- OTHER -->
          <!-- ---------------------------------- -->

        </ul>
      </nav>

      <div class="fixed-profile p-3 mx-4 mb-2 bg-secondary-subtle rounded mt-3">
        <div class="hstack gap-3">
          <div class="john-img">
            <img src="./assets/backend/images/profile/user-1.jpg" class="rounded-circle" width="40" height="40" alt="modernize-img" />
          </div>
          <div class="john-title">
            <h6 class="mb-0 fs-4 fw-semibold">{{Auth::user()->name}}</h6>
            <span class="fs-2">{{Auth::user()->isAdmin == 1 ? 'admin' : ''}}</span>
          </div>
          <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
          class="border-0 bg-transparent text-primary ms-auto" tabindex="0" type="button" aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
            <i class="ti ti-power fs-6"></i>
          </a>
          <form action="{{ route('logout') }}" method="post" id="logout-form">
            @csrf
          </form>
        </div>
      </div>

      <!-- ---------------------------------- -->
      <!-- Start Vertical Layout Sidebar -->
      <!-- ---------------------------------- -->
    </div>
  </aside>