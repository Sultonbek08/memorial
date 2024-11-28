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
        Schema::create('magazines', function (Blueprint $table) {
            $table->id();
            $table->string('name_uz');
            $table->string('name_en');
            $table->string('name_ru');
            $table->integer('published_magazines');
            $table->string('short_name_uz');
            $table->string('short_name_en');
            $table->string('short_name_ru');
            $table->string('veb_sayt');
            $table->string('issn_publish');
            $table->string('location');
            $table->string('phone_number');
            $table->string('email');
            $table->text('description');
            $table->string('image');
            $table->string('file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('magazines');
    }
};
