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
        Schema::create('medicines', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('strength')->nullable();
        $table->string('dosage')->nullable();
        $table->text('instructions')->nullable();
        $table->date('start_date')->nullable();
        $table->date('end_date')->nullable();
        $table->integer('stock_quantity')->default(0);
        $table->date('expiry_date')->nullable();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicines');
    }
};
