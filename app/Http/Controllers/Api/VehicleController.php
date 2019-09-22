<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Vehicle;
use App\Http\Resources\VehicleCollection;
use App\Http\Resources\VehicleResource;
use Illuminate\Http\Request;
use JWTAuth;


class VehicleController extends Controller
{
    public function index()
    {
        return new VehicleCollection(auth('api')->user()->vehicles()->get());
    }

    public function show(Vehicle $vehicle)
    {
        return new VehicleResource($vehicle->load(['user', 'users']));
    }

    public function store(Request $request)
    {
//        TODO: reqrite method to accept body_type_id.
        return new VehicleResource(Vehicle::create($request->all()));
    }

    public function update(Request $request, Vehicle $vehicle)
    {
        $vehicle->update($request->all());

        return new VehicleResource($vehicle);
    }

    public function destroy(Request $request, Vehicle $vehicle)
    {
        $vehicle->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
