<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class Service extends Model
{
    use HasFactory, SoftDeletes;

   /**
     * fillable
     *
     * @var array
     */
   protected $fillable = [
       "title",
       "icon",
   ];


   protected static function boot()
   {
       parent::boot();

   static::saving(function ($service){
       if (empty($post->slug) || $service->isDirty('title')) {
           $service->slug = Str::slug($service->title);
       }
   });

   static::creating(function ($post) {
       $post->author_id = Auth::id();
   });
}
public function category(): BelongsTo{
   return $this->belongsTo(Category::class);
}
public function author(): BelongsTo{
   return $this->belongsTo(User::class);
}
}

