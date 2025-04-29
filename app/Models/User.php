<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Testimony;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;


 const ROLE_ADMIN = 'super-admin';

const ROLE_USER = 'admin';


const ROLES = [
self::ROLE_ADMIN => 'super-admin',
self::ROLE_USER => 'admin',

];

protected $guarded=[];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    //     'role',

    // ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
         'password' => 'hashed',
    ];

    public function can_publish():bool
    {
        if($this->can_publish==true || $this->can_publish==1)
        {
            return true;
        }
        return false;
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
    public function testimony()
    {
        return $this->belongsTo(Testimony::class);
    }

    public function pages()
    {
        return $this->hasMany(Page::class,'created_by');
    }

    public function page_updated()
    {
        return $this->hasMany(Page::class,'updated_by');
    }
}
