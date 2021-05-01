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
        'presentation_id',
        'intervention_id',
        
    ];
    public function produit()
    {
        return $this->belongsTo(Produits::class, 'produit_id', 'id');
    }

    public function presentation()
    {
        return $this->belongsTo(Presentation::class, 'presentation_id', 'id');
    }

    public function intervention()
    {
        return $this->belongsTo(Intervention::class, 'intervention_id', 'id');
    }

}
