<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guldar Website</title>
    <link rel="stylesheet" href="assets/vendors/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .content {
            font-family: 'Poppins', sans-serif;
            background-color: #f8d7da;
            padding: 20px 0;
        }
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
</head>

<body>
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
                            <li class="nav-item mr-2 mb-3 mb-lg-0">
                                <a class="btn btn-light" href="/dashboard" style="color: #ff4d4d; border: 1px solid #ff4d4d;">Dashboard</a>
                            </li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-light" style="color: #ff4d4d; border: 1px solid #ff4d4d;">Logout</button>
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

    <section class="content py-4">
        <div class="container">
            <!-- Pengukuran Terbaru -->
            <div class="section mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title mb-3">Pengukuran Terbaru</h2>
                        <div class="image-wrapper text-center mb-3">
                            <img src="assets/images/login_gluco.jpeg" alt="Pengukuran terbaru" class="img-fluid rounded" style="max-width: 300px;">
                        </div>
                        <p>Status: <strong>Normal</strong></p>
                        <p>Tingkat Glukosa Darah: <strong>95 mg/dL</strong></p>
                        <p>Waktu Pengukuran: <strong>12:45 PM, 23 Des 2024</strong></p>
                        <a href="#" class="btn btn-primary">Mulai Pengukuran Baru</a>
                    </div>
                </div>
            </div>
    
            <!-- Riwayat Pengukuran -->
            <div class="section mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title mb-3">Riwayat Pengukuran</h2>
                        <div class="image-wrapper text-center mb-3">
                            <img src="your-image-url-here" alt="Riwayat pengukuran" class="img-fluid rounded" style="max-width: 300px;">
                        </div>
                        <table class="table table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Waktu</th>
                                    <th>Tingkat Glukosa Darah</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>22 Des 2024</td>
                                    <td>7:00 AM</td>
                                    <td>90 mg/dL</td>
                                    <td>Normal</td>
                                </tr>
                                <tr>
                                    <td>21 Des 2024</td>
                                    <td>8:00 PM</td>
                                    <td>130 mg/dL</td>
                                    <td>Agak Tinggi</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    
            <!-- Tentang Glukosa Darah -->
            <div class="section mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title mb-3">Tentang Glukosa Darah</h2>
                        <div class="image-wrapper text-center mb-3">
                            <img src="your-image-url-here" alt="Tentang glukosa darah" class="img-fluid rounded" style="max-width: 300px;">
                        </div>
                        <div class="info">
                            <p>Glukosa darah adalah pengukuran yang penting untuk memahami kesehatan Anda. Ini menunjukkan seberapa banyak glukosa (gula) yang ada dalam darah Anda. Biasanya, kadar glukosa puasa yang normal berkisar antara 70 hingga 99 mg/dL.</p>
                            <p>Tingkat glukosa darah yang tinggi dapat mengindikasikan diabetes atau pradiabetes, sementara tingkat yang rendah dapat menyebabkan hipoglikemia. Memantau kadar glukosa secara teratur dapat membantu mengelola kesehatan Anda dengan lebih baik.</p>
                            <p>Beberapa tips untuk menjaga kadar glukosa darah tetap sehat:</p>
                            <ul class="list-unstyled">
                                <li>🍎 Makan makanan seimbang yang kaya akan biji-bijian, sayuran, dan protein.</li>
                                <li>🏃‍♂️ Berolahraga secara teratur untuk mengatur kadar insulin.</li>
                                <li>🛌 Mengelola stres dan tidur yang cukup.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- FAQ -->
            <div class="section mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title mb-3">FAQ</h2>
                        <div class="info">
                            <h3 class="mb-2">Berapa kadar glukosa darah yang normal?</h3>
                            <p>Kadar glukosa puasa yang normal biasanya berkisar antara 70 hingga 99 mg/dL. Jika lebih tinggi dari itu, sebaiknya berkonsultasi dengan dokter.</p>
                            <h3 class="mb-2">Kapan sebaiknya saya mengukur glukosa darah?</h3>
                            <p>Disarankan untuk mengukur kadar glukosa darah di pagi hari sebelum makan (kadar puasa) atau dua jam setelah makan.</p>
                            <h3 class="mb-2">Apa yang harus saya lakukan jika kadar glukosa saya terlalu tinggi atau rendah?</h3>
                            <p>Jika kadar glukosa Anda terus-menerus tinggi atau rendah, konsultasikan dengan penyedia layanan kesehatan untuk penanganan yang tepat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    @include('partials.footer')

    <script src="assets/vendors/jquery/jquery.min.js"></script>
    <script src="assets/vendors/popper.js/popper.min.js"></script>
    <script src="assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

