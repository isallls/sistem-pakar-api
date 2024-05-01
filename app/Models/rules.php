<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rules extends Model


{
    use HasFactory;
    protected $fillable = [
        // 'rules_id',
        'indication_id',
        'diseas_id'
    ];
    public function indication(){
        return $this->hasOne(indication::class,'indication_id','id');
        // indication_id yang pertama mengarah ke indication_id di table rules || indication_id ke dua mengarah ke indication_id di table indication
    }
    public function diseas(){
        return $this->hasOne(diseas::class,'diseas_id','id');
        // return $this->hasOne()
    }
}
