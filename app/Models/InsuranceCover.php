<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsuranceCover extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $fillable = ['insurance_policy_id', 'name', 'description', 'premium'];

    public $with     = ['insurancePolicy', 'insuranceCoverClauses'];

    // PARENT
    public function insurancePolicy(){
        return $this->belongsTo(InsurancePolicy::class, 'insurance_policy_id');
    }

    // CHILDREN
    public function insuranceCoverClauses(){
        return $this->hasMany(InsuranceCoverClause::class, 'id');
    }

    // SCOPES
    public static function scopeFilter($query, $insurance){
        $query->when($insurance ?? false, 
            fn($query, $name) => 
                $query->whereHas('insurancePolicy', 
                    fn($query) => $query->where('name', $name)
                )
        );
    }
}
