<?php

namespace App\Http\Controllers;

use App\Models\PembukaanPendaftaran;
use App\Models\Siswa;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SiswaController extends Controller
{   

    public function index()
    {
        $cekTanggal = PembukaanPendaftaran::latest()->first();
        $tanggalHariIni = Carbon::now();

        if($cekTanggal->tanggal_buka <= $tanggalHariIni && $cekTanggal->tanggal_tutup >= $tanggalHariIni){
            return view('form-pendaftaran');
        }else{
            return view('tutup-pendaftaran', [
                'tanggal_tutup' => $cekTanggal->tanggal_tutup
            ]);
        }
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // Validasi input
        $request->validate([
            'nama_siswa' => 'required|string|max:255',
            'ttl' => 'required|string|max:255',
            'agama' => 'required|string|max:255',
            'warga_negara' => 'required|string|max:255',
            'jlh_saudara' => 'required|integer',
            'alamat_siswa' => 'required|string',
            'nama_ayah' => 'nullable|string|max:255',
            'pendidikan_ayah' => 'nullable|string|max:255',
            'pekerjaan_ayah' => 'nullable|string|max:255',
            'nama_ibu' => 'nullable|string|max:255',
            'pendidikan_ibu' => 'nullable|string|max:255',
            'pekerjaan_ibu' => 'nullable|string|max:255',
            'nama_wali' => 'nullable|string|max:255',
            'pendidikan_wali' => 'nullable|string|max:255',
            'pekerjaan_wali' => 'nullable|string|max:255',
            'alamat_orangtua' => 'required|string',
            'nama_sekolah' => 'required|string|max:255',
            'alamat_sekolah' => 'required|string',
            'kartu' => 'required|string|max:255',
            'no_ijazah' => 'required|string|max:255',
            'nisn' => 'required|integer',
            'telp' => 'required|integer',
        ]);

        // Simpan data ke database
        Siswa::create([
            'nama_siswa' => $request->nama_siswa,
            'ttl' => $request->ttl,
            'agama' => $request->agama,
            'warga_negara' => $request->warga_negara,
            'jlh_saudara' => $request->jlh_saudara,
            'alamat_siswa' => $request->alamat_siswa,
            'nama_ayah' => $request->nama_ayah,
            'pendidikan_ayah' => $request->pendidikan_ayah,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'nama_ibu' => $request->nama_ibu,
            'pendidikan_ibu' => $request->pendidikan_ibu,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'nama_wali' => $request->nama_wali,
            'pendidikan_wali' => $request->pendidikan_wali,
            'pekerjaan_wali' => $request->pekerjaan_wali,
            'alamat_orangtua' => $request->alamat_orangtua,
            'nama_sekolah' => $request->nama_sekolah,
            'alamat_sekolah' => $request->alamat_sekolah,
            'kartu' => $request->kartu,
            'no_ijazah' => $request->no_ijazah,
            'nisn' => $request->nisn,
            'telp' => $request->telp,
        ]);

        $siswa = $request->all();
        $data = Siswa::where('nisn', $siswa['nisn'])->first();
        
        $pdf = PDF::loadView('laporan.laporan-pendaftaran-siswa-web', compact('siswa'))
            ->setPaper('a4', 'landscape');

        return redirect()->back()
            ->with('success', 'Pendaftaran berhasil!')
            ->with('pdf_download_link', route('laporan.pendaftaran-siswa', ['id' => $data['id']]));
    }
}