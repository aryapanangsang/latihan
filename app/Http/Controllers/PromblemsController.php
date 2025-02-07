<?php

namespace App\Http\Controllers;

use App\Models\Promblems;
use Illuminate\Http\Request;

class PromblemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {        
        return view('index',
        [
            $problems = Promblems::all(),
            'problem' => $problems,
        ]);
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
    public function show(Promblems $promblems)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Promblems $promblems)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Promblems $promblems)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Promblems $promblems)
    {
        //
    }
}
