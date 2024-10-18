<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Content extends Model
{

    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'date_publication',
        'image_url',
        'status',
        'public',

    ];

    /**
     * Get the Category associated a content
     *
     */
     public function category(): BelongsTo
     {
         return $this->belongsTo(Category::class);
     }
}
