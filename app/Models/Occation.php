<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Occation extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'author',
        'price',
        'image',
        'description',
        'author_id',
        'category_id',
        
    ];

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
