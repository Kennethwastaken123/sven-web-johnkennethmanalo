<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroomingAppointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'frequency',
        'date_start',
        'days',
        'times',
        'notes',
    ];
}
