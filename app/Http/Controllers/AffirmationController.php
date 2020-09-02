<?php

namespace App\Http\Controllers;

use App\Affirmation;
use App\Http\Requests\StoreAffirmation;
use App\Marketer;
use App\State;
use Illuminate\Http\Request;

class AffirmationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $affirmations = Affirmation::with(['state','marketer'])
            ->orderBy('affirmations.display_order')
            ->get();

        return view('affirmations.index', compact('affirmations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $affirmation = new Affirmation();
        $marketers = Marketer::orderBy('name')->pluck('name', 'id');
        $states = State::orderBy('name')->pluck('name', 'id');

        return view('affirmations.create',
            compact('affirmation', 'marketers', 'states'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAffirmation $request)
    {
        $values = $request->all();

        Affirmation::create($values);
        return redirect()->route('affirmations.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Affirmation  $affirmation
     * @return \Illuminate\Http\Response
     */
    public function show(Affirmation $affirmation)
    {
        return view('affirmations.show', compact('affirmation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Affirmation  $affirmation
     * @return \Illuminate\Http\Response
     */
    public function edit(Affirmation $affirmation)
    {
        $marketers = Marketer::orderBy('name')->pluck('name', 'id');
        $states = State::orderBy('name')->pluck('name', 'id');

        return view('affirmations.edit',
            compact('affirmation', 'marketers', 'states'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Affirmation  $affirmation
     * @return \Illuminate\Http\Response
     */
    public function update(StoreAffirmation $request, Affirmation $affirmation)
    {
        $values = $request->all();

        $affirmation->update($values);
        return redirect()->route('affirmations.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Affirmation  $affirmation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Affirmation $affirmation)
    {
        //
    }
}
