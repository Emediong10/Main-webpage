<?php

namespace App\Models;

use App\Models\Event;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EventType extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function event()
    {
        return $this->hasMany(Event::class);
    }
}
