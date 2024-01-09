<?php
/**
 * @property int $id
 * @property string $content
 * @property int $author_id
 *
 * @property-read User $author
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Publication extends Model
{
    protected $fillable = [
        'title',
        'content',
        'author_id'
    ];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id')->withTrashed();
    }

    public function comment(): HasMany
    {
        return $this->hasMany(Comment::class, 'publication_id');
    }

    public function excerpt(): Attribute
    {
        return Attribute::make(
            get: fn () => substr($this->attributes['content'], 0, 50) . '...',
        );
    }
}
