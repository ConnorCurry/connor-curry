<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'subtitle',
        'content'
    ];

    public function blogs(): HasMany
    {
        return $this->hasMany(Blog::class);
    }
}
