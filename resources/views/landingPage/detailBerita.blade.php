@extends('landingPage.masterLp')

@section('contentlp')
<div class="konten"> 
    <div class="card card-body">
        <div class="card card-body" style="box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.19)">
            <h3 class="text-info text-center mt-3">{{ $berita->judul }}</h3>
            <div class="mt-2"><img src="{{ asset('beritaDesa/'.$berita->photo ) }}" class="featured-image" alt="" /></div>
            <div class="mt-3">
            <p> {{ $berita->artikel }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
