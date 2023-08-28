<?php

namespace App\Models;

use App\Models\Chalengge;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category_chalengges() 
    {
        return $this->hasMany(Chalengge::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
