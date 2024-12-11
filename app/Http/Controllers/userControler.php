<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\binatang3;
use App\Models\tumbuhan2;

class userControler extends Controller
{


    function show_tumbuhan($id) {
        $data = tumbuhan2::findOrFail($id); // Mencari data berdasarkan ID
        return view('frontpage.user.show_tumbuhan', compact('data'));
    }
    function show_hewan($id) {
        $data = binatang3::findOrFail($id); // Mencari data berdasarkan ID
        return view('frontpage.user.show_hewan', compact('data'));
    }

    function landingpage(){

        return view('frontpage.landingpage');
    }
    function tumbuhan(){
        $data=tumbuhan2::all();
        return view('frontpage.user.tumbuhan',compact('data'));
    }
    function hewan(){
        $datas=binatang3::all();
        return view('frontpage.user.hewan',compact('datas'));
    }
    public function search_tumbuhan(Request $request)
    {
        $searchName = $request->input('search_tumbuhan'); // Ambil input pencarian

        // Jika ada kata kunci pencarian, cari data hotel yang sesuai
        $data = tumbuhan2::where('nama_tumbuhan2', 'like', '%'.$searchName.'%')->paginate(1);
        return view('frontpage.user.tumbuhan', compact('data'));
}
}
