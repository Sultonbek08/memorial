<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('author_id');
            $table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');
            $table->unsignedBigInteger('magazine_id'); // Foreign key ustun
            $table->foreign('magazine_id')->references('id')->on('magazines')->onDelete('cascade');
            $table->string('name_uz');
            $table->string('name_en');
            $table->string('name_ru');
            $table->string('content_uz');
            $table->string('content_en');
            $table->string('content_ru');
            $table->string('doi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
