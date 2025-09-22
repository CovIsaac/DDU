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
        Schema::create('meeting_analytics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('meeting_id')->constrained('meetings')->cascadeOnDelete();
            $table->unsignedInteger('total_duration_minutes')->default(0);
            $table->unsignedInteger('total_participants')->default(0);
            $table->unsignedInteger('unique_patients')->default(0);
            $table->decimal('average_engagement', 5, 2)->default(0);
            $table->json('metrics')->nullable();
            $table->timestamp('calculated_at')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->unique('meeting_id');
            $table->index('calculated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meeting_analytics');
    }
};
