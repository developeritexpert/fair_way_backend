<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MlsReplicationState extends Model
{
    protected $fillable = [
        'resource',
        'originating_system',
        'last_modification_timestamp'
    ];

    protected $casts = [
        'last_modification_timestamp' => 'datetime'
    ];
}
