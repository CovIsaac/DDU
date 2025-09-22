<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

class Meeting extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'dentist_id',
        'title',
        'description',
        'treatment_type',
        'location',
        'is_virtual',
        'video_conference_link',
        'scheduled_at',
        'duration_minutes',
        'status',
        'follow_up_required',
        'follow_up_notes',
        'reminders',
    ];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'scheduled_at' => 'datetime',
        'is_virtual' => 'boolean',
        'follow_up_required' => 'boolean',
        'reminders' => 'array',
    ];

    /**
     * Scope a query to only include meetings scheduled from now on.
     */
    public function scopeUpcoming(Builder $query): Builder
    {
        return $query->where('scheduled_at', '>=', Carbon::now())->orderBy('scheduled_at');
    }

    /**
     * Scope a query to meetings that still require follow-up actions.
     */
    public function scopePendingFollowUp(Builder $query): Builder
    {
        return $query->where('follow_up_required', true)->whereNull('follow_up_notes');
    }

    /**
     * Relationship: dentist responsible for the meeting.
     */
    public function dentist(): BelongsTo
    {
        return $this->belongsTo(User::class, 'dentist_id');
    }

    /**
     * Relationship: participants for the meeting.
     */
    public function participants(): HasMany
    {
        return $this->hasMany(MeetingParticipant::class);
    }

    /**
     * Relationship: notes linked to the meeting.
     */
    public function notes(): HasMany
    {
        return $this->hasMany(MeetingNote::class);
    }

    /**
     * Relationship: analytics summary for the meeting.
     */
    public function analytics(): HasOne
    {
        return $this->hasOne(MeetingAnalytic::class);
    }
}
