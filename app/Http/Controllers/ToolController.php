<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreToolRequest;
use App\Http\Requests\ToolDeleteRequest;
use App\Http\Resources\ToolResource;
use App\Models\Tool;

class ToolController extends Controller
{
    public function index()
    {
        return ToolResource::collection(Tool::all());
    }

    public function show(Tool $tool)
    {
        return new ToolResource($tool);
    }

    public function store(StoreToolRequest $request)
    {
        $tool = Tool::create($request->validated());

        return new ToolResource($tool);
    }

    public function destroy(ToolDeleteRequest $request)
    {
        $tool = Tool::findOrFail($request->id);
        $tool->delete();

        return response()->noContent();
    }
}
