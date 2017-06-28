<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Technique extends Model
{
    protected $table = "techniques";
    public $incrementing = false;

    protected $guarded = ["id"];

    use Uuids, SoftDeletes;

    public function user() {
        return $this->belongsTo('App\User');
    }

}
