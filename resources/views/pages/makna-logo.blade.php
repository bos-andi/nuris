@extends('layouts.app')

@section('content')

<!--===== PAGE HEADER STARTS =======-->
<section class="vl-page-header" style="background-image: url({{ asset('img/banner/nuris-hero-bg.jpg') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-page-header-content text-center">
                    <h1 class="vl-page-title">Makna Logo</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#">Tentang Nuris</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Makna Logo</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== PAGE HEADER ENDS =======-->

<!--===== LOGO DISPLAY AREA STARTS =======-->
<section class="vl-about-section sp2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Logo PP. Nurul Islam</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Makna dan Filosofi Logo</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 mb-60">
                <div class="vl-about-large-thumb reveal text-center" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="300" style="background-color: #f8f9fa; padding: 60px 40px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                    <img src="{{ asset('img/logo/nuris-logo-labeled.jpg') }}" alt="Logo PP. Nurul Islam dengan Penanda Angka" style="max-width: 100%; height: auto; width: auto; object-fit: contain; display: block;">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-about-content text-center">
                    <div class="vl-section-title-1">
                        <p class="pb-32" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" style="max-width: 900px; margin: 0 auto; font-size: 18px; line-height: 1.8;">
                            Logo Pondok Pesantren Nurul Islam Mojokerto dirancang dengan penuh makna dan filosofi yang mencerminkan identitas, visi, dan misi lembaga pendidikan Islam ini. Setiap elemen dalam logo memiliki makna yang mendalam dan saling berkaitan untuk menyampaikan pesan tentang komitmen PP. Nurul Islam dalam mendidik generasi muda yang unggul, berakhlak mulia, dan bermanfaat bagi umat.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== LOGO DISPLAY AREA ENDS =======-->

<!--===== MAKNA ELEMEN LOGO AREA STARTS =======-->
<section class="vl-about-section sp2" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Makna Elemen</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Makna Setiap Elemen Logo</h2>
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
                        <h3 class="title">Lingkaran</h3>
                        <p>Menggambarkan dunia yang global. Bentuk lingkaran melambangkan bahwa PP. Nurul Islam memiliki visi dan jangkauan yang luas, tidak terbatas pada lingkup lokal, tetapi juga nasional dan internasional dalam memberikan kontribusi pendidikan dan dakwah.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="vl-about-icon">
                        <span style="font-size: 50px; color: var(--ztc-text-text-4); font-weight: bold; display: inline-block; width: 70px; height: 70px; line-height: 70px; text-align: center; border-radius: 50%; background-color: #f8f9fa;">2</span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Warna Hijau</h3>
                        <p>Menggambarkan suasana hati dan fikiran yang sejuk, damai dan tenteram. Warna hijau yang dominan dalam logo mencerminkan lingkungan pendidikan yang penuh kedamaian, ketenangan, dan kesejukan, yang akan menciptakan suasana belajar yang kondusif bagi santri.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                    <div class="vl-about-icon">
                        <span style="font-size: 50px; color: var(--ztc-text-text-4); font-weight: bold; display: inline-block; width: 70px; height: 70px; line-height: 70px; text-align: center; border-radius: 50%; background-color: #f8f9fa;">3</span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Bintang Tujuh (Pitu)</h3>
                        <p>Dalam istilah jawa 7 adalah Pitu yang melambangkan tiga pilar utama: <strong>Pituduh</strong> (Dakwah islamiyah), <strong>Piwulang</strong> (Pendidikan), dan <strong>Pitulung</strong> (Aktivitas Sosial). Bintang tujuh menggambarkan komitmen PP. Nurul Islam dalam tiga bidang utama tersebut yang menjadi pilar pengabdian kepada umat.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                    <div class="vl-about-icon">
                        <span style="font-size: 50px; color: var(--ztc-text-text-4); font-weight: bold; display: inline-block; width: 70px; height: 70px; line-height: 70px; text-align: center; border-radius: 50%; background-color: #f8f9fa;">4</span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Bunga Melati</h3>
                        <p>Menggambarkan bau yang senantiasa harum dan dicari banyak orang. Bunga melati melambangkan bahwa PP. Nurul Islam senantiasa berusaha untuk menjadi lembaga yang dikenal dan dicari oleh masyarakat karena kualitas pendidikan dan pengabdiannya yang harum dan terpuji.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="700">
                    <div class="vl-about-icon">
                        <span style="font-size: 50px; color: var(--ztc-text-text-4); font-weight: bold; display: inline-block; width: 70px; height: 70px; line-height: 70px; text-align: center; border-radius: 50%; background-color: #f8f9fa;">5</span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Lafadz الله diatas Bunga Melati</h3>
                        <p>Citra yang harum adalah hasil dari kemurnian tauhid dan ma'rifatillah (Ma'rifat kepada Allah). Lafadz Allah di atas bunga melati mengingatkan bahwa keharuman dan kualitas yang dicapai oleh PP. Nurul Islam berasal dari kemurnian tauhid dan pemahaman yang mendalam tentang Allah SWT.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="800">
                    <div class="vl-about-icon">
                        <span style="font-size: 50px; color: var(--ztc-text-text-4); font-weight: bold; display: inline-block; width: 70px; height: 70px; line-height: 70px; text-align: center; border-radius: 50%; background-color: #f8f9fa;">6</span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Buku</h3>
                        <p>Menggambarkan wawasan keilmuan. Buku dalam logo melambangkan komitmen PP. Nurul Islam untuk memberikan pendidikan yang luas dan mendalam, mengembangkan wawasan keilmuan santri baik dalam bidang agama maupun ilmu umum.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="900">
                    <div class="vl-about-icon">
                        <span style="font-size: 50px; color: var(--ztc-text-text-4); font-weight: bold; display: inline-block; width: 70px; height: 70px; line-height: 70px; text-align: center; border-radius: 50%; background-color: #f8f9fa;">7</span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Lafadz نور الإسلام</h3>
                        <p>Nama Pesantren ini yang membawa tujuan besar tergambar pada simbol-simbol yang lain. Lafadz "Nurul Islam" (Cahaya Islam) menjadi identitas utama yang mengikat semua elemen logo, menggambarkan bahwa pesantren ini adalah cahaya yang menerangi umat melalui pendidikan, dakwah, dan pengabdian.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1000">
                    <div class="vl-about-icon">
                        <span style="font-size: 50px; color: var(--ztc-text-text-4); font-weight: bold; display: inline-block; width: 70px; height: 70px; line-height: 70px; text-align: center; border-radius: 50%; background-color: #f8f9fa;">8</span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Teks Kuning</h3>
                        <p>Menggambarkan suasana hati yang menyenangkan & kematangan pengetahuan. Warna kuning pada teks melambangkan kegembiraan, optimisme, dan kematangan dalam pengetahuan. Menggambarkan bahwa proses pendidikan di PP. Nurul Islam dilakukan dengan suasana yang menyenangkan dan menghasilkan santri yang matang dalam ilmu.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1100">
                    <div class="vl-about-icon">
                        <span style="font-size: 50px; color: var(--ztc-text-text-4); font-weight: bold; display: inline-block; width: 70px; height: 70px; line-height: 70px; text-align: center; border-radius: 50%; background-color: #f8f9fa;">9</span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Garis Putih</h3>
                        <p>Menggambarkan hati dan perbuatan yang digarisi dengan perkara suci dan bersih. Garis putih dalam logo melambangkan kesucian, kebersihan hati, dan perbuatan yang selalu dijaga dalam koridor yang suci dan bersih sesuai dengan nilai-nilai Islam.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1200">
                    <div class="vl-about-icon">
                        <span style="font-size: 50px; color: var(--ztc-text-text-4); font-weight: bold; display: inline-block; width: 70px; height: 70px; line-height: 70px; text-align: center; border-radius: 50%; background-color: #f8f9fa;">10</span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Kelopak Melati Biru</h3>
                        <p>Menggambarkan hati dan perbuatan yang lembut, menenangkan, nyaman serta aman. Kelopak melati biru melambangkan pendekatan yang lembut, menenangkan, dan menciptakan rasa nyaman serta aman dalam proses pendidikan dan pengabdian PP. Nurul Islam.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== MAKNA ELEMEN LOGO AREA ENDS =======-->

