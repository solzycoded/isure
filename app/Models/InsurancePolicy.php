<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InsurancePolicy extends Model
{
    public $timestamps = false;

    public $fillable = ['name', 'default_premium', 'description', 'terms_and_conditions'];

    // CHILDREN
    public function insuranceCovers(){
        return $this->hasMany(InsuranceCover::class, 'id');
    }

    // SCOPES
    public function scopefilter($query, $filter){
        $query->when($filter['name'] ?? false, 
            fn($query, $name) =>
                $query->where('name', $name)
        );
    }
}
