@extends('layouts.app')

@section('content')

<!--===== PAGE HEADER STARTS =======-->
<section class="vl-page-header" style="background-image: url({{ asset('img/banner/nuris-hero-bg.jpg') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-page-header-content text-center">
                    <h1 class="vl-page-title">SMA Global School Nurul Islam</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#">Unit Pendidikan</a></li>
                            <li class="breadcrumb-item"><a href="#">Unit SLTA Internasional</a></li>
                            <li class="breadcrumb-item active" aria-current="page">SMA Global School Nurul Islam</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== PAGE HEADER ENDS =======-->

<!--===== DESKRIPSI UNIT PENDIDIKAN AREA STARTS =======-->
<section class="vl-about-section sp2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-9">
                <div class="vl-about-content" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <div class="vl-section-title-1 text-center mb-50">
                        <h5 class="subtitle">Unit Pendidikan Formal</h5>
                        <h2 class="title text-anime-style-3">SMA Global School Nurul Islam</h2>
                        <p class="mb-0" style="color: #6c757d; font-size: clamp(0.875rem, 1.5vw, 1rem);">Sekolah Menengah Atas</p>
                    </div>

                    <div class="unit-description" style="background: #ffffff; padding: clamp(2rem, 4vw, 3rem); border-radius: 15px; box-shadow: 0 5px 30px rgba(0,0,0,0.08); margin-bottom: 2rem;">
                        <div style="border-top: 2px solid #e9ecef; padding-top: 2rem; margin-top: 0;">
                            <p style="color: #495057; line-height: 1.9; font-size: clamp(0.9375rem, 1.6vw, 1.0625rem); text-align: justify; margin-bottom: 1.5rem;">
                                Sekolah Menengah Atas (SMA) Global School Nurul Islam adalah Lembaga Pendidikan baru dilingkungan YPP Nurul Islam dibawah binaan Kementerian Pendidikan Dasar Menengah RI yang dirintis untuk memproduk Generasi Islam berkarakter mulia dan berwawasan global.
                            </p>
                            <p style="color: #495057; line-height: 1.9; font-size: clamp(0.9375rem, 1.6vw, 1.0625rem); text-align: justify; margin-bottom: 1.5rem;">
                                Pembelajaran yang disuguhkan di saat KBM (Kegiatan Belajar Mengajar) mengacu pada Sistem Pembelajaran Internasional yang terkolaborasi secara seimbang dengan Sistem Kepesantrenan dengan melibatkan Sumber Daya Manusia (Guru/Pendidik-Tenaga Kependidikan) lulusan Perguruan Tinggi Luar Negeri.
                            </p>
                            <p style="color: #495057; line-height: 1.9; font-size: clamp(0.9375rem, 1.6vw, 1.0625rem); text-align: justify; margin-bottom: 0;">
                                Untuk mewujudkan program global tersebut dicanangkan Program Pendukung, yakni ; 1. Visit Study 2. Scholarship 3. Student Exchange. Tiga program pendukung ini dilaksanakan di Negara Eropa dan Negara Arab.
                            </p>
                        </div>
                    </div>

                    <!-- Instagram Link Section -->
                    <div class="instagram-link-section text-center" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: clamp(1.5rem, 3vw, 2rem); border-radius: 15px; box-shadow: 0 5px 30px rgba(102, 126, 234, 0.3);">
                        <h4 style="color: #ffffff; font-weight: 600; margin-bottom: 1rem; font-size: clamp(1.125rem, 2vw, 1.25rem);">
                            <i class="fa-brands fa-instagram" style="margin-right: 10px;"></i>
                            Ikuti Kami di Instagram
                        </h4>
                        <p style="color: rgba(255,255,255,0.9); margin-bottom: 1.5rem; font-size: clamp(0.875rem, 1.5vw, 1rem);">
                            Dapatkan update terbaru tentang kegiatan dan informasi SMA Global School Nurul Islam
                        </p>
                        <a href="https://www.instagram.com/smago.nuris/" target="_blank" rel="noopener noreferrer" 
                           style="display: inline-block; background: #ffffff; color: #E4405F; padding: clamp(0.75rem, 1.5vw, 1rem) clamp(1.5rem, 3vw, 2rem); border-radius: 50px; text-decoration: none; font-weight: 600; font-size: clamp(0.9375rem, 1.6vw, 1.0625rem); transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(0,0,0,0.2);"
                           onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 6px 20px rgba(0,0,0,0.3)';"
                           onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(0,0,0,0.2)';">
                            <i class="fa-brands fa-instagram" style="margin-right: 8px; font-size: 1.2em;"></i>
                            @smago.nuris
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== DESKRIPSI UNIT PENDIDIKAN AREA ENDS =======-->

@endsection

