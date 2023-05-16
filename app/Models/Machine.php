<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    use HasFactory;
    protected $fillable = [
        'operator_name',
        'fuel',
        'shift',
        'start',
        'machine_name',
        'capacity',
    ];
    public function checkup(){
        return $this->hasOne('App\Models\CheckUp');
    }
}
