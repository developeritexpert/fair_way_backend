<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MlsProperty extends Model
{

    protected $fillable = [
        'listing_key',
        'listing_id',
        'originating_system',
        'mls_status',
        'standard_status',
        'mlg_can_view',
        'modification_timestamp',
        'list_price',
        'original_list_price',
        'previous_list_price',
        'bedrooms',
        'bathrooms_full',
        'bathrooms_half',
        'bathrooms_total',
        'living_area',
        'lot_size_sqft',
        'year_built',
        'property_type',
        'property_sub_type',
        'street_number',
        'street_name',
        'street_suffix',
        'city',
        'state',
        'postal_code',
        'country',
        'latitude',
        'longitude',
        'list_agent_key',
        'list_agent_name',
        'list_office_key',
        'list_office_name',
        'raw_json'
    ];

    protected $casts = [
        'raw_json' => 'array',
        'mlg_can_view' => 'boolean',
        'modification_timestamp' => 'datetime'
    ];

    public function media()
    {
        return $this->hasMany(
            MlsPropertyMedia::class,
            'listing_key',
            'listing_key'
        )->orderBy('order_index');
    }
}
