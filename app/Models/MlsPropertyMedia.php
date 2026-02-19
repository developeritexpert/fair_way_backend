<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MlsPropertyMedia extends Model
{
    protected $fillable = [
        'listing_key',
        'media_key',
        'media_type',
        'media_url',
        'order_index',
        'local_path',
        'modification_timestamp',
    ];

    protected $casts = [
        'modification_timestamp' => 'datetime',
    ];

    public function property()
    {
        return $this->belongsTo(
            MlsProperty::class,
            'listing_key',
            'listing_key'
        );
    }
}
