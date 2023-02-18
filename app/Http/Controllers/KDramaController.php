<?php

namespace App\Http\Controllers;

use App\Http\Requests\KDramaRequest;
use App\Http\Resources\KDramaCollection;
use App\Http\Resources\KDramaResource;
use App\Models\KDrama;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class KDramaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): KDramaCollection
    {
        return new KDramaCollection(KDrama::get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(KDramaRequest $request): JsonResponse
    {
        KDrama::create($request->validated());

        return response()->json([
            'message' => 'success added a kdrama'
        ], 201);
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
    public function update(KDramaRequest $request, KDrama $kDrama)
    {
        $kDrama->update($request->validated());

        return response()->json([
            'message' => 'success edited a kdrama'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KDrama $kDrama): Response
    {
        //
    }
}