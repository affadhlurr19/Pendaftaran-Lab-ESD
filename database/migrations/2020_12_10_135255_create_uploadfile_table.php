<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUploadfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uploadfile', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user')->unsigned();            
            $table->string('file_CV');
            $table->string('path_CV');
            $table->string('file_KSM');
            $table->string('path_KSM');
            $table->string('file_ML');
            $table->string('path_ML');
            $table->string('file_Personalities');
            $table->string('path_Personalities');
            $table->string('extensi_file');            
            $table->timestamps();            
        });

        Schema::table('uploadfile', function (Blueprint $table) {                        
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uploadfile');
    }
}
