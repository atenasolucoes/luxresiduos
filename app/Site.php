<?php

namespace luxresiduos;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    public $timestamps = false;
    protected  $fillable = ['home_eng_ambiental', 'home_seguranca', 'home_engenharia', 'home_gerenciamento', 'institucional_quem_somos', 'institucional_resumo_quem_somos', 'institucional_missao', 'institucional_visao', 'institucional_valores', 'servicos_eng_ambiental', 'servicos_seguranca', 'servicos_engenharia', 'servicos_gerenciamento','venda_texto','contato_telefone', 'contato_whatsapp','contato_email', 'contato_endereco'];
}
