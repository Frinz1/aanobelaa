<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'email', 'product_title', 'image', 'product_id', 'user_id'
    ];
    
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}