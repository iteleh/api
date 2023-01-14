<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\review;

class product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'detail', 'stock', 'price', 'discount'];

    public function reviews()
    {
        return $this->hasMany(review::class);
    }
}
