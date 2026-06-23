<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    protected $fillable = ['name', 'experience', 'bio', 'agency_id'];

    /** @use HasFactory<\Database\Factories\CoachFactory> */
    use HasFactory;

    public function agency() {
        return $this->belongsTo(Agency::class);
    }
}