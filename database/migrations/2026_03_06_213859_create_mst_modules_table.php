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
        Schema::create('mst_modules', function (Blueprint $table) {

            $table->id('msm_id');

            // nama module/menu
            $table->string('msm_name');

            // prefix url
            // contoh: produk → /produk
            $table->string('msm_prefix')->nullable();

            // middleware
            // contoh: web, auth
            $table->string('msm_middleware')->nullable();

            // status aktif
            $table->boolean('msm_status')->default(1);

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mst_modules');
    }
};
