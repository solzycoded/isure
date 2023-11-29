<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsuranceClauseReference extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $fillable = ['header', 'option'];

    // PARENT
    public function header(){
        return $this->belongsTo(InsuranceCoverClause::class, 'header');
    }
}
