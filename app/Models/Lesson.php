<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'categories_lesson', 'lesson_id','category_id');
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }
}
