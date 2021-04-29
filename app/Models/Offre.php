<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use HasFactory;
    protected $table = "offres";
    protected $fillable = [
        'produit_id',
        'monnaie_id',
        'presentation_id',
        'intervention_id',
        
    ];
}
