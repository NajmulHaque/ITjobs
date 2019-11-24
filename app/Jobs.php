<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    protected $table='jobs';
    public $primaryKey='id';
    public $timestamps=true;
}
