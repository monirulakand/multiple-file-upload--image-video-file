<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoModel extends Model
{
    public $table='video';
    public $primaryKey='id';
    public $incrementing=true;
    public $keyType='id';
    public $timestamps=false;
}
