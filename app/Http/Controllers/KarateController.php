<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Karate;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;


class KarateController extends Controller
{
    
    public function index()
    {
        return view('karate/index');
    }


    public function tambah()
    {
        return view('karate/tambah');
    }

    
    public function saveNilai(Request $request)
    {
        $karate = new Karate();
        $karate->no_urut = $request->input('no_urut');
        $karate->nama = $request->input('nama');
        $karate->ttl = $request->input('ttl');
        $karate->ranting = $request->input('ranting');
        $karate->kyu_lama = $request->input('kyu_lama');
        $karate->kyu_baru = $request->input('kyu_baru');
        $karate->save();
        Session::flash('message', 'Data Berhasil Ditambahkan');
        return redirect('/tambah');
    }

   
    public function lihat()
    {
        $karate = Karate::all();
        return view('karate/lihat')->with('karate', $karate);
    }

    public function download()
    {
        Excel::create('Laporan Nilai', function($excel)
        {
            $excel->sheet('Laporan', function($sheet)
            {
                $karate = Karate::all();
                $sheet->loadView('karate.download')->with('karate', $karate);
            })->download('xls');
        });
    }
}
