@extends('layouts.app')

@section('content')
    <h2>Detail Produk</h2>
    <div>
        <strong>Nama:</strong> {{ $products->name }}<br>
        <strong>Harga:</strong> {{ $products->price }}<br>
        <strong>Stok:</strong> {{ $products->stock }}<br>
    </div>
    <br>
    <a href="{{ route('products.index') }}" class="btn btn-primary">Kembali ke Daftar Produk</a>
@endsection