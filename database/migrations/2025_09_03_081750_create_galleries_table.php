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
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Image title
            $table->string('slug')->unique(); // SEO-friendly slug
            $table->string('image_path'); // Path to the image file
            //$table->string('alt_text')->nullable(); // Alt text for SEO
            $table->text('description')->nullable(); // Optional longer description

            // SEO meta
            //$table->string('meta_title')->nullable();
            //$table->string('meta_description', 255)->nullable();
            //$table->string('meta_keywords')->nullable();

            // Optional: tags, status, etc.
            $table->enum('status',['Active','Inactive'])->default('Active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galleries');
    }
};
