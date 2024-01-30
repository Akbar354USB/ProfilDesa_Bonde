<?php

namespace App\Http\Controllers;

use App\Models\Perangkat;
use Illuminate\Http\Request;

class PerangkatController extends Controller
{
    public function PerangkatDesa(){

        $perangkat = Perangkat::all();
        
        return view('Admin.perangkat', compact('perangkat'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'nama' => 'required',
            'jabatan' => 'required',
        ],[
            'nama' => 'nama belum di masukkan',
            'jabatan' => 'nama istri belum di masukkan',
        ]);

        Perangkat::create($request->all());
        return redirect()->route('perangkat-index');
    }

        public function destroy($id){
        $perangkat = Perangkat::where("id", $id)->first();
        $perangkat->delete();

        return redirect()->route('perangkat-index');
    }







    // public function view($id){
    //     $report = Report::where("id", $id)->first();
        
    //     // return view('Laporan.view', compact('report'));
    //     return view('Laporan.view', compact('report'));
    // }


}
