<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'id_item';
    
    protected $fillable = [
        'ip', 'type', 'description', 'state',
    ];
}
