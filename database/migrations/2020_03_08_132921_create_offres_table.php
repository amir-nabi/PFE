<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Date;

class CreateOffresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titre');
            $table->string('secteur');
            $table->string('categorie');
            $table->string('description')->nullable();
            $table->string('image');
            $table->double('prix');
            $table->double('solde')->nullable()->default(0);
            $table->boolean('active')->default(0);
            $table->date('date_debut');
            $table->date('date_fin');
            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('offres');
    }
}
