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
        Schema::create('meeting_notes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('meeting_id')->constrained('meetings')->cascadeOnDelete();
            $table->foreignId('author_id')->constrained('users');
            $table->string('title');
            $table->string('category')->default('general');
            $table->text('body');
            $table->boolean('is_private')->default(false);
            $table->json('attachments')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->index(['meeting_id', 'is_private']);
            $table->index('author_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meeting_notes');
    }
};
