<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <title>Login - Admin PP. Nurul Islam</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Admin Login" name="description" />
    <meta content="Nuris" name="author" />
    
    <!-- App css -->
    <link href="{{ asset('admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css">
    
    <!-- Icons css -->
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    
    <!-- Nuris Admin Custom Theme -->
    <link href="{{ asset('admin/assets/css/nuris-admin-theme.css') }}" rel="stylesheet" type="text/css">
    
    <!-- Theme Config Js -->
    <script src="{{ asset('admin/assets/js/config.js') }}"></script>
</head>

<body>
    <div class="bg-gradient-to-br from-green-50 via-white to-green-50 dark:from-gray-800 dark:via-gray-900 dark:to-gray-800" style="background: linear-gradient(135deg, #e8f5ed 0%, #ffffff 50%, #e8f5ed 100%);">
        <div class="h-screen w-screen flex justify-center items-center p-4">
            <div class="2xl:w-1/4 lg:w-1/3 md:w-1/2 w-full">
                <div class="card login-card overflow-hidden" style="border-radius: 24px; box-shadow: 0 20px 60px rgba(22, 163, 74, 0.2); border: 1px solid rgba(22, 163, 74, 0.1);">
                    <form class="p-8" method="POST" action="{{ route('admin.login.post') }}">
                        @csrf
                        <a href="{{ route('pages.index') }}" class="block mb-8 text-center">
                            <div class="flex items-center justify-center gap-3 mb-4">
                                <div class="p-4 rounded-2xl">
                                    <img src="{{ asset('img/logo/logo-mobile.png') }}" alt="Logo PP. Nurul Islam" class="h-12 w-auto">
                                </div>
                            </div>
                            <h2 class="text-2xl font-bold" style="color: #16a34a; letter-spacing: -0.5px;">Admin PP. Nurul Islam</h2>
                            <p class="text-sm text-gray-600 mt-1 font-medium">Dashboard Management</p>
                        </a>

                        @if ($errors->any())
                            <div class="mb-4 p-4 bg-red-50 border-2 border-red-200 rounded-2xl text-red-700 text-sm font-medium">
                                <i class="mgc_alert_circle_line me-2"></i>{{ $errors->first() }}
                            </div>
                        @endif

                        <div class="mb-5">
                            <label class="block text-sm font-semibold text-gray-700 dark:text-gray-200 mb-2" for="LoggingEmailAddress">
                                <i class="mgc_mail_line me-1 text-primary"></i>Email Address
                            </label>
                            <input id="LoggingEmailAddress" name="email" class="form-input w-full" type="email" value="{{ old('email') }}" placeholder="Masukkan email Anda" required>
                        </div>

                        <div class="mb-5">
                            <label class="block text-sm font-semibold text-gray-700 dark:text-gray-200 mb-2" for="loggingPassword">
                                <i class="mgc_lock_line me-1 text-primary"></i>Password
                            </label>
                            <input id="loggingPassword" name="password" class="form-input w-full" type="password" placeholder="Masukkan password Anda" required>
                        </div>

                        <div class="flex items-center justify-between mb-6">
                            <div class="flex items-center">
                                <input type="checkbox" name="remember" class="form-checkbox" id="checkbox-signin">
                                <label class="ms-2 text-sm text-gray-600 dark:text-gray-300" for="checkbox-signin">Ingat saya</label>
                            </div>
                        </div>

                        <div class="flex justify-center mb-6">
                            <button type="submit" class="btn w-full text-white bg-primary hover:shadow-lg transition-all duration-300" style="padding: 14px; font-weight: 600; font-size: 15px;">
                                <i class="mgc_login_line me-2"></i>Masuk ke Dashboard
                            </button>
                        </div>

                        <p class="text-gray-500 dark:text-gray-400 text-center text-sm font-medium">
                            <i class="mgc_building_line me-1"></i>PP. Nurul Islam Mojokerto
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- App js -->
    <script src="{{ asset('admin/assets/js/app.min.js') }}"></script>
</body>
</html>

