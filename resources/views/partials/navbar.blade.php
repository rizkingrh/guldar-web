<header class="foi-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light foi-navbar">
            <a class="navbar-brand" href="/">
                <img src="assets/images/absensi-logo.png" width="200" alt="logo">
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#fitur">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#plan">Plan</a>
                    </li>
                </ul>
                <ul class="navbar-nav mt-2 mt-lg-0">
                    @auth
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">Logout</button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item mr-2 mb-3 mb-lg-0">
                            <a class="btn btn-secondary" href="/register">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-secondary" href="/login">Login</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </nav>
    </div>
</header>