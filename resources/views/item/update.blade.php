@extends('layout.app')
@section('judul','form ubah Data')
@section('konten' )

<section class="content">
    <div class="container-fuid">
<div class="row">
    <div class="col-12">
        <div class="card p-3">
        <form action="/item" method="POST">
            @csrf
            <div class="mb-3">
                <label for="">kode barang</label>
                <input required name="kode_barang" type="number" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">nama barang</label>
                <input required name="kode_barang" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">harga barang</label>
                <input required name="kode_barang" type="number" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Kategori</label>
                    <select name="" id="" class="form-control">
                        <option value="">--Pilih Kategori--</option>
                        <option value="Makanan" {{ ($item->kategori === 'makanan') ? 'selecled' }}>Makanan</option>
                        <option value="Nonmakanan">Nonmakanan</option>
                    </select>
                   
                </div>
            <div class="mb-3">
                <label for="">stock</label>
                <input required name="stock" type="number" class="form-control">
            </div>

            <button class="btn btn-info" type="submit">Simpan </button>
            </form>
        </div>
    </div>
</div>

</div>
  </section>
@endsection