<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'family-name',
        'first-name',
        'gender',
        'email',
        'post',
        'address',
        'type',
        'content'
    ];
}
