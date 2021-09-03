<?php

namespace App\Http\Controllers;

use App\Models\Demand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DemandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*   // eager code //      $demand = Demand::with('demand')->get(); */
        return view('demand.index')
            ->with('demands', Demand::latest()->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('demand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'adress' => 'required',
            'structure' => 'required',
            'formula' => 'required',
            'information' => 'required'
        ]);
        /*
        Demand::create([
            'name' => $request->input('title'),
            'adress' => $request->input('adress'),
            'structure' => $request->input('structure'),
            'formula' => $request->input('formula'),
            'information' => $request->input('information'),
            'user_id' => auth()->user()->id,
        ]); */
        $demand = new Demand();
        $demand->name = $request->name;
        $demand->adress = $request->adress;
        $demand->structure = $request->structure;
        $demand->formula = $request->formula;
        $demand->information = $request->information;

        $demand->user_id = Auth::id();
        $demand->save();

        return redirect('/demand')
            ->with('message', 'Your post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Demand  $demand
     * @return \Illuminate\Http\Response
     */
    public function show(Demand $demand)
    {
        return view('demand.show', compact('demand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Demand  $demand
     * @return \Illuminate\Http\Response
     */
    public function edit(Demand $demand)
    {
        return view('demand.edit', compact('demand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Demand  $demand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Demand $demand)
    {
        $request->validate([
            'name' => 'required',
            'adress' => 'required',
            'structure' => 'required',
            'formula' => 'required',
            'information' => 'required'
        ]);
        $demand = new Demand();
        $demand->name = $request->name;
        $demand->adress = $request->adress;
        $demand->structure = $request->structure;
        $demand->formula = $request->formula;
        $demand->information = $request->information;

        $demand->user_id = Auth::id();
        $demand->save();

        return redirect('/demand')
            ->with('message', 'Your post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Demand  $demand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Demand $demand)
    {
        $demand->delete();

        return redirect()->route('demand.index')
            ->with('success', 'Demand deleted successfully');
    }
}
