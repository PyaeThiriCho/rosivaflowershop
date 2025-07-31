<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Flower extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'author',
        'price',
        'image',
        'description',
        'type_id',
        'category_id',
        
    ];

    public function types():BelongsTo
    {
        return $this->belongsTo(Type::class);
    }

    
}
