<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presentation extends Model
{
    use HasFactory;
    protected $table = "presentations";
    protected $fillable = [
        'type_presentation',
        'heure',
        'jour',
        'forfait',
        'prixHT',
    ];
}
