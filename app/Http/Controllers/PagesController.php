<?php

namespace App\Http\Controllers;

use App\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//penghubung ke model

use App\Kegiatan;

class PagesController extends Controller
{
    public function kegiatan()
    {
        $datas = Kegiatan::paginate(3);
        return view('guest.kegiatan.kegiatan', compact('datas'));
    }

    public function detail(Kegiatan $data)
    {
        return view ('guest.kegiatan.detail', compact('data'));
    }

    public function berita()
    {
        $datas = Berita::paginate(3);
        return view ('guest.berita.berita', compact('datas'));
    }

    public function detailberita(Berita $data)
    {
        return view ('guest.berita.detail', compact('data'));
    }

}
