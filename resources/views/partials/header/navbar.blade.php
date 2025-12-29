@php
    $baseUrl = request()->getSchemeAndHttpHost();
@endphp
<!-- ===================== HEADER TOP AREA START =====================-->
<div class="vl-header-top d-none d-lg-block">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="vl-header-top-content">
                    <p>Selamat Datang di Website PP. Nurul Islam</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="vl-header-top-icon">
                    <div class="vl-header-top-icbox">
                        <div class="top-icon">
                            <span><img src="{{ $baseUrl }}/img/icons/vl-top-ic-1.1.svg" alt=""></span>
                        </div>
                        <div class="top-content">
                            <a href="mailto:info@nuris.ac.id">admin@nuris.id</a>
                        </div>
                    </div>

                    <div class="vl-header-top-icbox">
                        <div class="top-icon">
                            <span><img src="{{ $baseUrl }}/img/icons/vl-top-ic-1.2.svg" alt=""></span>
                        </div>
                        <div class="top-content">
                            <a href="https://wa.me/6282231942642?text=assalamu'alikum,%20saya%20ingin%20bertanya%20tantang%20ponpes%20nuris%20-%20mojokerto">082231942642</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- ===================== HEADER TOP AREA END =====================-->

<!--=====HEADER START=======-->
<header>
    <div class="header-area homepage1 header header-sticky d-none d-lg-block mt-16" id="header">
        <div class="container-fluid navbar-dynamic-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-elements header-elements-1">
                        <div class="site-logo">
                            <a href="{{ route('pages.index') }}"><img src="{{ $baseUrl }}/img/logo/nuris-logo.png" alt="Logo PP. Nurul Islam" style="max-height: 50px;"></a>
                        </div>
                        <div class="main-menu">
                            <ul>
                                <li><a href="{{ route('pages.index') }}">Beranda</a></li>
                                <li><a href="#">Tentang Nuris <i class="fa-solid fa-angle-down"></i></a>
                                    <ul class="dropdown-padding level-1-submenu">
                                        <li><a href="{{ route('pages.display', 'profil-pengasuh') }}">Profil Pengasuh</a></li>
                                        <li><a href="{{ route('pages.display', 'sekilas-nuris') }}">Sekilas PP. Nurul Islam</a></li>
                                        <li><a href="{{ route('pages.display', 'visi-misi') }}">Visi, Misi, Tujuan, Motto</a></li>
                                        <li><a href="{{ route('pages.display', 'makna-logo') }}">Makna Logo</a></li>
                                        <li class="has-level-2-menu"><a href="#">Struktur Organisasi <i class="fa-solid fa-angle-right"></i></a>
                                            <ul class="dropdown-padding level-2-submenu">
                                                <li><a href="{{ route('pages.display', 'pengurus-yayasan') }}">Pengurus Yayasan</a></li>
                                                <li><a href="{{ route('pages.display', 'pengurus-pesantren') }}">Pengurus Pesantren</a></li>
                                                <li><a href="{{ route('pages.display', 'dewan-pengurus-pusat') }}">Dewan Pengurus Pusat</a></li>
                                                <li><a href="{{ route('pages.display', 'pengurus-unit') }}">Pengurus Unit</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('pages.display', 'data-guru-karyawan') }}">Data Guru & Karyawan</a></li>
                                        <li class="has-level-2-menu"><a href="#">Pesantren <i class="fa-solid fa-angle-right"></i></a>
                                            <ul class="dropdown-padding level-2-submenu">
                                                <li><a href="{{ route('pages.display', 'nuris-1') }}">Nuris 1</a></li>
                                                <li><a href="{{ route('pages.display', 'nuris-2') }}">Nuris 2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Informasi <i class="fa-solid fa-angle-down"></i></a>
                                    <ul class="dropdown-padding level-1-submenu">
                                        <li><a href="{{ route('pages.display', 'fasilitas') }}">Fasilitas</a></li>
                                        <li class="has-level-2-menu"><a href="#">Kegiatan Belajar Mengajar <i class="fa-solid fa-angle-right"></i></a>
                                            <ul class="dropdown-padding level-2-submenu">
                                                <li><a href="{{ route('pages.display', 'konsep-strategis-pendidikan') }}">Konsep Strategis Pendidikan dan Pengajaran</a></li>
                                                <li><a href="{{ route('pages.display', 'kegiatan-yaumiyah') }}">Kegiatan Yaumiyah</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('pages.display', 'sistem-kepengasuhan') }}">Sistem Kepengasuhan</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Unit Pendidikan <i class="fa-solid fa-angle-down"></i></a>
                                    <ul class="dropdown-padding level-1-submenu">
                                        <li class="has-level-2-menu"><a href="#">Unit SLTP <i class="fa-solid fa-angle-right"></i></a>
                                            <ul class="dropdown-padding level-2-submenu">
                                                <li><a href="{{ route('pages.display', 'mts-1-nurul-islam') }}">MTs 1 Nurul Islam</a></li>
                                                <li><a href="{{ route('pages.display', 'mts-2-nurul-islam') }}">MTs 2 Nurul Islam</a></li>
                                                <li><a href="{{ route('pages.display', 'smp-ubq-nurul-islam') }}">SMP UBQ Nurul Islam</a></li>
                                                <li><a href="{{ route('pages.display', 'smp-2-trans-sains-nurul-islam') }}">SMP 2 Trans-Sains Nurul Islam</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-level-2-menu"><a href="#">Unit SLTA Reguler <i class="fa-solid fa-angle-right"></i></a>
                                            <ul class="dropdown-padding level-2-submenu">
                                                <li><a href="{{ route('pages.display', 'ma-1-nurul-islam') }}">MA 1 Nurul Islam</a></li>
                                                <li><a href="{{ route('pages.display', 'smk-ubp-nurul-islam') }}">SMK UBP Nurul Islam</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-level-2-menu"><a href="#">Unit SLTA Internasional <i class="fa-solid fa-angle-right"></i></a>
                                            <ul class="dropdown-padding level-2-submenu">
                                                <li><a href="{{ route('pages.display', 'ma-2-ad-dauliyah-nurul-islam') }}">MA 2 Ad-Dauliyah Nurul Islam</a></li>
                                                <li><a href="{{ route('pages.display', 'sma-global-school-nurul-islam') }}">SMA Global School Nurul Islam</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-level-2-menu"><a href="https://nuris.ac.id/" target="_blank" rel="noopener noreferrer">INSTITUT NURUL ISLAM <i class="fa-solid fa-angle-right"></i></a>
                                            <ul class="dropdown-padding level-2-submenu">
                                                <li class="has-level-3-menu"><a href="https://nuris.ac.id/" target="_blank" rel="noopener noreferrer">Fakultas Tarbiyah <i class="fa-solid fa-angle-right"></i></a>
                                                    <ul class="dropdown-padding level-3-submenu">
                                                        <li><a href="https://nuris.ac.id/" target="_blank" rel="noopener noreferrer">S1 Pendidikan Agama Islam</a></li>
                                                        <li><a href="https://nuris.ac.id/" target="_blank" rel="noopener noreferrer">S1 Pendidikan Bahasa Inggris</a></li>
                                                        <li><a href="https://nuris.ac.id/" target="_blank" rel="noopener noreferrer">S1 Pendidikan Matematika</a></li>
                                                    </ul>
                                                </li>
                                                <li class="has-level-3-menu"><a href="https://nuris.ac.id/" target="_blank" rel="noopener noreferrer">Fakultas Ekonomi & Bisnis Islam <i class="fa-solid fa-angle-right"></i></a>
                                                    <ul class="dropdown-padding level-3-submenu">
                                                        <li><a href="https://nuris.ac.id/" target="_blank" rel="noopener noreferrer">S1 Ekonomi Syari'ah</a></li>
                                                        <li><a href="https://nuris.ac.id/" target="_blank" rel="noopener noreferrer">S1 Perbankan Syari'ah</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-level-2-menu"><a href="#">Madrasah Diniyah <i class="fa-solid fa-angle-right"></i></a>
                                            <ul class="dropdown-padding level-2-submenu">
                                                <li><a href="{{ route('pages.display', 'mdta-nurul-islam-1') }}">MDTA Nurul Islam 1</a></li>
                                                <li><a href="{{ route('pages.display', 'mdta-1-nurul-islam-2') }}">MDTA 1 Nurul Islam 2</a></li>
                                                <li><a href="{{ route('pages.display', 'mdta-2-nurul-islam-2') }}">MDTA 2 Nurul Islam 2</a></li>
                                                <li><a href="{{ route('pages.display', 'mdta-3-nurul-islam-2') }}">MDTA 3 Nurul Islam 2</a></li>
                                                <li><a href="{{ route('pages.display', 'mdtw-nurul-islam-1') }}">MDTW Nurul Islam 1</a></li>
                                                <li><a href="{{ route('pages.display', 'mdtw-1-nurul-islam-2') }}">MDTW 1 Nurul Islam 2</a></li>
                                                <li><a href="{{ route('pages.display', 'mdtw-2-nurul-islam-2') }}">MDTW 2 Nurul Islam 2</a></li>
                                                <li><a href="{{ route('pages.display', 'mdtw-3-nurul-islam-2') }}">MDTW 3 Nurul Islam 2</a></li>
                                                <li><a href="{{ route('pages.display', 'tbt-mdtu-nurul-islam') }}">TBT & MDTU Nurul Islam</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Unit Khidmah <i class="fa-solid fa-angle-down"></i></a>
                                    <ul class="dropdown-padding level-1-submenu">
                                        <li><a href="{{ route('pages.display', 'nuris-medika') }}">Nuris Medika</a></li>
                                        <li><a href="{{ route('pages.display', 'nuris-media') }}">Nuris Media</a></li>
                                        <li><a href="{{ route('pages.display', 'nuris-school-bank') }}">Nuris School Bank</a></li>
                                        <li><a href="{{ route('pages.display', 'nuris-mart') }}">Nuris Mart</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Program Unggulan <i class="fa-solid fa-angle-down"></i></a>
                                    <ul class="dropdown-padding level-1-submenu">
                                        <li><a href="{{ route('pages.display', 'expert-classes') }}">Expert Classes</a></li>
                                        <li><a href="{{ route('pages.display', 'leadership-problem-solving') }}">Leadership & Problem Solving</a></li>
                                        <li><a href="{{ route('pages.display', 'takhossus-kader-dakwah') }}">Takhossus bi At-Takhsis (Kader Dakwah)</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="btn-area">
                            <a href="{{ route('psb') }}" class="header-btn1">PSB 2026 <span><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--=====HEADER END =======-->
