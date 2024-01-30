@extends('landingPage.masterLp')

@section('contentlp')
<div class="konten"> 
    <div class="card card-body">
        <div class="card card-body" style="box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.19)">
            <div class="text-center mb-4"><h3 class="text-info">PERANGKAT DESA BONDE</h3></div>
            <table>
                @foreach ($perangkat as $key => $item)
                <tr>
                    <td width="250px"><div class="ml-3"><strong>{{ $item->jabatan }}</strong></div></td>
                    <td width="20px"><b>:</b></td>
                    <td><h6>{{ $item->nama }}</h6></td>
                </tr>
                @endforeach
            </table>
            
        </div>
    </div>
</div>
@endsection