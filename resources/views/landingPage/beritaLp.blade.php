@extends('landingPage.masterLp')

@section('contentlp')
<div class="konten"> 
    <div class="card card-body">
        <div class="card card-body" style="box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.19)">
            <h3 class="text-info text-center mt-3">Berita Desa</h3>
            <table>
                @foreach ($berita as $key => $item)
                <tr>
                    <td width="250px" align="center"><img src="{{ asset('beritaDesa/'.$item->photo ) }}" alt="" style="width: 200px" class="mb-2 mt-3"></td>
                    <td>
                        <h6 class="text-info mt-3">{{ $item->judul }}<br><small>{{ $item->created_at }}</small></h6>
                        <p>{{ Str::limit($item->artikel, 400, '...') }}<a href="{{ route('berita-detail', $item->id) }}">baca selengkapnya</a></p>
                    </td>
                </tr>
                @endforeach
            </table>


        </div>
    </div>
</div>
@endsection
