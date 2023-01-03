<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Plant;
use Illuminate\Http\Request;

class PlantsController extends Controller
{
    public function index() {
        $plants = Plant::all();
        return response($plants, 200);
    }

    public function store(Request $request) {
        $plant = Plant::create($request->all());
        return response()->json($plant, 201);
    }

    public function show($id)
    {
        $plant = Plant::find($id);
        if ($plant) {
            return response()->json($plant);
        }
        return response()->json(["message" => "Plant Not Found"]);
    }

    public function update(Request $request, $id)
    {
        $plant = Plant::find($id);
        if ($plant) {
            $plant->update($request->all());
            return response()->json($plant);
        }
        return response()->json(["message" => "Plant Not Found"]);
    }

    public function destroy($id) {
        $plant = Plant::find($id);
        if ($plant) {
            $plant->delete();
            return response()->json($plant);
        }
        return response()->json(["message" => "Plant Not Found"]);
    }
}
