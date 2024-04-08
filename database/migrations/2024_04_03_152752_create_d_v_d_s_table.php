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
        Schema::create('d_v_d_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('format_id');
            $table->foreignId('type_id');
            $table->foreignId('location_id');
            $table->foreignId('genre_id');
            $table->string('slug')->unique();
            $table->string('name');
            $table->string('image_url');
            $table->text('offical_website'); // maybe use link() instead of text()
            $table->text('imdb'); // maybe use link() instead of text()
            $table->integer('disc');
            $table->text('rating');
            $table->timestamps();
            $table->timestamp('published_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('d_v_d_s');
    }
};
