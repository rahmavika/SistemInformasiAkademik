<header>
    <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
            <a class="navbar-brand" href="#">Akademik TI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/mahasiswa">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/dosen">Dosen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/prodi">Prodi</a>
                    </li>
                </ul>
                {{-- //SEARCH --}}
                {{-- <form class="d-flex px-3" role="search" action="/mahasiswa" method="GET">
                    <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search" value="{{ request('search') }}">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> --}}

                @php
                      $searchRoutes = [
                          'mahasiswa' => '/mahasiswa',
                          'dosen' => '/dosen',
                          'prodi' => '/prodi',
                          'user' => '/user'
                      ];
                      $currentRoute = Request::path();
                      $currentSearchRoute = $searchRoutes[explode('/', $currentRoute)[0]] ?? '/';
                  @endphp

                  <form class="d-flex px-3" role="search" action="{{ $currentSearchRoute }}" method="get">
                      <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search" value="{{ request('search') }}">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>

                <ul class="navbar-nav">
                    <li class="nav-item " >
                        <form action="/login" method="get">
                            @csrf
                            <button class="nav-link btn btn-link custom-button" type="submit">Sign In</button>
                        </form>
                    </li>
                    <li class="nav-item ">
                        <form action="/register" method="get">
                            @csrf
                            <button class="nav-link btn btn-link custom-button" type="submit">Sign Up</button>
                        </form>
                    </li>
                </ul>

            </div>
            </div>
        </nav>
    </header>
