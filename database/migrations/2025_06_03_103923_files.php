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
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('file_encrypted_name', 50);
            $table->string('file_path', 255);
            $table->unsignedInteger('file_size');
            $table->enum('file_type', ['image/jpg', 'image/jpeg', 'image/png', 'image/webp', 'image/gif']);
            $table->string('context', 255);
            $table->string('timestamp', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
