<?php

namespace App\Http\Controllers;

use App\Models\Drakor;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DrakorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $drakors = Drakor::get();
        return response($drakors);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): Response
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Drakor $drakor): Response
    {
        return response($drakor);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Drakor $drakor): Response
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Drakor $drakor): Response
    {
        //
    }
}
