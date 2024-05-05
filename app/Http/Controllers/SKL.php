<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
// use App\Models\Jabatan;
use Illuminate\Http\RedirectResponse;
class SKL extends Controller
{
    public function index(): View
    {
        // return view('index_DaftarTamu', compact('DaftarTamus'));
        return view('gridas.sv');
    }
}
