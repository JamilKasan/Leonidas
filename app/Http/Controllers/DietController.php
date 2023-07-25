<?php

namespace App\Http\Controllers;

use App\Models\Diet;
use Illuminate\Http\Request;

class DietController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $diets = Diet::query()->paginate(7);
        return view('diets.index', compact('diets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Diet $diet)
    {
        return view('diets.show', compact('diet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Diet $diet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Diet $diet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Diet $diet)
    {
        //
    }
}
