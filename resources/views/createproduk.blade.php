@extends('landing')

@section('isidb')

<div style="font-family:Poppins;font-size:30;padding-bottom:30px;">
Masukkan Barang
</div>

<div style="font-family:Poppins">
    <form action ="/create" method ="POST">
        @csrf
    
        <label for = "nama"> <b>
            Nama
        </b>
        </label>
    
        <br>
        <input type="text" id="nama" name="nama" placeholder="Masukkan Nama">
    
        <label for = "jumlah"> <b>
            Jumlah
        </b>
        </label>
    
        <br>
        <input type="text" id="jumlah" name="jumlah" placeholder="Masukkan Jumlah">
    
        <label for = "harga"> <b>
            Harga
        </b>
        </label>
    
        <br>
        <input type="text" id="harga" name="harga" placeholder="Masukkan harga">
    
    
        <label for = "foto"> <b>
            Foto
        </b>
        </label>
    
        <br>
        <input type="text" id="foto" name="foto" placeholder="Masukkan foto">
    
        <input type="submit" value="Submit">
    </form>
    
</div>

@endsection