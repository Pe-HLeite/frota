<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class FrotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Frota/IndexFrota');
    }
    
    // public function create(){}
    // public function store(Request $request){}
    // public function show(string $id){}
    // public function edit(string $id){}
    // public function update(Request $request, string $id){}
    // public function destroy(string $id){}

    public function index_grafico()
    {
        return Inertia::render('testandoGrafico');
    }
}
