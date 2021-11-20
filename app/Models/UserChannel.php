<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class UserChannel extends Model
{
    const TYPE_SLACK = 'SLACK';
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;
    public $table = 'user_channels';

    public $fillable = [
        'user_id',
        'type',
        'data',
        'status',
    ];

    public function getDatas()
    {
        return json_decode($this->data, true);
    }
}
