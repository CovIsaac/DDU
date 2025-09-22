<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class MeetingNote extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'meeting_id',
        'author_id',
        'title',
        'category',
        'body',
        'is_private',
        'attachments',
    ];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'is_private' => 'boolean',
        'attachments' => 'array',
    ];

    /**
     * Scope a query to only public notes.
     */
    public function scopePublic(Builder $query): Builder
    {
        return $query->where('is_private', false);
    }

    /**
     * Scope notes by category.
     */
    public function scopeForCategory(Builder $query, string $category): Builder
    {
        return $query->where('category', $category);
    }

    /**
     * Relationship: meeting the note belongs to.
     */
    public function meeting(): BelongsTo
    {
        return $this->belongsTo(Meeting::class);
    }

    /**
     * Relationship: author of the note.
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
