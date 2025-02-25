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
    <div class="alert alert-error">
        <span>Pendaftaran telah ditutup pada tanggal {{ \Carbon\Carbon::parse($tanggal_tutup)->format('d/m/Y') }}. Terima kasih atas minat Anda.</span>
        <button class="close-btn" onclick="this.parentElement.style.display='none';">&times;</button>
    </div>
</div>
@endsection