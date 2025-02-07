<?php

namespace App\Models;

use App\Models\Promblems;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $guarded =['id'];
    
    public function problem() {
        return $this->hasMany(Promblems::class);
    }
}
