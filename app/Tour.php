<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Tour extends Model
{
     use Notifiable;
 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'address','time','price','detail','type_tour_id','destiny_id'
    ];
}
