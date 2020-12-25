<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Project;

class Timer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'user_id', 'project_id', 'started_at', 'stopped_at'];

    protected $dates = ['started_at', 'stopped_at'];
    protected $with = ['user'];

    public functon user() {
        return $this->belongsTo(User::class);
    }

    public function project() {
        return $this->belongsTo(Project::class);

    }

    public function scopeMine($query) {
        return $query->whereUserId(auth()->user()->id);
    }

    public function scopeRunning(){
        return $query->whereNull('stopped_at');
    }
}
