<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    use HasFactory;
    protected $table = 'lots';
    protected $fillable = [
        'title', 'description', 'category_id',
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}