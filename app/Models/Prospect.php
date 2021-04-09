<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prospect extends Model
{
    use HasFactory;

    
    protected $table = "prospects";
    protected $fillable = [
        'codeP',
        'raisonsocialeP',
        'typeP',
        'etatP',
        'adresseP',
        'codepostalP',
        'villeP',
        'paysP',
        'matriculefiscaleP',
        'registrecommerceP',
        'regimeP',
        'formejuridiqueP',
        'secteurP',
        'activiteP',
        'tvaP',
        'responsableP',
        'telephonefixeP',
        'telephonemobileP',
        'sitewebP',
        'adresseelectroniqueP',
        'monnaieP',
        // 'updated_at',
        // 'created_at',
    ];

}
