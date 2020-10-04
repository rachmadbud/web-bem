<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//penghubung ke model

use App\Kegiatan;

class PagesController extends Controller
{
    public function kegiatan()
    {
        $datas = Kegiatan::orderBy('created_at', 'desc')->get();
        return view('guest.kegiatan.kegiatan', compact('datas'));
    }

    public function detail(Kegiatan $data)
    {
        return view ('guest.kegiatan.detail', compact('data'));
    }

}
