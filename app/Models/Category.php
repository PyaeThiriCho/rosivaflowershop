<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

        protected $fillable=['name'];

        public function occasitions():HasMany
    {
        return $this->hasMany(Occation::class);
    }

        public function flowers():HasMany
    {
        return $this->hasMany(Flower::class);
    }
}
