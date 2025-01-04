<header class="foi-header" style="background: linear-gradient(90deg, #ff4d4d, #ff0000); padding: 10px 0;">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light foi-navbar">
            <a class="navbar-brand" href="/">
                <img src="assets/images/logo_smart_gluco.jpg" width="200" alt="logo">
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#fitur">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#plan">Plan</a>
                    </li>
                </ul>
                <ul class="navbar-nav mt-2 mt-lg-0">
                    @auth
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-light text-danger" style="border: 1px solid #ff4d4d;">Logout</button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item mr-2 mb-3 mb-lg-0">
                            <a class="btn btn-light" href="/register" style="color: #ff4d4d; border: 1px solid #ff4d4d;">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-light" href="/login" style="color: #ff4d4d; border: 1px solid #ff4d4d;">Login</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </nav>
    </div>
</header>

<style>
    /* Hover effects for buttons */
    .btn:hover {
        background-color: #ff4d4d !important;
        color: white !important;
    }

    /* Adjust navbar links */
    .nav-link:hover {
        color: #ffd6d6 !important;
    }

    /* Adjust header padding for mobile view */
    @media (max-width: 768px) {
        .foi-header {
            padding: 15px 0;
        }
    }
</style>
