<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center min-vh-100">

    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <!-- Gambar -->
            <div class="col-lg-5 d-none d-lg-block">
                <img src="{{ asset('img/image Registrasi.png') }}" alt="Image Registrasi" class="img-fluid rounded-3 shadow">
            </div>

            <!-- Form Registrasi -->
            <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="card p-4 shadow border-0">
                    <h2 class="text-center mb-2">Registrasi</h2>
                    <h6 class="text-center mb-4 text-muted">Silakan isi untuk registrasi</h6>

                    @if (session('SUCCESS'))
                        <div class="alert alert-success" id="successAlert">
                            {{ session('SUCCESS') }}
                        </div>
                    @endif

                    <form action="{{ route('registrasi.submit') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Nama" required value="{{ old('name') }}">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Email" required value="{{ old('email') }}">
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" class="form-control" id="login-password" placeholder="Password" required>
                            <div class="form-check mt-1">
                                <input type="checkbox" class="form-check-input" onclick="togglePassword('login-password')"> Tampilkan Password
                            </div>
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Submit Registrasi</button>

                        <div class="text-center mt-3">
                            Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function togglePassword(id) {
            const input = document.getElementById(id);
            input.type = input.type === "password" ? "text" : "password";
        }

        const successAlert = document.getElementById('successAlert');
        if (successAlert) {
            setTimeout(() => {
                const alert = new bootstrap.Alert(successAlert);
                alert.close();
            }, 3000);
        }
    </script>
</body>
</html>
