<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsuranceCoverClause extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $fillable = ['insurance_cover_id', 'title'];

    // PARENT
    public function insuranceCover(){
        return $this->belongsTo(InsuranceCover::class, 'insurance_cover_id');
    }

    public function conditions(){
        return $this->hasMany(InsuranceClauseReference::class, 'id');
    }
}
