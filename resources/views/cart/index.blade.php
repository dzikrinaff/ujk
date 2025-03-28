@extends('layouts.frontend')

@section('content')
<div class="container">
    <h1>Keranjang Belanja</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Total</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cart as $id => $details)
            <tr>
                <td><img src="{{ $details['gambar_url'] }}" width="50" height="50"></td>
                <td>{{ $details['nama'] }}</td>
                <td>{{ $details['quantity'] }}</td>
                <td>Rp {{ number_format($details['harga'], 0, ',', '.') }}</td>
                <td>Rp {{ number_format($details['harga'] * $details['quantity'], 0, ',', '.') }}</td>
                <td>
                    <form action="{{ route('cart.remove', $id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('merchandises.index') }}" class="btn btn-primary">Lanjut Belanja</a>
</div>
@endsection