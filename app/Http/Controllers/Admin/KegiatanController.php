<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Kegiatan;

class KegiatanController extends Controller
{
    public function kegiatan()
    {
        $data = Kegiatan::all();
        return view ('admin.galeri.kegiatan');
    }

    public function data()
    {
        // return view ('admin.author.index');
        return datatables()->of(Kegiatan::orderBy('name'))
                        ->addColumn('action', function(){
                            return '<a href="'. route('/') .'" class="btn btn-warning">Edit<a/>'; 
                        })
                        ->addIndexColumn()
                        ->toJson();
    }
}
