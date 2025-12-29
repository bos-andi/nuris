@extends('layouts.app')

@section('content')

<!--===== PAGE HEADER STARTS =======-->
<section class="vl-page-header" style="background-image: url({{ asset('img/banner/nuris-hero-bg.jpg') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-page-header-content text-center">
                    <h1 class="vl-page-title">Sistem Kepengasuhan</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#">Informasi</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sistem Kepengasuhan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== PAGE HEADER ENDS =======-->

<!--===== KEPENGURUSAN AREA STARTS =======-->
<section class="vl-about-section sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                        <span><img src="{{ asset('img/icons/vl-sub-title-icon.svg') }}" alt=""></span> Struktur Organisasi
                    </h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">Kepengurusan di Pondok Pesantren Nurul Islam</h2>
                    <p class="psb-text-size" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500" style="max-width: 90%; margin: 0 auto; margin-top: clamp(0.75rem, 1.5vw, 1rem);">
                        Kepengurusan di Pondok Pesantren Nurul Islam bertingkat-tingkat
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="card" style="border: none; border-radius: clamp(1.25rem, 3vw, 1.875rem); box-shadow: 0 clamp(0.625rem, 2vw, 1.25rem) clamp(1.875rem, 4vw, 3.75rem) rgba(0, 0, 0, 0.08); overflow: hidden; background: #ffffff;" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div style="background: linear-gradient(135deg, #01715d 0%, #014d3f 100%); padding: clamp(1.5rem, 3vw, 2rem); position: relative; overflow: hidden;">
                        <!-- Decorative shapes -->
                        <div style="position: absolute; top: -50%; right: -10%; width: clamp(12rem, 30vw, 18rem); height: clamp(12rem, 30vw, 18rem); background: rgba(255, 255, 255, 0.05); border-radius: 50%;"></div>
                        <div style="position: absolute; bottom: -50%; left: -10%; width: clamp(10rem, 25vw, 15rem); height: clamp(10rem, 25vw, 15rem); background: rgba(251, 212, 89, 0.1); border-radius: 50%;"></div>
                        
                        <div style="position: relative; z-index: 1;">
                            <h3 style="color: #ffffff; font-weight: 700; font-size: clamp(1.25rem, 2.5vw, 1.75rem); margin: 0 0 clamp(0.5rem, 1vw, 0.75rem) 0; display: flex; align-items: center; gap: clamp(0.75rem, 1.5vw, 1rem); justify-content: center;">
                                <i class="fa-solid fa-sitemap" style="font-size: clamp(1.5rem, 3vw, 2rem);"></i>
                                Tingkatan Kepengurusan
                            </h3>
                        </div>
                    </div>
                    
                    <div style="padding: clamp(2rem, 4vw, 3.5rem);">
                        <ol style="list-style: none; padding: 0; margin: 0; counter-reset: management-counter;">
                            @php
                                $management_levels = [
                                    [
                                        'title' => 'Musyrif / Musyrifah',
                                        'description' => 'Pembimbing santri baru diambilkan dari santri senior pilihan',
                                        'icon' => 'fa-user-graduate'
                                    ],
                                    [
                                        'title' => 'Pengurus Kamar',
                                        'description' => 'Berasal dari anggota kamar',
                                        'icon' => 'fa-door-open'
                                    ],
                                    [
                                        'title' => 'Pengurus Asrama',
                                        'description' => 'Berasal dari senior asrama',
                                        'icon' => 'fa-building'
                                    ],
                                    [
                                        'title' => 'Pengurus Pusat',
                                        'description' => 'Berasal dari Dewan Asatidz-Asatidzah Muqimin-Muqimat',
                                        'icon' => 'fa-users-gear'
                                    ],
                                    [
                                        'title' => 'Pengurus Pondok',
                                        'description' => 'Adalah pengurus YPP. Nurul Islam',
                                        'icon' => 'fa-landmark'
                                    ],
                                ];
                            @endphp
                            
                            @foreach($management_levels as $index => $level)
                            <li style="counter-increment: management-counter; margin-bottom: clamp(1.25rem, 2.5vw, 1.75rem); padding: clamp(1rem, 2vw, 1.5rem); background: #f8f9fa; border-left: 0.25rem solid #01715d; border-radius: clamp(0.5rem, 1vw, 0.625rem); transition: all 0.3s ease; position: relative; padding-left: clamp(4rem, 8vw, 5.5rem);" onmouseover="this.style.background='#f0f7f6'; this.style.transform='translateX(0.5rem)'; this.style.boxShadow='0 0.25rem 0.75rem rgba(1, 113, 93, 0.1)';" onmouseout="this.style.background='#f8f9fa'; this.style.transform='translateX(0)'; this.style.boxShadow='none';">
                                <span style="position: absolute; left: clamp(1rem, 2vw, 1.25rem); top: clamp(1rem, 2vw, 1.5rem); width: clamp(2.5rem, 5vw, 3.5rem); height: clamp(2.5rem, 5vw, 3.5rem); background: linear-gradient(135deg, #01715d 0%, #014d3f 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #ffffff; font-weight: 700; font-size: clamp(1rem, 2vw, 1.25rem); box-shadow: 0 clamp(0.125rem, 0.4vw, 0.25rem) clamp(0.375rem, 0.8vw, 0.5rem) rgba(1, 113, 93, 0.2);">
                                    {{ $index + 1 }}
                                </span>
                                <div style="display: flex; align-items: center; gap: clamp(1rem, 2vw, 1.5rem); margin-bottom: clamp(0.5rem, 1vw, 0.75rem);">
                                    <i class="fa-solid {{ $level['icon'] }}" style="color: #01715d; font-size: clamp(1.25rem, 2.5vw, 1.5rem);"></i>
                                    <h4 style="color: #01715d; font-weight: 700; font-size: clamp(1.125rem, 2.2vw, 1.375rem); margin: 0;">
                                        {{ $level['title'] }}
                                    </h4>
                                </div>
                                <p style="color: #2c3e50; font-size: clamp(0.875rem, 1.8vw, 1rem); line-height: 1.6; margin: 0; padding-left: clamp(2.5rem, 5vw, 3rem);">
                                    {{ $level['description'] }}
                                </p>
                            </li>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== KEPENGURUSAN AREA ENDS =======-->

