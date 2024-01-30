@extends('Admin.masterAdmin')

@section('contentAdmin')
    <div class="card card-body" style="box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.19)">
        <form action="{{ route('berita-store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="Judul Berita" name="judul">
                    @error('judul')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="photo">
                        @error('photo')
                        <span class="text-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <label class="custom-file-label" >Masukkan foto</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Artikel Berita</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="artikel"></textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <div class="card card-body mt-3" style="box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.19)">
        <div class="text-center text-primary mb-2"><h4><strong>DAFTAR BERITA DESA</strong></h4></div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col" class="text-center">NO</th>
                <th scope="col" class="text-center">JUDUL</th>
                <th scope="col" class="text-center">PHOTO</th>
                <th scope="col" class="text-center">AKSI</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($berita as $key => $item)
                <tr>
                    <th scope="row" class="text-center">{{ $key + 1 }}</th>
                    <td class="text-center">{{ $item->judul }}</td>
                    <td class="text-center"><img src="{{ asset('beritaDesa/'.$item->photo ) }}" alt="" style="width: 80px"></td>
                    <td class="text-center">
                        <form action="{{ route('berita-delete', $item->id) }}" method="post" style="display: inline" class="form-check-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-primary" type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>



@endsection