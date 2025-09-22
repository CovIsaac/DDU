<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class MeetingAnalytic extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'meeting_id',
        'total_duration_minutes',
        'total_participants',
        'unique_patients',
        'average_engagement',
        'metrics',
        'calculated_at',
    ];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'calculated_at' => 'datetime',
        'metrics' => 'array',
        'average_engagement' => 'float',
    ];

    /**
     * Scope a query to analytics calculated recently.
     */
    public function scopeRecent(Builder $query): Builder
    {
        return $query->orderByDesc('calculated_at');
    }

    /**
     * Scope analytics that show high engagement.
     */
    public function scopeHighEngagement(Builder $query, float $threshold = 85.0): Builder
    {
        return $query->where('average_engagement', '>=', $threshold);
    }

    /**
     * Relationship: meeting the analytics belong to.
     */
    public function meeting(): BelongsTo
    {
        return $this->belongsTo(Meeting::class);
    }
}
