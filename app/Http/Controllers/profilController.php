<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

class profilController extends Controller
{

    function show(){
        $data['profil'] = profil::all();
        return view ('profil',$data);
    }

    function profil(){
        $profil = profil::first();
        if ($profil){
            $data =[
                'nis' => $profil->nis,
                'nama' => $profil->nama,
                'ttl' => $profil->ttl,
                'asalsekolah' => $profil->asalsekolah,
                'JK' => $profil->JK,
                'alamat' => $profil->alamat,
                'foto' => $profil->foto,
                'about' => $profil->about,
                'action' => 'profil/update/'.$profil->nis
            ];
            return view('profil',$data);
        }else{
            $data = [
                'nis' => "",
                'nama' => "",
                'ttl' => "",
                'asalsekolah' => "",
                'JK' => "",
                'alamat' => "",
                'foto' => "",
                'about' => "",
                'action' => 'profil/create'
            ];
            return view('profil', $data);
        }
    }
    function create(Request $request){
        profil::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'ttl' => $request->ttl,
            'asalsekolah' => $request->asalsekolah,
            'JK' => $request->JK,
            'alamat' => $request->alamat,
            'foto' => $request->file('foto')->store('foto'),
            'about' => $request->about
        ]);
        return redirect('profil');
    }
    function hapus($id){
        profil::where('nis',$id)->delete();
        return redirect('profil');
    }
    function edit($id){
        $data['profil'] = profil::find($id);
        $data['action'] = url('profil/update').'/'.$data['profil']->nis;
        $data['tombol'] = "Update";
        return view('profil',$data);
    }
    function update(Request $request){
        $data = profil::where('nis',$request->nis)->first();
        if($request->foto == ''){
            $foto = $data->foto;
        }else{
            $foto = $request->file('foto')->store('foto');
        }
        profil::where('nis',$request->nis)->update([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'ttl' => $request->ttl,
            'asalsekolah' => $request->asalsekolah,
            'JK' => $request->JK,
            'alamat' => $request->alamat,
            'foto' => $foto,
            'about' => $request->about,
        ]);
        return redirect('profil');
    }
}
