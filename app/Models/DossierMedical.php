<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DossierMedical extends Model
{
    use HasFactory;
    protected $fillables = [
        'id_patient',
        'n_patient',
        'p_patient',
        'tel_patient',
        'adr_patient',
        'sit_mat',
        'ant_med',
        'date_rdv',
        'm_rec',
        'grp_san',
        'al_med',
        'vacc',
        'ser',
        'oper',
        /* 'n_danger',
        'p_danger',
        'tel_danger', */
        'sex_patient',
        'electro',
        'poids',
        
        /* 'n_medsoi',
        'tel_medsoi',
        'n_medtrai',
        'tel_medtrai', */

    ];
}
