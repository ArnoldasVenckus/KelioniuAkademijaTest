<?php

namespace App\Http\Controllers;

use App\Models\Pardavimai;
use App\Models\Darbuotojai;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        $darbuotojai = Darbuotojai::all();
        return view('form.index', ['darbuotojai' => $darbuotojai]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'darbuotojas' => 'required',
            'greitis' => 'required',
            'kokybe' => 'required',
            'tikimybe' => 'required',
            'komentaras' => 'max:2000',
            'leidimas' => 'required',
        ]);

        $pardavimas = Pardavimai::create([
            'darbuotojai_id' => $request->darbuotojas,
            'greitis' => $request->greitis,
            'aptarnavimas' => $request->kokybe,
            'rekomendacija' => $request->tikimybe,
            'pastabos' => $request->komentaras,
            'sutikimas' => $request->leidimas,
        ]);
        // dd($pardavimas);
        $darbuotojai = Darbuotojai::all();
        return view('table', ['pardavimas' => $pardavimas, 'darbuotojai' => $darbuotojai]);
    }
}
