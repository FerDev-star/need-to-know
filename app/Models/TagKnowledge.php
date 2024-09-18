<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagKnowledge extends Model
{
    use HasFactory;

    protected $fillable = [
        'knowledge_id',
        'name',
    ];

    public function knowledge()
    {
        return $this->belongsTo(Knowledge::class);
    }
}
