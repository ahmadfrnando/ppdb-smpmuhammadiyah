<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pendaftaran Peserta Didik Baru</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .header p {
            font-size: 14px;
            color: #666;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table th, table td {
            padding: 10px;
            text-align: left;
            border: 1px solid #000;
        }
        table th {
            background-color: #f2f2f2;
        }
        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .footer {
            text-align: right;
            margin-top: 20px;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Laporan Pendaftaran Peserta Didik Baru</h1>
        <p>SMP Muhammadiyah 4 Medan</p>
        <p>Periode: {{ $tanggal_awal }} - {{ $tanggal_akhir }}</p>
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>Tempat, Tanggal Lahir</th>
                <th>NISN</th>
                <th>Asal Sekolah</th>
                <th>Daftar Pada</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $siswa)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $siswa->nama_siswa }}</td>
                <td>{{ $siswa->ttl }}</td>
                <td>{{ $siswa->nisn }}</td>
                <td>{{ $siswa->nama_sekolah }}</td>
                <td>{{ $siswa->created_at->format('d-m-Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="footer">
        <p>Dicetak pada: {{ \Carbon\Carbon::now()->format('d-m-Y H:i') }}</p>
    </div>
</body>
</html>
