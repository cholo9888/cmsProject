<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckUp extends Model
{
    use HasFactory;
    protected $fillable = [
        'r1',
        'r2',
        'r3',
        'r4',
        'r5',
        'r6',
        'r7',
        'r8',
        'r9',
        'r10',
        'r11',
        'r13',
        'r14',
        'r15',
        'r16',
        'r17',
        'r18',
        'r19',
        'r20',
        'r21',
        'r22',
        'r23',
        'r24',
        'r25',
        'machine_id',
    ];
    public function Machine(){
        return $this->belongsTo('App\Models\Machine');
    }
}
