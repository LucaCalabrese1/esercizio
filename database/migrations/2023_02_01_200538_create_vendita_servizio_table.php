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
        Schema::create('vendita_servizio', function (Blueprint $table) {
            $table->id();
            
            $table->bigInteger('vendita_id')->unsigned()->index();
            $table->foreign('vendita_id')
                  ->references('id')->on('venditas')->onDelete('cascade');
            
            $table->bigInteger('servizio_id')->unsigned()->index();
            $table->foreign('servizio_id')
                  ->references('id')->on('servizios')->onDelete('cascade');
            
            $table->integer('prezzo')->nullable();     
                  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendita_servizio');
    }
};
