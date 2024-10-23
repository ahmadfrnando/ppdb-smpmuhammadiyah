<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    public function index()
    {   
        $data = Prestasi::paginate(3);
        return view('prestasi', compact('data'));
    }
}