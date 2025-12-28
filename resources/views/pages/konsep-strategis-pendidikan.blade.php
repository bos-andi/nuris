@extends('layouts.app')

@section('content')

<!--===== PAGE HEADER STARTS =======-->
<section class="vl-page-header" style="background-image: url({{ asset('img/banner/nuris-hero-bg.jpg') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-page-header-content text-center">
                    <h1 class="vl-page-title">Konsep Strategis Pendidikan dan Pengajaran</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#">Informasi</a></li>
                            <li class="breadcrumb-item"><a href="#">Kegiatan Belajar Mengajar</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Konsep Strategis Pendidikan dan Pengajaran</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== PAGE HEADER ENDS =======-->

<!--===== KONSEP STRATEGIS PENDIDIKAN AREA STARTS =======-->
<section class="vl-about-section sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Konsep Pembelajaran</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Strategi Pembelajaran</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="vl-about-content" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    
                    <!-- 1. Pendidikan Berkarakter -->
                    <div class="mb-50">
                        <h3 class="mb-30" style="color: var(--ztc-text-text-3); font-size: clamp(1.25rem, 3vw, 1.75rem); font-weight: 700; border-bottom: 3px solid var(--ztc-text-text-4); padding-bottom: 10px;">
                            1. Pendidikan Berkarakter
                        </h3>
                        <p class="mb-30" style="font-size: clamp(0.875rem, 1.6vw, 1rem); line-height: 1.8; color: var(--ztc-text-text-2);">
                            PP. Nurul Islam Pungging Mojokerto menekankan pada pendidikan berkarakter yang mencakup:
                        </p>
                        
                        <div class="row mb-30">
                            <div class="col-lg-4 col-md-6 mb-30">
                                <div class="vl-about-icon-box" style="height: 100%;">
                                    <div class="vl-about-icon mb-20">
                                        <span><i class="fa-solid fa-flag" style="font-size: clamp(2rem, 4vw, 2.5rem); color: var(--ztc-text-text-4);"></i></span>
                                    </div>
                                    <div class="vl-icon-content">
                                        <h4 class="title mb-20">a. Karakter Keindonesiaan</h4>
                                        <ul style="list-style: none; padding: 0; line-height: 2;">
                                            <li><i class="fa-solid fa-check text-success me-2"></i>Toto Kromo</li>
                                            <li><i class="fa-solid fa-check text-success me-2"></i>Tepo Seliro</li>
                                            <li><i class="fa-solid fa-check text-success me-2"></i>Sopan Santun</li>
                                            <li><i class="fa-solid fa-check text-success me-2"></i>Welas Asih</li>
                                            <li><i class="fa-solid fa-check text-success me-2"></i>Andap Asor</li>
                                            <li><i class="fa-solid fa-check text-success me-2"></i>Adi Luhung</li>
                                            <li><i class="fa-solid fa-check text-success me-2"></i>Edhi Peni</li>
                                            <li><i class="fa-solid fa-check text-success me-2"></i>Solah Bowo</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 mb-30">
                                <div class="vl-about-icon-box" style="height: 100%;">
                                    <div class="vl-about-icon mb-20">
                                        <span><i class="fa-solid fa-mosque" style="font-size: clamp(2rem, 4vw, 2.5rem); color: var(--ztc-text-text-4);"></i></span>
                                    </div>
                                    <div class="vl-icon-content">
                                        <h4 class="title mb-20">b. Karakter Keislaman</h4>
                                        <ul style="list-style: none; padding: 0; line-height: 2;">
                                            <li><i class="fa-solid fa-check text-success me-2"></i>Tafaqquh fiddin</li>
                                            <li><i class="fa-solid fa-check text-success me-2"></i>Liyundhiro qoumahum</li>
                                            <li><i class="fa-solid fa-check text-success me-2"></i>Libtighoi mardhotillah</li>
                                            <li><i class="fa-solid fa-check text-success me-2"></i>Hubbun Nabi</li>
                                            <li><i class="fa-solid fa-check text-success me-2"></i>Li i'lai Kalimatillah</li>
                                            <li><i class="fa-solid fa-check text-success me-2"></i>Izzul Islam wal Muslimin</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 mb-30">
                                <div class="vl-about-icon-box" style="height: 100%;">
                                    <div class="vl-about-icon mb-20">
                                        <span><i class="fa-solid fa-shield-halved" style="font-size: clamp(2rem, 4vw, 2.5rem); color: var(--ztc-text-text-4);"></i></span>
                                    </div>
                                    <div class="vl-icon-content">
                                        <h4 class="title mb-20">c. Membentuk Nilai Integritas</h4>
                                        <ul style="list-style: none; padding: 0; line-height: 2;">
                                            <li><i class="fa-solid fa-check text-success me-2"></i>Kejujuran</li>
                                            <li><i class="fa-solid fa-check text-success me-2"></i>Kedisiplinan</li>
                                            <li><i class="fa-solid fa-check text-success me-2"></i>Kemandirian</li>
                                            <li><i class="fa-solid fa-check text-success me-2"></i>Kerja keras</li>
                                            <li><i class="fa-solid fa-check text-success me-2"></i>Keberanian</li>
                                            <li><i class="fa-solid fa-check text-success me-2"></i>Tanggung jawab</li>
                                            <li><i class="fa-solid fa-check text-success me-2"></i>Kesederhanaan</li>
                                            <li><i class="fa-solid fa-check text-success me-2"></i>Kepedulian</li>
                                            <li><i class="fa-solid fa-check text-success me-2"></i>Keadilan dan keihlasan</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 2. Instrumen Pendidikan Karakter -->
                    <div class="mb-50" style="background-color: #f8f9fa; padding: clamp(2rem, 4vw, 2.5rem); border-radius: 0.75rem;">
                        <h3 class="mb-30" style="color: var(--ztc-text-text-3); font-size: clamp(1.25rem, 3vw, 1.75rem); font-weight: 700; border-bottom: 3px solid var(--ztc-text-text-4); padding-bottom: 10px;">
                            2. Instrumen Pendidikan Karakter PP. Nurul Islam
                        </h3>
                        <p class="mb-30" style="font-size: clamp(0.875rem, 1.6vw, 1rem); line-height: 1.8; color: var(--ztc-text-text-2);">
                            PP. Nurul Islam menggunakan tujuh instrumen utama dalam pendidikan karakter:
                        </p>
                        
                        <div class="row">
                            <div class="col-lg-6 col-md-6 mb-20">
                                <div class="d-flex align-items-start mb-15">
                                    <div class="me-3">
                                        <span style="display: inline-block; width: clamp(2rem, 3vw, 2.5rem); height: clamp(2rem, 3vw, 2.5rem); background: linear-gradient(135deg, #1ABC9C 0%, #16A085 100%); color: white; border-radius: 50%; text-align: center; line-height: clamp(2rem, 3vw, 2.5rem); font-weight: bold;">a</span>
                                    </div>
                                    <div>
                                        <h5 style="font-weight: 600; margin-bottom: 5px;">Maaddah</h5>
                                        <p style="margin: 0; color: var(--ztc-text-text-2);">Kurikulum terintegratif</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 mb-20">
                                <div class="d-flex align-items-start mb-15">
                                    <div class="me-3">
                                        <span style="display: inline-block; width: clamp(2rem, 3vw, 2.5rem); height: clamp(2rem, 3vw, 2.5rem); background: linear-gradient(135deg, #1ABC9C 0%, #16A085 100%); color: white; border-radius: 50%; text-align: center; line-height: clamp(2rem, 3vw, 2.5rem); font-weight: bold;">b</span>
                                    </div>
                                    <div>
                                        <h5 style="font-weight: 600; margin-bottom: 5px;">Thoriqoh</h5>
                                        <p style="margin: 0; color: var(--ztc-text-text-2);">Metode yang Up to date</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 mb-20">
                                <div class="d-flex align-items-start mb-15">
                                    <div class="me-3">
                                        <span style="display: inline-block; width: clamp(2rem, 3vw, 2.5rem); height: clamp(2rem, 3vw, 2.5rem); background: linear-gradient(135deg, #1ABC9C 0%, #16A085 100%); color: white; border-radius: 50%; text-align: center; line-height: clamp(2rem, 3vw, 2.5rem); font-weight: bold;">c</span>
                                    </div>
                                    <div>
                                        <h5 style="font-weight: 600; margin-bottom: 5px;">Mudarris</h5>
                                        <p style="margin: 0; color: var(--ztc-text-text-2);">Sumber Daya Manusia Guru yang handal</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 mb-20">
                                <div class="d-flex align-items-start mb-15">
                                    <div class="me-3">
                                        <span style="display: inline-block; width: clamp(2rem, 3vw, 2.5rem); height: clamp(2rem, 3vw, 2.5rem); background: linear-gradient(135deg, #1ABC9C 0%, #16A085 100%); color: white; border-radius: 50%; text-align: center; line-height: clamp(2rem, 3vw, 2.5rem); font-weight: bold;">d</span>
                                    </div>
                                    <div>
                                        <h5 style="font-weight: 600; margin-bottom: 5px;">Ruhul Mudarris</h5>
                                        <p style="margin: 0; color: var(--ztc-text-text-2);">Semangat Perjuangan Guru</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 mb-20">
                                <div class="d-flex align-items-start mb-15">
                                    <div class="me-3">
                                        <span style="display: inline-block; width: clamp(2rem, 3vw, 2.5rem); height: clamp(2rem, 3vw, 2.5rem); background: linear-gradient(135deg, #1ABC9C 0%, #16A085 100%); color: white; border-radius: 50%; text-align: center; line-height: clamp(2rem, 3vw, 2.5rem); font-weight: bold;">e</span>
                                    </div>
                                    <div>
                                        <h5 style="font-weight: 600; margin-bottom: 5px;">Maal</h5>
                                        <p style="margin: 0; color: var(--ztc-text-text-2);">Finansial/biaya besar</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 mb-20">
                                <div class="d-flex align-items-start mb-15">
                                    <div class="me-3">
                                        <span style="display: inline-block; width: clamp(2rem, 3vw, 2.5rem); height: clamp(2rem, 3vw, 2.5rem); background: linear-gradient(135deg, #1ABC9C 0%, #16A085 100%); color: white; border-radius: 50%; text-align: center; line-height: clamp(2rem, 3vw, 2.5rem); font-weight: bold;">f</span>
                                    </div>
                                    <div>
                                        <h5 style="font-weight: 600; margin-bottom: 5px;">Khidmah</h5>
                                        <p style="margin: 0; color: var(--ztc-text-text-2);">Kesiapan Mental dan Fisik Murid/santri</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 mb-20">
                                <div class="d-flex align-items-start mb-15">
                                    <div class="me-3">
                                        <span style="display: inline-block; width: clamp(2rem, 3vw, 2.5rem); height: clamp(2rem, 3vw, 2.5rem); background: linear-gradient(135deg, #1ABC9C 0%, #16A085 100%); color: white; border-radius: 50%; text-align: center; line-height: clamp(2rem, 3vw, 2.5rem); font-weight: bold;">g</span>
                                    </div>
                                    <div>
                                        <h5 style="font-weight: 600; margin-bottom: 5px;">Du'a ul walid wal ummah</h5>
                                        <p style="margin: 0; color: var(--ztc-text-text-2);">Dukungan Orang Tua Santri dan Umat</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-30" style="background: linear-gradient(135deg, #1ABC9C 0%, #16A085 100%); color: white; padding: 1.25rem; border-radius: 0.5rem;">
                            <p style="margin: 0; font-size: clamp(0.875rem, 1.6vw, 1rem); line-height: 1.8; font-weight: 500;">
                                Ketujuh instrumen ini menjadi alasan terciptanya 'Aadah (budaya disiplin) di PP Nurul Islam.
                            </p>
                        </div>
                    </div>

                    <!-- 3. Pola Kegiatan Belajar Mengajar -->
                    <div class="mb-50">
                        <h3 class="mb-30" style="color: var(--ztc-text-text-3); font-size: clamp(1.25rem, 3vw, 1.75rem); font-weight: 700; border-bottom: 3px solid var(--ztc-text-text-4); padding-bottom: 10px;">
                            3. Pola Kegiatan Belajar Mengajar
                        </h3>
                        <p class="mb-30" style="font-size: clamp(0.875rem, 1.6vw, 1rem); line-height: 1.8; color: var(--ztc-text-text-2);">
                            Menggabungkan tiga model pembelajaran terintegrasi (Kokurikuler, intrakurikuler, dan ekstrakurikuler) dengan pola KBM yang mencakup:
                        </p>
                        
                        <div class="row">
                            <div class="col-lg-4 col-md-6 mb-30">
                                <div class="vl-about-icon-box text-center" style="height: 100%; padding: clamp(1.5rem, 3vw, 1.875rem); background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-radius: 0.75rem;">
                                    <div class="vl-about-icon mb-20">
                                        <span><i class="fa-solid fa-brain" style="font-size: clamp(2.5rem, 5.2vw, 3.125rem); color: var(--ztc-text-text-4);"></i></span>
                                    </div>
                                    <div class="vl-icon-content">
                                        <h4 class="title mb-20">a. Olah Rasio</h4>
                                        <p style="color: var(--ztc-text-text-2);">Pengembangan kemampuan berpikir kritis dan analitis</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 mb-30">
                                <div class="vl-about-icon-box text-center" style="height: 100%; padding: clamp(1.5rem, 3vw, 1.875rem); background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-radius: 0.75rem;">
                                    <div class="vl-about-icon mb-20">
                                        <span><i class="fa-solid fa-heart" style="font-size: clamp(2.5rem, 5.2vw, 3.125rem); color: var(--ztc-text-text-4);"></i></span>
                                    </div>
                                    <div class="vl-icon-content">
                                        <h4 class="title mb-20">b. Olah Rasa</h4>
                                        <p style="color: var(--ztc-text-text-2);">Pengembangan emosi dan spiritualitas</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 mb-30">
                                <div class="vl-about-icon-box text-center" style="height: 100%; padding: clamp(1.5rem, 3vw, 1.875rem); background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-radius: 0.75rem;">
                                    <div class="vl-about-icon mb-20">
                                        <span><i class="fa-solid fa-dumbbell" style="font-size: clamp(2.5rem, 5.2vw, 3.125rem); color: var(--ztc-text-text-4);"></i></span>
                                    </div>
                                    <div class="vl-icon-content">
                                        <h4 class="title mb-20">c. Olah Raga</h4>
                                        <p style="color: var(--ztc-text-text-2);">Pengembangan fisik dan kesehatan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-30" style="background: linear-gradient(135deg, #FBD459 0%, #F39C12 100%); color: white; padding: 25px; border-radius: 0.75rem; text-align: center;">
                            <h4 style="font-weight: 700; margin-bottom: 0.9375rem; font-size: clamp(1.125rem, 2.3vw, 1.375rem);">Tujuan</h4>
                            <p style="margin: 0; font-size: clamp(0.875rem, 1.8vw, 1.125rem); line-height: 1.8; font-weight: 500;">
                                Menghasilkan generasi yang <strong>Berilmu amaliah, Beramal Ilmiah dan Berakhlakul Karimah</strong>
                            </p>
                        </div>
                    </div>

                    <!-- 4. Sibghoh (karakter) Kegiatan Belajar Mengajar -->
                    <div class="mb-50" style="background-color: #f8f9fa; padding: clamp(2rem, 4vw, 2.5rem); border-radius: 0.75rem;">
                        <h3 class="mb-30" style="color: var(--ztc-text-text-3); font-size: clamp(1.25rem, 3vw, 1.75rem); font-weight: 700; border-bottom: 3px solid var(--ztc-text-text-4); padding-bottom: 10px;">
                            4. Sibghoh (karakter) Kegiatan Belajar Mengajar
                        </h3>
                        
                        <div class="mb-30" style="background: white; padding: 25px; border-radius: 0.5rem; border-right: 5px solid var(--ztc-text-text-4);">
                            <p style="font-size: clamp(1rem, 2vw, 1.25rem); font-weight: 600; color: var(--ztc-text-text-3); margin-bottom: 10px; font-family: 'Arial', sans-serif;">
                                المحافظة على القديم الصالح والأخذ بالجديد الأصلح
                            </p>
                            <p style="font-size: clamp(0.875rem, 1.6vw, 1rem); line-height: 1.8; color: var(--ztc-text-text-2); margin: 0;">
                                <strong>Mempertahankan tradisi lama yang baik dan mengambil yang baru yang lebih baik</strong>
                            </p>
                        </div>
                        
                        <p class="mb-30" style="font-size: clamp(0.875rem, 1.6vw, 1rem); line-height: 1.8; color: var(--ztc-text-text-2);">
                            Program <strong>Expert Class</strong> yang dikembangkan meliputi:
                        </p>
                        
                        <div class="row">
                            <div class="col-lg-6 col-md-6 mb-20">
                                <div class="d-flex align-items-start mb-15">
                                    <div class="me-3">
                                        <span style="display: inline-block; width: 35px; height: 35px; background: linear-gradient(135deg, #1ABC9C 0%, #16A085 100%); color: white; border-radius: 0.5rem; text-align: center; line-height: 35px; font-weight: bold; font-size: clamp(0.8125rem, 1.5vw, 0.875rem);">1</span>
                                    </div>
                                    <div>
                                        <h5 style="font-weight: 600; margin-bottom: 5px; color: var(--ztc-text-text-3);">International Class Program</h5>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 mb-20">
                                <div class="d-flex align-items-start mb-15">
                                    <div class="me-3">
                                        <span style="display: inline-block; width: 35px; height: 35px; background: linear-gradient(135deg, #1ABC9C 0%, #16A085 100%); color: white; border-radius: 0.5rem; text-align: center; line-height: 35px; font-weight: bold; font-size: clamp(0.8125rem, 1.5vw, 0.875rem);">2</span>
                                    </div>
                                    <div>
                                        <h5 style="font-weight: 600; margin-bottom: 5px; color: var(--ztc-text-text-3);">Kutubut Turots Islami</h5>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 mb-20">
                                <div class="d-flex align-items-start mb-15">
                                    <div class="me-3">
                                        <span style="display: inline-block; width: 35px; height: 35px; background: linear-gradient(135deg, #1ABC9C 0%, #16A085 100%); color: white; border-radius: 0.5rem; text-align: center; line-height: 35px; font-weight: bold; font-size: clamp(0.8125rem, 1.5vw, 0.875rem);">3</span>
                                    </div>
                                    <div>
                                        <h5 style="font-weight: 600; margin-bottom: 5px; color: var(--ztc-text-text-3);">Dirosah Islamiyah</h5>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 mb-20">
                                <div class="d-flex align-items-start mb-15">
                                    <div class="me-3">
                                        <span style="display: inline-block; width: 35px; height: 35px; background: linear-gradient(135deg, #1ABC9C 0%, #16A085 100%); color: white; border-radius: 0.5rem; text-align: center; line-height: 35px; font-weight: bold; font-size: clamp(0.8125rem, 1.5vw, 0.875rem);">4</span>
                                    </div>
                                    <div>
                                        <h5 style="font-weight: 600; margin-bottom: 5px; color: var(--ztc-text-text-3);">Tahfizul Qur'an</h5>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 mb-20">
                                <div class="d-flex align-items-start mb-15">
                                    <div class="me-3">
                                        <span style="display: inline-block; width: 35px; height: 35px; background: linear-gradient(135deg, #1ABC9C 0%, #16A085 100%); color: white; border-radius: 0.5rem; text-align: center; line-height: 35px; font-weight: bold; font-size: clamp(0.8125rem, 1.5vw, 0.875rem);">5</span>
                                    </div>
                                    <div>
                                        <h5 style="font-weight: 600; margin-bottom: 5px; color: var(--ztc-text-text-3);">Math and Science / Vocation Class</h5>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 mb-20">
                                <div class="d-flex align-items-start mb-15">
                                    <div class="me-3">
                                        <span style="display: inline-block; width: 35px; height: 35px; background: linear-gradient(135deg, #1ABC9C 0%, #16A085 100%); color: white; border-radius: 0.5rem; text-align: center; line-height: 35px; font-weight: bold; font-size: clamp(0.8125rem, 1.5vw, 0.875rem);">6</span>
                                    </div>
                                    <div>
                                        <h5 style="font-weight: 600; margin-bottom: 5px; color: var(--ztc-text-text-3);">Social Class</h5>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 mb-20">
                                <div class="d-flex align-items-start mb-15">
                                    <div class="me-3">
                                        <span style="display: inline-block; width: 35px; height: 35px; background: linear-gradient(135deg, #1ABC9C 0%, #16A085 100%); color: white; border-radius: 0.5rem; text-align: center; line-height: 35px; font-weight: bold; font-size: clamp(0.8125rem, 1.5vw, 0.875rem);">7</span>
                                    </div>
                                    <div>
                                        <h5 style="font-weight: 600; margin-bottom: 5px; color: var(--ztc-text-text-3);">Bilingual Class</h5>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 mb-20">
                                <div class="d-flex align-items-start mb-15">
                                    <div class="me-3">
                                        <span style="display: inline-block; width: 35px; height: 35px; background: linear-gradient(135deg, #1ABC9C 0%, #16A085 100%); color: white; border-radius: 0.5rem; text-align: center; line-height: 35px; font-weight: bold; font-size: clamp(0.8125rem, 1.5vw, 0.875rem);">8</span>
                                    </div>
                                    <div>
                                        <h5 style="font-weight: 600; margin-bottom: 5px; color: var(--ztc-text-text-3);">Sport Class</h5>
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
<!--===== KONSEP STRATEGIS PENDIDIKAN AREA ENDS =======-->

@endsection

