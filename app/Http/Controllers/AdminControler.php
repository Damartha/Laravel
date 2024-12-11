<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\binatang3;
use App\Models\tumbuhan2;
use Illuminate\Support\Facades\Storage;


class AdminControler extends Controller
{
    function admin_home(){
        $data=tumbuhan2::paginate(2);
        return view('frontpage.admin.admin_home',compact('data'));
    }
    function admin_hewan(){
        $datas=binatang3::all();
        return view('frontpage.admin.admin_hewan',compact('datas'));
    }

    function tambah_editBinatang(){
        return view('frontpage.admin.tambah_editBinatang');
    }
    function login2(){
        return view('frontpage.login2');
    }
    public function create_hewan()
    {
        $rute=route('store');
        return view('frontpage.admin.tambah_editBinatang',compact('rute_binatang'));
    }
    public function store_hewan(Request $request)
    {
        $request->validate([
            'nama_tumbuhan2'=>'string',
            'jenis_tumbuhan2' ,
            'habitat_tumbuhan2' ,
            'deskripsi_tumbuhan2',
            'foto_tumbuhan2',
        ]);

        $image=$request->file('foto_tumbuhan2');
        $nameImage=time().$request->file('foto_tumbuhan2')->getClientOriginalName();
        $image->storeAs('foto', $nameImage,'public');
        tumbuhan2::create([
            'nama_tumbuhan2' => $request->nama_tumbuhan2,
            'jenis_tumbuhan2' => $request->jenis_tumbuhan2,
            'habitat_tumbuhan2' => $request->habitat_tumbuhan2,
            'deskripsi_tumbuhan2' => $request->deskripsi_tumbuhan2,
            'foto_tumbuhan2' => $nameImage,
        ]);

        return redirect()->route('admin_home')->with(['success'=>'Data Berhasil Disimpan!']);
    }
    public function edit_hewan(string $id)
    {
        $tumbuhan=tumbuhan2::find($id);
        $rute=route('update',$id);
        return view('frontpage.admin.tambah_editBinatang',compact('rute_binatang','tumbuhan'));
    }
    public function update_hewan(Request $request, string $id)
    {
        $request->validate([
            'nama_tumbuhan2'=>'string',
            'jenis_tumbuhan2' ,
            'habitat_tumbuhan2' ,
            'deskripsi_tumbuhan2',
        ]);
        $tumbuhan=tumbuhan2::find($id);

        //create product
        if ($request->hasFile('foto_tumbuhan2')) {
            //upload image
            $image=$request->file('foto_tumbuhan2');
            $image->storeAs('foto', $image->getClientOriginalName(), 'public');

            //delete old image
            Storage::disk('public')->delete('foto/'.$tumbuhan->foto_tumbuhan2);

            //update product
            $tumbuhan->update([
            'nama_tumbuhan2' => $request->nama_tumbuhan2,
            'jenis_tumbuhan2' => $request->jenis_tumbuhan2,
            'habitat_tumbuhan2' => $request->habitat_tumbuhan2,
            'deskripsi_tumbuhan2' => $request->deskripsi_tumbuhan2,
            'foto_tumbuhan2' => $image->getClientOriginalName()
            ]);
        } else {
            //update product without image
            $tumbuhan->update([
            'nama_tumbuhan2' => $request->nama_tumbuhan2,
            'jenis_tumbuhan2' => $request->jenis_tumbuhan2,
            'habitat_tumbuhan2' => $request->habitat_tumbuhan2,
            'deskripsi_tumbuhan2' => $request->deskripsi_tumbuhan2,
            ]);
        }


        return redirect()->route('admin_home')->with(['success'=>'Data Berhasil Disimpan!']);
    }
    public function destroy_hewan(string $id)
    {
       $data=tumbuhan2::find($id);
       $data->delete();
       return redirect()->route('admin_home')->with(['success'=>'Data Berhasil Disimpan!']);
    }

    public function create()
    {
        $rute=route('store');
        return view('frontpage.admin.tambah_edit',compact('rute'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama_tumbuhan2'=>'string',
            'jenis_tumbuhan2' ,
            'habitat_tumbuhan2' ,
            'deskripsi_tumbuhan2',
            'foto_tumbuhan2',
        ]);

        $image=$request->file('foto_tumbuhan2');
        $nameImage=time().$request->file('foto_tumbuhan2')->getClientOriginalName();
        $image->storeAs('foto', $nameImage,'public');
        tumbuhan2::create([
            'nama_tumbuhan2' => $request->nama_tumbuhan2,
            'jenis_tumbuhan2' => $request->jenis_tumbuhan2,
            'habitat_tumbuhan2' => $request->habitat_tumbuhan2,
            'deskripsi_tumbuhan2' => $request->deskripsi_tumbuhan2,
            'foto_tumbuhan2' => $nameImage,
        ]);

        return redirect()->route('admin_home')->with(['success'=>'Data Berhasil Disimpan!']);
    }
    public function edit(string $id)
    {
        $tumbuhan=tumbuhan2::find($id);
        $rute=route('update',$id);
        return view('frontpage.admin.tambah_edit',compact('rute','tumbuhan'));
    }
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_tumbuhan2'=>'string',
            'jenis_tumbuhan2' ,
            'habitat_tumbuhan2' ,
            'deskripsi_tumbuhan2',
        ]);
        $tumbuhan=tumbuhan2::find($id);

        //create product
        if ($request->hasFile('foto_tumbuhan2')) {
            //upload image
            $image=$request->file('foto_tumbuhan2');
            $image->storeAs('foto', $image->getClientOriginalName(), 'public');

            //delete old image
            Storage::disk('public')->delete('foto/'.$tumbuhan->foto_tumbuhan2);

            //update product
            $tumbuhan->update([
            'nama_tumbuhan2' => $request->nama_tumbuhan2,
            'jenis_tumbuhan2' => $request->jenis_tumbuhan2,
            'habitat_tumbuhan2' => $request->habitat_tumbuhan2,
            'deskripsi_tumbuhan2' => $request->deskripsi_tumbuhan2,
            'foto_tumbuhan2' => $image->getClientOriginalName()
            ]);
        } else {
            //update product without image
            $tumbuhan->update([
            'nama_tumbuhan2' => $request->nama_tumbuhan2,
            'jenis_tumbuhan2' => $request->jenis_tumbuhan2,
            'habitat_tumbuhan2' => $request->habitat_tumbuhan2,
            'deskripsi_tumbuhan2' => $request->deskripsi_tumbuhan2,
            ]);
        }


        return redirect()->route('admin_home')->with(['success'=>'Data Berhasil Disimpan!']);
    }
    public function destroy(string $id)
    {
       $data=tumbuhan2::find($id);
       $data->delete();
       return redirect()->route('admin_home')->with(['success'=>'Data Berhasil Disimpan!']);

    }

    public function search(Request $request)
    {
        $searchName = $request->input('search'); // Ambil input pencarian

        // Jika ada kata kunci pencarian, cari data hotel yang sesuai
        $data = tumbuhan2::where('nama_tumbuhan2', 'like', '%'.$searchName.'%')->paginate(1);
        return view('frontpage.admin.admin_home', compact('data'));
}
}
