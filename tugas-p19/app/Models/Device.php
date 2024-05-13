<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $fillable = ['name'];

    public function logs()
    {
        return $this->hasMany(Log::class);
    }
}
