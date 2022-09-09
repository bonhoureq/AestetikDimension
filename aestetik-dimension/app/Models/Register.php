<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Register extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = ["firstname", "lastname", "email", "password", "catalog_id", "role"];
    protected $guarded = [];
    public function catalog()
    {
        return $this->hasOne(Catalog::class, 'user_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'owner_id');
    }
}
