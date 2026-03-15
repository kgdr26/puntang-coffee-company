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
        Schema::create('mst_module_routes', function (Blueprint $table) {

            $table->id('msr_id');

            // relasi ke modules
            $table->unsignedBigInteger('msr_module_id');

            // nama route
            $table->string('msr_name');

            // uri route
            // contoh: /list-data
            $table->string('msr_uri');

            // nama function controller
            $table->string('msr_action');

            // controller
            $table->string('msr_controller');

            // tipe route
            // index,page,insert,update,delete,list-data,show-data
            $table->string('msr_type')->nullable();

            // status aktif
            $table->boolean('msr_status')->default(1);

            $table->timestamps();

            // foreign key
            $table->foreign('msr_module_id')
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
        Schema::dropIfExists('mst_module_routes');
    }
};
