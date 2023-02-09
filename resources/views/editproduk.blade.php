@extends('landing')

@section('isidb')

<div style="font-family:Poppins;font-size:30;padding-bottom:30px;">
Edit Barang
</div>

<div style="font-family:Poppins">
    <form action ="/dashboard/{{$produk->id}}/edit" method ="POST">
        @csrf
    
        <label for = "nama"> <b>
            Nama
        </b>
        </label>
    
        <br>
        <input type="text" id="nama" name="nama" placeholder="Masukkan Nama" value ="{{$produk->nama}}">
    
        <label for = "jumlah"> <b>
            Jumlah
        </b>
        </label>
    
        <br>
        <input type="text" id="jumlah" name="jumlah" placeholder="Masukkan Jumlah" value ="{{$produk->jumlah}}">
    
        <label for = "harga"> <b>
            Harga
        </b>
        </label>
    
        <br>
        <input type="text" id="harga" name="harga" placeholder="Masukkan harga" value ="{{$produk -> harga}}">
    
    
        <label for = "foto"> <b>
            Foto
        </b>
        </label>
    
        <br>
        <input type="text" id="foto" name="foto" placeholder="Masukkan foto" value ="{{$produk -> foto}}">
    
        <input type="submit" value="Submit">
    </form>
    
</div>

@endsection