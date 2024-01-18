@extends('layout.app')
@section('judul','Data Barang')
@section('konten')


        <div class="row">
            <div class="col-12">
                <div class="card p-3">
                    @if(session('sukses'))
                    <div class="alert alert-success alert-dismisible fade show" role="alert">
                        <strong>selamat!</strong> {{ session('sukses')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div>
                        <a href="/item/create" class="btn btn-primary mb-3">Tambah Data</a>
                    </div>
                    <form action="" method="get">
                        <div class="row mt-2">
                            <div class="col-12 col-sm-6">
                                <div class="input-group mb-3">
                                    <input type="text" name="cari" class="from-control" placeholder="Cari Data Barang">
                                    <button class="btn btn-primary">Search</button> &nbsp;
                                    <a href="/barang"><button class="btn btn-danger">Clear</button></a>
                            </div>
                    </div>
                </div>
                </form>
                <table class="table table-striped">
                    <thead>
                        <th>No</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Katagori</th>
                        <th>Stock</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        @foreach($data as $x)

                        <tr>
                            <td>{{ $loop->iteration}}</td>
                            <td>{{ $x->kodebarang }}</td>
                            <td>{{ $x->namabarang }}</td>
                            <td>{{ $x->katagori }}</td>
                            <td>{{ $x->stock}}</td>
                            <td>{{ $x->harga }}</td>

                            <td>
                                <a class="btn btn-sm btn-warning" href="/barang/{{ $x-> id }}">Ubah</a>
                                <form onclick="return confirm('Apakah Kamu Yakin Untuk Menghapusnya? ')" 
                                class="d-inline" action="/barang{{ $x->id }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- {{ $data->links() }} --}}
        </div>
    </div>
</div>

@endsection