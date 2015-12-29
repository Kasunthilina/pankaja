<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concern extends Model
{
    /**
     * Get the user that owns the concerns.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
