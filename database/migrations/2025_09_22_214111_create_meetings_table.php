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
        Schema::create('meetings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dentist_id')->constrained('users');
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('treatment_type')->nullable();
            $table->string('location')->nullable();
            $table->boolean('is_virtual')->default(false);
            $table->string('video_conference_link')->nullable();
            $table->timestamp('scheduled_at');
            $table->unsignedSmallInteger('duration_minutes')->default(30);
            $table->string('status')->default('scheduled');
            $table->boolean('follow_up_required')->default(false);
            $table->text('follow_up_notes')->nullable();
            $table->json('reminders')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->index(['dentist_id', 'scheduled_at']);
            $table->index('status');
            $table->index('scheduled_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meetings');
    }
};
