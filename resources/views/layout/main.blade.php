<!DOCTYPE html>
<html class="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title') - SMP Muhammadiyah 4 Medan </title>
    <link rel="icon" type="images/x-icon" href="images/logoo.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-57x57-precomposed.png">
    <link rel="stylesheet" type="text/css" href="libraries/lib.css">
    <link rel="stylesheet" type="text/css" href="libraries/Stroke-Gap-Icon/stroke-gap-icon.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,900,300,300italic,500,700' rel='stylesheet'
        type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Niconne' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/plugins.css">
    <link rel="stylesheet" type="text/css" href="css/navigation-menu.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/shortcode.css">

    <style>
        .event-box {
            /* border: 1px solid #ddd; */
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 20px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .eventcontent-box {
            display: flex;
            flex-direction: column;
        }

        .event-description {
            font-size: 14px;
            color: #333;
            margin-bottom: 10px;
            overflow: hidden;
            /* Pastikan deskripsi tidak melebihi batas */
            text-overflow: ellipsis;
        }

        .full-description {
            font-size: 14px;
            color: #555;
            margin-top: 10px;
            line-height: 1.5;
        }

        .read-more-btn {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
            font-size: 14px;
            margin-top: 10px;
        }

        .read-more-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
    <div id="site-loader" class="load-complete">
        <div class="loader">
            <div class="loader-inner ball-clip-rotate">
                <div></div>
            </div>
        </div>
    </div>
    <header class="header-main container-fluid no-padding">
        <div class="top-header container-fluid no-padding">
            <div class="container">
                <div class="topheader-left">
                    <a href="telp : +6283150552703"><i class="fa fa-mobile" aria-hidden="true"></i> 083150552703 </a>
                    <a href="e-mail : SMPMuhammadiyah4Medan@gmail.com"><i class="fa fa-envelope-o"
                            aria-hidden="true"></i> SmpMuhammadiyah4Medan@gmail.com </a>
                </div>
                <div class="topheader-right">
                    <a href="Alamat : Jln. Kapten Muslim Gg. Jawa Lr. Muhammadiyah Kec. Sei Sikambing. Medan Helvetia"><i
                            class="icon icon-Plaine" aria-hidden="true"></i> Jln. Kapten Muslim Gg. Jawa Lr.
                        Muhammadiyah Kec. Sei Sikambing. Medan Helvetia </a>
                </div>
            </div>
        </div>
        <div class="menu-block container-fluid no-padding">
            <div class="container">
                <div class="row">
                    <nav class="navbar ow-navigation">
                        <div class="col-md-3">
                            <div class="navbar-header">
                                <button aria-controls="navbar" aria-expanded="false" data-target="#navbar"
                                    data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                                    <span class="sr-only"> Toggle navigation </span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand"><img src="images/logoo.png" width="40px" alt="logo" /> SMP
                                    Muhammadiyah 4 Medan </span></a>
                                <a class="mobile-logo">
                                    <h3> SMP Muhammadiyah 4 Medan </h3>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="navbar-collapse collapse" id="navbar">
                                <ul class="nav navbar-nav menubar">
                                    <li class="dropdown">
                                        <a aria-expanded="false" aria-haspopup="true" href="{{ route('home') }}"
                                            role="button" class="dropdown-toggle" href="beranda-page.html"> Beranda
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a aria-expanded="false" aria-haspopup="true" role="button"
                                            class="dropdown-toggle"> PPDB </a>
                                        <i class="ddl-switch fa fa-angle-down"></i>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ route('form-pendaftaran') }}"> Form Pendaftaran </a></li>
                                            <li><a href="{{ route('syarat-pendaftaran') }}"> Syarat Pendaftaran </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a aria-expanded="false" aria-haspopup="true" role="button"
                                            class="dropdown-toggle"> Informasi </a>
                                        <i class="ddl-switch fa fa-angle-down"></i>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ route('pengumuman') }}"> Pengumuman </a></li>
                                            <li><a href="{{ route('prestasi') }}"> prestasi </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('kontak') }}"> Kontak </a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="footer-main footer2 container-fluid no-padding">

        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <aside class="ftr-widget about_widget">
                        <a class="footer-logo" href="#"><img alt="logo" src="images/logo.jpg"
                                width="40px"> SMP MUHAMMADIYAH 4 MEDAN </span></a>
                        <span> Mari Membangun Bangsa Bersama SMP Muhammadiyah 4 Medan Beriman, Berilmu, Berkarya,
                            Berprestasi dan Berakhlak. Tempat Dimana Impian Terbentuk. </span>
                        <p><span class="icon icon-Plaine"></span> Jln. Kapten Muslim Gg. Jawa Lr. Muhammadiyah Kec. Sei
                            Sikambing. Medan Helvetia </p>
                        <p><span class="icon icon-Phone2"></span> 083150552703 </a></p>
                        <p><span class="icon icon-Mail"></span> SmpMuhammadiyah4Medan@gmail.com </a></p>
                    </aside>
                </div>
                <div class="col-md-3 col-sm-6">
                    <aside class="ftr-widget useful-llink">
                        <h3 class="widget-title"> Menu Lainnya </h3>
                        <ul>
                            <li><a href="index.php?page=pengumuman"> Pengumuman </a></li>
                            <li><a href="index.php?page=prestasi"> prestasi </a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-md-3 col-sm-6">
                    <aside class="ftr-widget useful-llink">
                        <h3 class="widget-title"> Pendaftaran </h3>
                        <ul>
                            <li><a href="index.php?page=pendaftaran"> Form Pendaftaran </a></li>
                            <li><a href="index.php?page=syaratpendaftaran"> Syarat Pendaftaran </a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-md-3 col-sm-6">
                    <aside class="ftr-widget newsletter_widget">
                        <h3 class="widget-title"> Temukan Kami </h3>
                        <p> Media Sosial SMP MUHAMMADIYAH 4 MEDAN </p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                        </ul>
                    </aside>
                </div>
            </div>

            <div class="footer-bottom col-md-12 col-sm-12 no-padding">
                <div class="copyright no-padding">
                    <span>&copy; Website SMP Muhammadiyah 4 Medan </span>
                </div>
                <nav class="navbar ow-navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar2" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div id="navbar2" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a> Made with SMP Muhammadiyah 4 Medan </a></li>
                    </div>
                </nav>
            </div>
        </div>
    </footer>
    <script src="js/scripts.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="libraries/lib.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script src="js/functions.js"></script>
</body>


</html>