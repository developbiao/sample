<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = ['content']; // Because laravel try to protected so we need allow user content filed
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
