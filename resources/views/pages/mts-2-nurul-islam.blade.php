@extends('layouts.app')

@section('content')

<!--===== PAGE HEADER STARTS =======-->
<section class="vl-page-header" style="background-image: url({{ asset('img/banner/nuris-hero-bg.jpg') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-page-header-content text-center">
                    <h1 class="vl-page-title">MTs 2 Nurul Islam</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#">Unit Pendidikan</a></li>
                            <li class="breadcrumb-item"><a href="#">Unit SLTP</a></li>
                            <li class="breadcrumb-item active" aria-current="page">MTs 2 Nurul Islam</li>
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
                        <h2 class="title text-anime-style-3">MTs 2 Nurul Islam</h2>
                        <p class="mb-0" style="color: #6c757d; font-size: clamp(0.875rem, 1.5vw, 1rem);">Islamic Junior High School</p>
                    </div>

                    <div class="unit-description" style="background: #ffffff; padding: clamp(2rem, 4vw, 3rem); border-radius: 15px; box-shadow: 0 5px 30px rgba(0,0,0,0.08); margin-bottom: 2rem;">
                        <div style="margin-bottom: 2rem;">
                            <h4 style="color: #2c3e50; font-weight: 600; margin-bottom: 1rem; font-size: clamp(1.125rem, 2vw, 1.25rem);">
                                <i class="fa-solid fa-map-marker-alt" style="color: var(--ztc-text-text-4); margin-right: 10px;"></i>
                                Lokasi
                            </h4>
                            <p style="color: #495057; line-height: 1.8; font-size: clamp(0.9375rem, 1.6vw, 1.0625rem); margin-bottom: 0;">
                                Dusun Panggreman Desa Tunggalpager<br>
                                Kecamatan Pungging Kabupaten Mojokerto<br>
                                Provinsi Jawa Timur
                            </p>
                        </div>

                        <div style="margin-bottom: 2rem;">
                            <h4 style="color: #2c3e50; font-weight: 600; margin-bottom: 1rem; font-size: clamp(1.125rem, 2vw, 1.25rem);">
                                <i class="fa-solid fa-user-tie" style="color: var(--ztc-text-text-4); margin-right: 10px;"></i>
                                Kepala Sekolah
                            </h4>
                            <p style="color: #495057; line-height: 1.8; font-size: clamp(0.9375rem, 1.6vw, 1.0625rem); margin-bottom: 0;">
                                Muhammad Masrukhan, S.Si
                            </p>
                        </div>

                        <div style="border-top: 2px solid #e9ecef; padding-top: 2rem; margin-top: 2rem;">
                            <p style="color: #495057; line-height: 1.9; font-size: clamp(0.9375rem, 1.6vw, 1.0625rem); text-align: justify; margin-bottom: 1.5rem;">
                                MTs 2 Nurul Islam didirikan Tahun 2022. Diawal gebrakannya melounching 2 Jurusan yaitu Qur'an Sains dan Tahfidzul Qur'an. Kini di tahun ke 3 dari berdirinya, bergerak agresif menuju Go Internasinal Public dengan mencanangkan Expert Class.
                            </p>
                            <p style="color: #495057; line-height: 1.9; font-size: clamp(0.9375rem, 1.6vw, 1.0625rem); text-align: justify; margin-bottom: 1.5rem;">
                                Diawal perjalanan MTs 2 Nurul Islam, telah berhasil mempersembahkan sebuah khidmah yang membesarkan motivasi yakni prestasi yang di capai di Tahun 2022, sebagai Peraih Medali Emas OSN hari kemerdekaan Mapel IPA Se-Indonesia, Juara 2 LSI Science Olympiad mapel IPS se-Indonesia serta berbagai prestasi lain yang membanggakan.
                            </p>
                            <p style="color: #495057; line-height: 1.9; font-size: clamp(0.9375rem, 1.6vw, 1.0625rem); text-align: justify; margin-bottom: 0;">
                                MTs 2 Nurul Islam dikelola dengan managemen kekinian melibatkan 45 Guru/Asatidz yang kompeten dibidangnya. Diantaranya jebolan Strata Dua (S2) dari California dan Cairo Mesir.
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
                            Dapatkan update terbaru tentang kegiatan dan informasi MTs 2 Nurul Islam
                        </p>
                        <a href="https://www.instagram.com/mts2.nuris.id/" target="_blank" rel="noopener noreferrer" 
                           style="display: inline-block; background: #ffffff; color: #E4405F; padding: clamp(0.75rem, 1.5vw, 1rem) clamp(1.5rem, 3vw, 2rem); border-radius: 50px; text-decoration: none; font-weight: 600; font-size: clamp(0.9375rem, 1.6vw, 1.0625rem); transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(0,0,0,0.2);"
                           onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 6px 20px rgba(0,0,0,0.3)';"
                           onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(0,0,0,0.2)';">
                            <i class="fa-brands fa-instagram" style="margin-right: 8px; font-size: 1.2em;"></i>
                            @mts2.nuris.id
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== DESKRIPSI UNIT PENDIDIKAN AREA ENDS =======-->

@endsection

