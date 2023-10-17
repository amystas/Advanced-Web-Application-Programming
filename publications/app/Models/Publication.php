<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Publication extends Model
{
    protected $fillable = [
        'title',
        'content',
        'author'
    ];

    public function excerpt() : Attribute
    {
        return Attribute::make(
            get: fn () => substr($this->attributes['content'], 0, 50).'...',
        );
    }
}
?>
