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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('model');
            $table->integer('production_year');
            $table->integer('power_hp');
            $table->double('engine_capacity');
            $table->string('fuel_type');
            $table->string('drive');
            $table->string('transmission');
            $table->string('type');
            $table->integer('doors_number');
//            $table->timestamp('created_at');
//            $table->timestamp('updated_at');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
