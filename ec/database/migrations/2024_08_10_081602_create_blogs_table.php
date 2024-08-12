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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
    $table->string('main_heading');
    $table->string('main_image');
    $table->timestamps();
        });
        Schema::create('sub_contents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('content_id')->constrained('blogs')->onDelete('cascade');
            $table->string('subheading');
            $table->text('description');
            $table->string('sub_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
