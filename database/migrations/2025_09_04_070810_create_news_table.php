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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Headline/title
            $table->text('content'); // Full event/news content
            $table->string('slug')->unique(); // SEO-friendly URL
            $table->string('pdf_path'); // Path to the image file
            $table->date('event_date'); // Date of the event/news
            $table->enum('type', ['news', 'event'])->default('news'); // Type selector
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
