<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('music_data', function (Blueprint $table) {
            $table->id();
            $table->string('Title');
            $table->foreignId('album_id')
                ->nullable()
                ->constrained('albums')
                ->nullOnDelete();
            $table->boolean('NoAlbum')->default(false);
            $table->string('Duration')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('music_data');
    }
};
