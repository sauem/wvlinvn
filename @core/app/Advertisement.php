<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    protected $table = 'advertisements';
    protected $fillable = ['type','size','image','slot','embed_code','redirect_url','click','impression','status','title'];
}
