<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDossierMedicalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dossier_medical', function (Blueprint $table) {
            $table->id();
            $table->string('n_patient');
            $table->string('p_patient');
            $table->integer('tel_patient');
            $table->string('adr_patient');
            $table->string('ant_med');
            $table->string('date_rdv');
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
        Schema::dropIfExists('dossier_medical');
    }
}
