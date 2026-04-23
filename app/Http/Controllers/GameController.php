<?php

namespace App\Http\Controllers;

use App\Http\Requests\GameDeleteRequest;
use App\Http\Requests\StoreGameRequest;
use App\Http\Resources\GameResource;
use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        return GameResource::collection(Game::all());
    }

    public function show(Game $game)
    {
        return new GameResource($game);
    }

    public function store(StoreGameRequest $request)
    {
        $game = Game::create($request->validated());

        return new GameResource($game);
    }

    public function destroy(GameDeleteRequest $request)
    {
        $game = Game::findOrFail($request->id);
        $game->delete();

        return response()->noContent();
    }
}
