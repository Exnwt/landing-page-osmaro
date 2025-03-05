<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\relations\HasMany;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory, SoftDeletes;

     /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'status',
    ];


    protected static function boot()
    {
        parent::boot();

    static::saving(function ($category){
        if (empty($category->slug) || $category->isDirty('name')) {
            $category->slug = Str::slug($category->name);
        }
    });
}

 public function post(): HasMany {
    return $this->hasMany(Post::class);

 }
 public function posts()
 {
     return $this->hasMany(Post::class);
 }
}
