<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center min-vh-100">

    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="card shadow p-4 border-0">
                    <h4 class="text-center mb-4">Login</h4>

                    {{-- Success Message --}}
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show text-center" role="alert" id="successAlert">
                        {{ session('success') }}
                    </div>
                    @endif

                    {{-- Gagal Login Message --}}
                    @if(session('GAGAL'))
                    <div class="alert alert-danger text-center">{{ session('GAGAL') }}</div>
                    @endif

                    <form action="{{ route('login.submit') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
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

                        <button type="submit" class="btn btn-primary w-100">Login</button>

                        <div class="text-center mt-3">
                            <small>Belum punya akun? <a href="{{ route('registrasi.tampil') }}">Register di sini</a></small>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-5 d-none d-lg-block">
                <img src="{{ asset('img/image login.png') }}" alt="Login Image" class="img-fluid rounded-3 shadow">
            </div>
        </div>
    </div>

    {{-- Bootstrap JS --}}
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
