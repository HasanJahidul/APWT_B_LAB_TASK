<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    const CREATED_AT = 'date_added';
    const UPDATED_AT = 'last_updated';
}
