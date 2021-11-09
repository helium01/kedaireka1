<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
  <span class="align-middle">Monitorig IPAL</span>
    </a>

        <ul class="sidebar-nav">
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('home')}}">
      <i class="align-middle" data-feather="home"></i> <span class="align-middle">dashboard</span>
    </a>
            </li>
            <li class="sidebar-header">
                Monitoring
            </li>

            <li class="sidebar-item active">
                <a class="nav-link dropdown-toggle d-none d-sm-inline-block sidebar-link" href="#" data-bs-toggle="dropdown">
                    <i class="align-middle" data-feather="thermometer"></i>   <span class="align-middle">sensor suhu</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="{{route('suhuk1')}}"><i class="align-middle me-1" data-feather="box"></i> kolam 1</a>
                    <a class="dropdown-item" href="{{route('suhuk2')}}"><i class="align-middle me-1" data-feather="box"></i> kolam 2</a>
                    <a class="dropdown-item" href="{{route('suhuk3')}}"><i class="align-middle me-1" data-feather="box"></i> kolam 3</a>
                    <a class="dropdown-item" href="{{route('suhuk4')}}"><i class="align-middle me-1" data-feather="box"></i> kolam 4</a>
                </div>

            </li>

            <li class="sidebar-item active">
                <a class="nav-link dropdown-toggle d-none d-sm-inline-block sidebar-link" href="#" data-bs-toggle="dropdown">
                    <i class="align-middle" data-feather="slack"></i>   <span class="align-middle">sensor pH</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="{{route('phk1')}}"><i class="align-middle me-1" data-feather="box"></i> kolam 1</a>
                    <a class="dropdown-item" href="{{route('phk2')}}"><i class="align-middle me-1" data-feather="box"></i> kolam 2</a>
                    <a class="dropdown-item" href="{{route('phk3')}}"><i class="align-middle me-1" data-feather="box"></i> kolam 3</a>
                    <a class="dropdown-item" href="{{route('phk4')}}"><i class="align-middle me-1" data-feather="box"></i> kolam 4</a>
                </div>

            </li>

            <li class="sidebar-item active">
                <a class="nav-link dropdown-toggle d-none d-sm-inline-block sidebar-link" href="#" data-bs-toggle="dropdown">
                    <i class="align-middle" data-feather="wind"></i>   <span class="align-middle">sensor DO</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="{{route('dosensor')}}"><i class="align-middle me-1" data-feather="box"></i> kolam 5</a>
                </div>

            </li>

            <li class="sidebar-item active">
                <a class="nav-link dropdown-toggle d-none d-sm-inline-block sidebar-link" href="#" data-bs-toggle="dropdown">
                    <i class="align-middle" data-feather="droplet"></i>   <span class="align-middle">sensor Tss</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="{{route('tssk1')}}"><i class="align-middle me-1" data-feather="box"></i> kolam 1</a>
                    <a class="dropdown-item" href="{{route('tssk2')}}"><i class="align-middle me-1" data-feather="box"></i> kolam 2</a>
                    <a class="dropdown-item" href="{{route('tssk3')}}"><i class="align-middle me-1" data-feather="box"></i> kolam 3</a>
                    <a class="dropdown-item" href="{{route('tssk4')}}"><i class="align-middle me-1" data-feather="box"></i> kolam 4</a>
                </div>

            </li>



            <li class="sidebar-header">
                data CRUD
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('kegiatan')}}">
      <i class="align-middle" data-feather="square"></i> <span class="align-middle">kegiatan</span>
    </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('profil')}}">
      <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">profil</span>
    </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('penghargaan')}}">
      <i class="align-middle" data-feather="grid"></i> <span class="align-middle">penghargaan</span>
    </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('susunan_pengurus')}}">
      <i class="align-middle" data-feather="align-left"></i> <span class="align-middle">susunan pengurus</span>
    </a>
            </li>










        </ul>


    </div>
</nav>
