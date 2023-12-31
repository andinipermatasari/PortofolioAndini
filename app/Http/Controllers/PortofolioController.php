<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;

class PortofolioController extends Controller
{
    //
    function show(){
        $data['portofolio'] = Portofolio::all();
        return view('portofolio',$data);
    }
    function add(){
        $data = [
            'action'=> url('portofolio/create'),
            'tombol'=> 'Simpan',
            'portofolio'=> (object)[
                'nama' => '',
                'kategori' => '',
                'deskripsi' => '',
                'foto' => ''
            ]
        ];
        return view('form_portofolio',$data);
    }

    function create(Request $request){
        Portofolio::create([
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'foto' => $request->file('foto')->store('foto')
        ]);
        return redirect('portofolio');
    }
    function hapus($id){
        Portofolio::where('id',$id)->delete();
        return redirect('portofolio');
    }
    function edit($id){
        $data['portofolio'] = Portofolio::find($id);
        $data['action'] = url('portofolio/update').'/'.$data['portofolio']->id;
        $data['tombol'] = "Update";
        return view('form_portofolio',$data);
    }
    function update(Request $request){
        Portofolio::where('id',$request->id)->update([
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'foto' => $request->file('foto')->store('foto')
        ]);
        return redirect('portofolio');
    }
}
