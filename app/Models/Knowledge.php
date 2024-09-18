<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Knowledge extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'excerpt',
        'content',
        'date',
        'creator',
    ];

    public function tagsKnowledge()
    {
        return $this->hasMany(TagKnowledge::class);
    }
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
