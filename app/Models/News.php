<?php

namespace App\Models;

use App\Models\User;
use Awcodes\Curator\Models\Media;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
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
}
