<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        "title",
        "slug",
        "body",
        "author_id",
        "category_id",
        "status",
        "thumbnail",
    ];

    public function scopePublished($query) {
        return $query->where('status', 'published')->orderBy('created_at', 'desc');
    }

    protected static function boot()
    {
        parent::boot();

    static::saving(function ($post){
        if (empty($post->slug) || $post->isDirty('title')) {
            $post->slug = Str::slug($post->title);
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
