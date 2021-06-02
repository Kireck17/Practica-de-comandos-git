<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePruebaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prueba', function (Blueprint $table) {
            $table->id();
            
            $table->string('nomLi',200);
            $table->integer('canEx');
            $table->decimal('price',8,2);
            $table->text('description');
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
        
        Schema::dropIfExists('prueba');
    }
}
