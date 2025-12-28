<!--===== FOOTER AREA STARTS =======-->
@php
    // Gunakan URL dari request saat ini untuk asset
    $baseUrl = request()->getSchemeAndHttpHost();
    $siteName = \App\Models\SiteSetting::get('site_name', 'PP. Nurul Islam');
    $siteDescription = \App\Models\SiteSetting::get('site_description', 'Pondok Pesantren Nurul Islam Mojokerto - Mendidik generasi unggul dengan nilai-nilai Islam yang rahmatan lil alamin');
    $siteEmail = \App\Models\SiteSetting::get('site_email', 'info@nuris.ac.id');
    $sitePhone = \App\Models\SiteSetting::get('site_phone', '(081) 234-567-890');
    $siteAddress = \App\Models\SiteSetting::get('site_address', 'Jl. Raya Mojokerto, Mojokerto, Jawa Timur');
@endphp
<footer class="vl-footer-bg-1" style="background: linear-gradient(135deg, #01715d 0%, #014d3f 100%); position: relative; overflow: hidden;">
    <!-- Background Pattern -->
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; opacity: 0.05; background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"1\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    
    <div class="container" style="position: relative; z-index: 1; padding-top: 15px; padding-bottom: 10px;">
        <div class="row">
            <!-- Kolom 1: Logo & Deskripsi -->
            <div class="col-lg-3 col-md-6 col-12 mb-3 mb-lg-0">
                <div class="vl-footer-widget-1">
                    <div class="vl-footer-logo mb-2" style="text-align: left; display: block !important;">
                        <a href="{{ route('pages.index') }}" style="display: inline-block;">
                            <img src="{{ $baseUrl }}/img/logo/nuris-logo.png" alt="Logo {{ $siteName }}" style="max-height: 60px; display: block !important; visibility: visible !important; opacity: 1 !important; width: auto; height: auto;">
                        </a>
                    </div>
                    <div class="vl-footer-address mb-2" style="color: rgba(255, 255, 255, 0.9); line-height: 1.6; font-size: 13px;">
                        <p style="margin: 0 0 4px 0; font-weight: 500;">Yayasan Pondok Pesantren Nurul Islam Pungging Mojokerto</p>
                        <p style="margin: 2px 0;">Dsn. Guwo Ds. Jabontegal Kec. Pungging</p>
                        <p style="margin: 2px 0 6px 0;">Kab. Mojokerto Kode Pos 61384</p>
                        <p style="margin: 4px 0 2px 0; font-weight: 500;">Telp :</p>
                        <p style="margin: 2px 0;">
                            – <a href="tel:082231942642" style="color: rgba(255, 255, 255, 0.9); text-decoration: none;">0822 3194 2642</a> (Yusril Fahmi, S.Pd., M.Pd.)
                        </p>
                        <p style="margin: 2px 0 0 0;">
                            – <a href="tel:082228177769" style="color: rgba(255, 255, 255, 0.9); text-decoration: none;">0822 2817 7769</a> (Lailatul Musyarofah, S.Pd.)
                        </p>
                    </div>
                    <div class="vl-footer-social-1" style="margin-top: 8px;">
                        <ul style="display: flex; gap: 8px; list-style: none; padding: 0; margin: 0;">
                            <li>
                                <a href="#" style="display: flex; align-items: center; justify-content: center; width: 32px; height: 32px; background: rgba(255, 255, 255, 0.15); border-radius: 50%; color: #fff; text-decoration: none; transition: all 0.3s;" onmouseover="this.style.background='rgba(255,255,255,0.25)'; this.style.transform='translateY(-2px)'" onmouseout="this.style.background='rgba(255,255,255,0.15)'; this.style.transform='translateY(0)'">
                                    <i class="fa-brands fa-facebook-f" style="font-size: 12px;"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" style="display: flex; align-items: center; justify-content: center; width: 32px; height: 32px; background: rgba(255, 255, 255, 0.15); border-radius: 50%; color: #fff; text-decoration: none; transition: all 0.3s;" onmouseover="this.style.background='rgba(255,255,255,0.25)'; this.style.transform='translateY(-2px)'" onmouseout="this.style.background='rgba(255,255,255,0.15)'; this.style.transform='translateY(0)'">
                                    <i class="fa-brands fa-instagram" style="font-size: 12px;"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" style="display: flex; align-items: center; justify-content: center; width: 32px; height: 32px; background: rgba(255, 255, 255, 0.15); border-radius: 50%; color: #fff; text-decoration: none; transition: all 0.3s;" onmouseover="this.style.background='rgba(255,255,255,0.25)'; this.style.transform='translateY(-2px)'" onmouseout="this.style.background='rgba(255,255,255,0.15)'; this.style.transform='translateY(0)'">
                                    <i class="fa-brands fa-youtube" style="font-size: 12px;"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" style="display: flex; align-items: center; justify-content: center; width: 32px; height: 32px; background: rgba(255, 255, 255, 0.15); border-radius: 50%; color: #fff; text-decoration: none; transition: all 0.3s;" onmouseover="this.style.background='rgba(255,255,255,0.25)'; this.style.transform='translateY(-2px)'" onmouseout="this.style.background='rgba(255,255,255,0.15)'; this.style.transform='translateY(0)'">
                                    <i class="fa-brands fa-tiktok" style="font-size: 12px;"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Kolom 2: Tautan Cepat -->
            <div class="col-lg-3 col-md-6 col-12 mb-3 mb-lg-0">
                <div class="vl-footer-widget-2">
                    <h3 class="title" style="color: #fff; font-size: 16px; font-weight: 700; margin-bottom: 8px; position: relative; padding-bottom: 6px;">
                        Tautan Cepat
                        <span style="position: absolute; bottom: 0; left: 0; width: 30px; height: 2px; background: rgba(255, 255, 255, 0.5); border-radius: 2px;"></span>
                    </h3>
                    <div class="vl-footer-menu">
                        <ul style="list-style: none; padding: 0; margin: 0;">
                            <li style="margin-bottom: 3px;">
                                <a href="{{ route('pages.index') }}" style="color: rgba(255, 255, 255, 0.85); text-decoration: none; transition: all 0.3s; display: inline-block; font-size: 13px;" onmouseover="this.style.color='#fff'; this.style.paddingLeft='4px'" onmouseout="this.style.color='rgba(255,255,255,0.85)'; this.style.paddingLeft='0'">
                                    <i class="fa-solid fa-chevron-right" style="font-size: 8px; margin-right: 5px;"></i>Beranda
                                </a>
                            </li>
                            <li style="margin-bottom: 3px;">
                                <a href="{{ route('pages.display', 'sekilas-nuris') }}" style="color: rgba(255, 255, 255, 0.85); text-decoration: none; transition: all 0.3s; display: inline-block; font-size: 13px;" onmouseover="this.style.color='#fff'; this.style.paddingLeft='4px'" onmouseout="this.style.color='rgba(255,255,255,0.85)'; this.style.paddingLeft='0'">
                                    <i class="fa-solid fa-chevron-right" style="font-size: 8px; margin-right: 5px;"></i>Tentang Nuris
                                </a>
                            </li>
                            <li style="margin-bottom: 3px;">
                                <a href="{{ route('pages.display', 'profil-pengasuh') }}" style="color: rgba(255, 255, 255, 0.85); text-decoration: none; transition: all 0.3s; display: inline-block; font-size: 13px;" onmouseover="this.style.color='#fff'; this.style.paddingLeft='4px'" onmouseout="this.style.color='rgba(255,255,255,0.85)'; this.style.paddingLeft='0'">
                                    <i class="fa-solid fa-chevron-right" style="font-size: 8px; margin-right: 5px;"></i>Profil Pengasuh
                                </a>
                            </li>
                            <li style="margin-bottom: 3px;">
                                <a href="{{ route('articles.index') }}" style="color: rgba(255, 255, 255, 0.85); text-decoration: none; transition: all 0.3s; display: inline-block; font-size: 13px;" onmouseover="this.style.color='#fff'; this.style.paddingLeft='4px'" onmouseout="this.style.color='rgba(255,255,255,0.85)'; this.style.paddingLeft='0'">
                                    <i class="fa-solid fa-chevron-right" style="font-size: 8px; margin-right: 5px;"></i>Berita & Artikel
                                </a>
                            </li>
                            <li style="margin-bottom: 3px;">
                                <a href="{{ route('galleries.photos') }}" style="color: rgba(255, 255, 255, 0.85); text-decoration: none; transition: all 0.3s; display: inline-block; font-size: 13px;" onmouseover="this.style.color='#fff'; this.style.paddingLeft='4px'" onmouseout="this.style.color='rgba(255,255,255,0.85)'; this.style.paddingLeft='0'">
                                    <i class="fa-solid fa-chevron-right" style="font-size: 8px; margin-right: 5px;"></i>Gallery
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Kolom 3: Unit Pendidikan -->
            <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
                <div class="vl-footer-widget-2">
                    <h3 class="title" style="color: #fff; font-size: 16px; font-weight: 700; margin-bottom: 8px; position: relative; padding-bottom: 6px;">
                        Unit Pendidikan
                        <span style="position: absolute; bottom: 0; left: 0; width: 30px; height: 2px; background: rgba(255, 255, 255, 0.5); border-radius: 2px;"></span>
                    </h3>
                    <div class="vl-footer-menu">
                        <ul style="list-style: none; padding: 0; margin: 0;">
                            <li style="margin-bottom: 3px;">
                                <a href="{{ route('pages.display', 'ini-nurul-islam') }}" style="color: rgba(255, 255, 255, 0.85); text-decoration: none; transition: all 0.3s; display: inline-block; font-size: 13px;" onmouseover="this.style.color='#fff'; this.style.paddingLeft='4px'" onmouseout="this.style.color='rgba(255,255,255,0.85)'; this.style.paddingLeft='0'">
                                    <i class="fa-solid fa-chevron-right" style="font-size: 8px; margin-right: 5px;"></i>Institut Nurul Islam (INI) Mojokerto
                                </a>
                            </li>
                            <li style="margin-bottom: 3px;">
                                <a href="{{ route('pages.display', 'ma-1-nurul-islam') }}" style="color: rgba(255, 255, 255, 0.85); text-decoration: none; transition: all 0.3s; display: inline-block; font-size: 13px;" onmouseover="this.style.color='#fff'; this.style.paddingLeft='4px'" onmouseout="this.style.color='rgba(255,255,255,0.85)'; this.style.paddingLeft='0'">
                                    <i class="fa-solid fa-chevron-right" style="font-size: 8px; margin-right: 5px;"></i>Madrasa Aliyah 1 (MA 1) Nurul Islam
                                </a>
                            </li>
                            <li style="margin-bottom: 3px;">
                                <a href="{{ route('pages.display', 'ma-2-ad-dauliyah-nurul-islam') }}" style="color: rgba(255, 255, 255, 0.85); text-decoration: none; transition: all 0.3s; display: inline-block; font-size: 13px;" onmouseover="this.style.color='#fff'; this.style.paddingLeft='4px'" onmouseout="this.style.color='rgba(255,255,255,0.85)'; this.style.paddingLeft='0'">
                                    <i class="fa-solid fa-chevron-right" style="font-size: 8px; margin-right: 5px;"></i>Madrasa Aliyah 2 (MA 2) Nurul Islam
                                </a>
                            </li>
                            <li style="margin-bottom: 3px;">
                                <a href="{{ route('pages.display', 'smk-ubp-nurul-islam') }}" style="color: rgba(255, 255, 255, 0.85); text-decoration: none; transition: all 0.3s; display: inline-block; font-size: 13px;" onmouseover="this.style.color='#fff'; this.style.paddingLeft='4px'" onmouseout="this.style.color='rgba(255,255,255,0.85)'; this.style.paddingLeft='0'">
                                    <i class="fa-solid fa-chevron-right" style="font-size: 8px; margin-right: 5px;"></i>SMK UBP Nurul Islam
                                </a>
                            </li>
                            <li style="margin-bottom: 3px;">
                                <a href="{{ route('pages.display', 'sma-global-school-nurul-islam') }}" style="color: rgba(255, 255, 255, 0.85); text-decoration: none; transition: all 0.3s; display: inline-block; font-size: 13px;" onmouseover="this.style.color='#fff'; this.style.paddingLeft='4px'" onmouseout="this.style.color='rgba(255,255,255,0.85)'; this.style.paddingLeft='0'">
                                    <i class="fa-solid fa-chevron-right" style="font-size: 8px; margin-right: 5px;"></i>SMA Global School
                                </a>
                            </li>
                            <li style="margin-bottom: 3px;">
                                <a href="{{ route('pages.display', 'mts-1-nurul-islam') }}" style="color: rgba(255, 255, 255, 0.85); text-decoration: none; transition: all 0.3s; display: inline-block; font-size: 13px;" onmouseover="this.style.color='#fff'; this.style.paddingLeft='4px'" onmouseout="this.style.color='rgba(255,255,255,0.85)'; this.style.paddingLeft='0'">
                                    <i class="fa-solid fa-chevron-right" style="font-size: 8px; margin-right: 5px;"></i>Madrasah Tsanawiyah 1 (MTs 1) Nurul Islam
                                </a>
                            </li>
                            <li style="margin-bottom: 3px;">
                                <a href="{{ route('pages.display', 'mts-2-nurul-islam') }}" style="color: rgba(255, 255, 255, 0.85); text-decoration: none; transition: all 0.3s; display: inline-block; font-size: 13px;" onmouseover="this.style.color='#fff'; this.style.paddingLeft='4px'" onmouseout="this.style.color='rgba(255,255,255,0.85)'; this.style.paddingLeft='0'">
                                    <i class="fa-solid fa-chevron-right" style="font-size: 8px; margin-right: 5px;"></i>Madrasah Tsanawiyah (MTs 2) Nurul Islam
                                </a>
                            </li>
                            <li style="margin-bottom: 3px;">
                                <a href="{{ route('pages.display', 'smp-ubq-nurul-islam') }}" style="color: rgba(255, 255, 255, 0.85); text-decoration: none; transition: all 0.3s; display: inline-block; font-size: 13px;" onmouseover="this.style.color='#fff'; this.style.paddingLeft='4px'" onmouseout="this.style.color='rgba(255,255,255,0.85)'; this.style.paddingLeft='0'">
                                    <i class="fa-solid fa-chevron-right" style="font-size: 8px; margin-right: 5px;"></i>SMP UBQ Nurul Islam
                                </a>
                            </li>
                            <li style="margin-bottom: 3px;">
                                <a href="{{ route('pages.display', 'smp-2-trans-sains-nurul-islam') }}" style="color: rgba(255, 255, 255, 0.85); text-decoration: none; transition: all 0.3s; display: inline-block; font-size: 13px;" onmouseover="this.style.color='#fff'; this.style.paddingLeft='4px'" onmouseout="this.style.color='rgba(255,255,255,0.85)'; this.style.paddingLeft='0'">
                                    <i class="fa-solid fa-chevron-right" style="font-size: 8px; margin-right: 5px;"></i>SMP 2 Trans-Sains Nurul Islam
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Kolom 4: Kontak -->
            <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
                <div class="vl-footer-widget-3">
                    <h3 class="title" style="color: #fff; font-size: 16px; font-weight: 700; margin-bottom: 8px; position: relative; padding-bottom: 6px;">
                        Kontak Kami
                        <span style="position: absolute; bottom: 0; left: 0; width: 30px; height: 2px; background: rgba(255, 255, 255, 0.5); border-radius: 2px;"></span>
                    </h3>
                    
                    <!-- Email -->
                    <div class="vl-footer-icon-list" style="display: flex; align-items: flex-start; gap: 10px; margin-bottom: 6px;">
                        <div class="vl-footer-icon" style="flex-shrink: 0; width: 32px; height: 32px; display: flex; align-items: center; justify-content: center; background: rgba(255, 255, 255, 0.15); border-radius: 50%;">
                            <i class="fa-solid fa-envelope" style="color: #fff; font-size: 12px;"></i>
                        </div>
                        <div class="vl-footer-text" style="flex: 1;">
                            <a href="mailto:{{ $siteEmail }}" style="color: rgba(255, 255, 255, 0.85); text-decoration: none; transition: all 0.3s; font-size: 13px; line-height: 1.4; display: block;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,0.85)'">{{ $siteEmail }}</a>
                        </div>
                    </div>

                    <!-- Alamat -->
                    <div class="vl-footer-icon-list" style="display: flex; align-items: flex-start; gap: 10px; margin-bottom: 6px;">
                        <div class="vl-footer-icon" style="flex-shrink: 0; width: 32px; height: 32px; display: flex; align-items: center; justify-content: center; background: rgba(255, 255, 255, 0.15); border-radius: 50%;">
                            <i class="fa-solid fa-location-dot" style="color: #fff; font-size: 12px;"></i>
                        </div>
                        <div class="vl-footer-text" style="flex: 1;">
                            <a href="#" style="color: rgba(255, 255, 255, 0.85); text-decoration: none; transition: all 0.3s; font-size: 13px; line-height: 1.4; display: block;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,0.85)'">{{ $siteAddress }}</a>
                        </div>
                    </div>

                    <!-- Telepon -->
                    <div class="vl-footer-icon-list" style="display: flex; align-items: flex-start; gap: 10px; margin-bottom: 0;">
                        <div class="vl-footer-icon" style="flex-shrink: 0; width: 32px; height: 32px; display: flex; align-items: center; justify-content: center; background: rgba(255, 255, 255, 0.15); border-radius: 50%;">
                            <i class="fa-solid fa-phone" style="color: #fff; font-size: 12px;"></i>
                        </div>
                        <div class="vl-footer-text" style="flex: 1;">
                            <a href="tel:{{ preg_replace('/[^0-9]/', '', $sitePhone) }}" style="color: rgba(255, 255, 255, 0.85); text-decoration: none; transition: all 0.3s; font-size: 13px; line-height: 1.4; display: block;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,0.85)'">{{ $sitePhone }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright Section -->
        <div class="vl-copyright copyright-border-1" style="padding: 8px 0; margin-top: 10px; border-top: 1px solid rgba(255, 255, 255, 0.1);">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 mb-1 mb-lg-0">
                    <p class="vl-copyright-text text-center text-lg-left" style="margin: 0; color: rgba(255, 255, 255, 0.8); font-size: 12px;">
                        © {{ date('Y') }} <strong style="color: #fff;">{{ $siteName }}</strong>. All Rights Reserved.
                    </p>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="vl-copyright-menu text-center text-lg-right">
                        <p style="margin: 0; color: rgba(255, 255, 255, 0.7); font-size: 12px;">
                            Developed <a href="https://andidev.id" target="_blank" rel="noopener noreferrer" style="color: rgba(255, 255, 255, 0.9); text-decoration: none; font-weight: 600; transition: all 0.3s;" onmouseover="this.style.color='#fff'; this.style.textDecoration='underline'" onmouseout="this.style.color='rgba(255,255,255,0.9)'; this.style.textDecoration='none'">Bos Andi</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--===== FOOTER AREA ENDS =======-->


