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
    }

}
