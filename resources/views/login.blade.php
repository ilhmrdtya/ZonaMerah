<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <!-- React CDN -->
    <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <section class="bg-white">
        <div class="grid grid-cols-1 lg:grid-cols-2 min-vh-100">


            <div class="flex items-center justify-center px-4 py-10 bg-white sm:px-6 lg:px-8 sm:py-16 lg:py-24">
                <div class="xl:w-full xl:max-w-sm 2xl:max-w-md xl:mx-auto">
                    <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl">Sign in to Celebration</h2>
                    <p class="mt-2 text-base text-gray-600">Don't have an account? <a href="{{ route('registrasi.tampil') }}" title="" class="font-medium text-blue-600 transition-all duration-200 hover:text-blue-700 focus:text-blue-700 hover:underline">Create a free account</a></p>

                    {{-- Success Message --}}
                    @if(session('success'))
                    <div class="p-4 mt-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg" role="alert" id="successAlert">
                        {{ session('success') }}
                    </div>
                    @endif

                    {{-- Gagal Login Message --}}
                    @if(session('GAGAL'))
                    <div class="p-4 mt-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg">
                        {{ session('GAGAL') }}
                    </div>
                    @endif

                    <form action="{{ route('login.submit') }}" method="POST" class="mt-8">
                        @csrf
                        <div class="space-y-5">
                            <div>
                                <label for="email" class="text-base font-medium text-gray-900"> Email address </label>
                                <div class="mt-2.5 relative text-gray-400 focus-within:text-gray-600">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                        </svg>
                                    </div>

                                    <input
                                        type="email"
                                        name="email"
                                        id="email"
                                        placeholder="Enter email to get started"
                                        class="block w-full py-4 pl-10 pr-4 text-black placeholder-gray-500 transition-all duration-200 border border-gray-200 rounded-md bg-gray-50 focus:outline-none focus:border-blue-600 focus:bg-white caret-blue-600"
                                        required
                                    />
                                </div>
                                @error('email')
                                <small class="text-red-600">{{ $message }}</small>
                                @enderror
                            </div>

                            <div>
                                <div class="flex items-center justify-between">
                                    <label for="login-password" class="text-base font-medium text-gray-900"> Password </label>
                                    <a href="#" title="" class="text-sm font-medium text-blue-600 transition-all duration-200 hover:text-blue-700 focus:text-blue-700 hover:underline"> Forgot password? </a>
                                </div>
                                <div class="mt-2.5 relative text-gray-400 focus-within:text-gray-600">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"
                                            />
                                        </svg>
                                    </div>

                                    <input
                                        type="password"
                                        name="password"
                                        id="login-password"
                                        placeholder="Enter your password"
                                        class="block w-full py-4 pl-10 pr-4 text-black placeholder-gray-500 transition-all duration-200 border border-gray-200 rounded-md bg-gray-50 focus:outline-none focus:border-blue-600 focus:bg-white caret-blue-600"
                                        required
                                    />
                                </div>
                                <div class="mt-2 flex items-center">
                                    <input type="checkbox" id="togglePassword" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500" onclick="togglePassword('login-password')">
                                    <label for="togglePassword" class="ml-2 text-sm text-gray-600">Show Password</label>
                                </div>
                                @error('password')
                                <small class="text-red-600">{{ $message }}</small>
                                @enderror
                            </div>

                            <div>
                                <button
                                    type="submit"
                                    class="inline-flex items-center justify-center w-full px-4 py-4 text-base font-semibold text-white transition-all duration-200 border border-transparent rounded-md bg-gradient-to-r from-fuchsia-600 to-blue-600 focus:outline-none hover:opacity-80 focus:opacity-80"
                                >
                                    Log in
                                </button>
                            </div>
                        </div>
                    </form>

                    <div class="mt-3  space-y-3">
                        <small class="text-sm text-gray-600 mt-3 block text-center">Belum punya akun? <a href="{{ route('registrasi.tampil') }}" class="font-medium text-blue-600 hover:text-blue-700 hover:underline transition-colors duration-200">Register di sini</a></small>

                    </div>
                </div>
            </div>


            <div class="relative flex items-end px-4 pb-10 pt-60 sm:pb-16 md:justify-center lg:pb-24 bg-gray-50 sm:px-6 lg:px-8">
                <div class="absolute inset-0">
                    <img class="object-cover object-top w-full h-full" src="{{ asset('img/image login.png') }}" alt="gambar login" />
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent"></div>

                <div class="relative">
                    <div class="w-full max-w-xl xl:w-full xl:mx-auto xl:pr-24 xl:max-w-xl">
                        <h3 class="text-4xl font-bold text-white">Join 35k+ web professionals & <br class="hidden xl:block" />build your website</h3>
                        <ul class="grid grid-cols-1 mt-10 sm:grid-cols-2 gap-x-8 gap-y-4">
                            <li class="flex items-center space-x-3">
                                <div class="inline-flex items-center justify-center flex-shrink-0 w-5 h-5 bg-blue-500 rounded-full">
                                    <svg class="w-3.5 h-3.5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <span class="text-lg font-medium text-white"> Commercial License </span>
                            </li>
                            <li class="flex items-center space-x-3">
                                <div class="inline-flex items-center justify-center flex-shrink-0 w-5 h-5 bg-blue-500 rounded-full">
                                    <svg class="w-3.5 h-3.5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <span class="text-lg font-medium text-white"> Unlimited Exports </span>
                            </li>
                            <li class="flex items-center space-x-3">
                                <div class="inline-flex items-center justify-center flex-shrink-0 w-5 h-5 bg-blue-500 rounded-full">
                                    <svg class="w-3.5 h-3.5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <span class="text-lg font-medium text-white"> 120+ Coded Blocks </span>
                            </li>
                            <li class="flex items-center space-x-3">
                                <div class="inline-flex items-center justify-center flex-shrink-0 w-5 h-5 bg-blue-500 rounded-full">
                                    <svg class="w-3.5 h-3.5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <span class="text-lg font-medium text-white"> Design Files Included </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- <div class="container">
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

            <div class="col-lg-5 d-none d-lg-block  h-64">
                <img src="{{ asset('img/image login.png') }}" alt="Login Image" class="w-full h-full object-contain  rounded-3 shadow">
            </div>
        </div>
    </div> -->

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
