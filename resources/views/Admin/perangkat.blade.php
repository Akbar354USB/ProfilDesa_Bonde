@extends('Admin.masterAdmin')

@section('contentAdmin')
    <div class="card card-body" style="box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.19)">
        <div class="text-center text-primary mb-2"><h4><strong>+ DATA PERANGKAT DESA</strong></h4></div>
        <form action="{{ route('perangkat-store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="form-group">
                    <label><strong>NAMA</strong></label>
                    <input type="text" class="form-control" placeholder="isi dengan huruf KAPITAL" name="nama">
                    @error('nama')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                    <div class="form-group">
                      <label><strong>JABATAN</strong></label>
                    <input type="text" class="form-control" placeholder="isi dengan huruf KAPITAL" name="jabatan">
                    @error('jabatan')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>

    <div class="card card-body mt-3" style="box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.19)">
        <div class="text-center text-primary mb-2"><h4><strong>DAFTAR PERANGKAT DESA</strong></h4></div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col" class="text-center">NO</th>
                <th scope="col" class="text-center">NAMA</th>
                <th scope="col" class="text-center">JABATAN</th>
                <th scope="col" class="text-center">AKSI</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($perangkat as $key => $item)
            <tr>
                <th scope="row" class="text-center">{{ $key + 1 }}</th>
                <td class="text-center">{{ $item->nama }}</td>
                <td class="text-center">{{ $item->jabatan }}</td>
                <td class="text-center">
                    <form action="{{ route('perangkat-delete', $item->id) }}" method="post" style="display: inline" class="form-check-inline">
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