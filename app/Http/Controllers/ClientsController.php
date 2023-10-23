<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dump($request->input('name'), $request->input('age'));
        dump($request->name, $request->age);
        dump($request->all());
        dump($request->except('_token'));
        dump($request->only('age'));

        dump($request->query('name', 'nenhum dado'));
        dump($request->query());

        if (!$request->has('name')) {
            dd('Não existe nome');
        }

        if (!$request->filled('name')) {
            dd('Nome não tem valor');
        }

        dd('Tudo certo');
    }

    public function storeApi(Request $request)
    {
        dd($request->all());
    }

}
