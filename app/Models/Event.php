<?php

namespace App\Models;

use App\Models\User;
use App\Models\Event;
use App\Models\Comment;
use Awcodes\Curator\Models\Media;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;
    protected $guarded=[];

    protected $casts=[
        'viewable_by'=> 'array',
        'seo_tags'=> 'array',
    ];

    public function image()
    {
        return $this->belongsTo(Media::class, 'image_id', 'id');
    }

    public function who_created()
    {
        return $this->belongsTo(User::class,'created_by');
    }

    public static function get_admin_events()
    {
        if(Auth::user())
        {
            return Event::query()->whereRaw("JSON_EXTRACT(viewable_by, '$[0].users') LIKE '%\"".Auth::user()->id."\"%'")
           ->whereRaw("active = 1")->orWhere('created_by',Auth::user()->id)->with('image');
        }
        else
        {
            return Event::query()->where('active',1)->with('image');
        }
    }


 public function user()
    {
        return $this->belongTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }


}
