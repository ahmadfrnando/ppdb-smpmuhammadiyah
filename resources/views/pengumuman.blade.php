@extends('layout.main')

@section('title', 'Pengumuman')

@section('content')


<!--  EventBlock -->
<div class="container eventblock">
    <div class="col-md-5 col-sm-12">
        <div class="eventcourse-categories">
            <div class="section-header">
                <h3> Pengumuman </span></h3>
                <h3><span> SMP Muhammadiyah 4 Medan </h3>
            </div>
        </div>
        <div class="video-block video-small">
            <img src="images/logoo.png" width="200" height="100" alt="Video Poster" />
        </div>
    </div>
    <div class="col-md-7 col-sm-12">
        <div class="event-section event2-section">
            <div class="event-block">
                @foreach ($data as $key => $pengumuman)
                <div class="event-box">
                    <div class="eventcontent-box">
                        <span class="event-index"> 0{{ $data->firstItem() + $key }} </span>
                        <h3><a href="#"> {{ $pengumuman->judul }} </a></h3>
                        <div class="event-meta">
                            <span><i aria-hidden="true" class="fa fa-map-marker"></i> SMP Muhammadiyah 4 Medan </span>
                        </div>
                        <div class="event-meta">
                            <span><i aria-hidden="true" class="fa fa-clock-o"></i> {{ $pengumuman->waktu_mulai }} - {{ $pengumuman->waktu_selesai }}</span>
                        </div>

                        <!-- Deskripsi Pengumuman -->
                        <div class="event-description">
                            {{ Str::limit($pengumuman->deskripsi, 100) }} <!-- Tampilkan 100 karakter pertama -->
                        </div>

                        <!-- Tombol Read More -->
                        <div class="full-description" style="display: none;">
                            {{ $pengumuman->deskripsi }} <!-- Tampilkan deskripsi lengkap -->
                        </div>

                        <button class="read-more-btn">Baca Selengkapnya</button>
                    </div>
                    <img src="{{ '/storage/' . $pengumuman->foto }}" alt="{{ $pengumuman->judul }}" width="200" height="130" />
                </div>

                @endforeach
            </div>
            <div class="pagination-links">
                {{ $data->links() }}
            </div>
        </div>
    </div>
</div>
<div class="section-padding"></div>
</div><!-- EventBlock /- -->
@endsection