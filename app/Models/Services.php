<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDelets;

class Services extends Model
{
    use SoftDelets;
    protected $fillable = [
        'name',
        'price',
        'description',
    ];
}
