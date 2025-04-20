<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pemesananItems', function (Blueprint $table) {
                $table->id();
                $table->foreignId('pemesanan_id')->constrained()->onDelete('cascade');
                $table->foreignId('merchandise_id')->constrained()->onDelete('cascade');
                $table->integer('quantity');
                $table->decimal('harga_satuan', 10, 2);  // Mengubah ke decimal untuk harga
                $table->timestamps();
            });
            
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan_items');
    }
};
