<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Timer;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'user_id'];
    protected $with = ['user'];

    public function user() {
        return $this->belongsTo(User::class);
    }


    public function timers() {
        return $this->hasMany(Timer::class);

    }

    public function scopeMine($query) {
        return $query->whereUserId(auth()->user()->id);
    }

}
