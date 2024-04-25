<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class diseas extends Model
{
    use HasFactory;
    protected $fillable = [
        'diseas_id', 
        'diseas'
    ];

    /**
     * Get all of the comments for the diseas
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rules(): HasMany
    {
        return $this->hasMany(rules::class, 'diseas_id', 'id');
    }
}
