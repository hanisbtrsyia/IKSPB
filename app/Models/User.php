<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\QueryException;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    public $incrementing=false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'email',
        'role',
        'password',
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

    public static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            if (!$user->id) {
                while (true) {
                    try {
                        $latest = User::where('role', $user->role)->latest('id')->first();

                        $uid = 1000;

                        if ($latest != null && $latest->exists()) {
                            $uid = random_int(1001, 9999);
                        }
                        $user->id = ($user->role !== 'pelanggan' ? 'S': 'C').$uid;

                        break;

                    } catch (QueryException $exception) {
                        continue;
                    }
                }
            }
        });
    }

    public function getPictureAttribute($value){
        if($value){
            return asset('users/images/'.$value);
        }else{
            return asset('users/images/no-image.png');
        }
    }
}