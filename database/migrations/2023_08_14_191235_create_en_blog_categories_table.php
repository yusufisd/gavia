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
        Schema::create('en_blog_categories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('link');
            $table->softDeletes();
            $table->string('seo_title')->nullable();
            $table->integer('blog_category_id');
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
        Schema::dropIfExists('en_blog_categories');
    }
};
