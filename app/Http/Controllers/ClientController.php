<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
class ClientController extends Controller
{
    public function create()
    {

        return view('dashboard.client.create');
    }
    public function edit(Client $client){

        return view('dashboard.client.edit', compact('client'));
    }
    public function update(Request $request, Client $client){

        $client->update($request->all());

        return redirect()->route('clients.index');
    }
    
    public function store(Request $request)
    {
        Client::create($request->all());

        return redirect()->route('clients.index');
    }
    public function index()
    {
        $clients= Client::all();

        return view('dashboard.client.index',compact('clients'));
    }
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index');
    }
}
