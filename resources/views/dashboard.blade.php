@extends('landing')

@section('isidb')

<a href="/createproduk">
<div class="tomboltambah">
    <div style="padding:15px;font-family:Poppins;font-size:13;">
        
    Tambahkan produk baru
    </div>
</div>
</a>

<div style="padding-top:20px;">
    <table style="width:1400px; background-color:white;border-collapse:collapse; text-align:left;">

        <thead>
        <tr style="background-color:#f7f7f7;font-family:Poppins;">
           <th style="text-align: center;">
            #
           </th>
           <th style="padding:10px;">
            Nama Produk
           </th>
           <th>
            Jumlah
           </th>
           <th style="text-align:left;">
            Harga
           </th>
           <th>
            Hapus
           </th>
           <th>
            Edit
           </th>
        </tr>
    </thead>
    
    
    @foreach ($produk -> skip(0) as $produk)
    
        <tr style="font-family:Poppins;">
            <td style="padding:10px;text-align:center">
                1
            </td>
            <td>
                <div class="parent" style="padding-bottom:20px;">
    <img src ="{{$produk -> foto}}" width="70px" style="padding-right:20px;padding-top:15px;">
                
               <div style="padding-bottom:10px;padding-top:20px;">
                {{$produk -> nama}}
            </div>
               
                </div>
            </td>
            <td>
                {{$produk -> jumlah}}
            </td>
            <td>
                Rp. {{$produk -> harga}}
            </td>
            <td>
                <form action="/deleteproduk/{{$produk->id}}" method="POST">
                    @method('delete')
                    @csrf
                    <button onclick="return confirm('Apakah ingin dihapus ?')" style="background-color:white;border:transparent;box-shadow:5px 10px 18px #dfdfdf;cursor:pointer;padding:10px;border-radius:10px;font-weight:600"> Hapus </button>
                </form>
                </td>
                <td>
                    <a href="/dashboard/{{$produk -> id}}/edit" style="background-color:white;border:transparent;box-shadow:5px 10px 18px #dfdfdf;cursor:pointer;padding:10px;border-radius:10px;font-weight:600;color:black;text-decoration:none"> Edit </a>
                </td>
        </tr>


      
        @endforeach
    
    </table>
</div>


@endsection