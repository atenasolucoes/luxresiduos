<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('home_eng_ambiental')->nullable();
            $table->longText('home_seguranca')->nullable();
            $table->longText('home_engenharia')->nullable();
            $table->longText('home_gerenciamento')->nullable();
            $table->longText('institucional_quem_somos')->nullable();
            $table->longText('institucional_resumo_quem_somos')->nullable();
            $table->longText('institucional_missao')->nullable();
            $table->longText('institucional_visao')->nullable();
            $table->longText('institucional_valores')->nullable();
            $table->longText('servicos_eng_ambiental')->nullable();
            $table->longText('servicos_seguranca')->nullable();
            $table->longText('servicos_engenharia')->nullable();
            $table->longText('servicos_gerenciamento')->nullable();
            $table->longText('venda_texto')->nullable();
            $table->longText('contato_telefone')->nullable();
            $table->longText('contato_whatsapp')->nullable();
            $table->longText('contato_email')->nullable();
            $table->longText('contato_endereco')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sites');
    }
}
