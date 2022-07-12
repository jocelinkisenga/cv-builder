<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Job extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'job_title', 'company_name','job_description', 'started_at', 'ended_at' ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
