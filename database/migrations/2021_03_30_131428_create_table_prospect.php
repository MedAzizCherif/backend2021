<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProspect extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prospects', function (Blueprint $table) {
            $table->id();
            $table->string('codeP');
            $table->string('raisonsocialeP');
            $table->enum('typeP', array('prospect', 'client'));
            $table->enum('etatP', array('actif', 'inactif'));
            $table->string('adresseP');
            $table->string('codepostalP');
            $table->string('villeP');
            $table->enum('paysP', array('tunisie', 'france','italie'));
            $table->string('matriculefiscaleP');
            $table->string('registrecommerceP');
            $table->enum('regimeP', array('40', '48'));
            $table->enum('formejuridiqueP', array('entreprise individuele', 'SARL','SA','SUARL'));
            $table->enum('secteurP', array('agroalimentaire', 'service','mecanique'));
            $table->string('activiteP');
            $table->enum('tvaP', array('assujetti', 'non assujetti','exonore','ensuspension'));
            $table->string('responsableP');
            $table->integer('telephonefixeP');
            $table->integer('telephonemobileP');
            $table->string('telecopieP');
            $table->string('sitewebP');
            $table->string('adresseelectroniqueP');
            $table->enum('monnaieP', array('TND', 'DOLLAR','EURO'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prospect');
    }
}
