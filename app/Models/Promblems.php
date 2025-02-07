<?php

namespace App\Models;

use App\Models\Status;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Promblems extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Relation ke Tabel Status
    public function status() {
        return $this->belongsTo(Status::class);
    }

    // Relation Ke Tabel Category
    public function category() {
        return $this->belongsTo(Category::class);
    }
}
