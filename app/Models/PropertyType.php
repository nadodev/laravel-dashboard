<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static latest()
 */
class PropertyType extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'type_name',
        'type_icon',
    ];

}
