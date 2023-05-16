<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $fillable = [
        'operator_name',
        'fuel',
        'shift',
        'start',
        'machine_name',
        'end',
        'b1',
        'b2',
        'b3',
        'b4',
        'b5',
        'b6',
        'totalordercost',
        'red',
        'total',
        'checkup_id',
        'capacity',
        'status',
        'limestone_toonage',
        'redsoil_tonage',
        'grand_total',
    ];
}
