@extends('layouts.app')

@section('content')

<!--===== PAGE HEADER STARTS =======-->
<section class="vl-page-header" style="background-image: url({{ asset('img/banner/nuris-hero-bg.jpg') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-page-header-content text-center">
                    <h1 class="vl-page-title">Kegiatan Yaumiyah</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#">Informasi</a></li>
                            <li class="breadcrumb-item"><a href="#">Kegiatan Belajar Mengajar</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Kegiatan Yaumiyah</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== PAGE HEADER ENDS =======-->

<!--===== JADWAL AGENDA HARIAN AREA STARTS =======-->
@if(isset($dailySchedules) && $dailySchedules->count() > 0)
<section class="vl-about-section sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Jadwal Harian</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Jadwal Agenda Harian</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card" style="border-radius: 0.75rem; box-shadow: 0 0.25rem 1.25rem rgba(0,0,0,0.08); overflow: hidden;">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0" style="margin: 0; width: 100%;">
                            <thead style="background: linear-gradient(135deg, #1ABC9C 0%, #16A085 100%); color: #fff;">
                                <tr>
                                    <th style="padding: 0.9375rem; font-weight: 600; border: none; text-align: center; vertical-align: middle; width: 60px;">NO</th>
                                    <th style="padding: 0.9375rem; font-weight: 600; border: none; text-align: center; vertical-align: middle; min-width: 150px;">WAKTU</th>
                                    <th style="padding: 0.9375rem; font-weight: 600; border: none; text-align: center; vertical-align: middle;">KEGIATAN</th>
                                    <th style="padding: 0.9375rem; font-weight: 600; border: none; text-align: center; vertical-align: middle; min-width: 200px;">KET.</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($dailySchedules as $index => $schedule)
                                <tr style="border-bottom: 1px solid #eee;">
                                    <td style="padding: 0.9375rem; vertical-align: middle; text-align: center; font-weight: 600; color: var(--ztc-text-text-3);">{{ $loop->iteration }}</td>
                                    <td style="padding: 0.9375rem; vertical-align: middle; text-align: center; font-weight: 600; color: var(--ztc-text-text-4);">{{ $schedule->time }}</td>
                                    <td style="padding: 0.9375rem; vertical-align: middle;">{{ $schedule->activity }}</td>
                                    <td style="padding: 0.9375rem; vertical-align: middle;">{{ $schedule->notes ?? '-' }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!--===== JADWAL AGENDA HARIAN AREA ENDS =======-->

<!--===== JADWAL MINGGUAN AREA STARTS =======-->
@if(isset($weeklySchedules) && $weeklySchedules->count() > 0)
<section class="vl-about-section sp2" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Jadwal Mingguan</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Jadwal Mingguan</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card" style="border-radius: 0.75rem; box-shadow: 0 0.25rem 1.25rem rgba(0,0,0,0.08); overflow: hidden;">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0" style="margin: 0; width: 100%;">
                            <thead style="background: linear-gradient(135deg, #FBD459 0%, #F39C12 100%); color: #fff;">
                                <tr>
                                    <th style="padding: 0.9375rem; font-weight: 600; border: none; text-align: center; vertical-align: middle; min-width: 120px;">HARI</th>
                                    <th style="padding: 0.9375rem; font-weight: 600; border: none; text-align: center; vertical-align: middle; min-width: 150px;">WAKTU</th>
                                    <th style="padding: 0.9375rem; font-weight: 600; border: none; text-align: center; vertical-align: middle;">KEGIATAN</th>
                                    <th style="padding: 0.9375rem; font-weight: 600; border: none; text-align: center; vertical-align: middle; min-width: 200px;">KET.</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($weeklySchedules as $schedule)
                                <tr style="border-bottom: 1px solid #eee;">
                                    <td style="padding: 0.9375rem; vertical-align: middle; text-align: center; font-weight: 600; color: var(--ztc-text-text-3);">{{ $schedule->day }}</td>
                                    <td style="padding: 0.9375rem; vertical-align: middle; text-align: center; font-weight: 600; color: var(--ztc-text-text-4);">{{ $schedule->time }}</td>
                                    <td style="padding: 0.9375rem; vertical-align: middle;">{{ $schedule->activity }}</td>
                                    <td style="padding: 0.9375rem; vertical-align: middle;">{{ $schedule->notes ?? '-' }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!--===== JADWAL MINGGUAN AREA ENDS =======-->

@if((!isset($dailySchedules) || $dailySchedules->count() == 0) && (!isset($weeklySchedules) || $weeklySchedules->count() == 0))
<!--===== NO SCHEDULES MESSAGE =======-->
<section class="vl-about-section sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center py-60">
                    <i class="fa-solid fa-calendar" style="font-size: 80px; color: #ddd; margin-bottom: 1.25rem;"></i>
                    <h3>Belum Ada Jadwal</h3>
                    <p>Jadwal kegiatan yaumiyah akan segera ditambahkan.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

@endsection

