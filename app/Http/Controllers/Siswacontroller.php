<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class Siswacontroller extends Controller
{
    //
    public function perco()
    {
    	$y = siswa:: all();
    return view('siswa', compact('a'));
    }
    public function show($siswa)
    {
    	$siswa = siswa::find($siswa);
    return view('siswa', compact('siswa'));

    }

}
