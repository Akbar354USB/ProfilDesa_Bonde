<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function BeritaDesa(){
        $berita = Berita::all();
        
        return view('Admin.berita', compact('berita'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'judul' => 'required',
            'photo' => 'required',
            'artikel' => 'required',
        ],[
            'judul' => 'nama belum di masukkan',
            'photo' => 'photo belum di masukkan',
            'artikel' => 'artikel belum di masukkan',
        ]);

        $data = Berita::create($request->all());
        if($request->hasFile('photo')){
            $request->file('photo')->move('beritaDesa/', $request->file('photo')->getClientOriginalName());
            $data->photo = $request->file('photo')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('berita-index');
    }

    public function destroy($id){
        $berita = Berita::where("id", $id)->first();
        $berita->delete();

        return redirect()->route('berita-index');
    }
}
