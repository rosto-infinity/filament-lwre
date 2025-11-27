<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $fillable = [
          'title',
            'slug',
            'category_id',
            'color',
            'image',
            'body',
            'tags',
            'published',
            'published_at',
    ];

    protected $casts = [
        "tags" => "array",
         "published" => "boolean",
          "published_at" => "date",
    ];

    public function category (): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
