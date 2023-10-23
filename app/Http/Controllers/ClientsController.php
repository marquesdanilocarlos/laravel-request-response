<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ClientsController extends Controller
{

    public function index(Response $response)
    {
        /*return $response
            ->setContent('<h1>Hello World!</h1>')
            ->setStatusCode(500)
            ->header('Content-type', 'application/json');*/

        return response('<h1>Hello World!</h1>', 500, ['Content-type' => 'text/html']);
    }
    public function create(Request $request)
    {
        echo $request->path();
        dump($request->is('clients'));
        dump($request->url());
        dump($request->fullUrl());
        dump($request->method());
        dump($request->isMethod('post'));
        dump($request->header());
        dump($request->hasHeader('cookie'));
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

        if ($request->hasFile('photo')) {
            dump($request->file('photo')->path(), $request->file('photo')->extension());
            dump($request->file('photo')->store());
        }
    }

    public function storeApi(Request $request)
    {
        dd($request->all());
    }

}