<!--===== FILOSOFI LOGO AREA STARTS =======-->
<section class="vl-about-section sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Filosofi</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Filosofi Logo PP. Nurul Islam</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="vl-about-content" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <p class="pb-32" style="font-size: 18px; line-height: 1.8; text-align: center;">
                        Logo Pondok Pesantren Nurul Islam Mojokerto tidak hanya sekadar simbol visual, melainkan juga representasi dari nilai-nilai, visi, dan misi yang diemban oleh lembaga ini. Setiap elemen dalam logo dirancang dengan penuh pertimbangan untuk menyampaikan pesan tentang komitmen PP. Nurul Islam dalam mendidik generasi muda yang unggul, berakhlak mulia, dan bermanfaat bagi umat.
                    </p>
                    <p class="pb-32" style="font-size: 18px; line-height: 1.8; text-align: center;">
                        Melalui logo ini, PP. Nurul Islam ingin menyampaikan bahwa pendidikan yang diberikan tidak hanya fokus pada aspek akademik, tetapi juga pada pembentukan karakter, pengembangan potensi, dan penanaman nilai-nilai Islam yang rahmatan lil alamin. Logo ini menjadi identitas yang membedakan PP. Nurul Islam dari lembaga pendidikan lainnya, sekaligus menjadi pengingat akan tanggung jawab besar dalam mendidik generasi penerus bangsa.
                    </p>
                    <div class="vl-about-icon-box text-center mt-40" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="400">
                        <div class="vl-about-icon mb-20">
                            <span><i class="fa-solid fa-lightbulb" style="font-size: 60px; color: var(--ztc-text-text-4);"></i></span>
                        </div>
                        <div class="vl-icon-content">
                            <h3 class="title mb-20">Kesatuan Makna</h3>
                            <p style="font-size: 16px; line-height: 1.8;">
                                Semua elemen dalam logo saling berkaitan dan membentuk kesatuan makna yang utuh. Dari lingkaran yang menggambarkan dunia global, hingga kelopak melati biru yang melambangkan kelembutan, semua elemen bekerja sama untuk menyampaikan visi besar PP. Nurul Islam sebagai lembaga pendidikan yang mengedepankan keseimbangan antara ilmu, akhlak, dan pengabdian kepada umat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== FILOSOFI LOGO AREA ENDS =======-->

@endsection

