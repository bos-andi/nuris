@extends('layouts.app')

@section('content')

<!--===== PAGE HEADER STARTS =======-->
<section class="vl-page-header" style="background-image: url({{ asset('img/banner/nuris-hero-bg.jpg') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-page-header-content text-center">
                    <h1 class="vl-page-title">Data Guru & Karyawan</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Guru & Karyawan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== PAGE HEADER ENDS =======-->

<!--===== STAFF AREA STARTS =======-->
<section class="vl-about-section sp2">
    <div class="container-fluid" style="max-width: 1600px; padding-left: 30px; padding-right: 30px;">
        <div class="vl-section-title-1 text-center mb-60">
            <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                <span><img src="{{ asset('img/icons/vl-sub-title-icon.svg') }}" alt=""></span> Data Guru & Karyawan
            </h5>
            <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Guru & Karyawan PP. Nurul Islam</h2>
            <p class="pb-32" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" style="max-width: 800px; margin: 0 auto;">
                Daftar lengkap guru dan karyawan Pondok Pesantren Nurul Islam Mojokerto
            </p>
        </div>

        <!-- Data Guru -->
        @if($guru->count() > 0)
        <div class="mb-60" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
            <h3 class="mb-30" style="color: var(--ztc-text-text-3); font-size: 28px; font-weight: 700; border-bottom: 3px solid var(--ztc-text-text-4); padding-bottom: 10px; display: inline-block;">
                <i class="fa-solid fa-chalkboard-user me-2" style="color: var(--ztc-text-text-4);"></i>Data Guru
            </h3>
            <div class="card" style="border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); overflow: hidden;">
                <div class="table-responsive" style="overflow-x: auto;">
                    <table class="table table-hover mb-0" style="margin: 0; width: 100%; table-layout: auto;">
                        <thead style="background: linear-gradient(135deg, #1ABC9C 0%, #16A085 100%); color: #fff;">
                            <tr>
                                <th style="padding: 15px; font-weight: 600; border: none; text-align: center; vertical-align: middle;">No</th>
                                <th style="padding: 15px; font-weight: 600; border: none; text-align: center; vertical-align: middle;">Foto</th>
                                <th style="padding: 15px; font-weight: 600; border: none; text-align: center; vertical-align: middle;">Nama</th>
                                <th style="padding: 15px; font-weight: 600; border: none; text-align: center; vertical-align: middle;">TMT</th>
                                <th style="padding: 15px; font-weight: 600; border: none; text-align: center; vertical-align: middle;">Tempat Tanggal Lahir</th>
                                <th style="padding: 15px; font-weight: 600; border: none; text-align: center; vertical-align: middle; min-width: 250px;">Alamat</th>
                                <th style="padding: 15px; font-weight: 600; border: none; text-align: center; vertical-align: middle;">Pendidikan Terakhir</th>
                                <th style="padding: 15px; font-weight: 600; border: none; text-align: center; vertical-align: middle;">No. HP</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($guru as $index => $s)
                            <tr style="border-bottom: 1px solid #eee;">
                                <td style="padding: 15px; vertical-align: middle;">{{ $loop->iteration }}</td>
                                <td style="padding: 15px; vertical-align: middle;">
                                    @if($s->foto)
                                        <img src="{{ asset('storage/' . $s->foto) }}" alt="{{ $s->nama }}" class="rounded-circle" style="width: 60px; height: 60px; object-fit: cover; border: 3px solid #f0f0f0;">
                                    @else
                                        <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px; background: #f0f0f0; color: #999;">
                                            <i class="fa-solid fa-user" style="font-size: 24px;"></i>
                                        </div>
                                    @endif
                                </td>
                                <td style="padding: 15px; vertical-align: middle; font-weight: 600; color: var(--ztc-text-text-3);">{{ $s->nama }}</td>
                                <td style="padding: 15px; vertical-align: middle;">{{ $s->tmt ?? '-' }}</td>
                                <td style="padding: 15px; vertical-align: middle;">{{ $s->tempat_tanggal_lahir ?? '-' }}</td>
                                <td style="padding: 15px; vertical-align: middle; max-width: 300px; word-wrap: break-word; white-space: normal;">{{ $s->alamat ?? '-' }}</td>
                                <td style="padding: 15px; vertical-align: middle;">{{ $s->pendidikan_terakhir ?? '-' }}</td>
                                <td style="padding: 15px; vertical-align: middle;">
                                    @if($s->no_hp)
                                        <a href="tel:{{ $s->no_hp }}" style="color: var(--ztc-text-text-4); text-decoration: none;">{{ $s->no_hp }}</a>
                                    @else
                                        -
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endif

        <!-- Data Karyawan -->
        @if($karyawan->count() > 0)
        <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
            <h3 class="mb-30" style="color: var(--ztc-text-text-3); font-size: 28px; font-weight: 700; border-bottom: 3px solid var(--ztc-text-text-4); padding-bottom: 10px; display: inline-block;">
                <i class="fa-solid fa-users me-2" style="color: var(--ztc-text-text-4);"></i>Data Karyawan
            </h3>
            <div class="card" style="border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); overflow: hidden;">
                <div class="table-responsive" style="overflow-x: auto;">
                    <table class="table table-hover mb-0" style="margin: 0; width: 100%; table-layout: auto;">
                        <thead style="background: linear-gradient(135deg, #FBD459 0%, #F39C12 100%); color: #fff;">
                            <tr>
                                <th style="padding: 15px; font-weight: 600; border: none; text-align: center; vertical-align: middle;">No</th>
                                <th style="padding: 15px; font-weight: 600; border: none; text-align: center; vertical-align: middle;">Foto</th>
                                <th style="padding: 15px; font-weight: 600; border: none; text-align: center; vertical-align: middle;">Nama</th>
                                <th style="padding: 15px; font-weight: 600; border: none; text-align: center; vertical-align: middle;">TMT</th>
                                <th style="padding: 15px; font-weight: 600; border: none; text-align: center; vertical-align: middle;">Tempat Tanggal Lahir</th>
                                <th style="padding: 15px; font-weight: 600; border: none; text-align: center; vertical-align: middle; min-width: 250px;">Alamat</th>
                                <th style="padding: 15px; font-weight: 600; border: none; text-align: center; vertical-align: middle;">Pendidikan Terakhir</th>
                                <th style="padding: 15px; font-weight: 600; border: none; text-align: center; vertical-align: middle;">No. HP</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($karyawan as $index => $s)
                            <tr style="border-bottom: 1px solid #eee;">
                                <td style="padding: 15px; vertical-align: middle;">{{ $loop->iteration }}</td>
                                <td style="padding: 15px; vertical-align: middle;">
                                    @if($s->foto)
                                        <img src="{{ asset('storage/' . $s->foto) }}" alt="{{ $s->nama }}" class="rounded-circle" style="width: 60px; height: 60px; object-fit: cover; border: 3px solid #f0f0f0;">
                                    @else
                                        <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px; background: #f0f0f0; color: #999;">
                                            <i class="fa-solid fa-user" style="font-size: 24px;"></i>
                                        </div>
                                    @endif
                                </td>
                                <td style="padding: 15px; vertical-align: middle; font-weight: 600; color: var(--ztc-text-text-3);">{{ $s->nama }}</td>
                                <td style="padding: 15px; vertical-align: middle;">{{ $s->tmt ?? '-' }}</td>
                                <td style="padding: 15px; vertical-align: middle;">{{ $s->tempat_tanggal_lahir ?? '-' }}</td>
                                <td style="padding: 15px; vertical-align: middle; max-width: 300px; word-wrap: break-word; white-space: normal;">{{ $s->alamat ?? '-' }}</td>
                                <td style="padding: 15px; vertical-align: middle;">{{ $s->pendidikan_terakhir ?? '-' }}</td>
                                <td style="padding: 15px; vertical-align: middle;">
                                    @if($s->no_hp)
                                        <a href="tel:{{ $s->no_hp }}" style="color: var(--ztc-text-text-4); text-decoration: none;">{{ $s->no_hp }}</a>
                                    @else
                                        -
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endif

        @if($guru->count() == 0 && $karyawan->count() == 0)
        <div class="text-center py-60">
            <i class="fa-solid fa-users" style="font-size: 80px; color: #ddd; margin-bottom: 20px;"></i>
            <h3>Belum Ada Data</h3>
            <p>Belum ada data guru dan karyawan yang ditampilkan saat ini.</p>
        </div>
        @endif
    </div>
</section>
<!--===== STAFF AREA ENDS =======-->

<style>
    @media (max-width: 768px) {
        .container-fluid {
            padding-left: 15px !important;
            padding-right: 15px !important;
        }
        
        .table-responsive {
            font-size: 0.875rem;
        }
        
        .table th,
        .table td {
            padding: 10px 8px !important;
        }
        
        .table th:nth-child(6),
        .table td:nth-child(6) {
            max-width: 200px !important;
        }
    }
</style>

@endsection

