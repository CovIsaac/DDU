<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class MeetingParticipant extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'meeting_id',
        'user_id',
        'full_name',
        'email',
        'phone_number',
        'role',
        'status',
        'invited_at',
        'joined_at',
        'left_at',
        'metadata',
    ];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'invited_at' => 'datetime',
        'joined_at' => 'datetime',
        'left_at' => 'datetime',
        'metadata' => 'array',
    ];

    /**
     * Scope a query to filter participants by role.
     */
    public function scopeForRole(Builder $query, string $role): Builder
    {
        return $query->where('role', $role);
    }

    /**
     * Scope a query to confirmed participants.
     */
    public function scopeConfirmed(Builder $query): Builder
    {
        return $query->where('status', 'confirmed');
    }

    /**
     * Relationship: meeting the participant belongs to.
     */
    public function meeting(): BelongsTo
    {
        return $this->belongsTo(Meeting::class);
    }

    /**
     * Relationship: user when participant is registered in the platform.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
