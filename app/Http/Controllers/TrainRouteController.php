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
        $request->validate([
            'train_name' => 'required|unique:train_routes,train_name|max:255',
            'start_station' => 'required',
            'start_time' => 'required',
            'end_station' => 'required',
            'end_time' => 'required',
            'weekly_schedule' =>'required',
        ]);
        // dd($request->all());

        $trainRoute = new TrainRoutes;
        $trainRoute->train_name = $request->train_name;
        $trainRoute->start_station = $request->start_station;
        $trainRoute->start_time = $request->start_time;
        $trainRoute->end_station = $request->end_station;
        $trainRoute->end_time = $request->end_time;
        $trainRoute->weekly_schedule = json_encode($request->weekly_schedule);

        $trainRoute->save();

        return redirect('/train_routes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $trainRoute = TrainRoutes::find($id);
        return view('train_routes.show')->with('train_routes', $trainRoute);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $trainRoute = TrainRoutes::where('id', $id)->get();        
        return view('train_routes.edit', compact('trainRoute'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'train_name' => 'required|max:255',
            'start_station' => 'required',
            'start_time' => 'required',
            'end_station' => 'required',
            'end_time' => 'required',
            'weekly_schedule' =>'required',
        ]);
        // dd($request->all());

        $trainRoute = TrainRoutes::find($request->id);
        $trainRoute->train_name = $request->train_name;
        $trainRoute->start_station = $request->start_station;
        $trainRoute->start_time = $request->start_time;
        $trainRoute->end_station = $request->end_station;
        $trainRoute->end_time = $request->end_time;
        $trainRoute->weekly_schedule = json_encode($request->weekly_schedule);

        $trainRoute->update();

        return redirect('/train_routes');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $trainRoute = TrainRoutes::find($id);
        $trainRoute->delete();
        return back();
    }

    public function viewRoutes(){
        $trainRoute = TrainRoutes::all();
        return view('/welcome')->with('train_routes', $trainRoute);
    }
}
