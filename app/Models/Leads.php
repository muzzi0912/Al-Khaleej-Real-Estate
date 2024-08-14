<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Leads extends Model
{
    use HasFactory;
    protected $table = 'leads';

    protected $fillable = [
        'type',
        'name',
        'email',
        'phone',
        'message',
        'project_name',
        'projects_lug',
    ];

}
