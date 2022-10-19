
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white " href="{{ url('dasboard') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{ url('registo-staff') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Registo Staff</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{ url('report') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Report</span>
          </a>
        </li>
        {{--  <li class="nav-item">
          <a class="nav-link text-white " href="../pages/virtual-reality.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">view_in_ar</i>
            </div>
            <span class="nav-link-text ms-1">Virtual Reality</span>
          </a>
        </li>  --}}
        {{--  <li class="nav-item">
          <a class="nav-link text-white " href="../pages/rtl.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
            </div>
            <span class="nav-link-text ms-1">RTL</span>
          </a>
        </li>  --}}
        {{--  <li class="nav-item">
          <a class="nav-link text-white " href="../pages/notifications.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">notifications</i>
            </div>
            <span class="nav-link-text ms-1">Notifications</span>
          </a>
        </li>  --}}

        <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Setting Panel</h6>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="{{ url('position') }}">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="bi bi-boxes"></i>
              </div>
              <span class="nav-link-text ms-1">Posisaun</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="{{ url('location') }}">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="bi bi-map"></i>
              </div>
              <span class="nav-link-text ms-1">Localizada Staff</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="{{ url('teka') }}">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="bi bi-journal"></i>
              </div>
              <span class="nav-link-text ms-1">Teka Eletronicos</span>
            </a>

          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="{{ url('teka/search') }}">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="bi bi-search"></i>
              </div>
              <span class="nav-link-text ms-1">Dados Teka</span>
            </a>

          </li>

          <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Servisu Administrativo</h6>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="{{ url('profile') }}">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="bi bi-cash-coin"></i>
              </div>
              <span class="nav-link-text ms-1">Pety Cash</span>
            </a>
          </li>



        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Setting Account</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{ url('profile') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="bi bi-person-lines-fill"></i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white " href="{{ url('user-list') }}">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">person</i>
              </div>
              <span class="nav-link-text ms-1">Cria User</span>
            </a>
          </li>



        <li class="nav-item">
          <a class="nav-link text-white " href="{{ url('logout') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Logout</span>
          </a>
        </li>



      </ul>

