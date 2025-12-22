@extends('layouts.app')

@section('content')

<!--===== PAGE HEADER STARTS =======-->
<section class="vl-page-header" style="background-image: url({{ asset('img/banner/nuris-hero-bg.jpg') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-page-header-content text-center">
                    <h1 class="vl-page-title">Profil Pengasuh</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#">Tentang Nuris</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profil Pengasuh</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== PAGE HEADER ENDS =======-->

<!--===== PROFIL PENGASUH AREA STARTS =======-->
<section class="vl-about-section sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-large-thumb reveal pengasuh-photo-wrapper" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
                    @php
                        $photoPath = public_path('img/team/pengasuh-nuris.jpg');
                        $fallbackPath = public_path('img/team/pengasuh-nuris.png');
                        $defaultPath = 'img/team/vl-team-inner-1.1.png';
                        
                        if (file_exists($photoPath)) {
                            $finalPath = 'img/team/pengasuh-nuris.jpg';
                        } elseif (file_exists($fallbackPath)) {
                            $finalPath = 'img/team/pengasuh-nuris.png';
                        } else {
                            $finalPath = $defaultPath;
                        }
                    @endphp
                    <img class="w-100 pengasuh-photo" src="{{ asset($finalPath) }}" alt="Profil Pengasuh PP. Nurul Islam" onerror="this.onerror=null; this.src='{{ asset('img/team/vl-team-inner-1.1.png') }}';">
                </div>
            </div>
            <div class="col-lg-8 col-md-6">
                <div class="vl-about-content">
                    <div class="vl-section-title-1">
                        <h5 class="subtitle" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300">Profil Pengasuh</h5>
                        <h2 class="title text-anime-style-3" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300">Dr. KH. Ahmad Siddiq, S.E., M.M.</h2>
                        <p class="pb-20" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300" style="font-size: 18px; color: var(--ztc-text-text-4); font-weight: 600;">
                            Pengasuh Pondok Pesantren Nurul Islam
                        </p>
                        <p class="pb-32" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300">
                            Dr. KH. Ahmad Siddiq, S.E., M.M. adalah pengasuh Pondok Pesantren Nurul Islam yang memiliki dedikasi tinggi dalam mendidik generasi muda dengan nilai-nilai Islam yang rahmatan lil alamin. Dengan latar belakang pendidikan pesantren yang kuat dan pengalaman bertahun-tahun, beliau berperan penting dalam membimbing dan mengarahkan santri-santri untuk menjadi generasi yang unggul, berakhlak mulia, dan bermanfaat bagi umat.
                        </p>
                    </div>
                    <div class="vl-about-grid">
                        <!-- single icon box -->
                        <div class="vl-about-icon-box mb-30" data-aos="fade-left" data-aos-duration="800" data-aos-delay="400">
                            <div class="vl-about-icon">
                                <span><i class="fa-solid fa-calendar" style="font-size: 40px; color: var(--ztc-text-text-4);"></i></span>
                            </div>
                            <div class="vl-icon-content">
                                <h3 class="title">Tanggal Lahir</h3>
                                <p>1 Juli 1973 di Kedali, Pucuk, Lamongan</p>
                            </div>
                        </div>
                        <!-- single icon box -->
                        <div class="vl-about-icon-box mb-30" data-aos="fade-left" data-aos-duration="800" data-aos-delay="500">
                            <div class="vl-about-icon">
                                <span><i class="fa-solid fa-graduation-cap" style="font-size: 40px; color: var(--ztc-text-text-4);"></i></span>
                            </div>
                            <div class="vl-icon-content">
                                <h3 class="title">Pendidikan</h3>
                                <p>23 tahun menuntut ilmu di pesantren (Langitan, Sarang, At-Tauhid) dan S1 Manajemen di Universitas Islam Sunan Giri Surabaya</p>
                            </div>
                        </div>
                        <!-- single icon box -->
                        <div class="vl-about-icon-box mb-30" data-aos="fade-left" data-aos-duration="800" data-aos-delay="600">
                            <div class="vl-about-icon">
                                <span><i class="fa-solid fa-heart" style="font-size: 40px; color: var(--ztc-text-text-4);"></i></span>
                            </div>
                            <div class="vl-icon-content">
                                <h3 class="title">Dedikasi & Komitmen</h3>
                                <p>Dengan dedikasi tinggi, beliau senantiasa berkomitmen untuk membimbing santri-santri menjadi generasi yang berakhlak mulia dan bermanfaat bagi masyarakat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== PROFIL PENGASUH AREA ENDS =======-->

