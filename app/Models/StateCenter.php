<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StateCenter extends Model
{
    protected $guarded = [];

        public function state()
            {
            return $this->belongsToMany(state::class,'id','state_id');
            }

            public function center()
            {
                return $this->belongsToMany(center::class,'id','center_id');
            }
}
