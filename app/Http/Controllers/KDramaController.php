<?php

namespace App\Http\Controllers;

use App\Http\Resources\KDramaResource;
use App\Models\KDrama;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class KDramaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $drakors = KDrama::get();
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
    public function show(KDrama $kDrama): KDramaResource
    {
        return new KDramaResource($kDrama);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KDrama $kDrama): Response
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KDrama $kDrama): Response
    {
        //
    }
}