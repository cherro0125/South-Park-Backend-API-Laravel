<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'first_name','last_name','age','imageUrl','isAlive','skin', 'created_at', 'updated_at'
    ];



}
