@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="mb-4">Daftar Pemesanan</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>User</th>
                <th>Total Harga</th>
                <th>Status</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pemesanan as $p)
            <tr>
                <td>{{ $p->order_id }}</td>
                <td>{{ $p->user->name }}</td>
                <td>Rp{{ number_format($p->total_harga, 0, ',', '.') }}</td>
                <td>
                    <span class="badge bg-{{ $p->status == 'success' ? 'success' : ($p->status == 'pending' ? 'warning' : 'danger') }}">
                        {{ ucfirst($p->status) }}
                    </span>
                </td>
                <td>{{ $p->created_at->format('d-m-Y H:i') }}</td>
                <td>
                    <a href="{{ route('admin.pemesanan.show', $p->id) }}" class="btn btn-info btn-sm">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
