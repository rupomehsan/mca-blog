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
        Schema::create('website_settings', function (Blueprint $table) {
            $table->id();
            $table->string('field_title')->nullable();
            $table->text('field_value')->nullable();
            $table->tinyInteger('is_deleteable')->default(0);
            $table->tinyInteger('is_image')->default(0);
            $table->bigInteger('creator')->unsigned()->nullable();
            $table->string('slug', 50)->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });

        Schema::create('website_visitor_count', function (Blueprint $table) {
            $table->id();
            $table->string('ip')->nullable();
            $table->timestamps();
        });
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id();
            $table->string('subject')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('website_settings');
        Schema::dropIfExists('website_visitor_count');
        Schema::dropIfExists('contact_us');
    }
};
