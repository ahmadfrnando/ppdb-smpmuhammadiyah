@extends('layout.main')

@section('title', 'Home')

@section('content')

    <div class="photoslider-section photoslider2 container-fluid no-padding">
        <div id="home-slider2" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/slider1.jpeg" alt="slider1" width="1920" height="801" />
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="col-md-6 col-sm-8 col-xs-8 ow-pull-right no-padding">
                                <h3 data-animation="animated bounceInLeft"> Selamat Datang </h3>
                                <h3 data-animation="animated fadeInDown"><span> SMP Muhammadiyah 4 Medan </span></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="images/guru.jpeg" alt="slider2" width="1500" height="500" />
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="col-md-6 col-sm-8 col-xs-8 ow-pull-left no-padding">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#home-slider2" role="button" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="right carousel-control" href="#home-slider2" role="button" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>

    <div class="container eventblock">
        <div class="section-padding"></div>
        <div class="row">
            <div class="col-md-7 col-sm-12">
                <div class="eventcourse-categories">
                    <div class="section-header">
                        <h3> Sejarah </span></h3>
                        <h3><span> SMP Muhammadiyah 4 Medan </h3>
                    </div>
                    <div class="video-block video-small">
                        <img src="images/logoo.png" width="200" height="100" alt="Video Poster" />
                    </div>
                    <a class="popup-youtube" href="https://youtu.be/mqybI0i5fbM?si=a07d97ZtLvy18gZx"><i class="fa fa-play"
                            aria-hidden="true"></i></a>
                    <div class="section-header">
                        <h3> Visi : </span></h3>
                        <p> "Mewujudkan pelajar berakhlak karimah, berkarakter, dan cerdas". </p>
                        <h3> Misi : </span></h3>
                        <p> 1. Menanamkan nilai-nilai al-quran dan hadist kepada perilaku peserta didik. </p>
                        <p> 2. Membimbing, membina dan mempersiapkan peserta didik untuk memiliki ilmu pengetahuan, iman,
                            amal, dan
                            keterampilan agar mampu berkompetisi dalam menggapai prestasi. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm-12">
                <div class="eventcourse-categories">
                    <div class="section-header">
                        <h3> Kegiatan Rutin </span></h3>
                        <h3><span> SMP Muhammadiyah 4 Medan </h3>
                    </div>
                </div>
                <div class="event-section event2-section">
                    <div class="event-block">
                        <div class="event-box">
                            <div class="eventcontent-box">
                                <span class="event-index"> 01 </span>
                                <h3><a> Melaksanakan Upacara Setiap Hari Senin dan Hari-Hari Nasional lainnya. </a></h3>
                                <div class="event-meta">
                                    <span><i aria-hidden="true" class="fa fa-map-marker"></i> SMP Muhammadiyah 4 Medan
                                    </span>
                                </div>
                                <div class="event-meta">
                                    <span><i aria-hidden="true" class="fa fa-clock-o"></i> 8:00 Am - 9:00 Am </span>
                                </div>
                                <img src="images/upacara.jpg" alt="event2.1" width="200" height="130" />
                            </div>
                        </div>
                        <div class="event-box">
                            <span class="event-index"> 02 </span>
                            <div class="eventcontent-box">
                                <h3><a> Tadarus Al-Quran Sebelum Memulai Pelajaran </a></h3>
                                <div class="event-meta">
                                    <span><i aria-hidden="true" class="fa fa-map-marker"></i> SMP Muhammadiyah 4 Medan
                                    </span>
                                </div>
                                <div class="event-meta">
                                    <span><i aria-hidden="true" class="fa fa-clock-o"></i> 8:00 Am - 8:30 Am </span>
                                </div>
                                <img src="images/tadarus.jpg" alt="event2.2" width="200" height="130" />
                            </div>
                        </div>
                        <div class="event-box">
                            <span class="event-index"> 03 </span>
                            <div class="eventcontent-box">
                                <h3><a> Melaksanakan Sholat Dzuhur Berjamaah </a></h3>
                                <div class="event-meta">
                                    <span><i aria-hidden="true" class="fa fa-map-marker"></i> SMP Muhammadiyah 4 Medan
                                    </span>
                                </div>
                                <div class="event-meta">
                                    <span><i aria-hidden="true" class="fa fa-clock-o"></i> 12:00 Pm - 1:00 Pm </span>
                                </div>
                                <img src="images/sholat dzuhur.jpg" alt="event2.3" width="200" height="130" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-padding"></div>
    </div>

    <div class="container welcome-section">
        <div class="section-padding"></div>
        <div class="section-header">
            <h3> Ekstrakurikuler </span></h3>
            <h3><span> SMP Muhammadiyah 4 Medan </span></h3>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="welcome-box">
                    <img src="images/logo1 (2).jpg" alt="welcome1" width="900" height="500" />
                    <div class="section-header">
                        <h3> Pencak Silat </span></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="welcome-box">
                    <img src="images/PASKIBRA (2).jpeg" alt="welcome2" width="370" height="440" />
                    <div class="section-header">
                        <h3> Futsal </span></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="welcome-box">
                    <img src="images/PASKIBRA (1).jpeg" alt="welcome3" width="900" height="700" />
                    <div class="section-header">
                        <h3> Paskibraka </span></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-padding"></div>
    </div>

    <div class="container-fluid no-padding team-section">
        <div class="section-padding"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 team-content-block">
                    <div class="section-header">
                        <h3> Pegawai Guru</span></h3>
                        <h3><span> SMP Muhammadiyah 4 Medan </h3>
                    </div>
                    <div class="team-intro">
                        <p> Berikut daftar list pegawai guru yang kreatif dan profesional kami di SMP Muhammadiyah 4 Medan
                            sebagai
                            berikut : </p>
                    </div>
                    <a class="right carousel-control" href="#team-carousel" role="button" data-slide="prev"> Prev </a>
                    <a class="left carousel-control" href="#team-carousel" role="button" data-slide="next"> Next </a>
                </div>
                <div class="col-md-6 col-sm-12 team-gallary">
                    <div id="team-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="team-box">
                                            <div class="team-content">
                                                <h3> NADIRA HIDAYATI, S.Pdi </h3>
                                                <span> WAKEPSEK,AGAMA,KMD,SKI </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="team-box">
                                            <div class="team-content">
                                                <h3> FATIMATUZZAHRA, S.Pd </h3>
                                                <span> GURU MM </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="team-box">
                                            <div class="team-content">
                                                <h3> EVI HABIBI, S.Pd </h3>
                                                <span> GURU IPA FISIKA </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="team-box">
                                            <div class="team-content">
                                                <h3> REZA DWI PUTRA </h3>
                                                <span> GURU TAPAK SUCI </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="team-box">
                                            <div class="team-content">
                                                <h3> SARI JUWITA, S.Pd </h3>
                                                <span> GURU SBK,PRAKARYA </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="team-box">
                                            <div class="team-content">
                                                <h3> SYAWAL PUTRA AMANDA TARIGAN, S.Pd </h3>
                                                <span> GURU PENJAS </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="team-box">
                                            <div class="team-content">
                                                <h3> HARIS FADILLAH </h3>
                                                <span> GURU HW </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="team-box">
                                            <div class="team-content">
                                                <h3> GUMILANG WIBOWO, S.Pd </h3>
                                                <span> GURU WK.B.ARAB </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="team-box">
                                            <div class="team-content">
                                                <h3> SURYANI LUBIS, S.Pd </h3>
                                                <span> GURU AL-QURAN,TAHFIZ </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="team-box">
                                            <div class="team-content">
                                                <h3> IKA NURJANAH, S.Pd </h3>
                                                <span> GURU WK,MM,BIOLOGI </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="team-box">
                                            <div class="team-content">
                                                <h3> AHMAD MUSLIH FADIL NST, S.Pd </h3>
                                                <span> GURU B.INGGRIS </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="team-box">
                                            <div class="team-content">
                                                <h3> RAHMATUL AULIA, S.Pd </h3>
                                                <span> GURU BK </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="team-box">
                                            <div class="team-content">
                                                <h3> WIDYA SYAHFITRI SINAGA, S.Pd </h3>
                                                <span> GURU WK,BI </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="team-box">
                                            <div class="team-content">
                                                <h3> ZAKARIA TARIGAN, S.Pd </h3>
                                                <span> GURU IPS </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="team-box">
                                            <div class="team-content">
                                                <h3> ZUBAIR IMAM SANTOSO </h3>
                                                <span> TATA USAHA </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-padding"></div>
    </div>

    <div class="container-fulid no-padding latestblog-section latestblog2">
        <div class="section-padding"></div>
        <div class="container">
            <div class="section-header">
                <h3><span> Fasilitas SMP Muhammadiyah 4 Medan </span></h3>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <article class="type-post">
                        <div class="entry-cover">
                            <a><img width="363" height="261" alt="fasilitas" src="images/mesjid.jpeg"></a>
                        </div>
                        <div class="section-header">
                            <h3> Masjid Taqwa </h3>
                            <h3> Muhammadiyah </h3>
                        </div>
                    </article>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <article class="type-post">
                        <div class="entry-cover">
                            <a><img width="363" height="261" alt="fasilitas" src="images/ruang guru (1).jpeg"></a>
                        </div>
                        <div class="section-header">
                            <h3> Ruangan Kepsek & </h3>
                            <h3> Guru </h3>
                        </div>
                    </article>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <article class="type-post">
                        <div class="entry-cover">
                            <a><img width="363" height="261" alt="fasilitas" src="images/halaman.jpeg"></a>
                        </div>
                        <div class="section-header">
                            <h3> Lapangan Upacara & </h3>
                            <h3> Halaman Sekolah </h3>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid no-padding callout">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-9 col-xs-8 callout-content">
                    <h3> Penerimaan Peserta Didik Baru & Murid Pindahan Tahun Ajaran 2025/2026 </h3>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-4">
                    <a href="{{ route('form-pendaftaran') }}"> klik link pendaftaran </a>
                </div>
            </div>
        </div>
    </div>
@endsection
