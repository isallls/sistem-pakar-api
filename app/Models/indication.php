<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class indication extends Model
{
    use HasFactory;
    protected $fillable = [
        'indication_id',
        'indication'
    ];
    public function indication(){
        return $this->hasOne(indication::class, 'id', 'indication_id');
    }
}
