<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\User;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    public function index()
    {
        return new UserCollection(User::paginate());
    }

    public function show(User $user)
    {
        return new UserResource($user->load(['vehicles', 'vehicles']));
    }

    public function store(Request $request)
    {
        return new UserResource(User::create($request->all()));
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());

        return new UserResource($user);
    }

    public function destroy(Request $request, User $user)
    {
        $user->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
