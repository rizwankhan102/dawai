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
        Schema::create('doselogs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('medicine_schedule_id')->constrained('medicine_schedules')->onDelete('cascade');
            
            $table->date('schedule_date');
            $table->enum('status',[
                'taken',
                'skipped',
                'unconfirmed'])->default('unconfirmed');
            $table->timestamp('taken_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doselogs');
    }
};
