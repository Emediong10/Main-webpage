<?php

namespace App\Models;

use App\Models\User;
use App\Models\Event;
use Awcodes\Curator\Models\Media;
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

    public static function get_admin_news()
    {
        if(Auth::user()->role_id>2)
        {
            return Event::query()->whereRaw("JSON_EXTRACT(viewable_by, '$[0].users') LIKE '%\"".Auth::user()->id."\"%'")
           ->whereRaw("is_active = 1")->orWhere('created_by',Auth::user()->id)->with('image');
        }
        else
        {
            return Event::query()->where('is_active',1)->with('image');
        }
    }

    // public static function get_organogram_news($organogram)
    // {
    //     if($organogram=="*")
    //     {
    //        News::query()->where('is_active',1);
    //     }
    //     else
    //     {
    //       return News::query()->WhereRaw("JSON_EXTRACT(viewable_by, '$[0].organogram') LIKE '%\"".$organogram."\"%'")->whereRaw("is_active = 1");
    //     }
    // }
 public function user()
    {
        return $this->belongTo(User::class);
    }
}
