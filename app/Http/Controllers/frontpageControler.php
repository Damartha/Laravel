<?php

namespace App\Http\Controllers;

use App\Models\binatang3;
use App\Models\tumbuhan2;

class FrontpageControler extends Controller
{


    // function show_tumbuhan($id) {
    //     $data = tumbuhan2::findOrFail($id); // Mencari data berdasarkan ID
    //     return view('frontpage.show_tumbuhan', compact('data'));
    // }
    // function show_hewan($id) {
    //     $data = binatang3::findOrFail($id); // Mencari data berdasarkan ID
    //     return view('frontpage.show_hewan', compact('data'));
    // }

    // function landingpage(){

    //     return view('frontpage.landingpage');
    // }
    // function tumbuhan(){
    //     $datas=tumbuhan2::all();
    //     return view('frontpage.tumbuhan',compact('datas'));
    // }
    // function hewan(){
    //     $datas=binatang3::all();
    //     return view('frontpage.hewan',compact('datas'));
    // }
    // function kontak(){
    //     return view('frontpage.kontak');
    // }
    // function admin_home(){
    //     $datas=tumbuhan2::all();
    //     return view('frontpage.admin_home',compact('datas'));
    // }
    // function admin_hewan(){
    //     $datas=binatang3::all();
    //     return view('frontpage.admin_hewan',compact('datas'));
    // }
    // function tambah_edit(){
    //     return view('frontpage.tambah_edit');
    // }
    // function tambah_editBinatang(){
    //     return view('frontpage.tambah_edit');
    // }
    function login2(){
        return view('frontpage.login2');
    }
}
