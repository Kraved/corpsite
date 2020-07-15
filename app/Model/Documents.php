<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
