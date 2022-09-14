<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\JsonResponse;

class AdminController extends Controller
{

    public function index():AnonymousResourceCollection
    {
        $admins = Admin::all();
        return JsonResource::collection($admins);
    }


    public function store(Request $request): JsonResource
    {
        $validated = $request->validate([
            'name' => 'required',
        ]);

        $permission = Admin::query()->create($validated);
        return JsonResource::make($permission);
    }
    public function show(Admin $admin): JsonResponse
    {
        return response()->json($admin);
    }

    public function destroy(Admin $admin): JsonResponse
    {
        $admin->delete();
        return response()->json($admin);
    }

    public function getAllAdminOp(): JsonResponse
    {
        $admin = Admin::all();
        return response()->json($admin);
    }
}
