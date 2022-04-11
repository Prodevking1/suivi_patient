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
     * Display a specified ressource from storage
     * 
     * @param DossierMedical $dossier
     * @return \Illuminate\Http\Response
     * 
     */
    public function show($id){
        $dossier = DossierMedical::where('id', $id)->first();
        return view('dossiers.show', [
            'dossier' => $dossier,
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  DossierMedical $id
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
    public function update(Request $request, $id){

        $request->validate(
            ['notes' => 'required']
        );
        /* $dossier->update($request->all()); */
        $dossier = DossierMedical::where('id', $id);
        $dossier -> notes = $request->get('notes');
        $dossier -> save();
        return redirect()->route('dossier.index');
    }

    /**
     * Remove the specified ressource to the storage
     * 
     * @param DossierMedical dossier $dossier
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dossier = DossierMedical::where('id',$id);
        $dossier->delete();
        return redirect()->back()->with('status', 'Dossier supprime avec succes');
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
        $dossier->date_cons = $request->date_cons;
        $dossier->m_rec = $request->m_rec;
        $dossier->grp_san = $request->grp_san;
        $dossier->al_med = $request->al_med;
        $dossier->vacc = $request->vacc;
        $dossier->vacc = $request->vacc;
        $dossier->ser = $request->ser;
        $dossier->oper = $request->oper;
        $dossier->n_danger = $request->n_danger;
        $dossier->sex_patient = $request->sex_patient;
        $dossier->electro = $request->electro;
        $dossier->poids = $request->poids;
        $dossier->electro = $request->electro;
        $dossier->notes = $request->notes;
        
        $dossier->save();
        return redirect()->route('home')->with("Dossier ajouter avec succes");
    }
}