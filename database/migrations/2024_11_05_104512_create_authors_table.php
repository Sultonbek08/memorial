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
        Schema::create('authors', function (Blueprint $table) {
            $table->id();
            $table->string('name_uz');
            $table->string('name_en');
            $table->string('name_ru');
            $table->string('email');
            $table->string('bio_uz');
            $table->string('bio_en');
            $table->string('bio_ru');
            $table->string('facebook');
            $table->string('telegram');
            $table->string('instagram');
            $table->string('image');    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('authors');
    }
};
