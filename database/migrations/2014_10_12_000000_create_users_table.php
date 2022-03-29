<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            /* $table->integer('id_patient');
            $table->string('n_patient');
            $table->string('prenom_patient');
            $table->string('sex_patient');
            $table->string('adr_patient');
            $table->string('m_patient');
            $table->string('lien_paren');
            $table->string('tel_danger');
            $table->string('n_danger');
            $table->string('p_danger');
            $table->string('grp_san');
            $table->string('al_med');
            $table->string('electro');
            $table->integer('poids');
            $table->string('ant_med');
            $table->string('m_rec');
            $table->string('date_rdv');
            $table->string('vacc');
            $table->string('ser');
            $table->string('oper');
            $table->integer('id_hop');
            $table->string('nom_hop');
            $table->string('ville_hop');
            $table->string('id_medsoi');
            $table->string('nom_medsoi');
            $table->string('tel_medsoi');
            $table->string('id_medtrai');
            $table->string('nom_medtrai');
            $table->string('tel_medtrai');
            $table->string('mdp_user'); */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
