<?php

namespace App\Http\Controllers;

use App\Models\Potensi;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Node\FunctionNode;

class PotensiController extends Controller
{
    public function Potensidesa(){
        $potensi = Potensi::all();
        
        return view('Admin.potensi', compact('potensi'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'nama' => 'required',
            'photo' => 'required',
            'artikel' => 'required',
        ],[
            'nama' => 'nama belum di masukkan',
            'photo' => 'photo belum di masukkan',
            'artikel' => 'artikel belum di masukkan',
        ]);

        $data = Potensi::create($request->all());
        if($request->hasFile('photo')){
            $request->file('photo')->move('potensiDesa/', $request->file('photo')->getClientOriginalName());
            $data->photo = $request->file('photo')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('potensi-index');
    }

    public function destroy($id){
        $potensi = Potensi::where("id", $id)->first();
        $potensi->delete();

        return redirect()->route('potensi-index');
    }
}
