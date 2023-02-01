<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('point_servizio', function (Blueprint $table) {
            $table->id();
            
            
            $table->bigInteger('point_id')->unsigned()->index();
            $table->foreign('point_id')
                   ->references('id')->on('points')->onDelete('cascade');
            
            $table->bigInteger('servizio_id')->unsigned()->index();
            $table->foreign('servizio_id')
                  ->references('id')->on('servizios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('point_servizio');
    }
};
