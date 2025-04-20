@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Detail Pemesanan: {{ $pemesanan->order_id }}</h2>
    <p><strong>User:</strong> {{ $pemesanan->user->name }}</p>
    <p><strong>Telpon:</strong> {{ $pemesanan->telpon }}</p>
    <p><strong>Alamat:</strong> {{ $pemesanan->alamat }}</p>
    <p><strong>Status:</strong> {{ ucfirst($pemesanan->status) }}</p>
    <p><strong>Total:</strong> Rp{{ number_format($pemesanan->total_harga, 0, ',', '.') }}</p>

    {{-- <h4 class="mt-4">Item Pemesanan</h4>
    <table class="table table-sm table-bordered">
        <thead>
            <tr>
                <th>Nama Merchandise</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pemesanan->items as $item)
            <tr>
                <td>{{ $item->merchandise->nama }}</td>
                <td>Rp{{ number_format($item->harga, 0, ',', '.') }}</td>
                <td>{{ $item->quantity }}</td>
                <td>Rp{{ number_format($item->harga * $item->quantity, 0, ',', '.') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table> --}}

    <a href="{{ route('admin.pemesanan.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
