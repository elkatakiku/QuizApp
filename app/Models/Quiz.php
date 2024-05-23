<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Quiz extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'title',
        'created_by',
        'is_public',
    ];

    public function createdBy() : BelongsTo {
        return $this->belongsTo(User::class);
    }
}
