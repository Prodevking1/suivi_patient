<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDossierMedicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dossier_medicals', function (Blueprint $table) {
            $table->id();
            $table->string('n_patient');
            $table->string('p_patient');
            $table->string('tel_patient');
            $table->string('adr_patient');
            $table->string('ant_med');
            $table->string('n_danger');
            $table->string('date_rdv');
            $table->string('date_cons');
            $table->string('notes');
            $table->string('sit_mat');
            $table->string('m_rec');
            $table->string('grp_san');
            $table->string('al_med');
            $table->string('vacc');
            $table->string('ser');
            $table->string('oper');
            $table->string('sex_patient');
            $table->string('electro');
            $table->string('poids');
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
        Schema::dropIfExists('dossier_medicals');
    }
}
