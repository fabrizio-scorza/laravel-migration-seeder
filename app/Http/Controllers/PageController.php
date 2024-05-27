<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //funzione per la vista home
    public function home()
    {
        // tramite il model prendo i dati della tabella train e li metto nella variabile trains
        $trains = Train::whereDate('orario_di_partenza', today())->get();

        // ritorno la vista e i dati
        return view('home', compact('trains'));
    }
}
