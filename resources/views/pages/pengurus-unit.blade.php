@extends('layouts.app')

@section('content')

<!--===== PAGE HEADER STARTS =======-->
<section class="vl-page-header" style="background-image: url({{ asset('img/banner/nuris-hero-bg.jpg') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-page-header-content text-center">
                    <h1 class="vl-page-title">Pengurus Unit</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#">Tentang Nuris</a></li>
                            <li class="breadcrumb-item"><a href="#">Struktur Organisasi</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Pengurus Unit</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== PAGE HEADER ENDS =======-->

<!--===== PENGURUS UNIT AREA STARTS =======-->
<section class="vl-about-section sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Struktur Organisasi</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Pimpinan Unit PP. Nurul Islam</h2>
                    <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                        Tahun Akademik 2025-2026
                    </p>
                    <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" style="max-width: 800px; margin: 20px auto 0;">
                        Pimpinan Unit adalah tim yang bertanggung jawab atas pengelolaan dan pengembangan masing-masing unit pendidikan di bawah naungan Pondok Pesantren Nurul Islam.
                    </p>
                </div>
            </div>
        </div>

        @forelse($pengurusByUnit as $unit => $pengurusList)
        <div class="row mb-60" style="background-color: #f8f9fa; padding: 40px 20px; border-radius: 10px;">
            <div class="col-lg-12">
                <div class="vl-section-title-1 mb-40">
                    <h3 class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">{{ $loop->iteration }}. {{ $unit }}</h3>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    @foreach($pengurusList as $index => $pengurus)
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="{{ ($index + 1) * 100 + 300 }}">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ $pengurus->foto ? asset('storage/' . $pengurus->foto) : asset('img/team/vl-team-inner-1.1.png') }}" alt="{{ $pengurus->nama }}">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">{{ $pengurus->jabatan }}</h3>
                                <p class="mb-10">{{ $pengurus->nama }}</p>
                                <span>{{ $pengurus->jabatan_lengkap ?? $unit }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @empty
        <div class="row">
            <div class="col-lg-12">
                <p class="text-center text-gray-500">Belum ada data pengurus unit.</p>
            </div>
        </div>
        @endforelse
    </div>
</section>
<!--===== PENGURUS UNIT AREA ENDS =======-->

<!--===== TUGAS & FUNGSI AREA STARTS =======-->
<section class="vl-about-section sp2" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Tugas & Fungsi</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Tugas dan Fungsi Pimpinan Unit</h2>
                </div>
            </div>
        </div>
        <div class="row">
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Ketua">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Ketua</h3>
                                <p class="mb-10">Dr. KH. Ahmad Siddiq, SE., MM.</p>
                                <span>Ketua STAI</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.2.png') }}" alt="Waket I Bidang Akademik">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Waket I Bidang Akademik</h3>
                                <p class="mb-10">M. Ibda'u Sulhi, S. Pd., M. Pd.</p>
                                <span>Wakil Ketua I</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.3.png') }}" alt="Waket II Bidang Keuangan">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Waket II Bidang Keuangan</h3>
                                <p class="mb-10">H. M. Ikhsan, S. Pd. S. Kom. MM.</p>
                                <span>Wakil Ketua II</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.4.png') }}" alt="Waket III Bidang Kemahasiswaan">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Waket III Bidang Kemahasiswaan</h3>
                                <p class="mb-10">Sulistyowati, S. Pd. M. H.</p>
                                <span>Wakil Ketua III</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="700">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.5.png') }}" alt="Kepala Prodi Ekonomi Syari'ah">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Prodi Ekonomi Syari'ah</h3>
                                <p class="mb-10">Lucky Al-Hafzy, M.Pd.</p>
                                <span>STAI</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="800">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.6.png') }}" alt="Kepala Prodi Matematika">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Prodi Matematika</h3>
                                <p class="mb-10">Tofan Adityawan, S.Si., M.Pd.</p>
                                <span>STAI</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="900">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Prodi Bahasa Inggris">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Prodi Bahasa Inggris</h3>
                                <p class="mb-10">Gusti Agung Cahyono, S. Sos, M. H.</p>
                                <span>STAI</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1000">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.2.png') }}" alt="Kepala Prodi PAI">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Prodi PAI</h3>
                                <p class="mb-10">M. Qoolili Zaelani, M.Pd.</p>
                                <span>STAI</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1100">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.3.png') }}" alt="Kepala Prodi Perbankan Syari'ah">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Prodi Perbankan Syari'ah</h3>
                                <p class="mb-10">Yuniar Fathiyyatur Rosyida M.E.</p>
                                <span>STAI</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1200">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.4.png') }}" alt="Kepala LPM">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala LPM</h3>
                                <p class="mb-10">Ainun Najih, S.Pd, M.Si</p>
                                <span>STAI</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1300">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.5.png') }}" alt="Kepala LPPM">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala LPPM</h3>
                                <p class="mb-10">Setiwan Budi, M.Pd.</p>
                                <span>STAI</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1400">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.6.png') }}" alt="Kepala Badan Administrasi Umum">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Badan Administrasi Umum</h3>
                                <p class="mb-10">Niki Laila Sari, M.Pd</p>
                                <span>STAI</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1500">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala BAAK">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala BAAK</h3>
                                <p class="mb-10">Mohammad Naufal Fahmi, M.Pd.</p>
                                <span>STAI</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MA -->
        <div class="row mb-60" style="background-color: #f8f9fa; padding: 40px 20px; border-radius: 10px;">
            <div class="col-lg-12">
                <div class="vl-section-title-1 mb-40">
                    <h3 class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">2. Madrasah Aliyah (MA)</h3>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala</h3>
                                <p class="mb-10">Dr. KH. Ahmad Siddiq, SE., MM.</p>
                                <span>MA</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.2.png') }}" alt="Wakamad. Kurikulum">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Wakamad. Kurikulum</h3>
                                <p class="mb-10">Maria Ulfa, S. Pd., M. Pd.</p>
                                <span>MA</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.3.png') }}" alt="Wakamad. Kesiswaan">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Wakamad. Kesiswaan</h3>
                                <p class="mb-10">Muhammad Ghufron, S. Pd.</p>
                                <span>MA</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.4.png') }}" alt="Wakamad. Hubungan Masyarakat">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Wakamad. Hubungan Masyarakat</h3>
                                <p class="mb-10">Yahya Sabrawi, S. Pd.</p>
                                <span>MA</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="700">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.5.png') }}" alt="Wakamad. Sarana Prasarana">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Wakamad. Sarana Prasarana</h3>
                                <p class="mb-10">Muhammad Syafi'i, S. Pd.</p>
                                <span>MA</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="800">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Penjamin Mutu Pendidikan Madrasah">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Penjamin Mutu Pendidikan Madrasah</h3>
                                <p class="mb-10">Rina Oktavia, S. Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="900">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Tata Usaha">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Tata Usaha</h3>
                                <p class="mb-10">Silpi Nur Laili, S. Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1000">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Koordinator Piket">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Koordinator Piket</h3>
                                <p class="mb-10">Vinny Dhenada Kautsar. S.Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1100">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Laboratorium Komputer-Bahasa">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Laboratorium Komputer-Bahasa</h3>
                                <p class="mb-10">M. Elca Ciko Nurcahyo</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1200">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Laboratorium IPA">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Laboratorium IPA</h3>
                                <p class="mb-10">Fera Puji Rahayu, S.Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1300">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Perpustakaan">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Perpustakaan</h3>
                                <p class="mb-10">Ni'matul Ulya, S.S.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1400">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Bidang Ekstrakurikuler">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Bidang Ekstrakurikuler</h3>
                                <p class="mb-10">Alfi Sukriyanto P.R. S.Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MTs -->
        <div class="row mb-60">
            <div class="col-lg-12">
                <div class="vl-section-title-1 mb-40" style="background-color: #f8f9fa; padding: 20px; border-radius: 10px;">
                    <h3 class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">3. Madrasah Tsanawiyah (MTs)</h3>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala</h3>
                                <p class="mb-10">H. M. Ikhsan, S. Pd., S.Kom., MM.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Wakamad. Kurikulum">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Wakamad. Kurikulum</h3>
                                <p class="mb-10">Sri Wahyuni, S. Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Wakamad. Kesiswaan">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Wakamad. Kesiswaan</h3>
                                <p class="mb-10">Robby Maulana, SM.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Wakamad. Hubungan Masyarakat">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Wakamad. Hubungan Masyarakat</h3>
                                <p class="mb-10">Santi Istiqomah, S. Hum., M. Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="700">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Wakamad. Sarana Prasarana">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Wakamad. Sarana Prasarana</h3>
                                <p class="mb-10">Muhammad Warsan, S. Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="800">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Penjamin Mutu Pendidikan Madrasah">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Penjamin Mutu Pendidikan Madrasah</h3>
                                <p class="mb-10">Wahyuning Istikhomah, S. Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="900">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Tata Usaha">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Tata Usaha</h3>
                                <p class="mb-10">M. Khamim Ghozali, S.Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1000">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Koordinator Piket">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Koordinator Piket</h3>
                                <p class="mb-10">Siti Kholifatur Rosyidah, S. Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1100">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Laboratorium Komputer-Bahasa">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Laboratorium Komputer-Bahasa</h3>
                                <p class="mb-10">Ery Ferdianto</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1200">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Laboratorium IPA">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Laboratorium IPA</h3>
                                <p class="mb-10">Widya Fibrianti, S. Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1300">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Perpustakaan">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Perpustakaan</h3>
                                <p class="mb-10">Vera Puji Rahayu, S.Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1400">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Bidang Ekstrakurikuler">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Bidang Ekstrakurikuler</h3>
                                <p class="mb-10">Indra Jayantie, S.Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MTs 2 -->
        <div class="row mb-60" style="background-color: #f8f9fa; padding: 40px 20px; border-radius: 10px;">
            <div class="col-lg-12">
                <div class="vl-section-title-1 mb-40">
                    <h3 class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">4. Madrasah Tsanawiyah 2 (MTs 2)</h3>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala</h3>
                                <p class="mb-10">Dr. KH. Ahmad Siddiq, SE., MM.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Wakamad. Kurikulum">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Wakamad. Kurikulum</h3>
                                <p class="mb-10">Elfa Qurrotul Afifah, S. Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Wakamad. Kesiswaan">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Wakamad. Kesiswaan</h3>
                                <p class="mb-10">M. Ivan Ubaidillah, S.Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Wakamad. Hubungan Masyarakat">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Wakamad. Hubungan Masyarakat</h3>
                                <p class="mb-10">Yahya Sabrawi, S. Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="700">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Wakamad. Sarana Prasarana">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Wakamad. Sarana Prasarana</h3>
                                <p class="mb-10">Arif Mutamakkin, S. Ag.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="800">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Penjamin Mutu Pendidikan Madrasah">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Penjamin Mutu Pendidikan Madrasah</h3>
                                <p class="mb-10">Dyta Argianti, S. Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="900">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Tata Usaha">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Tata Usaha</h3>
                                <p class="mb-10">Suwindri Novita Sari</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1000">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Koordinator Piket">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Koordinator Piket</h3>
                                <p class="mb-10">Sendri Setya Budi, S. Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1100">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Laboratorium Komputer-Bahasa">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Laboratorium Komputer-Bahasa</h3>
                                <p class="mb-10">M. Hakiki Khoirul Anwar, S. Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1200">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Laboratorium IPA">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Laboratorium IPA</h3>
                                <p class="mb-10">Sita Fatimah Zahro, S. Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1300">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Perpustakaan">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Perpustakaan</h3>
                                <p class="mb-10">Wilda Qonita, S.Pd., M. Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1400">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Bidang Ekstrakurikuler">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Bidang Ekstrakurikuler</h3>
                                <p class="mb-10">Misbahul Anam, S.Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SMP UBQ -->
        <div class="row mb-60">
            <div class="col-lg-12">
                <div class="vl-section-title-1 mb-40" style="background-color: #f8f9fa; padding: 20px; border-radius: 10px;">
                    <h3 class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">5. Sekolah Menengah Pertama Unggulan Berbasis Al-Qur'an (SMP UBQ)</h3>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala</h3>
                                <p class="mb-10">H. M. Ikhsan, S. Pd., S. Kom., MM.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Wakasek. Kurikulum">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Wakasek. Kurikulum</h3>
                                <p class="mb-10">Ahmad Fajar Efendy, SE.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Wakasek. Kesiswaan">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Wakasek. Kesiswaan</h3>
                                <p class="mb-10">Makhrus Ali, S. Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Wakasek. Hubungan Masyarakat">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Wakasek. Hubungan Masyarakat</h3>
                                <p class="mb-10">Yahya Sabrawi, S. Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="700">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Wakasek. Sarana Prasarana">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Wakasek. Sarana Prasarana</h3>
                                <p class="mb-10">Ahmad Rifa'i, S.Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="800">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Penjamin Mutu Pendidikan Sekolah">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Penjamin Mutu Pendidikan Sekolah</h3>
                                <p class="mb-10">Fatakhur Rohmah, S. Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="900">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Tata Usaha">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Tata Usaha</h3>
                                <p class="mb-10">Ana Fidyanti Auliya, S. Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1000">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Koordinator Piket">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Koordinator Piket</h3>
                                <p class="mb-10">Dewi Anita</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1100">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Laboratorium Komputer-Bahasa">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Laboratorium Komputer-Bahasa</h3>
                                <p class="mb-10">M. Elca Ciko Nur Cahyo</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1200">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Laboratorium IPA">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Laboratorium IPA</h3>
                                <p class="mb-10">Fera Puji Rahayu, S.Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1300">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Perpustakaan">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Perpustakaan</h3>
                                <p class="mb-10">Febrica Paramita, S.Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1400">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Bidang Ekstrakurikuler">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Bidang Ekstrakurikuler</h3>
                                <p class="mb-10">Moch. Hisbul Ansor. S.Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SMK UBP -->
        <div class="row mb-60" style="background-color: #f8f9fa; padding: 40px 20px; border-radius: 10px;">
            <div class="col-lg-12">
                <div class="vl-section-title-1 mb-40">
                    <h3 class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">6. Sekolah Menengah Kejuruan Unggulan Berbasis Pesantren (SMK UBP)</h3>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala</h3>
                                <p class="mb-10">M. Ikmaluddin Alfi Hidayat, SM.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Wakasek. Kurikulum">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Wakasek. Kurikulum</h3>
                                <p class="mb-10">Alim Mustofa, S. Pd., M. Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Wakasek. Kesiswaan">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Wakasek. Kesiswaan</h3>
                                <p class="mb-10">M. Dzul Fadli, M.H.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Wakasek. Hubungan Masyarakat">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Wakasek. Hubungan Masyarakat</h3>
                                <p class="mb-10">Santi Istiqomah, S. Hum. M.Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="700">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Wakasek. Sarana Prasarana">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Wakasek. Sarana Prasarana</h3>
                                <p class="mb-10">Muhammad Afifuddin, S. Sos.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="800">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Penjamin Mutu Pendidikan Sekolah">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Penjamin Mutu Pendidikan Sekolah</h3>
                                <p class="mb-10">Dian Devina, S. Or.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="900">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Tata Usaha">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Tata Usaha</h3>
                                <p class="mb-10">Rifatuz Zumroh Ningtyas, S. Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1000">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Koordinator Piket">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Koordinator Piket</h3>
                                <p class="mb-10">M. Ro'uf Harianto, S. Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1100">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Laboratorium Komputer-Bahasa">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Laboratorium Komputer-Bahasa</h3>
                                <p class="mb-10">M. Fuat Dedi Hermawan, S. Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1200">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Laboratorium IPA">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Laboratorium IPA</h3>
                                <p class="mb-10">Widya Febrianti, S. Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1300">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Laboratorium Enterpreneurship">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Laboratorium Enterpreneurship</h3>
                                <p class="mb-10">Widan Futukhi, A. Md.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1400">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Perpustakaan">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Perpustakaan</h3>
                                <p class="mb-10">Sari Rahma Putri, S. Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1500">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Bidang Ekstrakurikuler">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Bidang Ekstrakurikuler</h3>
                                <p class="mb-10">Indra Jayantie, S.Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MA 2 Ad-Dauliyah -->
        <div class="row mb-60">
            <div class="col-lg-12">
                <div class="vl-section-title-1 mb-40" style="background-color: #f8f9fa; padding: 20px; border-radius: 10px;">
                    <h3 class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">7. Madrasah Aliyah 2 Ad-Dauliyah (MA 2 AD)</h3>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala</h3>
                                <p class="mb-10">Doni Andriansyah, S.Pd., M.Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Wakasek. Kurikulum">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Wakasek. Kurikulum</h3>
                                <p class="mb-10">Rois Rahmawan. M.Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Wakasek. Kesiswaan">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Wakasek. Kesiswaan</h3>
                                <p class="mb-10">Fadhil Muhammad</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Wakasek. Hubungan Masyarakat">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Wakasek. Hubungan Masyarakat</h3>
                                <p class="mb-10">Nur Jamilah, M.Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="700">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Wakasek. Sarana Prasarana">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Wakasek. Sarana Prasarana</h3>
                                <p class="mb-10">Laksono Wibowo</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="800">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Penjamin Mutu Pendidikan Sekolah">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Penjamin Mutu Pendidikan Sekolah</h3>
                                <p class="mb-10">Dr. H. M. Amir Sholehuddin, M.Pd.I</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="900">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Tata Usaha">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Tata Usaha</h3>
                                <p class="mb-10">Wulanita Firdaus, S.Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1000">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Koordinator Piket">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Koordinator Piket</h3>
                                <p class="mb-10">M. Adi Purnomo, S. Pd.I.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1100">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Laboratorium Komputer-Bahasa">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Laboratorium Komputer-Bahasa</h3>
                                <p class="mb-10">M. Maulana Rizky</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1200">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Perpustakaan">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Perpustakaan</h3>
                                <p class="mb-10">Tarissa Ulfi Maulina, Lc.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1300">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Bidang Ekstrakurikuler">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Bidang Ekstrakurikuler</h3>
                                <p class="mb-10">Wijayanto, S.Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SMA Global School -->
        <div class="row mb-60" style="background-color: #f8f9fa; padding: 40px 20px; border-radius: 10px;">
            <div class="col-lg-12">
                <div class="vl-section-title-1 mb-40">
                    <h3 class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">8. Sekolah Menengah Atas Global School (SMA GS)</h3>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala</h3>
                                <p class="mb-10">M. Ikmaluddin Alfi Hidayat, S.M.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Wakasek. Kurikulum">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Wakasek. Kurikulum</h3>
                                <p class="mb-10">M. Ikmal Nasruddin, Lc.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Wakasek. Kesiswaan">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Wakasek. Kesiswaan</h3>
                                <p class="mb-10">Afizena</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Wakasek. Hubungan Masyarakat">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Wakasek. Hubungan Masyarakat</h3>
                                <p class="mb-10">Nur Jamilah, M.Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="700">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Wakasek. Sarana Prasarana">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Wakasek. Sarana Prasarana</h3>
                                <p class="mb-10">Laksono Wibowo</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="800">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Penjamin Mutu Pendidikan Sekolah">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Penjamin Mutu Pendidikan Sekolah</h3>
                                <p class="mb-10">Mohammad Anang Syahroni. S.Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="900">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Tata Usaha">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Tata Usaha</h3>
                                <p class="mb-10">Firda Nur Alfiyanti, S. Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1000">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Koordinator Piket">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Koordinator Piket</h3>
                                <p class="mb-10">M. Adi Purnomo, S. Pd.I.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1100">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Laboratorium Komputer-Bahasa">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Laboratorium Komputer-Bahasa</h3>
                                <p class="mb-10">M. Maulana Rizky</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1200">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Perpustakaan">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Perpustakaan</h3>
                                <p class="mb-10">Tarissa Ulfi Maulina, Lc.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1300">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Bidang Ekstrakurikuler">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Bidang Ekstrakurikuler</h3>
                                <p class="mb-10">Wijayanto, S.Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MDTA 1 -->
        <div class="row mb-60">
            <div class="col-lg-12">
                <div class="vl-section-title-1 mb-40" style="background-color: #f8f9fa; padding: 20px; border-radius: 10px;">
                    <h3 class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">9. Madrasah Diniyah Takmiliyah Awaliyah (MDTA 1)</h3>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala</h3>
                                <p class="mb-10">M. Nizardi Samudra Arungan, S. Ag.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Wakamad. Kurikulum">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Wakamad. Kurikulum</h3>
                                <p class="mb-10">Reni Santika, S. Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Penjamin Mutu Pendidikan Madrasah">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Penjamin Mutu Pendidikan Madrasah</h3>
                                <p class="mb-10">M. Qoolili Zaelani, S.Pd. M.Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Tata Usaha">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Tata Usaha</h3>
                                <p class="mb-10">Aji Rizki Agung, S.Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="700">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Koordinator Piket">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Koordinator Piket</h3>
                                <p class="mb-10">Asmaul Khoiriyah, S.Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MDTA 1 Nuris 2 -->
        <div class="row mb-60" style="background-color: #f8f9fa; padding: 40px 20px; border-radius: 10px;">
            <div class="col-lg-12">
                <div class="vl-section-title-1 mb-40">
                    <h3 class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">10. Madrasah Diniyah Takmiliyah Awaliyah (MDTA 1 Nuris 2)</h3>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala</h3>
                                <p class="mb-10">Dr. KH. Ahmad Siddiq, SE., MM.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Wakamad. Kurikulum">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Wakamad. Kurikulum</h3>
                                <p class="mb-10">Doni Andiansyah, S. Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Penjamin Mutu Pendidikan Madrasah">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Penjamin Mutu Pendidikan Madrasah</h3>
                                <p class="mb-10">Salman Al Farizi, S. Ak., M.E.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Tata Usaha">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Tata Usaha</h3>
                                <p class="mb-10">Fahmi Arrizal Bayhaqi</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="700">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Koordinator Piket">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Koordinator Piket</h3>
                                <p class="mb-10">Khotimatul Fauziyah Darsono</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MDTA 2 Nuris 2 -->
        <div class="row mb-60">
            <div class="col-lg-12">
                <div class="vl-section-title-1 mb-40" style="background-color: #f8f9fa; padding: 20px; border-radius: 10px;">
                    <h3 class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">11. Madrasah Diniyah Takmiliyah Awaliyah (MDTA 2 Nuris 2)</h3>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala</h3>
                                <p class="mb-10">Dr. KH. Ahmad Siddiq, SE., MM.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Wakamad. Kurikulum">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Wakamad. Kurikulum</h3>
                                <p class="mb-10">Maftuhatun Nafi'ah, S.Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Penjamin Mutu Pendidikan Madrasah">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Penjamin Mutu Pendidikan Madrasah</h3>
                                <p class="mb-10">M. Anshori Hidayat, S. Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Tata Usaha">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Tata Usaha</h3>
                                <p class="mb-10">Subata Nasriyah, S.Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="700">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Koordinator Piket">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Koordinator Piket</h3>
                                <p class="mb-10">Rizki Nur Saputri</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MDTA 3 Nuris 2 -->
        <div class="row mb-60" style="background-color: #f8f9fa; padding: 40px 20px; border-radius: 10px;">
            <div class="col-lg-12">
                <div class="vl-section-title-1 mb-40">
                    <h3 class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">14. Madrasah Diniyah Takmiliyah Awaliyah 3 Nuris 2 (MDTA 3 Nuris 2)</h3>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala</h3>
                                <p class="mb-10">Dr. KH. Ahmad Siddiq, SE., MM.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Wakamad. Kurikulum">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Wakamad. Kurikulum</h3>
                                <p class="mb-10">Elis Ainiyatul Muhibbah, S.Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Penjamin Mutu Pendidikan Madrasah">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Penjamin Mutu Pendidikan Madrasah</h3>
                                <p class="mb-10">Dwi Andini Putri, S.Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Tata Usaha">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Tata Usaha</h3>
                                <p class="mb-10">M. Ja'far Shodiq</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="700">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Koordinator Piket">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Koordinator Piket</h3>
                                <p class="mb-10">Abdul Najib Tantowi, S.Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MDTW -->
        <div class="row mb-60">
            <div class="col-lg-12">
                <div class="vl-section-title-1 mb-40" style="background-color: #f8f9fa; padding: 20px; border-radius: 10px;">
                    <h3 class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">12. Madrasah Diniyah Takmiliyah Wustho (MDTW)</h3>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala</h3>
                                <p class="mb-10">M. Nizardi Samudra Arungan, S. Ag.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Wakamad. Kurikulum">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Wakamad. Kurikulum</h3>
                                <p class="mb-10">Ahmad Khoirul Anwar, S.Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Penjamin Mutu Pendidikan Madrasah">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Penjamin Mutu Pendidikan Madrasah</h3>
                                <p class="mb-10">Gusti Agung Cahyono, S. Pd. M. H.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Tata Usaha">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Tata Usaha</h3>
                                <p class="mb-10">M. Ainur Rahman Wahid, S.Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="700">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Koordinator Piket">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Koordinator Piket</h3>
                                <p class="mb-10">Madinatuz Zahro</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MDTW 2 -->
        <div class="row mb-60" style="background-color: #f8f9fa; padding: 40px 20px; border-radius: 10px;">
            <div class="col-lg-12">
                <div class="vl-section-title-1 mb-40">
                    <h3 class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">13. Madrasah Diniyah Takmiliyah Wustho 2 (MDTW 2)</h3>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala</h3>
                                <p class="mb-10">H. Abdul Kafi, S.Pd. M.Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Wakamad. Kurikulum">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Wakamad. Kurikulum</h3>
                                <p class="mb-10">M. Fachrudin Naufal, S.Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Penjamin Mutu Pendidikan Madrasah">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Penjamin Mutu Pendidikan Madrasah</h3>
                                <p class="mb-10">H. Yahya Hambali</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Pendamping PMP Madrasah">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Pendamping PMP Madrasah</h3>
                                <p class="mb-10">M. Hasan Bisri, S. Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="700">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Tata Usaha">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Tata Usaha</h3>
                                <p class="mb-10">M. Umar Faruq, S.Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="800">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Koordinator Piket">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Koordinator Piket</h3>
                                <p class="mb-10">Arifatu Musyayadah, S.Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MDTW 2 Nuris 2 -->
        <div class="row mb-60">
            <div class="col-lg-12">
                <div class="vl-section-title-1 mb-40" style="background-color: #f8f9fa; padding: 20px; border-radius: 10px;">
                    <h3 class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">15. Madrasah Diniyah Takmiliyah Wustha 2 Nuris 2 (MDTW 2 Nuris 2)</h3>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala</h3>
                                <p class="mb-10">Dr. KH. Ahmad Siddiq, SE., MM.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Wakamad. Kurikulum">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Wakamad. Kurikulum</h3>
                                <p class="mb-10">M. Syafi'un Nuroyn, S.Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Penjamin Mutu Pendidikan Madrasah">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Penjamin Mutu Pendidikan Madrasah</h3>
                                <p class="mb-10">Nur Rif'atus Sholikha, S.Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Tata Usaha">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Tata Usaha</h3>
                                <p class="mb-10">M. Firdaus</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MDTU + Program TbT -->
        <div class="row mb-60" style="background-color: #f8f9fa; padding: 40px 20px; border-radius: 10px;">
            <div class="col-lg-12">
                <div class="vl-section-title-1 mb-40">
                    <h3 class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">16. Madrasah Diniyah Takmiliyah Ulya (MDTU) + Program TbT</h3>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala</h3>
                                <p class="mb-10">Dr. KH. Ahmad Siddiq, SE., MM.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Wakamad. Kurikulum">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Wakamad. Kurikulum</h3>
                                <p class="mb-10">M. Alfian Salafie, S.H.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Wakamad. Kesantrian">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Wakamad. Kesantrian</h3>
                                <p class="mb-10">Fauzan Alim</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Penjamin Mutu Pendidikan Madrasah">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Penjamin Mutu Pendidikan Madrasah</h3>
                                <p class="mb-10">Selina Rahmawati. S.Pd.. S.Ag., M. Pd</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="700">
                            <div class="vl-team-thumb">
                                <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Kepala Tata Usaha">
                            </div>
                            <div class="vl-team-content text-center">
                                <h3 class="title">Kepala Tata Usaha</h3>
                                <p class="mb-10">Imroatussalamah, S.Pd.</p>
                                <span>Unit</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== PENGURUS UNIT AREA ENDS =======-->

<!--===== TUGAS & FUNGSI AREA STARTS =======-->
<section class="vl-about-section sp2" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Tugas & Fungsi</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Tugas dan Fungsi Pimpinan Unit</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-school" style="font-size: 40px; color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Pengelolaan Unit</h3>
                        <p>Mengelola dan mengembangkan unit pendidikan masing-masing sesuai dengan visi dan misi PP. Nurul Islam, serta memastikan kualitas pendidikan yang optimal.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-chalkboard-teacher" style="font-size: 40px; color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Koordinasi Program</h3>
                        <p>Mengkoordinasikan program dan kegiatan pendidikan di unit masing-masing untuk mencapai tujuan pendidikan yang optimal dan sesuai dengan standar yang ditetapkan.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-sync-alt" style="font-size: 40px; color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Sinergi Antar Unit</h3>
                        <p>Membangun sinergi dan kerjasama dengan unit-unit lain dalam rangka pengembangan pendidikan yang terpadu dan saling mendukung.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== TUGAS & FUNGSI AREA ENDS =======-->

@endsection
