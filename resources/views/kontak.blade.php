@extends('layout.main')

@section('title', 'Kontak')

@section('content')

    <!-- PageBanner -->
    <div class="container-fluid no-padding pagebanner">
        <div class="container">
            <div class="pagebanner-content">
                <h3>Kontak</h3>
                <ol class="breadcrumb">
                    <li><a href="http://localhost/sekolah/index.php#home">Beranda</a></li>
                    <li>Kontak</li>
                </ol>
            </div>
        </div>
    </div><!-- PageBanner /- -->
    <!-- ContactUs Section -->
    <div class="container-fluid no-padding contactus-section">
        <div class="container">
            <div class="section-padding"></div>
            <div class="row">
                <div class="col-md-6">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.970396606937!2d98.63866287481119!3d3.5942614963798785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312faaad43433d%3A0x6249fc3fa7b0e362!2sKlub%20Pencak%20Silat%20SMP%20Muhammadiyah%204%20Medan!5e0!3m2!1sid!2sid!4v1729482266163!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="section-padding"></div>
        </div>
        <div class="contactdetail-block">
            <div class="container">
                <div class="col-md-3 col-sm-3 col-xs-6 contactinfo-box">
                    <span class="icon icon-Pointer"></span>
                    <h3>Alamat</h3>
                    <p>Jln. Kapten Muslim Gg. Jawa Lr. Muhammadiyah Kec. Sei Sikambing. Medan Helvetia</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 contactinfo-box">
                    <span class="icon icon-Phone2"></span>
                    <h3>No Telp</h3>
                    <p>+6283150552703</p>
                    <a href="https://api.whatsapp.com/send?phone=6283150552703" target="_blank">Send Message</a>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 contactinfo-box">
                    <span class="icon icon-Imbox"></span>
                    <h3>email</h3>
                    <p>SmpMuhammadiyah4Medan@gmail.com</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 contactinfo-box">
                    <span class="fa fa-facebook"></span>
                    <h3>Media Sosial</h3>
                    <p>SMP MUHAMMADIYAH 4 MEDAN</p>
                </div>
            </div>
        </div>
    </div><!-- ContactUs Section /- -->
@endsection
