<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class SeriesController extends Controller
{
    public function index() {
        {
            $series = Serie::query()->orderBy('name')->get();
    
            return view('series.index', compact('series'));
        }
    }

    public function create() {
        {
            return view('series.create');
        }
    }

    public function store(Request $request) {
        {
            $nomeSerie = $request->input('nome');
            $serie = new Serie();
            $serie->name = $nomeSerie;
            $serie->save();

            return redirect("/series");

        }
    }
}
