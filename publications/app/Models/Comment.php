<?php
/**
* Klasa typu model reprezentująca pisemne publikacje użytkowników.
*
* @property int $id
* @property int $author_id
* @property string $title
* @property string $content
*
* @property User $author
*/


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;
    protected $fillable = ['author_id', 'publication_id', 'content'];
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function answer(): BelongsTo
    {
        return $this->belongsTo(Comment::class, 'answer_to');
    }
}
