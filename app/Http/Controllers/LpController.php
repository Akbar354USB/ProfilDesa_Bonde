<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Perangkat;
use App\Models\Potensi;
use Illuminate\Http\Request;

class LpController extends Controller
{
    public function visi(){
        return view('landingPage.visi');
    }

    public function sejarah(){
        return view('landingPage.sejarah');
    }

    public function struktur(){
        return view('landingPage.struktur');
    }

    public function perangkat(){

        $perangkat = Perangkat::all();
        return view('landingPage.perangkatLp', compact('perangkat'));
    }

    public function berita(){

        $berita = Berita::all();
        return view('landingPage.beritaLp', compact('berita'));
    }

    public function detailBerita($id){
        $berita = Berita::where("id", $id)->first();
        
        return view('landingPage.detailBerita', compact('berita'));
    }

    public function potensi(){

        $potensi = Potensi::all();
        return view('landingPage.potensiLp', compact('potensi'));
    }

    public function detailPotensi($id){
        $potensi = Potensi::where("id", $id)->first();
        
        return view('landingPage.detailPotensi', compact('potensi'));
    }

}
