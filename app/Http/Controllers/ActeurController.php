<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActeurController extends Controller
{
    // retourner la vue patient
    public function user()
    {
        return view('patient');
    }

    // retourner la vue Medecin
    public function admin()
    {
        return view('medecin_consultant');
    }
}
