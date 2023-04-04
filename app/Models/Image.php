<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image extends Model
{
    protected $fillable = ['url', 'title'];
    use HasFactory;

    /**
     * book has multiple images - 1 image belongs to 1 book
     */
    public function book():BelongsTo {
        return $this->belongsTo(Book::class);
    }

}
