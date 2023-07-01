<?php

namespace App\Http\Controllers;

use App\Models\TrainRoutes;
use Illuminate\Http\Request;

class TrainRouteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainRoute = TrainRoutes::all();
        return view('train_routes.index')->with('train_routes', $trainRoute);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('train_routes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $trainRoute = $request->validate([
            'train_name' => 'required|unique:train_name|'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
