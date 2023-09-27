@extends('gudang_barang.layout')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tabel Perpustakaan Buku</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
<style>
    .thead{
        background-color: pink;
    }
    h1{
        text-align: center;
        padding: 20px;
    }
</style>
<body>
@section('content')
    @include('gudang_barang.header')
    <h1>Data Barang</h1>
    <table class="table table-bordered">
        <thead class="thead">
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>ID Supplier</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_barang as $barang)
                <tr>
                    <td>{{ ++$no }}</td>
                    <td>{{ $barang->nama_barang }}</td>
                    <td>{{ "Rp ".number_format($barang->harga, 2, ',', '.')}}</td>
                    <td>{{ $barang->stok}}</td>
                    <td>{{ $barang->id_supplier}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <h3>Jumlah Barang: {{ $hitung }}</h3>
    <h3>Total Harga: Rp {{ $total_harga}}</h3>
    @include('gudang_barang.footer')
</body>
<footer>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-9aS5d6iAVcP5z7bF5IdB12pkf2GC930JK6f5Lwr8Qw3lFU5Kn1A1fF1JCfFJ8s5KW" crossorigin="anonymous"></script>
</body>
</html>
@endsection
