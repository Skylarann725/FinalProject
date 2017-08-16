<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public $timestamps = true;
    protected $table = 'user_status';
    protected $guarded = 'id';
}