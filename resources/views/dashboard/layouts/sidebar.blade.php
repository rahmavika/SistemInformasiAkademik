<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="/dashboard">
                <i class="bi bi-house-door-fill"></i>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="/dashboard-mahasiswa">
                <i class="bi bi-people-fill"></i>
              Mahasiswa
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="/dashboard-dosen">
                <i class="bi bi-person-workspace"></i>
              Dosen
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="/dashboard-prodi">
            <i class="bi bi-mortarboard-fill"></i>
              Prodi
            </a>
          </li>
          @can('admin')
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="/dashboard-user">
            <i class="bi bi-person-fill"></i>
              User
            </a>
          </li>
          @endcan

          @can('admin')
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="/dashboard-matakuliah">
            <i class="bi bi-mortarboard-fill"></i>
              Mata Kuliah
            </a>
          </li>
        </ul>
        @endcan

        <hr class="my-3">

        <ul class="nav flex-column mb-auto">
            <li class="nav-item">
              <form id="logout-form" action="/logout" method="POST" style="display: inline;">
                @csrf
                <a class="nav-link d-flex align-items-center gap-2" href="#" onclick="document.getElementById('logout-form').submit();">
                  <i class="bi bi-box-arrow-right"></i>
                  Sign out
                </a>
              </form>
            </li>
          </ul>

      </div>
    </div>
  </div>
