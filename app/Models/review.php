<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product;

class review extends Model
{
    use HasFactory;

    protected $fillable = [ 'customer','review','star' ];

    public function product()
    {
        return $this->belongsTo(product::class);
    }
}
