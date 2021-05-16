<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImmoblisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('immoblis', function (Blueprint $table) {
            $table->id();
            $table->string('codeAbar') ;
            $table->string('designation') ;
            $table->string('quantite') ;
            

            $table->foreignId('categorie_id')->constrained()->cascade('onDelete') ;
            $table->foreignId('departement_id')->constrained()->cascade('onDelete') ;
            $table->string('dateDentree') ;
            $table->string('dateDeSortie') ;
            $table->softDeletes();

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
        Schema::dropIfExists('immoblis');
    }
}
