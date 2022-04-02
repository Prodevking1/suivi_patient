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

    public function index(){
        $datas = DossierMedical::paginate(10);
        return view('dossiers.index', compact('datas'));

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(DossierMedical $dossier){
        return view('dossiers.edit', compact('dossier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Todo $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DossierMedical $dossier){
        $dossier->update($request->all());
        return redirect()->route('dossier.index');
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
        $dossier->p_patient = $request->p_patient;
        $dossier->tel_patient = $request->tel_patient;
        $dossier->adr_patient = $request->adr_patient;
        $dossier->sit_mat = $request->sit_mat;
        $dossier->ant_med = $request->ant_med;
        $dossier->date_rdv = $request->date_rdv;
        $dossier->m_rec = $request->m_rec;
        $dossier->grp_san = $request->grp_san;
        $dossier->al_med = $request->al_med;
        $dossier->vacc = $request->vacc;
        $dossier->vacc = $request->vacc;
        $dossier->ser = $request->ser;
        $dossier->oper = $request->oper;
        /* $dossier->n_danger = $request->n_danger;
        $dossier->p_danger = $request->p_danger;
        $dossier->tel_danger = $request->tel_danger; */
        $dossier->sex_patient = $request->sex_patient;
        $dossier->electro = $request->electro;
        $dossier->poids = $request->poids;
        $dossier->electro = $request->electro;
        /* $dossier->n_medsoi = $request->n_medsoi;
        $dossier->tel_medsoi = $request->tel_medsoi;
        $dossier->n_medtrai = $request->n_medtrai;
        $dossier->tel_medsoi = $request->tel_medsoi; */
        
        $dossier->save();
        return redirect()->route('home');
    }
}