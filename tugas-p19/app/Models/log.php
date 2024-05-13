<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = ['device_id', 'time', 'data'];

    public function device()
    {
        return $this->belongsTo(Device::class);
    }
}