<!--===== SISTEM DISIPLIN AREA STARTS =======-->
<section class="vl-about-section sp2" style="background: linear-gradient(to bottom, #f8f9fa 0%, #ffffff 100%); position: relative; overflow: hidden;">
    <!-- Background Pattern -->
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-image: radial-gradient(circle at 20% 50%, rgba(1, 113, 93, 0.03) 0%, transparent 50%), radial-gradient(circle at 80% 80%, rgba(251, 212, 89, 0.03) 0%, transparent 50%); z-index: 0;"></div>
    
    <div class="container" style="position: relative; z-index: 1;">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                        <span><img src="{{ asset('img/icons/vl-sub-title-icon.svg') }}" alt=""></span> Sistem Disiplin
                    </h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">Disiplin dan Ketertiban</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="card" style="border: none; border-radius: clamp(1.25rem, 3vw, 1.875rem); box-shadow: 0 clamp(0.625rem, 2vw, 1.25rem) clamp(1.875rem, 4vw, 3.75rem) rgba(0, 0, 0, 0.08); overflow: hidden; background: #ffffff;" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div style="padding: clamp(2rem, 4vw, 3rem);">
                        <div style="background: linear-gradient(135deg, rgba(1, 113, 93, 0.1) 0%, rgba(1, 113, 93, 0.05) 100%); border-left: 0.375rem solid #01715d; border-radius: clamp(0.5rem, 1vw, 0.75rem); padding: clamp(1.5rem, 3vw, 2rem); margin-bottom: clamp(2rem, 4vw, 2.5rem);">
                            <p style="color: #2c3e50; font-size: clamp(0.9375rem, 1.9vw, 1.125rem); line-height: 1.8; margin: 0;">
                                Untuk meminimalisir pelanggaran dan menciptakan ketertiban kegiatan, keselarasan hidup santri, ketenangan dan kondusifitas pesantren maka di Pondok Pesantren Nurul Islam dikondisikan <strong>disiplin tinggi dan full aktifitas</strong>. Namun apabila terdapat santri yang melakukan pelanggaran peraturan maka:
                            </p>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-6 mb-30" data-aos="fade-right" data-aos-duration="800" data-aos-delay="500">
                                <div style="background: #ffffff; border: 0.125rem solid #e9ecef; border-radius: clamp(0.75rem, 1.5vw, 1rem); padding: clamp(1.5rem, 3vw, 2rem); height: 100%; box-shadow: 0 clamp(0.25rem, 0.8vw, 0.5rem) clamp(0.625rem, 1.5vw, 1.25rem) rgba(0,0,0,0.05); transition: all 0.3s ease;" onmouseover="this.style.borderColor='#01715d'; this.style.boxShadow='0 clamp(0.375rem, 1vw, 0.625rem) clamp(0.875rem, 1.8vw, 1.5rem) rgba(1, 113, 93, 0.15)';" onmouseout="this.style.borderColor='#e9ecef'; this.style.boxShadow='0 clamp(0.25rem, 0.8vw, 0.5rem) clamp(0.625rem, 1.5vw, 1.25rem) rgba(0,0,0,0.05)';">
                                    <div style="display: flex; align-items: center; gap: clamp(0.75rem, 1.5vw, 1rem); margin-bottom: clamp(1rem, 2vw, 1.25rem);">
                                        <div style="width: clamp(2.5rem, 5vw, 3rem); height: clamp(2.5rem, 5vw, 3rem); background: linear-gradient(135deg, #01715d 0%, #014d3f 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                            <span style="color: #ffffff; font-weight: 700; font-size: clamp(1.125rem, 2.2vw, 1.375rem);">1</span>
                                        </div>
                                        <h4 style="color: #01715d; font-weight: 700; font-size: clamp(1.125rem, 2.2vw, 1.375rem); margin: 0;">
                                            Wewenang Menghukum
                                        </h4>
                                    </div>
                                    <p style="color: #2c3e50; font-size: clamp(0.875rem, 1.8vw, 1rem); line-height: 1.7; margin: 0;">
                                        Yang berhak menghukum adalah <strong>pengurus pusat</strong> yaitu <strong>Dewan Asatidz/Asatidzah</strong>.
                                    </p>
                                </div>
                            </div>
                            
                            <div class="col-lg-6 mb-30" data-aos="fade-left" data-aos-duration="800" data-aos-delay="600">
                                <div style="background: #ffffff; border: 0.125rem solid #e9ecef; border-radius: clamp(0.75rem, 1.5vw, 1rem); padding: clamp(1.5rem, 3vw, 2rem); height: 100%; box-shadow: 0 clamp(0.25rem, 0.8vw, 0.5rem) clamp(0.625rem, 1.5vw, 1.25rem) rgba(0,0,0,0.05); transition: all 0.3s ease;" onmouseover="this.style.borderColor='#01715d'; this.style.boxShadow='0 clamp(0.375rem, 1vw, 0.625rem) clamp(0.875rem, 1.8vw, 1.5rem) rgba(1, 113, 93, 0.15)';" onmouseout="this.style.borderColor='#e9ecef'; this.style.boxShadow='0 clamp(0.25rem, 0.8vw, 0.5rem) clamp(0.625rem, 1.5vw, 1.25rem) rgba(0,0,0,0.05)';">
                                    <div style="display: flex; align-items: center; gap: clamp(0.75rem, 1.5vw, 1rem); margin-bottom: clamp(1rem, 2vw, 1.25rem);">
                                        <div style="width: clamp(2.5rem, 5vw, 3rem); height: clamp(2.5rem, 5vw, 3rem); background: linear-gradient(135deg, #01715d 0%, #014d3f 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                            <span style="color: #ffffff; font-weight: 700; font-size: clamp(1.125rem, 2.2vw, 1.375rem);">2</span>
                                        </div>
                                        <h4 style="color: #01715d; font-weight: 700; font-size: clamp(1.125rem, 2.2vw, 1.375rem); margin: 0;">
                                            Jenis Hukuman
                                        </h4>
                                    </div>
                                    <p style="color: #2c3e50; font-size: clamp(0.875rem, 1.8vw, 1rem); line-height: 1.7; margin: 0 0 clamp(0.75rem, 1.5vw, 1rem) 0;">
                                        Jenis hukuman tidak ada yang berupa hukuman fisik tetapi berupa hukuman yang mendidik, contoh:
                                    </p>
                                    <ul style="color: #2c3e50; font-size: clamp(0.875rem, 1.8vw, 1rem); line-height: 1.8; margin: 0; padding-left: clamp(1.25rem, 2.5vw, 1.5rem);">
                                        <li>Menghafal Juz Amma</li>
                                        <li>Menulis Surat-surat Pendek</li>
                                        <li>Menghafal Surat-surat penting</li>
                                        <li>Hukuman terberat: menghafal dan menulis Surat Yasin</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div style="background: linear-gradient(135deg, rgba(251, 212, 89, 0.1) 0%, rgba(251, 212, 89, 0.05) 100%); border-left: 0.375rem solid #FBD459; border-radius: clamp(0.5rem, 1vw, 0.75rem); padding: clamp(1.5rem, 3vw, 2rem); margin-top: clamp(2rem, 4vw, 2.5rem);">
                            <p style="color: #2c3e50; font-size: clamp(0.9375rem, 1.9vw, 1.125rem); line-height: 1.8; margin: 0;">
                                Seluruh aktifitas yang diselenggarakan di PP. Nuris dikomando langsung oleh <strong>Pengasuh</strong> dan seluruh potensi pesantren digerakkan secara maksimal dengan menerapkan <strong>Manajemen Professional</strong>. Jadi Insyaallah semua akan berjalan dengan penuh <strong>Akhlaq (beradab)</strong> dan <strong>Rohmah (kasih sayang)</strong> serta profesional.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== SISTEM DISIPLIN AREA ENDS =======-->

