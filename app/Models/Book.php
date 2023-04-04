<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    use HasFactory;

    //Config, wenn Tabelle nicht Namenskonvention entspricht
    //protected $table = 'book';
    //protected $primaryKey = 'isbn';

    protected $fillable = ['isbn', 'title', 'subtitle', 'published', 'rating', 'description', 'user_id'];

    public static function scopeFavourite($query) {
        return $query->where('rating', '>=', 8);
    }

    public function images():HasMany {
        return $this->hasMany(Image::class);
    }

    public function user():BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function authors():BelongsToMany {
        return $this->belongsToMany(Author::class)->withTimestamps();
    }
}