<!--===== KEHIDUPAN MASA MUDA AREA STARTS =======-->
<section class="vl-about-section sp2" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Biografi</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Kehidupan Masa Muda</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-about-content" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <p class="pb-20" style="font-size: 16px; line-height: 1.8;">
                        Dr. KH. Ahmad Siddiq, S.E., M.M. lahir pada <strong>1 Juli 1973</strong> di Kedali, Pucuk, Lamongan dari pasangan Bapak Warijan dan Ibu Sukaini. Beliau merupakan anak ketiga dari empat bersaudara. Kedua orang tua beliau meninggal saat beliau masih kecil. Alhasil, sang kakak tertua menjadi tulang punggung keluarga.
                    </p>
                    <p class="pb-20" style="font-size: 16px; line-height: 1.8;">
                        Kiai Siddiq kecil dipondokkan oleh sang kakak tertua karena sang kakak mementingkan masa depan adik-adiknya. Beliau masih ingat kata-kata sang kakak yang membuatnya bertekad untuk menuntut ilmu di pesantren, <em>"Awakmu kudu mondok, nek gak mondok awakmu bakalan ngamen sakurip"</em> (Kamu wajib mondok, kalau tidak mondok kamu akan jadi pengamen seumur hidup).
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== KEHIDUPAN MASA MUDA AREA ENDS =======-->

<!--===== RIWAYAT PENDIDIKAN PESANTREN AREA STARTS =======-->
<section class="vl-about-section sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Riwayat Pendidikan</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Perjalanan Menuntut Ilmu di Pesantren</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Pondok Pesantren Langitan -->
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-mosque" style="font-size: 40px; color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Pondok Pesantren Langitan</h3>
                        <p class="mb-10"><strong>Widang, Tuban</strong></p>
                        <p class="mb-10">Diasuh oleh: <strong>KH. Abdullah Faqih</strong></p>
                        <p>Selama <strong>9 tahun</strong>, beliau menuntut ilmu di pesantren ini sebagai pondasi awal perjalanan keilmuannya.</p>
                    </div>
                </div>
            </div>

            <!-- Pondok Pesantren Sarang -->
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-book-quran" style="font-size: 40px; color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Pondok Pesantren Sarang</h3>
                        <p class="mb-10"><strong>Rembang, Jawa Tengah</strong></p>
                        <p class="mb-10">Diasuh oleh: <strong>KH. Maimoen Zubair</strong></p>
                        <p>Selama <strong>3 tahun</strong>, beliau memperdalam ilmu Nahwu-Shorof (Tata Bahasa Arab) yang penting dalam mempelajari kitab-kitab berbahasa Arab dengan sungguh-sungguh.</p>
                    </div>
                </div>
            </div>

            <!-- Pondok Pesantren At-Tauhid -->
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-graduation-cap" style="font-size: 40px; color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Pondok Pesantren At-Tauhid</h3>
                        <p class="mb-10"><strong>Sidoresmo, Wonokromo, Surabaya</strong></p>
                        <p class="mb-10">Diasuh oleh: <strong>KH. Mas Tholhah Abdullah Sattar</strong></p>
                        <p>Selama <strong>11 tahun</strong>, masa-masa di Ponpes At-Tauhid inilah yang paling berpengaruh terhadap pola pikir dan kebiasaan beliau di masa depan.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Aktivitas di At-Tauhid -->
        <div class="row mt-40">
            <div class="col-lg-12">
                <div class="vl-about-content" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                    <div style="background-color: #f8f9fa; padding: 30px; border-radius: 10px; border-left: 4px solid var(--ztc-text-text-4);">
                        <h4 class="title mb-20" style="color: var(--ztc-text-text-4);">Aktivitas di Pondok Pesantren At-Tauhid</h4>
                        <p class="mb-15" style="font-size: 16px; line-height: 1.8;">
                            Selain nyantri, beliau juga mengajar santri-santri yang lebih kecil setiap selesai salat subuh. Jumlah kitab yang beliau ajarkan ada 4 jenis, yaitu:
                        </p>
                        <ul style="font-size: 16px; line-height: 1.8; padding-left: 20px;">
                            <li><strong>Fathul Qarib</strong></li>
                            <li><strong>Bulughul Maram</strong></li>
                            <li><strong>Matan Jurumiyah</strong></li>
                            <li><strong>Nashaihul Ibad</strong></li>
                        </ul>
                        <p class="mt-20" style="font-size: 16px; line-height: 1.8;">
                            Tak hanya itu, beliau juga ngabdi kepada KH. Tholhah sebagai pemomong anak-anak Sang Kiai yang masih berusia bayi. Hal ini terus dilakukan beliau hingga kuliah di perguruan tinggi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== RIWAYAT PENDIDIKAN PESANTREN AREA ENDS =======-->