<!--===== SISTEM KEPENGASUHAN AREA STARTS =======-->
<section class="vl-about-section sp2" style="background: linear-gradient(135deg, #01715d 0%, #014d3f 100%); position: relative; overflow: hidden;">
    <!-- Background Pattern -->
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-image: radial-gradient(circle at 30% 30%, rgba(255, 255, 255, 0.05) 0%, transparent 50%), radial-gradient(circle at 70% 70%, rgba(251, 212, 89, 0.1) 0%, transparent 50%); z-index: 0;"></div>
    
    <div class="container" style="position: relative; z-index: 1;">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" style="color: rgba(255, 255, 255, 0.9);">
                        <span><img src="{{ asset('img/icons/vl-sub-title-icon.svg') }}" alt="" style="filter: brightness(0) invert(1);"></span> Sistem Kepengasuhan
                    </h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" style="color: #ffffff;">Sistem Kepengasuhan di PP. Nuris</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @php
                $kepengasuhan_systems = [
                    [
                        'letter' => 'a',
                        'title' => 'Tarbiyah',
                        'description' => 'Transfer ilmu',
                        'icon' => 'fa-book-open-reader',
                        'color' => '#01715d'
                    ],
                    [
                        'letter' => 'b',
                        'title' => 'Qudwah',
                        'description' => 'Konseling/membimbing',
                        'icon' => 'fa-hands-praying',
                        'color' => '#FBD459'
                    ],
                    [
                        'letter' => 'c',
                        'title' => 'Uswah Hasanah',
                        'description' => 'Contoh yang baik',
                        'icon' => 'fa-star',
                        'color' => '#01715d'
                    ],
                    [
                        'letter' => 'd',
                        'title' => 'Reward',
                        'description' => 'Memberi penghargaan',
                        'icon' => 'fa-trophy',
                        'color' => '#FBD459'
                    ],
                    [
                        'letter' => 'e',
                        'title' => 'Punishment',
                        'description' => 'Memberi hukuman mendidik bagi yang melanggar',
                        'icon' => 'fa-balance-scale',
                        'color' => '#01715d'
                    ],
                ];
            @endphp
            
            @foreach($kepengasuhan_systems as $index => $system)
            <div class="col-lg-6 col-md-6 mb-30" data-aos="fade-up" data-aos-duration="800" data-aos-delay="{{ 500 + ($index * 100) }}">
                <div style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(0.625rem); border: 0.125rem solid rgba(255, 255, 255, 0.2); border-radius: clamp(1rem, 2vw, 1.25rem); padding: clamp(1.5rem, 3vw, 2rem); height: 100%; transition: all 0.3s ease; position: relative; overflow: hidden;" onmouseover="this.style.background='rgba(255, 255, 255, 0.15)'; this.style.transform='translateY(-0.5rem)'; this.style.boxShadow='0 clamp(0.625rem, 2vw, 1.25rem) clamp(1.875rem, 4vw, 3.75rem) rgba(0, 0, 0, 0.2)';" onmouseout="this.style.background='rgba(255, 255, 255, 0.1)'; this.style.transform='translateY(0)'; this.style.boxShadow='none';">
                    <!-- Decorative circle -->
                    <div style="position: absolute; top: -2rem; right: -2rem; width: clamp(8rem, 16vw, 10rem); height: clamp(8rem, 16vw, 10rem); background: rgba(255, 255, 255, 0.05); border-radius: 50%; z-index: 0;"></div>
                    
                    <div style="position: relative; z-index: 1; display: flex; align-items: flex-start; gap: clamp(1rem, 2vw, 1.5rem);">
                        <div style="flex-shrink: 0; width: clamp(4rem, 8vw, 5rem); height: clamp(4rem, 8vw, 5rem); background: rgba(255, 255, 255, 0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; border: 0.1875rem solid rgba(255, 255, 255, 0.3);">
                            <i class="fa-solid {{ $system['icon'] }}" style="color: #FBD459; font-size: clamp(1.5rem, 3vw, 2rem);"></i>
                        </div>
                        <div style="flex: 1;">
                            <div style="display: flex; align-items: center; gap: clamp(0.75rem, 1.5vw, 1rem); margin-bottom: clamp(0.75rem, 1.5vw, 1rem);">
                                <span style="width: clamp(2rem, 4vw, 2.5rem); height: clamp(2rem, 4vw, 2.5rem); background: #FBD459; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #2c3e50; font-weight: 700; font-size: clamp(1rem, 2vw, 1.25rem); flex-shrink: 0;">
                                    {{ strtoupper($system['letter']) }}
                                </span>
                                <h4 style="color: #ffffff; font-weight: 700; font-size: clamp(1.125rem, 2.2vw, 1.375rem); margin: 0;">
                                    {{ $system['title'] }}
                                </h4>
                            </div>
                            <p style="color: rgba(255, 255, 255, 0.9); font-size: clamp(0.875rem, 1.8vw, 1rem); line-height: 1.6; margin: 0;">
                                {{ $system['description'] }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--===== SISTEM KEPENGASUHAN AREA ENDS =======-->

@endsection

