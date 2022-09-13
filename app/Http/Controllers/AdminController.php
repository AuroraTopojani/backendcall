<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Admin;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class AdminController extends Controller
{

        public function index(): AnonymousResourceCollection
        {
            $admin = Admin::all();
            return JsonResource::collection($admin);
        }

}
