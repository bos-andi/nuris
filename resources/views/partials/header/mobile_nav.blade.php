<!--===== MOBILE HEADER STARTS =======-->
<div class="mobile-header mobile-haeder1 d-block d-lg-none">
    <div class="container">
        <div class="col-12">
            <div class="mobile-header-elements">
                <div class="mobile-logo">
                    <a href="{{ route('pages.index') }}"><img src="{{ asset('img/logo/nuris-logo.png') }}" alt="Logo PP. Nurul Islam" style="max-height: 50px;"></a>
                </div>
                <div class="mobile-nav-icon dots-menu">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mobile-sidebar mobile-sidebar1">
            <div class="logosicon-area">
                <div class="logos">
                    <img src="{{ asset('img/logo/nuris-logo.png') }}" alt="Logo PP. Nurul Islam" style="max-height: 80px;">
                </div>
        <div class="menu-close">
            <i class="fa-solid fa-xmark"></i>
        </div>
    </div>
    <div class="mobile-nav mobile-nav1">
        <ul class="mobile-nav-list nav-list1">
            <li><a href="{{ route('pages.index') }}">Beranda</a></li>
            <li><a href="#">Tentang Nuris</a>
                <ul class="sub-menu">
                    <li><a href="{{ route('pages.display', 'profil-pengasuh') }}">Profil Pengasuh</a></li>
                    <li><a href="{{ route('pages.display', 'sekilas-nuris') }}">Sekilas PP. Nurul Islam</a></li>
                    <li><a href="{{ route('pages.display', 'visi-misi') }}">Visi, Misi, Tujuan, Motto</a></li>
                    <li><a href="{{ route('pages.display', 'makna-logo') }}">Makna Logo</a></li>
                    <li><a href="#">Struktur Organisasi</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('pages.display', 'pengurus-yayasan') }}">Pengurus Yayasan</a></li>
                            <li><a href="{{ route('pages.display', 'pengurus-pesantren') }}">Pengurus Pesantren</a></li>
                            <li><a href="{{ route('pages.display', 'dewan-pengurus-pusat') }}">Dewan Pengurus Pusat</a></li>
                            <li><a href="{{ route('pages.display', 'pengurus-unit') }}">Pengurus Unit</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('pages.display', 'data-guru-karyawan') }}">Data Guru & Karyawan</a></li>
                    <li><a href="#">Pesantren</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('pages.display', 'nuris-1') }}">Nuris 1</a></li>
                            <li><a href="{{ route('pages.display', 'nuris-2') }}">Nuris 2</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#">Informasi</a>
                <ul class="sub-menu">
                    <li><a href="{{ route('pages.display', 'fasilitas') }}">Fasilitas</a></li>
                    <li><a href="#">Kegiatan Belajar Mengajar</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('pages.display', 'konsep-strategis-pendidikan') }}">Konsep Strategis Pendidikan dan Pengajaran</a></li>
                            <li><a href="{{ route('pages.display', 'kegiatan-yaumiyah') }}">Kegiatan Yaumiyah</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('pages.display', 'sistem-kepengasuhan') }}">Sistem Kepengasuhan</a></li>
                </ul>
            </li>
            <li><a href="#">Unit Pendidikan</a>
                <ul class="sub-menu">
                    <li><a href="#">Unit SLTP</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('pages.display', 'mts-1-nurul-islam') }}">MTs 1 Nurul Islam</a></li>
                            <li><a href="{{ route('pages.display', 'mts-2-nurul-islam') }}">MTs 2 Nurul Islam</a></li>
                            <li><a href="{{ route('pages.display', 'smp-ubq-nurul-islam') }}">SMP UBQ Nurul Islam</a></li>
                            <li><a href="{{ route('pages.display', 'smp-2-trans-sains-nurul-islam') }}">SMP 2 Trans-Sains Nurul Islam</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Unit SLTA Reguler</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('pages.display', 'ma-1-nurul-islam') }}">MA 1 Nurul Islam</a></li>
                            <li><a href="{{ route('pages.display', 'smk-ubp-nurul-islam') }}">SMK UBP Nurul Islam</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Unit SLTA Internasional</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('pages.display', 'ma-2-ad-dauliyah-nurul-islam') }}">MA 2 Ad-Dauliyah Nurul Islam</a></li>
                            <li><a href="{{ route('pages.display', 'sma-global-school-nurul-islam') }}">SMA Global School Nurul Islam</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Madrasah Diniyah</a>
                        <ul class="sub-menu">
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
            <li><a href="#">Unit Khidmah</a>
                <ul class="sub-menu">
                    <li><a href="{{ route('pages.display', 'nuris-medika') }}">Nuris Medika</a></li>
                    <li><a href="{{ route('pages.display', 'nuris-media') }}">Nuris Media</a></li>
                    <li><a href="{{ route('pages.display', 'nuris-school-bank') }}">Nuris School Bank</a></li>
                    <li><a href="{{ route('pages.display', 'nuris-mart') }}">Nuris Mart</a></li>
                </ul>
            </li>
            <li><a href="#">Program Unggulan</a>
                <ul class="sub-menu">
                    <li><a href="{{ route('pages.display', 'expert-classes') }}">Expert Classes</a></li>
                    <li><a href="{{ route('pages.display', 'leadership-problem-solving') }}">Leadership & Problem Solving</a></li>
                    <li><a href="{{ route('pages.display', 'takhossus-kader-dakwah') }}">Takhossus bi At-Takhsis (Kader Dakwah)</a></li>
                </ul>
            </li>
            <li><a href="{{ route('articles.index') }}">Berita</a></li>
            <li><a href="#">Gallery</a>
                <ul class="sub-menu">
                    <li><a href="{{ route('galleries.photos') }}">Gallery Foto</a></li>
                    <li><a href="{{ route('galleries.videos') }}">Gallery Video</a></li>
                </ul>
            </li>
        </ul>

        <div class="allmobilesection">
            <!-- btn -->
            <a href="{{ route('pages.display', 'psb-2026') }}" class="header-mobile-btn1">PSB 2026 <span><i class="fa-solid fa-arrow-right"></i></span></a>

            <div class="vl-mobile-contact1">
                <h3 class="title">Kontak Info</h3>
                <div class="footer1-contact-info">
                    <div class="contact-info-single">
                        <div class="contact-info-icon">
                            <i class="fa-solid fa-phone-volume"></i>
                        </div>
                        <div class="contact-info-text">
                            <a href="tel:081234567890">081-234-567-890</a>
                        </div>
                    </div>

                    <!-- single footer -->
                    <div class="contact-info-single">
                        <div class="contact-info-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="contact-info-text">
                            <a href="mailto:info@nuris.ac.id">info@nuris.ac.id</a>
                        </div>
                    </div>

                    <!-- single footer -->
                    <div class="contact-info-single">
                        <div class="contact-info-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="contact-info-text">
                            <a href="#">Alamat PP. Nurul Islam</a>
                        </div>
                    </div>


                    <div class="vl-mobile-contact1">
                        <h3 class="title">Social Links</h3>
                        <div class="social-links-mobile-menu">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== MOBILE HEADER ENDS =======-->
