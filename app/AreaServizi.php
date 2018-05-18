<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\AreaServizi
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $user
 * @mixin \Eloquent
 */
class AreaServizi extends Model
{
    protected $fillable = [
        'denominazione', 'note'
    ];

    protected $table = 'areeServizi';

    public function user()
    {
        return $this->hasMany('App\User', 'areaServizi_id', 'id');
    }
}
