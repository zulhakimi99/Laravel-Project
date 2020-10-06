<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iphone extends Model
{
    protected $fillable = ['image','about','price','desc'];
    protected $table = 'iphones';
}
