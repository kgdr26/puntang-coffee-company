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
        Schema::create('mst_template_colors', function (Blueprint $table) {

            $table->id('mstc_id');

            // nama template
            // contoh: landing / admin
            $table->string('mstc_template');

            // key css variable
            // contoh: primary_color
            $table->string('mstc_key');

            // value warna
            $table->string('mstc_value');

            // status aktif
            $table->boolean('mstc_status')->default(1);

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mst_template_colors');
    }
};
