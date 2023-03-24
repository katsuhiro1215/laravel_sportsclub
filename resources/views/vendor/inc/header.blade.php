<header class="l-header navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <div class="d-flex">
      <button type="button" class="btn header-item menu-toggle px-3">
        <i class="ri-bar-chart-horizontal-line"></i>
      </button>
      <div class="app-search d-lg-block">
        <form action="">
          <input
            type="text"
            class="form-control"
            placeholder="Search here"
          />
          <i class="ri-search-line"></i>
        </form>
      </div>
    </div>

    <div class="d-flex">
      <div class="dropdown d-inline-block user-dropdown">
        <button
          type="button"
          class="btn header-item"
          id="page-header-user-dropdown"
          data-bs-toggle="dropdown"
        >
          <img
            src="{{ asset('backend/assets/images/login.jpg') }}"
            alt=""
            class="rounded-circle header-profile-user"
          />
          <span class="d-inline-block align-middle ms-1">Kakoi</span>
          <i
            class="mdi mdi-chevron-down align-middle d-inline-block"
          ></i>
        </button>
        <ul class="dropdown-menu dropdown-menu-end">
          <li>
            <a class="dropdown-item" href="#">
              <i class="ri-user-line align-middle me-1"></i>
              Profile
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="#">
              <i class="ri-settings-2-line align-middle me-1"></i>
              Settings
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Password Change</a>
          </li>
          <li><hr class="dropdown-divider" /></li>
          <li>
            <form method="POST" action="{{ route('vendor.logout') }}">
              @csrf
              <a class="dropdown-item" href="{{ route('vendor.logout') }}" onclick="event.preventDefault();this.closest('form').submit();">
                <i
                  class="ri-shut-down-line align-middle me-1 text-danger"
                ></i>
                Logout
              </a>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </div>
</header>