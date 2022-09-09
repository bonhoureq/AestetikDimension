<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function register()
    {
        return $this->belongsTo(Register::class,'owner_id');
    }

    public function catalog()
    {
        return $this->belongsTo(Catalog::class);
    }
}
