<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListYourProperty extends Model
{
    use HasFactory;

    protected $table = 'listyourproperty';

    protected $fillable = [
        'listing_type',
        'user_type',
        'first_name',
        'last_name',
        'email',
        'mobile',
        'property_type',
        'max_price',
        'minimum_size',
        'number_of_beds',
        'number_of_baths',
        'message',
    ];
}
