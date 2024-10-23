<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index()
    {   
        $data = Pengumuman::paginate(3);
        return view('pengumuman', compact('data'));
    }
}