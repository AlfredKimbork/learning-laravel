<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    protected $fillable = ['name', 'description', 'location'];
    /** @use HasFactory<\Database\Factories\AgencyFactory> */
    use HasFactory;

    public function coaches() {
        return $this->hasMany(Coach::class);
    }
}
