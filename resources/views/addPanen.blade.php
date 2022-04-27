@extends('layout.v_template')
@section('title', 'Tambah')

@section('content')
<div class="box box-primary">
  <!-- form start -->
  <form action="{{route('panen.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="box-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Nama Petani</label>
        <input type="text" class="@error('produkName')@enderror form-control" placeholder="Nama Petani">
        <span class="text-sm">@error('produkName') {{$message}} @enderror</span>
      </div>
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Kelompok Tani</label>
          <input type="text" class="@error('produkName')@enderror form-control" placeholder="Kelompok Tani">
          <span class="text-sm">@error('produkName') {{$message}} @enderror</span>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">NIK</label>
          <input type="number" class="@error('PanenJumlah')@enderror form-control" placeholder="NIK">
          <span class="text-sm">@error('PanenJumlah') {{$message}} @enderror</span>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Alamat</label>
          <input type="text" class="@error('satuan')@enderror form-control" placeholder="Alamat">
          <span class="text-sm">@error('satuan') {{$message}} @enderror</span>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">No Telephone</label>
          <input type="text" class="@error('satuan')@enderror form-control" placeholder="No Telephone">
          <span class="text-sm">@error('satuan') {{$message}} @enderror</span>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Foto</label>
          <input type="file" class="@error('satuan')@enderror form-control" placeholder="Foto">
          <span class="text-sm">@error('satuan') {{$message}} @enderror</span>
        </div>
      </div>
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
  </form>
</div>
@endsection