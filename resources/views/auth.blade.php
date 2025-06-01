<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login & Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">

    <div class="card shadow p-4" style="width: 100%; max-width: 450px;">
        <h4 class="text-center mb-2">Login Dan Registrasi</h4>
        <p class="text-center text-muted mb-4">Silahkan isi data berikut untuk masuk / daftar</p>

        {{-- Tabs --}}
        <ul class="nav nav-tabs justify-content-center mb-3 border-0" id="authTabs" role="tablist">
            <li class="nav-item">
                <button class="nav-link {{ session('tab') !== 'register' ? 'active' : '' }}" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button">Login</button>
            </li>
            <li class="nav-item">
                <button class="nav-link {{ session('tab') === 'register' ? 'active' : '' }}" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button">Register</button>
            </li>
        </ul>

        {{-- Success Message --}}
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert" id="successAlert">
            {{ session('success') }}
        </div>
        @endif

        {{-- Form Container --}}
        <div class="tab-content">
            {{-- Login Form --}}
            <div class="tab-pane fade {{ session('tab') !== 'register' ? 'show active' : '' }}" id="login">
                <form action="{{ route('login.submit') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input type="text" name="email" class="form-control" placeholder="Email" required>
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
                    @if(session('GAGAL'))
                        <div class="alert alert-danger text-center">{{ session('GAGAL') }}</div>
                    @endif
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
            </div>

            {{-- Register Form --}}
            <div class="tab-pane fade {{ session('tab') === 'register' ? 'show active' : '' }}" id="register">
                <form action="{{ route('registrasi.submit') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Nama" required>
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control" id="register-password" placeholder="Password" required>
                        <div class="form-check mt-1">
                            <input type="checkbox" class="form-check-input" onclick="togglePassword('register-password')"> Tampilkan Password
                        </div>
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success w-100">Daftar</button>
                </form>
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

        const activeTab = '{{ session('tab', 'login') }}';
        const tabTrigger = document.querySelector(`#${activeTab}-tab`);
        if (tabTrigger) new bootstrap.Tab(tabTrigger).show();
    </script>
    <script>
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
