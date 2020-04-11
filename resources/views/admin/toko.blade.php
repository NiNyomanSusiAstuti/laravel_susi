@extends('layouts.tes')
@section('content')
<div class="panel">
     <div class="panel-body">
         <div class="col lg 12">
         <h1> Daftar Penjual</h1>
        <table class="table bordered">
            <tr>
                <td width="400"><br> BIODATA</br></td>
                <td><br> Studi Kasus</br></td>

            </tr>
            <tr>
                <td><br> NAMA  : Ni Nyoman Susi Astuti</br></td>
                <td><br> JUDUL : Manajemen Toko Kelontong</br></td>

            </tr>
            <tr>
                <td><br> NIM  : 1815051113</br></td>
                <td><br> PENJELASAN :Toko Kelontong merupakan kepanjangan dari sistem jual beli, dimana sistem tersebut akan digunakan dalam transaksi jual beli pada toko kelontong </br></td>

            </tr>
            <tr>
                <td><br> PROGRAM STUDI :TEKNIK INFORMATIKA</br></td>
                <td><br> </br></td>

            </tr>
        </table>

    </div>
    </div>
    <div class="col lg 12">
        <a href="{{route('toko.create')}}">Tambah Data</a>
        <table class="table table-bordered">
            <thead>
                <tr><th>No</th><th>Id_penjual</th><th>Nama</th><th>Alamat</th><th>No_hp</th></tr>
            </thead>
            <tbody>
            @foreach ( $toko as $in=>$val )
                <tr>
                <td>{{($in+1)}}</td><td> {{$val->Id_penjual}}</td><td>{{$val->nama}}</td><td>{{$val->alamat}}</td><td>{{$val->no_hp}}</td>
            </tr>
            <td>
           <a href = "{{route('toko.edit',$val->id_penjual)}}">Update</a>
                   <form action="{{route('toko.destroy',$val->id_penjual)}}"method="POST">
                   @csrf
                   @method('DELETE')
                   <button type="submit">Delete</button>
                   </form>
                   </td>
                   </tr>
                @endforeach
            
            </tbody>
        </table>
        {{$toko->links()}}
    </div>
    </div>
 </div>
 @endsection