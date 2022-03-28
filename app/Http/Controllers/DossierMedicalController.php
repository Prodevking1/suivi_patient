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
}