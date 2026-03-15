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
        Schema::create('mst_menus', function (Blueprint $table) {

            $table->id('msmnu_id');

            // relasi module
            $table->unsignedBigInteger('msmnu_module_id');

            // nama menu
            $table->string('msmnu_name');

            // route name
            $table->string('msmnu_route');

            // icon menu
            $table->string('msmnu_icon')->nullable();

            // parent menu (submenu)
            $table->unsignedBigInteger('msmnu_parent')->nullable();

            // urutan menu
            $table->integer('msmnu_order')->default(0);

            // status aktif
            $table->boolean('msmnu_status')->default(1);

            $table->timestamps();

            $table->foreign('msmnu_module_id')
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
        Schema::dropIfExists('mst_menus');
    }
};
