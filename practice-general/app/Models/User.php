<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Profile;
use App\Models\Post;
use App\Models\Comment;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public function getAllUsers($sortByArr = null){

        $users = User::with('posts', 'comments');

        $orderBy = 'users.name';
        $orderType = 'desc';
        
        if(!empty($sortByArr) && is_array($sortByArr)){
            if(!empty($sortByArr['sortBy']) && !empty($sortByArr['sortType'])){
                $orderBy = trim($sortByArr['sortBy']);
                $orderType = trim($sortByArr['sortType']);
            }
        }

        $users = $users->orderBy( $orderBy, $orderType);
     
        $users = $users->paginate(5);
        // dd($users);
        return $users;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'age',
        'email',
        'password',
        'birthday',
        'status',
        'roles'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile()
    {
        return $this->hasOne(Profile::class,'user_id','id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class,'user_id','id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class,'user_id','id');
    }
}
