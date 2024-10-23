@extends('layout.main')

@section('title', 'Form Pendaftaran')

@section('content')
    <style>
        .alert {
            padding: 15px;
            color: white;
            border-radius: 5px;
            margin-bottom: 20px;
            position: relative;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .alert-success {
            background-color: #4CAF50;
            /* Warna hijau untuk pesan sukses */
        }

        .alert-error {
            background-color: #f44336;
            /* Warna merah untuk pesan error */
        }

        .close-btn {
            font-size: 20px;
            cursor: pointer;
            background: none;
            border: none;
            color: white;
            padding: 0 10px;
        }
    </style>

    <div class="container my-5" style="margin-bottom: 100px">
        @if (session('success'))
            <div class="alert alert-success">
                <div>
                    {{ session('success') }}
                    @if (session('pdf_download_link'))
                        <a href="{{ session('pdf_download_link') }}" class="btn btn-primary" target="_blank">Unduh Bukti Pendaftaran</a>
                    @endif
                </div>
                <span class="close-btn" onclick="this.parentElement.style.display='none';">&times;</span>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-error">
                {{ session('error') }}
                <span class="close-btn" onclick="this.parentElement.style.display='none';">&times;</span>
            </div>
        @endif

        <form action="{{ route('siswa.store') }}" method="POST">
            @csrf
            <div class="">
                <!-- Card Identitas Siswa -->
                <div class="mb-4">
                    <div class="card ">
                        <div class="card-header bg-primary text-white">
                            Identitas Siswa
                        </div>
                        <div class="card-body row">
                            <div class="card-form col-md-6 p-6">
                                <div class="mb-3">
                                    <label for="nama_siswa" class="form-label">Nama Siswa (Lengkap)</label>
                                    <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" required>
                                </div>
                                <div class="mb-3">
                                    <label for="ttl" class="form-label">Tempat / Tanggal Lahir</label>
                                    <input type="text" class="form-control" id="ttl" name="ttl" required>
                                </div>
                                <div class="mb-3">
                                    <label for="agama" class="form-label">Agama</label>
                                    <input type="text" class="form-control" id="agama" name="agama" required>
                                </div>
                            </div>
                            <div class="card-form col-md-6">
                                <div class="mb-3">
                                    <label for="warga_negara" class="form-label">Warga Negara</label>
                                    <input type="text" class="form-control" id="warga_negara" name="warga_negara"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="jlh_saudara" class="form-label">Jumlah Saudara</label>
                                    <input type="number" class="form-control" id="jlh_saudara" name="jlh_saudara" required>
                                </div>
                                <div class="mb-3">
                                    <label for="alamat-siswa" class="form-label">Alamat</label>
                                    <textarea class="form-control" id="alamat_siswa" name="alamat_siswa" rows="3" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card Identitas Orang Tua -->
                <div class="mb-4">
                    <div class="card">
                        <div class="card-header bg-secondary text-white">
                            Identitas Orang Tua
                        </div>
                        <div class="card-body row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="nama_ayah" class="form-label">Nama Ayah</label>
                                    <input type="text" class="form-control" id="nama_ayah" name="nama_ayah">
                                </div>
                                <div class="mb-3">
                                    <label for="pendidikan_ayah" class="form-label">Pendidikan Ayah</label>
                                    <input type="text" class="form-control" id="pendidikan_ayah" name="pendidikan_ayah">
                                </div>
                                <div class="mb-3">
                                    <label for="pekerjaan_ayah" class="form-label">Pekerjaan Ayah</label>
                                    <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="nama_ibu" class="form-label">Nama Ibu</label>
                                    <input type="text" class="form-control" id="nama_ibu" name="nama_ibu">
                                </div>
                                <div class="mb-3">
                                    <label for="pendidikan_ibu" class="form-label">Pendidikan Ibu</label>
                                    <input type="text" class="form-control" id="pendidikan_ibu" name="pendidikan_ibu">
                                </div>
                                <div class="mb-3">
                                    <label for="pekerjaan_ibu" class="form-label">Pekerjaan Ibu</label>
                                    <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="nama_wali" class="form-label">Nama Wali</label>
                                    <input type="text" class="form-control" id="nama_wali" name="nama_wali">
                                </div>
                                <div class="mb-3">
                                    <label for="pendidikan_wali" class="form-label">Pendidikan Wali</label>
                                    <input type="text" class="form-control" id="pendidikan_wali"
                                        name="pendidikan_wali">
                                </div>
                                <div class="mb-3">
                                    <label for="pekerjaan_wali" class="form-label">Pekerjaan Wali</label>
                                    <input type="text" class="form-control" id="pekerjaan_wali"
                                        name="pekerjaan_wali">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="alamat_orangtua" class="form-label">Alamat</label>
                                <textarea class="form-control" id="alamat_orangtua" name="alamat_orangtua" rows="3" required></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card Identitas Sekolah -->
                <div class="mb-4">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            Identitas Sekolah
                        </div>
                        <div class="card-body row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="nama_sekolah" class="form-label">Nama Sekolah Asal</label>
                                    <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="alamat_sekolah" class="form-label">Alamat Sekolah Asal</label>
                                    <textarea class="form-control" id="alamat_sekolah" name="alamat_sekolah" rows="3" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="kartu" class="form-label">Kartu KKS/KPS/KIP</label>
                                    <input type="text" class="form-control" id="kartu" name="kartu" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="no_ijazah" class="form-label">Nomor Seri Ijazah/SKHU(SD)</label>
                                    <input type="text" class="form-control" id="no_ijazah" name="no_ijazah" required>
                                </div>
                                <div class="mb-3">
                                    <label for="nisn" class="form-label">NISN</label>
                                    <input type="number" class="form-control" id="nisn" name="nisn" required>
                                </div>
                                <div class="mb-3">
                                    <label for="telp" class="form-label">No. Telp/HP</label>
                                    <input type="number" class="form-control" id="telp" name="telp" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Daftar</button>
            </div>
        </form>
    </div>
@endsection
