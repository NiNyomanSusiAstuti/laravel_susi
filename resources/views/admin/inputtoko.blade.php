@extends('layouts.tes')
@section('content')
<div class="panel">
<form action="{{(isset($toko))?route('toko.update',$toko->id_penjual):route('toko.store')}}" method="POST">
@csrf
@if(isset($toko))?@method('PUT')@endif
     <div class="panel-body">
          <h1> Input Penjual</h1>
          <div class="form-group">
          <label class="col-sm-2 control-label text-right">Id Penjual</label>
                <div class="col-sm-10"><input type="text" value="{{(isset($toko))?$toko->id_penjual:old('id_penjual')}}" name="id_penjual" class="form-control"></div>
                @error('id_penjual')<small style="color:red">{{$message}}</small>@enderror
          </div>
          <div class="form-group">
          <label class="col-sm-2 control-label text-right">Nama Penjual</label>
                <div class="col-sm-10"><input type="text" value="{{(isset($toko))?$toko->nama:old('nama')}}" name="nama" class="form-control"></div>
                @error('nama')<small style="color:red">{{$message}}</small>@enderror
          </div>
               <div class="form-group"><label class="col-sm-2 control-label text-right">Alamat</label>
                   <div class="col-sm-10"><input type="text"  value="{{(isset($toko))?$toko->alamat:old('alamat')}}" name="alamat" class="form-control"></div>
                </div>
                @error('alamat')<small style="color :red">{{$message}}</small>@enderror
                <div class="form-group"><label class="col-sm-2 control-label text-right">No Hp</label>
                     <div class="col-sm-10"><input type="text"  value="{{(isset($toko))?$toko->no_hp:old('no_hp')}}" name="no_hp" class="form-control"></div>
                 </div>
                 @error('no_hp')<small style="color :red">{{$message}}</small>@enderror
                <div class="form-group">
                    <button type="submit">Simpan</button>
                </div>

    </div>
    </form>
</div>
 @endsection
