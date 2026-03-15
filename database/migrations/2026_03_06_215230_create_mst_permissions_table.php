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
        Schema::create('mst_permissions', function (Blueprint $table) {

            $table->id('msp_id');

            // nama permission
            $table->string('msp_name');

            // route name
            $table->string('msp_route');

            // module
            $table->unsignedBigInteger('msp_module_id');

            // status
            $table->boolean('msp_status')->default(1);

            $table->timestamps();

            $table->foreign('msp_module_id')
                ->references('msm_id')
                ->on('mst_modules')
                ->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mst_permissions');
    }
};
