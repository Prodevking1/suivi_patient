<?php
namespace App\Http\Controllers;
use App\Models\DossierMedical;
use Illuminate\Http\Request;

class DossierMedicalController extends Controller
{
    public function create()
    {
        return view('dossiers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request){
        $dossier = new DossierMedical();
        $dossier->n_patient = $request->n_patient;

        
        $dossier->save();
        return redirect()->route('home');
    }
}