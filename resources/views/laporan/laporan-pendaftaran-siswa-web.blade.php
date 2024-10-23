<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pendaftaran Peserta Didik Baru - SMP Muhammadiyah 4 Medan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
            background-color: #f9f9f9;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .header h2 {
            margin: 0;
            font-size: 20px;
            color: #555;
        }
        .card {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-bottom: 20px;
            padding: 15px;
        }
        .card h3 {
            font-size: 18px;
            margin-bottom: 15px;
            color: #333;
            border-bottom: 1px solid #ddd;
            padding-bottom: 5px;
        }
        .card table {
            width: 100%;
            border-collapse: collapse;
        }
        .card table th, .card table td {
            padding: 8px 12px;
            text-align: left;
        }
        .card table th {
            width: 30%;
            color: #444;
        }
        .card table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Laporan Pendaftaran</h1>
            <h2>SMP Muhammadiyah 4 Medan</h2>
        </div>
        
        <!-- Identitas Siswa -->
        <div class="card">
            <h3>Identitas Siswa</h3>
            <table>
                <tr>
                    <th>Nama Siswa</th>
                    <td>{{ $siswa['nama_siswa'] }}</td>
                </tr>
                <tr>
                    <th>Tempat, Tanggal Lahir</th>
                    <td>{{ $siswa['ttl'] }}</td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>{{ $siswa['agama'] }}</td>
                </tr>
                <tr>
                    <th>Warga Negara</th>
                    <td>{{ $siswa['warga_negara'] }}</td>
                </tr>
                <tr>
                    <th>Jumlah Saudara</th>
                    <td>{{ $siswa['jlh_saudara'] }}</td>
                </tr>
                <tr>
                    <th>Alamat Siswa</th>
                    <td>{{ $siswa['alamat_siswa'] }}</td>
                </tr>
                <tr>
                    <th>No. Telepon</th>
                    <td>{{ $siswa['telp'] }}</td>
                </tr>
            </table>
        </div>

        <!-- Identitas Orang Tua/Wali -->
        <div class="card">
            <h3>Identitas Orang Tua/Wali</h3>
            <table>
                <tr>
                    <th>Nama Ayah</th>
                    <td>{{ $siswa['nama_ayah'] }}</td>
                </tr>
                <tr>
                    <th>Pendidikan Ayah</th>
                    <td>{{ $siswa['pendidikan_ayah'] }}</td>
                </tr>
                <tr>
                    <th>Pekerjaan Ayah</th>
                    <td>{{ $siswa['pekerjaan_ayah'] }}</td>
                </tr>
                <tr>
                    <th>Nama Ibu</th>
                    <td>{{ $siswa['nama_ibu'] }}</td>
                </tr>
                <tr>
                    <th>Pendidikan Ibu</th>
                    <td>{{ $siswa['pendidikan_ibu'] }}</td>
                </tr>
                <tr>
                    <th>Pekerjaan Ibu</th>
                    <td>{{ $siswa['pekerjaan_ibu'] }}</td>
                </tr>
                <tr>
                    <th>Nama Wali</th>
                    <td>{{ $siswa['nama_wali'] }}</td>
                </tr>
                <tr>
                    <th>Pendidikan Wali</th>
                    <td>{{ $siswa['pendidikan_wali'] }}</td>
                </tr>
                <tr>
                    <th>Pekerjaan Wali</th>
                    <td>{{ $siswa['pekerjaan_wali'] }}</td>
                </tr>
                <tr>
                    <th>Alamat Orang Tua/Wali</th>
                    <td>{{ $siswa['alamat_orangtua'] }}</td>
                </tr>
            </table>
        </div>

        <!-- Lainnya -->
        <div class="card">
            <h3>Lainnya</h3>
            <table>
                <tr>
                    <th>Nama Sekolah Asal</th>
                    <td>{{ $siswa['nama_sekolah'] }}</td>
                </tr>
                <tr>
                    <th>Alamat Sekolah Asal</th>
                    <td>{{ $siswa['alamat_sekolah'] }}</td>
                </tr>
                <tr>
                    <th>Kartu Identitas</th>
                    <td>{{ $siswa['kartu'] }}</td>
                </tr>
                <tr>
                    <th>No Ijazah</th>
                    <td>{{ $siswa['no_ijazah'] }}</td>
                </tr>
                <tr>
                    <th>NISN</th>
                    <td>{{ $siswa['nisn'] }}</td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
