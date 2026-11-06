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
        Schema::create('medicine_catalogs', function (Blueprint $table) {
            $table->id();
               $table->string('brand_name');
        $table->string('generic_name');
        $table->string('active_ingredient');
        $table->string('strength')->nullable();
        $table->string('dosage_form')->nullable();
        $table->string('manufacturer')->nullable();

        $table->decimal('price', 10, 2)->nullable();
        $table->string('source')->nullable();
        $table->date('source_date')->nullable();

        $table->boolean('is_verified')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicine_catalogs');
    }
};
