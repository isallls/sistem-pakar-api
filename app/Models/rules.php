<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rules extends Model
{
    use HasFactory;
    protected $fillable = [
        'rules_id',
        'indication_id',
        'diseas_id'
    ];
}