<!--===== PENDIDIKAN PERGURUAN TINGGI AREA STARTS =======-->
<section class="vl-about-section sp2" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Pendidikan Tinggi</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Dari Perguruan Tinggi hingga Menantu Kiai</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-about-content" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <p class="pb-20" style="font-size: 16px; line-height: 1.8;">
                        Tak terasa, Kiai Siddiq muda telah lulus pendidikan SLTA. Beliau memutuskan untuk meneruskan pendidikan di perguruan tinggi. Beliau kemudian memilih <strong>Universitas Airlangga jurusan Hubungan Internasional</strong> sebagai kelanjutan studi beliau. Luar biasa, beliau mampu lolos dari tes masuk kuliah jurusan Hubungan Internasional yang terkenal sulit. Beliau diterima dan bisa memasuki perkuliahan. Sebelum berangkat, beliau sowan terlebih dahulu kepada Sang Guru.
                    </p>
                    <p class="pb-20" style="font-size: 16px; line-height: 1.8;">
                        Namun, rupanya <strong>KH. Mas Tholhah kurang merestui</strong> keputusan Kiai Siddiq muda tersebut. Hal ini segera ditangkap oleh Kiai Siddiq muda dan direspon cepat dengan pembatalan masuk kuliah di Universitas Airlangga jurusan Hubungan Internasional. Beliau kemudian memilih kuliah di <strong>Universitas Islam Sunan Giri Surabaya jurusan Manajemen</strong>. Untuk keputusan beliau ini, tampaknya KH. Mas Tholhah merestui.
                    </p>
                    <div style="background-color: #ffffff; padding: 30px; border-radius: 10px; border-left: 4px solid var(--ztc-text-text-4); margin-top: 30px;">
                        <p style="font-size: 16px; line-height: 1.8; font-style: italic; color: var(--ztc-text-text-3);">
                            Berangkatlah Kiai Siddiq muda menuntut ilmu hingga mencapai jenjang S1. Tiap hari, beliau pulang-pergi dari pondok menuju kampus hanya dengan <strong>berjalan kaki sejauh 6 kilometer</strong>. Beliau melakukan ini tanpa pernah mengeluh karena beliau sadar, keberkahan dan kemanfaatan ilmu hanya dapat dicapai melalui proses yang panjang dan melelahkan terlebih dahulu.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== PENDIDIKAN PERGURUAN TINGGI AREA ENDS =======-->

<!--===== VISI MISI PENGASUH AREA STARTS =======-->
<section class="vl-about-section sp2" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Visi & Misi Pengasuh</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Komitmen dalam Pendidikan</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-eye" style="font-size: 40px; color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Visi</h3>
                        <p>Mewujudkan generasi muda yang unggul, berakhlak mulia, dan memiliki pemahaman Islam yang rahmatan lil alamin, serta mampu berkontribusi positif bagi umat dan bangsa.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-bullseye" style="font-size: 40px; color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Misi</h3>
                        <p>Mengembangkan sistem pendidikan terpadu yang mengintegrasikan ilmu agama dan ilmu umum, membentuk karakter santri yang kuat, dan menciptakan lingkungan belajar yang kondusif untuk pengembangan potensi santri secara optimal.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== VISI MISI PENGASUH AREA ENDS =======-->

@endsection

