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
        Schema::create('mst_template_settings', function (Blueprint $table) {

            $table->id('mts_id');

            // nama template
            // landing / admin
            $table->string('mts_template');

            // group setting
            // color,font,layout
            $table->string('mts_group')->nullable();

            // key setting
            // primary-color
            $table->string('mts_key');

            // value setting
            $table->text('mts_value')->nullable();

            // status aktif
            $table->boolean('mts_status')->default(1);

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mst_template_settings');
    }
};
