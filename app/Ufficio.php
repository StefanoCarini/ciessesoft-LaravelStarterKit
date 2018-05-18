<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Ufficio
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Denominazionema[] $denominazione
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Posizione[] $posizioni
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Posizione[] $ubicazione
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $user
 */
class Ufficio extends Model
{
    protected $fillable = [
        'denominazione', 'note'
    ];


    public function user()
    {
        return $this->hasMany('App\User', 'office_id', 'id');
    }
}
