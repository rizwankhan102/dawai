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
    Schema::table('medicines', function (Blueprint $table) {
        $table->foreignId('family_member_id')
              ->nullable()
              ->constrained('family_members')
              ->cascadeOnDelete();
    });
}

public function down(): void
{
    Schema::table('medicines', function (Blueprint $table) {
        $table->dropForeign(['family_member_id']);
        $table->dropColumn('family_member_id');
    });
}
};
