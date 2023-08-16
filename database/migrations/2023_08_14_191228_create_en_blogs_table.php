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
        Schema::create('en_blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('short_description');
            $table->longText('description');
            $table->string('image')->nullable();
            $table->string('link');
            $table->integer('queue');
            $table->integer('blog_id');
            $table->dateTime('live_start');
            $table->dateTime('live_finish');
            $table->integer('status')->default(1);
            $table->string('seo_title')->nullable();
            $table->string('seo_description')->nullable();
            $table->string('seo_key')->nullable();
            $table->integer('seo_statu')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('en_blogs');
    }
};
