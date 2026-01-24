<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Sedang Maintenance | PP Nurul Islam Mojokerto</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo/nuris-favicon.png') }}">
    
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background: linear-gradient(135deg, #01715D 0%, #0f5132 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            color: #fff;
        }
        
        .maintenance-container {
            text-align: center;
            max-width: 600px;
            width: 100%;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 60px 40px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            animation: fadeInUp 0.6s ease-out;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .logo-container {
            margin-bottom: 30px;
        }
        
        .logo-container img {
            max-width: 200px;
            height: auto;
            filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.1));
        }
        
        .maintenance-icon {
            font-size: 80px;
            color: #01715D;
            margin-bottom: 30px;
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
        }
        
        h1 {
            font-size: 36px;
            font-weight: 700;
            color: #01715D;
            margin-bottom: 20px;
            line-height: 1.2;
        }
        
        .subtitle {
            font-size: 20px;
            color: #514F4C;
            margin-bottom: 30px;
            font-weight: 500;
        }
        
        .message {
            font-size: 16px;
            color: #72706C;
            line-height: 1.8;
            margin-bottom: 40px;
        }
        
        .info-box {
            background: #F6F4EE;
            border-left: 4px solid #01715D;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
            text-align: left;
        }
        
        .info-box p {
            color: #514F4C;
            margin: 0;
            font-size: 14px;
            line-height: 1.6;
        }
        
        .info-box strong {
            color: #01715D;
            display: block;
            margin-bottom: 8px;
            font-size: 16px;
        }
        
        .contact-info {
            margin-top: 30px;
            padding-top: 30px;
            border-top: 1px solid #E5E7EB;
        }
        
        .contact-info p {
            color: #72706C;
            font-size: 14px;
            margin: 5px 0;
        }
        
        .contact-info a {
            color: #01715D;
            text-decoration: none;
            font-weight: 600;
        }
        
        .contact-info a:hover {
            text-decoration: underline;
        }
        
        .spinner {
            display: inline-block;
            width: 40px;
            height: 40px;
            border: 4px solid rgba(1, 113, 93, 0.2);
            border-top-color: #01715D;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin: 20px 0;
        }
        
        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }
        
        @media (max-width: 768px) {
            .maintenance-container {
                padding: 40px 25px;
            }
            
            h1 {
                font-size: 28px;
            }
            
            .subtitle {
                font-size: 18px;
            }
            
            .maintenance-icon {
                font-size: 60px;
            }
        }
    </style>
</head>
<body>
    <div class="maintenance-container">
        <div class="logo-container">
            <img src="{{ asset('img/logo/nuris-logo.png') }}" alt="PP Nurul Islam Mojokerto" onerror="this.style.display='none'">
        </div>
        
        <div class="maintenance-icon">
            <i class="fas fa-tools"></i>
        </div>
        
        <h1>Website Sedang Maintenance</h1>
        
        <p class="subtitle">Kami sedang melakukan perbaikan dan peningkatan</p>
        
        <div class="message">
            <p>Mohon maaf atas ketidaknyamanan ini. Website PP Nurul Islam Mojokerto sedang dalam proses maintenance untuk memberikan pengalaman yang lebih baik.</p>
        </div>
        
        <div class="spinner"></div>
        
        <div class="info-box">
            <strong><i class="fas fa-info-circle"></i> Informasi</strong>
            <p>Kami akan kembali online dalam waktu singkat. Terima kasih atas pengertian Anda.</p>
        </div>
        
        <div class="contact-info">
            <p><strong>Pondok Pesantren Nurul Islam Mojokerto</strong></p>
            <p>Jl. Raya Jabontegal, Jabontegal, Mojokerto</p>
            <p>Website: <a href="https://nuris.or.id">nuris.or.id</a></p>
        </div>
    </div>
    
    <script>
        // Auto refresh setiap 30 detik untuk cek apakah sudah online
        setTimeout(function() {
            window.location.reload();
        }, 30000);
    </script>
</body>
</html>

