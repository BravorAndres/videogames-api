<?php

namespace App\Http\Controllers;

use App\Models\videoGame;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VideoGamesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videoGames = videoGame::all();
        return $videoGames; 
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
        $videoGames = new videoGame;
        $videoGames->name = $request->name;
        $videoGames->description = $request->description;
        $videoGames->image = $request->image;
        $videoGames->price = $request->price;
        $videoGames->category = $request->category;
        $videoGames->save();
        return $videoGames;
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
    public function destroy($id)
    {
        $videogame = videoGame::find($id);
        $videogame->delete();
        return $videogame;
    }
}
