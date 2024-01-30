@extends('Admin.masterAdmin')

@section('contentAdmin')
    <div class="card card-body" style="box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.19)">
        <form action="{{ route('potensi-store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nama Potensi" name="nama">
                    @error('nama')
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
                        <label for="exampleFormControlTextarea1">Artikel Potensi</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="artikel"></textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <div class="card card-body mt-3" style="box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.19)">
        <div class="text-center text-primary mb-2"><h4><strong>DAFTAR POTENSI DESA</strong></h4></div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col" class="text-center">NO</th>
                <th scope="col" class="text-center">NAMA POTENSI</th>
                <th scope="col" class="text-center">PHOTO</th>
                <th scope="col" class="text-center">AKSI</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($potensi as $key => $item)
                <tr>
                    <th scope="row" class="text-center">{{ $key + 1 }}</th>
                    <td class="text-center">{{ $item->nama }}</td>
                    <td class="text-center"><img src="{{ asset('potensiDesa/'.$item->photo ) }}" alt="" style="width: 80px"></td>
                    <td class="text-center">
                        <form action="{{ route('potensi-delete', $item->id) }}" method="post" style="display: inline" class="form-check-inline">
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