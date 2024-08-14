<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'inquiry_type',
        'information',
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'select_city',
        'select_area',
        'select_state',
        'select_country',
        'zip_code',
        'property_type',
        'max_price',
        'minimum_size_sq_ft',
        'number_of_baths',
        'number_of_beds',
        'message',
    ];
}
