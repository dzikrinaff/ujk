<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('musisis', function (Blueprint $table) {
            $table->id();
            $table->string('gambar')->nullable();
            $table->string('nama_musisi');
            $table->text('deskripsi')->nullable();
            $table->string('ig_url')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('musisis');
    }
};
