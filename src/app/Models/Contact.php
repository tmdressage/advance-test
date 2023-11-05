<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'gender',
        'email',
        'postcode',
        'address',
        'building_name',
        'opinion'
    ];

    public static $rules = array(
        'fullname'  => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255'],
        'postcode' => ['required'],
        'address' => ['required', 'string', 'max:255'],
        'building_name' => ['nullable', 'string', 'max:255'],
        'opinion' => ['required', 'string', 'max:120'],
    );
}