<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position_id',
        'date_of_employment',
        'phone_number',
        'email',
        'salary',
        'photo',
    ];

    protected $hidden = [
      'admin_created_id',
      'admin_updated_id',
    ];
}
