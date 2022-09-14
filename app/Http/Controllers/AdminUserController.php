<?php

namespace App\Http\Controllers;
use App\Models\Admin_User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AdminUserController extends Controller
{

    public function store(Request $request): JsonResource
    {
        $validated = $request->validate([
            'admin_id'=>'required',
            'user_id' => 'required']);

        $admin_user = Admin_User::query()->create($validated);
        return JsonResource::make($admin_user);
    }
}
