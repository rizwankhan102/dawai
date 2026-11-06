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
    Schema::create('family_user', function (Blueprint $table) {
        $table->id();

        $table->foreignId('family_id')
              ->constrained('families')
              ->cascadeOnDelete();

        $table->foreignId('user_id')
              ->constrained('users')
              ->cascadeOnDelete();

        $table->enum('role', ['owner', 'caregiver', 'member'])
              ->default('member');

        $table->enum('status', ['pending', 'active'])
              ->default('active');

        $table->timestamps();

        $table->unique(['family_id', 'user_id']);
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('family_user');
    }
};
