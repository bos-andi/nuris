@extends('layouts.app')

@section('content')

<!--===== PAGE HEADER STARTS =======-->
<section class="vl-page-header" style="background-image: url({{ asset('img/banner/nuris-hero-bg.jpg') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-page-header-content text-center">
                    <h1 class="vl-page-title">Visi, Misi, Tujuan, Motto</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#">Tentang Nuris</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Visi, Misi, Tujuan, Motto</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== PAGE HEADER ENDS =======-->

<!--===== VISI AREA STARTS =======-->
<section class="vl-about-section sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Visi</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Visi Pondok Pesantren Nurul Islam</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="vl-about-icon-box text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <div class="vl-about-icon mb-30">
                        <span><i class="fa-solid fa-eye" style="font-size: 60px; color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title mb-20">Sebagai Lembaga Pendidikan Kader yang Robbani</h3>
                        <p style="font-size: 18px; line-height: 1.8;">
                            Sebagai lembaga pendidikan kader yang <strong>Robbani</strong>, berwawasan keilmuan, berdaya saing, <strong>ber-tafaqquhfiddin</strong> dan <strong>berakhlakulkarimah</strong>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== VISI AREA ENDS =======-->

<!--===== MISI AREA STARTS =======-->
<section class="vl-about-section sp2" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Misi</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Misi Pondok Pesantren Nurul Islam</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <div class="vl-about-icon">
                        <span style="font-size: 50px; color: var(--ztc-text-text-4); font-weight: bold; display: inline-block; width: 70px; height: 70px; line-height: 70px; text-align: center; border-radius: 50%; background-color: #ffffff;">1</span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Pendidikan Komprehensif</h3>
                        <p>Menyelenggarakan serta mengembangkan pendidikan dan pengajaran komprehensif yang mengintegrasikan sains religius (al 'ulum an-naqliyah) dan sains rasional (al 'ulum al-'aqliyah).</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="vl-about-icon">
                        <span style="font-size: 50px; color: var(--ztc-text-text-4); font-weight: bold; display: inline-block; width: 70px; height: 70px; line-height: 70px; text-align: center; border-radius: 50%; background-color: #ffffff;">2</span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Pembinaan & Pengaderan</h3>
                        <p>Menyelenggarakan dan mengembangkan model-model pembinaan dan pengaderan serta aktivitas dakwah islamiyah.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                    <div class="vl-about-icon">
                        <span style="font-size: 50px; color: var(--ztc-text-text-4); font-weight: bold; display: inline-block; width: 70px; height: 70px; line-height: 70px; text-align: center; border-radius: 50%; background-color: #ffffff;">3</span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Pendidikan Kepesantrenan</h3>
                        <p>Menyelenggarakan dan mencerahkan pendidikan khusus kepesantrenan dalam penguasaan al-'ulum an-naqliyah melalui pendidikan bahasa arab, bahtsul kutub, dan pengkajian kitab-kitab klasik (kitab-kitab kuning).</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                    <div class="vl-about-icon">
                        <span style="font-size: 50px; color: var(--ztc-text-text-4); font-weight: bold; display: inline-block; width: 70px; height: 70px; line-height: 70px; text-align: center; border-radius: 50%; background-color: #ffffff;">4</span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Olah Rasa, Rasio & Raga</h3>
                        <p>Membudayakan santri dalam kegiatan olah rasa, olah rasio, dan olah raga serta uji prestasi lainnya melalui kegiatan intrakulikuler dan ekstrakulikuler.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="700">
                    <div class="vl-about-icon">
                        <span style="font-size: 50px; color: var(--ztc-text-text-4); font-weight: bold; display: inline-block; width: 70px; height: 70px; line-height: 70px; text-align: center; border-radius: 50%; background-color: #ffffff;">5</span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Kerjasama Kelembagaan</h3>
                        <p>Menjalin dan mengembangkan hubungan serta kerjasama kelembagaan dengan berbagai pihak terkait, selama tidak bertentangan dengan undang-undang dan asas negara.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== MISI AREA ENDS =======-->

<!--===== TUJUAN AREA STARTS =======-->
<section class="vl-about-section sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Tujuan</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Tujuan Pondok Pesantren Nurul Islam</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mb-40">
                <div class="vl-about-content text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <h3 class="title mb-20">Tujuan Ideal Secara Umum</h3>
                    <p style="font-size: 18px; line-height: 1.8; max-width: 1000px; margin: 0 auto;">
                        Tujuan Ideal Pondok Pesantren Nurul Islam secara umum ialah untuk memenuhi kebutuhan Umat Islam terhadap kader dakwah yang mampu melakukan <strong>Amar Ma'ruf Nahi Munkar</strong> disemua aspek kehidupan (Ideologi, Politik, Ekonomi, Sosial, Budaya, Stabilitas, Ilmu Pengetahuan dan teknologi) sesuai dengan bidangnya.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mb-30">
                <div class="vl-about-content" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <h3 class="title mb-30 text-center">Tujuan Ideal Secara Khusus</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <div class="vl-about-icon">
                        <span style="font-size: 50px; color: var(--ztc-text-text-4); font-weight: bold; display: inline-block; width: 70px; height: 70px; line-height: 70px; text-align: center; border-radius: 50%; background-color: #f8f9fa;">1</span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Kader Berwawasan Sains & Teknologi</h3>
                        <p>Mencetak Kader/Generasi Islam yang menguasai Sains dan Tekhnologi sehingga mampu berkiprah dibidangnya masing-masing secara maksimal dan menjadi pelopor untuk kemajuan Umat Islam, Bangsa, dan Negara.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="vl-about-icon">
                        <span style="font-size: 50px; color: var(--ztc-text-text-4); font-weight: bold; display: inline-block; width: 70px; height: 70px; line-height: 70px; text-align: center; border-radius: 50%; background-color: #f8f9fa;">2</span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Kader/Ulama' yang Mumpuni</h3>
                        <p>Mencetak Kader/Ulama' yang mampu dan sanggup menyelidiki/memahami Al Qur'an, As Sunnah dan Ijma' – Qiyas menurut kaidah-kaidahnya.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                    <div class="vl-about-icon">
                        <span style="font-size: 50px; color: var(--ztc-text-text-4); font-weight: bold; display: inline-block; width: 70px; height: 70px; line-height: 70px; text-align: center; border-radius: 50%; background-color: #f8f9fa;">3</span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Penetapan Hukum Islam</h3>
                        <p>Mengambil/menentukan Hukum-hukum Islam yang setepat-tepatnya dan sebenar-benarnya.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                    <div class="vl-about-icon">
                        <span style="font-size: 50px; color: var(--ztc-text-text-4); font-weight: bold; display: inline-block; width: 70px; height: 70px; line-height: 70px; text-align: center; border-radius: 50%; background-color: #f8f9fa;">4</span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Pemilihan Hukum yang Rajih</h3>
                        <p>Memilih/menetapkan hukum yang paling rajih di antara hukum-hukum yang ada dan berkembang.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="700">
                    <div class="vl-about-icon">
                        <span style="font-size: 50px; color: var(--ztc-text-text-4); font-weight: bold; display: inline-block; width: 70px; height: 70px; line-height: 70px; text-align: center; border-radius: 50%; background-color: #f8f9fa;">5</span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Fungsi Motivator & Inisiator</h3>
                        <p>Berfungsi sebagai motivator, Inspirator dan Inisiator Gerakan Islam, Gerakan Dakwah, dan Gerakan Tajdid.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="800">
                    <div class="vl-about-icon">
                        <span style="font-size: 50px; color: var(--ztc-text-text-4); font-weight: bold; display: inline-block; width: 70px; height: 70px; line-height: 70px; text-align: center; border-radius: 50%; background-color: #f8f9fa;">6</span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Konsistensi Nilai Luhur</h3>
                        <p>Lembaga yang konsisten mempertahankan dan mengembangkan nilai-nilai luhur yang digali dari budaya bangsa dan tidak bertentangan dengan Syariat Islam.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="900">
                    <div class="vl-about-icon">
                        <span style="font-size: 50px; color: var(--ztc-text-text-4); font-weight: bold; display: inline-block; width: 70px; height: 70px; line-height: 70px; text-align: center; border-radius: 50%; background-color: #f8f9fa;">7</span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Pemberdayaan Masyarakat</h3>
                        <p>Lembaga yang tampil terdepan dalam mengambil bagian pembangunan dan pemberdayaan Masyarakat disegala bidang.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1000">
                    <div class="vl-about-icon">
                        <span style="font-size: 50px; color: var(--ztc-text-text-4); font-weight: bold; display: inline-block; width: 70px; height: 70px; line-height: 70px; text-align: center; border-radius: 50%; background-color: #f8f9fa;">8</span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Simpul Budaya</h3>
                        <p>Menjadi simpul budaya bagi terwujudnya umat/Masyarakat madani (berakhlaq mulia).</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1100">
                    <div class="vl-about-icon">
                        <span style="font-size: 50px; color: var(--ztc-text-text-4); font-weight: bold; display: inline-block; width: 70px; height: 70px; line-height: 70px; text-align: center; border-radius: 50%; background-color: #f8f9fa;">9</span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Go-Internasional</h3>
                        <p>Lembaga yang tampil dikancah internasional (Go-Internasinal) dan terus berusaha mengiringi kemajuan zaman.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== TUJUAN AREA ENDS =======-->

<!--===== MOTTO AREA STARTS =======-->
<section class="vl-about-section sp2" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Motto</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Motto Pondok Pesantren Nurul Islam</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="vl-about-icon-box text-center" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="300">
                    <div class="vl-about-icon mb-30">
                        <span><i class="fa-solid fa-quote-left" style="font-size: 50px; color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title mb-30" style="font-size: 32px; font-style: italic; color: var(--ztc-text-text-4); line-height: 1.6;">
                            "Berilmu Amaliyah, Beramal Ilmiyah,<br>Berakhlaqul Karimah, Ahlusunnah Wal Jama'ah"
                        </h3>
                        <div class="row mt-40">
                            <div class="col-lg-6 col-md-6 mb-20">
                                <div class="vl-about-icon-box text-left">
                                    <div class="vl-icon-content">
                                        <h4 class="title mb-10" style="font-size: 18px;"><i class="fa-solid fa-check-circle" style="color: var(--ztc-text-text-4); margin-right: 10px;"></i>Berilmu Amaliyah</h4>
                                        <p style="font-size: 16px; line-height: 1.8;">Ilmu yang dipelajari haruslah ilmu yang dapat diamalkan dalam kehidupan sehari-hari, bukan hanya teori semata.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-20">
                                <div class="vl-about-icon-box text-left">
                                    <div class="vl-icon-content">
                                        <h4 class="title mb-10" style="font-size: 18px;"><i class="fa-solid fa-check-circle" style="color: var(--ztc-text-text-4); margin-right: 10px;"></i>Beramal Ilmiyah</h4>
                                        <p style="font-size: 16px; line-height: 1.8;">Setiap amal yang dilakukan harus didasarkan pada ilmu yang benar, bukan sekedar ikut-ikutan atau tanpa dasar.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-20">
                                <div class="vl-about-icon-box text-left">
                                    <div class="vl-icon-content">
                                        <h4 class="title mb-10" style="font-size: 18px;"><i class="fa-solid fa-check-circle" style="color: var(--ztc-text-text-4); margin-right: 10px;"></i>Berakhlaqul Karimah</h4>
                                        <p style="font-size: 16px; line-height: 1.8;">Selalu menjaga dan mengamalkan akhlak yang mulia dalam setiap aspek kehidupan, baik dalam berilmu maupun beramal.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-20">
                                <div class="vl-about-icon-box text-left">
                                    <div class="vl-icon-content">
                                        <h4 class="title mb-10" style="font-size: 18px;"><i class="fa-solid fa-check-circle" style="color: var(--ztc-text-text-4); margin-right: 10px;"></i>Ahlusunnah Wal Jama'ah</h4>
                                        <p style="font-size: 16px; line-height: 1.8;">Berpegang teguh pada ajaran Ahlusunnah Wal Jama'ah sebagai manhaj dalam memahami dan mengamalkan ajaran Islam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== MOTTO AREA ENDS =======-->

@endsection

