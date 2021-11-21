<?php

namespace App\Models;

use Firebase\JWT\JWT;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Osiset\ShopifyApp\Contracts\ShopModel as IShopModel;
use Osiset\ShopifyApp\Traits\ShopModel;

class User extends Authenticatable implements IShopModel
{
    use HasApiTokens, HasFactory, Notifiable;
    use ShopModel;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'format_message',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getJWTtoken(){
        $token = JWT::encode([
            'id' => $this->id,
        ], config('app.jwt_key'));
        return $token;
    }

    public function getShopifyAppUrl() {
        return route('home', ['shop' => $this->getDomain()->toNative()]);
    }

//    public function channels(){
//        return $this->hasMany(UserChannel::class, 'user_id', 'id');
//    }
    public function channelSlack(){
        return $this->hasOne(UserChannel::class, 'user_id', 'id')
            ->where('user_channels.type', UserChannel::TYPE_SLACK);
    }
}
