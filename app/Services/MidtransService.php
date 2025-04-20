<?php

namespace App\Services;

use Midtrans\Config;
use Midtrans\Snap;
use Midtrans\Transaction;

class MidtransService
{
    public function __construct()
    {
        // Set konfigurasi Midtrans menggunakan server key dan client key yang sudah ada di .env
        Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        Config::$clientKey = env('MIDTRANS_CLIENT_KEY');
        Config::$isProduction = env('MIDTRANS_IS_PRODUCTION'); // Set to true for production
        Config::$isSanitized = true;
        Config::$is3ds = true;
    }

    /**
     * Fungsi untuk membuat Snap token
     */
    public function createSnapToken($order)
    {
        // Detail transaksi
        $transaction_details = [
            'order_id' => $order->kode_pemesanan,
            'gross_amount' => $order->total_harga,
        ];

        // Menyiapkan item yang akan dibayar
        $items = [];
        foreach ($order->items as $item) {
            $items[] = [
                'id' => $item->merchandise->id,
                'price' => $item->harga_satuan,
                'quantity' => $item->jumlah,
                'name' => $item->merchandise->nama,
            ];
        }

        // Menyiapkan data pelanggan
        $customer_details = [
            'first_name' => $order->user->name,
            'email' => $order->user->email,
            'phone' => $order->user->phone,
            'shipping_address' => [
                'address' => $order->alamat,
                'city' => $order->kota,
                'postal_code' => $order->kode_pos,
                'country_code' => 'IDN', // Kode negara Indonesia
            ]
        ];

        // Menyiapkan data permintaan pembayaran
        $payment_request = [
            'transaction_details' => $transaction_details,
            'item_details' => $items,
            'customer_details' => $customer_details,
        ];

        // Menggunakan API Midtrans untuk mendapatkan Snap Token
        try {
            $snapToken = Snap::getSnapToken($payment_request);
            return $snapToken;
        } catch (\Exception $e) {
            // Menangani kesalahan jika terjadi
            return null;
        }
    }

    /**
     * Fungsi untuk memverifikasi transaksi setelah pembayaran dilakukan
     */
    public function verifyTransaction($order_id)
    {
        try {
            // Mengambil status transaksi menggunakan order_id
            $status = Transaction::status($order_id);
            return $status;
        } catch (\Exception $e) {
            // Menangani kesalahan jika terjadi
            return null;
        }
    }
}
