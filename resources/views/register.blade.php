@extends('layouts.main')

@section('content')
<main class="page-auth">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <section class="auth-wrapper">
                    <!-- Tampilkan Notifikasi -->
                    @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <p class="fw-bold mb-0">Failed to register, because:</p>
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <div class="row">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <h2 class="auth-section-title">Create account</h2>
                            <p class="auth-section-subtitle">Create your account to continue.</p>
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Fullname <sup>*</sup></label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Fullname" value="{{ old('name') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email <sup>*</sup></label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password <sup>*</sup></label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <label for="confirmPassword">Confirm Password <sup>*</sup></label>
                                    <input type="password" class="form-control" id="confirmPassword" name="password_confirmation" placeholder="Confirm Password" required>
                                </div>
                                <button class="btn btn-danger btn-auth-submit" type="submit">Create account</button>
                            </form>
                            <p class="mb-0">
                                <a href="/login" class="text-danger font-weight-bold">Already have an acocunt? Login</a>
                            </p>
                        </div>
                        <div class="col-md-6 d-flex align-items-center">
                            <img src="assets/images/login_gluco.jpeg" alt="login" class="img-fluid">
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>

<style>
    .page-auth {
        background-color: #f8d7da;
        padding: 50px 0;
    }

    .auth-wrapper {
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        padding: 30px;
    }

    .auth-section-title {
        color: #dc3545;
        font-size: 2rem;
        margin-bottom: 10px;
    }

    .auth-section-subtitle {
        color: #6c757d;
        margin-bottom: 20px;
    }

    .form-control {
        border: 1px solid #dc3545;
        border-radius: 5px;
    }

    .form-control:focus {
        border-color: #c82333;
        box-shadow: 0 0 5px rgba(220, 53, 69, 0.5);
    }

    .btn-auth-submit {
        width: 100%;
        padding: 10px;
        font-size: 1.1rem;
    }

    .text-danger {
        color: #dc3545 !important;
    }
</style>
@endsection