<?php

namespace App\Models;

use App\Http\Controllers\UserController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Admin extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function admins(): BelongsToMany
    {
        return $this->belongsToMany(User::class,'admin__users','admin_id','user_id')->using(Admin_User::class);
    }
}
