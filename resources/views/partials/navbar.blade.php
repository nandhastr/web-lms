<nav class="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('profile.edit') }}">
            <h5 class="text-light">Selamat Datang, <u><i>{{ Auth::user()->name }}</i></u> !</h5>
        </a>
    </div>
</nav>

<nav class="navbar navbar-expand-sm">
    <div class="container-fluid">
        <a class="navbar-brand mx-auto" href="#">
            <h2 class="m-0">| LEARNING MANAGEMENT SYSTEM </h2>
        </a>
    </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #E9DCCD;">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === " Home") ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === " Dosen") ? 'active' : '' }}" href="/datadosen">Dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === " Course") ? 'active' : '' }}" href="/course">Course</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === " Mahasiswa") ? 'active' : '' }}"
                        href="/datamahasiswa">Mahasiswa</a>
                </li>
            </ul>
        </div>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search here..." aria-label="Search">
            <button class="btn btn-outline-light" type="submit">>></button>
        </form>
    </div>
</nav>