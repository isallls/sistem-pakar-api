<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class relation extends Model
{
    use HasFactory;
    protected $fillable = [
        'relation_id',
        'indication_id',
        'diseas_id'
    ];

}
