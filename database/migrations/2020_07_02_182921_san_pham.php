<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SanPham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('san_phams')){
            Schema::create('san_phams', function($table){
                $table->increments('id');
                $table->string('tenSP');
                $table->integer('gia');
                $table->integer('idDM');
                $table->string('image');
                $table->string('bigImage');
                $table->foreign('idDM')->references('id')->on('danh_mucs');
                $table->primary('id');
            });
        }
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('san_phams');
        
    }
}
