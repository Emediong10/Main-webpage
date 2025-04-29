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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
             $table->string('title')->unique();
            $table->longText('content');
            $table->foreignId('image_id')->constrained('media')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('author')->nullable();
            $table->string('slug');
            $table->boolean('is_general')->default(false);
            $table->tinyInteger('event_status')->nullable();
            $table->date('start_date')->nullable();
            $table->time('start_time')->default('00:00')->nullable();
            $table->string('meta_description')->nullable();
            $table->date('end_date')->nullable();
            $table->time('end_time')->default('00:00')->nullable();
             $table->boolean('active')->default(false);
             $table->boolean('calenderable')->default(false);
            $table->json('viewable_by')->nullable();
            $table->foreignId('created_by')->nullable()->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
