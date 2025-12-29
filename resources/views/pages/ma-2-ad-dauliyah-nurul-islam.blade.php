@extends('layouts.app')

@section('content')

<!--===== PAGE HEADER STARTS =======-->
<section class="vl-page-header" style="background-image: url({{ asset('img/banner/nuris-hero-bg.jpg') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-page-header-content text-center">
                    <h1 class="vl-page-title">MA 2 Ad-Dauliyah Nurul Islam</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#">Unit Pendidikan</a></li>
                            <li class="breadcrumb-item"><a href="#">Unit SLTA Internasional</a></li>
                            <li class="breadcrumb-item active" aria-current="page">MA 2 Ad-Dauliyah Nurul Islam</li>
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
                        <h2 class="title text-anime-style-3">MA 2 Ad Dauliyah Nurul Islam</h2>
                        <p class="mb-0" style="color: #6c757d; font-size: clamp(0.875rem, 1.5vw, 1rem);">Bertaraf Internasional</p>
                    </div>

                    <div class="unit-description" style="background: #ffffff; padding: clamp(2rem, 4vw, 3rem); border-radius: 15px; box-shadow: 0 5px 30px rgba(0,0,0,0.08); margin-bottom: 2rem;">
                        <div style="border-top: 2px solid #e9ecef; padding-top: 2rem; margin-top: 0;">
                            <p style="color: #495057; line-height: 1.9; font-size: clamp(0.9375rem, 1.6vw, 1.0625rem); text-align: justify; margin-bottom: 1.5rem;">
                                Salah satu dari dua Lembaga Pendidikan baru rintisan YPP Nurul Islam Mojokerto yang didesain bertaraf internasional adalah Madrasah Aliyah (MA) 2 Ad Dauliyah Nurul Islam dibawah naungan Kementerian Agama RI. Lembaga ini diwujudkan dalam rangka menjawab kebutuhan zaman dan tuntutan umat agar mampu menghasilkan generasi penerus perjuangan Rosululloh SAW, para sahabat, auliya dan salafus sholih yang berakhlaqul karimah namun berwawasan keilmuan global.
                            </p>
                            <p style="color: #495057; line-height: 1.9; font-size: clamp(0.9375rem, 1.6vw, 1.0625rem); text-align: justify; margin-bottom: 1.5rem;">
                                Sesuai dengan namanya Ad Dauliya (artinya internasional) maka Sistem Pembelajaran yang diselenggarakan dalam KBM (Kegiatan Belajar Mengajar) tidak saja secara teoritis didalam kelas namun Applied diruang praktek dan lapangan serta mengacu pada Sistem Pembelajaran Internasional. Karakter dan Sistem Kepesantrenan akan menjiwai dan menginfiltrasi secara menyeluruh dalam setiap kegiatan yang diadakan MA 2 Ad Dauliyah ini.
                            </p>
                            <p style="color: #495057; line-height: 1.9; font-size: clamp(0.9375rem, 1.6vw, 1.0625rem); text-align: justify; margin-bottom: 0;">
                                Dengan melibatkan Sumber Daya Manusia (Guru-Asatidz-dzah) lulusan Perguruan Tinggi dan Pesantren Luar Negeri.
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
                            Dapatkan update terbaru tentang kegiatan dan informasi MA 2 Ad-Dauliyah Nurul Islam
                        </p>
                        <a href="https://www.instagram.com/ma2addauliyah/" target="_blank" rel="noopener noreferrer" 
                           style="display: inline-block; background: #ffffff; color: #E4405F; padding: clamp(0.75rem, 1.5vw, 1rem) clamp(1.5rem, 3vw, 2rem); border-radius: 50px; text-decoration: none; font-weight: 600; font-size: clamp(0.9375rem, 1.6vw, 1.0625rem); transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(0,0,0,0.2);"
                           onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 6px 20px rgba(0,0,0,0.3)';"
                           onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(0,0,0,0.2)';">
                            <i class="fa-brands fa-instagram" style="margin-right: 8px; font-size: 1.2em;"></i>
                            @ma2addauliyah
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== DESKRIPSI UNIT PENDIDIKAN AREA ENDS =======-->

@endsection

