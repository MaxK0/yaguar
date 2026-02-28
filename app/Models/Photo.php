<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'path',
        'page',
        'is_active',
        'order',
    ];

    // Метод для получения URL изображения
    public function getUrlAttribute()
    {
        return asset('storage/' . $this->path);
    }
}
