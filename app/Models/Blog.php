<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Blog extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'subtitle',
        'content',
        'project_id',
        'thumbnail',
    ];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
