<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    // table
//    protected $table = 'event_status';

    protected $fillable = ['event_id', 'user_id', 'event_status',];

    public function user() {
        return $this->hasMany(User::class);
    }

    public function addUser($event_id, $user_id)
    {
        return $this->create(compact('event_id', 'user_id'));
    }

    public function TopEvents() {
        return $this->latest()->limit(2)->get();

    }
}
