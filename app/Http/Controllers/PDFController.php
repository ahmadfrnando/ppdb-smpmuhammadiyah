<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Siswa;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
  public function cetakPendaftaranSiswa($id)
  {
    $siswa = Siswa::findOrFail($id);

    $pdf = PDF::loadView('laporan.laporan-pendaftaran-siswa', compact('siswa'))
      ->setPaper('a4', 'landscape'); // Mengatur orientasi menjadi landscape

    return $pdf->stream('Laporan-Pendaftaran-Siswa.pdf');
  }

  public function cetakPendaftaran(Request $request)
  { 
    $index = 1;
    $dataTanggal = $request->all();
    $tanggal_awal = $dataTanggal['tanggal_mulai'];
    $tanggal_akhir = $dataTanggal['tanggal_akhir'];
    $data = Siswa::whereDate('created_at', '>=', $tanggal_awal)
      ->whereDate('created_at', '<=', $tanggal_akhir)
      ->get();
    $pdf = PDF::loadView('laporan.laporan-pendaftaran', compact('data', 'tanggal_awal', 'tanggal_akhir', 'index'))->setPaper('a4', 'landscape');
    return $pdf->download('Laporan-Pendaftaran.pdf');
  }
}